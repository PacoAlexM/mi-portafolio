<?php

/**
 *
 * Clase para la configuración
 * entera del sitio.
 */
class Configuration {
	/**
	 *
	 * Costantes del sitio, url's
	 * de vistas, webservice's,
	 * colecciones, configuración
	 * de base de datos, etc.
	 */
	const MAIN_URL = "/";
	const MAIN_SCRIPT = self::MAIN_URL . "index.php";
	const APP_URL = "../app/";
	const BIN_URL = self::APP_URL . "bin/";
	const WS_URL = self::APP_URL . "ws/";
	const VIEWS_URL = self::APP_URL . "views/";
	const EXCEPTIONS_VIEWS_URL = self::APP_URL . "httpExceptions/";
	const CSS_URL = self::MAIN_URL . "css/";
	const JS_URL = self::MAIN_URL . "js/";
	const IMG_URL = self::MAIN_URL . "img/";
	const FA_URL = self::MAIN_URL . "font-awesome/css/";
	const ASSETS_CSS_URL = self::MAIN_URL . "assets/css/";
	const ASSETS_JS_URL = self::MAIN_URL . "assets/js/";
	const ASSETS_IMG_URL = self::MAIN_URL . "assets/img/";
	const ASSETS_FA_URL = self::MAIN_URL . "assets/fontawesome/css/";
	const GET_METHOD = "GET";
	const POST_METHOD = "POST";

	private $arrayGet;
	private $arrayPost;
	private $randomKey;
	private $debug = true;

	/**
	 *
	 * Constructor de la clase.
	 */
	public function __construct () {
		$this->handleWarnings();
		$this->initSession();
		$this->initGetPost();
	}

	private function handleWarnings () {
		set_error_handler(function ($severity, $message, $file, $line) {
			if (0 === error_reporting()) return;

			$messageToShow = $this->debug ? $message : "Internal Server Error - 500";

			throw new ErrorException($messageToShow, 0, $severity, $file, $line);
		});
	}

	/**
	 *
	 * Esta función será de utilidad
	 * para cargarle las funciones a
	 * los arreglos de $arrayGet
	 * $arrayPost.
	 */
	private function initGetPost () {
		/**
		 *
		 * Funciones del GET.
		 */
		$this->arrayGet = [
			self::MAIN_URL => function () {
				$this->initRandomKey();

				include_once self::WS_URL . "collections.php";

				$jsonCollection = initCollection(10);
				$jsonCollectionRawHTML = initCollectionRawHTML($jsonCollection);

				$_SESSION["HAVE_ACCESS_TO_EASTEREGG"] = false;

				include_once self::VIEWS_URL . "index.php";
			},
			"old" => function () {
				$this->initRandomKey();

				$_SESSION["HAVE_ACCESS_TO_EASTEREGG"] = false;

				include_once self::VIEWS_URL . "indexOld.php";
			}
		];

		/**
		 *
		 * Funciones del POST.
		 */
		$this->arrayPost = [
			"getNewCollection" => function () {
				include_once self::APP_URL . self::WS_URL . "collections.php";

				$length = $_POST["length"];

				$initJson = initCollection($length);

				if ($initJson->success) {
					$jsonCollection = initCollectionRawHTML($initJson);

					if ($jsonCollection->success) echo json_encode([ "success" => true, $jsonCollection->message, "data" => $jsonCollection->data ]);
					else echo json_encode([ "success" => false, "message" => $jsonCollection->message, "data" => null ]);
				} else echo json_encode([ "success" => false, "message" => $initJson->message, "data" => null ]);
			},
			"makeString" => function () {
				include_once self::APP_URL . self::WS_URL . "makeString.php";
			},
			"validateFursona" => function () {
				include_once self::APP_URL . self::WS_URL . "validateFursona.php";
			}
		];

		/**
		 *
		 * Forma de distinta de obtener
		 * url's.
		 * 
		 * $this->arrayGet = [
		 * 	[
		 * 		"url" => "/collection/{collection}/{length}",
		 * 		"hasParameters" => true,
		 * 		"parameters" => [
		 * 			[
		 * 				"parameterName" => "{collection}"
		 * 				"parameterType" => string
		 * 			],
		 * 			[
		 * 				"parameterName" => "{length}",
		 * 				"parameterType" => int
		 * 			]
		 * 		],
		 * 		"callback" => function ($collection, $length) {}
		 * 	]
		 * ];
		 */
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
	 *
	 * setSessionKeys:
	 * Agrega valores a la sesión
	 * activa en base a las constantes
	 * de la clase.
	 */
	private function checkSession () {
		return session_status() === PHP_SESSION_ACTIVE;
	}

	public function initSession () {
		if ($this->checkSession()) return true;

		session_start();

		$this->setSessionKeys();

		return true;
	}

	public function closeSession () {
		if (!$this->checkSession()) return true;

		session_destroy();

		return true;
	}

	private function setSessionKeys () {
		if (!$this->checkSession()) session_start();

		if (!isset($_SESSION["HAVE_ACCESS_TO_EASTEREGG"])) $_SESSION["HAVE_ACCESS_TO_EASTEREGG"] = false;
		if ((!isset($_SESSION["KEY_TO_EASTEREGG_VALUE"]) || isset($_SESSION["KEY_TO_EASTEREGG_VALUE"])) && $_SESSION["HAVE_ACCESS_TO_EASTEREGG"] === false) $_SESSION["KEY_TO_EASTEREGG_VALUE"] = $this->initRandomKey();
		if (!isset($_SESSION["MAIN_URL"])) $_SESSION["MAIN_URL"] = self::MAIN_URL;
		if (!isset($_SESSION["CSS_URL"])) $_SESSION["CSS_URL"] = self::CSS_URL;
		if (!isset($_SESSION["JS_URL"])) $_SESSION["JS_URL"] = self::JS_URL;
		if (!isset($_SESSION["IMG_URL"])) $_SESSION["IMG_URL"] = self::IMG_URL;
		if (!isset($_SESSION["FA_URL"])) $_SESSION["FA_URL"] = self::FA_URL;
		if (!isset($_SESSION["ASSETS_CSS_URL"])) $_SESSION["ASSETS_CSS_URL"] = self::ASSETS_CSS_URL;
		if (!isset($_SESSION["ASSETS_JS_URL"])) $_SESSION["ASSETS_JS_URL"] = self::ASSETS_JS_URL;
		if (!isset($_SESSION["ASSETS_IMG_URL"])) $_SESSION["ASSETS_IMG_URL"] = self::ASSETS_IMG_URL;
		if (!isset($_SESSION["ASSETS_FA_URL"])) $_SESSION["ASSETS_FA_URL"] = self::ASSETS_FA_URL;
		// if (!isset($_SESSION[""])) = $_SESSION[""] = ;
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
	private function sanitizeRequestUri () {
		$newUri = preg_replace("/[\x20-\x2d\x3a-\x40\x5b-\x60\x7b-\xff]/", "", $_SERVER["REQUEST_URI"]);

		$requesUri = explode("/", trim($newUri, "/"));
		$scriptName = explode("/", trim(self::MAIN_SCRIPT, "/"));

		$parts = array_diff_assoc($requesUri, $scriptName);

		if (!$parts[0]) return self::MAIN_URL;

		return implode("/", $parts);
	}

	public function initRoute () {
		$requestMethod = $_SERVER["REQUEST_METHOD"];

		$url = $this->sanitizeRequestUri();

		if ($requestMethod === self::GET_METHOD) {
			try {
				if (isset($this->arrayGet[$url]) && is_callable($this->arrayGet[$url])) $this->arrayGet[$url]();
				else {
					header("HTTP/1.0 404 Not Found");

					include_once self::EXCEPTIONS_VIEWS_URL . "404.php";
				}
			} catch (Exception $e) {
				header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error", true, 500);

				include_once self::EXCEPTIONS_VIEWS_URL . "500.php";
			}
		} else if ($requestMethod === self::POST_METHOD) {
			header("Content-Type: application/json; charset=utf-8");

			try {
				if (isset($this->arrayPost[$url]) && is_callable($this->arrayPost[$url])) $this->arrayPost[$url]();
				else echo json_encode([ "success" => false, "message" => "404 - $url not found." ]);
			} catch (Exception $e) {
				echo json_encode([ "success" => false, "message" => "500 - {$e->getMessage()}." ]);
			}
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
}

/**
 *
 * Crear la instancia de la
 * clase de configuración.
 */
$config = new Configuration();
