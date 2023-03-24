/**
 *
 * Principal
 */
function scrollDown (el) {

	event.preventDefault();

	$("html, body").animate({scrollTop: $(el.hash).offset().top - 20}, 1000);
};


/**
 *
 * Carga de archivos (Conteo de archivos, pero sin subir al servidor).
 */
$("#to-load").change(function (e) {

	e.preventDefault();

	var x = document.getElementById("to-load");
	var txt = "";

    $("#count-files > .card-body").append(txt);

    if ("files" in x) {

        if (x.files.length == 0) {

            txt = "<p>Selecciona un archivo o mas.</p>";

            $("#count-files > .card-body > h1").html("No hay archivos seleccionados...");
            $("#to-load").next().remove();
        }

        else {

            txt += "<div>";

            for (var i = 0; i < x.files.length; i++) {

                txt += "<br><p><strong>" + ( i + 1 ) + ". Archivo</strong></p>";
                var file = x.files[i];

                if ("name" in file)
                    txt += "<p>Nombre: " + file.name + "</p>";

                if ("size" in file)
                    txt += "<p>Peso: " + file.size + " bytes </p>";
            }

            txt += "</div>";

            $("#to-load").next().remove();
            $("#count-files > .card-body > h1").html("Archivos cargados: " + x.files.length);
        }
    }

    else {

        if (x.value == "") {

            txt += "<p>Selecciona un archivo o mas.</p>";

            $("#count-files > .card-body > h1").html("No hay archivos seleccionados...");
            $("#to-load").next().remove();
        }

        else {

            txt += "<div>";
            txt += "<p>The files property is not supported by your browser!</p>";
            txt += "<p>The path of the selected file: " + x.value + "</p>";
            txt += "</div>";
        }
    }

	$("#count-files > .card-body").append(txt);
});


/**
 *
 * Carga de archivos (Uso de SimpleAjaxUploader, pero sin subir al servidor).
 */
var	loop,
	countpost = 0,
	numberfiles = 0,
	btn = document.getElementById("upload-btn"),
	wrap = document.getElementById("pic-progress-wrap"),
	picBox = document.getElementById("picbox"),
	errBox = document.getElementById("errormsg"),
	ESTATUS = {
		correcto : 0,
		error : 0,
		errors : ""
	},
	HEADER = "<h1><i class=\"fa fa-gear fa-spin\"></i> Espere un momento porfavor</h1><hr>",
	FINISH = "<h1><i class=\"fa fa-check\"></i> Carga completa</h1><hr>",
	FBUTTON = "<button onclick=\"oksuccess()\" class=\"btn btn-success\">Aceptar</button>";

var loader = new ss.SimpleUpload({
	button: btn,
	url: "uploadF",
	name: "uploadfile",
	multiple: true,
	maxUploads: 500,
	maxSize: 8192,
	allowedExtensions: ["gif", "png", "jpeg", "jpg", "xml", "mp3"],
	method: "POST",
	responseType: "json",
	onSubmit: function (filename, extension) {

		document.querySelector(".loading-cover > .content").innerHTML = HEADER;

		if (!document.querySelector(".loading-cover").classList.contains("show-screen"))
			document.querySelector(".loading-cover").classList.add("show-screen");
		
		countpost++;
		loop = countpost;
		numberfiles = 0;

		ESTATUS.correcto = 0;
		ESTATUS.error = 0;
		ESTATUS.errors = "";

		var	prog = document.createElement("div"),
			outer = document.createElement("div"),
			bar = document.createElement("div"),
			size = document.createElement("div");

		prog.className = "prog";
		size.className = "size";
		outer.className = "progress progress-striped";
		bar.className = "progress-bar progress-bar-success";

		outer.appendChild(bar);
		prog.appendChild(size);
		prog.appendChild(outer);
		wrap.appendChild(prog);

		this.setProgressBar(bar);
		this.setProgressContainer(prog);
		this.setFileSizeBox(size);
	},
	onComplete: function (filename, response) {

		countpost = 0;
		numberfiles++;
		ESTATUS.correcto++;

		if (numberfiles == loop) {

			document.querySelector(".loading-cover > .content").innerHTML = FINISH +
				"<p>Total de archivos a cargar: " + loop + "</p>" +
				"<p>Total de archivos cargados correctamente: " + ESTATUS.correcto + "</p>" +
				"<p>Total de errores: " + ESTATUS.error + "</p>" + FBUTTON;

			if (ESTATUS.error > 0)
				document.querySelector(".loading-cover > .content").insertAdjacentHTML("beforeend", "<hr><a href=\"#\" class=\"show-errors\" onclick=\"showerrors()\"><i class=\"fa fa-caret-down\"></i> Mostrar detalles</a><div class=\"error-list\">" + ESTATUS.errors + "</div>");
		}
	},
	onError: function (filename, errorType) {

		countpost = 0;
		numberfiles++;
		ESTATUS.error++;

		ESTATUS.errors += '<p>' + filename + ', ' + errorType + '</p>';

		if (numberfiles == loop) {
			document.querySelector('.loading-cover > .content').innerHTML = FINISH+
				'<p>Total de archivos a cargar: ' + loop + '</p>'+
				'<p>Total de archivos cargados correctamente: ' + ESTATUS.correcto + '</p>'+
				'<p>Total de errores: ' + ESTATUS.error + '</p>'+
				FBUTTON
			;
			if (ESTATUS.error > 0) document.querySelector('.loading-cover > .content').insertAdjacentHTML('beforeend', '<hr><a href="#" class="show-errors" onclick="showerrors()"><i class="fa fa-caret-down"></i> Mostrar detalles</a><div class="error-list">' + ESTATUS.errors + '</div>');
		}
	},
	onExtError: function (filename, extension) {

		countpost = 0;
		numberfiles++;
		ESTATUS.error++;

		ESTATUS.errors += '<p>Archivo: ' + filename + ', extension: ' + extension + ', no es valida.</p>';

		if (numberfiles == loop) {
			document.querySelector('.loading-cover > .content').innerHTML = FINISH+
				"<p>Total de archivos a cargar: " + loop + "</p>" +
				"<p>Total de archivos cargados correctamente: " + ESTATUS.correcto + "</p>" +
				"<p>Total de errores: " + ESTATUS.error + '</p>' + FBUTTON;

			if (ESTATUS.error > 0)
				document.querySelector(".loading-cover > .content").insertAdjacentHTML("beforeend", '<hr><a href="#" class="show-errors" onclick="showerrors()"><i class="fa fa-caret-down"></i> Mostrar detalles</a><div class=\"error-list\">' + ESTATUS.errors + "</div>");
		}
	},
	onSizeError: function (filename, fileSize) {

		countpost = 0;
		numberfiles++;
		ESTATUS.error++;

		ESTATUS.errors += "<p>Archivo: " + filename + ", tamaño: " + fileSize + "KB, sobrepasa el limite permitido.</p>";

		if (numberfiles == loop) {
			document.querySelector(".loading-cover > .content").innerHTML = FINISH +
				"<p>Total de archivos a cargar: " + loop + "</p>" +
				"<p>Total de archivos cargados correctamente: " + ESTATUS.correcto + "</p>" +
				"<p>Total de errores: " + ESTATUS.error + "</p>" + FBUTTON;

			if (ESTATUS.error > 0)
				document.querySelector(".loading-cover > .content").insertAdjacentHTML("beforeend", "<hr><a href=\"#\" class=\"show-errors\" onclick=\"showerrors()\"><i class=\"fa fa-caret-down\"></i> Mostrar detalles</a><div class=\"error-list\">" + ESTATUS.errors + "</div>");
		}
    }
});

function oksuccess() {

	document.querySelector(".loading-cover").classList.remove("show-screen");
};

function showerrors() {

	event.preventDefault();
	var	toShow = document.querySelector(".loading-cover > .content > a"),
		listErrors = document.querySelector(".loading-cover > .content > .error-list");

	listErrors.classList.toggle("in-block");
	listErrors.classList.contains("in-block") ? toShow.innerHTML = "<i class=\"fa fa-caret-up\"></i> Ocultar detalles" : toShow.innerHTML = "<i class=\"fa fa-caret-down\"></i> Mostrar detalles";
};


/**
 *
 * Conteo de elementos en un contenedor de html.
 */
function contarElemnt() {

	if (!document.getElementsByClassName("elements-in").length)
		$("#count-table > .card-heade").append("<p class=\"elements-in\">Numero de renglones en la tabla: " + /*rows*/ document.getElementById("datos").querySelectorAll("tr").length + "</p>");
};


/**
 *
 * Modal personal.
 *
 * ( Eliminado desde el 11/10/2017 )
 */


/**
 *
 * Menu lateral.
 */
var sideMenu = document.getElementById("leftmenu");

// Abrir menu.
document.getElementById("toggle-menu").onclick = function (event) {

	event.preventDefault();
	sideMenu.classList.toggle("active");

	if (sideMenu.classList.contains("active")) {

		this.innerHTML = "<i class=\"fa fa-close\"></i> Cerrar";
		document.body.classList.add("menu-open");

		var cover = document.createElement("div");
		cover.classList.add("page-cover");
		cover.setAttribute("id", "page-cover");
		cover.addEventListener("click", closeCover);

		document.body.insertBefore(cover, document.body.childNodes[0]);
	}

	else {

		document.body.removeChild(document.getElementById("page-cover"));
		this.innerHTML = "<i class=\"fa fa-bars\"></i> Menu";
		document.body.classList.remove("menu-open");
	}
};

// Ir a la seccion.
function scrollToSect (element) {

	event.preventDefault();
	closeCover();
	$("html, body").animate({scrollTop: $(element.hash).offset().top - 20}, 1000);
};

// Cerrar menu.
function closeCover () {

	sideMenu.classList.toggle("active");
	document.body.removeChild(document.getElementById("page-cover"));
	document.body.classList.remove("menu-open");
	document.getElementById("toggle-menu").innerHTML = "<i class=\"fa fa-bars\"></i> Menu";
};

// Dropdown.
[].forEach.call(document.querySelectorAll(".drop-list"), function (drop) {

	drop.querySelector("a[data-toggle=\"drop-list\"]").onclick = function (event) {

		event.preventDefault();
		var	heights = 0,
			droplist = drop.querySelectorAll(".drop-menu > li"),
			dropmenu = drop.querySelector(".drop-menu");

		for (var i = 0; i < droplist.length; i++)
			heights = heights + droplist[i].offsetHeight;

		dropmenu.classList.toggle("show-cont");
		dropmenu.classList.contains("show-cont") ? dropmenu.style.height = heights + "px" : dropmenu.removeAttribute("style");
		drop.querySelector("a[data-toggle=\"drop-list\"] > .drop-icon") ? drop.querySelector("a[data-toggle=\"drop-list\"] > .drop-icon").classList.toggle("open") : false;
	}
});


/**
 *
 * Aparecer/desaparecer imagen.
 */
document.getElementById("toggle-fade").onclick = function () {

	document.getElementById("test").classList.toggle("fade");
	document.getElementById("test").classList.contains("fade") ? this.innerHTML = "<i class=\"fa fa-power-off\"></i> Desactivar" : this.innerHTML = "<i class=\"fa fa-power-off\"></i> Activar";
};


/**
 *
 * Aparecer/desaparecer boton cuando el usuario desliza la pagina y funcion para regresar al tope de la pagina.
 */
var up = document.getElementById("to-up");

window.onscroll = function () {

	if (window.pageYOffset > 250 + document.getElementById("main-pagehead").clientHeight && !up.classList.contains("fade"))
		up.classList.toggle("fade");

	else if (window.pageYOffset < 250 + document.getElementById("main-pagehead").clientHeight && up.classList.contains("fade"))
		up.classList.toggle("fade");

	grayFade(/* document.getElementById("test2") */);
};

up.onclick = function () {

	scrollToUp();
};

function scrollToUp () {

	event.preventDefault();
	$("html, body").animate({scrollTop: 0}, 1000);
};


/**
 *
 * Escala de grises.
 */
var	coorBtn = document.getElementById("coordinate-img"),
	coorImg = document.getElementById("test2");

function grayFade () {

	var	picture = document.getElementById("test2"),
		screen = window.innerHeight,
		split = parseInt(screen / 3),
		top = picture.offsetTop,
		height = picture.clientHeight;

	/**
	 *
	 * En caso de que en 'height' de las etiquetas
	 * html y body este en 0.
	 */

	// if (window.pageYOffset > top - split && !picture.classList.contains('gray-none') && window.pageYOffset < (top + height) - split) {
		// picture.classList.toggle('gray-none');
	// } else if (window.pageYOffset < top - split && picture.classList.contains('gray-none') || window.pageYOffset > (top + height) - split && picture.classList.contains('gray-none')) {
		// picture.classList.toggle('gray-none');
	// }

	/**
	 *
	 * En caso de que en 'height' de las etiquetas
	 * html y body este en 100%.
	 * Ademas si se le retiran los div's con la clase
	 * 'container-fluid' y 'col-[medida]-[numero]'
	 * causa conflicto.
	 */

	// if (window.pageYOffset > top + (split * 2) && !picture.classList.contains('gray-none')  && window.pageYOffset < (top + height) + split) {
		// picture.classList.toggle('gray-none');
	// } else if (window.pageYOffset < top + (split * 2) && picture.classList.contains('gray-none') || window.pageYOffset > (top + height) + split && picture.classList.contains('gray-none')) {
		// picture.classList.toggle('gray-none');
	// }

	/**
	 *
	 * Otra version ya sin conflictos.
	 * (Eso espero)
	 */

	if (window.pageYOffset > top - split && window.pageYOffset < (top + height) - (split * 2) && !picture.classList.contains("gray-none"))
		picture.classList.toggle("gray-none");
	
	else if (window.pageYOffset < top - split && picture.classList.contains("gray-none") || window.pageYOffset > (top + height) - (split * 2) && picture.classList.contains("gray-none"))
		picture.classList.toggle("gray-none");
};

coorBtn.onclick = function () {

	var	thescreen = window.innerHeight,
		divisorP = parseInt(thescreen / 3),
		imgpoint = coorImg.offsetTop,
		imgsize = coorImg.clientHeight;

	document.getElementById("coordata").innerHTML = "<pre class=\"sb\">" +
		"<code>&gt; Tamaño de pantalla: " + thescreen + "</code>" +
		"<code>&gt; Pantalla dividida entre 3: " + divisorP + "</code>" +
		"<code>&gt; Tamaño de imagen: " + imgsize + "</code>" +
		"<code>&gt; Coordenada de imagen: " + imgpoint + "</code>" +
		"<code>&gt; Coordenada dónde termina la imagen: " + (imgpoint + imgsize) + "</code>" +
		"<code>&gt; Posición de scroll: " + window.pageYOffset + "</code>" +
		"<code>&gt; Coordenada dónde se aplica el efecto a la imagen: " + ((imgpoint + imgsize) - divisorP) + "</code>" +
		"<code>&gt; Posición de scroll + coordenada de imagen: " + (window.pageYOffset + imgpoint) + "</code>" +
		"<code>&gt;</code>"+
	"</pre>";

	console.log("Tamaño de pantalla: " + thescreen + 
		"\nPantalla dividida: " + divisorP +
		"\nTamaño de imagen: " + imgsize +
		"\nCoordenada de imagen: " + imgpoint +
		"\nPosición de scroll: " + window.pageYOffset +
		"\nCoordenada dónde termina la imagen: " + (imgpoint + imgsize) +
		"\nCoordenada dónde se aplica el efecto a la imagen: " + ((imgpoint + imgsize) - divisorP) +
		"\nTope + coordenada de imagen: " + (window.pageYOffset + imgpoint)
	);
};


/**
 *
 * Panel de codigo.
 */
$('.code-button > button').click(function () {
	if (isNaN($('.code-input').val())) $('.code-input').css('color', '#ff0000').val('');

	var currentCode = $('.code-input').val() + $(this).data('number');

	if (currentCode.length <= 8) $('.code-input').val(currentCode);
});

$('.code-actions > #backspace > button').click(function () {
	if (!isNaN($('.code-input').val())) {
		var currentCode = $('.code-input').val();

		if (currentCode.length > 0) {
			currentCode = currentCode.slice(0, -1);
			$('.code-input').val(currentCode);
		} else $('.code-input').css('color', '#00ff00').val('LIMPIO OwO');
	}
});

$('.code-actions > #clear > button').click(function () {
	$('.code-input').val('');
});

$('.code-actions > #send > button').click(function () {
	if (!isNaN($('.code-input').val())) {
		var currentCode = $('.code-input').val();

		$.ajax({
			url: 'toeasteregg',
			type: 'POST',
			dataType: 'json',
			data: {
				code: currentCode
			},
			success: function (response) {
				$('.code-input').css('color', response.color).val(response.message);

				if (response.success) {
					setTimeout(function () {
						document.location.href = response.url;
					}, 3000);
				} else $('#pista').html(`/* Ah ya record&eacute; que iba a comentar: ${response.hint} */`);
			},
			error: function (jqXHR, textStatus, errorThrown) {
				$('.code-input').css('color', '#ff0000').val('ERROR X_X');
				$('#pista').html(`/* Aiuda, se descompuso mi ws :'v (${jqXHR.status} - ${jqXHR.statusText}) */`);
			}
		});
	}
});


/**
 *
 * Matrix.
 */
var	m = matriz(2),
	matrix = [];

$("#addmtx").click(function () {

	m = matriz($("#mtxsize").val());
});

$("#calc").click(function () {

	matrix = new Array();

	for (var i = 0; i < m; i++) {

		var inmtx = [];

		for (var j = 0; j <= m; j++)
			inmtx.push($(".m-" + i + "-" + j).val());

		matrix.push(inmtx);
	}

	$("<code class=\"matrix-output\">];</code>").insertAfter(".matrix-output:last");

	console.log(matrix);

	$.ajax({
		url: "matrix",
		type: "POST",
		dataType: "json",
		data: { matrix: matrix },
		success: function (res) {

			console.log(res);

			if (res.success)
				matrixGUI(matrix, res.matrix);

			else {

				$("#resultado").html("<pre class=\"sb\"><code>&gt; " + res.error + "</code></pre>");
				$("#resultado pre").append("<code>&gt;</code>");
				$(".matrix-output").remove();
				$("<code class=\"matrix-output\">$m <span class=\"sb-pink\">=</span> [];</code>").insertAfter("#code-first");
			}
		}
	});
});

function matriz (size) {

	$("#mtxtable thead tr").html(null);
	$("#mtxtable tbody").html(null);
	$("#mtxtable thead tr").append("<th>#</th>");

	for (var i = 0; i < size; i++) {

		$("#mtxtable thead tr").append("<th>" + (i + 1) + "</th>");

		if (i == size - 1)
			$("#mtxtable thead tr").append("<th style=\"background-color:#eee;\">" + (i + 2) + "</th>");
	}

	for (var i = 0; i < size; i++) {

		$("#mtxtable tbody").append("<tr></tr>");
		$("#mtxtable tbody tr:last").append("<th>" + (i + 1) + "</th>");

		for (var j = 0; j < size; j++) {

			$("#mtxtable tbody tr:last").append("<td><input type=\"number\" class=\"form-control matrix m-" + i + "-" + j + "\"></td>");

			if (j == size - 1)
				$("#mtxtable tbody tr:last").append("<td style=\"background-color:#eee;\"><input type=\"number\" class=\"form-control matrix m-" + i + "-" + (j + 1) + "\"></td>");
		}
	}

	return size;
};

function matrixGUI (mtx, mtxres) {

	$("#resultado").html("<pre class=\"sb\"><code>&gt; Resultado:</code></pre>");

	for (var i = 0; i < mtxres.length; i++) {

		$("#resultado pre").append("<code>&gt; </code>");

		for (var j = 0; j <= mtxres.length; j++) {

			if (j == mtxres.length)
				$("#resultado pre code:last").append("| ");

			$("#resultado pre code:last").append(mtxres[i][j] + " ");
		}
	}

	$("#resultado pre").append("<code>&gt;</code>");
	$(".matrix-output").remove();
	$("<code class=\"matrix-output\">$m <span class=\"sb-pink\">=</span> [</code>").insertAfter("#code-first");

	for (var i = 0; i < mtx.length; i++) {

		$("<code class=\"matrix-output\">    [</code>").insertAfter(".matrix-output:last");

		for (var j = 0; j <= mtx.length; j++) {

			if (j == mtx.length) {

				if (mtx[i][j] < 0) {

					$(".matrix-output:last").append("<span class=\"sb-pink\">-</span><span class=\"sb-purple\">" + (mtx[i][j] * -1) + "</span>");
					continue;
				}

				$(".matrix-output:last").append("<span class=\"sb-purple\">" + (mtx[i][j] * 1) + "</span>");
				continue;
			}

			if (mtx[i][j] < 0) {

				$(".matrix-output:last").append("<span class=\"sb-pink\">-</span><span class=\"sb-purple\">" + (mtx[i][j] * -1) + "</span>,");
				continue;
			}

			$(".matrix-output:last").append("<span class=\"sb-purple\">" + (mtx[i][j] * 1) + "</span>,");
		}

		if (i == mtx.length - 1) {

			$(".matrix-output:last").append("]");
			continue;
		}

		$(".matrix-output:last").append("],");
	}

	$("<code class=\"matrix-output\">];</code>").insertAfter(".matrix-output:last");
};


/**
 *
 * Cadena de caracteres aleatorios.
 */
$("#set-long").click(function () {

	$.ajax({
		url: "randomString",
		type: "POST",
		dataType: "json",
		data: { length: $("#longitud").val() },
		success: function (res) {

			if (res.success)
				$("#random-str").html(res.data);

			else
				$("#random-str").html('null');
		}
	})
});
