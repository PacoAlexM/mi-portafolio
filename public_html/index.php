<?php

/**
 *
 * Inicio de variable de sesion
 * para guardar valores a usar en
 * el sitio.
 */
session_start();

function initRamdomKey () {
	$randomKeyValue = "";
	$randomKeyLenght = rand(4, 8);

	for ($i = 0; $i < $randomKeyLenght; $i++) $randomKeyValue .= rand(0, 9);

	/**
	 *
	 * Si todos los caracteres dela clave
	 * al easteregg es 0 entonces que haga
	 * un recursiva, caso constrario que se
	 * le asigne el valor a la variable de
	 * sesion.
	 */
	if (substr_count($randomKeyValue, "0") == $randomKeyLenght) initRamdomKey();
	else {
		$_SESSION["KEY_TO_EASTEREGG_VALUE"] = $randomKeyValue;
		$_SESSION["KEY_TO_EASTEREGG_LENTGH"] = $randomKeyLenght;
		$_SESSION["HAVE_ACCESS_TO_EASTEREGG"] = false;
	}
}

/**
 *
 * Esta función se encargará entregar una
 * coleccion de datos traidos desde archivos
 * .json de forma aleatoria y segun la cantidad
 * especificada por la variable $take.
 */
function initCollection ($take = 0) {
	$_collections = [
		"furry_characters.json",
		"songs_i_like.json",
		"freestyle_soccer_tricks.json"
	];

	$randomJsonFile = $_collections[rand(0, (count($_collections) - 1))];
	$jsonFile = file_get_contents("../app/collections/" . $randomJsonFile);
	$isArrayAssociative = false;
	$jsonData = json_decode($jsonFile, $isArrayAssociative);

	/**
	 *
	 * En esta sección se seleccionarán
	 * los registros del json a mostrar
	 * aleatoriamente.
	 */
	$newCollection = [];
	$collectionItemsLength = count($jsonData->collection_items);

	for ($i = 0; $i < ($take > 0 && $take < $collectionItemsLength ? $take : $collectionItemsLength); $i++) {
		$indexOfItem = rand(0, (count($jsonData->collection_items) - 1));

		/**
		 *
		 * Si en el $newCollection no se
		 * encuentra el objeto seleccionado
		 * por el $indexOfItem, se agrega a
		 * la colección. Caso contrario se
		 * se vuelve a seleccionar
		 * aleatoriamente otro objeto.
		 */
		if (!in_array($jsonData->collection_items[$indexOfItem], $newCollection))
			$newCollection[] = $jsonData->collection_items[$indexOfItem];
		else $i--;
	}

	$jsonData->collection_items = $newCollection;

	return $jsonData;
}

/**
 *
 * Esta función se encargará de llenar y
 * darle formato a los datos de la colección
 * proporcionada.
 */
function initCollectionRawHTML ($sourceCollection) {
	/**
	 *
	 * Coleccion formateada para retornar.
	 */
	$newCollection = [
		"description" => $sourceCollection->collection_description,
		"dataHeaders" => [],
		"dataRows" => []
	];

	/**
	 *
	 * Cargar configuraciones de la coleccion.
	 */
	$columns = $sourceCollection->collection_configuration->columns;
	$snippets = $sourceCollection->collection_configuration->data->snippets;
	$conditions = $sourceCollection->collection_configuration->data->conditions;
	$collectionItems = $sourceCollection->collection_items;

	/**
	 *
	 * Lista de operadores logicos.
	 */
	$operators = [
		"==" => function ($a, $b) { return $a == $b; },
		"===" => function ($a, $b) { return $a === $b; },
		"!=" => function ($a, $b) { return $a != $b; },
		"!==" => function ($a, $b) { return $a !== $b; },
		">" => function ($a, $b) { return $a > $b; },
		">=" => function ($a, $b) { return $a >= $b; },
		"<" => function ($a, $b) { return $a < $b; },
		"<=" => function ($a, $b) { return $a <= $b; }
	];

	/**
	 *
	 * Inicia ciclo para cargar los nombres de las
	 * columnas de la coleccion.
	 */
	foreach ($columns as $columnsKey => $columnsValue) $newCollection["dataHeaders"][] = $columnsValue;

	/**
	 *
	 * Inicia ciclo para darle formato HTML
	 * de acuerdo a la configuración de los
	 * snippets.
	 */
	$dataRow = [];

	foreach ($collectionItems as $collectionItemsIndex => $collectionItemsValue) {
		$dataCells = [];

		/**
		 *
		 * $collectionItemKey = Columna
		 * $collectionItemValue = Valor
		 */
		foreach ($collectionItemsValue as $collectionItemKey => $collectionItemValue) {
			$column = $collectionItemKey;
			$data = $collectionItemValue;

			/**
			 *
			 * Ciclo para formatear la coleccion
			 * de acuerdo a los snippets configurados.
			 */
			foreach ($snippets as $snippetsIndex => $snippetsValue) {
				if ($snippetsValue->column_name == $column) {
					switch ($snippetsValue->method) {
						case "replace":
							$data = str_replace("{value}", $data, $snippetsValue->replace_with);
							break;
						case "for":
							$newValue = "";
							for ($i = 0; $i < $data; $i++) $newValue .= $snippetsValue->replace_with;
							$data = $newValue;
							break;
						case "case":
							for ($i = 0; $i < count($snippetsValue->replace_with); $i++) {
								if ($snippetsValue->replace_with[$i]->case == $data) {
									$data = str_replace("{value}", $data, $snippetsValue->replace_with[$i]->replace);
									break;
								}
							}
							break;
						case "when":
							for ($i = 0; $i < count($snippetsValue->replace_with); $i++) {
								if ($collectionItemsValue->{$snippetsValue->column_related} == $snippetsValue->replace_with[$i]->case) {
									$data = str_replace("{value}", $data, $snippetsValue->replace_with[$i]->replace);
									break;
								}
							}
							break;
					}
				}
			}

			/**
			 *
			 * Ciclo para formatear la coleccion
			 * de acuerdo a las condiciones de cada
			 * campo configurado.
			 */
			foreach ($conditions as $conditionsKey => $conditionsValue) {
				if ($conditionsValue->column_name == $column) {
					if ($operators[$conditionsValue->operator]($conditionsValue->value_to_compare, $data))
						$data = "<span class='badge text-bg-dark'>$conditionsValue->replace_with</span>";
				}
			}

			$dataCells[$column] = $data;
		}

		$dataRow[] = $dataCells;
	}

	$newCollection["dataRows"] = $dataRow;

	return (object)$newCollection;
}

function requestPath () {
	$request_uri = explode("/", trim($_SERVER["REQUEST_URI"], "/"));
	$script_name = explode("/", trim($_SERVER["SCRIPT_NAME"], "/"));
	$parts = array_diff_assoc($request_uri, $script_name);

	if (!$parts[0])
		return "/";

	$path = implode("/", $parts);

	if (($position = strpos($path, "?")) !== false)
		$path = substr($path, 0, $position);

	return $path;
}

/**
 *
 * Configuracion de variable de sesion
 * para el funcionamiento del sitio.
 */
$_SESSION["MAIN_URL"] = "/";
// $_SESSION["CSS_DIR"] = "/css/";
// $_SESSION["JS_DIR"] = "/js/";
// $_SESSION["IMG_DIR"] = "/img/";
// $_SESSION["FONT_AWESOME_DIR"] = "/font-awesome/";
$_SESSION["HAVE_ACCESS_TO_EASTEREGG"] = isset($_SESSION["HAVE_ACCESS_TO_EASTEREGG"]) ? $_SESSION["HAVE_ACCESS_TO_EASTEREGG"] : false;
$_SESSION["KEY_TO_EASTEREGG_VALUE"] = isset($_SESSION["KEY_TO_EASTEREGG_VALUE"]) ? $_SESSION["KEY_TO_EASTEREGG_VALUE"] : "";
$_SESSION["KEY_TO_EASTEREGG_LENTGH"] = isset($_SESSION["KEY_TO_EASTEREGG_LENTGH"]) ? $_SESSION["KEY_TO_EASTEREGG_LENTGH"] : 0;

/**
 *
 * Diccionario de rutas para web service.
 */
$_post = [
	"uploadF" => function () {
		include_once "../app/bin/file_uploads.php";
	},
	"getNewCollection" => function () {
		try {
			$jsonCollection = initCollectionRawHTML(initCollection($_POST["length"]));

			if (count((array)$jsonCollection) > 0) echo json_encode([ "isOk" => true, "message" => "Ok", "data" => $jsonCollection ]);
			else echo json_encode([ "isOk" => false, "message" => "No hay datos disponibles.", "data" => null ]);
		} catch (Exception $ex) {
			echo json_encode([ "isOk" => false, "message" => $ex->getMessage(), "data" => null ]);
		}
	},
	"poster" => function () {
		include_once "../app/bin/poster.php";
	},
	"toeasteregg" => function () {
		include_once "../app/bin/toeasteregg.php";
	},
	"matrix" => function () {
		include_once "../app/bin/matrix.php";
	},
	"string" => function () {
		include_once "../app/bin/makestring.php";
	},
	"uploadFilesSimpleAjaxUploader" => function () {
		include_once "../app/ws/uploadFiles.php";
	}
];

/**
 *
 * Diccionario de rutas para vistas.
 */
$_get = [
	"/" => function () {
		initRamdomKey();

		$jsonCollection = initCollection(10);
		$jsonCollectionRawHTML = initCollectionRawHTML($jsonCollection);

		include_once "../app/views/index.php";
	},
	"acerca/de/mi" => function () {
		include_once "../app/views/aboutme.php";
	},
	"easteregg" => function () {
		if ($_SESSION["HAVE_ACCESS_TO_EASTEREGG"]) include_once "../app/views/easteregg.php";
		else {
			header("HTTP/1.0 404 Not Found");

			include_once "../app/httpExceptions/404.php";
		}
	},
	"json" => function () {
		include_once "../app/views/readjson.php";
	},
	"indexnew" => function () {
		$jsonCollection = initCollection(10);
		$jsonCollectionRawHTML = initCollectionRawHTML($jsonCollection);

		include_once "../app/views/index2.php";
	}
];

if ($_SERVER["REQUEST_METHOD"] == "GET") {
	$path = requestPath();

	if (isset($_get[$path]) && is_callable($_get[$path])) $_get[$path]();
	else include "../app/httpExceptions/404.php";
} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$path = requestPath();

	if (isset($_post[$path]) && is_callable($_post[$path])) $_post[$path]();
	else header("HTTP/1.0 404 Not Found");
}
