<!DOCTYPE html>
<html lang="es-mx">
<head>
	<meta charset="ISO 8859-1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Prácticas de web simples con HTML, CSS &amp; Javascript">
	<meta name="keywords" content="HTML, CSS, JavaScript, Scrolling functions, Funciones con scroll, CSS3 fade style, Estilos de desvanecimiento con CSS3, Gray scale with Javascript, Escala de grises con Javascript, SimpleAjaxUploader load screen, Pantalla de carga con SimpleAjaxUploader, Practica con SimpleAjaxUploader, Scroll to up with Javascript, Regresar al tope de la página con Javascript, Sistemas de matrices por el método de Gauss Jordan, Resolución de sistemas de matrices por el método de Gauss Jordan en php, Strings aleatorios en php" />
	<meta name="author" content="Paco Alex Martell" />
	<meta name="theme-color" content="#000000" />
	<title>Paco Alex M | Portafolio Personal de Ejemplos de Desarrollo Web</title>
	<link rel="shortcut icon" href="<?php echo $_SESSION["MAIN_URL"] ?>favicon.png" type="image/png" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo $_SESSION["MAIN_URL"] ?>apple-touch-icon.png" sizes="196x196" />
	<link rel="stylesheet" href="<?php echo $_SESSION["MAIN_URL"] ?>assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo $_SESSION["MAIN_URL"] ?>assets/fontawesome/css/all.min.css" />
	<link rel="stylesheet" href="<?php echo $_SESSION["MAIN_URL"] ?>assets/css/style.css" />
</head>
<body>
	<a href="#" id="buttonMenu" class="btn btn-dark btn-lg"><i class="fa-solid fa-bars"></i> Menú</a>
	<a href="#" id="buttonToTop" class="return-to-top my-fade-effect-on"><i class="fa-solid fa-chevron-up"></i></a>

	<nav class="sidebar-wrapper" id="sidebarMenu">
		<ul class="sidebar-menu">
			<li class="drop-list sidebar-brand">
				<a href="#" data-toggle="drop-list" class="with-logo"><img alt="PacOwO.jpg" src="<?php echo $_SESSION["MAIN_URL"] ?>img/logo.jpg"> Paco Alex M <i class="drop-icon fa fa-angle-down"></i></a>
				<ul class="drop-menu">
					<li>
						<a href="https://github.com/PacoAlexM" target="_blank"><i class="fa-brands fa-github"></i> GitHub </a>
					</li>
					<li>
						<a href="http://pacoog.deviantart.com/" target="_blank"><i class="fa-brands fa-deviantart"></i> Deviantart </a>
					</li>
					<li>
						<a href="https://twitter.com/PacoAlexM5" target="_blank"><i class="fa-brands fa-twitter"></i> Twitter</a>
					</li>
					<li>
						<a href="<?php echo $_SESSION["MAIN_URL"] ?>acerca/de/mi"><i class="fa-solid fa-user"></i> Acerca de Mi</a>
					</li>
				</ul>
			</li>
			<li class="sidebar-divisor"></li>
			<li class="list-item">
				<a href="#uploadFiles">&gt; Carga de Archivos &lt;</a>
			</li>
			<li class="list-item">
				<a href="#dropZone">Drop Zone</a>
			</li>
			<li class="list-item">
				<a href="#collections">colecciones.json</a>
			</li>
			<li class="list-item">
				<a href="#vanishEfect">Efecto de Desvanecimiento</a>
			</li>
			<li class="list-item">
				<a href="#scrollToTop">Regresando al Tope...</a>
			</li>
			<li class="list-item">
				<a href="#grayScaleScrolling">Escala de Grises</a>
			</li>
		</ul>
	</nav>

	<header class="header" id="headerIndex">
		<div class="vertical-center">
			<?php $titles = [
				"<h1>&gt; header title goes here &lt;</h1>",
				"<h1><i>Hi, I'm a Furry</i> =n///n=</h1>",
				"<div class='col-md-10 offset-md-1 my-div-quote'><figure class='mb-0'><blockquote class='blockquote'><p>Yo veo un México con hambre y con sed de justicia. Veo a ciudadanos angustiados por la falta de seguridad, ciudadanos que merecen mejores servicios y gobiernos que les cumplan.</p></blockquote><figcaption class='blockquote-footer mb-0'>Luis Donaldo Colosio Murrieta, <cite title='Evento'>6 de Marzo de 1994</cite></figcaption></figure></div>",
				"<h1>\\[°_°]/ &lt;01100101 01101000?)</h1>",
				"<h1>=(^_^)=</h1>",
				"<div class='col-md-8 offset-md-2 my-div-quote'><figure class='mb-0'><blockquote class='blockquote'><p>Hi! My name is Reggie, and I like guys n///n</p></blockquote><figcaption class='blockquote-footer mb-0'>Reggie, por <cite title='Autor'>Whygena</cite></figcaption></figure></div>",
				"<h1>I have a question about Batman</h1>",
				"<div class='col-md-12 my-div-quote'><figure class='mb-0'><blockquote class='blockquote'><p>\"Y el gato nunca se fue.<br />Aún sigue posado y mirando a mi conciencia,<br />en la esquina de la puerta de mi cuarto<br />Y sus ojos parecen los de un demonio soñando.<br />Y la luz de la noche se derrama sobre él y tiende en el suelo su sombra.<br />Y mi alma, del fondo de esa sombra que flota sobre suelo, no podrá liberarse.<br />¡Nunca más!\"</p></blockquote><figcaption class='blockquote-footer mb-0'>Samia (adaptación del poema de \"El Cuervo\" de Edgar Alan Poe de 1845), por <cite title='Autor'>Mi</cite></figcaption></figure></div>"
			] ?>
			<?php echo $titles[rand(0, (count($titles) - 1))] ?>
			<hr />
			<div class="header-bottom">
				<a href="#" id="slideDown" class="slide-to-content"><i class="fa-solid fa-chevron-down"></i></a>
			</div>
		</div>
	</header>

	<div class="container-fluid">
		<!-- uploadFiles -->
		<div id="uploadFiles" class="my-panel my-panel-red">
			<div class="my-panel-header">
				<h3 class="my-panel-header-title">&gt; Carga de archivos &lt; <i>Uso de SimpleAjaxUploader.js</i></h3>
			</div>
			<div class="my-panel-body">
				<h2>Cargando archivos con estilo, claro que si.</h2>
				<p class="my-text">Este ejemplo tiene como propósito mostrar el funcionamiento de la librería de SimpleAjaxUploader (versión 2.6.6) tanto en el frontend como en el backend. También quiero aprovechar la oportunidad de mostrar como se puede hacer una barra de progreso de carga general, porcentaje de carga para cada archivo cargado y un protector de interfaz (o pantalla) para evitar acciones por el usuario como:</p>
				<ul>
					<li>Pulsar en botones de redireccionamientos dentro del sitio (esto no lo evita si el usuario interactua con los controles del navegador)</li>
					<li>Cargar más archivos antes de que termine la carga anterior.</li>
					<li>Realizar otros procesos que entorpezca la carga de archivos.</li>
				</ul>
				<div class="row">
					<div class="col">
						<div class="alert alert-warning" role="alert">
							<h4 class="alert-heading">Aviso</h4>
							<p>Por motivos de limitaciones del hosting, para este ejemplo solo permitiré la carga de 5 archivos a la vez de tamaño máximo de 10MB. Gracias por su comprención.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label class="mb-3">¿Mostrar pantalla protectora al cargar archivos?
							<label class="my-switch">
								<input type="checkbox" id="checkApplyScreenProtectorSimpleAjaxUploader" />
								<span class="my-slider"></span>
							</label>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label class="mb-3">¿Mostrar barra de progreso de carga general?
							<label class="my-switch">
								<input type="checkbox" id="checkApplyProgressBarSimpleAjaxUploader" />
								<span class="my-slider"></span>
							</label>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="table-responsive">
							<table class="table table-borderless table-hover" id="tableFilesSimpleAjaxUploader">
								<thead>
									<tr>
										<th>Archivo</th>
										<th>Tipo</th>
										<th>Tamaño (Aproximado)</th>
										<th>Última Modificación</th>
										<th>Porcentaje de Carga</th>
										<th>Estatus</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td colspan="6" class="text-center">No hay archivos por cargar.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row" id="rowProgressbarSimpleAjaxUploader" style="display: none;">
					<div class="col">
						<div class="progress mb-3 generalProgressbarSimpleAjaxUploader" role="progressbar" aria-label="Progreso de carga general" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="height: 30px;">
							<div class="progress-bar" style="width: 0%">0%</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="d-grid gap-1">
							<button type="button" class="btn btn-success mb-3" id="buttonSelectFilesSimpleAjaxUploader"><i class="fa-solid fa-magnifying-glass"></i> Seleccionar Archivos</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="d-grid gap-1">
							<button type="button" class="btn btn-success mb-3" id="buttonUploadFilesSimpleAjaxUploader" disabled><i class="fa-solid fa-cloud-arrow-up"></i> Cargar Archivos</button>
						</div>
					</div>
					<div class="col-md-4">
						<div class="d-grid gap-1">
							<button type="button" class="btn btn-light mb-3" id="buttonResetFilesSimpleAjaxUploader" disabled><i class="fa-solid fa-eraser"></i> Eliminar Archivos</button>
						</div>
					</div>
				</div>
				<samp>OUTPUT</samp>
				<pre class="sb" id="preOutputStatusSimpleAjaxUploader">
					<code>Seleccione archivos para cargar</code>
				</pre>
				<h2><i class="fa-solid fa-code"></i> Codificación</h2>
				<samp>JS</samp>
				<pre class="sb">
					<code><span class="comment">/**</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Primero lo más difícil porque fue una odisea</span></code>
					<code> <span class="comment">* encontrar la forma de mostrar el progreso de la</span></code>
					<code> <span class="comment">* carga de cada archivo y controlar las validaciones.</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Paso 1: crear las variables y constantes para controlar</span></code>
					<code> <span class="comment">* las cargas y el progressBar.</span></code>
					<code> <span class="comment">*/</span></code>
					<code><span class="cyan">var</span> _arrayInfoFiles <span class="pink">= new</span> <span class="cyan">Array</span>(); <span class="comment">// Arreglo de la información de los archivos por cargar.</span></code>
					<code><span class="cyan">var</span> _generalPct <span class="pink">=</span> <span class="purple">0</span>; <span class="comment">// Porcentaje de carga general.</span></code>
					<code><span class="cyan">var</span> _uploadedFiles <span class="pink">=</span> <span class="purple">0</span>; <span class="comment">// Cantidad de archivos por cargar.</span></code>
					<code><span class="cyan">const</span> _MAXSIZE <span class="pink">=</span> <span class="comment">/*kilobytes*/</span> <span class="purple">1024</span> <span class="pink">*</span> <span class="comment">/*megabytes*/</span> <span class="purple">10</span>; <span class="comment">// Tamaño máximo en megabytes permitos por cada archivo.</span></code>
					<code><span class="cyan">const</span> _MAXFILESTOUPLOAD <span class="pink">=</span> <span class="purple">5</span>; <span class="comment">// Número de archivos permitidos por carga.</span></code>
					<code><span class="cyan">const</span> _DAYSOFTHEWEEK <span class="pink">=</span> [<span class="yellow">'Domingo'</span>, <span class="yellow">'Lunes'</span>, <span class="yellow">'Martes'</span>, <span class="yellow">'Miércoles'</span>, <span class="yellow">'Jueves'</span>, <span class="yellow">'Viernes'</span>, <span class="yellow">'Sábado'</span>];</code>
					<code><span class="cyan">const</span> _MONTHS <span class="pink">=</span> [<span class="yellow">'Enero'</span>, <span class="yellow">'Febrero'</span>, <span class="yellow">'Marzo'</span>, <span class="yellow">'Abril'</span>, <span class="yellow">'Mayo'</span>, <span class="yellow">'Junio'</span>, <span class="yellow">'Julio'</span>, <span class="yellow">'Agosto'</span>, <span class="yellow">'Septiembre'</span>, <span class="yellow">'Octubre'</span>, <span class="yellow">'Noviembre'</span>, <span class="yellow">'Diciembre'</span>];</code><br />
					<code><span class="comment">/**</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Paso 2: crear una instancia de SimpleAjaxUploader.</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Para más información consulte la <a href="https://www.lpology.com/code/ajaxuploader/docs.php" target="_blank">documentación de Simple Ajax Uploader</a>.</span></code>
					<code> <span class="comment">*/</span></code>
					<code><span class="cyan">var</span> _simpleAjaxUploader <span class="pink">= new</span> ss.<span class="cyan">SimpleUpload</span>({</code>
					<code>	button: <span class="pink">$</span>(<span class="yellow">'#buttonSelectFiles'</span>),</code>
					<code>	url: <span class="yellow">'uploadFiles.php'</span>,</code>
					<code>	name: <span class="yellow">'inputUpload'</span>,</code>
					<code>	multiple: <span class="purple">true</span>,</code>
					<code>	multipleSelect: <span class="purple">true</span>,</code>
					<code>	maxUploads: _MAXFILESTOUPLOAD,</code>
					<code>	maxSize: _MAXSIZE,</code>
					<code>	autoSubmit: <span class="purple">false</span>, <span class="comment">// Previene que se carguen al momento de que el evento "onChange" del input generado por la librería se active.</span></code>
					<code>	responseType: <span class="yellow">'json'</span>,</code>
					<code>	<span class="green">onChange</span>: <span class="cyan">function</span> (<span class="orange">filename</span>, <span class="orange">extension</span>, <span class="orange">uploadBtn</span>, <span class="orange">fileSize</span>, <span class="orange">file</span>) {</code>
					<code>		<span class="comment">/**</span></code>
					<code>		 <span class="comment">*</span></code>
					<code>		 <span class="comment">* Esta variable servirá para validar si</span></code>
					<code>		 <span class="comment">* el archivo estrará al arreglo interno de</span></code>
					<code>		 <span class="comment">* archivos por cargar de a propia libreía.</span></code>
					<code>		 <span class="comment">*/</span></code>
					<code>		<span class="cyan">let</span> _isValidToUpload <span class="pink">=</span> <span class="purple">true</span>;</code><br />
					<code>		<span class="pink">$</span>(<span class="yellow">'#generalProgressbar'</span>).<span class="cyan">attr</span>(<span class="yellow">'aria-valuenow'</span>, <span class="purple">0</span>);</code>
					<code>		<span class="pink">$</span>(<span class="yellow">'#generalProgressbar &gt; .progress-bar'</span>).<span class="cyan">css</span>(<span class="yellow">'width'</span>, <span class="yellow">'0%'</span>).<span class="cyan">text</span>(<span class="yellow">'0%'</span>);</code><br />
					<code>		<span class="comment">/**</span></code>
					<code>		 <span class="comment">*</span></code>
					<code>		 <span class="comment">* Para este ejemplo valido 2 puntos</span></code>
					<code>		 <span class="comment">* escenciales para la carga de archivos</span></code>
					<code>		 <span class="comment">* y poder controlarlas.</span></code>
					<code>		 <span class="comment">*</span></code>
					<code>		 <span class="comment">* 1.- Validar si "_arrayInfoFiles.length"</span></code>
					<code>		 <span class="comment">* es menor o igual al límite establecido</span></code>
					<code>		 <span class="comment">* por la constante "_MAXFILESTOUPLOAD".</span></code>
					<code>		 <span class="comment">*/</span></code>
					<code>		<span class="pink">if</span> (_arrayInfoFiles.length <span class="pink">==</span> _MAXFILESTOUPLOAD) _isValidToUpload <span class="pink">=</span> <span class="purple">false</span>;</code><br />
					<code>		<span class="comment">/**</span></code>
					<code>		 <span class="comment">*</span></code>
					<code>		 <span class="comment">* 2.- Validar si cumple con el tamaño</span></code>
					<code>		 <span class="comment">* permitido sobre la constante de</span></code>
					<code>		 <span class="comment">* "_MAXSIZE".</span></code>
					<code>		 <span class="comment">*/</span></code>
					<code>		<span class="pink">else if</span> (fileSize <span class="pink">&gt;</span> _MAXSIZE) _isValidToUpload <span class="pink">=</span> <span class="purple">false</span>;</code><br />
					<code>		<span class="pink">if</span> (_isValidToUpload) {</code>
					<code>			_arrayInfoFiles.<span class="cyan">push</span>({</code>
					<code>				name: file.name,</code>
					<code>				type: file.type,</code>
					<code>				size: file.size,</code>
					<code>				lastModified: file.lastModified</code>
					<code>			});</code><br />
					<code>			<span class="cyan">fillTable</span>(_arrayInfoFiles);</code><br />
					<code>			<span class="pink">$</span>(<span class="yellow">'#buttonUploadFiles, #buttonResetFiles'</span>)</code>
					<code>				.<span class="cyan">attr</span>(<span class="yellow">'disabled'</span>, <span class="purple">false</span>);</code>
					<code>		}</code><br />
					<code>		<span class="comment">/**</span></code>
					<code>		 <span class="comment">*</span></code>
					<code>		 <span class="comment">* Al terminar esta instrucción,</span></code>
					<code>		 <span class="comment">* el valor de "Queue" se auto</span></code>
					<code>		 <span class="comment">* incrementa si retorna true.</span></code>
					<code>		 <span class="comment">*/</span></code>
					<code>		<span class="pink">return</span> _isValidToUpload;</code>
					<code>	},</code>
					<code>	<span class="green">onSubmit</span>: <span class="cyan">function</span> (<span class="orange">filename</span>, <span class="orange">extension</span>, <span class="orange">uploadBtn</span>, <span class="orange">fileSize</span>) {},</code>
					<code>	<span class="green">onProgress</span>: <span class="cyan">function</span> (<span class="orange">pct</span>) {},</code>
					<code>	<span class="green">onComplete</span>: <span class="cyan">function</span> (<span class="orange">filename</span>, <span class="orange">response</span>, <span class="orange">uploadBtn</span>, <span class="orange">fileSize</span>) {},</code>
					<code>	<span class="green">onDone</span>: <span class="cyan">function</span> (<span class="orange">filename</span>, <span class="orange">status</span>, <span class="orange">statusText</span>, <span class="orange">response</span>, <span class="orange">uploadBtn</span>, <span class="orange">fileSize</span>) {},</code>
					<code>	<span class="green">onAllDone</span>: <span class="cyan">function</span> () {</code>
					<code>		_arrayInfoFiles <span class="pink">= new</span> <span class="cyan">Array</span>();</code>
					<code>		_generalPct <span class="pink">=</span> <span class="purple">0</span>;</code>
					<code>		_uploadedFiles <span class="pink">=</span> <span class="purple">0</span>;</code>
					<code>	},</code>
					<code>	<span class="green">onError</span>: <span class="cyan">function</span> (<span class="orange">filename</span>, <span class="orange">errorType</span>, <span class="orange">status</span>, <span class="orange">statusText</span>, <span class="orange">response</span>, <span class="orange">uploadBtn</span>, <span class="orange">fileSize</span>) {},</code>
					<code>	<span class="green">onExtError</span>: <span class="cyan">function</span> (<span class="orange">filename</span>, <span class="orange">extension</span>) {},</code>
					<code>	<span class="green">onSizeError</span>: <span class="cyan">function</span> (<span class="orange">filename</span>, <span class="orange">fileSize</span>) {}</code>
					<code>});</code><br />
					<code><span class="comment">/**</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Paso 2.1: crear la función que llenará</span></code>
					<code> <span class="comment">* la tabla de archivos por cargar.</span></code>
					<code> <span class="comment">*/</span></code>
					<code><span class="cyan">function</span> <span class="green">fillTable</span> (<span class="orange">files</span> <span class="pink">=</span> []) {</code>
					<code>	<span class="cyan">let</span> $tbody <span class="pink">= $</span>(<span class="yellow">'#tableFiles &gt; tbody'</span>);</code><br />
					<code>	$tbody.<span class="cyan">html</span>(<span class="purple">null</span>);</code><br />
					<code>	<span class="pink">if</span> (files.length <span class="pink">&gt;</span> <span class="purple">0</span>) {</code>
					<code>		<span class="pink">$</span>.<span class="cyan">each</span>(files, <span class="cyan">function</span> (<span class="orange">index</span>, <span class="orange">value</span>) {</code>
					<code>			<span class="cyan">let</span> date <span class="pink">= new</span> <span class="cyan">Date</span>(value.lastModified);</code>
					<code>			<span class="cyan">let</span> fileName <span class="pink">=</span> value.name;</code>
					<code>			<span class="cyan">let</span> fileType <span class="pink">=</span> value.type;</code>
					<code>			<span class="cyan">let</span> fileSize <span class="pink">=</span> <span class="cyan">Math</span>.<span class="cyan">round</span>(value.size <span class="pink">/</span> _MAXSIZE) <span class="pink">/</span> <span class="purple">100</span>;</code>
					<code>			<span class="cyan">let</span> fileLastModified <span class="pink">=</span> <span class="yellow">`</span>${_DAYSOFTHEWEEK[date.<span class="cyan">getDay</span>()]}<span class="yellow">, </span>${date.<span class="cyan">getDate</span>()}<span class="yellow"> de </span>${_MONTHS[date.<span class="cyan">getMonth</span>()]}<span class="yellow"> de </span>${date.<span class="cyan">getFullYear</span>()}<span class="yellow"> a las </span>${date.<span class="cyan">getHours</span>()}<span class="yellow">:</span>${date.<span class="cyan">getMinutes</span>()}<span class="yellow">:</span>${date.<span class="cyan">getSeconds</span>()}<span class="yellow">`</span>;</code><br />
					<code>			$tbody.append(<span class="yellow">`&lt;tr id="tr_</span>${<span class="cyan">sanitizeString</span>(fileName)}<span class="yellow">"&gt;</span></code>
					<code>				<span class="yellow">&lt;td&gt;</span>${fileName}<span class="yellow">&lt;/td&gt;</span></code>
					<code>				<span class="yellow">&lt;td&gt;</span>${fileType}<span class="yellow">&lt;/td&gt;</span></code>
					<code>				<span class="yellow">&lt;td&gt;</span>${fileSize}<span class="yellow">MB&lt;/td&gt;</span></code>
					<code>				<span class="yellow">&lt;td&gt;</span>${fileLastModified}&lt;/td&gt;</span></code>
					<code>				<span class="yellow">&lt;td class="text-center td-pct"&gt;0%&lt;/td&gt;</span></code>
					<code>				<span class="yellow">&lt;td class="td-status"&gt;&lt;span class="badge text-bg-dark"&gt;Por Cargar&lt;/span&gt;&lt;/td&gt;</span></code>
					<code>			<span class="yellow">&lt;/tr&gt;`</span>);</code>
					<code>		});</code>
					<code>	} <span class="pink">else</span> $tbody</code>
					<code>		.<span class="cyan">html</span>(<span class="yellow">`&lt;tr&gt;&lt;td colspan="6" class="text-center"&gt;No hay archivos por cargar.&lt;/td&gt;&lt;/tr&gt;`</span>);</code>
					<code>}</code><br />
					<code><span class="comment">/**</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Paso 2.2: crear la función para limpiar</span></code>
					<code> <span class="comment">* el nombre de cada archivo que será asignado</span></code>
					<code> <span class="comment">* como identificador de cada renglón de la tabla.</span></code>
					<code> <span class="comment">*/</span></code>
					<code><span class="cyan">function</span> <span class="green">sanitizeString</span> (<span class="orange">stringToSanitize</span>) {</code>
					<code>	<span class="cyan">let</span> newString <span class="pink">=</span> stringToSanitize.<span class="cyan">replace</span>(<span class="yellow">/</span><span class="purple">[\x20-\x2f\x3a-\x40\x5b-\x60\x7b-\xff]</span><span class="yellow">/</span><span class="pink">g</span>, <span class="yellow">''</span>);</code><br />
					<code>	<span class="pink">return</span> newString;</code>
					<code>}</code><br />
					<code><span class="comment">/**</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Paso 3: crear el evento del botón que</span></code>
					<code> <span class="comment">* accionará el evento submit del objeto</span></code>
					<code> <span class="comment">* de SimpleAjaxUploader.</span></code>
					<code> <span class="comment">*/</span></code>
					<code><span class="pink">$</span>(<span class="yellow">'#buttonUploadFiles'</span>).<span class="cyan">click</span>(<span class="cyan">function</span> () {</code>
					<code>	<span class="comment">/**</span></code>
					<code>	 <span class="comment">*</span></code>
					<code>	 <span class="comment">* Por cada elemento en el arreglo</span></code>
					<code>	 <span class="comment">* de archivos por cargar, se lanzará</span></code>
					<code>	 <span class="comment">* el evento de "submit".</span></code>
					<code>	 <span class="comment">*</span></code>
					<code>	 <span class="comment">* También desactivar los botones de</span></code>
					<code>	 <span class="comment">* iniciar carga y limpiar carga.</span></code>
					<code>	 <span class="comment">*/</span></code>
					<code>	<span class="pink">$</span>(<span class="yellow">'#buttonUploadFiles, #buttonResetFiles'</span>)</code>
					<code>		.<span class="cyan">attr</span>(<span class="yellow">'disabled'</span>, <span class="purple">true</span>);</code><br>
					<code>	<span class="pink">for</span> (<span class="cyan">let</span> i <span class="pink">=</span> <span class="purple">0</span>; i <span class="pink">&lt;</span> _arrayInfoFiles.length; i<span class="pink">++</span>) _simpleAjaxUploader.<span class="cyan">submit</span>();</code>
					<code>});</code><br />
					<code><span class="comment">/**</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Paso 4: crear el evento del botón que</span></code>
					<code> <span class="comment">* reseteará la carga.</span></code>
					<code> <span class="comment">*/</span></code>
					<code><span class="pink">$</span>(<span class="yellow">'#buttonResetFiles'</span>).<span class="cyan">click</span>(<span class="cyan">function</span> () {</code>
					<code>	_simpleAjaxUploader.<span class="cyan">clearQueue</span>();</code>
					<code>	_arrayInfoFiles <span class="pink">= new</span> <span class="cyan">Array</span>();</code>
					<code>	_generalPct <span class="pink">=</span> <span class="purple">0</span>;</code>
					<code>	_uploadedFiles <span class="pink">=</span> <span class="purple">0</span>;</code><br />
					<code>	<span class="cyan">fillTable</span>();</code><br />
					<code>	<span class="pink">$</span>(<span class="yellow">'#buttonUploadFiles, #buttonResetFiles'</span>)</code>
					<code>		.<span class="cyan">attr</span>(<span class="yellow">'disabled'</span>, <span class="purple">true</span>);</code><br />
					<code>});</code>
				</pre>
				<samp>PHP</samp>
				<pre class="sb">
					<code>&lt;?php</code><br />
					<code><span class="comment">/**</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Y este será el backend para este ejemplo,</span></code>
					<code> <span class="comment">* el cual está declarado en la propiedad de</span></code>
					<code> <span class="comment">* "url" del objeto de SimpleAjaxUploader en</span></code>
					<code> <span class="comment">* el archivo .js con el valor de: "uploadFiles.php"</span></code>
					<code> <span class="comment">*/</span></code>
					<code><span class="pink">require</span> <span class="yellow">"SimpleAjaxUploader/Uploader.php"</span>;</code><br />
					<code>$simpleAjaxUploader <span class="pink">= new</span> <span class="cyan">FileUpload</span>(<span class="yellow">"inputUploadFiles"</span>);</code><br />
					<code>$simpleAjaxUploader-&gt;sizeLimit <span class="pink">=</span> ((<span class="comment">/*byte*/</span> <span class="purple">1</span> <span class="pink">*</span> <span class="comment">/*bytes*/</span> <span class="purple">1024</span>) <span class="comment">/* = kilobyte*/</span> <span class="pink">*</span> <span class="comment">/*kilobytes*/</span> <span class="purple">1024</span>) <span class="comment">/* = megabyte*/</span> <span class="pink">*</span> <span class="comment">/*megabytes*/</span> <span class="purple">10</span>;</code><br />
					<code><span class="comment">/**</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Para este ejemplo, yo opté por</span></code>
					<code> <span class="comment">* permitir cualquier tipo de archivo.</span></code>
					<code> <span class="comment">*/</span></code>
					<code><span class="comment">// $simpleAjaxUploader-&gt;allowedExtensions = ["jpg", "jpeg", "png", "gif", "webm"];</span></code><br />
					<code>$result <span class="pink">=</span> $simpleAjaxUploader-&gt;<span class="cyan">handleUpload</span>(<span class="cyan">dirname</span>(<span class="purple">__FILE__</span>) <span class="pink">.</span> <span class="yellow">"/files"</span>);</code><br />
					<code><span class="pink">if</span> (<span class="pink">!</span>$result) {</code>
					<code>	<span class="pink">exit</span>(<span class="cyan">json_encode</span>([<span class="yellow">"success"</span> =&gt; <span class="purple">false</span>, <span class="yellow">"msg"</span> =&gt; $simpleAjaxUploader-&gt;<span class="cyan">getErrorMsg</span>()]));</code>
					<code>}</code><br />
					<code><span class="cyan">echo json_encode</span>([<span class="yellow">"success"</span> =&gt; <span class="purple">true</span>, <span class="yellow">"file"</span> =&gt; $simpleAjaxUploader-&gt;<span class="cyan">getSavedFile</span>()]);</code>
				</pre>
				<p class="my-text"><b>Forma 1 - Mostrar el porcentaje y estatus de carga de cada archivo en una tabla:</b> de esta forma se tendrá la visual del proceso de carga de cada archivo cargado. Pero también se corre el riesgo de que el usuario interactue con otras funciones del sitio que entorpezca el proceso de carga.</p>
				<samp>HTML</samp>
				<pre class="sb">
					<code><span class="comment">&lt;!-- Esta será la tabla donde se mostrarán los archivos por cargar. También su respectiva información, estatus de carga y porcentaje de carga. --&gt;</span></code>
					<code>&lt;<span class="pink">div</span> <span class="green">class</span>=<span class="yellow">"table-responsive"</span>&gt;</code>
					<code>	&lt;<span class="pink">table</span> <span class="green">class</span>=<span class="yellow">"table table-borderless table-hover"</span> <span class="green">id</span>=<span class="yellow">"tableFiles"</span>&gt;</code>
					<code>		&lt;<span class="pink">thead</span>&gt;</code>
					<code>			&lt;<span class="pink">tr</span>&gt;</code>
					<code>				&lt;<span class="pink">th</span>&gt;Archivo&lt;/<span class="pink">th</span>&gt;</code>
					<code>				&lt;<span class="pink">th</span>&gt;Tipo&lt;/<span class="pink">th</span>&gt;</code>
					<code>				&lt;<span class="pink">th</span>&gt;Tamaño (Aproximado)&lt;/<span class="pink">th</span>&gt;</code>
					<code>				&lt;<span class="pink">th</span>&gt;Última Modificación&lt;/<span class="pink">th</span>&gt;</code>
					<code>				&lt;<span class="pink">th</span>&gt;Porcentaje de Carga&lt;/<span class="pink">th</span>&gt;</code>
					<code>				&lt;<span class="pink">th</span>&gt;Estatus&lt;/<span class="pink">th</span>&gt;</code>
					<code>			&lt;/<span class="pink">tr</span>&gt;</code>
					<code>		&lt;/<span class="pink">thead</span>&gt;</code>
					<code>		&lt;<span class="pink">tbody</span>&gt;</code>
					<code>			&lt;<span class="pink">tr</span>&gt;</code>
					<code>				&lt;<span class="pink">td</span> <span class="green">colspan</span>=<span class="yellow">"6"</span> <span class="green">class</span>=<span class="yellow">"text-center"</span>&gt;No hay archivos por cargar.&lt;/<span class="pink">td</span>&gt;</code>
					<code>			&lt;/<span class="pink">tr</span>&gt;</code>
					<code>		&lt;/<span class="pink">tbody</span>&gt;</code>
					<code>	&lt;/<span class="pink">table</span>&gt;</code>
					<code>&lt;/<span class="pink">div</span>&gt;</code><br />
					<code><span class="comment">&lt;!-- Barra de progreso de carga general. --&gt;</span></code>
					<code>&lt;<span class="pink">div</span> <span class="green">class</span>=<span class="yellow">"progress mb-3"</span> <span class="green">id</span>=<span class="yellow">"generalProgressbar"</span> <span class="green">role</span>=<span class="yellow">"progressbar"</span> <span class="green">aria-label</span>=<span class="yellow">"Progreso de carga general"</span> <span class="green">aria-valuenow</span>=<span class="yellow">"0"</span> <span class="green">aria-valuemin</span>=<span class="yellow">"0"</span> <span class="green">aria-valuemax</span>=<span class="yellow">"100"</span> <span class="green">style</span>=<span class="yellow">"</span><span class="cyan">height</span>: <span class="purple">30</span><span class="cyan">px</span>;<span class="yellow">"</span>&gt;</code>
					<code>	&lt;<span class="pink">div</span> <span class="green">class</span>=<span class="yellow">"progress-bar"</span> <span class="green">style</span>=<span class="yellow">"</span><span class="cyan">width</span>: <span class="purple">0</span><span class="cyan">%</span><span class="yellow">"</span>&gt;0%&lt;/<span class="pink">div</span>&gt;</code>
					<code>&lt;/<span class="pink">div</span>&gt;</code>
				</pre>
				<samp>JS</samp>
				<pre class="sb">
					<code><span class="comment">/**</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Dentro del mismo objeto de</span></code>
					<code> <span class="comment">* SimpleAjaxUploader.</span></code>
					<code> <span class="comment">*/</span></code>
					<code><span class="cyan">var</span> _simpleAjaxUploader <span class="pink">= new</span> ss.<span class="cyan">SimpleUpload</span>({</code>
					<code>	...</code>
					<code>	<span class="comment">/**</span></code>
					<code>	 <span class="comment">*</span></code>
					<code>	 <span class="comment">* Todo esto ocurrirá al accionar el</span></code>
					<code>	 <span class="comment">* botón de "#buttonUploadFiles".</span></code>
					<code>	 <span class="comment">*/</span></code>
					<code>	<span class="green">onSubmit</span>: <span class="cyan">function</span> (<span class="orange">filename</span>, <span class="orange">extension</span>, <span class="orange">uploadBtn</span>, <span class="orange">fileSize</span>) {</code>
					<code>		<span class="comment">/**</span></code>
					<code>		 <span class="comment">*</span></code>
					<code>		 <span class="comment">* 1.- La variable "_uploadedFiles" tomará el valor de</span></code>
					<code>		 <span class="comment">* máximo de "QueueSize" ya que este en cada archivo</span></code>
					<code>		 <span class="comment">* que se procesa para su carga, este mismo va disminuyendo</span></code>
					<code>		 <span class="comment">* su valor. De ahi la comparativa de si "_uploadedFiles"</span></code>
					<code>		 <span class="comment">* es menor a "QueueSize", resultando en "true" en la 1ra</span></code>
					<code>		 <span class="comment">* vuelta (archivo) y su valor será cosntante.</span></code>
					<code>		 <span class="comment">*</span></code>
					<code>		 <span class="comment">* 2.- Tomamos el renglon del archivo de la tabla por su nombre "sanitizado"</span></code>
					<code>		 <span class="comment">* para su manipulación.</span></code>
					<code>		 <span class="comment">*</span></code>
					<code>		 <span class="comment">* 3.- Del mismo renglón que declaramos, buscamos una celda o table-data</span></code>
					<code>		 <span class="comment">* con la clase "td-status" para asignarle en estado esta el archivo por</span></code>
					<code>		 <span class="comment">* cargar (en este caso estará en "Cargando")</span></code>
					<code>		 <span class="comment">*</span></code>
					<code>		 <span class="comment">* 4.- Se manda a llamar el método de "setPctBox" o asignar elemento para</span></code>
					<code>		 <span class="comment">* mostrar el porcentaje de cargar del archivo. El método toma como parámetro</span></code>
					<code>		 <span class="comment">* un elemento HTML (puede ser DOM o de tipo jQuery, según la documentación)</span></code>
					<code>		 <span class="comment">*/</span></code>
					<code>		<span class="pink">if</span> (_uploadedFiles <span class="pink">&lt;</span> <span class="orange">this</span>.<span class="cyan">getQueueSize</span>()) _uploadedFiles <span class="pink">=</span> <span class="orange">this</span>.<span class="cyan">getQueueSize</span>();</code><br />
					<code>		<span class="cyan">let</span> $tr <span class="pink">=</span> <span class="pink">$</span>(<span class="yellow">`#tableFiles #tr_</span>${<span class="cyan">sanitizeString</span>(filename)}<span class="yellow">`</span>);</code><br />
					<code>		$tr.<span class="cyan">find</span>(<span class="yellow">'.td-status'</span>).<span class="cyan">html</span>(<span class="yellow">`&lt;span class="badge text-bg-primary"&gt;Cargando&lt;/span&gt;`</span>);</code><br />
					<code>		<span class="orange">this</span>.<span class="cyan">setPctBox</span>($tr.<span class="cyan">find</span>(<span class="yellow">'.td-pct'</span>));</code>
					<code>	},</code>
					<code>	<span class="green">onProgress</span>: <span class="cyan">function</span> (<span class="orange">pct</span>) {</code>
					<code>		<span class="comment">/**</span></code>
					<code>		 <span class="comment">*</span></code>
					<code>		 <span class="comment">* 1.- La condición de "QueueSize" se aplica para</span></code>
					<code>		 <span class="comment">* iniciar la sumatoria de la barra de progreso. El</span></code>
					<code>		 <span class="comment">* valor de "Queue" disminuye de 1 en 1 (es decir:</span></code>
					<code>		 <span class="comment">* por cada archivo cargado) hasta llegar a 0 desde</span></code>
					<code>		 <span class="comment">* la función de "onSubmit".</span></code>
					<code>		 <span class="comment">*</span></code>
					<code>		 <span class="comment">* 2.- Si el parámetro "pct" llega a 100, este se suma</span></code>
					<code>		 <span class="comment">* la variable global de "_generalPct", misma que se</span></code>
					<code>		 <span class="comment">* usará en la barra de progreso.</span></code>
					<code>		 <span class="comment">*</span></code>
					<code>		 <span class="comment">* 3.- La variable global "_generalPct" se le suma</span></code>
					<code>		 <span class="comment">* la fracción de "pct" entre la variable global de</span></code>
					<code>		 <span class="comment">* "_uploadedFiles". El resultado se asigna a las</span></code>
					<code>		 <span class="comment">* a las propiedades de la barra de progreso y</span></code>
					<code>		 <span class="comment">* mostrar el porcentaje correspondiente.</span></code>
					<code>		 <span class="comment">*/</span></code>
					<code>		<span class="pink">if</span> (<span class="orange">this</span>.<span class="cyan">getQueueSize</span>() <span class="pink">==</span> <span class="purple">0</span>) {</code>
					<code>			<span class="pink">if</span> (pct <span class="pink">==</span> <span class="purple">100</span>) {</code>
					<code>				_generalPct <span class="pink">+=</span> (pct <span class="pink">/</span> _uploadedFiles);</code><br />
					<code>				<span class="pink">$</span>(<span class="yellow">'#generalProgressbar'</span>).<span class="cyan">attr</span>(<span class="yellow">'aria-valuenow'</span>, _generalPct);</code>
					<code>				<span class="pink">$</span>(<span class="yellow">'#generalProgressbar &gt; .progress-bar'</span>).<span class="cyan">css</span>(<span class="yellow">'width'</span>, <span class="yellow">`</span>${_generalPct}<span class="yellow">%`</span>).<span class="cyan">text</span>(<span class="yellow">`</span>${_generalPct}<span class="yellow">%`</span>);</code>
					<code>			}</code>
					<code>		}</code>
					<code>	},</code>
					<code>	<span class="green">onComplete</span>: <span class="cyan">function</span> (<span class="orange">filename</span>, <span class="orange">response</span>, <span class="orange">uploadBtn</span>, <span class="orange">fileSize</span>) {</code>
					<code>		<span class="comment">/**</span></code>
					<code>		 <span class="comment">*</span></code>
					<code>		 <span class="comment">* Apartir de esta función, así como las</span></code>
					<code>		 <span class="comment">* funciones de "onError", "onExtError" y</span></code>
					<code>		 <span class="comment">* "onSizeError" tienen ya la misma lógica.</span></code>
					<code>		 <span class="comment">* Se declara una variable donde se selecciona</span></code>
					<code>		 <span class="comment">* el renglón que mostrará el estatus de carga,</span></code>
					<code>		 <span class="comment">* ya sea si fue correcto o con error.</span></code>
					<code>		 <span class="comment">*/</span></code>
					<code>		<span class="cyan">let</span> $tr <span class="pink">= $</span>(<span class="yellow">`#tableFiles #tr_</span>${<span class="cyan">sanitizeString</span>(filename)}<span class="yellow">`</span>);</code><br />
					<code>		<span class="pink">if</span> (response.success <span class="pink">===</span> <span class="purple">true</span>)</code>
					<code>			$tr.<span class="cyan">find</span>(<span class="yellow">'.td-status'</span>).<span class="cyan">html</span>(<span class="yellow">`&lt;span class="badge text-bg-success"&gt;Cargado&lt;/span&gt;`</span>);</code>
					<code>		<span class="pink">else</span></code>
					<code>			$tr.<span class="cyan">find</span>(<span class="yellow">'.td-status'</span>).<span class="cyan">html</span>(<span class="yellow">`&lt;span class="badge text-bg-danger"&gt;Error&lt;/span&gt;`</span>);</code>
					<code>	},</code>
					<code>	<span class="green">onDone</span>: <span class="cyan">function</span> (<span class="orange">filename</span>, <span class="orange">status</span>, <span class="orange">statusText</span>, <span class="orange">response</span>, <span class="orange">uploadBtn</span>, <span class="orange">fileSize</span>) {</code>
					<code>		<span class="comment">/**</span></code>
					<code>		 <span class="comment">*</span></code>
					<code>		 <span class="comment">* Al finalizar correctamente la carga, se</span></code>
					<code>		 <span class="comment">* cambia el porcentaje de progreso de carga</span></code>
					<code>		 <span class="comment">* del renglón seleccionado a 100% puesto que</span></code>
					<code>		 <span class="comment">* la función de "setPctBox" por alguna razón</span></code>
					<code>		 <span class="comment">* deja el campo en blanco.</span></code>
					<code>		 <span class="comment">*/</span></code>
					<code>		<span class="pink">$</span>(<span class="yellow">`#tableFiles #tr_</span>${<span class="cyan">sanitizeString</span>(filename)}<span class="yellow">`</span>)</code>
					<code>			.<span class="cyan">find</span>(<span class="yellow">'.td-pct'</span>).<span class="cyan">text</span>(<span class="yellow">'100%'</span>);</code>
					<code>	},</code>
					<code>	<span class="green">onError</span>: <span class="cyan">function</span> (<span class="orange">filename</span>, <span class="orange">errorType</span>, <span class="orange">status</span>, <span class="orange">statusText</span>, <span class="orange">response</span>, <span class="orange">uploadBtn</span>, <span class="orange">fileSize</span>) {</code>
					<code>		<span class="cyan">let</span> $tr <span class="pink">= $</span>(<span class="yellow">`#tableFiles #tr_</span>${<span class="cyan">sanitizeString</span>(filename)}<span class="yellow">`</span>);</code><br />
					<code>		$tr.<span class="cyan">find</span>(<span class="yellow">'.td-status'</span>).<span class="cyan">html</span>(<span class="yellow">`&lt;span class="badge text-bg-danger"&gt;Error&lt;/span&gt;`</span>);</code>
					<code>	},</code>
					<code>	<span class="green">onExtError</span>: <span class="cyan">function</span> (<span class="orange">filename</span>, <span class="orange">extension</span>) {</code>
					<code>		<span class="cyan">let</span> $tr <span class="pink">= $</span>(<span class="yellow">`#tableFiles #tr_</span>${<span class="cyan">sanitizeString</span>(filename)}<span class="yellow">`</span>);</code><br />
					<code>		$tr.<span class="cyan">find</span>(<span class="yellow">'.td-status'</span>).<span class="cyan">html</span>(<span class="yellow">`&lt;span class="badge text-bg-danger"&gt;Error&lt;/span&gt;`</span>);</code>
					<code>	},</code>
					<code>	<span class="green">onSizeError</span>: <span class="cyan">function</span> (<span class="orange">filename</span>, <span class="orange">fileSize</span>) {</code>
					<code>		<span class="cyan">let</span> $tr <span class="pink">= $</span>(<span class="yellow">`#tableFiles #tr_</span>${<span class="cyan">sanitizeString</span>(filename)}<span class="yellow">`</span>);</code><br />
					<code>		$tr.<span class="cyan">find</span>(<span class="yellow">'.td-status'</span>).<span class="cyan">html</span>(<span class="yellow">`&lt;span class="badge text-bg-danger"&gt;Error&lt;/span&gt;`</span>);</code>
					<code>	}</code>
					<code>});</code>
				</pre>
				<p class="my-text"><b>Forma 2 - Mostrar el porcentaje general en una pantalla protectora:</b> de esta manera se podrá visualizar progreso general de carga pero no el progreso de carga de los mismos archivos. Esta forma tiene la ventaja de prevenir acciones por el usuario mencionados anteriormente.</p>
				<samp>CSS</samp>
				<pre class="sb">
					<code><span class="comment">/**</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Primero creamos la clase en nuestra</span></code>
					<code> <span class="comment">* hoja de estilos.</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* .my-screen-protector</span></code>
					<code> <span class="comment">*/</span></code>
					<code><span class="green">.my-screen-protector</span> {</code>
					<code>  <span class="cyan">width</span>: <span class="purple">100</span><span class="cyan">%</span>;</code>
					<code>  <span class="cyan">height</span>: <span class="purple">100</span><span class="cyan">%</span>;</code>
					<code>  <span class="cyan">position</span>: <span class="cyan">fixed</span>;</code>
					<code>  <span class="cyan">padding</span>: <span class="purple">30</span><span class="cyan">px</span>;</code>
					<code>  <span class="cyan">display</span>: <span class="cyan">table</span>;</code>
					<code>  <span class="cyan">background-color</span>: <span class="cyan">rgba</span>(<span class="purple">0</span>, <span class="purple">0</span>, <span class="purple">0</span>, <span class="purple">0.7</span>);</code>
					<code>  <span class="cyan">z-index</span>: <span class="purple">9999</span>;</code>
					<code>}</code>
					<code><span class="green">.my-screen-protector</span>:before,</code>
					<code><span class="green">.my-screen-protector</span>:after {</code>
					<code>  <span class="cyan">display</span>: <span class="cyan">table</span>;</code>
					<code>  <span class="cyan">content</span>: <span class="yellow">" "</span>;</code>
					<code>}</code>
					<code><span class="green">.my-screen-protector</span>:after {</code>
					<code>  <span class="cyan">clear</span>: <span class="cyan">both</span>;</code>
					<code>}</code>
					<code><span class="green">.my-screen-protector</span> <span class="pink">&gt;</span> <span class="green">.vertical-center</span> {</code>
					<code>  <span class="cyan">text-align</span>: <span class="cyan">center</span>;</code>
					<code>  <span class="cyan">display</span>: <span class="cyan">table-cell</span>;</code>
					<code>  <span class="cyan">vertical-align</span>: <span class="cyan">middle</span>;</code>
					<code>}</code>
					<code><span class="green">.my-screen-protector</span> <span class="pink">&gt;</span> <span class="green">.vertical-center</span> <span class="pink">&gt; h2</span> {</code>
					<code>  <span class="cyan">font-family</span>: <span class="cyan">inherit</span>;</code>
					<code>  <span class="cyan">color</span>: <span class="purple">#fff</span>;</code>
					<code>}</code>
					<code><span class="pink">body</span><span class="green">.uploading-files</span> {</code>
					<code>  <span class="cyan">overflow</span>: <span class="cyan">hidden</span>;</code>
					<code>}</code>
				</pre>
				<samp>JS</samp>
				<pre class="sb">
					<code><span class="comment">/**</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Despues:</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Dentro del mismo objeto de</span></code>
					<code> <span class="comment">* SimpleAjaxUploader.</span></code>
					<code> <span class="comment">*/</span></code>
					<code><span class="cyan">var</span> _simpleAjaxUploader <span class="pink">= new</span> ss.<span class="cyan">SimpleUpload</span>({</code>
					<code>	...</code>
					<code>	<span class="green">onProgress</span>: <span class="cyan">function</span> (<span class="orange">pct</span>) {</code>
					<code>		<span class="comment">/**</span></code>
					<code>		 <span class="comment">*</span></code>
					<code>		 <span class="comment">* Para este caso, la lógica de la</span></code>
					<code>		 <span class="comment">* función "onProgress" es similar</span></code>
					<code>		 <span class="comment">* a la de solo la barra de progreso.</span></code>
					<code>		 <span class="comment">* La única diferencia es el selector.</span></code>
					<code>		 <span class="comment">*/</span></code>
					<code>		<span class="pink">if</span> (<span class="orange">this</span>.<span class="cyan">getQueueSize</span>() <span class="pink">==</span> <span class="purple">0</span>) {</code>
					<code>			<span class="pink">if</span> (pct <span class="pink">==</span> <span class="purple">100</span>) {</code>
					<code>				_generalPct <span class="pink">+=</span> (pct <span class="pink">/</span> _uploadedFiles);</code><br />
					<code>				<span class="pink">$</span>(<span class="yellow">'#screenGeneralProgressbar'</span>).<span class="cyan">attr</span>(<span class="yellow">'aria-valuenow'</span>, _generalPct);</code>
					<code>				<span class="pink">$</span>(<span class="yellow">'#screenGeneralProgressbar &gt; .progress-bar'</span>).<span class="cyan">css</span>(<span class="yellow">'width'</span>, <span class="yellow">`</span>${_generalPct}<span class="yellow">%`</span>).<span class="cyan">text</span>(<span class="yellow">`</span>${_generalPct}<span class="yellow">%`</span>);</code>
					<code>			}</code>
					<code>		}</code>
					<code>	},</code>
					<code>	<span class="green">onAllDone</span>: <span class="cyan">function</span> () {</code>
					<code>		<span class="comment">/**</span></code>
					<code>		 <span class="comment">*</span></code>
					<code>		 <span class="comment">* De la misma forma de solo mostrar</span></code>
					<code>		 <span class="comment">* la barra de progreso, al finalizar</span></code>
					<code>		 <span class="comment">* la carga de todos los archivos, se</span></code>
					<code>		 <span class="comment">* elimina el elemento que funge como</span></code>
					<code>		 <span class="comment">* protector de pantalla.</span></code>
					<code>		 <span class="comment">*</span></code>
					<code>		 <span class="comment">* También agregué una función timer para</span></code>
					<code>		 <span class="comment">* que la pantalla se pueda visualizar por</span></code>
					<code>		 <span class="comment">* completo la animación de la barra de</span></code>
					<code>		 <span class="comment">* progreso general.</span></code>
					<code>		 <span class="comment">*/</span></code>
					<code>		<span class="cyan">setTimeout</span>(<span class="orange">_</span> <span class="cyan">=&gt;</span> {</code>
					<code>			<span class="pink">$</span>(<span class="yellow">'div.my-screen-protector'</span>).<span class="cyan">remove</span>();</code><br />
					<code>			<span class="pink">$</span>(<span class="yellow">'body'</span>).<span class="cyan">removeClass</span>(<span class="yellow">'uploading-files'</span>);</code>
					<code>		}, <span class="purple">1000</span>);</code><br />
					<code>		_arrayInfoFiles <span class="pink">= new</span> <span class="cyan">Array</span>();</code>
					<code>		_generalPct <span class="pink">=</span> <span class="purple">0</span>;</code>
					<code>		_uploadedFiles <span class="pink">=</span> <span class="purple">0</span>;</code>
					<code>	},</code>
					<code>	...</code>
					<code>});</code><br />
					<code><span class="comment">/**</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Y por último</span></code>
					<code> <span class="comment">*/</span></code>
					<code><span class="pink">$</span>(<span class="yellow">'#buttonUploadFiles'</span>).<span class="cyan">click</span>(<span class="cyan">function</span> () {</code>
					<code>	<span class="comment">/**</span></code>
					<code>	 <span class="comment">*</span></code>
					<code>	 <span class="comment">* Aquí la lógica se mantiene igual</span></code>
					<code>	 <span class="comment">* salvo las siguientes líneas que</span></code>
					<code>	 <span class="comment">* agregan el elemento HTML para</span></code>
					<code>	 <span class="comment">* cubrir el resto del sitio y</span></code>
					<code>	 <span class="comment">* deshabilitar la barra de scroll.</span></code>
					<code>	 <span class="comment">*/</span></code>
					<code>	<span class="pink">$</span>(<span class="yellow">'body'</span>).<span class="cyan">prepend</span>(<span class="yellow">`&lt;div class="my-screen-protector"&gt;</span></code>
					<code>		<span class="yellow">&lt;div class="vertical-center"&gt;</span></code>
					<code>			<span class="yellow">&lt;h2 class="mb-3"&gt;&lt;i class="fa-solid fa-cloud-arrow-up fa-bounce"&gt;&lt;/i&gt; Cargando archivos, un momento por favor.&lt;/h2&gt;</span></code>
					<code>			<span class="yellow">&lt;div class="progress mb-3" id="screenGeneralProgressbar" role="progressbar" aria-label="Progreso de carga general" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="height: 30px;"&gt;</span></code>
					<code>				<span class="yellow">&lt;div class="progress-bar" style="width: 0%"&gt;0%&lt;/div&gt;</span></code>
					<code>			<span class="yellow">&lt;/div&gt;</span></code>
					<code>		<span class="yellow">&lt;/div&gt;</span></code>
					<code>	<span class="yellow">&lt;/div&gt;`</span>).<span class="cyan">addClass</span>(<span class="yellow">'uploading-files'</span>);</code><br />
					<code>	<span class="pink">$</span>(<span class="yellow">'#buttonUploadFiles, #buttonResetFiles'</span>)</code>
					<code>		.<span class="cyan">attr</span>(<span class="yellow">'disabled'</span>, <span class="purple">true</span>);</code><br>
					<code>	<span class="pink">for</span> (<span class="cyan">let</span> i <span class="pink">=</span> <span class="purple">0</span>; i <span class="pink">&lt;</span> _arrayInfoFiles.length; i<span class="pink">++</span>) _simpleAjaxUploader.<span class="cyan">submit</span>();</code>
					<code>});</code>
				</pre>
				<p class="my-text">Y para concluir con este ejemplo: solo mencionaré que a esta librería le vendría bien que en la propiedad de "onProgress" se agregara en la función un parámetro extra el cual sería el archivo que está en proceso de carga. También durate el desarrollo de este ejemplo tuve que descartar algunas funciones de la misma librería como "removeCurrent", ya que este lo usaba en la propiedad de "onChange" cuando el archivo por cargar no cumplía con las validaciones, esto debido a que "removeCurrent" solo elimina el elemento anterior, siendo que en la propia documentación se especifica que se puede usar dentro de las propiedades de "onSubmit" y "onChange". Y por último, la función de "setPctBox" sería bueno que también aceptara un arreglo de elementos HTML o un querySelectorAll para que el porcentage de carga pueda mostrase en varios lugares a la vez (por ejemplo en el output de arriba). Y eso sería todo por este ejemplo, espero que sirva de ayuda para quienes buscan desarrollar con esta librería.</p>
				<!--
				<div class="row">
					<div class="col">
						<div class="my-drop-zone" id="divFileSimpleAjaxUploader">
							<input type="file" id="inputFileSimpleAjaxUploader" name="inputFileSimpleAjaxUploader" multiple />
							<label for="inputFileSimpleAjaxUploader">
								<strong>Seleccione sus archivos</strong> o arrástrelos aquí <i class="fa-solid fa-hand-point-down"></i>
							</label>
						</div>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col">
						<div class="table-responsive">
							<table class="table table-borderless table-hover" id="tableFilesSimpleAjaxUploader">
								<thead>
									<tr>
										<th>Archivo</th>
										<th>Tipo</th>
										<th>Tamaño (Aproximado)</th>
										<th>Última Modificación</th>
										<th>Porcentaje de Carga</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td colspan="5" class="text-center">No hay archivos por cargar.</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 offset-md-1">
						<div class="d-grid gap-1">
							<button type="button" class="btn btn-success" id="buttonUploadSimpleAjaxUploader"><i class="fa-solid fa-cloud-arrow-up"></i> Cargar Archivos</button>
						</div>
					</div>
					<div class="col-md-4 offset-md-2">
						<div class="d-grid gap-1">
							<button type="button" class="btn btn-light" id="buttonResetSimpleAjaxUploader" disabled><i class="fa-solid fa-eraser"></i> Eliminar Archivos</button>
						</div>
					</div>
				</div>
				<br />
				<h2><i class="fa-solid fa-code"></i> Codificación</h2>
				<div class="row">
					<div class="col-md-7">
						<samp>HTML</samp>
						<pre class="sb">
							<code><span class="comment">&lt;!-- Aquí estará el input que cargará los archivos. --&gt;</span></code>
							<code>&lt;<span class="pink">div</span> <span class="green">class</span>=<span class="yellow">"my-drop-zone"</span> <span class="green">id</span>=<span class="yellow">"divFile"</span>&gt;</code>
							<code>    &lt;<span class="pink">input</span> <span class="green">type</span>=<span class="yellow">"file"</span> <span class="green">id</span>=<span class="yellow">"inputFile"</span> <span class="green">name</span>=<span class="yellow">"inputFile"</span> <span class="green">multiple</span> /&gt;</code>
							<code>    &lt;<span class="pink">label</span> <span class="green">for</span>=<span class="yellow">"inputFile"</span>&gt;</code>
							<code>        &lt;<span class="pink">strong</span>&gt;Seleccione sus archivos&lt;/<span class="pink">strong</span>&gt</code>
							<code>    &lt;/<span class="pink">label</span>&gt;</code>
							<code>&lt;/<span class="pink">div</span>&gt;</code><br />
							<code><span class="comment">&lt;!-- Tabla donde se mostrarán los archivos por cargar. --&gt;</span></code>
							<code>&lt;<span class="pink">table</span> <span class="green">id</span>=<span class="yellow">"tableFiles"</span>&gt;</code>
							<code>    &lt;<span class="pink">thead</span>&gt;</code>
							<code>        &lt;<span class="pink">tr</span>&gt;</code>
							<code>            &lt;<span class="pink">th</span>&gt;Archivo&lt;/<span class="pink">th</span>&gt;</code>
							<code>            &lt;<span class="pink">th</span>&gt;Tipo&lt;/<span class="pink">th</span>&gt;</code>
							<code>            &lt;<span class="pink">th</span>&gt;Tamaño (Aproximado)&lt;/<span class="pink">th</span>&gt;</code>
							<code>            &lt;<span class="pink">th</span>&gt;Última Modificación&lt;/<span class="pink">th</span>&gt;</code>
							<code>            &lt;<span class="pink">th</span>&gt;Porcentaje de Carga&lt;/<span class="pink">th</span>&gt;</code>
							<code>        &lt;/<span class="pink">tr</span>&gt;</code>
							<code>    &lt;/<span class="pink">thead</span>&gt;</code>
							<code>    &lt;<span class="pink">tbody</span>&gt;</code>
							<code>        &lt;<span class="pink">tr</span>&gt;</code>
							<code>            &lt;<span class="pink">td</span> <span class="green">colspan</span>=<span class="yellow">"5"</span> <span class="green">style</span>=<span class="yellow">"</span><span class="cyan">text-align</span>: <span class="cyan">center</span>;<span class="yellow">"</span>&gt;No hay archivos por cargar.&lt;/<span class="pink">td</span>&gt;</code>
							<code>        &lt;/<span class="pink">tr</span>&gt;</code>
							<code>    &lt;/<span class="pink">tbody</span>&gt;</code>
							<code>&lt;/<span class="pink">table</span>&gt;</code><br />
							<code><span class="comment">&lt;!-- Botones de carga y eliminación de archivos por cargar. --&gt;</span></code>
							<code><span class="comment">&lt;!-- Estarán desactivados por defecto hasta que se seleccionen archivos por cargar. --&gt;</span></code>
							<code>&lt;<span class="pink">button</span> <span class="green">type</span>=<span class="yellow">"button"</span> <span class="green">id</span>=<span class="yellow">"buttonUpload"</span> <span class="green">disabled</span>&gt;&lt;<span class="pink">i</span> <span class="green">class</span>=<span class="yellow">"fa-solid fa-cloud-arrow-up"</span>&gt;&lt;/<span class="pink">i</span>&gt; Cargar Archivos&lt;/<span class="pink">button</span>&gt;</code>
							<code>&lt;<span class="pink">br</span> /&gt;</code>
							<code>&lt;<span class="pink">button</span> <span class="green">type</span>=<span class="yellow">"button"</span> <span class="green">id</span>=<span class="yellow">"buttonReset"</span> <span class="green">disabled</span>&gt;&lt;<span class="pink">i</span> <span class="green">class</span>=<span class="yellow">"fa-solid fa-eraser"</span>&gt;&lt;/<span class="pink">i</span>&gt; Eliminar Archivos&lt;/<span class="pink">button</span>&gt;</code>
						</pre>
					</div>
					<div class="col-md-5">
						<samp>CSS</samp>
						<pre class="sb">
							<code><span class="comment">/**</span></code>
							<code> <span class="comment">*</span></code>
							<code> <span class="comment">* .my-drop-zone</span></code>
							<code> <span class="comment">*/</span></code>
							<code><span class="green">.my-drop-zone</span> {</code>
							<code>  <span class="cyan">padding</span>: <span class="purple">60</span><span class="cyan">px</span> <span class="purple">20</span><span class="cyan">px</span>;</code>
							<code>  <span class="cyan">border</span>: <span class="purple">2</span><span class="cyan">px</span> <span class="cyan">solid</span> <span class="purple">#ccc</span>;</code>
							<code>  <span class="cyan">border-radius</span>: <span class="purple">.25</span><span class="cyan">rem</span>;</code>
							<code>  <span class="cyan">min-height</span>: <span class="purple">1</span><span class="cyan">px</span>;</code>
							<code>  <span class="cyan">text-align</span>: <span class="cyan">center</span>;</code>
							<code>  <span class="cyan">-webkit-transition</span>: <span class="cyan">all</span> <span class="purple">.3</span><span class="cyan">s</span>;</code>
							<code>  <span class="cyan">transition</span>: <span class="cyan">all</span> <span class="purple">.3</span><span class="cyan">s</span>;</code>
							<code>  <span class="cyan">color</span>: <span class="purple">#000</span>;</code>
							<code>}</code>
							<code><span class="green">.my-drop-zone</span> <span class="pink">&gt; input</span> {</code>
							<code>  <span class="cyan">display</span>: <span class="cyan">none</span>;</code>
							<code>}</code>
							<code><span class="green">.my-drop-zone</span> <span class="pink">&gt; label</span> {</code>
							<code>  <span class="cyan">cursor</span>: <span class="cyan">pointer</span>;</code>
							<code>  <span class="cyan">margin</span>: <span class="purple">0</span>;</code>
							<code>}</code>
							<code><span class="comment">/**</span></code>
							<code> <span class="comment">*</span></code>
							<code> <span class="comment">* Los colores de los bordes, textos y fondos</span></code>
							<code> <span class="comment">* fueron tomados de la librería de estilos de</span></code>
							<code> <span class="comment">* Bootstrap 5.</span></code>
							<code> <span class="comment">*/</span></code>
							<code><span class="green">.my-drop-zone.my-drop-zone-blue</span> {</code>
							<code>  <span class="cyan">background-color</span>: <span class="purple">#cfe2ff</span>;</code>
							<code>  <span class="cyan">color</span>: <span class="purple">#0a58ca</span>;</code>
							<code>  <span class="cyan">border-color</span>: <span class="purple">#9ec5fe</span>;</code>
							<code>}</code>
							<code><span class="green">.my-drop-zone.my-drop-zone-green</span> {</code>
							<code>  <span class="cyan">background-color</span>: <span class="purple">#d1e7dd</span>;</code>
							<code>  <span class="cyan">color</span>: <span class="purple">#146c43</span>;</code>
							<code>  <span class="cyan">border-color</span>: <span class="purple">#a3cfbb</span>;</code>
							<code>}</code>
							<code><span class="green">.my-drop-zone.my-drop-zone-red</span> {</code>
							<code>  <span class="cyan">background-color</span>: <span class="purple">#f8d7da</span>;</code>
							<code>  <span class="cyan">color</span>: <span class="purple">#b02a37</span>;</code>
							<code>  <span class="cyan">border-color</span>: <span class="purple">#f1aeb5</span>;</code>
							<code>}</code>
							<code><span class="green">.my-drop-zone.my-drop-zone-yellow</span> {</code>
							<code>  <span class="cyan">background-color</span>: <span class="purple">#fff3cd</span>;</code>
							<code>  <span class="cyan">color</span>: <span class="purple">#997404</span>;</code>
							<code>  <span class="cyan">border-color</span>: <span class="purple">#ffe69c</span>;</code>
							<code>}</code>
						</pre>
					</div>
				</div>
				<samp>JS</samp>
				<pre class="sb">
					<code><span class="comment">/**</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Antes que nada, debo mencionar que este</span></code>
					<code> <span class="comment">* ejemplo lo hice con modalidad para arrastrar</span></code>
					<code> <span class="comment">* y soltar también, y no me había percatado de</span></code>
					<code> <span class="comment">* que la librería de SimpleAjaxUploader solo</span></code>
					<code> <span class="comment">* funciona con elementos inputs y/o elementos</span></code>
					<code> <span class="comment">* con dragAndDrop habilitado y no con arreglos.</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Afortunadamente un héroe o heroína sin capa</span></code>
					<code> <span class="comment">* comentó una <a href="https://stackoverflow.com/a/70485949" target="_blank">respuesta muy buena</a> en Stack Overflow.</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Postdata: Si alguien lo o la vé, diganle</span></code>
					<code> <span class="comment">* que le debo una cerveza bien fría.</span></code>
					<code> <span class="comment">*/</span></code><br />
					<code><span class="comment">/**</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* _files: Variable que contendría los blob's pero este lo sustituye la variable "_dataTransferFiles".</span></code>
					<code> <span class="comment">* _dataTransferFiles: Variable que contendrá los blob's y establecerá el valor del input de archivos por cargar.</span></code>
					<code> <span class="comment">* _MAXSIZE: Constante del tamaño máximo por archivo.</span></code>
					<code> <span class="comment">* _DAYSOFTHEWEEK: Constante de días de la semana.</span></code>
					<code> <span class="comment">* _MONTHS: Constante de meses del año.</span></code>
					<code> <span class="comment">*/</span></code>
					<code><span class="comment">// var _files = [];</span></code>
					<code><span class="cyan">var</span> _dataTransferFiles <span class="pink">= new</span> DataTransfer();</code>
					<code><span class="cyan">const</span> _MAXSIZE <span class="pink">=</span> ((<span class="comment">/*byte*/</span> <span class="purple">1</span> <span class="pink">*</span> <span class="comment">/*bytes*/</span> <span class="purple">1024</span>) <span class="comment">/* = kilobyte*/</span> <span class="pink">*</span> <span class="comment">/*kilobytes*/</span> <span class="purple">1024</span>) <span class="comment">/* = megabyte*/</span>;</code>
					<code><span class="cyan">const</span> _DAYSOFTHEWEEK <span class="pink">=</span> [<span class="yellow">'Domingo'</span>, ...];</code>
					<code><span class="cyan">const</span> _MONTHS <span class="pink">=</span> [<span class="yellow">'Enero'</span>, ...];</code><br />
					<code><span class="comment">// Función para llenar la tabla de archivos por cargar.</span></code>
					<code><span class="cyan">function</span> <span class="green">fillTable</span> (<span class="orange">files</span> <span class="pink">=</span> []) {</code>
					<code>    <span class="cyan">let</span> $tbody <span class="pink">= $</span>(<span class="yellow">'#tableFiles &gt; tbody'</span>);</code><br />
					<code>    <span class="comment">// Limpiamos la tabla por completo.</span></code>
					<code>    $tbody.<span class="cyan">html</span>(<span class="purple">null</span>);</code><br />
					<code>    <span class="pink">if</span> (files.length <span class="pink">&gt;</span> <span class="purple">0</span>) {</code>
					<code>        <span class="pink">$</span>.<span class="cyan">each</span>(files, <span class="cyan">function</span> (<span class="orange">index</span>, <span class="orange">value</span>) {</code>
					<code>            <span class="cyan">let</span> date <span class="pink">= new</span> <span class="cyan">Date</span>(value.lastModified);</code>
					<code>            <span class="cyan">let</span> fileName <span class="pink">=</span> value.name; <span class="comment">// Nombre del archivo.</span></code>
					<code>            <span class="cyan">let</span> fileType <span class="pink">=</span> value.type; <span class="comment">// Tipo de archivo.</span></code>
					<code>            <span class="cyan">let</span> fileSize <span class="pink">=</span> <span class="cyan">Math</span>.<span class="cyan">round</span>((value.size <span class="pink">/</span> _MAXSIZE) <span class="pink">*</span> <span class="purple">100</span>) <span class="pink">/</span> <span class="purple">100</span>; <span class="comment">// Calcular el tamaño aproximado del archivo.</span></code>
					<code>            <span class="cyan">let</span> fileLastModified <span class="pink">=</span> <span class="yellow">`</span>${_DAYSOFTHEWEEK[date.<span class="cyan">getDay</span>()]}<span class="yellow">,</span> ${date.<span class="cyan">getDate</span>()} <span class="yellow">de</span> ${_MONTHS[date.<span class="cyan">getMonth</span>()]} <span class="yellow">de</span> ${date.<span class="cyan">getFullYear</span>()} <span class="yellow">a las</span> ${date.<span class="cyan">getHours</span>()}<span class="yellow">:</span>${date.<span class="cyan">getMinutes</span>()}<span class="yellow">:</span>${date.<span class="cyan">getSeconds</span>()}<span class="yellow">`</span>; <span class="comment">// Y la fecha de la última modificación del archivo.</span></code><br />
					<code>            <span class="comment">// Y con las variables declaradas agregamos cada renglon a la tabla.</span></code>
					<code>            $tbody.<span class="cyan">append</span>(<span class="yellow">`&lt;tr&gt;</span></code>
					<code>                <span class="yellow">&lt;td&gt;</span>${fileName}<span class="yellow">&lt;/td&gt;</span></code>
					<code>                <span class="yellow">&lt;td&gt;</span>${fileType}<span class="yellow">&lt;/td&gt;</span></code>
					<code>                <span class="yellow">&lt;td&gt;</span>${fileSize}<span class="yellow">MB&lt;/td&gt;</span></code>
					<code>                <span class="yellow">&lt;td&gt;</span>${fileLastModified}<span class="yellow">&lt;/td&gt;</span></code>
					<code>                <span class="yellow">&lt;td&gt;0%&lt;/td&gt;</span></code>
					<code>            <span class="yellow">&lt;/tr>`</span>);</code>
					<code>        });</code>
					<code>    } <span class="pink">else</span> $tbody</code>
					<code>        .<span class="cyan">html</span>(<span class="yellow">`&lt;tr&gt;&lt;td colspan="5" style="text-align: center;"&gt;No hay archivos por cargar.&lt;/td&gt;&lt;/tr&gt;`</span>);</code>
					<code>}</code><br />
					<code><span class="comment">// Función para validar cada archivo.</span></code>
					<code><span class="cyan">function</span> <span class="green">onChangeHandler</span> (<span class="orange">files</span> <span class="pink">=</span> []) {</code>
					<code>    <span class="cyan">let</span> $divInput <span class="pink">= $</span>(<span class="yellow">'#divFile'</span>);</code><br />
					<code>    <span class="comment">// Removemos cualquier clase del contenedor del input.</span></code>
					<code>    $divInput</code>
					<code>        .<span class="cyan">removeClass</span>(<span class="yellow">'my-drop-zone-blue my-drop-zone-red my-drop-zone-green my-drop-zone-yellow'</span>);</code><br />
					<code>    <span class="comment">// Validamos que la cantidad de archivos sea la indicada.</span></code>
					<code>    <span class="pink">if</span> (files.length <span class="pink">&gt;</span> <span class="purple">0</span> <span class="pink">&amp;&amp;</span> files.length <span class="pink">&lt;=</span> <span class="purple">5</span>) {</code>
					<code>        <span class="cyan">let</span> areFilesValid <span class="pink">=</span> <span class="purple">true</span>; <span class="comment">// Bandera de validación de archivos.</span></code>
					<code>        <span class="cyan">let</span> filesToAdd <span class="pink">=</span> []; <span class="comment">// Este arreglo reemplazará la variable de "_files" en caso de que "areFilesValid" siga siendo true.</span></code><br />
					<code>        <span class="comment">// Descomentar esta línea para ver comportamiento de "files".</span></code>
					<code>        <span class="comment">// console.log(files);</span></code><br />
					<code>        <span class="comment">// Ciclo para validar cada archivo.</span></code>
					<code>        <span class="pink">for</span> (<span class="cyan">var</span> i <span class="pink">=</span> <span class="purple">0</span>; i <span class="pink">&lt;</span> files.length; i<span class="pink">++</span>) {</code>
					<code>            <span class="pink">if</span> (files[i].size <span class="pink">&gt;</span> _MAXSIZE) {</code>
					<code>                areFilesValid <span class="pink">=</span> <span class="purple">false</span>;</code>
					<code>                <span class="pink">break</span>;</code>
					<code>            } <span class="pink">else</span> filesToAdd.<span class="cyan">push</span>(files[i]);</code>
					<code>        }</code><br />
					<code>        <span class="pink">if</span> (areFilesValid) {</code>
					<code>            <span class="comment">// _files = filesToAdd;</span></code><br />
					<code>            _dataTransferFiles <span class="pink">= new</span> DataTransfer();</code><br />
					<code>            <span class="pink">$</span>.<span class="cyan">each</span>(filesToAdd, <span class="cyan">function</span> (<span class="orange">index</span>, <span class="orange">value</span>) {</code>
					<code>                _dataTransferFiles.items.<span class="cyan">add</span>(<span class="pink">new</span> File([value], value.name, {</code>
					<code>                    type: value.type,</code>
					<code>                    lastModified: value.lastModified</code>
					<code>                }));</code>
					<code>            });</code><br />
					<code>            $divInput</code>
					<code>                .<span class="cyan">addClass</span>(<span class="yellow">'my-drop-zone-green'</span>)</code>
					<code>                .<span class="cyan">find</span>(<span class="yellow">'label'</span>)</code>
					<code>                .<span class="cyan">html</span>(<span class="yellow">`&lt;i class="fa-solid fa-check"&gt;&lt;/i&gt;</span> ${files.length} <span class="yellow">archivo</span>${files.length <span class="pink">&gt;</span> <span class="purple">1</span> <span class="pink">?</span> <span class="yellow">'s'</span> <span class="pink">:</span> <span class="yellow">''</span>} <span class="yellow">cargado</span>${files.length <span class="pink">&gt;</span> <span class="purple">1</span> <span class="pink">?</span> <span class="yellow">'s'</span> <span class="pink">:</span> <span class="yellow">''</span>}<span class="yellow">`</span>);</code><br />
					<code>            <span class="comment">// Habilitamos los botones de subida y borrado de archivos.</span></code>
					<code>            <span class="pink">$</span>(<span class="yellow">'#buttonUpload, #buttonReset'</span>).<span class="cyan">attr</span>(<span class="yellow">'disabled'</span>, <span class="purple">false</span>);</code>
					<code>        } <span class="pink">else</span> $divInput</code>
					<code>            .<span class="cyan">addClass</span>(<span class="yellow">'my-drop-zone-red'</span>)</code>
					<code>            .<span class="cyan">find</span>(<span class="yellow">'label'</span>)</code>
					<code>            .<span class="cyan">html</span>(<span class="yellow">`&lt;i class="fa-solid fa-triangle-exclamation"&gt;&lt;/i&gt; Uno o más archivos excede el tamaño permitido de 1MB`</span>);</code>
					<code>    } <span class="pink">else if</span> (files.length <span class="pink">&gt;</span> <span class="purple">5</span>) $divInput</code>
					<code>        .<span class="cyan">addClass</span>(<span class="yellow">'my-drop-zone-red'</span>)</code>
					<code>        .<span class="cyan">find</span>(<span class="yellow">'label'</span>)</code>
					<code>        .<span class="cyan">html</span>(<span class="yellow">`&lt;i class="fa-solid fa-triangle-exclamation"&gt;&lt;/i&gt; Solo se permite la carga de 5 archivos`</span>);</code>
					<code>    <span class="pink">else</span> {</code>
					<code>        <span class="comment">/**</span></code>
					<code>         <span class="comment">*</span></code>
					<code>         <span class="comment">* Debido a que el comportamiento del evento "onChange"</span></code>
					<code>         <span class="comment">* del input de carga de archivos, agregué esta condición</span></code>
					<code>         <span class="comment">* puesto a que cambia su valor cada vez que se lanza el</span></code>
					<code>         <span class="comment">* evento. Es decir puede pasar de tener mil archivos a</span></code>
					<code>         <span class="comment">* ninguno en cualquier momento.</span></code>
					<code>         <span class="comment">*/</span></code>
					<code>        <span class="comment">// if (_files.length &gt; 0) $divInput</span></code>
					<code>        <span class="pink">if</span> (_dataTransferFiles.files.length <span class="pink">&gt;</span> <span class="purple">0</span>) $divInput</code>
					<code>            .<span class="cyan">addClass</span>(<span class="yellow">'my-drop-zone-green'</span>)</code>
					<code>            .<span class="cyan">find</span>(<span class="yellow">'label'</span>)</code>
					<code>            <span class="comment">// .html(`&lt;i class="fa-solid fa-check"&gt;&lt;/i&gt; ${_files.length} archivo${_files.length &gt; 1 ? 's' : ''} cargado${_files.length &gt; 1 ? 's' : ''}`);</span></code>
					<code>            .<span class="cyan">html</span>(<span class="yellow">`&lt;i class="fa-solid fa-check"&gt;&lt;/i&gt;</span> ${_dataTransferFiles.files.length} <span class="yellow">archivo</span>${_dataTransferFiles.files.length <span class="pink">&gt;</span> <span class="purple">1</span> <span class="pink">?</span> <span class="yellow">'s'</span> <span class="pink">:</span> <span class="yellow">''</span>} <span class="yellow">cargado</span>${_dataTransferFiles.files.length <span class="pink">&gt;</span> <span class="purple">1</span> <span class="pink">?</span> <span class="yellow">'s'</span> <span class="pink">:</span> <span class="yellow">''</span>}<span class="yellow">`</span>);</code>
					<code>        <span class="pink">else</span> {</code>
					<code>            $divInput</code>
					<code>                .<span class="cyan">find</span>(<span class="yellow">'label'</span>)</code>
					<code>                .<span class="cyan">html</span>(<span class="yellow">`&lt;strong&gt;Seleccione sus archivos&lt;/strong&gt;`</span>);</code><br />
					<code>            <span class="comment">// Deshabilitamos los botones de subida y borrado de archivos.</span></code>
					<code>            <span class="pink">$</span>(<span class="yellow">'#buttonUpload, #buttonReset'</span>).<span class="cyan">attr</span>(<span class="yellow">'disabled'</span>, <span class="purple">true</span>);</code>
					<code>        }</code>
					<code>    }</code><br />
					<code>    <span class="comment">/**</span></code>
					<code>     <span class="comment">*</span></code>
					<code>     <span class="comment">* Sea el resultado que sea, válido</span></code>
					<code>     <span class="comment">* o no, el input tomará la colección</span></code>
					<code>     <span class="comment">* de la propiedad "files" de la variable</span></code>
					<code>     <span class="comment">* global "_dataTransferFiles".</span></code>
					<code>     <span class="comment">*/</span></code>
					<code>    <span class="pink">$</span>(<span class="yellow">'#inputFile'</span>)[<span class="purple">0</span>].files <span class="pink">=</span> _dataTransferFiles.files;</code><br />
					<code>    <span class="comment">// fillTable(_files);</span></code><br />
					<code>    <span class="cyan">fillTable</span>(_dataTransferFiles.files);</code>
					<code>}</code><br />
					<code><span class="comment">// Evento del input al cargar archivos.</span></code>
					<code><span class="pink">$</span>(<span class="yellow">'#inputFile'</span>).<span class="cyan">on</span>(<span class="yellow">'change'</span>, <span class="cyan">function</span> (<span class="orange">e</span>) {</code>
					<code>    e.<span class="cyan">preventDefault</span>();</code><br />
					<code>    <span class="cyan">onChangeHandler</span>(e.target.files);</code>
					<code>});</code><br />
					<code><span class="comment">// Evento para quitar archivos por cargar.</span></code>
					<code><span class="pink">$</span>(<span class="yellow">'#buttonReset'</span>).<span class="cyan">click</span>(<span class="cyan">function</span> () {</code>
					<code>    <span class="comment">// _files = [];</span></code><br />
					<code>    _dataTransferFiles <span class="pink">= new</span> DataTransfer();</code><br />
					<code>    <span class="cyan">onChangeHandler</span>();</code>
					<code>});</code>
				</pre>
				<samp>OUTPUT</samp>
				<pre class="sb" id="preOutPutSimpleAjaxUploader">
					<code><a href="#">Verificar si el input tiene archivos cargados</a></code>
				</pre>
				<p class="my-text">Hasta este punto solo he mostrado la parte del frontend y su lógica, ahora continuare con la lógica para la subida de archivos y el comportamiento del backend.</p>
				<div class="row">
					<div class="col-md-6">
						<samp>JS</samp>
						<pre class="sb">
							<code><span class="comment">// Declaramos la variable de "ss.SimpleUpload"</span></code>
						</pre>
					</div>
					<div class="col-md-6"></div>
				</div>
				-->
			</div>
		</div>
		<!-- ./uploadFiles -->

		<!-- dropZone -->
		<div id="dropZone" class="my-panel my-panel-light-blue">
			<div class="my-panel-header">
				<h3 class="my-panel-header-title"><del>Número de archivos por cargar</del> Drop Zone</h3>
			</div>
			<div class="my-panel-body">
				<pre class="sb">
					<code>Debo una codificación.</code>
				</pre>
				<h1>No hay archivos seleccionados...</h1>
				<input name="to-load" id="to-load" type="file" multiple />
			</div>
		</div>
		<!-- ./dropZone -->

		<!-- collections -->
		<div id="collections" class="my-panel my-panel-light-yellow">
			<div class="my-panel-header">
				<h3 class="my-panel-header-title"><del>Conteo de elementos en tabla</del> colecciones.json</h3>
			</div>
			<div class="my-panel-body">
				<h2><var>$jsonFile</var> = <var>file_get_contents(</var>../collection.json<var>);</var></h2>
				<p class="my-text">Desde hace un buen rato que esta sección la he dejado olvidada (creo que por allá en el 2016 o 2017, no recuerdo bien) y no había tenido alguna idea de que hacer aquí. Hasta que vi algo interesante que se pueden hacer con los json's y objetos en PHP. A continuación lo que les mostraré es algo muy especial para mi, porque no solo pone a prueba mis habilidades en PHP, si no que también puedo crear configuraciones con los mismos json's. Y no, no me he olvidado de dejar código para contar los renglones en la tabla.</p>
				<div class="table-responsive">
					<table class="table table-borderless table-hover caption-top" id="tableCollection">
						<?php $description = $jsonCollectionRawHTML->description ?>
						<?php $dataHeaders = $jsonCollectionRawHTML->dataHeaders ?>
						<?php $dataRows = $jsonCollectionRawHTML->dataRows ?>
						<caption><?php echo $description ?></caption>
						<thead>
							<tr>
								<?php foreach ($dataHeaders as $dataHeadersKey => $dataHeadersValue) : ?>
								<?php if ($dataHeadersValue->is_visible) : ?>
								<th><?php echo $dataHeadersValue->column_description ?></th>
								<?php endif ?>
								<?php endforeach ?>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($dataRows as $dataRowsKey => $dataRowsValue) : ?>
							<tr>
							<?php foreach ($dataRowsValue as $dataCellKey => $dataCellValue) : ?>
							<?php if (array_column($dataHeaders, "is_visible", "column_name")[$dataCellKey]) : ?>
							<td><?php echo $dataCellValue ?></td>
							<?php endif ?>
							<?php endforeach ?>
							</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
				<div class="row">
					<div class="col-md-4 offset-md-4">
						<div class="d-grid gap-1">
							<button type="button" class="btn btn-success" id="buttonReloadTableCollection"><i class="fa-solid fa-rotate-right"></i> Recargar Tabla</button>
						</div>
					</div>
				</div>
				<p class="my-text">Por lo visto, la tabla cambia cada vez que se refresca la página. Eso es porque desde el backend se esta recolectando desde una colección datos de manera aleatoria. Ya explico porque en codificación.</p>
				<h2><i class="fa-solid fa-code"></i> Codificación</h2>
				<p class="my-text"><b>Primero:</b> el JSON dónde se cargarán todos los datos y sus respectivas configuraciones para ser mostrados en la interfaz y estos sean mas atractivos o en su defecto para mejor comprensión por el usuario en turno. Cabe a destacar que las configuraciones en este JSON son solo un ejemplo de lo que se puede crear, configurar y/o validar con el mismo, claro, siempre y cuando exista un lenguaje (en este caso: PHP), framework o api que los interprete.</p>
				<samp>JSON</samp>
				<pre class="sb">
					<?php $columns = $jsonCollection->collection_configuration->columns ?>
					<?php $snippets = $jsonCollection->collection_configuration->data->snippets ?>
					<?php $conditions = $jsonCollection->collection_configuration->data->conditions ?>
					<?php $collectionItems = $jsonCollection->collection_items ?>
					<code><span class="comment">/**</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Este solo es un extracto de la colección de datos almacenados en este sitio.</span></code>
					<code> <span class="comment">* Las validaciones y los formateos pueden ser mejorados, por esa razón solo los muestro como ejemplo del alcance que tienen estos mismos.</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* NOTA: La colección mostrada aquí no se actualiza dinámicamente al refrescar la tabla.</span></code>
					<code><span class="comment"> */</span></code>
					<code>{</code>
					<code>	<span class="yellow">"collection_configuration"</span>: {</code>
					<code>		<span class="yellow">"columns"</span>: [</code>
					<code>			<span class="comment">/**</span></code>
					<code>			 <span class="comment">*</span></code>
					<code>			 <span class="comment">* Aquí se obtienen las configuraciones de las columnas a mostrar en la interfaz.</span></code>
					<code>			 <span class="comment">* Estas mismas se pueden adaptar a la modalidad de cada usuario o desarrollador.</span></code>
					<code>			 <span class="comment">* En este ejemplo se tiene la clave de y el nombre de la columna, si se muestra o no y su tipo de dato.</span></code>
					<code>			 <span class="comment">*/</span></code>
					<?php foreach ($columns as $columnKey => $columnValue) : ?>
					<code>			{</code>
					<?php foreach ($columnValue as $columAttrKey => $columAttrValue) : ?>
					<code>				<span class="yellow">"<?php echo $columAttrKey ?>"</span>: <?php echo is_bool($columAttrValue) ? "<span class='purple'>" . var_export($columAttrValue, true) . "</span>" : (is_int($columAttrValue) ? "<span class='purple'>$columAttrValue</span>" : "<span class='yellow'>\"$columAttrValue\"</span>") ?><?php echo array_key_last((array)$columnValue) != $columAttrKey ? "," : "" ?></code>
					<?php endforeach ?>
					<code>			}<?php echo $columnKey < (count($columns) - 1) ? ",": "" ?></code>
					<?php endforeach ?>
					<code>		],</code>
					<code>		<span class="yellow">"data"</span>: {</code>
					<?php if (count($snippets) > 0) : ?>
					<code>			<span class="yellow">"snippets"</span>: [</code>
					<code>				<span class="comment">/**</span></code>
					<code>				 <span class="comment">*</span></code>
					<code>				 <span class="comment">* Los snippets son configuraciones para formatear los datos de modo que estos se muestren con un mejor formato y atractivo para el usuario.</span></code>
					<code>				 <span class="comment">* En mi caso desarrollé 4 tipos de snippets los cuales se representan con la clave "method", de los cuales son:</span></code>
					<code>				 <span class="comment">* - "replace": En el caso de "replace" agrega contenido al dato donde el dato estará siempre representado por "{value}".</span></code>
					<code>				 <span class="comment">* - "for": En el caso de "for" este solo funcionará con valores numéricos, este reemplaza por completo el dato y agrega n (según sea el dato) catidad de veces el elemento.</span></code>
					<code>				 <span class="comment">* - "case": En el caso de "case" agrega contenido dependiendo del dato, vease como si este dato fuese una constante.</span></code>
					<code>				 <span class="comment">* - "when": En el caso de "when" el funcionamiento es identico al de "case", solo que este reemplaza en función del dato de la columna relacionada ("column_related")</span></code>
					<code>				 <span class="comment">*/</span></code>
					<?php foreach ($snippets as $snippetsKey => $snippetsValue) : ?>
					<code>				{</code>
					<?php foreach ($snippetsValue as $snippetKey => $snippetValue) : ?>
					<?php if (is_array($snippetValue)) : ?>
					<code>					<span class="yellow">"<?php echo $snippetKey ?>"</span>: [</code>
					<?php foreach ($snippetValue as $replacesKey => $replacesValue) : ?>
					<code>						{</code>
					<?php foreach ($replacesValue as $replaceKey => $replaceValue) : ?>
					<code>							<span class="yellow">"<?php echo $replaceKey ?>"</span>: <span class="yellow">"<?php echo str_replace(["<", ">"], ["&lt;", "&gt;"], $replaceValue) ?>"</span><?php echo array_key_last((array)$replacesValue) != $replaceKey ? "," : "" ?></code>
					<?php endforeach ?>
					<code>						}<?php echo $replacesKey < (count($snippetValue) - 1) ? "," : "" ?></code>
					<?php endforeach ?>
					<code>					]<?php echo array_key_last((array)$snippetsValue) != $snippetKey ? "," : "" ?></code>
					<?php else : ?>
					<code>					<span class="yellow">"<?php echo $snippetKey ?>"</span>: <span class="yellow">"<?php echo str_replace(["<", ">"], ["&lt;", "&gt;"], $snippetValue) ?>"</span><?php echo array_key_last((array)$snippetsValue) != $snippetKey ? "," : "" ?></code>
					<?php endif ?>
					<?php endforeach ?>
					<code>				}<?php echo $snippetsKey < (count($snippets) - 1) ? "," : "" ?></code>
					<?php endforeach ?>
					<code>			],</code>
					<?php else : ?>
					<code>			<span class="yellow">"snippets"</span>: [],</code>
					<?php endif ?>
					<?php if (count($conditions) > 0) : ?>
					<code>			<span class="yellow">"conditions"</span>: [</code>
					<code>				<span class="comment">/**</span></code>
					<code>				 <span class="comment">*</span></code>
					<code>				 <span class="comment">* Las condiciones no tienen mucha ciencia, estos comparan el dato y reemplazan el mismo dato con un valor default.</span></code>
					<code>				 <span class="comment">*/</span></code>
					<?php foreach ($conditions as $conditionsKey => $conditionsValue) : ?>
					<code>				{</code>
					<?php foreach ($conditionsValue as $conditionKey => $conditionValue) : ?>
					<code>					<span class="yellow">"<?php echo $conditionKey ?>"</span>: <span class="yellow">"<?php echo $conditionValue ?>"</span><?php echo array_key_last((array)$conditionsValue) != $conditionKey ? "," : "" ?></code>
					<?php endforeach ?>
					<code>				}<?php echo $conditionsKey < (count($conditions) - 1) ? "," : "" ?></code>
					<?php endforeach ?>
					<code>			]</code>
					<?php else : ?>
					<code>			<span class="yellow">"conditions"</span>: []</code>
					<?php endif ?>
					<code>		}</code>
					<code>	},</code>
					<code>	<span class="yellow">"collection_name"</span>: <span class="yellow">"<?php echo $jsonCollection->collection_name ?>"</span>, <span class="comment">// Nombre del archivo JSON.</span></code>
					<code>	<span class="yellow">"collection_description"</span>: <span class="yellow">"<?php echo $jsonCollection->collection_description ?>"</span>, <span class="comment">// Descripción GUI del archivo.</span></code>
					<code>	<span class="yellow">"collection_items"</span>: [</code>
					<code>		<span class="comment">/**</span></code>
					<code>		 <span class="comment">*</span></code>
					<code>		 <span class="comment">* Aquí se obtienen todos los datos principales del JSON sin formatear.</span></code>
					<code>		 <span class="comment">* El formateo lo hará la lógica del lenguaje a usar, framework o api de acuerdo a las configuraciones de los snippets y conditions.</span></code>
					<code>		 <span class="comment">*/</span></code>
					<?php foreach ($collectionItems as $collectionKey => $collectionValue) : ?>
					<code>		{</code>
					<?php foreach ($collectionValue as $columnKey => $columnValue) : ?>
					<code>			<span class="yellow">"<?php echo $columnKey ?>"</span>: <?php echo is_int($columnValue) ? "<span class='purple'>$columnValue</span>" : "<span class='yellow'>\"$columnValue\"</span>" ?><?php echo array_key_last((array)$collectionValue) != $columnKey ? "," : "" ?></code>
					<?php endforeach ?>
					<code>		}<?php echo ($collectionKey < (count($collectionItems) - 1)) ? "," : "" ?></code>
					<?php endforeach ?>
					<code>	]</code>
					<code>}</code>
				</pre>
				<p class="my-text">Por supuesto que en este ejemplo solo se muestra un puñado de datos de las colecciones almacedanas en este sitio, pero de todas formas este ejemplo da incapie a desarrollar configuraciones usando json's. También debo mencionar que la estructura de "collection_configuration" del json es igual para todas las colecciones que pueda agregar en un futuro, solo variarían las columnas, los snippets y sus condiciones.</p>
				<p class="my-text"><b>Segundo:</b> la lógica del backend que traerá los datos de la colección (en este caso de forma aleatoria). Para este caso he desarrollado 2 funciones: una para obtener una cantidad específica de datos de la colección y la otra para darle formato para mostrarse en el frontend.</p>
				<samp>PHP</samp>
				<pre class="sb">
					<code>&lt;?php</code><br />
					<code><span class="comment">/**</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Esta función se encargará entregar una</span></code>
					<code> <span class="comment">* coleccion de datos traidos desde archivos</span></code>
					<code> <span class="comment">* .json de forma aleatoria y segun la cantidad</span></code>
					<code> <span class="comment">* especificada por la variable $take.</span></code>
					<code> <span class="comment">*/</code>
					<code><span class="cyan">function</span> <span class="green">initCollection</span> (<span class="orange">$take</span> <span class="pink">=</span> <span class="purple">0</span>) {</code>
					<code>	$jsonFile <span class="pink">=</span> <span class="cyan">file_get_contents</span>(<span class="yellow">"collections/<?php echo $jsonCollection->collection_name ?>.json"</span>); <span class="comment">// NOTA: El nombre del archivo json no se actualiza dinámicamente al refrescar la tabla.</span></code>
					<code>	$isArrayAssociative <span class="pink">=</span> <span class="purple">false</span>; <span class="comment">// Esto indica que será un objeto en lugar de un arreglo asociativo</span></code>
					<code>	$jsonData <span class="pink">=</span> <span class="cyan">json_decode</span>($jsonFile, $isArrayAssociative);</code><br />
					<code>	<span class="comment">/**</span></code>
					<code>	 <span class="comment">*</span></code>
					<code>	 <span class="comment">* En esta sección se seleccionarán</span></code>
					<code>	 <span class="comment">* los registros del json a mostrar</span></code>
					<code>	 <span class="comment">* aleatoriamente.</span></code>
					<code>	 <span class="comment">*/</span></code>
					<code>	$newCollection <span class="pink">=</span> [];</code>
					<code>	$collectionItemsLength <span class="pink">=</span> <span class="cyan">count</span>($jsonData-&gt;collection_items);</code><br />
					<code>	<span class="pink">for</span> ($i <span class="pink">=</span> <span class="purple">0</span>; $i <span class="pink">&lt;</span> ($take <span class="pink">&gt;</span> <span class="purple">0</span> <span class="pink">&&</span> $take <span class="pink">&lt;</span> $collectionItemsLength <span class="pink">?</span> $take <span class="pink">:</span> $collectionItemsLength); $i<span class="pink">++</span>) {</code>
					<code>		$indexOfItem <span class="pink">=</span> <span class="cyan">rand</span>(<span class="purple">0</span>, (<span class="cyan">count</span>($jsonData-&gt;collection_items) <span class="pink">-</span> <span class="purple">1</span>));</code><br />
					<code>		<span class="comment">/**</span></code>
					<code>		 <span class="comment">*</span></code>
					<code>		 <span class="comment">* Si en el $newCollection no se</span></code>
					<code>		 <span class="comment">* encuentra el objeto seleccionado</span></code>
					<code>		 <span class="comment">* por el $indexOfItem, se agrega a</span></code>
					<code>		 <span class="comment">* la colección. Caso contrario se</span></code>
					<code>		 <span class="comment">* se vuelve a seleccionar</span></code>
					<code>		 <span class="comment">* aleatoriamente otro objeto.</span></code>
					<code>		 <span class="comment">*/</span></code>
					<code>		<span class="pink">if</span> (<span class="pink">!</span><span class="cyan">in_array</span>($jsonData-&gt;collection_items[$indexOfItem], $newCollection))</code>
					<code>			$newCollection[] <span class="pink">=</span> $jsonData-&gt;collection_items[$indexOfItem];</code>
					<code>		<span class="pink">else</span> $i<span class="pink">--</span>;</code>
					<code>	}</code><br />
					<code>	$jsonData-&gt;collection_items <span class="pink">=</span> $newCollection;</code><br />
					<code>	<span class="pink">return</span> $jsonData;</code>
					<code>}</code><br />
					<code><span class="comment">/**</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Esta función se encargará de llenar y</span></code>
					<code> <span class="comment">* darle formato a los datos de la colección</span></code>
					<code> <span class="comment">* proporcionada.</span></code>
					<code> <span class="comment">*/</span></code>
					<code><span class="cyan">function</span> <span class="green">initCollectionRawHTML</span> (<span class="orange">$sourceCollection</span>) {</code>
					<code>	<span class="comment">/**</span></code>
					<code>	 <span class="comment">*</span></code>
					<code>	 <span class="comment">* Coleccion formateada para retornar.</span></code>
					<code>	 <span class="comment">*/</span></code>
					<code>	$newCollection <span class="pink">=</span> [</code>
					<code>		<span class="yellow">"description"</span> =&gt; $sourceCollection-&gt;collection_description,</code>
					<code>		<span class="yellow">"dataHeaders"</span> =&gt; [],</code>
					<code>		<span class="yellow">"dataRows"</span> =&gt; []</code>
					<code>	];</code><br />
					<code>	<span class="comment">/**</span></code>
					<code>	 <span class="comment">*</span></code>
					<code>	 <span class="comment">* Cargar configuraciones de la coleccion.</span></code>
					<code>	 <span class="comment">*/</span></code>
					<code>	$columns <span class="pink">=</span> $sourceCollection-&gt;collection_configuration-&gt;columns;</code>
					<code>	$snippets <span class="pink">=</span> $sourceCollection-&gt;collection_configuration-&gt;data-&gt;snippets;</code>
					<code>	$conditions <span class="pink">=</span> $sourceCollection-&gt;collection_configuration-&gt;data-&gt;conditions;</code>
					<code>	$collectionItems <span class="pink">=</span> $sourceCollection-&gt;collection_items;</code><br />
					<code>	<span class="comment">/**</span></code>
					<code>	 <span class="comment">*</span></code>
					<code>	 <span class="comment">* Lista de operadores logicos.</span></code>
					<code>	 <span class="comment">*/</span></code>
					<code>	$operators <span class="pink">=</span> [</code>
					<code>		<span class="yellow">"=="</span> =&gt; <span class="cyan">function</span> (<span class="orange">$a</span>, <span class="orange">$b</span>) { <span class="pink">return</span> $a <span class="pink">==</span> $b; },</code>
					<code>		<span class="yellow">"==="</span> =&gt; <span class="cyan">function</span> (<span class="orange">$a</span>, <span class="orange">$b</span>) { <span class="pink">return</span> $a <span class="pink">===</span> $b; },</code>
					<code>		<span class="yellow">"!="</span> =&gt; <span class="cyan">function</span> (<span class="orange">$a</span>, <span class="orange">$b</span>) { <span class="pink">return</span> $a <span class="pink">!=</span> $b; },</code>
					<code>		<span class="yellow">"!=="</span> =&gt; <span class="cyan">function</span> (<span class="orange">$a</span>, <span class="orange">$b</span>) { <span class="pink">return</span> $a <span class="pink">!==</span> $b; },</code>
					<code>		<span class="yellow">"&gt;"</span> =&gt; <span class="cyan">function</span> (<span class="orange">$a</span>, <span class="orange">$b</span>) { <span class="pink">return</span> $a <span class="pink">&gt;</span> $b; },</code>
					<code>		<span class="yellow">"&gt;="</span> =&gt; <span class="cyan">function</span> (<span class="orange">$a</span>, <span class="orange">$b</span>) { <span class="pink">return</span> $a <span class="pink">&gt;=</span> $b; },</code>
					<code>		<span class="yellow">"&lt;"</span> =&gt; <span class="cyan">function</span> (<span class="orange">$a</span>, <span class="orange">$b</span>) { <span class="pink">return</span> $a <span class="pink">&lt;</span> $b; },</code>
					<code>		<span class="yellow">"&lt;="</span> =&gt; <span class="cyan">function</span> (<span class="orange">$a</span>, <span class="orange">$b</span>) { <span class="pink">return</span> $a <span class="pink">&lt;=</span> $b; }</code>
					<code>	];</code><br />
					<code>	<span class="comment">/**</span></code>
					<code>	 <span class="comment">*</span></code>
					<code>	 <span class="comment">* Inicia ciclo para cargar los nombres de las</span></code>
					<code>	 <span class="comment">* columnas de la coleccion.</span></code>
					<code>	 <span class="comment">*/</span></code>
					<code>	<span class="pink">foreach</span> ($columns <span class="pink">as</span> $columnsKey =&gt; $columnsValue) $newCollection[<span class="yellow">"dataHeaders"</span>][] <span class="pink">=</span> $columnsValue;</code><br />
					<code>	<span class="comment">/**</span></code>
					<code>	 <span class="comment">*</span></code>
					<code>	 <span class="comment">* Inicia ciclo para darle formato HTML</span></code>
					<code>	 <span class="comment">* de acuerdo a la configuración de los</span></code>
					<code>	 <span class="comment">* snippets.</span></code>
					<code>	 <span class="comment">*/</span></code>
					<code>	$dataRow <span class="pink">=</span> [];</code><br />
					<code>	<span class="pink">foreach</span> ($collectionItems <span class="pink">as</span> $collectionItemsIndex =&gt; $collectionItemsValue) {</code>
					<code>		$dataCells <span class="pink">=</span> [];</code><br />
					<code>		<span class="comment">/**</span></code>
					<code>		 <span class="comment">*</span></code>
					<code>		 <span class="comment">* $collectionItemKey = Columna</span></code>
					<code>		 <span class="comment">* $collectionItemValue = Valor</span></code>
					<code>		 <span class="comment">*/</span></code>
					<code>		<span class="pink">foreach</span> ($collectionItemsValue <span class="pink">as</span> $collectionItemKey =&gt; $collectionItemValue) {</code>
					<code>			$column <span class="pink">=</span> $collectionItemKey;</code>
					<code>			$data <span class="pink">=</span> $collectionItemValue;</code><br />
					<code>			<span class="comment">/**</span></code>
					<code>			 <span class="comment">*</span></code>
					<code>			 <span class="comment">* Ciclo para formatear la coleccion</span></code>
					<code>			 <span class="comment">* de acuerdo a los snippets configurados.</span></code>
					<code>			 <span class="comment">*/</span></code>
					<code>			<span class="pink">foreach</span> ($snippets <span class="pink">as</span> $snippetsIndex =&gt; $snippetsValue) {</code>
					<code>				<span class="pink">if</span> ($snippetsValue-&gt;column_name <span class="pink">==</span> $column) {</code>
					<code>					<span class="pink">switch</span> ($snippetsValue-&gt;method) {</code>
					<code>						<span class="pink">case</span> <span class="yellow">"replace"</span>:</code>
					<code>							$data <span class="pink">=</span> <span class="cyan">str_replace</span>(<span class="yellow">"{value}"</span>, $data, $snippetsValue-&gt;replace_with);</code>
					<code>							<span class="pink">break</span>;</code>
					<code>						<span class="pink">case</span> <span class="yellow">"for"</span>:</code>
					<code>							$newValue <span class="pink">=</span> <span class="yellow">""</span>;</code>
					<code>							<span class="pink">for</span> ($i <span class="pink">=</span> <span class="purple">0</span>; $i <span class="pink">&lt;</span> $data; $i<span class="pink">++</span>) $newValue <span class="pink">.=</span> $snippetsValue-&gt;replace_with;</code>
					<code>							$data <span class="pink">=</span> $newValue;</code>
					<code>							<span class="pink">break</span>;</code>
					<code>						<span class="pink">case</span> <span class="yellow">"case"</span>:</code>
					<code>							<span class="pink">for</span> ($i <span class="pink">=</span> <span class="purple">0</span>; $i <span class="pink">&lt;</span> <span class="cyan">count</span>($snippetsValue-&gt;replace_with); $i<span class="pink">++</span>) {</code>
					<code>								<span class="pink">if</span> ($snippetsValue-&gt;replace_with[$i]-&gt;case <span class="pink">==</span> $data) {</code>
					<code>									$data <span class="pink">=</span> <span class="cyan">str_replace</span>(<span class="yellow">"{value}"</span>, $data, $snippetsValue-&gt;replace_with[$i]-&gt;replace);</code>
					<code>									<span class="pink">break</span>;</code>
					<code>								}</code>
					<code>							}</code>
					<code>							<span class="pink">break</span>;</code>
					<code>						<span class="pink">case</span> <span class="yellow">"when"</span>:</code>
					<code>							<span class="pink">for</span> ($i <span class="pink">=</span> <span class="purple">0</span>; $i <span class="pink">&lt;</span> <span class="cyan">count</span>($snippetsValue-&gt;replace_with); $i<span class="pink">++</span> {</code>
					<code>								<span class="pink">if</span> ($collectionItemsValue-&gt;{$snippetsValue-&gt;column_related} <span class="pink">==</span> $snippetsValue-&gt;replace_with[$i]-&gt;case) {</code>
					<code>									$data <span class="pink">=</span> <span class="cyan">str_replace</span>(<span class="yellow">"{value}"</span>, $data, $snippetsValue-&gt;replace_with[$i]-&gt;replace);</code>
					<code>									<span class="pink">break</span>;</code>
					<code>								}</code>
					<code>							}</code>
					<code>							<span class="pink">break</span>;</code>
					<code>					}</code>
					<code>				}</code>
					<code>			}</code><br />
					<code>			<span class="comment">/**</span></code>
					<code>			 <span class="comment">*</span></code>
					<code>			 <span class="comment">* Ciclo para formatear la coleccion</span></code>
					<code>			 <span class="comment">* de acuerdo a las condiciones de cada</span></code>
					<code>			 <span class="comment">* campo configurado.</span></code>
					<code>			 <span class="comment">*/</span></code>
					<code>			<span class="pink">foreach</span> ($conditions <span class="pink">as</span> $conditionsKey =&gt; $conditionsValue) {</code>
					<code>				<span class="pink">if</span> ($conditionsValue-&gt;column_name <span class="pink">==</span> $column) {</code>
					<code>					<span class="pink">if</span> ($operators[$conditionsValue-&gt;operator]($conditionsValue-&gt;value_to_compare, $data))</code>
					<code>						$data <span class="pink">=</span> <span class="yellow">"&lt;span class='badge text-bg-dark'&gt;</span>$conditionsValue-&gt;replace_with<span class="yellow">&lt;/span&gt;"</span>;</code>
					<code>				}</code>
					<code>			}</code><br />
					<code>			$dataCells[$column] <span class="pink">=</span> $data;</code>
					<code>		}</code><br />
					<code>		$dataRow[] <span class="pink">=</span> $dataCells;</code>
					<code>	}</code><br />
					<code>	$newCollection[<span class="yellow">"dataRows"</span>] <span class="pink">=</span> $dataRow;</code><br />
					<code>	<span class="pink">return</span> (<span class="cyan">object</span>)$newCollection; <span class="comment">// Lo retorno como objeto en lugar de arreglo asociativo.</span></code>
					<code>}</code>
				</pre>
				<p class="my-text">Teniendo estas 2 funciones, se pueden incluir en un web service para traer datos en todo momento, o se pueden incluir directamente en el archivo HTML. De cualquier forma dará el mismo resultado.</p>
				<p class="my-text"><b>Forma 1 - Adjuntando las funciones en el archivo HTML:</b> de esta forma solo variarán los datos cada vez que el usuario refresque la página (forma que a mi parecer es muy anticuada y cansada, pero igual la incluyo por aquello del que dirán)</p>
				<samp>PHP</samp>
				<pre class="sb">
					<code>&lt;?php</code>
					<code><span class="pink">include_once</span> <span class="yellow">"collections/collections.php"</span>; <span class="comment">// Supongamos que aquí guarde todo el merequetengue del segundo paso.</span></code><br />
					<code><span class="comment">/**</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Declaramos la variable para llenar la tabla.</span></code>
					<code> <span class="comment">*/</span></code>
					<code>$jsonDataHTML <span class="pink">=</span> <span class="cyan">initCollectionRawHTML</span>(<span class="cyan">initCollection</span>(<span class="purple">10</span>));</code>
					<code>?&gt;</code>
					<code>&lt;<span class="pink">div</span> <span class="green">class</span>=<span class="yellow">"table-responsive"</span>&gt;</code>
					<code>	&lt;<span class="pink">table</span> <span class="green">class</span>=<span class="yellow">"table table-borderless table-hover caption-top"</span> <span class="green">id</span>=<span class="yellow">"tableCollection"</span>&gt;</code>
					<code>		&lt;?php $description <span class="pink">=</span> $jsonDataHTML-&gt;description <span class="comment">// Descripción de la colección que se mostrará en el &lt;caption /&gt;</span> ?&gt;</code>
					<code>		&lt;?php $dataHeaders <span class="pink">=</span> $jsonDataHTML-&gt;dataHeaders <span class="comment">// Descripción de las columnas.</span> ?&gt;</code>
					<code>		&lt;?php $dataRows <span class="pink">=</span> $jsonDataHTML-&gt;dataRows <span class="comment">// Estos serán los renglones de la tabla.</span> ?&gt;</code>
					<code>		&lt;<span class="pink">caption</span>&gt;&lt;?php <span class="cyan">echo</span> $description ?&gt;&lt;/<span class="pink">caption</span>&gt;</code>
					<code>		&lt;<span class="pink">thead</span>&gt;</code>
					<code>			&lt;<span class="pink">tr</span>&gt;</code>
					<code>				&lt;?php <span class="pink">foreach</span> ($dataHeaders <span class="pink">as</span> $dataHeadersKey =&gt; $dataHeadersValue) : ?&gt;</code>
					<code>				&lt;?php</code>
					<code>				<span class="comment">/**</span></code>
					<code>				 <span class="comment">*</code>
					<code>				 <span class="comment">* Solo se mostrarán si está configurado para ser visible.</span></code>
					<code>				 <span class="comment">*/</span></code>
					<code>				?&gt;</code>
					<code>				&lt;?php <span class="pink">if</span> ($dataHeadersValue-&gt;is_visible) : ?&gt;</code>
					<code>				&lt;th&gt;&lt;?php <span class="cyan">echo</span> $dataHeadersValue-&gt;column_description ?&gt;&lt;/<span class="pink">th</span>&gt;</code>
					<code>				&lt;?php <span class="pink">endif</span> ?&gt;</code>
					<code>				&lt;?php <span class="pink">endforeach</span> ?&gt;</code>
					<code>			&lt;/<span class="pink">tr</span>&gt;</code>
					<code>		&lt;/<span class="pink">thead</span>&gt;</code>
					<code>		&lt;<span class="pink">tbody</span>&gt;</code>
					<code>			&lt;?php</code>
					<code>			<span class="comment">/**</span></code>
					<code>			 <span class="comment">*</span></code>
					<code>			 <span class="comment">* Este foreach recorrerá la colección como si fueran renglones.</span></code>
					<code>			 <span class="comment">*/</span></code>
					<code>			?&gt;</code>
					<code>			&lt;?php <span class="pink">foreach</span> ($dataRows <span class="pink">as</span> $dataRowsKey =&gt; $dataRowsValue) : ?&gt;</code>
					<code>			&lt;<span class="pink">tr</span>&gt;</code>
					<code>				<span class="comment">/**</span></code>
					<code>				 <span class="comment">*</span></code>
					<code>				 <span class="comment">* Y este foreach recorrerá cada renglón como si fueran columnas.</span></code>
					<code>				 <span class="comment">*/</span></code>
					<code>				&lt;?php <span class="pink">foreach</span> ($dataRowsValue <span class="pink">as</span> $dataCellKey =&gt; $dataCellValue) : ?&gt;</code>
					<code>				&lt;?php</code>
					<code>				<span class="comment">/**</span></code>
					<code>				 <span class="comment">*</span></code>
					<code>				 <span class="comment">* Para esta condición fue complicado allar la lógica adecuada</span></code>
					<code>				 <span class="comment">* para que solo se muestren las columnas con la condición de visible</span></code>
					<code>				 <span class="comment">* en true.</span></code>
					<code>				 <span class="comment">*</span></code>
					<code>				 <span class="comment">* Como se puede apreciar en la condición, estoy usando la función de</span></code>
					<code>				 <span class="comment">* "array_column" el cual se encarga de devolver un arreglo asociativo</span></code>
					<code>				 <span class="comment">* de la llave indicada (2do parámetro), en este caso "is_visible", despues</span></code>
					<code>				 <span class="comment">* se indexa con un valor que nosotros elijamos (3er parámetro), en mi caso</span></code>
					<code>				 <span class="comment">* indexé el arreglo con "column_name". Esto con la finalidad de que cuando la</span></code>
					<code>				 <span class="comment">* variable del foreach: $dataCellKey (columna) sea igual a la llave con la propiedad</span></code>
					<code>				 <span class="comment">* de "is_visible" = false, esta columna sea omitida.</span></code>
					<code>				 <span class="comment">*/</span></code>
					<code>				?&gt;</code>
					<code>				&lt;?php <span class="pink">if</span> (<span class="cyan">array_column</span>($dataHeaders, <span class="yellow">"is_visible"</span>, <span class="yellow">"column_name"</span>)[$dataCellKey]) : ?&gt;</code>
					<code>				&lt;<span class="pink">td</span>&gt;&lt;?php <span class="cyan">echo</span> $dataCellValue ?&gt;&lt;/<span class="pink">td</span>&gt;</code>
					<code>				&lt;?php <span class="pink">endif</span> ?&gt;</code>
					<code>				&lt;?php <span class="pink">endforeach</span> ?&gt;</code>
					<code>			&lt;/<span class="pink">tr</span>&gt;</code>
					<code>			&lt;?php <span class="pink">endforeach</span> ?&gt;</code>
					<code>		&lt;/<span class="pink">tbody</span>&gt;</code>
					<code>	&lt;/<span class="pink">table</span>&gt;</code>
					<code>&lt;/<span class="pink">div</span>&gt;</code>
				</pre>
				<p class="my-text"><b>Forma 2 - Creando un web service:</b> esto lo que hará es que el usuario tendrá la comodidad de recargar la tabla en todo momento sin tener que refrescar la página.</p>
				<samp>PHP</samp>
				<pre class="sb">
					<code>&lt;?php</code><br />
					<code><span class="comment">/**</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* getNewCollection.php</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Este será el web service que retornará la nueva colección.</span></code>
					<code> <span class="comment">*/</span></code>
					<code><span class="pink">include_once</span> <span class="yellow">"collections/collections.php"</span>; <span class="comment">// Supongamos que aquí guarde todo el merequetengue del segundo paso.</span></code><br />
					<code><span class="comment">/**</span></code>
					<code> <span class="comment">*</span></code>
					<code> <span class="comment">* Declaramos la variable para retornar</span></code>
					<code> <span class="comment">* y retornamos con un json_encode.</span></code>
					<code> <span class="comment">*/</span></code>
					<code>$jsonCollection <span class="pink">=</span> <span class="cyan">initCollectionRawHTML</span>(<span class="cyan">initCollection</span>(<span class="orange">$_POST</span>[<span class="yellow">"length"</span>]));</code><br />
					<code><span class="pink">if</span> (<span class="cyan">count</span>((<span class="cyan">array</span>)$jsonCollection) <span class="pink">&gt;</span> <span class="purple">0</span>) <span class="cyan">echo json_encode</span>([ <span class="yellow">"isOk"</span> =&gt; <span class="purple">true</span>, <span class="yellow">"message"</span> =&gt; <span class="yellow">"Ok"</span>, <span class="yellow">"data"</span> =&gt; $jsonCollection ]);</code>
					<code><span class="pink">else</span> <span class="cyan">echo json_encode</span>([ <span class="yellow">"isOk"</span> => <span class="purple">false</span>, <span class="yellow">"message"</span> => <span class="yellow">"No hay datos disponibles."</span>, <span class="yellow">"data"</span> => <span class="purple">null</span> ]);</code>
				</pre>
				<samp>JS</samp>
				<pre class="sb">
					<code><span class="comment">// Evento para el botonsote verde de "Recargar Tabla".</span></code>
					<code><span class="pink">$</span>(<span class="yellow">'#buttonReloadTableCollection'</span>).<span class="cyan">click</span>(<span class="cyan">function</span> () {</code>
					<code>	<span class="comment">// Limpiar todo el contenido de la tabla.</span></code>
					<code>	<span class="pink">$</span>(<span class="yellow">'#tableCollection &gt; thead, #tableCollection &gt; tbody, #tableCollection &gt; caption'</span>).<span class="cyan">html</span>(<span class="purple">null</span>);</code><br />
					<code>	<span class="comment">// Petición a web service de "collections/getNewCollection.php".</span></code>
					<code>	<span class="pink">$</span>.<span class="cyan">ajax</span>({</code>
					<code>		url: <span class="yellow">'collections/getNewCollection.php'</span>,</code>
					<code>		type: <span class="yellow">'POST'</span>,</code>
					<code>		dataType: <span class="yellow">'json'</span>,</code>
					<code>		data: { length: <span class="purple">10</span> },</code>
					<code>		<span class="green">beforeSend</span>: <span class="cyan">function</span> (<span class="orange">jqXHR</span>, <span class="orange">settings</span>) {</code>
					<code>			<span class="pink">$</span>(<span class="yellow">'#tableCollection &gt; thead'</span>).<span class="cyan">removeClass</span>(<span class="yellow">'table-dark'</span>);</code>
					<code>			<span class="pink">$</span>(<span class="yellow">'#buttonReloadTableCollection'</span>).<span class="cyan">html</span>(<span class="yellow">`&lt;i class="fa-solid fa-rotate-right fa-spin"&gt;&lt;/i&gt; Cargando...`</span>).<span class="cyan">attr</span>(<span class="yellow">'disabled'</span>, <span class="purple">true</span>);</code>
					<code>		},</code>
					<code>		<span class="green">success</span>: <span class="cyan">function</span> (<span class="orange">response</span>) {</code>
					<code>			<span class="comment">// Si la petición fue exitosa llenará la tabla de la misma manera de la forma estática.</span></code>
					<code>			<span class="pink">if</span> (response.isOk) {</code>
					<code>				<span class="cyan">let</span> headers <span class="pink">=</span> [];</code><br />
					<code>				<span class="pink">$</span>(<span class="yellow">'#tableCollection &gt; caption'</span>).<span class="cyan">html</span>(response.data.description);</code><br />
					<code>				<span class="pink">$</span>.<span class="cyan">each</span>(response.data.dataHeaders, <span class="cyan">function</span> (<span class="orange">index</span>, <span class="orange">value</span>) {</code>
					<code>					<span class="pink">if</span> (value.is_visible) headers.<span class="cyan">push</span>(<span class="yellow">`&lt;th&gt;</span>${value.column_description}<span class="yellow">&lt;/th&gt;`</span>);</code>
					<code>				});</code>
					<code>				<span class="pink">$</span>(<span class="yellow">'#tableCollection &gt; thead'</span>).<span class="cyan">append</span>(<span class="yellow">`&lt;tr&gt;</span>${headers.<span class="cyan">join</span>()}<span class="yellow">&lt;/tr&gt;`</span>);</code><br />
					<code>				<span class="pink">$</span>.<span class="cyan">each</span>(response.data.dataRows, <span class="cyan">function</span> (<span class="orange">index</span>, <span class="orange">value</span>) {</code>
					<code>					<span class="cyan">let</span> row <span class="pink">=</span> [];</code>
					<code>					<span class="cyan">let</span> indexColumn <span class="pink">=</span> <span class="purple">0</span>;</code><br />
					<code>					<span class="pink">$</span>.<span class="cyan">each</span>(value, <span class="cyan">function</span> (<span class="orange">index2</span>, <span class="orange">value2</span>) {</code>
					<code>						<span class="pink">if</span> (response.data.dataHeaders[indexColumn].is_visible) row.<span class="cyan">push</span>(<span class="yellow">`&lt;td&gt;</span>${value2}<span class="yellow">&lt;/td&gt;`</span>);</code>
					<code>						indexColumn<span class="pink">++</span>;</code>
					<code>					});</code><br />
					<code>					<span class="pink">$</span>(<span class="yellow">'#tableCollection &gt; tbody'</span>).<span class="cyan">append</span>(<span class="yellow">`&lt;tr&gt;</span>${row.<span class="cyan">join</span>()}<span class="yellow">&lt;/tr&gt;`</span>);</code>
					<code>				});</code>
					<code>				<span class="comment">// Caso contrario mostrará un renglón con el posible error por parte del web service.</span></code>
					<code>			} <span class="pink">else</span> {</code>
					<code>				<span class="pink">$</span>(<span class="yellow">'#tableCollection &gt; caption'</span>).<span class="cyan">html</span>(<span class="yellow">`&lt;i class="fa-solid fa-triangle-exclamation"&gt;&lt;/i&gt; Error`</span>);</code>
					<code>				<span class="pink">$</span>(<span class="yellow">'#tableCollection &gt; thead'</span>).<span class="cyan">html</span>(<span class="yellow">`&lt;tr&gt;&lt;th&gt;Message&lt;/th&gt;&lt;/tr&gt;`</span>).<span class="cyan">addClass</span>(<span class="yellow">'table-dark'</span>);</code>
					<code>				<span class="pink">$</span>(<span class="yellow">'#tableCollection &gt; tbody'</span>).<span class="cyan">html</span>(<span class="yellow">`&lt;tr class="table-danger"&gt;&lt;td&gt;</span>${response.data.message}<span class="yellow">&lt;/td&gt;&lt;/tr&gt;`</span>);</code>
					<code>			}</code>
					<code>		},</code>
					<code>		<span class="green">error</span>: <span class="cyan">function</span> (<span class="orange">jqXHR</span>, <span class="orange">textStatus</span>, <span class="orange">errorThrown</span>) {</code>
					<code>			<span class="pink">$</span>(<span class="yellow">'#tableCollection &gt; caption'</span>).<span class="cyan">html</span>(<span class="yellow">`&lt;i class="fa-solid fa-triangle-exclamation"&gt;&lt;/i&gt; Error`</span>);</code>
					<code>			<span class="pink">$</span>(<span class="yellow">'#tableCollection &gt; thead'</span>).<span class="cyan">html</span>(<span class="yellow">`&lt;tr&gt;&lt;th&gt;Message&lt;/th&gt;&lt;/tr&gt;`</span>).<span class="cyan">addClass</span>(<span class="yellow">'table-dark'</span>);</code>
					<code>			<span class="pink">$</span>(<span class="yellow">'#tableCollection &gt; tbody'</span>).<span class="cyan">html</span>(<span class="yellow">`&lt;tr class="table-danger"&gt;&lt;td&gt;</span>${jqXHR.status}<span class="yellow"> - </span>${jqXHR.statusText}<span class="yellow">&lt;/td&gt;&lt;/tr&gt;`</span>);</code>
					<code>		},</code>
					<code>		<span class="green">complete</span>: <span class="cyan">function<7span> (<span class="orange">jqXHR</span>, <span class="orange">textStatus</span>) {</code>
					<code>			<span class="pink">$</span>(<span class="yellow">'#buttonReloadTableCollection'</span>).<span class="cyan">html</span>(<span class="yellow">`&lt;i class="fa-solid fa-rotate-right"&gt;&lt;/i&gt; Recargar Tabla`</span>).<span class="cyan">attr</span>(<span class="yellow">'disabled'</span>, <span class="purple">false</span>);</code>
					<code>		}</code>
					<code>	});</code>
					<code>});</code>
				</pre>
				<p class="my-text">Bueno, eso sería toda la lógica para traer datos de archivos JSON y tomarlos como colecciones. Este código se puede mejorar, simplificar y hasta optimizar; solo que ya traia esta idea desde hace rato y había tenido la oportunidad ni el como vaciaría todo el procedimiento de manera visual y explicada (si a eso se le puede llamar explicación) pero al final, a mi parecer, creo que está muy bien elaborado como para ser algo improvisado. Como dije esto se puede mejorar y hasta con mas detalle. No te quede con un solo método forma de hacer las cosas, inspirate, crea y demuestrale a todos de lo que eres capaz.</p>
				<p class="my-text">Y ya para terminar, lo que había dejado pendiente por mucho tiempo:</p>
				<div class="row">
					<div class="col">
						<button type="button" class="btn btn-success" id="buttonRowsCount">Contar Renglones</button>
					</div>
				</div>
				<br />
				<pre class="sb">
					<code>Renglones en la tabla: <span class="purple" id="spanRowsCount"></span></code>
				</pre>
				<h2><i class="fa-solid fa-code"></i> Codificación</h2>
				<samp>JS</samp>
				<pre class="sb">
					<code><span class="pink">$</span>(<span class="yellow">'#buttonRowsCount'</span>).<span class="cyan">click</span>(<span class="cyan">function</span> () {</code>
					<code>	<span class="cyan">alert</span>(<span class="pink">$</span>(<span class="yellow">'#tableCollection > tbody > tr'</span>).length);</code>
					<code>});</code>
				</pre>
			</div>
		</div>
		<!-- ./collections -->

		<!-- vanishEfect -->
		<div id="vanishEfect" class="my-panel my-panel-cyan">
			<div class="my-panel-header">
				<h3 class="my-panel-header-title">Efecto de desvanecimiento</h3>
			</div>
			<div class="my-panel-body">
				<h2>Efecto de desvanecimiento usando <var>opacity</var> <del>y <var>visibility</var></del></h2>
				<p class="my-text">Este ejemplo tiene el sencillo propósito de mostrar los efectos y ventajas de la propiedad <var>transition</var> de CSS. En esta ocación será de la desaparecer y reaparecer un elemento HTML.</p>
				<p class="my-text">También quiero aprovechar la oportunidad de mostrar un input de tipo check con estilo de iOS para este ejemplo.</p>
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<div class="col">
								<label>Aplicar efecto
									<label class="my-switch">
										<input type="checkbox" id="checkApplyOpacity" />
										<span class="my-slider"></span>
									</label>
								</label>
							</div>
						</div>
						<br />
						<img src="<?php echo $_SESSION["MAIN_URL"]?>assets/img/vinyl-scratch.jpg" alt="img-vinyl-scratch" class="img-fluid my-fade-effect-off" id="imgTestOpacity" />
						<h4><small class="text-muted">* Esta imagen la puedes encontrar en mi perfil de <i class="fa-brands fa-deviantart"></i> DeviantArt</small></h4>
					</div>
					<div class="col-md-6">
						<h2><i class="fa-solid fa-code"></i> Codificación</h2>
						<samp>HTML</samp>
						<pre class="sb">
							<code><span class="comment">&lt;!-- Input check --&gt;</span></code>
							<code>&lt;<span class="pink">label</span>&gt; Aplicar efecto</code>
							<code>	&lt;<span class="pink">label</span> <span class="green">class</span>=<span class="yellow">"my-switch"</span>&gt;</code>
							<code>		&lt;<span class="pink">input</span> <span class="green">type</span>=<span class="yellow">"checkbox"</span> <span class="green">id</span>=<span class="yellow">"checkApplyOpacity"</span> /&gt;</code>
							<code>		&lt;<span class="pink">span</span> <span class="green">class</span>=<span class="yellow">"my-slider"</span>&gt;&lt;/<span class="pink">span</span>&gt;</code>
							<code>	&lt;/<span class="pink">label</span>&gt;</code>
							<code>&lt;/<span class="pink">label</span>&gt;</code><br />
							<code><span class="comment">&lt;!-- Img --&gt;</span></code>
							<code>&lt;<span class="pink">img</span> <span class="green">src</span>=<span class="yellow">"assets/img/vinyl-scratch.jpg"</span> <span class="green">alt</span>=<span class="yellow">"img-vinyl-scratch"</span> <span class="green">class</span>=<span class="yellow" id="spanApplyClass">"my-fade-effect-off"</span> <span class="green">id</span>=<span class="yellow">"imgTestOpacity"</span> /&gt;</code>
						</pre>
						<samp>CSS</samp>
						<pre class="sb">
							<code><span class="comment">/**</span></code>
							<code> <span class="comment">*</span></code>
							<code> <span class="comment">* .my-fade-effect</span></code>
							<code> <span class="comment">*/</span></code>
							<code><span class="green">.my-fade-effect-off</span> {</code>
							<code>  <span class="cyan">opacity</span>: <span class="purple">1</span>;</code>
							<code>  <span class="cyan">-webkit-transition</span>: <span class="cyan">opacity</span> <span class="purple">2</span><span class="cyan">s</span>;</code>
							<code>  <span class="cyan">-moz-transition</span>: <span class="cyan">opacity</span> <span class="purple">2</span><span class="cyan">s</span>;</code>
							<code>  <span class="cyan">-ms-transition</span>: <span class="cyan">opacity</span> <span class="purple">2</span><span class="cyan">s</span>;</code>
							<code>  <span class="cyan">-o-transition</span>: <span class="cyan">opacity</span> <span class="purple">2</span><span class="cyan">s</span>;</code>
							<code>  <span class="cyan">transition</span>: <span class="cyan">opacity</span> <span class="purple">2</span><span class="cyan">s</span>;</code>
							<code>}</code>
							<code><span class="green">.my-fade-effect-on</span> {</code>
							<code>  <span class="cyan">opacity</span>: <span class="purple">0</span>;</code>
							<code>  <span class="cyan">-webkit-transition</span>: <span class="cyan">opacity</span> <span class="purple">1</span><span class="cyan">s</span>;</code>
							<code>  <span class="cyan">-moz-transition</span>: <span class="cyan">opacity</span> <span class="purple">1</span><span class="cyan">s</span>;</code>
							<code>  <span class="cyan">-ms-transition</span>: <span class="cyan">opacity</span> <span class="purple">1</span><span class="cyan">s</span>;</code>
							<code>  <span class="cyan">-o-transition</span>: <span class="cyan">opacity</span> <span class="purple">1</span><span class="cyan">s</span>;</code>
							<code>  <span class="cyan">transition</span>: <span class="cyan">opacity</span> <span class="purple">1</span><span class="cyan">s</span>;</code>
							<code>}</code><br />
							<code><span class="comment">/**</span></code>
							<code> <span class="comment">*</span></code>
							<code> <span class="comment">* .my-switch</span></code>
							<code> <span class="comment">*/</span></code>
							<code><span class="green">.my-switch</span> {</code>
							<code>  <span class="cyan">position</span>: <span class="cyan">relative</span>;</code>
							<code>  <span class="cyan">display</span>: <span class="cyan">inline-block</span>;</code>
							<code>  <span class="cyan">width</span>: <span class="purple">54</span><span class="cyan">px</span>;</code>
							<code>  <span class="cyan">height</span>: <span class="purple">24</span><span class="cyan">px</span>;</code>
							<code>}</code>
							<code><span class="green">.my-switch</span> <span class="pink">&gt; input</span> {</code>
							<code>  <span class="cyan">opacity</span>: <span class="purple">0</span>;</code>
							<code>  <span class="cyan">width</span>: <span class="purple">0</span>;</code>
							<code>  <span class="cyan">height</span>: <span class="purple">0</span>;</code>
							<code>}</code>
							<code><span class="green">.my-slider</span> {</code>
							<code>  <span class="cyan">position</span>: <span class="cyan">absolute</span>;</code>
							<code>  <span class="cyan">cursor</span>: <span class="cyan">pointer</span>;</code>
							<code>  <span class="cyan">border-radius</span>: <span class="purple">34</span><span class="cyan">px</span>;</code>
							<code>  <span class="cyan">top</span>: <span class="purple">0</span>;</code>
							<code>  <span class="cyan">left</span>: <span class="purple">0</span>;</code>
							<code>  <span class="cyan">right</span>: <span class="purple">0</span>;</code>
							<code>  <span class="cyan">bottom</span>: <span class="purple">0</span>;</code>
							<code>  <span class="cyan">background-color</span>: <span class="purple">#d71a21</span>;</code>
							<code>  <span class="cyan">-webkit-transition</span>: <span class="purple">.4</span><span class="cyan">s</span>;</code>
							<code>  <span class="cyan">transition</span>: <span class="purple">.4</span><span class="cyan">s</span>;</code>
							<code>}</code>
							<code><span class="green">.my-slider</span>:before {</code>
							<code>  <span class="cyan">position</span>: <span class="cyan">absolute</span>;</code>
							<code>  <span class="cyan">content</span>: <span class="yellow">""</span>;</code>
							<code>  <span class="cyan">border-radius</span>: <span class="purple">50</span><span class="cyan">%</span>;</code>
							<code>  <span class="cyan">height</span>: <span class="purple">22</span><span class="cyan">px</span>;</code>
							<code>  <span class="cyan">width</span>: <span class="purple">22</span><span class="cyan">px</span>;</code>
							<code>  <span class="cyan">left</span>: <span class="purple">1</span><span class="cyan">px</span>;</code>
							<code>  <span class="cyan">bottom</span>: <span class="purple">1</span><span class="cyan">px</span>;</code>
							<code>  <span class="cyan">background-color</span>: <span class="cyan">white</span>;</code>
							<code>  <span class="cyan">-webkit-transition</span>: <span class="purple">.4</span><span class="cyan">s</span>;</code>
							<code>  <span class="cyan">transition</span>: <span class="purple">.4</span><span class="cyan">s</span>;</code>
							<code>}</code>
							<code><span class="pink">input</span>:checked <span class="pink">+</span> <span class="green">.my-slider</span> {</code>
							<code>  <span class="cyan">background-color</span>: <span class="purple">#5cb85c</span>;</code>
							<code>}</code>
							<code><span class="pink">input</span>:checked <span class="pink">+</span> <span class="green">.my-slider</span>:before {</code>
							<code>  <span class="cyan">-webkit-transform</span>: <span class="cyan">translateX</span>(<span class="purple">30</span><span class="cyan">px</span>);</code>
							<code>  <span class="cyan">-ms-transform</span>: <span class="cyan">translateX</span>(<span class="purple">30</span><span class="cyan">px</span>);</code>
							<code>  <span class="cyan">transform</span>: <span class="cyan">translateX</span>(<span class="purple">30</span><span class="cyan">px</span>);</code>
							<code>}</code>
							<code><span class="pink">input</span>:checked:disabled <span class="pink">+</span> <span class="green">.my-slider</span> {</code>
							<code>  <span class="cyan">background-color</span>: <span class="purple">#b0e3b0</span>;</code>
							<code>  <span class="cyan">cursor</span>: <span class="cyan">default</span>;</code>
							<code>}</code>
							<code><span class="pink">input</span>:disabled <span class="pink">+</span> <span class="green">.my-slider</span> {</code>
							<code>  <span class="cyan">background-color</span>: <span class="purple">#fda1a5</span>;</code>
							<code>  <span class="cyan">cursor</span>: <span class="cyan">default</span>;</code>
							<code>}</code>
						</pre>
						<samp>JS</samp>
						<pre class="sb">
							<code><span class="comment">// Muy fácil</span></code>
							<code><span class="pink">$</span>(<span class="yellow">'#checkApplyOpacity'</span>).<span class="cyan">on</span>(<span class="yellow">'change'</span>, <span class="cyan">function</span> () {</code>
							<code>	<span class="pink">$</span>(<span class="yellow">'#imgTestOpacity'</span>).<span class="cyan">toggleClass</span>(<span class="yellow">'my-fade-effect-on'</span>);</code>
							<code>});</code>
						</pre>
					</div>
				</div>
			</div>
		</div>
		<!-- ./vanishEfect -->

		<!-- scrollToTop -->
		<div id="scrollToTop" class="my-panel my-panel-dark-cyan">
			<div class="my-panel-header">
				<h3 class="my-panel-header-title">Función para regresar al tope de la página</h3>
			</div>
			<div class="my-panel-body">
				<h2>Regresando al tope...</h2>
				<p class="my-text">Para este ejemplo no requiere de mucha explicación, solo se trata de un botón que nos regresa al inicio de la página, ya sea con o sin efecto de scroll.</p>
				<div class="row">
					<div class="col-md-1 col-2">
						<a href="#" class="return-to-top"><i class="fa-solid fa-chevron-up"></i></a>
					</div>
					<div class="col-md-11 col-10">
						<label>Aplicar efecto de "scroll"
							<label class="my-switch">
								<input type="checkbox" id="checkApplyScrolling" checked />
								<span class="my-slider"></span>
							</label>
						</label>
					</div>
				</div>
				<br />
				<h2><i class="fa-solid fa-code"></i> Codificación</h2>
				<div class="row">
					<div class="col">
						<samp>HTML</samp>
						<pre class="sb">
							<code><span class="comment">&lt;!-- En este caso yo coloqué el botón al inicio del "body". --&gt;</span></code>
							<code>&lt;<span class="pink">body</span>&gt;</code>
							<code>	<span class="comment">&lt;!-- Inicio el botón con la clase de "my-fade-effect-on" para que esté invisible. --&gt;</span></code>
							<code>	&lt;<span class="pink">a</span> <span class="green">href</span>=<span class="yellow">"#"</span> <span class="green">id</span>=<span class="yellow">"buttonToTop"</span> <span class="green">class</span>=<span class="yellow">"return-to-top my-fade-effect-on"</span>&gt;&lt;<span class="pink">i</span> <span class="green">class</span>=<span class="yellow">"fa-solid fa-chevron-up"</span>&gt;&lt;/<span class="pink">i</span>&gt;&lt;/<span class="pink">a</span>&gt;</code><br />
							<code>	<span class="comment">&lt;!-- Resto del sitio... --&gt;</span></code>
							<code>&lt;/<span class="pink">body</span>&gt;</code>
						</pre>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5">
						<samp>CSS</samp>
						<pre class="sb">
							<code><span class="comment">/**</span></code>
							<code> <span class="comment">*</span></code>
							<code> <span class="comment">* .my-fade-effect</span></code>
							<code> <span class="comment">*</span></code>
							<code> <span class="comment">* Vease el ejemplo de: <a href="#vanishEfect">Efecto de desvanecimiento</a></span></code>
							<code> <span class="comment">*/</span></code><br />
							<code><span class="comment">/**</span></code>
							<code> <span class="comment">*</span></code>
							<code> <span class="comment">* .return-to-top</span></code>
							<code> <span class="comment">*/</span></code>
							<code><span class="green">.return-to-top</span> {</code>
							<code>  <span class="cyan">display</span>: <span class="cyan">inline-flex</span>;</code>
							<code>  <span class="cyan">padding</span>: <span class="purple">15</span><span class="cyan">px</span>;</code>
							<code>  <span class="cyan">color</span>: <span class="purple">#fff</span>;</code>
							<code>  <span class="cyan">background-color</span>: <span class="purple">#000</span>;</code>
							<code>  <span class="cyan">border-radius</span>: <span class="purple">5</span><span class="cyan">px</span>;</code>
							<code>  <span class="cyan">font-size</span>: <span class="purple">20</span><span class="cyan">px</span>;</code>
							<code>  <span class="cyan">text-decoration</span>: <span class="cyan">none</span>;</code>
							<code>}</code>
							<code><span class="green">.return-to-top</span>:focus,</code>
							<code><span class="green">.return-to-top</span>:hover {</code>
							<code>  <span class="cyan">color</span>: <span class="purple">#fff</span>;</code>
							<code>}</code>
							<code><span class="green">#buttonToTop</span> {</code>
							<code>  <span class="cyan">z-index</span>: <span class="purple">999</span>;</code>
							<code>  <span class="cyan">position</span>: <span class="cyan">fixed</span>;</code>
							<code>  <span class="cyan">margin</span>: <span class="purple">0 15</span><span class="cyan">px</span> <span class="purple">15</span><span class="cyan">px</span> <span class="purple">0</span>;</code>
							<code>  <span class="cyan">bottom</span>: <span class="purple">0</span>;</code>
							<code>  <span class="cyan">right</span>: <span class="purple">0</span>;</code>
							<code>}</code>
						</pre>
					</div>
					<div class="col-md-7">
						<samp>JS</samp>
						<pre class="sb">
							<code><span class="comment">// Despues: el evento del bóton.</span></code>
							<code><span class="pink">$</span>(<span class="yellow">'#buttonToTop'</span>).<span class="cyan">click</span>(<span class="cyan">function</span> (<span class="orange">e</span>) {</code>
							<code>	e.<span class="cyan">preventDefault</span>();</code><br />
							<code>	<span class="comment">// Con efecto de "scroll":</span></code>
							<code>	<span class="pink">$</span>(<span class="yellow">'html, body'</span>).<span class="cyan">animate</span>({ scrollTop: <span class="purple">0</span> }, <span class="purple">1000</span>);</code><br />
							<code>	<span class="comment">// Sin efecto de "scroll":</span></code>
							<code>	<span class="pink">$</span>(<span class="cyan">window</span>).<span class="cyan">scrollTop</span>(<span class="purple">0</span>);</code>
							<code>});</code><br />
							<code><span class="comment">// Y por último: la función para mostrar / ocultar el boton.</span></code>
							<code><span class="pink">$</span>(<span class="cyan">window</span>).<span class="cyan">on</span>(<span class="yellow">'scroll'</span>, <span class="cyan">function</span> (<span class="orange">e</span>) {</code>
							<code>	<span class="pink">if</span> (<span class="pink">$</span>(<span class="orange">this</span>).<span class="cyan">scrollTop</span>() <span class="pink">&gt;=</span> <span class="purple">250</span>) <span class="pink">$</span>(<span class="yellow">'#buttonToTop'</span>).<span class="cyan">addClass</span>(<span class="yellow">'my-fade-effect-off'</span>).<span class="cyan">removeClass</span>(<span class="yellow">'my-fade-effect-on'</span>);</code>
							<code>	<span class="pink">else</span> <span class="pink">$</span>(<span class="yellow">'#buttonToTop'</span>).<span class="cyan">addClass</span>(<span class="yellow">'my-fade-effect-on'</span>).<span class="cyan">removeClass</span>(<span class="yellow">'my-fade-effect-off'</span>);</code>
							<code>});</code><br />
							<code><span class="comment">// Este último es para en caso de que el usuario refresque la página y el botón aparesca sin necesidad de hacer scroll.</span></code>
							<code><span class="pink">$</span>(<span class="cyan">document</span>).<span class="cyan">ready</span>(<span class="cyan">function</span> (<span class="orange">e</span>) {</code>
							<code>	<span class="pink">if</span> (<span class="pink">$</span>(<span class="orange">this</span>).<span class="cyan">scrollTop</span>() <span class="pink">&gt;=</span> <span class="purple">250</span>) <span class="pink">$</span>(<span class="yellow">'#buttonToTop'</span>).<span class="cyan">addClass</span>(<span class="yellow">'my-fade-effect-off'</span>).<span class="cyan">removeClass</span>(<span class="yellow">'my-fade-effect-on'</span>);</code>
							<code>	<span class="pink">else</span> <span class="pink">$</span>(<span class="yellow">'#buttonToTop'</span>).<span class="cyan">addClass</span>(<span class="yellow">'my-fade-effect-on'</span>).<span class="cyan">removeClass</span>(<span class="yellow">'my-fade-effect-off'</span>);</code>
							<code>});</code>
						</pre>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="alert alert-warning" role="alert">
							<h4 class="alert-heading">Algo que Debo Mencionar</h4>
							<p>Debido a que este sitio usa la versión 5.2.3 de la librería de estilos de Bootstrap, este ejemplo puede tener conflictos, por ejemplo: al hacer el efecto de "scroll" se atasque en ciertas zonas del sitio; a la hora de ponerse en práctica cuando se incluye la mencionda librería. Esto se debe a que la misma tiene configurada la propiedad <var>scroll-behavior</var> como <var>smooth</var> provocando conflictos en la función <var>$.animate()</var> de la librería de jQuery.</p>
							<hr />
							<p>Este conflicto puede ser resuelto fácilmente agregando la siguiente línea a nuestra hoja de estilos:</p>
							<pre class="sb">
								<code><span class="comment">/**</span></code>
								<code> <span class="comment">*</span></code>
								<code> <span class="comment">* Así se encuentra actualmente la librería de estilos de Bootstrap</span></code>
								<code> <span class="comment">* (yo opté por evitar su modificación)</span></code>
								<code> <span class="comment">*/</span></code>
								<code><span class="pink">@media</span> (<span class="cyan">prefers-reduced-motion</span>:no-preference){:root{<span class="cyan">scroll-behavior</span>:<span class="cyan">smooth</span>}}</code><br />
								<code><span class="comment">/**</span></code>
								<code> <span class="comment">*</span></code>
								<code> <span class="comment">* Agregamos el @media de la librería de bootstrap a nuestra hoja</span></code>
								<code> <span class="comment">* de estilos y cambiamos el valor de la propiedad "scroll-behavior"</span></code>
								<code> <span class="comment">* de "smooth" a "unset".</span></code>
								<code> <span class="comment">*/</span></code>
								<code><span class="pink">@media</span> (<span class="cyan">prefers-reduced-motion</span>:no-preference){:root{<span class="cyan">scroll-behavior</span>:<span class="cyan">unset</span><span class="pink">!important</span>}}</code>
							</pre>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ./scrollToTop -->

		<!-- grayScaleScrolling -->
		<div id="grayScaleScrolling" class="my-panel my-panel-dark-blue">
			<div class="my-panel-header">
				<h3 class="my-panel-header-title">Cambiar colores de una imagen a escala de grises haciendo scroll</h3>
			</div>
			<div class="my-panel-body">
				<h2>Escala de grises</h2>
				<p class="my-text">Vaya título mas largo. Bueno en este ejemplo no tengo mucho que decir mas que hace ya tiempo que vi un sitio (no recuerdo su nombre ni dirección) en donde tenia una función al hacer scroll y las fotos del mismo sitio cambiaban de color, asi que decidía hacer al similar.</p>
				<?php $imgUrl = $_SESSION["MAIN_URL"] . "assets/img/[Zakumi] Barcelona.png" ?>
				<img src="<?php echo $imgUrl ?>" alt="img-zakumi-barcelona" class="img-fluid my-gray-scale-on" id="imgTestGrayScale" />
				<h4><small class="text-muted">* Esta imagen la puedes encontrar en mi perfil de <i class="fa-brands fa-deviantart"></i> DeviantArt</small></h4>
			</div>
		</div>
		<!-- ./grayScaleScrolling -->

		<!-- panelCode -->
		<!-- ./panelCode -->

		<!-- gaussJordanCalculator -->
		<!-- ./gaussJordanCalculator -->

		<!-- randomStringsGenerator -->
		<!-- ./randomStringsGenerator -->

		<!-- calculator -->
		<!-- ./calculator -->

		<!-- sublimeText3Monokai -->
		<!-- ./sublimeText3Monokai -->

		<!-- validationWithJS -->
		<!-- ./validationWithJS -->
	</div>

	<footer class="my-footer">
		<p>Desarrollado desde el 2016 con mucho <i class="fa-solid fa-heart" title="amor"></i> al <i class="fa-solid fa-code" title="código"></i>, <i class="fa-solid fa-music" title="música"></i> y ayuda de <i class="fa-brands fa-stack-overflow" title="StackOverflow"></i> por: Paco Alex Martell</p>
	</footer>
	
	<script src="<?php echo $_SESSION["MAIN_URL"] ?>js/jquery.min.js"></script>
	<script src="<?php echo $_SESSION["MAIN_URL"] ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo $_SESSION["MAIN_URL"] ?>assets/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo $_SESSION["MAIN_URL"] ?>assets/js/SimpleAjaxUploader.min.js"></script>
	<script type="text/javascript">
	// var _dataTransferFiles = new DataTransfer();
	var _arrayInfoFiles = new Array();
	var _generalPct = 0;
	var _uploadedFiles = 0;
	// const _DATATRANSFERNULL = new DataTransfer();
	// const _MAXSIZE = ((/*byte*/ 1 * /*bytes*/ 1024) /* = kilobyte*/ * /*kilobytes*/ 1024) /* = megabyte*/;
	const _MAXSIZE = /*kilobytes*/ 1024 * /*megabytes*/ 10;
	const _MAXFILESTOUPLOAD = 5;
	const _DAYSOFTHEWEEK = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
	const _MONTHS = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

	var _simpleAjaxUploader = new ss.SimpleUpload({
		button: $('#buttonSelectFilesSimpleAjaxUploader'),
		url: 'uploadFilesSimpleAjaxUploader',
		name: 'inputUploadFilesSimpleAjaxUploader',
		multiple: true,
		multipleSelect: true,
		maxUploads: _MAXFILESTOUPLOAD,
		maxSize: _MAXSIZE,
		autoSubmit: false,
		responseType: 'json',
		onChange: function (filename, extension, uploadBtn, fileSize, file) {
			let _isValidToUpload = true;
			let $code = $('#preOutputStatusSimpleAjaxUploader').html('<code>Archivos por cargar:</code>');

			$('.generalProgressbarSimpleAjaxUploader').attr('aria-valuenow', 0);
			$('.generalProgressbarSimpleAjaxUploader > .progress-bar').css('width', '0%').text('0%');

			/**
			 *
			 * Para este ejemplo valido 2 puntos
			 * escenciales para la carga de archivos
			 * y poder controlarlas.
			 *
			 * 1.- Validar si "_arrayInfoFiles.length"
			 * es menor o igual al límite establecido
			 * por la constante "_MAXFILESTOUPLOAD".
			 */
			if (_arrayInfoFiles.length == _MAXFILESTOUPLOAD) _isValidToUpload = false;

			/**
			 *
			 * 2.- Validar si cumple con el tamaño
			 * permitido sobre la constante de
			 * "_MAXSIZE".
			 */
			else if (fileSize > _MAXSIZE) {
				$code
					.append(`<code> - [<span class="pink">ERROR</span>] <span class="yellow">"${filename}"</span> error: excede el límite de ${_MAXSIZE / 1024}MB permitidos</code>`);

				_isValidToUpload = false;
			}

			if (_isValidToUpload) {
				_arrayInfoFiles.push({
					name: file.name,
					type: file.type,
					size: file.size,
					lastModified: file.lastModified
				});

				fillTableSimpleAjaxUploader(_arrayInfoFiles);

				$('#buttonUploadFilesSimpleAjaxUploader, #buttonResetFilesSimpleAjaxUploader')
					.attr('disabled', false);
			}

			$.each(_arrayInfoFiles, function (index, value) {
				$code.append(`<code> - [<span class="green">OK</span>] <span class="yellow">"${value.name}"</span></code>`);
			});

			/**
			 *
			 * Al terminar esta instrucción,
			 * el valor de "Queue" se auto
			 * incrementa si retorna true.
			 */
			return _isValidToUpload;
		},
		onSubmit: function (filename, extension, uploadBtn, fileSize) {
			if (_uploadedFiles < this.getQueueSize()) _uploadedFiles = this.getQueueSize();

			let $tr = $(`#tableFilesSimpleAjaxUploader #tr_${sanitizeStringSimpleAjaxUploader(filename)}`);

			$tr.find('.td-status').html(`<span class="badge text-bg-primary">Cargando</span>`);

			this.setPctBox($tr.find('.td-pct'));
		},
		onProgress: function (pct) {
			if (this.getQueueSize() == 0) {
				if (pct == 100) {
					_generalPct += (pct / _uploadedFiles);

					$('.generalProgressbarSimpleAjaxUploader').attr('aria-valuenow', _generalPct);
					$('.generalProgressbarSimpleAjaxUploader > .progress-bar').css('width', `${_generalPct}%`).text(`${_generalPct}%`);
				}
			}
		},
		onComplete: function(filename, response, uploadBtn, fileSize) {
			let $tr = $(`#tableFilesSimpleAjaxUploader #tr_${sanitizeStringSimpleAjaxUploader(filename)}`);
			let $code = $(`#preOutputStatusSimpleAjaxUploader #code_${sanitizeStringSimpleAjaxUploader(filename)}`);

			if (response.success === true) {
				$tr.find('.td-status').html(`<span class="badge text-bg-success">Cargado</span>`);

				$code.find('.pre-status').text('CARGADO');
				$code.find('.pre-result').addClass('green').text('OK');
			} else {
				$tr.find('.td-status').html(`<span class="badge text-bg-danger">Error</span>`);

				$code.find('.pre-status').text('NO_CARGADO');
				$code.find('.pre-result').addClass('pink').text('ERROR');
				$code.find('.pre-message').show();
				$code.find('.yellow.pre-message').text(response.msg);
			}
		},
		onDone: function (filename, status, statusText, response, uploadBtn, fileSize) {
			$(`#tableFilesSimpleAjaxUploader #tr_${sanitizeStringSimpleAjaxUploader(filename)}`)
				.find('.td-pct').text('100%');
		},
		onAllDone: function () {
			if ($('div.my-screen-protector').length > 0) {
				setTimeout(_ => {
					$('div.my-screen-protector').remove();

					$('body').removeClass('uploading-files');
				}, 1000);
			}

			$('#checkApplyScreenProtectorSimpleAjaxUploader, #checkApplyProgressBarSimpleAjaxUploader')
				.attr('disabled', false);

			_arrayInfoFiles = new Array();
			_generalPct = 0;
			_uploadedFiles = 0;
		},
		onError: function (filename, errorType, status, statusText, response, uploadBtn, fileSize) {
			console.log(`onError: ${filename}; ErrorType: ${errorType}; Status: ${status}; StatusText: ${statusText}: Response: ${response}`);

			let $tr = $(`#tableFilesSimpleAjaxUploader #tr_${sanitizeStringSimpleAjaxUploader(filename)}`);
			let $code = $(`#preOutputStatusSimpleAjaxUploader #code_${sanitizeStringSimpleAjaxUploader(filename)}`);

			$tr.find('.td-status').html(`<span class="badge text-bg-danger">Error</span>`);

			$code.find('.pre-status').text('NO_CARGADO');
			$code.find('.pre-result').addClass('pink').text('ERROR');
			$code.find('.pre-message').show();
			$code.find('.yellow.pre-message').text(response.msg);
		},
		onExtError: function (filename, extension) {
			let $tr = $(`#tableFilesSimpleAjaxUploader #tr_${sanitizeStringSimpleAjaxUploader(filename)}`);
			let $code = $(`#preOutputStatusSimpleAjaxUploader #code_${sanitizeStringSimpleAjaxUploader(filename)}`);

			$tr.find('.td-status').html(`<span class="badge text-bg-danger">Error</span>`);

			$code.find('.pre-status').text('NO_CARGADO');
			$code.find('.pre-result').addClass('pink').text('ERROR');
			$code.find('.pre-message').show();
			$code.find('.yellow.pre-message').text(`el tipo de archivo no está permitido (${extension})`);
		},
		onSizeError: function (filename, fileSize) {
			let $tr = $(`#tableFilesSimpleAjaxUploader #tr_${sanitizeStringSimpleAjaxUploader(filename)}`);
			let $code = $(`#preOutputStatusSimpleAjaxUploader #code_${sanitizeStringSimpleAjaxUploader(filename)}`);

			$tr.find('.td-status').html(`<span class="badge text-bg-danger">Error</span>`);

			$code.find('.pre-status').text('NO_CARGADO');
			$code.find('.pre-result').addClass('pink').text('ERROR');
			$code.find('.pre-message').show();
			$code.find('.yellow.pre-message').text(`el archivo excede el límite de ${_MAXSIZE / 1024}MB permitidos`);
		}
	});

	/*
	function onChangeHandlerSimpleAjaxUploader (files = []) {
		let $dropZone = $('#divFileSimpleAjaxUploader');

		$dropZone
			.removeClass('my-drop-zone-blue my-drop-zone-red my-drop-zone-green my-drop-zone-yellow');

		if (files.length > 0 && files.length <= 5) {
			let areFilesValid = true;
			let filesToAdd = [];

			// console.log(files);

			for (var i = 0; i < files.length; i++) {
				if (files[i].size > _MAXSIZE) {
					areFilesValid = false;
					break;
				} else filesToAdd.push(files[i]);
			}

			if (areFilesValid) {
				_dataTransferFiles = new DataTransfer();

				$.each(filesToAdd, function (index, value) {
					_dataTransferFiles.items.add(new File([value], value.name, {
						type: value.type,
						lastModified: value.lastModified
					}));
				});

				$dropZone
					.addClass('my-drop-zone-green')
					.find('label')
					.html(`<i class="fa-solid fa-check"></i> ${files.length} archivo${files.length > 1 ? 's' : ''} cargado${files.length > 1 ? 's' : ''}`);

				$('#buttonUploadSimpleAjaxUploader, #buttonResetSimpleAjaxUploader').attr('disabled', false);
			} else $dropZone
				.addClass('my-drop-zone-red')
				.find('label')
				.html(`<i class="fa-solid fa-triangle-exclamation"></i> Uno o más archivos excede el tamaño permitido de 1MB`);
		} else if (files.length > 5) $dropZone
			.addClass('my-drop-zone-red')
			.find('label')
			.html(`<i class="fa-solid fa-triangle-exclamation"></i> Solo se permite la carga de 5 archivos`);
		else {
			if (_dataTransferFiles.files.length > 0) $dropZone
				.addClass('my-drop-zone-green')
				.find('label')
				.html(`<i class="fa-solid fa-check"></i> ${_dataTransferFiles.files.length} archivo${_dataTransferFiles.files.length > 1 ? 's' : ''} cargado${_dataTransferFiles.files.length > 1 ? 's' : ''}`);
			else {
				$dropZone
					.find('label')
					.html(`<strong>Seleccione sus archivos</strong> o arrástrelos aquí <i class="fa-solid fa-hand-point-down"></i>`);

				$('#buttonUploadSimpleAjaxUploader, #buttonResetSimpleAjaxUploader').attr('disabled', true);
			}
		}

		$('#inputFileSimpleAjaxUploader')[0].files = _dataTransferFiles.files;

		fillTableSimpleAjaxUploader(_dataTransferFiles.files);
	}
	*/

	function fillTableSimpleAjaxUploader (files = []) {
		let $tbody = $('#tableFilesSimpleAjaxUploader > tbody');

		$tbody.html(null);

		if (files.length > 0) {
			$.each(files, function (index, value) {
				let date = new Date(value.lastModified);
				let fileName = value.name;
				let fileType = value.type;
				let fileSize = Math.round(value.size / _MAXSIZE) / 100;
				let fileLastModified = `${_DAYSOFTHEWEEK[date.getDay()]}, ${date.getDate()} de ${_MONTHS[date.getMonth()]} de ${date.getFullYear()} a las ${date.getHours()}:${date.getMinutes()}:${date.getSeconds()}`;

				$tbody.append(`<tr id="tr_${sanitizeStringSimpleAjaxUploader(fileName)}">
					<td>${fileName}</td>
					<td>${fileType}</td>
					<td>${fileSize}MB</td>
					<td>${fileLastModified}</td>
					<td class="text-center td-pct">0%</td>
					<td class="td-status"><span class="badge text-bg-dark">Por Cargar</span></td>
				</tr>`);
			});
		} else $tbody
			.html(`<tr><td colspan="6" class="text-center">No hay archivos por cargar.</td></tr>`);
	}

	function sanitizeStringSimpleAjaxUploader (stringToSanitize) {
		let newString = stringToSanitize.replace(/[\x20-\x2f\x3a-\x40\x5b-\x60\x7b-\xff]/g, '');

		return newString;
	}

	// /*async*/ function sortBySizeSimpleAjaxUploader () {
		// let filesToSort = Array.from(_dataTransferFiles.files);
		// let sortedFiles = new DataTransfer();

		// let filesToSort = _arrayInfoFiles;

		/*
		for (var i = 0; i < filesToSort.length; i++) {
			for (var j = 0; j < (filesToSort.length - 1); j++) {
				if (filesToSort[j].size > filesToSort[j + 1].size) {
					let first = filesToSort[j];
					let next = filesToSort[j + 1];
					filesToSort[j] = next;
					filesToSort[j + 1] = first;
				}
			}
		}
		*/

		/*
		for (var i = 0; i < filesToSort.length; i++)
			await sortedFiles.items.add(new File([filesToSort[i]], filesToSort[i].name, {
				type: filesToSort[i].type,
				lastModified: filesToSort[i].lastModified
			}));
		*/

		// return sortedFiles;

		// return filesToSort;
	// }

	$(document).ready(function (e) {
		if ($(window).scrollTop() >= 250) $('#buttonToTop').addClass('my-fade-effect-off').removeClass('my-fade-effect-on');
		else $('#buttonToTop').addClass('my-fade-effect-on').removeClass('my-fade-effect-off');
	});

	$('#buttonMenu').click(function (e) {
		e.preventDefault();

		$('#sidebarMenu').toggleClass('opened');
		$('body').toggleClass('menu-opened');

		if ($('#sidebarMenu').hasClass('opened')) {
			$(this).html(`<i class="fa-solid fa-xmark"></i> Cerrar`);

			$('body').prepend(`<div class="page-cover"></div`);
		} else {
			$(this).html(`<i class="fa-solid fa-bars"></i> Menú`);

			$('body').find('div.page-cover').remove();
		}
	});

	$('body').on('click', 'div.page-cover', function () {
		$('#sidebarMenu').toggleClass('opened');
		$('body').toggleClass('menu-opened');
		$('#buttonMenu').html(`<i class="fa-solid fa-bars"></i> Menú`);
		$(this).remove();
	});

	$('#sidebarMenu > .sidebar-menu > .sidebar-brand').on('click', `a[data-toggle="drop-list"]`, function (e) {
		e.preventDefault();

		let $a = $(this);
		let $dropList = $(`.${$a.data('toggle')}`);
		let $dropMenu = $dropList.find('.drop-menu');
		let ddHeight = 0;

		$dropMenu.toggleClass('dropped');
		$a.find('i.drop-icon').toggleClass('open');

		if ($dropMenu.hasClass('dropped'))
			$.each($dropMenu.find('li'), function (index, value) {
				ddHeight += value.offsetHeight;
			});

		$dropMenu.css('height', ddHeight);
	});

	$('#sidebarMenu > .sidebar-menu > .list-item').on('click', 'a', function (e) {
		e.preventDefault();

		$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top - 10 }, 1000);

		$('#buttonMenu').click();
	});

	$('#slideDown').click(function (e) {
		e.preventDefault();
	});

	/*
	$('#inputFileSimpleAjaxUploader').on('change', function (e) {
		e.preventDefault();

		onChangeHandlerSimpleAjaxUploader(e.target.files);
	});

	$('#divFileSimpleAjaxUploader').on('drop', function (e) {
		e.preventDefault();

		onChangeHandlerSimpleAjaxUploader(e.originalEvent.dataTransfer.files);
	});

	$('#divFileSimpleAjaxUploader').on('dragover', function (e) {
		e.preventDefault();

		$(this)
			.removeClass('my-drop-zone-blue my-drop-zone-red my-drop-zone-green my-drop-zone-yellow')
			.addClass('my-drop-zone-blue')
			.find('label')
			.html(`<strong>Suelte aquí sus archivos</strong> <i class="fa-solid fa-hand"></i>`);
	});

	$('#divFileSimpleAjaxUploader').on('dragleave', function (e) {
		e.preventDefault();

		$(this)
			.removeClass('my-drop-zone-blue my-drop-zone-red my-drop-zone-green my-drop-zone-yellow')

		if (_dataTransferFiles.files.length > 0) $(this)
			.addClass('my-drop-zone-green')
			.find('label')
			.html(`<i class="fa-solid fa-check"></i> ${_dataTransferFiles.files.length} archivo${_dataTransferFiles.files.length > 1 ? 's' : ''} cargado${_dataTransferFiles.files.length > 1 ? 's' : ''}`);
		else $(this)
			.find('label')
			.html(`<strong>Seleccione sus archivos</strong> o arrástrelos aquí <i class="fa-solid fa-hand-point-down"></i>`);
	});

	$('#preOutPutSimpleAjaxUploader').on('click', 'a', function (e) {
		e.preventDefault();

		$('#preOutPutSimpleAjaxUploader').html(`<code><a href="#">Verificar si el input tiene archivos cargados</a></code>`);
		$('#preOutPutSimpleAjaxUploader').append(`<code>Número de archivos que contiene: <span class="purple">${$('#inputFileSimpleAjaxUploader')[0].files.length}</span></code>`);

		if ($('#inputFileSimpleAjaxUploader')[0].files.length > 0) {
			$('#preOutPutSimpleAjaxUploader').append(`<code>[<span class="yellow">"files"</span>] =&gt; [</code>`);

			$.each($('#inputFileSimpleAjaxUploader')[0].files, function (index, value) {
				$('#preOutPutSimpleAjaxUploader')
					.append(`<code>    [<span class="purple">${index}</span>] =&gt; {</code>`)
					.append(`<code>        [<span class="yellow">"name"</span>] =&gt; <span class="yellow">"${value.name}"</span>,</code>`)
					.append(`<code>        [<span class="yellow">"type"</span>] =&gt; <span class="yellow">"${value.type}"</span>,</code>`)
					.append(`<code>        [<span class="yellow">"size"</span>] =&gt; <span class="purple">${value.size}</span>,</code>`)
					.append(`<code>        [<span class="yellow">"lastModified"</span>] =&gt; <span class="purple">${value.lastModified}</span></code>`)
					.append(`<code>    }${index < $('#inputFileSimpleAjaxUploader')[0].files.length - 1 ? ',' : '' }</code>`);
			});

			$('#preOutPutSimpleAjaxUploader').append(`<code>]</code>`);
		}
	});
	*/

	$('#checkApplyScreenProtectorSimpleAjaxUploader').on('change', function () {
		let $chkProgressBar = $('#checkApplyProgressBarSimpleAjaxUploader');

		if ($(this).is(':checked')) {
			$chkProgressBar.prop('checked', false);

			$('#rowProgressbarSimpleAjaxUploader').hide();
		}

		$chkProgressBar.attr('disabled', $(this).is(':checked'));
	});

	$('#checkApplyProgressBarSimpleAjaxUploader').on('change', function () {
		let $chkScreenProtector = $('#checkApplyScreenProtectorSimpleAjaxUploader');

		if ($(this).is(':checked')) {
			$chkScreenProtector.prop('checked', false);

			$('#rowProgressbarSimpleAjaxUploader').show();
		} else $('#rowProgressbarSimpleAjaxUploader').hide();

		$chkScreenProtector.attr('disabled', $(this).is(':checked'));
	});

	$('#buttonUploadFilesSimpleAjaxUploader').click(function () {
		$('#preOutputStatusSimpleAjaxUploader').html(`<code>Estatus de carga:</code>`);

		$.each(_arrayInfoFiles, function (index, value) {
			$('#preOutputStatusSimpleAjaxUploader')
				.append(`<code id="code_${sanitizeStringSimpleAjaxUploader(value.name)}"> - [<span class="pre-result"></span>] <span class="yellow">"${value.name}"</span> | <span class="purple pre-status">CARGANDO</span><span class="pre-message" style="display: none;"> error: </span><span class="yellow pre-message" style="display: none;"></span></code>`);
		});

		$('#buttonUploadFilesSimpleAjaxUploader, #buttonResetFilesSimpleAjaxUploader')
			.attr('disabled', true);

		if ($('#checkApplyScreenProtectorSimpleAjaxUploader').is(':checked')) {
			if ($('div.my-screen-protector').length == 0)
				$('body').prepend(`<div class="my-screen-protector">
					<div class="vertical-center">
						<h2 class="mb-3"><i class="fa-solid fa-cloud-arrow-up fa-bounce"></i> Cargando archivos, un momento por favor.</h2>
						<div class="progress mb-3 generalProgressbarSimpleAjaxUploader" role="progressbar" aria-label="Progreso de carga general" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="height: 30px;">
							<div class="progress-bar" style="width: 0%">0%</div>
						</div>
					</div>
				</div>`).addClass('uploading-files');
		}

		$('#checkApplyScreenProtectorSimpleAjaxUploader, #checkApplyProgressBarSimpleAjaxUploader')
			.attr('disabled', true);

		for (let i = 0; i < _arrayInfoFiles.length; i++) _simpleAjaxUploader.submit();
	});

	$('#buttonResetFilesSimpleAjaxUploader').click(function () {
		$('#preOutputStatusSimpleAjaxUploader')
			.html(`<code>Seleccione archivos para cargar</code>`);

		_simpleAjaxUploader.clearQueue();
		_arrayInfoFiles = new Array();
		_generalPct = 0;
		_uploadedFiles = 0;

		fillTableSimpleAjaxUploader();

		$('#buttonUploadFilesSimpleAjaxUploader, #buttonResetFilesSimpleAjaxUploader')
			.attr('disabled', true);
	});

	$('#buttonReloadTableCollection').click(function () {
		$('#tableCollection > thead, #tableCollection > tbody, #tableCollection > caption').html(null);

		$.ajax({
			url: 'getNewCollection',
			type: 'POST',
			dataType: 'json',
			data: { length: 10 },
			beforeSend: function (jqXHR, settings) {
				$('#tableCollection > thead').removeClass('table-dark');
				$('#buttonReloadTableCollection').html(`<i class="fa-solid fa-rotate-right fa-spin"></i> Cargando...`).attr('disabled', true);
			},
			success: function (response) {
				if (response.isOk) {
					let headers = [];

					$('#tableCollection > caption').html(response.data.description);

					$.each(response.data.dataHeaders, function (index, value) {
						if (value.is_visible) headers.push(`<th>${value.column_description}</th>`);
					});
					$('#tableCollection > thead').append(`<tr>${headers.join()}</tr>`);

					$.each(response.data.dataRows, function (index, value) {
						let row = [];
						let indexColumn = 0;

						$.each(value, function (index2, value2) {
							if (response.data.dataHeaders[indexColumn].is_visible) row.push(`<td>${value2}</td>`);
							indexColumn++;
						});

						$('#tableCollection > tbody').append(`<tr>${row.join()}</tr>`);
					});
				} else {
					$('#tableCollection > caption').html(`<i class="fa-solid fa-triangle-exclamation"></i> Error`);
					$('#tableCollection > thead').html(`<tr><th>Message</th></tr>`).addClass('table-dark');
					$('#tableCollection > tbody').html(`<tr class="table-danger"><td>${response.data.message}</td></tr>`);
				}
			},
			error: function (jqXHR, textStatus, errorThrown) {
				$('#tableCollection > caption').html(`<i class="fa-solid fa-triangle-exclamation"></i> Error`);
				$('#tableCollection > thead').html(`<tr><th>Message</th></tr>`).addClass('table-dark');
				$('#tableCollection > tbody').html(`<tr class="table-danger"><td>${jqXHR.status} - ${jqXHR.statusText}</td></tr>`);
			},
			complete: function (jqXHR, textStatus) {
				$('#buttonReloadTableCollection').html(`<i class="fa-solid fa-rotate-right"></i> Recargar Tabla`).attr('disabled', false);
			}
		});
	});

	$('#buttonRowsCount').click(function () {
		$('#spanRowsCount').html($('#tableCollection > tbody > tr').length);
	});

	$('#checkApplyOpacity').on('change', function () {
		$('#imgTestOpacity').toggleClass('my-fade-effect-on');

		$('#spanApplyClass').html($(this).is(':checked') ? `"my-fade-effect-off my-fade-effect-on"` : `"my-fade-effect-off"`);
	});

	$('.return-to-top').click(function (e) {
		e.preventDefault();
		
		if ($('#checkApplyScrolling').is(':checked')) $('html, body').animate({ scrollTop: 0 }, 1000);
		else $(window).scrollTop(0);
	});

	$(window).on('scroll', function (e) {
		if ($(this).scrollTop() >= 250) $('#buttonToTop').addClass('my-fade-effect-off').removeClass('my-fade-effect-on');
		else $('#buttonToTop').addClass('my-fade-effect-on').removeClass('my-fade-effect-off');
	});
	</script>
</body>
</html>
