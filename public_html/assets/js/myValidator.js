/**
 *
 * Aquí se cargarán las funciones de
 * validación de cada campo en el
 * formulario seleccionado
 *
 * Defnición de cada parámetro:
 *
 * - $el: Representa el objeto jQuery
 * que se validará.
 *
 * - message: Es el mensaje que mostrará
 * en caso de error.
 *
 * - operator: Es el tipo de operador
 * lógico (sea ==, !=, >, etc.)
 *
 * - value: El valor que se evaluará
 * según el operador lógico.
 *
 * - regex: Expresión regular.
 *
 * - limit: Valor para medir el número
 * de caracteres de una cadema de texto.
 *
 * - url: Ubicación dende se validará
 * remotamente.
 *
 * - settings: Parámetros adicionales
 * para la validación remota.
 *
 * - size: Tamaño del archivo.
 *
 * - extensions: Extención del archivo
 * (puede ser array o string)
 *
 * Función: isEmpty
 * Parámetros: $el, message
 */
const isEmpty = ($el, message) => {
	$el[0].setCustomValidity('');
	let $validFeedback = $(`#vf-${$el.prop('id')}`);
	let $invalidFeedback = $(`#if-${$el.prop('id')}`);

	if ($el.val().trim().length == 0) {
		$el[0].setCustomValidity(message);
		$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> ${message}`);
		return true;
	}

	$validFeedback.html(`<i class="fa-regular fa-thumbs-up"></i> Ok`);
	return false;
}

/**
 *
 * Función: is
 * Parámetros: $el, operator, value, message
 */
const is = ($el, operator, value, message) => {
	$el[0].setCustomValidity('');
	let $validFeedback = $(`#vf-${$el.prop('id')}`);
	let $invalidFeedback = $(`#if-${$el.prop('id')}`);
	let operators = {
		'=='	: function (a, b) { return a ==		b },
		'==='	: function (a, b) { return a ===	b },
		'!='	: function (a, b) { return a !=		b },
		'!=='	: function (a, b) { return a !==	b },
		'>'		: function (a, b) { return a >		b },
		'>='	: function (a, b) { return a >=		b },
		'<'		: function (a, b) { return a <		b },
		'<='	: function (a, b) { return a <=		b }
	}

	if (!operator in operators) {
		$el[0].setCustomValidity(`El operador "${operator}" no es válido`);
		$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> El operador "${operator}" no es válido`);
		return true;
	}

	if (operators[operator]($el.val(), value)) {
		$el[0].setCustomValidity(message);
		$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> ${message}`);
		return true;
	}

	$validFeedback.html(`<i class="fa-regular fa-thumbs-up"></i> Ok`);
	return false;
}

/**
 *
 * Función: has
 * Parámetros: $el, regex, message
 */
const has = ($el, regex, message) => {
	$el[0].setCustomValidity('');
	let $validFeedback = $(`#vf-${$el.prop('id')}`);
	let $invalidFeedback = $(`#if-${$el.prop('id')}`);

	try {
		if (!regex.test($el.val())) {
			$el[0].setCustomValidity(message);
			$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> ${message}`);
			return false;
		}

		$validFeedback.html(`<i class="fa-regular fa-thumbs-up"></i> Ok`);
		return true;
	} catch (exception) {
		$el[0].setCustomValidity(exception.message);
		$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> ${exception.message}`);
		return false;
	}
}

/**
 *
 * Función: length
 * Parámetros: $el, operator, limit, message
 */
const length = ($el, operator, limit, message) => {
	$el[0].setCustomValidity('');
	let $validFeedback = $(`#vf-${$el.prop('id')}`);
	let $invalidFeedback = $(`#if-${$el.prop('id')}`);
	let operators = {
		'=='	: function (a, b) { return a ==		b },
		'==='	: function (a, b) { return a ===	b },
		'!='	: function (a, b) { return a !=		b },
		'!=='	: function (a, b) { return a !==	b },
		'>'		: function (a, b) { return a >		b },
		'>='	: function (a, b) { return a >=		b },
		'<'		: function (a, b) { return a <		b },
		'<='	: function (a, b) { return a <=		b }
	}

	if (isNaN(limit)) {
		$el[0].setCustomValidity(`El límite a validar debe ser un número`);
		$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> El límite a validar debe ser un número`);
		return true;
	}

	if (!operator in operators) {
		$el[0].setCustomValidity(`El operador "${operator}" no es válido`);
		$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> El operador "${operator}" no es válido`);
		return true;
	}

	if (operators[operator]($el.val(), value)) {
		$el[0].setCustomValidity(message);
		$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> ${message}`);
		return true;
	}

	$validFeedback.html(`<i class="fa-regular fa-thumbs-up"></i> Ok`);
	return false;
}

/**
 *
 * Función: isValidOnServer
 * Parámetros: $el, url, settings (opcional), message
 */
const isValidOnServer = ($el, url, settings = [], message) => {}

/**
 *
 * Función: isValidFileName
 * Parámetros: $el, regex, message
 */
const isValidFileName = ($el, regex, message) => {}

/**
 *
 * Función: isValidFileSize
 * Parámetros: $el, size, message
 */
const isValidFileSize = ($el, size, message) => {}

/**
 *
 * Función: isValidFileExtencion
 * Parámetros: $el, extensions, message
 */
const isValidFileExtencion = ($el, extensions, message) => {}
