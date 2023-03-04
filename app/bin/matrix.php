<?php

$m = $_POST["matrix"];

try {

	foreach ($m as $array)
		foreach ($array as $number) {

			if (strlen($number) < 1) {

				echo json_encode(array("error" => "Un valor de la matriz no está asignada correctamente.", "success" => false));

				return false;
			}

			if (!is_numeric($number)) {

				echo json_encode(array("error" => "Un valor de la matriz no es numérico.", "success" => false));

				return false;
			}
		}

	for ($i = 0; $i < count($m); $i++) {

		$reverso = count($m[0]) - 1;

		for ($j = 0; $j < count($m[0]) - $i; $j++) {

			if (empty($m[$i][$reverso - $j])) {

				echo json_encode(array("error" => "División entre 0", "success" => false));

				return false;
			}

			$m[$i][$reverso - $j] /= $m[$i][$i];
		}

		if ($i < count($m) - 1)
			for ($j = 0; $j < count($m) - ($i + 1); $j++)
				for ($k = 0; $k < count($m[0]) - $i; $k++)
					$m[$i + $j + 1][$reverso - $k] += $m[$i][$reverso - $k] * ($m[$i + $j + 1][$i] * -1);
	}

	for ($i = 0; $i < count($m) - 1; $i++) {

		$reverso = count($m[0]) - 1;

		for ($j = 0; $j < $i + 1; $j++)
			for ($k = 0; $k < 2; $k++) {

				if ($k == 0) {

					$m[count($m) - ($i + 2)][$reverso - $k] += $m[count($m) - ($j + 1)][$reverso - $k] * ($m[count($m) - ($i + 2)][$reverso - ($j + 1)] * -1);

					continue;
				}

				$m[count($m) - ($i + 2)][$reverso - ($j + 1)] += $m[count($m) - ($j + 1)][$reverso - ($k + $j)] * ($m[count($m) - ($i + 2)][$reverso - ($j + 1)] * -1);
			}
	}

	echo json_encode(array("matrix" => $m, "success" => true));

	return true;
}

catch (Exception $e) {

	echo json_encode(array("error" => $e->getMessage(), "success" => false));

	return false;
}
