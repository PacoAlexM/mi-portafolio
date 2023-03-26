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
function isEmpty ($el, message) {}

/**
 *
 * Función: is
 * Parámetros: $el, operator, value, message
 */
function is ($el, operator, value, message) {}

/**
 *
 * Función: has
 * Parámetros: $el, regex, message
 */
function has ($el, regex, message) {}

/**
 *
 * Función: length
 * Parámetros: $el, operator, limit, message
 */
function length ($el, operator, limit, message) {}

/**
 *
 * Función: isValidOnServer
 * Parámetros: $el, url, settings (opcional), message
 */
function isValidOnServer ($el, url, settings = [], message) {}

/**
 *
 * Función: isValidFileName
 * Parámetros: $el, regex, message
 */
function isValidFileName ($el, regex, message) {}

/**
 *
 * Función: isValidFileSize
 * Parámetros: $el, size, message
 */
function isValidFileSize ($el, size, message) {}

/**
 *
 * Función: isValidFileExtencion
 * Parámetros: $el, extensions, message
 */
function isValidFileExtencion ($el, extensions, message) {}
