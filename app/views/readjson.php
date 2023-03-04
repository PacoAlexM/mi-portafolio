<?php

header("Content-Type: application/json; charset=utf-8");

$_operators = [
	"==" => function ($a, $b) { return $a == $b; },
	"===" => function ($a, $b) { return $a === $b; },
	"!=" => function ($a, $b) { return $a != $b; },
	"!==" => function ($a, $b) { return $a != $b; },
	">" => function ($a, $b) { return $a > $b; },
	">=" => function ($a, $b) { return $a >= $b; },
	"<" => function ($a, $b) { return $a < $b; },
	"<=" => function ($a, $b) { return $a <= $b; }
];

$jsonFile = file_get_contents("../app/collections/songs_i_like.json");
$isArrayAssociative = false;
$jsonData = json_decode($jsonFile, $isArrayAssociative);

foreach ($jsonData->collection_configuration->data->coditions as $key => $value) {
	for ($i = 0; $i < count($jsonData->collection_items); $i++) {
		$operator = $value->operator;
		$valueToCompare = $value->value_to_compare;
		$columName = $value->column_name;
		$columnData = $jsonData->collection_items[$i]->{$columName};
		$replaceWith = $value->replace_with;

		if ($_operators[$operator]($valueToCompare, $columnData))
			$jsonData->collection_items[$i]->{$columName} = $replaceWith;
	}
}

print_r($jsonData->collection_items);
