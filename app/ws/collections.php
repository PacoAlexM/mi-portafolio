<?php

/**
 *
 * initCollection:
 * Esta función se encargará entregar una
 * coleccion de datos traidos desde archivos
 * .json de forma aleatoria y segun la cantidad
 * especificada por la variable $take.
 */
function initCollection ($take = 0) {
	try {
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

		return (object)[ "success" => true, "message" => "Se ha consultado la API.", "data" => $jsonData ];
	} catch (Exception $e) {
		return (object)[ "success" => false, "message" => $e->getMessage(), "data" => null ];
	}
}

/**
 *
 * initCollectionRawHTML:
 * Esta función se encargará de llenar y
 * darle formato a los datos de la colección
 * proporcionada.
 */
function initCollectionRawHTML ($sourceCollection) {
	if (empty($sourceCollection)) return (object)[ "success" => false, "message" => $sourceCollection->message, "data" => null ];

	try {
		/**
		 *
		 * Coleccion formateada para retornar.
		 */
		$newCollection = [
			"description" => $sourceCollection->data->collection_description,
			"dataHeaders" => [],
			"dataRows" => []
		];

		/**
		 *
		 * Cargar configuraciones de la coleccion.
		 */
		$columns = $sourceCollection->data->collection_configuration->columns;
		$snippets = $sourceCollection->data->collection_configuration->data->snippets;
		$conditions = $sourceCollection->data->collection_configuration->data->conditions;
		$collectionItems = $sourceCollection->data->collection_items;

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

		return (object)[ "success" => true, "message" => "Se ha consultado la API.", "data" => (object)$newCollection ];
	} catch (Exception $e) {
		return (object)[ "success" => false, "message" => $e->getMessage(), "data" => null ];
	}
}
