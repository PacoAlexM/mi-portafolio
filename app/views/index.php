<!DOCTYPE html>
<html lang="es-mx">
<head>
	<meta charset="ISO 8859-1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Prácticas de web simples con HTML, CSS &amp; Javascript">
	<meta name="keywords" content="HTML, CSS, JavaScript, Scrolls functions, Funciones con scroll, CSS3 fade style, Estilos de desvanecimiento con CSS3, Gray scale with Javascript, Escala de grises con Javascript, SimpleAjaxUploader load screen, Pantalla de carga con SimpleAjaxUploader, Practica con SimpleAjaxUploader, Scroll to up with Javascript, Regresar al tope de la página con Javascript, Sistemas de matrices por el método de Gauss Jordan, Resolución de sistemas de matrices por el método de Gauss Jordan en php, Strings aleatorios en php" />
	<meta name="author" content="Paco Alex Martell" />
	<meta name="theme-color" content="#000000" />
	<title>Paco Alex M | HTML &amp; CSS &amp; JS</title>
	<link rel="shortcut icon" href="<?php echo $_SESSION["MAIN_URL"] ?>favicon.png" type="image/png" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo $_SESSION["MAIN_URL"] ?>apple-touch-icon.png" sizes="196x196" />
	<link rel="stylesheet" href="<?php echo $_SESSION["MAIN_URL"] ?>css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo $_SESSION["MAIN_URL"] ?>font-awesome/css/all.min.css" />
	<link rel="stylesheet" href="<?php echo $_SESSION["MAIN_URL"] ?>css/style.css" />
</head>
<body>
	<a href="#" id="toggle-menu" class="btn btn-lg btn-dark btn-toggler"><i class="fa-solid fa-bars"></i> Menú</a>

	<div class="loading-cover">
		<div class="background"></div>
		<div class="content"></div>
	</div>

	<nav class="sidebar-wrapper" id="leftmenu">
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
						<a href="<?php echo $_SESSION["MAIN_URL"] ?>acerca/de/mi"><i class="fa-solid fa-user"></i> Acerca de Mi</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#upload-files" onclick="scrollToSect(this)">&gt; Carga de archivos &lt;</a>
			</li>
			<li>
				<a href="#count-files" onclick="scrollToSect(this)">Numero de archivos</a>
			</li>
			<li>
				<a href="#collections" onclick="scrollToSect(this)">colecciones.json</a>
			</li>
			<li>
				<a href="#animate" onclick="scrollToSect(this)">Animación</a>
			</li>
			<li>
				<a href="#scroll-top" onclick="scrollToSect(this)">Función "Scroll-To-Top"</a>
			</li>
			<li>
				<a href="#gray-scale" onclick="scrollToSect(this)">Escala de Grises</a>
			</li>
			<li>
				<a href="#the-box" onclick="scrollToSect(this)">Panel Code</a>
			</li>
			<li>
				<a href="#matrix" onclick="scrollToSect(this)">Matrices</a>
			</li>
			<li>
				<a href="#random-string" onclick="scrollToSect(this)"><i>String</i> Aleatorio</a>
			</li>
			<li class="sidebar-divisor"></li>
			<li class="drop-list">
				<a href="#" data-toggle="drop-list">Elemento 1 <i class="drop-icon fa fa-caret-down"></i></a>
				<ul class="drop-menu">
					<li>
						<a href="#" onclick="event.preventDefault()">Elemento de lista 1</a>
					</li>
					<li>
						<a href="#" onclick="event.preventDefault()">Elemento de lista 2</a>
					</li>
					<li>
						<a href="#" onclick="event.preventDefault()">Elemento de lista 3</a>
					</li>
					<li>
						<a href="#" onclick="event.preventDefault()">Elemento de lista 4</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#" onclick="event.preventDefault()">Elemento 2</a>
			</li>
			<li>
				<a href="#" onclick="event.preventDefault()">Elemento 3</a>
			</li>
			<li>
				<a href="#" onclick="event.preventDefault()">Elemento 4</a>
			</li>
			<li>
				<a href="#" onclick="event.preventDefault()">Elemento 5</a>
			</li>
			<li>
				<a href="#" onclick="event.preventDefault()">Elemento 6</a>
			</li>
			<li>
				<a href="#" onclick="event.preventDefault()">Elemento 7</a>
			</li>
			<li>
				<a href="#" onclick="event.preventDefault()">Elemento 8</a>
			</li>
		</ul>
	</nav>

	<header class="header" id="main-pagehead">
		<div class="vertical-center">
			<h1>&gt; header title goes here &lt;</h1>
			<hr />
			<div style="position: absolute; bottom: 0; width: 100%;">
				<a href="#upload-files" class="to-content" onclick="scrollDown(this)"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</header>

	<div class="container-fluid">
		<!-- upload-files -->
		<div id="upload-files" class="card card-yellow">
			<div class="card-header">
				<h3>&gt; Carga de archivos &lt; <small>Uso de SimpleAjaxUploader.js</small></h3>
			</div>
			<div class="card-body">

				<button id="upload-btn" class="btn btn-success">Cargar Archivos...</button>

				<div id="pic-progress-wrap"></div>
				<div id="picbox"></div>
				<div id="errormsg"></div>

				<hr>
				<p class="tell">Esta práctica trata de una pantalla para evitar "accidentes" al cargar archivos con SimpleAjaxUploader, "accidentes" como:</p>
				<ul>
					<li>Pulsar en botones de re direccionamientos.</li>
					<li>Cargar más archivos pero el plugin aún no termina.</li>
					<li>Realizar otros procesos.</li>
				</ul>
				<p class="tell">No solo evita esos "accidentes", también muestra una lista de los archivos que cargaron y los que no</p>

				<h2><i class="fa-solid fa-code"></i> Codificación</h2>
				<div class="row">
					<div class="col-md-12">
						<p>HTML</p>
						<pre class="sb">
							<code><span class="comment">&lt;!-- Esto se mostrara cuando se estén cargando archivos. --&gt;</span></code>
							<code>&lt;<span class="sb-pink">div</span> <span class="sb-green">class</span>=<span class="sb-yellow">"loading-cover"</span>&gt;</code>
							<code>    &lt;<span class="sb-pink">div</span> <span class="sb-green">class</span>=<span class="sb-yellow">"background"</span>&gt;&lt;/<span class="sb-pink">div</span>&gt;</code>
							<code>    <span class="comment">&lt;!-- No es necesario agregar contenido a estos div's, pero si quieres ver como se ven, puedes agregarlos a tu gusto. --&gt;</span></code>
							<code>    &lt;<span class="sb-pink">div</span> <span class="sb-green">class</span>=<span class="sb-yellow">"content"</span>&gt;&lt;/<span class="sb-pink">div</span>&gt;</code>
							<code>&lt;/<span class="sb-pink">div</span>&gt;</code><br />
							<code><span class="comment">&lt;!-- El div con la clase "content", será el encargado de mostrar el mensaje de carga y los detalles de la carga. --&gt;</span></code>
							<code><span class="comment">&lt;!-- Mientras el otro div, solo será el fondo oscuro. --&gt;</span></code>
						</pre>
					</div>
					<div class="col-md-6">
						<p>CSS</p>
						<pre class="sb">
							<code><span class="comment">/* Ahora a darle estilo a esta pantalla de carga. */</span></code>
							<code><span class="sb-green">.loading-cover</span> {</code>
							<code>  <span class="sb-cyan">overflow-y</span>: <span class="sb-cyan">auto</span>;</code>
							<code>  <span class="sb-cyan">z-index</span>: <span class="sb-purple">1</span>;</code>
							<code>  <span class="sb-cyan">position</span>: <span class="sb-cyan">fixed</span>;</code>
							<code>  <span class="sb-cyan">top</span>: <span class="sb-purple">0</span>;</code>
							<code>  <span class="sb-cyan">bottom</span>: <span class="sb-purple">0</span>;</code>
							<code>  <span class="sb-cyan">right</span>: <span class="sb-purple">0</span>;</code>
							<code>  <span class="sb-cyan">left</span>: <span class="sb-purple">0</span>;</code>
							<code>  <span class="sb-cyan">text-align</span>: <span class="sb-cyan">center</span>;</code>
							<code>  <span class="sb-cyan">display</span>: <span class="sb-cyan">none</span>;</code>
							<code>}</code>
							<code><span class="sb-green">.loading-cover.show-screen</span> {</code>
							<code>  <span class="sb-cyan">display</span>: <span class="sb-cyan">block</span>;</code>
							<code>}</code>
							<code><span class="sb-green">.loading-cover .background</span> {</code>
							<code>  <span class="sb-cyan">position</span>: <span class="sb-cyan">fixed</span>;</code>
							<code>  <span class="sb-cyan">width</span>: <span class="sb-purple">100</span><span class="sb-pink">%</span>;</code>
							<code>  <span class="sb-cyan">height</span>: <span class="sb-purple">100</span><span class="sb-pink">%</span>;</code>
							<code>  <span class="sb-cyan">background-color</span>: <span class="sb-cyan">rgba</span>(<span class="sb-purple">0</span>, <span class="sb-purple">0</span>, <span class="sb-purple">0</span>, <span class="sb-purple">0.7</span>);</code>
							<code>}</code>
							<code><span class="sb-green">.loading-cover .content</span> {</code>
							<code>  <span class="sb-cyan">padding</span>: <span class="sb-purple">150</span><span class="sb-pink">px</span> <span class="sb-purple">0</span>;</code>
							<code>  <span class="sb-cyan">position</span>: <span class="sb-cyan">absolute</span>;</code>
							<code>  <span class="sb-cyan">width</span>: <span class="sb-purple">100</span><span class="sb-pink">%</span>;</code>
							<code>  <span class="sb-cyan">color</span>: <span class="sb-purple">#fff</span>;</code>
							<code>}</code>
							<code><span class="sb-green">.error-list</span> {</code>
							<code>  <span class="sb-cyan">display</span>: <span class="sb-cyan">none</span>;</code>
							<code>}</code>
							<code><span class="sb-green">.error-list.in-block</span> {</code>
							<code>  <span class="sb-cyan">display</span>: <span class="sb-cyan">block</span>;</code>
							<code>}</code>
						</pre>
					</div>
					<div class="col-md-6">
						<p>Javascript</p>
						<pre class="sb">
							<code><span class="sb-cyan">var</span></code>
							<code>    <span class="comment">/* Estas variables servirán de contadores en la carga. */</span></code>
							<code>    loop,</code>
							<code>    countpost <span class="sb-pink">=</span> <span class="sb-purple">0</span>,</code>
							<code>    numberfiles <span class="sb-pink">=</span> <span class="sb-purple">0</span>,</code>
							<code>    <span class="comment">/* Capturar errores y cargas correctas. */</span></code>
							<code>    ESTATUS <span class="sb-pink">=</span> {</code>
							<code>        correcto : <span class="sb-purple">0</span>,</code>
							<code>        error : <span class="sb-purple">0</span>,</code>
							<code>        errors : <span class="sb-yellow">''</span></code>
							<code>    },</code>
							<code>    <span class="comment">/* Y estas variables solo serán elementos HTML, no cambiaran. */</span></code>
							<code>    HEADER <span class="sb-pink">=</span> <span class="sb-yellow">'&lt;h1&gt;Espere un momento porfavor&lt;/h1&gt;&lt;hr&gt;'</span>,</code>
							<code>    FINISH <span class="sb-pink">=</span> <span class="sb-yellow">'&lt;h1&gt;Carga completa&lt;/h1&gt;&lt;hr&gt;'</span>,</code>
							<code>    FBUTTON <span class="sb-pink">=</span> <span class="sb-yellow">'&lt;button onclick="oksuccess()" class="btn btn-success"&gt;Aceptar&lt;/button&gt;'</span></code>
							<code>;</code><br />
							<code><span class="comment">/* Con el SimpleAjaxUploader, mostrara y agregara el contenido en tiempo de ejecución. */</span></code>
							<code><span class="sb-cyan">var</span> uploader <span class="sb-pink">= new</span> ss.SimpleUpload({</code>
							<code>    button: <span class="sb-yellow">'mybutton'</span>,</code>
							<code>    url: <span class="sb-yellow">'path/uploader.php'</span>,</code>
							<code>    name: <span class="sb-yellow">'...'</span>,</code>
							<code>    ....</code>
							<code>    <span class="comment">/* Supongamos que ya agregamos todos estos parámetros, y luego... */</span></code>
							<code>    <span class="sb-green">onSubmit</span>: <span class="sb-cyan">function</span>(<span class="sb-orange">filename, extension</span>) {</code>
							<code>        <span class="comment">/* Se le agrega el elemento html a la pantalla de carga. */</span></code>
							<code>        <span class="sb-cyan">document</span>.querySelector(<span class="sb-yellow">'.loading-cover &gt; .content'</span>).innerHTML <span class="sb-pink">=</span> HEADER;</code>
							<code>        <span class="comment">/* Si la pantalla de carga NO esta visible, se le agrega la clase show-screen. */</span></code>
							<code>        <span class="sb-pink">if</span> (<span class="sb-pink">!</span><span class="sb-cyan">document</span>.querySelector(<span class="sb-yellow">'.loading-cover'</span>).classList.contains(<span class="sb-yellow">'show-screen'</span>)) <span class="sb-cyan">document</span>.querySelector(<span class="sb-yellow">'.loading-cover'</span>).classList.<span class="sb-cyan">add</span>(<span class="sb-yellow">'show-screen'</span>);</code>
							<code>        <span class="comment">/* Asignar valor de ciclo de carga. */</span></code>
							<code>        countpost<span class="sb-pink">++</span>;</code>
							<code>        loop <span class="sb-pink">=</span> countpost;</code>
							<code>        numberfiles <span class="sb-pink">=</span> <span class="sb-purple">0</span>;</code>
							<code>        <span class="comment">/* Resetear variables de ESTATUS. */</span></code>
							<code>        ESTATUS.correcto <span class="sb-pink">=</span> <span class="sb-purple">0</span>;</code>
							<code>        ESTATUS<span class="sb-cyan">.error</span> <span class="sb-pink">=</span> <span class="sb-purple">0</span>;</code>
							<code>        ESTATUS.errors <span class="sb-pink">=</span> <span class="sb-yellow">''</span>;</code>
							<code>    },</code>
							<code>    <span class="sb-green">onComplete</span>: <span class="sb-cyan">function</span>(<span class="sb-orange">filename, response</span>) {</code>
							<code>        countpost <span class="sb-pink">=</span> <span class="sb-purple">0</span>;</code>
							<code>        numberfiles<span class="sb-pink">++</span>;</code>
							<code>        estatus.correcto<span class="sb-pink">++</span>;</code>
							<code>        <span class="comment">/* (1) Mostrar archivos cargados, correctos y erroneos. */</span></code>
							<code>        <span class="sb-pink">if</span> (numberfiles <span class="sb-pink">==</span> loop) {</code>
							<code>            <span class="sb-cyan">document</span>.querySelector(<span class="sb-yellow">'.loading-cover &gt; .content'</span>).innerHTML <span class="sb-pink">=</span> <span class="sb-yellow">'&lt;h1&gt;Carga completa&lt;/h1&gt;'</span><span class="sb-pink">+</span></code>
							<code>                <span class="sb-yellow">'&lt;hr&gt;'<span class="sb-pink">+</span></code>
							<code>                <span class="sb-yellow">'&lt;p&gt;Total de archivos a cargar: '</span> <span class="sb-pink">+</span> loop <span class="sb-pink">+</span> '&lt;/p&gt;'<span class="sb-pink">+</span></code>
							<code>                <span class="sb-yellow">'&lt;p&gt;Total de archivos cargados correctamente: '</span> <span class="sb-pink">+</span> estatus.correcto <span class="sb-pink">+</span> '&lt;/p&gt;'<span class="sb-pink">+</span></code>
							<code>                <span class="sb-yellow">'&lt;p&gt;Total de errores: '</span> <span class="sb-pink">+</span> estatus.error <span class="sb-pink">+</span> '&lt;/p&gt;'<span class="sb-pink">+</span></code>
							<code>                <span class="sb-yellow">'&lt;button onclick="oksuccess()" class="btn btn-success"&gt;Aceptar&lt;/button&gt;'</span></code>
							<code>            ;</code>
							<code>            <span class="sb-pink">if</span> (estatus<span class="sb-cyan">.error</span> <span class="sb-pink">&gt;</span> <span class="sb-purple">0</span>) <span class="sb-cyan">document</span>.querySelector(<span class="sb-yellow">'.loading-cover &gt; .content'</span>).insertAdjacentHTML(<span class="sb-yellow">'beforeend'</span>, <span class="sb-yellow">'&lt;hr&gt;&lt;a href="#" class="show-errors" onclick="showerrors()"&gt;Mostrar detalles&lt;/a&gt;&lt;div class="error-list"&gt;'</span> <span class="sb-pink">+</span> estatus.errors <span class="sb-pink">+</span> <span class="sb-yellow">'&lt;/div&gt;'</span>);</code>
							<code>        }</code>
							<code>    },</code>
							<code>    <span class="sb-green">onError</span>: <span class="sb-cyan">function</span>(<span class="sb-orange">filename, errorType</span>) {</code>
							<code>        <span class="comment">/* (2) Variables de carga y estatus. */</span></code>
							<code>        countpost <span class="sb-pink">=</span> <span class="sb-purple">0</span>;</code>
							<code>        numberfiles<span class="sb-pink">++</span>;</code>
							<code>        estatus<span class="sb-cyan">.error</span><span class="sb-pink">++</span>;</code>
							<code>        <span class="comment">/* Con esto se agregan los detalles en los errores de carga. */</span></code>
							<code>        estatus.errors <span class="sb-pink">+=</span> <span class="sb-yellow">'&lt;p&gt;'</span> <span class="sb-pink">+</span> filename <span class="sb-pink">+</span> <span class="sb-yellow">', '</span> <span class="sb-pink">+</span> errorType <span class="sb-yellow">'&lt;/p&gt;'</span>;</code>
							<code>        <span class="comment">/* (1) Mostrar archivos cargados, correctos y erroneos. */</span></code>
							<code>    },</code>
							<code>    <span class="sb-green">onExtError</span>: <span class="sb-cyan">function</span>(<span class="sb-orange">filename, extension</span>) {</code>
							<code>        <span class="comment">/* (2) Variables de carga y estatus. */</span></code>
							<code>        estatus.errors <span class="sb-pink">+=</span> <span class="sb-yellow">'&lt;p&gt;'</span> <span class="sb-pink">+</span> filename <span class="sb-pink">+</span> <span class="sb-yellow">', '</span> <span class="sb-pink">+</span> extension <span class="sb-yellow">'&lt;/p&gt;'</span>;</code>
							<code>        <span class="comment">/* (1) Mostrar archivos cargados, correctos y erroneos. */</span></code>
							<code>    },</code>
							<code>    <span class="sb-green">onSizeError</span>: <span class="sb-cyan">function</span>(<span class="sb-orange">filename, fileSize</span>) {</code>
							<code>        <span class="comment">/* (2) Variables de carga y estatus. */</span></code>
							<code>        estatus.errors <span class="sb-pink">+=</span> <span class="sb-yellow">'&lt;p&gt;'</span> <span class="sb-pink">+</span> filename <span class="sb-pink">+</span> <span class="sb-yellow">', '</span> <span class="sb-pink">+</span> fileSize <span class="sb-yellow">'&lt;/p&gt;'</span>;</code>
							<code>        <span class="comment">/* (1) Mostrar archivos cargados, correctos y erroneos. */</span></code>
							<code>    }</code>
							<code>});</code><br />
							<code><span class="comment">/* Ocultar pantalla de carga. */</span></code>
							<code><span class="sb-cyan">function</span> <span class="sb-green">oksuccess</span> () {</code>
							<code>    <span class="sb-cyan">document</span>.querySelector(<span class="sb-yellow">'.loading-cover'</span>).classList.<span class="sb-cyan">remove</span>(<span class="sb-yellow">'show-screen'</span>);</code>
							<code>};</code><br />
							<code><span class="comment">/* Mostrar los errores de la carga. */</span></code>
							<code><span class="sb-cyan">function</span> <span class="sb-green">showerrors</span> () {</code>
							<code>    <span class="sb-cyan">event</span>.preventDefault();</code>
							<code>    <span class="sb-cyan">var</span> listErrors <span class="sb-pink">=</span> <span class="sb-cyan">document</span>.querySelector(<span class="sb-yellow">'.loading-cover &gt; .content &gt; .error-list'</span>);</code>
							<code>    listErrors.classList.toggle(<span class="sb-yellow">'in-block'</span>);</code>
							<code>};</code>
						</pre>
					</div>
				</div>
				<p class="tell">*En la codificación de JS hay puntos marcados con (1) y (2), eso es porque el código se repite en los puntos marcados.</p>
			</div>
		</div>
		<!-- #/upload-files -->

		<!-- count-files -->
		<div id="count-files" class="card card-primary">
			<div class="card-header">
				<h3>Numero de archivos por cargar</h3>
			</div>
			<div class="card-body">
				<pre class="sb">
					<code>Debo una codificación.</code>
				</pre>
				<h1>No hay archivos seleccionados...</h1>
				<input name="to-load" id="to-load" type="file" multiple>
			</div>
		</div>
		<!-- #/count-files -->

		<!-- collections -->
		<div id="collections" class="card card-green">
			<div class="card-header">
				<h3><s>Conteo de elementos en tabla</s> colecciones.json</h3>
				<div id="table-info"></div>
			</div>
			<div class="card-body">
				<h2><var>$json</var> = <var>file_get_contents(</var>../collection.json<var>);</var></h2>
				<p class="tell">Desde hace un buen rato que esta sección la he dejado olvidada (creo que por allá en el 2016 o 2017, no recuerdo bien) y no había tenido alguna idea de que hacer aquí. Hasta que vi algo interesante que se pueden hacer con los json's y objetos en PHP. A continuación lo que les mostraré es algo muy especial para mi, porque no solo pone a prueba mis habilidades en PHP, si no que también puedo crear configuraciones con los mismos json's. Y no, no me he olvidado de dejar código para contar los renglones en la tabla.</p>
				<div class="table-responsive">
					<table class="table table-striped table-hover">
						<caption><?php echo $jsonCollectionRawHTML->description ?></caption>
						<thead>
							<tr>
								<?php foreach ($jsonCollectionRawHTML->dataHeaders as $headersKey => $headersValue) : ?>
								<?php if ($headersValue->is_visible) : ?>
								<th><?php echo $headersValue->column_description ?></th>
								<?php endif ?>
								<?php endforeach ?>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($jsonCollectionRawHTML->dataRows as $dataRowsKey => $dataRowsValue) : ?>
							<tr>
							<?php foreach ($dataRowsValue as $dataCellKey => $dataCellValue) : ?>
							<?php if (array_column($jsonCollectionRawHTML->dataHeaders, "is_visible", "column_name")[$dataCellKey]) : ?>
							<td><?php echo $dataCellValue ?></td>
							<?php endif ?>
							<?php endforeach ?>
							</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
				<p class="tell">Por lo visto, la tabla cambia cada vez que se refresca la página. Eso es porque desde el backend se esta recolectando desde una colección datos de manera aleatoria. Ya explico porque en codificación.</p>
				<h2><i class="fa-solid fa-code"></i> Codificación</h2>
				<p class="tell">Primero: el JSON dónde se cargarán todos los datos y sus respectivas configuraciones para ser mostrados en la interfaz y estos sean mas atractivos o en su defecto para mejor comprensión por el usuario en turno. Cabe a destacar que las configuraciones en este JSON son solo un ejemplo de lo que se puede crear, configurar y/o validar con el mismo, claro, siempre y cuando exista un lenguaje (en este caso: PHP), framework o api que los interprete.</p>
				<p>JSON</p>
				<pre class="sb">
					<?php $columns = $jsonCollection->collection_configuration->columns ?>
					<?php $snippets = $jsonCollection->collection_configuration->data->snippets ?>
					<?php $conditions = $jsonCollection->collection_configuration->data->conditions ?>
					<?php $collectionItems = $jsonCollection->collection_items ?>
					<code><span class="comment">/**</span></code>
					<code><span class="comment"> *</span></code>
					<code><span class="comment"> * Este solo es un extracto de la colección de datos almacenados en este sitio.</span></code>
					<code><span class="comment"> * Las validaciones y los formateos pueden ser mejorados, por esa razón solo los muestro como ejemplo del alcance que tienen estos mismos.</span></code>
					<code><span class="comment"> */</span></code>
					<code>{</code>
					<code>    <span class="sb-yellow">"collection_configuration"</span>: {</code>
					<code>        <span class="sb-yellow">"columns"</span>: [</code>
					<code>            <span class="comment">/**</span></code>
					<code>            <span class="comment"> *</span></code>
					<code>            <span class="comment"> * Aquí se obtienen las configuraciones de las columnas a mostrar en la interfaz.</span></code>
					<code>            <span class="comment"> * Estas mismas se pueden adaptar a la modalidad de cada usuario o desarrollador.</span></code>
					<code>            <span class="comment"> * En este ejemplo se tiene la clave de y el nombre de la columna, si se muestra o no y su tipo de dato.</span></code>
					<code>            <span class="comment"> */</span></code>
					<?php foreach ($columns as $columnKey => $columnValue) : ?>
					<code>            {</code>
					<?php foreach ($columnValue as $columAttrKey => $columAttrValue) : ?>
					<code>                <span class="sb-yellow">"<?php echo $columAttrKey ?>"</span>: <?php echo is_bool($columAttrValue) ? "<span class='sb-purple'>" . var_export($columAttrValue, true) . "</span>" : (is_int($columAttrValue) ? "<span class='sb-purple'>$columAttrValue</span>" : "<span class='sb-yellow'>\"$columAttrValue\"</span>") ?><?php echo array_key_last((array)$columnValue) != $columAttrKey ? "," : "" ?></code>
					<?php endforeach ?>
					<code>            }<?php echo $columnKey < (count($columns) - 1) ? ",": "" ?></code>
					<?php endforeach ?>
					<code>        ],</code>
					<code>        <span class="sb-yellow">"data"</span>: {</code>
					<?php if (count($snippets) > 0) : ?>
					<code>            <span class="sb-yellow">"snippets"</span>: [</code>
					<?php foreach ($snippets as $snippetsKey => $snippetsValue) : ?>
					<code>                {</code>
					<?php foreach ($snippetsValue as $snippetKey => $snippetValue) : ?>
					<?php if (is_array($snippetValue)) : ?>
					<code>                    <span class="sb-yellow">"<?php echo $snippetKey ?>"</span>: [</code>
					<?php foreach ($snippetValue as $replacesKey => $replacesValue) : ?>
					<code>                        {</code>
					<?php foreach ($replacesValue as $replaceKey => $replaceValue) : ?>
					<code>                            <span class="sb-yellow">"<?php echo $replaceKey ?>"</span>: <span class="sb-yellow">"<?php echo str_replace(["<", ">"], ["&lt;", "&gt;"], $replaceValue) ?>"</span><?php echo array_key_last((array)$replacesValue) != $replaceKey ? "," : "" ?></code>
					<?php endforeach ?>
					<code>                        }<?php echo $replacesKey < (count($snippetValue) - 1) ? "," : "" ?></code>
					<?php endforeach ?>
					<code>                    ]<?php echo array_key_last((array)$snippetsValue) != $snippetKey ? "," : "" ?></code>
					<?php else : ?>
					<code>                    <span class="sb-yellow">"<?php echo $snippetKey ?>"</span>: <span class="sb-yellow">"<?php echo str_replace(["<", ">"], ["&lt;", "&gt;"], $snippetValue) ?>"</span><?php echo array_key_last((array)$snippetsValue) != $snippetKey ? "," : "" ?></code>
					<?php endif ?>
					<?php endforeach ?>
					<code>                }<?php echo $snippetsKey < (count($snippets) - 1) ? "," : "" ?></code>
					<?php endforeach ?>
					<code>            ],</code>
					<?php else : ?>
					<code>            <span class="sb-yellow">"snippets"</span>: [],</code>
					<?php endif ?>
					<?php if (count($conditions) > 0) : ?>
					<code>            <span class="sb-yellow">"conditions"</span>: [</code>
					<?php foreach ($conditions as $conditionsKey => $conditionsValue) : ?>
					<code>                {</code>
					<?php foreach ($conditionsValue as $conditionKey => $conditionValue) : ?>
					<code>                    <span class="sb-yellow">"<?php echo $conditionKey ?>"</span>: <span class="sb-yellow">"<?php echo $conditionValue ?>"</span><?php echo array_key_last((array)$conditionsValue) != $conditionKey ? "," : "" ?></code>
					<?php endforeach ?>
					<code>                }<?php echo $conditionsKey < (count($conditions) - 1) ? "," : "" ?></code>
					<?php endforeach ?>
					<code>            ]</code>
					<?php else : ?>
					<code>            <span class="sb-yellow">"conditions"</span>: []</code>
					<?php endif ?>
					<code>        }</code>
					<code>    },</code>
					<code>    <span class="sb-yellow">"collection_name"</span>: <span class="sb-yellow">"<?php echo $jsonCollection->collection_name ?>"</span>, <span class="comment">// Nombre del archivo JSON.</span></code>
					<code>    <span class="sb-yellow">"collection_description"</span>: <span class="sb-yellow">"<?php echo $jsonCollection->collection_description ?>"</span>, <span class="comment">// Descripción GUI del archivo.</span></code>
					<code>    <span class="sb-yellow">"collection_items"</span>: [</code>
					<code>        <span class="comment">/**</span></code>
					<code>        <span class="comment"> *</span></code>
					<code>        <span class="comment"> * Aquí se obtienen todos los datos principales del JSON sin formatear.</span></code>
					<code>        <span class="comment"> * El formateo lo hará la lógica del lenguaje a usar, framework o api de acuerdo a las configuraciones de los snippets y conditions.</span></code>
					<code>        <span class="comment"> */</span></code>
					<?php foreach ($collectionItems as $collectionKey => $collectionValue) : ?>
					<code>        {</code>
					<?php foreach ($collectionValue as $columnKey => $columnValue) : ?>
					<code>            <span class="sb-yellow">"<?php echo $columnKey ?>"</span>: <?php echo is_int($columnValue) ? "<span class='sb-purple'>$columnValue</span>" : "<span class='sb-yellow'>\"$columnValue\"</span>" ?><?php echo array_key_last((array)$collectionValue) != $columnKey ? "," : "" ?></code>
					<?php endforeach ?>
					<code>        }<?php echo ($collectionKey < (count($collectionItems) - 1)) ? "," : "" ?></code>
					<?php endforeach ?>
					<code>    ]</code>
					<code>}</code>
				</pre>
			</div>
			<div class="card-footer">
				<button class="btn btn-success" onclick="contarElemnt()">Contar renglones</button>
			</div>
		</div>
		<!-- #/collections -->

		<!-- p-modal -->
		<!-- ( No existe mas ) -->
		<!-- #/p-modal -->

		<!-- animate -->
		<div id="animate" class="card card-red">
			<div class="card-header">
				<h3>Animación por medio de CSS y Javascript</h3>
			</div>
			<div class="card-body">
				<h2>Estilos con <var>opacity</var> &amp; <var>visibility</var></h2>
				<p class="tell">Esta práctica tiene función de aparecer y desaparecer un elemento, el efecto se consigue con codificación CSS y Javascript.</p>
				<div class="row">
					<div class="col-md-6 col-md-push-6">
						<button id="toggle-fade" class="btn btn-success"><i class="fa-solid fa-power-off"></i> Activar</button>
						<hr>
						<img id="test" src="<?php echo $_SESSION["MAIN_URL"] ?>img/test.jpg" alt="Ejemplo de opcidad mediante JS" class="img-responsive" />
						<h1><small>*Esta imagen la puedes encontrar en mi perfil de DA. <i class="fa-brands fa-deviantart"></i></small></h1>
					</div>
					<div class="col-md-6 col-md-pull-6">
						<h2><i class="fa-solid fa-code"></i> Codificación</h2>
						<p>HTML</p>
						<pre class="sb">
							<code><span class="comment">&lt;!-- Botón que activará/desactivará la animación. --&gt;</span></code>
							<code>&lt;<span class="sb-pink">button</span> <span class="sb-green">id</span>=<span class="sb-yellow">"toggle-fade"</span>&gt;Activar&lt;/<span class="sb-pink">button</span>&gt;</code>
							<br />
							<code><span class="comment">&lt;!-- Imagen que aparecerá/desaparecerá al momento de dar clic en el botón. --&gt;</span></code>
							<code>&lt;<span class="sb-pink">img</span> <span class="sb-green">src</span>=<span class="sb-yellow">"test.jpg"</span> <span class="sb-green">alt</span>=<span class="sb-yellow">"..."</span> <span class="sb-green">id</span>=<span class="sb-yellow">"test"</span> /&gt;</code>
						</pre>
						<p>CSS</p>
						<pre class="sb">
							<code><span class="comment">/* Estilo que usara la imagen. */</span></code>
							<code><span class="sb-green">#test</span> {</code>
							<code>  <span class="sb-cyan">visibility</span>: <span class="sb-cyan">visible</span>;</code>
							<code>  -webkit-transition: <span class="sb-cyan">all</span> <span class="sb-purple">2</span><span class="sb-pink">s</span>;</code>
							<code>  -moz-transition: <span class="sb-cyan">all</span> <span class="sb-purple">2</span><span class="sb-pink">s</span>;</code>
							<code>  -ms-transition: <span class="sb-cyan">all</span> <span class="sb-purple">2</span><span class="sb-pink">s</span>;</code>
							<code>  -o-transition: <span class="sb-cyan">all</span> <span class="sb-purple">2</span><span class="sb-pink">s</span>;</code>
							<code>  transition: <span class="sb-cyan">all</span> <span class="sb-purple">2</span><span class="sb-pink">s</span>;</code>
							<code>}</code>
							<br />
							<code><span class="comment">/* Este apartado se usara para cuando active la animación. */</span></code>
							<code><span class="sb-green">#test.fade</span> {</code>
							<code>  <span class="sb-cyan">visibility</span>: <span class="sb-cyan">hidden</span>;</code>
							<code>  -webkit-transition: <span class="sb-cyan">all</span> <span class="sb-purple">2</span><span class="sb-pink">s</span>;</code>
							<code>  -moz-transition: <span class="sb-cyan">all</span> <span class="sb-purple">2</span><span class="sb-pink">s</span>;</code>
							<code>  -ms-transition: <span class="sb-cyan">all</span> <span class="sb-purple">2</span><span class="sb-pink">s</span>;</code>
							<code>  -o-transition: <span class="sb-cyan">all</span> <span class="sb-purple">2</span><span class="sb-pink">s</span>;</code>
							<code>  transition: <span class="sb-cyan">all</span> <span class="sb-purple">2</span><span class="sb-pink">s</span>;</code>
							<code>}</code>
						</pre>
						<p>Javascript</p>
						<pre class="sb">
							<code><span class="comment">/* Función para activar/desactivar la animación. */</span></code>
							<code><span class="sb-cyan">document</span>.<span class="sb-cyan">getElementById</span>(<span class="sb-yellow">'toggle-fade'</span>).<span class="sb-green">onclick</span> <span class="sb-pink">=</span> <span class="sb-cyan">function</span> () {</code>
							<code>    <span class="sb-cyan">document</span>.<span class="sb-cyan">getElementById</span>(<span class="sb-yellow">'test'</span>).classList.toggle(<span class="sb-yellow">'fade'</span>);</code><br />
							<code>    <span class="comment">/* Y esto, es solo para cambiarle texto al botón que lo active/desactive. */</span></code>
							<code>    <span class="sb-cyan">document</span>.<span class="sb-cyan">getElementById</span>(<span class="sb-yellow">'test'</span>).classList.contains(<span class="sb-yellow">'fade'</span>) ? this.innerHTML <span class="sb-pink">=</span> <span class="sb-yellow">'&lt;i class="fa fa-power-off"&gt;&lt;/i&gt; Desactivar'</span> : this.innerHTML <span class="sb-pink">=</span> <span class="sb-yellow">'&lt;i class="fa fa-power-off"&gt;&lt;/i&gt; Activar'</span>;</code>
							<code>}</code>
						</pre>
					</div>
				</div>
			</div>
		</div>
		<!-- #/animate -->

		<!-- scroll-top -->
		<div id="scroll-top" class="card card-yellow">
			<div class="card-header">
				<h3>Función "Scroll-To-Top" por medio de Javascript y jQuery</h3>
			</div>
			<div class="card-body">
				<h2>Animación para regresar al tope de la página</h2>
				<a href="#" class="button-to-up" onclick="scrollToUp()"><i class="fa-solid fa-chevron-up"></i></a>
				<h2><i class="fa-solid fa-code"></i> Codificación</h2>
				<div class="row">
					<div class="col-md-4">
						<p>HTML</p>
						<pre class="sb">
							<code><span class="comment">&lt;!-- Crear el botón con la clase "button-to-up". --&gt;</span></code>
							<code>&lt;<span class="sb-pink">a</span> <span class="sb-green">href</span>=<span class="sb-yellow">"#"</span> <span class="sb-green">id</span>=<span class="sb-yellow">"to-up"</span> <span class="sb-green">class</span>=<span class="sb-yellow">"button-to-up"</span>&gt;<span class="comment">&lt;!-- CUALQUIER ÍCONO QUE INDIQUE "HACIA ARRIBA" --&gt;</span>&lt;/<span class="sb-pink">a</span>&gt;</code>
						</pre>
						<p>CSS</p>
						<pre class="sb">
							<code><span class="comment">/* Dar estilo al botón. */</span></code>
							<code><span class="sb-green">.button-to-up</span> {</code>
							<code>  <span class="sb-cyan">padding</span>: <span class="sb-purple">10</span><span class="sb-pink">px</span>;</code>
							<code>  <span class="sb-cyan">color</span>: <span class="sb-purple">#fff</span>;</code>
							<code>  <span class="sb-cyan">background-color</span>: <span class="sb-purple">#000</span>;</code>
							<code>  <span class="sb-cyan">border-radius</span>: <span class="sb-purple">5</span><span class="sb-pink">px</span>;</code>
							<code>  <span class="sb-cyan">font-size</span>: <span class="sb-purple">20</span><span class="sb-pink">px</span>;</code>
							<code>}</code>
							<code><span class="sb-green">.button-to-up:focus</span>,</code>
							<code><span class="sb-green">.button-to-up:hover</span> {</code>
							<code>  <span class="sb-cyan">color</span>: <span class="sb-purple">#fff</span>;</code>
							<code>  <span class="sb-cyan">text-decoration</span>: <span class="sb-cyan">none</span>;</code>
							<code>}</code>
						</pre>
					</div>
					<div class="col-md-4">
						<p>CSS (Clase para crear efecto de desvanecimiento)</p>
						<pre class="sb">
							<code><span class="comment">/* Dar estilo al botón y alinear a la esquina inferior derecha. */</span></code>
							<code><span class="sb-green">#to-up</span> {</code>
							<code>  <span class="sb-cyan">opacity</span>: <span class="sb-purple">0</span>;</code>
							<code>  <span class="sb-cyan">visibility</span>: <span class="sb-cyan">hidden</span>;</code>
							<code>  <span class="sb-cyan">position</span>: <span class="sb-cyan">fixed</span>;</code>
							<code>  <span class="sb-cyan">margin</span>: <span class="sb-purple">0</span> <span class="sb-purple">15</span><span class="sb-pink">px</span> <span class="sb-purple">15</span><span class="sb-pink">px</span> <span class="sb-purple">0</span>;</code>
							<code>  <span class="sb-cyan">bottom</span>: <span class="sb-purple">0</span>;</code>
							<code>  <span class="sb-cyan">right</span>: <span class="sb-purple">0</span>;</code>
							<code>  -webkit-transition: <span class="sb-cyan">all</span> <span class="sb-purple">.5</span><span class="sb-pink">s</span>;</code>
							<code>  -moz-transition: <span class="sb-cyan">all</span> <span class="sb-purple">.5</span><span class="sb-pink">s</span>;</code>
							<code>  -ms-transition: <span class="sb-cyan">all</span> <span class="sb-purple">.5</span><span class="sb-pink">s</span>;</code>
							<code>  -o-transition: <span class="sb-cyan">all</span> <span class="sb-purple">.5</span><span class="sb-pink">s</span>;</code>
							<code>  transition: <span class="sb-cyan">all</span> <span class="sb-purple">.5</span><span class="sb-pink">s</span>;</code>
							<code>}</code>
							<code><span class="sb-green">#to-up.fade</span> {</code>
							<code>  <span class="sb-cyan">opacity</span>: <span class="sb-purple">1</span>;</code>
							<code>  <span class="sb-cyan">visibility</span>: <span class="sb-cyan">visible</span>;</code>
							<code>  -webkit-transition: <span class="sb-cyan">all</span> <span class="sb-purple">.5</span><span class="sb-pink">s</span>;</code>
							<code>  -moz-transition: <span class="sb-cyan">all</span> <span class="sb-purple">.5</span><span class="sb-pink">s</span>;</code>
							<code>  -ms-transition: <span class="sb-cyan">all</span> <span class="sb-purple">.5</span><span class="sb-pink">s</span>;</code>
							<code>  -o-transition: <span class="sb-cyan">all</span> <span class="sb-purple">.5</span><span class="sb-pink">s</span>;</code>
							<code>  transition: <span class="sb-cyan">all</span> <span class="sb-purple">.5</span><span class="sb-pink">s</span>;</code>
							<code>}</code>
						</pre>
					</div>
					<div class="col-md-4">
						<p>Javascript</p>
						<pre class="sb">
							<code><span class="comment">/* Función que deslizara la página al tope. */</span></code>
							<code><span class="sb-cyan">var</span> up <span class="sb-pink">=</span> <span class="sb-cyan">document</span>.<span class="sb-cyan">getElementById</span>(<span class="sb-yellow">'to-up'</span>);</code><br />
							<code><span class="sb-cyan">function</span> <span class="sb-green">scrollToUp</span> () {</code>
							<code>    <span class="sb-cyan">event</span>.preventDefault();</code>
							<code>    <span class="sb-pink">$</span>(<span class="sb-yellow">'html, body'</span>).animate({scrollTop: <span class="sb-purple">0</span>}, <span class="sb-purple">1000</span>);</code>
							<code>}</code><br />
							<code><span class="comment">/* Se le agrega la función al botón y listo. */</span></code>
							<code><span class="sb-cyan">up</span>.<span class="sb-green">onclick</span> <span class="sb-pink">=</span> <span class="sb-cyan">function</span> () {</code>
							<code>    scrollToUp();</code>
							<code>}</code><br />
							<code><span class="comment">/* Y por último se le agrega el efecto de desvanecimiento al ascender. */</span></code>
							<code><span class="sb-cyan">window</span>.<span class="sb-green">onscroll</span> <span class="sb-pink">=</span> <span class="sb-cyan">function</span> () {</code>
							<code>    <span class="sb-pink">if</span> (<span class="sb-cyan">window</span>.<span class="sb-cyan">pageYOffset</span> <span class="sb-pink">&gt;</span> <span class="sb-purple">250</span> <span class="sb-pink">&amp;&amp;</span> <span class="sb-pink">!</span>up.classList.contains(<span class="sb-yellow">'fade'</span>)) {</code>
							<code>        up.classList.toggle(<span class="sb-yellow">'fade'</span>);</code>
							<code>    } <span class="sb-pink">else if</span> (<span class="sb-cyan">window</span>.<span class="sb-cyan">pageYOffset</span> <span class="sb-pink">&lt;</span> <span class="sb-purple">250</span> <span class="sb-pink">&amp;&amp;</span> up.classList.contains(<span class="sb-yellow">'fade'</span>)) {</code>
							<code>        up.classList.toggle(<span class="sb-yellow">'fade'</span>);</code>
							<code>    }</code>
							<code>}</code>
						</pre>
					</div>
				</div>
			</div>
		</div>
		<!-- #/scroll-top -->

		<!-- gray-scale -->
		<div id="gray-scale" class="card card-primary">
			<div class="card-header">
				<h3>Escala de grises a color por medio de CSS y Javascript</h3>
			</div>
			<div class="card-body">
				<img id="test2" src="<?php echo $_SESSION["MAIN_URL"] ?>img/test2.jpg" alt="Ejemplo de escala de por JS" class="img-responsive" />
				<h1><small>*Esta imagen la puedes encontrar en mi perfil de DA. <i class="fa-brands fa-deviantart"></i></small></h1>
				<hr>
				<button id="coordinate-img" class="big-button">Obtener Coordenadas</button>
				<div id="coordata"></div>
				<h2><i class="fa-solid fa-code"></i> Codificación</h2>
				<div class="row">
					<div class="col-md-6">
						<p>HTML</p>
						<pre class="sb">
							<code><span class="comment">&lt;!-- Imagen que cambiara de color a escala de grises cuando el cursor llegue a cierta coordenada de la página. --&gt;</span></code>
							<code>&lt;<span class="sb-pink">img</span> <span class="sb-green">src</span>=<span class="sb-yellow">"test2.jpg"</span> <span class="sb-green">alt</span>=<span class="sb-yellow">"..."</span> <span class="sb-green">id</span>=<span class="sb-yellow">"test2"</span> /&gt;</code>
						</pre>
						<p>CSS</p>
						<pre class="sb">
							<code><span class="comment">/* Clase para crear efecto de cambio de filtros. */</span></code>
							<code><span class="sb-green">#test2</span> {</code>
							<code>  -webkit-transition: -webkit-filter <span class="sb-purple">2</span><span class="sb-pink">s</span>;</code>
							<code>  -moz-transition: -webkit-filter <span class="sb-purple">2</span><span class="sb-pink">s</span>;</code>
							<code>  -ms-transition: -webkit-filter <span class="sb-purple">2</span><span class="sb-pink">s</span>;</code>
							<code>  -o-transition: -webkit-filter <span class="sb-purple">2</span><span class="sb-pink">s</span>;</code>
							<code>  transition: -webkit-filter <span class="sb-purple">2</span><span class="sb-pink">s</span>;</code>
							<code>  -webkit-filter: grayscale(<span class="sb-purple">100</span><span class="sb-pink">%</span>);</code>
							<code>}</code>
							<code><span class="sb-green">#test2.gray-none</span> {</code>
							<code>  -webkit-filter: grayscale(<span class="sb-purple">0</span><span class="sb-pink">%</span>);</code>
							<code>}</code>
						</pre>
					</div>
					<div class="col-md-6">
						<p>Javascript</p>
						<pre class="sb">
							<code><span class="comment">/* Función que activará/desactivará el efecto de cambio de colores. */</span></code>
							<code><span class="sb-cyan">window</span>.<span class="sb-green">onscroll</span> <span class="sb-pink">=</span> <span class="sb-cyan">function</span> () {</code>
							<code>    <span class="sb-cyan">var</span></code>
							<code>        picture <span class="sb-pink">=</span> <span class="sb-cyan">document</span>.<span class="sb-cyan">getElementById</span>(<span class="sb-yellow">'test2'</span>),</code>
							<code>        <span class="sb-cyan">screen</span> <span class="sb-pink">=</span> <span class="sb-cyan">window</span>.<span class="sb-cyan">innerHeight</span>,</code>
							<code>        split <span class="sb-pink">=</span> <span class="sb-cyan">parseInt</span>(<span class="sb-cyan">screen</span> / <span class="sb-purple">3</span>),</code>
							<code>        top <span class="sb-pink">=</span> picture.offsetTop,</code>
							<code>        height <span class="sb-pink">=</span> picture.clientHeight</code>
							<code>    ;</code>
							<code>    <span class="sb-pink">if</span> (<span class="sb-cyan">window</span>.<span class="sb-cyan">pageYOffset</span> <span class="sb-pink">&gt;</span> top <span class="sb-pink">-</span> split <span class="sb-pink">&amp;&amp;</span> <span class="sb-cyan">window</span>.<span class="sb-cyan">pageYOffset</span> <span class="sb-pink">&lt;</span> (top <span class="sb-pink">+</span> height) <span class="sb-pink">-</span> (split <span class="sb-pink">*</span> <span class="sb-purple">2</span>) <span class="sb-pink">&amp;&amp;</span> <span class="sb-pink">!</span>picture.classList.contains(<span class="sb-yellow">'gray-none'</span>)) {</code>
							<code>        picture.classList.toggle(<span class="sb-yellow">'gray-none'</span>);</code>
							<code>    } <span class="sb-pink">else if</span> (<span class="sb-cyan">window</span>.<span class="sb-cyan">pageYOffset</span> <span class="sb-pink">&lt;</span> top <span class="sb-pink">-</span> split <span class="sb-pink">&amp;&amp;</span> picture.classList.contains(<span class="sb-yellow">'gray-none'</span>) <span class="sb-pink">||</span> <span class="sb-cyan">window</span>.<span class="sb-cyan">pageYOffset</span> <span class="sb-pink">&gt;</span> (top <span class="sb-pink">+</span> height) <span class="sb-pink">-</span> (split <span class="sb-pink">*</span> <span class="sb-purple">2</span>) <span class="sb-pink">&amp;&amp;</span> picture.classList.contains(<span class="sb-yellow">'gray-none'</span>)) {</code>
							<code>        picture.classList.toggle(<span class="sb-yellow">'gray-none'</span>);</code>
							<code>    }</code>
							<code>}</code>
						</pre>
					</div>
				</div>
				<h2><i class="fa-solid fa-code"></i> Explicación</h2>
				<div class="row">
					<div class="col-md-7 col-sm-12 col-xs-12">
						<h3>1. Coordenadas y pantalla dividida en 3</h3>
						<p class="tell">Al dividir la pantalla entre 3 resulta más fácil asignar los valores a las variables en la función de scroll, estas mismas estarán cambiando su valor conforme el usuario se vaya deslizando (o scrollee) por la página. El valor de las variables dentro de la función, son solamente coordenadas de la página entera, primero toma el tamaño de la pantalla y luego la divide en 3 partes, después el valor en coordenadas de la imagen y su altura. A todo esto, ¿Porque en 3? simple, porque se tomarían 2 secciones, la del tope y la del fondo, dejando la sección sobrante del medio libre para activar el efecto de la imagen. Pero no lo hará.</p>
					</div>
					<div class="col-md-5 hidden-sm hidden-xs">
						<img src="img/scrollgrey1.gif" class="img-responsive" alt="porque-1">
					</div>
					<div class="hidden-lg hidden-md col-sm-12 col-xs-12">
						<h1><small>(IMAGEN DE EJEMPLO PARA MÓVILES AÚN NO DISPONIBLE)</small></h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 hidden-sm hidden-xs">
						<img src="img/scrollgrey2.gif" class="img-responsive" alt="porque-2">
					</div>
					<div class="col-md-7 col-sm-12 col-xs-12">
						<h3>2. Lógica retorcida (superior)</h3>
						<p class="tell">Se supone que la sección sobrante haría el trabajo de accionar el efecto. Bueno en realidad quien acciona el efecto es la imagen misma. ¿Cómo pasa eso? simple (pero no tanto), al momento de deslizarse (o hacer scroll) la función pregunta por la coordenada de la imagen con el efecto, dicha coordenada se le resta la 3ra parte del tamaño de la pantalla, o sea que no tomara en si la coordina absoluta de la imagen. Por ejemplo: si la imagen está a 1900px en (Y) y la pantalla mide 960px de altura, esto entre 3 resulta en 320px, entonces la coordenada de la imagen menos la 3ra parte de la pantalla seria 1580px, es en esta coordenada donde se le da el efecto a la imagen. Y esto es solo para accionarlo cuando la imagen aparezca desde abajo de la pantalla.</p>
					</div>
					<div class="hidden-lg hidden-md col-sm-12 col-xs-12">
						<h1><small>(IMAGEN DE EJEMPLO PARA MÓVILES AÚN NO DISPONIBLE)</small></h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7 col-sm-12 col-xs-12">
						<h3>3. Lógica retorcida (inferior)</h3>
						<p class="tell">Para agregar el efecto pero esta vez cuando la imagen aparezca desde arriba de la pantalla. De nuevo, la función toma la coordenada de la imagen que contiene el efecto, solo que ahora también toma el tamaño de la misma y en lugar de tomar una 3ra parte de la pantalla, serán 2. Por ejemplo: la imagen mide 800px de alto, esto más 1900px (coordenada Y de la misma) resulta en 2700px, menos 320px por 2 será igual a 2060px, es en esta coordenada donde se le da el efecto a la imagen cuando el usuario se deslice desde abajo. ¿Loco no? para nada, solo es aplicar algo de lógica y clases css.</p>
					</div>
					<div class="col-md-5 hidden-sm hidden-xs">
						<img src="img/scrollgrey3.gif" class="img-responsive" alt="porque-3">
					</div>
					<div class="hidden-lg hidden-md col-sm-12 col-xs-12">
						<h1><small>(IMAGEN DE EJEMPLO PARA MÓVILES AÚN NO DISPONIBLE)</small></h1>
					</div>
				</div>
			</div>
		</div>
		<!-- #/gray-scale -->

		<!-- the-box -->
		<div id="the-box" class="card card-green">
			<div class="card-header">
				<h3>Panel de código por medio de CSS y JS</h3>
			</div>
			<div class="card-body">
				<h2>Panel de código de seguridad, como si fuera de una caja fuerte</h2>
				<p class="tell">También se le puede dar uso como una calculadora muy elegante ¿porque no?</p>
				<div class="row">
					<div class="col-md-6">
						<div class="code-box">
							<input class="code-input" readonly />
							<div class="code-panel">
								<div class="code-button">
									<button data-number="1">1</button>
								</div>
								<div class="code-button">
									<button data-number="2">2</button>
								</div>
								<div class="code-button">
									<button data-number="3">3</button>
								</div>
								<div class="code-button">
									<button data-number="4">4</button>
								</div>
								<div class="code-button">
									<button data-number="5">5</button>
								</div>
								<div class="code-button">
									<button data-number="6">6</button>
								</div>
								<div class="code-button">
									<button data-number="7">7</button>
								</div>
								<div class="code-button">
									<button data-number="8">8</button>
								</div>
								<div class="code-button">
									<button data-number="9">9</button>
								</div>
								<div class="code-button cero">
									<button data-number="0">0</button>
								</div>
								<div class="code-actions">
									<div id="backspace">
										<button><i class="fa-solid fa-delete-left"></i></button>
									</div>
									<div id="send">
										<button>Enviar</button>
									</div>
									<div id="clear">
										<button><i class="fa-solid fa-trash-can"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<h2><i class="fa-solid fa-code"></i> Codificación</h2>
						<p>HTML</p>
						<pre class="sb" style="max-height: 250px;">
							<code><span class="comment">&lt;!-- Primero, la estructura. --&gt;</span></code>
							<code>&lt;<span class="sb-pink">div</span> <span class="sb-green">class</span>=<span class="sb-yellow">"code-box"</span>&gt;</code>
							<code>    &lt;<span class="sb-pink">input</span> <span class="sb-green">class</span>=<span class="sb-yellow">"code-input"</span> <span class="sb-green">readonly</span> /&gt;</code>
							<code>    &lt;<span class="sb-pink">div</span> <span class="sb-green">class</span>=<span class="sb-yellow">"code-panel"</span>&gt;</code>
							<code>        &lt;<span class="sb-pink">div</span> <span class="sb-green">class</span>=<span class="sb-yellow">"code-button"</span>&gt;</code>
							<code>            &lt;<span class="sb-pink">button</span> <span class="sb-green">data-number</span>=<span class="sb-yellow">"1"</span>&gt;1&lt;/<span class="sb-pink">button</span>&gt;</code>
							<code>        &lt;/<span class="sb-pink">div</span>&gt;</code>
							<code>        &lt;<span class="sb-pink">div</span> <span class="sb-green">class</span>=<span class="sb-yellow">"code-button"</span>&gt;</code>
							<code>            &lt;<span class="sb-pink">button</span> <span class="sb-green">data-number</span>=<span class="sb-yellow">"2"</span>&gt;2&lt;/<span class="sb-pink">button</span>&gt;</code>
							<code>        &lt;/<span class="sb-pink">div</span>&gt;</code>
							<code>        &lt;<span class="sb-pink">div</span> <span class="sb-green">class</span>=<span class="sb-yellow">"code-button"</span>&gt;</code>
							<code>            &lt;<span class="sb-pink">button</span> <span class="sb-green">data-number</span>=<span class="sb-yellow">"3"</span>&gt;3&lt;/<span class="sb-pink">button</span>&gt;</code>
							<code>        &lt;/<span class="sb-pink">div</span>&gt;</code><br />
							<code>        <span class="comment">&lt;!-- ...CONTINÚA HASTA EL NÚMERO 9... --&gt;</span></code><br />
							<code>        &lt;<span class="sb-pink">div</span> <span class="sb-green">class</span>=<span class="sb-yellow">"code-button cero"</span>&gt;</code>
							<code>            &lt;<span class="sb-pink">button</span> <span class="sb-green">data-number</span>=<span class="sb-yellow">"0"</span>&gt;0&lt;/<span class="sb-pink">button</span>&gt;</code>
							<code>        &lt;/<span class="sb-pink">div</span>&gt;</code>
							<code>        &lt;<span class="sb-pink">div</span> <span class="sb-green">class</span>=<span class="sb-yellow">"code-actions"</span>&gt;</code>
							<code>            &lt;<span class="sb-pink">div</span> <span class="sb-green">id</span>=<span class="sb-yellow">"backspace"</span>&gt;</code>
							<code>                &lt;<span class="sb-pink">button</span>&gt;<span class="comment">&lt;!-- ÍCONO PARA RETROCEDER --&gt;</span>&lt;/<span class="sb-pink">button</span>&gt;</code>
							<code>            &lt;/<span class="sb-pink">div</span>&gt;</code>
							<code>            &lt;<span class="sb-pink">div</span> <span class="sb-green">id</span>=<span class="sb-yellow">"send"</span>&gt;</code>
							<code>                &lt;<span class="sb-pink">button</span>&gt;Enviar&lt;/<span class="sb-pink">button</span>&gt;</code>
							<code>            &lt;/<span class="sb-pink">div</span>&gt;</code>
							<code>            &lt;<span class="sb-pink">div</span> <span class="sb-green">id</span>=<span class="sb-yellow">"clear"</span>&gt;</code>
							<code>                &lt;<span class="sb-pink">button</span>&gt;<span class="comment">&lt;!-- ÍCONO PARA BORRAR TODO --&gt;</span>&lt;/<span class="sb-pink">button</span>&gt;</code>
							<code>            &lt;/<span class="sb-pink">div</span>&gt;</code>
							<code>        &lt;/<span class="sb-pink">div</span>&gt;</code>
							<code>    &lt;/<span class="sb-pink">div</span>&gt;</code>
							<code>&lt;/<span class="sb-pink">div</span>&gt;</code>
						</pre>
						<p>CSS</p>
						<pre class="sb" style="max-height: 250px;">
							<code><span class="comment">/* Segundo, las clases CSS. */</span></code>
							<code><span class="sb-green">.code-box</span> {</code>
							<code>  <span class="sb-cyan">background-color</span>: <span class="sb-purple">#eee</span>;</code>
							<code>  <span class="sb-cyan">border-radius</span>: <span class="sb-purple">15</span><span class="sb-pink">px</span>;</code>
							<code>  <span class="sb-cyan">box-shadow</span>: <span class="sb-purple">0 15</span><span class="sb-pink">px</span> <span class="sb-purple">0</span> <span class="sb-cyan">rgb</span>(<span class="sb-purple">0</span>, <span class="sb-purple">0</span>, <span class="sb-purple">0</span>);</code>
							<code>  <span class="sb-cyan">padding</span>: <span class="sb-purple">20</span><span class="sb-pink">px</span>;</code>
							<code>  <span class="sb-cyan">width</span>: <span class="sb-purple">80</span><span class="sb-pink">%</span>;</code>
							<code>  <span class="sb-cyan">margin</span>: <span class="sb-purple">0</span> <span class="sb-cyan">auto</span> <span class="sb-purple">30</span><span class="sb-pink">px</span>;</code>
							<code>}</code>
							<code><span class="sb-pink">@media</span> (<span class="sb-cyan">max-width</span>: <span class="sb-purple">768</span><span class="sb-pink">px</span>) {</code>
							<code>  <span class="sb-green">.code-box</span> {</code>
							<code>    <span class="sb-cyan">width</span>: <span class="sb-purple">100</span><span class="sb-pink">%</span>;</code>
							<code>  }</code>
							<code>}</code>
							<code><span class="sb-green">.code-box .code-input</span> {</code>
							<code>  <span class="sb-cyan">background-color</span>: <span class="sb-purple">#222</span>;</code>
							<code>  <span class="sb-cyan">padding</span>: <span class="sb-purple">10</span><span class="sb-pink">px</span>;</code>
							<code>  <span class="sb-cyan">width</span>: <span class="sb-purple">100</span><span class="sb-pink">%</span>;</code>
							<code>  <span class="sb-cyan">color</span>: <span class="sb-cyan">rgb</span>(<span class="sb-purple">255</span>, <span class="sb-purple">0</span>, <span class="sb-purple">0</span>);</code>
							<code>  <span class="sb-cyan">font-size</span>: <span class="sb-purple">24</span><span class="sb-pink">px</span>;</code>
							<code>  <span class="sb-cyan">border</span>: <span class="sb-cyan">none</span>;</code>
							<code>  <span class="sb-cyan">text-align</span>: <span class="sb-cyan">center</span>;</code>
							<code>  <span class="sb-cyan">margin-bottom</span>: <span class="sb-purple">10</span><span class="sb-pink">px</span>;</code>
							<code>}</code>
							<code><span class="sb-green">.code-panel</span> {</code>
							<code>  <span class="sb-cyan">width</span>: <span class="sb-purple">100</span><span class="sb-pink">%</span>;</code>
							<code>}</code>
							<code><span class="sb-green">.code-panel:before</span>,</code>
							<code><span class="sb-green">.code-panel:after</span> {</code>
							<code>  <span class="sb-cyan">content</span>: <span class="sb-yellow">" "</span>;</code>
							<code>  <span class="sb-cyan">display</span>: table;</code>
							<code>}</code>
							<code><span class="sb-green">.code-panel:after</span> {</code>
							<code>  <span class="sb-cyan">clear</span>: <span class="sb-cyan">both</span>;</code>
							<code>}</code>
							<code><span class="sb-green">.code-box .code-button</span> {</code>
							<code>  <span class="sb-cyan">float</span>: <span class="sb-cyan">left</span>;</code>
							<code>  <span class="sb-cyan">text-align</span>: <span class="sb-cyan">center</span>;</code>
							<code>  <span class="sb-cyan">position</span>: <span class="sb-cyan">relative</span>;</code>
							<code>  <span class="sb-cyan">width</span>: <span class="sb-purple">33.33</span><span class="sb-pink">%</span>;</code>
							<code>  <span class="sb-cyan">padding</span>: <span class="sb-purple">15</span><span class="sb-pink">px</span>;</code>
							<code>}</code>
							<code><span class="sb-green">.code-box .code-button.cero</span> {</code>
							<code>  <span class="sb-cyan">width</span>: <span class="sb-purple">100</span><span class="sb-pink">%</span>;</code>
							<code>}</code>
							<code><span class="sb-green">.code-box .code-button</span> <span class="sb-pink">button</span> {</code>
							<code>  <span class="sb-cyan">display</span>: <span class="sb-cyan">inline</span> <span class="sb-pink">!important</span>;</code>
							<code>  <span class="sb-cyan">padding</span>: <span class="sb-purple">15</span><span class="sb-pink">px</span> <span class="sb-purple">25</span><span class="sb-pink">px</span>;</code>
							<code>  <span class="sb-cyan">font-size</span>: <span class="sb-purple">24</span><span class="sb-pink">px</span>;</code>
							<code>  <span class="sb-cyan">text-align</span>: <span class="sb-cyan">center</span>;</code>
							<code>  <span class="sb-cyan">cursor</span>: <span class="sb-cyan">pointer</span>;</code>
							<code>  <span class="sb-cyan">outline</span>: <span class="sb-cyan">none</span>;</code>
							<code>  <span class="sb-cyan">color</span>: <span class="sb-purple">#fff</span>;</code>
							<code>  <span class="sb-cyan">background-color</span>: <span class="sb-purple">#4CAF50</span>;</code>
							<code>  <span class="sb-cyan">border</span>: <span class="sb-cyan">none</span>;</code>
							<code>  <span class="sb-cyan">border-radius</span>: <span class="sb-purple">7</span><span class="sb-pink">px</span>;</code>
							<code>  <span class="sb-cyan">box-shadow</span>: <span class="sb-purple">0 9</span><span class="sb-pink">px</span> <span class="sb-purple">#999</span>;</code>
							<code>}</code>
							<code><span class="sb-pink">@media</span> (<span class="sb-cyan">max-width</span>: <span class="sb-purple">550</span><span class="sb-pink">px</span>) {</code>
							<code>  <span class="sb-green">.code-box .code-button</span> {</code>
							<code>    <span class="sb-cyan">padding</span>: <span class="sb-purple">10</span><span class="sb-pink">px</span>;</code>
							<code>  }</code>
							<code>  <span class="sb-green">.code-box .code-button</span> <span class="sb-pink">button</span> {</code>
							<code>    <span class="sb-cyan">padding</span>: <span class="sb-purple">5</span><span class="sb-pink">px</span> <span class="sb-purple">15</span><span class="sb-pink">px</span>;</code>
							<code>  }</code>
							<code>}</code>
							<code><span class="sb-green">.code-box .code-button</span> <span class="sb-pink">button</span><span class="sb-green">:hover</span> {</code>
							<code>  <span class="sb-cyan">background-color</span>: <span class="sb-purple">#3e8e41</span>;</code>
							<code>}</code>
							<code><span class="sb-green">.code-box .code-button</span> <span class="sb-pink">button</span><span class="sb-green">:active</span> {</code>
							<code>  <span class="sb-cyan">background-color</span>: <span class="sb-purple">#3e8e41</span>;</code>
							<code>  <span class="sb-cyan">box-shadow</span>: <span class="sb-purple">0 5</span></span><span class="sb-pink">px</span> <span class="sb-purple">#666</span>;</code>
							<code>  transform: translateY(<span class="sb-purple">4</span></span><span class="sb-pink">px</span>);</code>
							<code>}</code>
							<code><span class="sb-green">.code-box .code-actions</span> {</code>
							<code>  <span class="sb-cyan">float</span>: <span class="sb-cyan">left</span>;</code>
							<code>  <span class="sb-cyan">text-align</span>: <span class="sb-cyan">center</span>;</code>
							<code>  <span class="sb-cyan">position</span>: <span class="sb-cyan">relative</span>;</code>
							<code>  <span class="sb-cyan">width</span>: <span class="sb-purple">100</span><span class="sb-pink">%</span>;</code>
							<code>  <span class="sb-cyan">padding</span>: <span class="sb-purple">15</span><span class="sb-pink">px</span>;</code>
							<code>}</code>
							<code><span class="sb-green">.code-box .code-actions #backspace</span>,</code>
							<code><span class="sb-green">.code-box .code-actions #send</span>,</code>
							<code><span class="sb-green">.code-box .code-actions #clear</span> {</code>
							<code>  <span class="sb-cyan">float</span>: <span class="sb-cyan">left</span>;</code>
							<code>  <span class="sb-cyan">text-align</span>: <span class="sb-cyan">center</span>;</code>
							<code>  <span class="sb-cyan">position</span>: <span class="sb-cyan">relative</span>;</code>
							<code>  <span class="sb-cyan">padding</span>: <span class="sb-purple">15</span><span class="sb-pink">px</span>;</code>
							<code>}</code>
							<code><span class="sb-green">.code-box .code-actions #send</span> {</code>
							<code>  <span class="sb-cyan">width</span>: <span class="sb-purple">50</span><span class="sb-pink">%</span>;</code>
							<code>}</code>
							<code><span class="sb-green">.code-box .code-actions #backspace</span>,</code>
							<code><span class="sb-green">.code-box .code-actions #clear</span> {</code>
							<code>  <span class="sb-cyan">width</span>: <span class="sb-purple">25</span><span class="sb-pink">%</span>;</code>
							<code>}</code>
							<code><span class="sb-green">.code-box .code-actions #backspace</span> <span class="sb-pink">button</span> {</code>
							<code>  <span class="sb-cyan">width</span>: <span class="sb-purple">100</span><span class="sb-pink">%</span>;</code>
							<code>  <span class="sb-cyan">display</span>: <span class="sb-cyan">inline</span> <span class="sb-pink">!important</span>;</code>
							<code>  <span class="sb-cyan">padding</span>: <span class="sb-purple">15</span><span class="sb-pink">px</span> <span class="sb-purple">25</span><span class="sb-pink">px</span>;</code>
							<code>  <span class="sb-cyan">font-size</span>: <span class="sb-purple">24</span><span class="sb-pink">px</span>;</code>
							<code>  <span class="sb-cyan">text-align</span>: <span class="sb-cyan">center</span>;</code>
							<code>  <span class="sb-cyan">cursor</span>: <span class="sb-cyan">pointer</span>;</code>
							<code>  <span class="sb-cyan">outline</span>: <span class="sb-cyan">none</span>;</code>
							<code>  <span class="sb-cyan">color</span>: <span class="sb-purple">#fff</span>;</code>
							<code>  <span class="sb-cyan">background-color</span>: <span class="sb-purple">#ff9800</span>;</code>
							<code>  <span class="sb-cyan">border</span>: <span class="sb-cyan">none</span>;</code>
							<code>  <span class="sb-cyan">border-radius</span>: <span class="sb-purple">7</span><span class="sb-pink">px</span>;</code>
							<code>  <span class="sb-cyan">box-shadow</span>: <span class="sb-purple">0 9</span><span class="sb-pink">px</span> <span class="sb-purple">#999</span>;</code>
							<code>}</code>
							<code><span class="sb-green">.code-box .code-actions #send</span> <span class="sb-pink">button</span>,</code>
							<code><span class="sb-green">.code-box .code-actions #clear</span> <span class="sb-pink">button</span> {</code>
							<code>  <span class="sb-cyan">width</span>: <span class="sb-purple">100</span><span class="sb-pink">%</span>;</code>
							<code>  <span class="sb-cyan">display</span>: <span class="sb-cyan">inline</span> <span class="sb-pink">!important</span>;</code>
							<code>  <span class="sb-cyan">padding</span>: <span class="sb-purple">15</span><span class="sb-pink">px</span> <span class="sb-purple">25</span><span class="sb-pink">px</span>;</code>
							<code>  <span class="sb-cyan">font-size</span>: <span class="sb-purple">24</span><span class="sb-pink">px</span>;</code>
							<code>  <span class="sb-cyan">text-align</span>: <span class="sb-cyan">center</span>;</code>
							<code>  <span class="sb-cyan">cursor</span>: <span class="sb-cyan">pointer</span>;</code>
							<code>  <span class="sb-cyan">outline</span>: <span class="sb-cyan">none</span>;</code>
							<code>  <span class="sb-cyan">color</span>: <span class="sb-purple">#fff</span>;</code>
							<code>  <span class="sb-cyan">background-color</span>: <span class="sb-purple">#ff554c</span>;</code>
							<code>  <span class="sb-cyan">border</span>: <span class="sb-cyan">none</span>;</code>
							<code>  <span class="sb-cyan">border-radius</span>: <span class="sb-purple">7</span><span class="sb-pink">px</span>;</code>
							<code>  <span class="sb-cyan">box-shadow</span>: <span class="sb-purple">0 9</span><span class="sb-pink">px</span> <span class="sb-purple">#999</span>;</code>
							<code>}</code>
							<code><span class="sb-pink">@media</span> (<span class="sb-cyan">max-width</span>: <span class="sb-purple">550</span><span class="sb-pink">px</span>) {</code>
							<code>  <span class="sb-green">.code-box .code-actions</span> {</code>
							<code>    <span class="sb-cyan">padding</span>: <span class="sb-purple">10</span><span class="sb-pink">px</span>;</code>
							<code>  }</code>
							<code>  <span class="sb-green">.code-box .code-actions</span> <span class="sb-pink">button</span> {</code>
							<code>    <span class="sb-cyan">padding</span>: <span class="sb-purple">5</span><span class="sb-pink">px</span> <span class="sb-purple">15</span><span class="sb-pink">px</span>;</code>
							<code>  }</code>
							<code>  <span class="sb-green">.code-box .code-actions #send</span>,</code>
							<code>  <span class="sb-green">.code-box .code-actions #backspace</span>,</code>
							<code>  <span class="sb-green">.code-box .code-actions #clear</span> {</code>
							<code>    <span class="sb-cyan">width</span>: <span class="sb-purple">33.33</span><span class="sb-pink">%</span>;</code>
							<code>  }</code>
							<code>  <span class="sb-green">.code-box .code-actions #send</span> <span class="sb-pink">button</span>,</code>
							<code>  <span class="sb-green">.code-box .code-actions #backspace</span> <span class="sb-pink">button</span>,</code>
							<code>  <span class="sb-green">.code-box .code-actions #clear</span> <span class="sb-pink">button</span> {</code>
							<code>    <span class="sb-cyan">font-size</span>: <span class="sb-purple">15</span><span class="sb-pink">px</span>;</code>
							<code>  }</code>
							<code>}</code>
							<code><span class="sb-green">.code-box .code-actions #send</span> <span class="sb-pink">button</span><span class="sb-green">:hover</span>,</code>
							<code><span class="sb-green">.code-box .code-actions #clear</span> <span class="sb-pink">button</span><span class="sb-green">:hover</span> {</code>
							<code>  <span class="sb-cyan">background-color</span>: <span class="sb-purple">#d4463e</span>;</code>
							<code>}</code>
							<code><span class="sb-green">.code-box .code-actions #send</span> <span class="sb-pink">button</span><span class="sb-green">:active</span>,</code>
							<code><span class="sb-green">.code-box .code-actions #clear</span> <span class="sb-pink">button</span><span class="sb-green">:active</span> {</code>
							<code>  <span class="sb-cyan">background-color</span>: <span class="sb-purple">#d4463e</span>;</code>
							<code>  <span class="sb-cyan">box-shadow</span>: <span class="sb-purple">0 5</span><span class="sb-pink">px</span> <span class="sb-purple">#666</span>;</code>
							<code>  transform: translateY(<span class="sb-purple">4</span><span class="sb-pink">px</span>);</code>
							<code>}</code>
							<code><span class="sb-green">.code-box .code-actions #backspace</span> <span class="sb-pink">button</span><span class="sb-green">:hover</span> {</code>
							<code>  <span class="sb-cyan">background-color</span>: <span class="sb-purple">#db8200</span>;</code>
							<code>}</code>
							<code><span class="sb-green">.code-box .code-actions #backspace</span> <span class="sb-pink">button</span><span class="sb-green">:active</span> {</code>
							<code>  <span class="sb-cyan">background-color</span>: <span class="sb-purple">#db8200</span>;</code>
							<code>  <span class="sb-cyan">box-shadow</span>: <span class="sb-purple">0 5</span><span class="sb-pink">px</span> <span class="sb-purple">#666</span>;</code>
							<code>  transform: translateY(<span class="sb-purple">4</span><span class="sb-pink">px</span>);</code>
							<code>}</code>
						</pre>
						<p>Javascript</p>
						<pre class="sb" style="max-height: 250px;">
							<code><span class="comment">/* Y tercero, sus funciones en jQuery. */</span></code>
							<code><span class="comment" id="pista">/* Algo iba a comentar aquí pero ya no recordé que... */</span></code>
							<code><span class="sb-pink">$</span>(<span class="sb-yellow">'.code-button &gt; button'</span>).<span class="sb-cyan">click</span>(<span class="sb-cyan">function</span> () {</code>
							<code>    <span class="comment">/* En caso de que el input tenga como texto "LIMPIO" o algo similar. */</span></code>
							<code>    <span class="sb-pink">if</span> (<span class="sb-cyan">isNaN</span>(<span class="sb-pink">$</span>(<span class="sb-yellow">'.code-input'</span>).<span class="sb-cyan">val</span>())) <span class="sb-pink">$</span>(<span class="sb-yellow">'.code-input'</span>).<span class="sb-cyan">css</span>(<span class="sb-yellow">'color'</span>, <span class="sb-yellow">'#ff0000'</span>).val(<span class="sb-yellow">''</span>);</code><br />
							<code>    <span class="comment">/* A esta variable se le concatena cada número seleccionado. */</span></code>
							<code>    <span class="sb-cyan">var</span> currentCode <span class="sb-pink">= $</span>(<span class="sb-yellow">'.code-input'</span>).<span class="sb-cyan">val</span>() <span class="sb-pink">+ $</span>(<span class="sb-orange">this</span>).<span class="sb-cyan">data</span>(<span class="sb-yellow">'number'</span>);</code><br />
							<code>    <span class="comment">/* Y al final se reasigna el nuevo valor al input donde se muestran los números. */</span></code>
							<code>    <span class="comment">/* En este caso yo decidí limitar el número de dígitos a 8 pero eso es opcional. */</span></code>
							<code>    <span class="sb-pink">if</span> (currentCode.length <span class="sb-pink">&lt;=</span> <span class="sb-purple">8</span>) <span class="sb-pink">$</span>(<span class="sb-yellow">'.code-input'</span>).<span class="sb-cyan">val</span>(currentCode);</code>
							<code>});</code><br />
							<code><span class="sb-pink">$</span>(<span class="sb-yellow">'.code-actions &gt; #backspace &gt; button'</span>).<span class="sb-cyan">click</span>(<span class="sb-cyan">function</span> () {</code>
							<code>    <span class="comment">/* Esta función solo se ejecutará si lo que contiene el input son números. */</span></code>
							<code>    <span class="sb-pink">if</span> (<span class="sb-pink">!</span><span class="sb-cyan">isNaN</span>(<span class="sb-pink">$</span>(<span class="sb-yellow">'.code-input'</span>).<span class="sb-cyan">val</span>())) {</code>
							<code>        <span class="comment">/* Se obtiene el valor del input y después se compara su longitud. */</span></code>
							<code>        <span class="sb-cyan">var</span> currentCode <span class="sb-pink">= $</span>(<span class="sb-yellow">'.code-input'</span>).<span class="sb-cyan">val</span>();</code>
							<code>        <span class="sb-pink">if</span> (currentCode.length <span class="sb-pink">&gt;</span> <span class="sb-purple">0</span>) {</code>
							<code>            <span class="comment">/* Si es mayor a 0 entonces procede a borrar el último dígito del input y se reasigna el nuevo valor. */</span></code>
							<code>            currentCode <span class="sb-pink">=</span> currentCode.<span class="sb-cyan">slice</span>(<span class="sb-purple">0</span>, <span class="sb-pink">-</span><span class="sb-purple">1</span>);</code>
							<code>            <span class="sb-pink">$</span>(<span class="sb-yellow">'.code-input'</span>).<span class="sb-cyan">val</span>(currentCode);</code>
							<code>        }</code>
							<code>        <span class="comment">/* Caso contrario, se muestra un mensaje de que el input esta limpio. */</span></code>
							<code>        <span class="sb-pink">else $</span>(<span class="sb-yellow">'.code-input'</span>).<span class="sb-cyan">css</span>(<span class="sb-yellow">'color'</span>, <span class="sb-yellow">'#00ff00'</span>).<span class="sb-cyan">val</span>(<span class="sb-yellow">'LIMPIO'</span>);</code>
							<code>    }</code>
							<code>});</code><br />
							<code><span class="sb-pink">$</span>(<span class="sb-yellow">'.code-actions > #clear > button'</span>).<span class="sb-cyan">click</span>(<span class="sb-cyan">function</span> () {</code>
							<code>    <span class="comment">/* Aqui simplemente borra todo lo que esta dentro del input, sin importar si son números o letras. */</span></code>
							<code>    <span class="sb-pink">$</span>(<span class="sb-yellow">'.code-input'</span>).<span class="sb-cyan">val</span>(<span class="sb-yellow">''</span>);</code>
							<code>});</code>
							<!--
							<code><span class="sb-cyan">var</span></code>
							<code>    code <span class="sb-pink">=</span> <span class="sb-yellow">''</span>,</code>
							<code>    codeInput <span class="sb-pink">=</span> <span class="sb-cyan">document</span>.querySelector(<span class="sb-yellow">'.code-input'</span>),</code>
							<code>    codeBtn <span class="sb-pink">=</span> <span class="sb-cyan">document</span>.querySelectorAll(<span class="sb-yellow">'.code-button button'</span>)</code>
							<code>;</code><br />
							<code><span class="comment">/* Este ciclo le dará función a todos los botones con la clase 'code-button' (también al botón cero). */</span></code>
							<code>[].forEach.<span class="sb-cyan">call</span>(codeBtn, <span class="sb-cyan">function</span> (<span class="sb-orange">codeBtn</span>) {</code>
							<code>    <span class="sb-cyan">codeBtn</span>.<span class="sb-green">onclick</span> <span class="sb-pink">=</span> <span class="sb-cyan">function</span> () {</code>
							<code>        code <span class="sb-pink">+=</span> this.innerHTML;</code>
							<code>        codeInput.<span class="sb-cyan">value</span> <span class="sb-pink">=</span> code;</code>
							<code>    }</code>
							<code>});</code>
							-->
						</pre>
					</div>
					<!--
					<div class="col-lg-12">
						<div id="img-pista"></div>
					</div>
					-->
				</div>
			</div>
		</div>
		<!-- #/the-box -->

		<!-- matrix -->
		<div id="matrix" class="card card-red">
			<div class="card-header">
				<h3>Calculador de Matrices <i>Gauss Jordan</i></h3>
			</div>
			<div class="card-body">
				<h2>Calculador de sistemas de matrices por el método de <i>Gauss Jordan</i></h2>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="input-group">
							<input type="number" class="form-control" name="mtxsize" id="mtxsize" min="2" max="4" value="2">
							<span class="input-group-btn">
								<button class="btn btn-success" id="addmtx">Agregar</button>
							</span>
						</div>
					</div>
				</div>
				<br />
				<div class="row">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table" id="mtxtable">
								<thead>
									<tr></tr>
								</thead>
								<tbody></tbody>
							</table>
						</div>
					</div>
					<div class="col-md-4 col-md-offset-4">
						<button class="btn btn-success btn-block" id="calc">Calcular</button>
					</div>
				</div>
				<br />
				<div id="resultado"></div>
				<h2><i class="fa-solid fa-code"></i> Codificación</h2>
				<p class="tell">Primero, esta codificación tiene como propósito resolver hasta el último valor, es decir que el ultimo valor tiene que dar como resultado 1.</p>
				<p>PHP</p>
				<pre class="sb">
					<code>&lt;?php</code>
					<code id="code-first"><span class="comment">// Esta variable será necesaria para calcular el sistema.</span></code>
					<code class="matrix-output">$m <span class="sb-pink">=</span> [];</code><br />
					<code><span class="sb-pink">for</span> ($i <span class="sb-pink">=</span> <span class="sb-purple">0</span>; $i <span class="sb-pink">&lt;</span> <span class="sb-cyan">count</span>($m); $i<span class="sb-pink">++</span>) {</code>
					<code>    <span class="comment">// La variable $reverso se usa para calcular el ultimo valor del array, ya que si se calcula el primer valor habría problemas en el cálculo.</span></code>
					<code>    $reverso <span class="sb-pink">=</span> <span class="sb-cyan">count</span>($m[<span class="sb-purple">0</span>]) <span class="sb-pink">-</span> <span class="sb-purple">1</span>;</code>
					<code>    <span class="sb-pink">for</span> ($j <span class="sb-pink">=</span> <span class="sb-purple">0</span>; $j <span class="sb-pink">&lt;</span> <span class="sb-cyan">count</span>($m[<span class="sb-purple">0</span>]) <span class="sb-pink">-</span> $i; $j<span class="sb-pink">++</span>) {</code>
					<code>        $m[$i][$reverso <span class="sb-pink">-</span> $j] <span class="sb-pink">/=</span> $m[$i][$i];</code>
					<code>    }</code>
					<code>    <span class="sb-pink">if</span> ($i <span class="sb-pink">&lt;</span> <span class="sb-cyan">count</span>($m) <span class="sb-pink">-</span> <span class="sb-purple">1</span>) {</code>
					<code>        <span class="sb-pink">for</span> ($j <span class="sb-pink">=</span> <span class="sb-purple">0</span>; $j <span class="sb-pink">&lt;</span> <span class="sb-cyan">count</span>($m) <span class="sb-pink">-</span> ($i <span class="sb-pink">+</span> <span class="sb-purple">1</span>); $j<span class="sb-pink">++</span>) {</code>
					<code>            <span class="sb-pink">for</span> ($k <span class="sb-pink">=</span> <span class="sb-purple">0</span>; $k <span class="sb-pink">&lt;</span> <span class="sb-cyan">count</span>($m[<span class="sb-purple">0</span>]) <span class="sb-pink">-</span> $i; $k<span class="sb-pink">++</span>) {</code>
					<code>                $m[$i <span class="sb-pink">+</span> $j <span class="sb-pink">+</span> <span class="sb-purple">1</span>][$reverso <span class="sb-pink">-</span> $k] <span class="sb-pink">+=</span> $m[$i][$reverso <span class="sb-pink">-</span> $k] <span class="sb-pink">*</span> ($m[$i <span class="sb-pink">+</span> $j <span class="sb-pink">+</span> <span class="sb-purple">1</span>][$i] <span class="sb-pink">*</span> <span class="sb-pink">-</span><span class="sb-purple">1</span>);</code>
					<code>            }</code>
					<code>        }</code>
					<code>    }</code>
					<code>}</code>
				</pre>
				<p class="tell">Y ahora esta codificación resuelve los valores restantes hasta igualarlos a 0.</p>
				<p>PHP</p>
				<pre class="sb">
					<code>&lt;?php</code>
					<code><span class="sb-pink">for</span> ($i <span class="sb-pink">=</span> <span class="sb-purple">0</span>; $i <span class="sb-pink">&lt;</span> <span class="sb-cyan">count</span>($m) <span class="sb-pink">-</span> <span class="sb-purple">1</span>; $i<span class="sb-pink">++</span>) {</code>
					<code>    <span class="comment">// La variable $reverso se usa para calcular el ultimo valor del array, ya que si se calcula el primer valor habría problemas en el cálculo.</span></code>
					<code>    $reverso <span class="sb-pink">=</span> <span class="sb-cyan">count</span>($m[<span class="sb-purple">0</span>]) <span class="sb-pink">-</span> <span class="sb-purple">1</span>;</code>
					<code>    <span class="sb-pink">for</span> ($j <span class="sb-pink">=</span> <span class="sb-purple">0</span>; $j <span class="sb-pink">&lt;</span> $i <span class="sb-pink">+</span> <span class="sb-purple">1</span>; $j<span class="sb-pink">++</span>) {</code>
					<code>        <span class="sb-pink">for</span> ($k <span class="sb-pink">=</span> <span class="sb-purple">0</span>; $k <span class="sb-pink">&lt;</span> <span class="sb-purple">2</span>; $k<span class="sb-pink">++</span>) {</code>
					<code>            <span class="sb-pink">if</span> ($k <span class="sb-pink">==</span> <span class="sb-purple">0</span>) {</code>
					<code>                $m[<span class="sb-cyan">count</span>($m) <span class="sb-pink">-</span> ($i <span class="sb-pink">+</span> <span class="sb-purple">2</span>)][$reverso <span class="sb-pink">-</span> $k] <span class="sb-pink">+=</span> $m[<span class="sb-cyan">count</span>($m) <span class="sb-pink">-</span> ($j <span class="sb-pink">+</span> <span class="sb-purple">1</span>)][$reverso <span class="sb-pink">-</span> $k] <span class="sb-pink">*</span> ($m[<span class="sb-cyan">count</span>($m) <span class="sb-pink">-</span> ($i <span class="sb-pink">+</span> <span class="sb-purple">2</span>)][$reverso <span class="sb-pink">-</span> ($j <span class="sb-pink">+</span> <span class="sb-purple">1</span>)] <span class="sb-pink">*</span> <span class="sb-pink">-</span><span class="sb-purple">1</span>);</code>
					<code>                <span class="sb-pink">continue</span>;</code>
					<code>            }</code>
					<code>            $m[<span class="sb-cyan">count</span>($m) <span class="sb-pink">-</span> ($i <span class="sb-pink">+</span> <span class="sb-purple">2</span>)][$reverso <span class="sb-pink">-</span> ($j <span class="sb-pink">+</span> <span class="sb-purple">1</span>)] <span class="sb-pink">+=</span> $m[<span class="sb-cyan">count</span>($m) <span class="sb-pink">-</span> ($j <span class="sb-pink">+</span> <span class="sb-purple">1</span>)][$reverso <span class="sb-pink">-</span> ($k <span class="sb-pink">+</span> $j)] <span class="sb-pink">*</span> ($m[<span class="sb-cyan">count</span>($m) <span class="sb-pink">-</span> ($i <span class="sb-pink">+</span> <span class="sb-purple">2</span>)][$reverso <span class="sb-pink">-</span> ($j <span class="sb-pink">+</span> <span class="sb-purple">1</span>)] <span class="sb-pink">*</span> <span class="sb-pink">-</span><span class="sb-purple">1</span>);</code>
					<code>        }</code>
					<code>    }</code>
					<code>}</code>
				</pre>
			</div>
		</div>
		<!-- #/matrix -->

		<!-- random-string -->
		<div id="random-string" class="card card-yellow">
			<div class="card-header">
				<h3>Generador aleatorio de <i>Strings</i></h3>
			</div>
			<div class="card-body">
				<h2>Generar una cadena de caracteres de forma aleatoria</h2>
				<p class="tell">Una manera de crear strings de forma aleatoria y en este caso usaría las funciones de <i>rand()</i>, <i>strlen()</i> y <i>substr()</i> php dentro de un ciclo <i>for</i>.</p>
				<h2><i class="fa-solid fa-code"></i> Codificación</h2>
				<p>PHP</p>
				<pre class="sb">
					<code>&lt;?php</code><br />
					<code>$longitud <span class="sb-pink">=</span> <span class="comment">/* x número... */</span>;</code><br />
					<code>$cadena <span class="sb-pink">=</span> <span class="sb-purple">null</span>;</code><br />
					<code>$caracteres <span class="sb-pink">=</span> <span class="sb-yellow">"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"</span>;</code><br />
					<code><span class="sb-pink">for</span> ($i <span class="sb-pink">=</span> <span class="sb-purple">0</span>; $i <span class="sb-pink">&lt;</span> $longitud; $i<span class="sb-pink">++</span>)</code>
					<code>    $cadena <span class="sb-pink">.=</span> <span class="sb-cyan">substr</span>($caracteres, <span class="sb-cyan">rand</span>(<span class="sb-purple">0</span>, <span class="sb-cyan">strlen</span>($caracteres) <span class="sb-pink">-</span> <span class="sb-purple">1</span>), <span class="sb-purple">1</span>);</code><br />
					<code><span class="sb-cyan">echo</span> <span class="sb-yellow">"Cadena aleatoria: "</span><span class="sb-pink">.</span>$cadena;</code>
				</pre>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="input-group">
							<input type="number" class="form-control" name="longitud" id="longitud" min="8" max="60" value="8">
							<span class="input-group-btn">
								<button class="btn btn-success" id="set-long">Generar</button>
							</span>
						</div>
					</div>
				</div>

				<br />

				<pre class="sb">
					<code>&gt; Cadena aleatoria: <span id="random-str">null</span></code>
				</pre>
			</div>
		</div>
		<!-- #/random-string -->

		<!-- accordeones -->
		<!-- ( Ya me dio hueva de hacerlo :v ) -->
		<!-- #/accordeones -->
	</div>

	<a href="#" id="to-up" class="button-to-up"><i class="fa-solid fa-chevron-up"></i></a>

	<footer class="footer">
		<p>&copy; 2016 Paco Alex M</p>
	</footer>

	<script src="<?php echo $_SESSION["MAIN_URL"] ?>js/jquery.min.js"></script>
	<script src="<?php echo $_SESSION["MAIN_URL"] ?>js/simpleajaxuploader.min.js"></script>
	<script src="<?php echo $_SESSION["MAIN_URL"] ?>js/script.js"></script>
</body>
</html>
