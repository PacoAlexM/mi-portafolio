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
 * - extensions: Extención o extenciones
 * del archivo.
 *
 * - callback: Función que se ejecutará
 * en caso de true.
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
		return false;
	}

	if (!operators[operator]($el.val(), value)) {
		$el[0].setCustomValidity(message);
		$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> ${message}`);
		return false;
	}

	$validFeedback.html(`<i class="fa-regular fa-thumbs-up"></i> Ok`);
	return true;
}

/**
 *
 * Función: isLike
 * Parámetros: $el, regex, message
 */
const isLike = ($el, regex, message) => {
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
const hasThisLength = ($el, operator, limit, message) => {
	$el[0].setCustomValidity('');
	let $validFeedback = $(`#vf-${$el.prop('id')}`);
	let $invalidFeedback = $(`#if-${$el.prop('id')}`);
	let operators = {
		'=='	: function (a, b) { return a ==		b },
		'>'		: function (a, b) { return a >		b },
		'>='	: function (a, b) { return a >=		b },
		'<'		: function (a, b) { return a <		b },
		'<='	: function (a, b) { return a <=		b }
	}

	if (isNaN(limit)) {
		$el[0].setCustomValidity(`El límite a validar debe ser un número`);
		$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> El límite a validar debe ser un número`);
		return false;
	}

	if (!operator in operators) {
		$el[0].setCustomValidity(`El operador "${operator}" no es válido`);
		$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> El operador "${operator}" no es válido`);
		return false;
	}

	if (!operators[operator]($el.val(), value)) {
		$el[0].setCustomValidity(message);
		$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> ${message}`);
		return false;
	}

	$validFeedback.html(`<i class="fa-regular fa-thumbs-up"></i> Ok`);
	return true;
}

/**
 *
 * Función: hasValueWhenIsOptional
 * Parámetros: $el, callback
 */
const hasValueWhenIsOptional = ($el, callback) => {
	if ($el.val().trim().length > 0) return callback();

	$el[0].setCustomValidity('');
	let $validFeedback = $(`#vf-${$el.prop('id')}`);

	$validFeedback.html(`<i class="fa-regular fa-thumbs-up"></i> Ok`);
	return false;
}

/**
 *
 * Función: isValidOnServer
 * Parámetros: $el, url, settings (opcional), message
 */
const isValidOnServer = ($el, url, settings = [], message) => {
	$el[0].setCustomValidity('');
	let $validFeedback = $(`#vf-${$el.prop('id')}`);
	let $invalidFeedback = $(`#if-${$el.prop('id')}`);
	let valid = true;
	let settingsProperties = [ 'column', 'operator', 'value' ];
	let sqlOperators = [ '=', '>', '<', '>=', '<=', '<>' ];
	let serverOperators = [ '==', '===', '!=', '!==', '>', '>=', '<', '<=' ];

	if (settings.length > 0) {
		settings.every((value, index, _) => {
			if (!value.hasOwnProperty(settingsProperties[0]) || !value.hasOwnProperty(settingsProperties[1]) || !value.hasOwnProperty(settingsProperties[2])) {
				$el[0].setCustomValidity(`Para esta validación debe tener definido estos parámetros: "column", "operator" y "value"`);
				$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> Para esta validación debe tener definido estos parámetros: "column", "operator" y "value"`);
				return (valid = false);
			} else if (!sqlOperators.includes(value.operator) && !serverOperators.includes(value.operator)) {
				$el[0].setCustomValidity(`El operador "${value.operator}" no es válido`);
				$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> El operador "${value.operator}" no es válido`);
				return (valid = false);
			}

			return true;
		});
	}

	if (valid)
		$.ajax({
			url: url,
			type: 'POST',
			dataType: 'json',
			async: false,
			data: {
				toValidate: $el.val(),
				settings: settings
			},
			success: function (response) {
				if (response.success) {
					if (!response.data.valid) {
						$el[0].setCustomValidity(message);
						$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> ${message}`);
						valid = false;
					} else $validFeedback.html(`<i class="fa-regular fa-thumbs-up"></i> Ok`);
				} else {
					$el[0].setCustomValidity(`Ocurrió un error durante la validación: ${response.message}`);
					$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> Ocurrió un error durante la validación: ${response.message}`);
					valid = false;
				}
			},
			error: function (jqXHR, textStatus, errorThrown) {
				$el[0].setCustomValidity(`Ocurrió un error durante la validación: ${jqXHR.status} - ${jqXHR.statusText}`);
				$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> Ocurrió un error durante la validación: ${jqXHR.status} - ${jqXHR.statusText}`);
				valid = false;
			}
		});

	return valid;
}

/**
 *
 * Función: haveFiles
 * Parámetros: $el, message
 */
const hasFiles = ($el, maxFiles = 1, message) => {
	$el[0].setCustomValidity('');
	let $validFeedback = $(`#vf-${$el.prop('id')}`);
	let $invalidFeedback = $(`#if-${$el.prop('id')}`);

	if (isNaN(maxFiles) || !/^\d+$/g.test(maxFiles.toString())) {
		$el[0].setCustomValidity(`El parámetro de máximo de archivos debe de ser un número sin punto decimal`);
		$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> El parámetro de máximo de archivos debe de ser un número sin punto decimal`);
		return false;
	}

	if (maxFiles <= 0) {
		$el[0].setCustomValidity(`El parámetro de máximo de archivos debe de ser un número mayor a 0`);
		$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> El parámetro de máximo de archivos debe de ser un número mayor a 0`);
		return false;
	}

	if ($el[0].files.length < 1) {
		$el[0].setCustomValidity(message);
		$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> ${message}`);
		return false;
	}

	if ($el[0].files.length > maxFiles) {
		$el[0].setCustomValidity(`Se seleccionaron ${$el[0].files.length} archivos de ${maxFiles} permitido(s)`);
		$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> Se seleccionaron ${$el[0].files.length} archivos de ${maxFiles} permitido(s)`);
		return false;
	}

	$validFeedback.html(`<i class="fa-regular fa-thumbs-up"></i> Ok`);
	return true;
}

/**
 *
 * Función: isValidFileName
 * Parámetros: $el, message
 */
const isValidFileName = ($el, message) => {
	$el[0].setCustomValidity('');
	let $validFeedback = $(`#vf-${$el.prop('id')}`);
	let $invalidFeedback = $(`#if-${$el.prop('id')}`);
	let valid = true;
	let regex = /^[\w\d\s-\._,\(\)\[\]]+$/g;

	for (let i = 0; i < (file = $el[0].files).length; i++)
		if (!regex.test(file[i].name)) {
			$el[0].setCustomValidity(message);
			$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> ${message}`);
			valid = false;
			break;
		}

	if (valid) $validFeedback.html(`<i class="fa-regular fa-thumbs-up"></i> Ok`);

	return valid;
}

/**
 *
 * Función: isValidFileSize
 * Parámetros: $el, size, message
 */
const isValidFileSize = ($el, size, message) => {
	$el[0].setCustomValidity('');
	let $validFeedback = $(`#vf-${$el.prop('id')}`);
	let $invalidFeedback = $(`#if-${$el.prop('id')}`);
	let valid = true;

	if (isNaN(size) || !/^\d+$/g.test(size.toString())) {
		$el[0].setCustomValidity(`El tamaño del archivoa validar debe ser un número sin punto decimal`);
		$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> El tamaño del archivo a validar debe ser un número sin punto decimal`);
		return false;
	}

	for (let i = 0; i < (file = $el[0].files).length; i++)
		if (file[i].size > size) {
			$el[0].setCustomValidity(message);
			$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> ${message}`);
			valid = false;
			break;
		}

	if (valid) $validFeedback.html(`<i class="fa-regular fa-thumbs-up"></i> Ok`);

	return valid;
}

/**
 *
 * Función: isValidFileExtencion
 * Parámetros: $el, extensions, message
 */
const isValidFileExtencion = ($el, extensions, message) => {
	$el[0].setCustomValidity('');
	let $validFeedback = $(`#vf-${$el.prop('id')}`);
	let $invalidFeedback = $(`#if-${$el.prop('id')}`);
	let valid = true;

	try {
		if (extensions.constructor === Array) {
			if (extensions.length > 0) {
				extensions.every((value, index, _) => {
					if (typeof(value) != 'string') {
						$el[0].setCustomValidity(`Todos los elementos del array deben ser del tipo string`);
						$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> Todos los elementos del array deben ser del tipo string`);
						return (valid = false);
					}
					return true
				});
			} else {
				$el[0].setCustomValidity(`El array debe contener por lo menos un elemento del tipo string`);
				$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> El array debe contener almenos un elemento del tipo string`);
				valid = false;
			}
		} else {
			$el[0].setCustomValidity(`El parámetro extensions debe ser del tipo array de strings`);
			$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> El parámetro extensions debe ser del tipo array de strings`);
			valid = false;
		}

		if (valid) {
			for (let i = 0; i < (files = $el[0].files).length; i++)
				if (!extensions.includes(files[i].type)) {
					$el[0].setCustomValidity(message);
					$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> ${message}`);
					valid = false;
					break;
				}
		}
	} catch (exception) {
		$el[0].setCustomValidity(exception.message);
		$invalidFeedback.html(`<i class="fa-solid fa-exclamation"></i> ${exception.message}`);
		valid = false;
	} finally {
		if (valid) $validFeedback.html(`<i class="fa-regular fa-thumbs-up"></i> Ok`);
		return valid;
	}
}
