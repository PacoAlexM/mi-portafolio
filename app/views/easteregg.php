<!DOCTYPE html>
<html lang="es-mx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Practicas de web simples con HTML, CSS &amp; Javascript">
	<meta name="author" content="Paco Alex Martell">
	<meta name="theme-color" content="#000000">
	<title>Easter Egg</title>
	<link rel="shortcut icon" href="<?php echo $_SESSION["MAIN_URL"] ?>favicon.png" type="image/png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo $_SESSION["MAIN_URL"] ?>apple-touch-icon.png" sizes="196x196">
	<link rel="stylesheet" href="<?php echo $_SESSION["MAIN_URL"] ?>css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo $_SESSION["MAIN_URL"] ?>font-awesome/css/all.min.css" />
	<link rel="stylesheet" href="<?php echo $_SESSION["MAIN_URL"] ?>css/style.css" />
</head>
<body>
	<header class="header" id="main-ee-pagehead">
		<div class="vertical-center">
			<h1>¿Qué? ¿<span style="background-color: #fff; color: #000;">Cómo</span> llegamos <span style="background-color: #fff; color: #000;">aquí</span>?</h1>
			<hr>
			<div style="position: absolute; bottom: 0; width: 100%;">
				<a href="#how-to" class="to-content" onclick="event.preventDefault();$('html, body').animate({scrollTop: $(this.hash).offset().top - 20}, 1000);"><i class="fa fa-angle-down"></i></a>
			</div>
		</div>
	</header>

	<div class="container-fluid">
		<div id="how-to" class="card card-yellow">
			<div class="card-header">
				<h3>Explicación</h3>
			</div>
			<div class="card-body">
				<h3><a href="#actualizacion-1">Actualizado el: de Febrero del 2023</a></h3>
				<h2>¿Cómo fue que llegamos hasta aquí? Muy sencillo</h2>
				<p class="tell">Todo se debe a un juego de variables de session de php, peticiones ajax y mensajes http.</p>
				<p>PHP</p>
				<pre class="sb">
					<code><span class="comment">&lt;!-- Supongamos que este es el index.php --&gt;</span></code>
					<code>&lt;?php</code>
					<code><span class="sb-cyan">session_start</span>();</code><br />
					<code><span class="comment">// Primero se comienza con una variable de sesión, que tendrá un valor aleatorio de 4 dígitos (podría ser de mas).</span></code>
					<code><span class="comment">// Se puede hacer de 2 formas, 1 por función.-</span></code><br />
					<code><span class="sb-cyan">function</span> <span class="sb-green">randomized</span> () {</code>
					<code>    <span class="sb-pink">return</span> <span class="sb-cyan">rand</span>(<span class="sb-purple">1</span>, <span class="sb-purple">9</span>)<span class="sb-pink">.</span><span class="sb-cyan">rand</span>(<span class="sb-purple">0</span>, <span class="sb-purple">9</span>)<span class="sb-pink">.</span><span class="sb-cyan">rand</span>(<span class="sb-purple">0</span>, <span class="sb-purple">9</span>)<span class="sb-pink">.</span><span class="sb-cyan">rand</span>(<span class="sb-purple">0</span>, <span class="sb-purple">9</span>);</code>
					<code>}</code>
					<code>$_SESSION[<span class="sb-yellow">'myCode'</span>] <span class="sb-pink">=</span> randomized();</code><br />
					<code><span class="comment">// O 2 por simple declaración de randoms (rand(inicio, limite)).-</span></code><br />
					<code>$_SESSION[<span class="sb-yellow">'myCode'</span>] <span class="sb-pink">=</span> <span class="sb-cyan">rand</span>(<span class="sb-purple">1</span>, <span class="sb-purple">9</span>)<span class="sb-pink">.</span><span class="sb-cyan">rand</span>(<span class="sb-purple">0</span>, <span class="sb-purple">9</span>)<span class="sb-pink">.</span><span class="sb-cyan">rand</span>(<span class="sb-purple">0</span>, <span class="sb-purple">9</span>)<span class="sb-pink">.</span><span class="sb-cyan">rand</span>(<span class="sb-purple">0</span>, <span class="sb-purple">9</span>);</code>
					<code>?&gt;</code>
					<code><span class="comment">&lt;!-- html --&gt;</span></code>
					<code>&lt;!DOCTYPE html&gt;</code>
					<code>....</code>
				</pre>
				<p class="tell">El papel que tendrá esta variable será la de ser el código "secreto" para esta práctica, de esta forma el usuario no tendrá acceso a ella tan fácilmente. No necesariamente debe ser de 4 dígitos, puede ser de menos o más, lo importante es que sea un código.</p>
				<hr>
				<h2>Peticiones ajax</h2>
				<p class="tell">Para esto se crea una función que hará una petición por medio de ajax. El panel numérico tendrá funcionalidad en este proceso, por eso también lo incluiremos en esta práctica.</p>
				<p>HTML</p>
				<pre class="sb">
					<code><span class="comment">&lt;!-- En el mismo archivo index.php --&gt;</span></code>
					<code><span class="comment">&lt;!-- Se crea el panel numérico --&gt;</span></code>
					<code>&lt;<span class="sb-pink">div</span> <span class="sb-green">class</span>=<span class="sb-yellow">"code-box"</span>&gt;</code>
					<code>    &lt;<span class="sb-pink">input</span> <span class="sb-green">class</span>=<span class="sb-yellow">"code-input"</span> <span class="sb-green">readonly</span>&gt;</code>
					<code>    &lt;<span class="sb-pink">div</span> <span class="sb-green">class</span>=<span class="sb-yellow">"code-panel"</span>&gt;</code>
					<code>        &lt;<span class="sb-pink">div</span> <span class="sb-green">class</span>=<span class="sb-yellow">"code-button"</span>&gt;</code>
					<code>            &lt;<span class="sb-pink">button</span>&gt;1&lt;/<span class="sb-pink">button</span>&gt;</code>
					<code>        &lt;/<span class="sb-pink">div</span>&gt;</code>
					<code>        &lt;<span class="sb-pink">div</span> <span class="sb-green">class</span>=<span class="sb-yellow">"code-button"</span>&gt;</code>
					<code>            &lt;<span class="sb-pink">button</span>&gt;2&lt;/<span class="sb-pink">button</span>&gt;</code>
					<code>        &lt;/<span class="sb-pink">div</span>&gt;</code>
					<code>        &lt;<span class="sb-pink">div</span> <span class="sb-green">class</span>=<span class="sb-yellow">"code-button"</span>&gt;</code>
					<code>            &lt;<span class="sb-pink">button</span>&gt;3&lt;/<span class="sb-pink">button</span>&gt;</code>
					<code>        &lt;/<span class="sb-pink">div</span>&gt;</code><br />
					<code>        <span class="comment">&lt;!-- ...CONTINÚA HASTA EL NÚMERO 9... --&gt;</span></code><br />
					<code>        &lt;<span class="sb-pink">div</span> <span class="sb-green">class</span>=<span class="sb-yellow">"code-button cero"</span>&gt;</code>
					<code>            &lt;<span class="sb-pink">button</span>&gt;0&lt;/<span class="sb-pink">button</span>&gt;</code>
					<code>        &lt;/<span class="sb-pink">div</span>&gt;</code>
					<code>        &lt;<span class="sb-pink">div</span> <span class="sb-green">class</span>=<span class="sb-yellow">"code-send"</span> <span class="sb-green">id</span>=<span class="sb-yellow">"send"</span>&gt;</code>
					<code>            &lt;<span class="sb-pink">button</span>&gt;Enviar&lt;/<span class="sb-pink">button</span>&gt;</code>
					<code>        &lt;/<span class="sb-pink">div</span>&gt;</code>
					<code>    &lt;/<span class="sb-pink">div</span>&gt;</code>
					<code>&lt;/<span class="sb-pink">div</span>&gt;</code>
				</pre>
				<p>Javascript <strong>(DEBO RECORDAR QUE PARA ESTO ES NECESARIO jQuery)</strong></p>
				<pre class="sb">
					<code><span class="sb-cyan">var</span></code>
					<code>    code <span class="sb-pink">=</span> <span class="sb-yellow">''</span>,</code>
					<code>    codeInput <span class="sb-pink">=</span> <span class="sb-cyan">document</span>.querySelector(<span class="sb-yellow">'.code-input'</span>),</code>
					<code>    codeBtn <span class="sb-pink">=</span> <span class="sb-cyan">document</span>.querySelectorAll(<span class="sb-yellow">'.code-button button'</span>)</code>
					<code>;</code><br />
					<code><span class="comment">/* Se le da función a los botones que contengan la clase 'code-button' y al boton cero */</span></code>
					<code>[].forEach.<span class="sb-cyan">call</span>(codeBtn, <span class="sb-cyan">function</span> (<span class="sb-orange">codeBtn</span>) {</code>
					<code>    <span class="sb-cyan">codeBtn</span>.<span class="sb-green">onclick</span> <span class="sb-pink">=</span> <span class="sb-cyan">function</span> () {</code>
					<code>        code <span class="sb-pink">+=</span> this.innerHTML;</code>
					<code>        codeInput.<span class="sb-cyan">value</span> <span class="sb-pink">=</span> code;</code>
					<code>        <span class="sb-pink">if</span> (code.<span class="sb-cyan">length</span> <span class="sb-pink">==</span> <span class="sb-purple">4</span>) sendRequest(<span class="sb-yellow">'path/toeasteregg.php'</span>,<span class="sb-yellow">'POST'</span>,<span class="sb-yellow">'JSON'</span>,code);</code>
					<code>        <span class="comment">/* ¿QUÉ HACE ESTO? */</span></code>
					<code>        <span class="comment">/* Si la longitud del código es igual 4, ejecuta la función del ajax */</span></code>
					<code>    }</code>
					<code>});</code>
					<code><span class="comment">/* Y ahora la función sendRequest() */</span></code>
					<code><span class="sb-cyan">function</span> <span class="sb-green">sendRequest</span> (<span class="sb-orange">url,type,dataType,data</span>) {</code>
					<code>    <span class="sb-pink">return $</span>.ajax({</code>
					<code>        url: url,</code>
					<code>        type: type,</code>
					<code>        dataType: dataType,</code>
					<code>        data: { code : data },</code>
					<code>        <span class="sb-green">success</span>: <span class="sb-cyan">function</span> (<span class="sb-orange">response</span>) {</code>
					<code>            code <span class="sb-pink">=</span> <span class="sb-yellow">''</span>;</code>
					<code>            <span class="comment">/* Esto nos redireccionará */</span></code>
					<code>            <span class="sb-cyan">document</span>.<span class="sb-cyan">location</span>.<span class="sb-cyan">href</span> <span class="sb-pink">=</span> response;</code>
					<code>            codeInput.<span class="sb-cyan">value</span> <span class="sb-pink">=</span> code;</code>
					<code>        },</code>
					<code>        <span class="comment">/* ¿Cómo capturará ajax el error? más adelante veremos */</span></code>
					<code>        <span class="sb-green">error</span>: <span class="sb-cyan">function</span> (<span class="sb-orange">a,b,c</span>) {</code>
					<code>            code <span class="sb-pink">=</span> <span class="sb-yellow">''</span>;</code>
					<code>            codeInput.<span class="sb-cyan">value</span> <span class="sb-pink">=</span> <span class="sb-yellow">'INCORRECTO'</span>;</code>
					<code>        }</code>
					<code>    })</code>
					<code>};</code>
				</pre>
				<p class="tell">Hasta aquí terminaría el index, ahora pasamos a <i>toeasteregg</i>.</p>
				<p>PHP</p>
				<pre class="sb">
					<code>&lt;?php</code>
					<code><span class="sb-cyan">session_start</span>();</code>
					<code><span class="sb-pink">try</span> {</code>
					<code>    <span class="comment">// Si el código enviado por ajax NO es correcto, mandara un error</span></code>
					<code>    <span class="sb-pink">if</span> ($_POST[<span class="sb-yellow">'code'</span>] <span class="sb-pink">!=</span> $_SESSION[<span class="sb-yellow">'myCode'</span>]) {</code>
					<code>        <span class="comment">// De esta forma el ajax accionara el error en caso de el código no coincida con el del random</span></code>
					<code>        <span class="sb-pink">throw new</span> <span class="sb-cyan">Exception</span>(<span class="sb-yellow">'Intenta con el botón de ayuda.'</span>, <span class="sb-purple">400</span>);</code>
					<code>    } <span class="sb-pink">else</span> {</code>
					<code>        <span class="comment">// Pero si el usuario acierta, le regresa una dirección, en este caso esta página</span></code>
					<code>        <span class="sb-cyan">echo json_encode</span>(<span class="sb-yellow">'easteregg.php'</span>);</code>
					<code>        $_SESSION[<span class="sb-yellow">'clave'</span>] <span class="sb-pink">=</span> $_POST[<span class="sb-yellow">'code'</span>];</code>
					<code>    }</code>
					<code>} <span class="sb-pink">catch</span> (<span class="sb-cyan">Exception</span> $e) {</code>
					<code>    <span class="comment">// Algo que tengo que comentar es que si no se le agrega este header el ajax no lo tomará como error</span></code>
					<code>    <span class="sb-cyan">header</span>(<span class="sb-yellow">'HTTP/1.0 400 Codigo incorrecto'</span>);</code>
					<code>    <span class="sb-cyan">echo json_encode</span>($e<span class="sb-pink">-></span>getMessage());</code>
					<code>}</code>
				</pre>
				<hr>
				<h2>Easter egg (easteregg.php)</h2>
				<p class="tell">Ahora, cuando el usuario acierte al código "secreto" se mostrara algún mensaje de <i>"Oh encontraste la sección secreta de este sitio, increíble:D!!!"</i> o algo así por el estilo, el punto es que sorprenda.<br>Pero si se deja así el usuario podría acceder a esta vista por medio de la <i>URL</i> y así el código no tendría caso de que fuera oculto, así que lo siguiente que hay que hacer es verificar si el código es verdadero y en caso de que NO, que muestre un mensaje 404 (para despistar).</p />
				<p>PHP y HTML</p>
				<pre class="sb">
					<code><span class="comment">&lt;!-- Supongamos que ahora este es el easteregg.php --&gt;</span></code>
					<code>&lt;?php</code>
					<code><span class="sb-cyan">session_start</span>();</code>
					<code><span class="comment">// Esta línea evitara que el usuario se pase de listo y acceda a la vista oculta por medio de la URL</span></code>
					<code><span class="sb-pink">if</span> (<span class="sb-cyan">empty</span>($_SESSION[<span class="sb-yellow">'clave'</span>])) $_SESSION[<span class="sb-yellow">'clave'</span>] <span class="sb-pink">=</span> <span class="sb-purple">0001</span>;</code>
					<code><span class="sb-pink">if</span> ($_SESSION[<span class="sb-yellow">'clave'</span>] <span class="sb-pink">==</span> $_SESSION[<span class="sb-yellow">'myCode'</span>]) {</code>
					<code><span class="comment">// Pero si el usuario acertó, muestra la siguiente estructura html</span></code>
					<code>?&gt;</code>
					<code><span class="comment">&lt;!-- html --&gt;</span></code>
					<code>&lt;!DOCTYPE html&gt;</code><br />
					<code><span class="comment">&lt;!-- Y aquí se podría mostrar un mensaje cualquiera --&gt;</span></code>
					<code>&lt;<span class="sb-pink">h1</span>&gt;Oh encontraste la sección secreta de este sitio, increíble:D!!!&lt;/<span class="sb-pink">h1</span>&gt;</code><br />
					<code><span class="comment">&lt;!-- /html --&gt;</span></code><br />
					<code>&lt;?php</code>
					<code>} <span class="sb-pink">else</span> {</code>
					<code>    <span class="comment">// Como la variable $_SESSION['clave'] se encontraba vacía se le dio otro valor que será imposible generar de acuerdo con la función "randomized"</span></code>
					<code>    <span class="comment">// Y eso devolverá un mensaje http 404 (Not Found o No Encontrado)</span></code>
					<code>    <span class="sb-cyan">header</span>(<span class="sb-yellow">'HTTP/1.0 404 Not Found'</span>);</code></code>
					<code>}</code>
					<code>?&gt;</code>
				</pre>
				<p class="tell">Y así fue que llegamos hasta aquí, ¿bastante loco no? Esta una muy buena forma de demostrar tus habilidades en php, aunque esta práctica sea bastante sencilla resulta muy útil en ciertas ocasiones.<br>Como dije, <i>todo esto se debió a un sencillo juego de variables de session, peticiones ajax y mensajes http</i>.</p />
				<hr />
				<h2 id="actualizacion-1">Actualización de Febrero, 2023</h2>
				<p class="tell">Muchas cosas han cambiado desde que hice este pequeño "juego" por así decirlo y la verdad pienso que es muy simple y se puede agregar aún mas cosas para que sea más dinámico a la hora de llegar hasta aqui. Para empezar: decidí dejar de hacer las cosas con javacript sin librerías (osea sin jQuery, siendo que es lo que mas he usado a lo largo de mi carrera como desarrollador web), usaré mas variables de sesión en php para que este sitio tenga mas control, por ejemplo las rutas donde se almacenan todos los assets (css's, js's, img's, etc.) Para no hacer el cuento mas largo dejaré a continuación todo lo que he cambiado en esta parte de "easteregg".</p>
				<h2><i class="fa-solid fa-code"></i> Codificación</h2>
				<p class="tell">No voy a agregar el código del panel de números, ni su hoja de estilos y sus funciones en javascript, solo me centraré en el botón de "Enviar" y la lógica del backend.</p>
				<p>Javascript</p>
				<pre class="sb">
					<code><span class="comment">/* Estoy seguro que si llegaste hasta esta página fue por el código comentado de: */</span></code>
					<code><span class="comment">/* Ah ya recordé que iba a comentar: <?php echo $_SESSION["KEY_TO_EASTEREGG_VALUE"]?> */</span></code><br />
					<code><span class="comment">/* En fin, he aquí la lógica del botón de enviar: */</span></code>
					<code><span class="sb-pink">$</span>(<span class="sb-yellow">'.code-actions > #send > button'</span>).<span class="sb-cyan">click</span>(<span class="sb-cyan">function</span> () {</code>
					<code>    <span class="sb-pink">if</span> (<span class="sb-pink">!</span><span class="sb-cyan">isNaN</span>(<span class="sb-pink">$</span>(<span class="sb-yellow">'.code-input'</span>).<span class="sb-cyan">val</span>())) {</code>
					<code>        <span class="sb-cyan">var</span> currentCode <span class="sb-pink">= $</span>(<span class="sb-yellow">'.code-input'</span>).<span class="sb-cyan">val</span>();</code><br />
					<code>        <span class="sb-pink">$</span>.ajax({</code>
					<code>            url: <span class="sb-yellow">'toeasteregg'</span>,</code>
					<code>            type: <span class="sb-yellow">'POST'</span>,</code>
					<code>            dataType: <span class="sb-yellow">'json'</span>,</code>
					<code>            data: {</code>
					<code>                code: currentCode</code>
					<code>            },</code>
					<code>            <span class="sb-green">success</span>: <span class="sb-cyan">function</span> (<span class="sb-orange">response</span>) {</code>
					<code>                <span class="comment">/* Mas detalles del response en el archivo: toeasteregg.php */</span></code>
					<code>                <span class="sb-pink">$</span>(<span class="sb-yellow">'.code-input'</span>).<span class="sb-cyan">css</span>(<span class="sb-yellow">'color'</span>, response.color).<span class="sb-cyan">val</span>(response.message);</code><br />
					<code>                <span class="sb-pink">if</span> (response.success) {</code>
					<code>                    <span class="sb-cyan">setTimeout</span>(<span class="sb-cyan">function</span> () {</code>
					<code>                        <span class="sb-cyan">document</span>.<span class="sb-cyan">location</span>.<span class="sb-cyan">href</span> <span class="sb-pink">=</span> response.url;</code>
					<code>                    }, <span class="sb-purple">3000</span>);</code>
					<code>                } <span class="sb-pink">else $</span>(<span class="sb-yellow">'#pista'</span>).<span class="sb-cyan">html</span>(<span class="sb-yellow">`/* Ah ya record&amp;eacute; que iba a comentar:</span> ${response.hint} <span class="sb-yellow">*/`</span>); <span class="comment">// Y aquí es donde se muestra la pista para llegar a esta página...</span></code>
					<code>            },</code>
					<code>            <span class="sb-green">error</span>: <span class="sb-cyan">function</span> (<span class="sb-orange">jqXHR</span>, <span class="sb-orange">textStatus</span>, <span class="sb-orange">errorThrown</span>) {</code>
					<code>                <span class="sb-cyan">console</span>.<span class="sb-cyan">log</span>(jqXHR);</code>
					<code>            },</code>
					<code>        });</code>
					<code>    }</code>
					<code>});</code>
				</pre>
				<p class="tell">Después de viene la confiuración con variables de sesión y variables de rutas para la página. Todo esto desde el backend.</p>
				<p>PHP (index.php)</p>
				<pre class="sb">
					<code>&lt;?php</code>
					<code><span class="comment">// Como veras este es el index que uso para cada página del sitio.</span></code>
					<code><span class="comment">// Toda la lógica de los web services y vistas se manejan desde aquí.</span></code>
					<code><span class="comment">// Obviamente solo mostraré un pequeño fragmento de como funciona todo.</span></code><br />
					<code><span class="comment">// Primero inicio con la declaración de sesión el cual es necesario para el correcto funcionamiento del sitio.</span></code>
					<code><span class="sb-cyan">session_start</span>();</code><br />
				</pre>
			</div>
		</div>
		<!-- ./paneles -->
	</div>

	<footer class="footer">
		<p>&copy; 2016 Paco Alex M</p>
	</footer>

	<script src="<?php echo $_SESSION["MAIN_URL"] ?>js/jquery.min.js"></script>
</body>
</html>
