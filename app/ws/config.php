<?php

/**
 *
 * Clase para la configuración
 * entera del sitio.
 */
class Configuracion {
	/**
	 *
	 * Costantes del sitio, url's
	 * de vistas, webservice's,
	 * colecciones, configuración
	 * de base de datos, etc.
	 */
	const MAIN_URL = "/";
	const MAIN_SCRIPT = "index.php";
	const APP_URL = "../app/";
	const BIN_URL = self::APP_URL . "bin/";
	const WS_URL = self::APP_URL . "ws/";
	const VIEWS_URL = self::APP_URL . "views/";
	const EXCEPTIONS_VIEWS_URL = self::APP_URL . "httpExceptions/";
	const CSS_URL = self::MAIN_URL . "assets/css/";
	const JS_URL = self::MAIN_URL . "assets/js/";
	const IMG_URL = self::MAIN_URL . "assets/img/";
	const FA_URL = self::MAIN_URL . "assets/fontawesome/css/";
	const GET_METHOD = "GET";
	const POST_METHOD = "POST";
	const DB_HOST = "locahost";
	const DB_PORT = "3306";
	const DB_USER = "root";
	const DB_PASS = "";
	const DB_NAME = "my_database";

	private $arrayGet = [
		self::MAIN_URL => function () {}
	];
	private $arrayPost = [
		"" => function () {}
	];

	public $randomKey;
	public $collection;
	public $htmlCollection;

	/**
	 *
	 * Constructor de la clase.
	 */
	public function __construct () {
		$this->randomKey = $this->initRandomKey();
		$this->collection = [];
		$this->htmlCollection = [];

		$this->initSession();
	}

	/**
	 *
	 * checkSession:
	 * Checar si la existe una sesión
	 * activa.
	 *
	 * initSession:
	 * Inicia una sesión.
	 *
	 * closeSession:
	 * Elimina la sesión activa.
	 */
	private function checkSession () {
		return session_status() === PHP_SESSION_ACTIVE;
	}

	public function initSession () {
		if ($this->checkSession()) return true;

		session_start();

		return true;
	}

	public function closeSession () {
		if (!$this->checkSession()) return true;

		session_destroy();

		return true;
	}

	/**
	 *
	 * sanitizeRequestUri:
	 * Esta función limpiará de
	 * caracteres especiales de
	 * la url y asi tener url's
	 * "bonitas".
	 *
	 * initRoute:
	 * Esta función servirá para
	 * devolver vistas o repuestas
	 * dependiendo del tipo de
	 * petición (GET / POST)
	 * En caso de no manejar alguna
	 * de las formas de petición,
	 * se lanzará una excepción.
	 */
	private function sanitizeRequestUri ($uri) {
		$newUri = preg_replace("/[\x20-\x2d\x3a-\x40\x5b-\x60]/g", "", $uri);
	}

	public function initRoute () {
		$requestMethod = $_SERVER["REQUEST_METHOD"];

		if ($requestMethod === self::GET_METHOD) {
		} else if ($requestMethod === self::POST_METHOD) {
		} else {
		}
	}

	/**
	 *
	 * Inicio de variable de sesion
	 * para guardar valores a usar en
	 * el sitio.
	 */
	public function initRandomKey () {
		$randomKeyValue = "";
		$randomKeyLenght = rand(4, 8);
		$areAllEquals = false;

		for ($i = 0; $i < $randomKeyLenght; $i++) $randomKeyValue .= rand(0, 9);

		/**
		 *
		 * Si todos los caracteres de la clave
		 * al easteregg son iguales entonces se
		 * hará una recursiva, caso constrario
		 * se le asignará el valor a la variable
		 * de sesión.
		 */
		foreach ([0, 1, 2, 3, 4, 5, 6, 7, 8, 9] as $key => $value)
			if ($areAllEquals = (substr_count($randomKeyValue, $value) == $randomKeyLenght)) break;

		if ($areAllEquals) $randomKeyValue = $this->initRandomKey();
		
		return $randomKeyValue;
	}

	/**
	 *
	 * Esta función se encargará entregar una
	 * coleccion de datos traidos desde archivos
	 * .json de forma aleatoria y segun la cantidad
	 * especificada por la variable $take.
	 */
	public function initCollection ($take = 0) {
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

		$this->collection = $jsonData;
	}

	/**
	 *
	 * Esta función se encargará de llenar y
	 * darle formato a los datos de la colección
	 * proporcionada.
	 */
	public function initCollectionRawHTML () {
		/**
		 *
		 * Coleccion formateada para retornar.
		 */
		$newCollection = [
			"description" => $this->collection->collection_description,
			"dataHeaders" => [],
			"dataRows" => []
		];

		/**
		 *
		 * Cargar configuraciones de la coleccion.
		 */
		$columns = $this->collection->collection_configuration->columns;
		$snippets = $this->collection->collection_configuration->data->snippets;
		$conditions = $this->collection->collection_configuration->data->conditions;
		$collectionItems = $this->collection->collection_items;

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

		$this->htmlCollection = (object)$newCollection;
	}
}

/**
 *
 * Crear la instancia de la
 * clase de configuración.
 */
$config = new Configuracion();
