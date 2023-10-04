<h1 class="components_title">
    <a href="#welcome" class="components_sublink">#</a> ¡Bienvenido!
</h1>
<hr class="components_sp">
<h2 class="components_subtitle">
    <a href="#firts" class="components_sublink">#</a> Primeros pasos
</h2>
<p class="components_paragraph">
    En esta sección, presentaremos cómo agregar y documentar un componente. De manera que se pueda entender cada uno de los items utilizados para la documentación, cómo lo son:
</p>
<ul class="components_ul">
    <li class="components_ul_li">Títulos</li>
    <li class="components_ul_li">Subtítulos</li>
    <li class="components_ul_li">Párrafos</li>
    <li class="components_ul_li">Separadores</li>
    <li class="components_ul_li">Lista</li>
    <li class="components_ul_li">Código</li>
    <li class="components_ul_li">Demostración</li>
</ul>

<!-- Creación de carpetas -->
<hr class="components_sp">
<h2 class="components_subtitle">
    <a href="#idUnico" class="components_sublink">#</a> Creación de archivos
</h2>
<p class="components_paragraph">
    Primero debe conocer la estructura de esta página de <span class="components_code">componentes</span>:
</p>
<pre class="language-markup components_box"><code>
<xmp>
+ - /assets
+ - - /css
+ - - /js
+ - - /scss
+ - /components
+ - - /nombreDelComponente 
+ - - - index.php
+ - - - index.css
+ - - - index.js
+ - index.php
</xmp>
</code></pre>
<p class="components_paragraph">
    Una vez se sabe cómo es la estructura se tiene que crear una carpeta dentro de la carpeta de <span class="components_code">components</span> con el nombre del componente que se va a agregar. Ejemplo: al crear un componente de <span class="components_code">lista</span>, la carpeta se debe llamar <span class="components_code">lista</span>
</p>
<p class="components_paragraph">
    Dentro de la carpeta de <span class="components_code">lista</span> se deben crear tres (3) archivos:
</p>
<pre class="language-markup components_box"><code>
<xmp>
+ - /components
+ - - /lista 
+ - - - index.php
+ - - - index.css
+ - - - index.js
</xmp>
</code></pre>
<p class="components_paragraph">
    En el <span class="components_code">index.php</span> se realiza la documentación y la demostración del componente utilizando los <span class="components_code">títulos</span>, <span class="components_code">subtítulos</span>, <span class="components_code">separadores</span> y los demás 
</p>

<!-- Títulos -->
<hr class="components_sp">
<h2 class="components_subtitle">
    <a href="#titles" class="components_sublink">#</a> Títulos
</h2>
<p class="components_paragraph">
    Cómo su mismo nombre indica es un <strong class="components_color_primary">título.</strong> En este caso puede ser el nombre del componente o la sección de la página <strong class="components_color_primary">(título de contenido)</strong>. Éste contiene un hipervínculo el cual se debe colocar dentro de su <span class="components_code">href="#idUnico"</span> un identificador único para que no haya interferencias con los otros hipervínculos que tengan el mismo identificador.
</p>
<p class="components_paragraph">
    La manera de implementarlo es:
</p>
<pre class="language-markup components_box"><code>
<xmp>
<h1 class="components_title">
    <a href="#valorUnico" class="components_sublink">#</a> Título
</h1>
</xmp>
</code></pre>
<p class="components_paragraph">
    Ahora, en el menú <span class="components_code">aside</span> del lado izquierdo también se pueden colocar <strong class="components_color_primary">títulos</strong> de esta manera:
</p>
<pre class="language-markup components_box"><code>
<xmp>
<h3 class="components_aside_title">
    Título de Menú
</h3>
</xmp>
</code></pre>
<!-- Subtítulos -->
<hr class="components_sp">
<h2 class="components_subtitle">
    <a href="#subtitles" class="components_sublink">#</a> Subtítulos
</h2>
<p class="components_paragraph">
    El <strong class="components_color_primary">subtítulo de contenido</strong> tiene similitudes al <strong class="components_color_primary">título</strong> a la hora de implementarlo.
</p>
<div class="components_note">
    <strong class="components_color_primary">NOTA:</strong> Debe cumplir la misma regla con los hipervínculos colocando un identificador único, de lo contrario no funcionará al usar el lista de hipervínculos del lado derecho.
</div>
<pre class="language-markup components_box"><code>
<xmp>
<h2 class="components_subtitle">
    <a href="#idUnico" class="components_sublink">#</a> Subtítulo
</h2>
</xmp>
</code></pre>
<p class="components_paragraph">
    No solo está <strong class="components_color_primary">subtítulo de contenido</strong>. También tenemos el subtítulo o nombre del item en el <span class="components_code">aside</span> del lado izquierdo que deberá ser igual al nombre del <span class="components_code">componente</span> cómo muestra el ejemplo:
</p>
<pre class="language-markup components_box"><code>
<xmp>
<a class="components_aside_item">
    Selects
</a>
</xmp>
</code></pre>
<p class="components_paragraph">
    Y por último se tiene el tipo de subtítulo <span class="components_code">h3</span> que se implementa de esta manera:
</p>
<pre class="language-markup components_box"><code>
<xmp>
<h3 class="components_h3">
    Subtítulo h3
</h3>
</xmp>
</code></pre>

<!-- Párrafos -->
<hr class="components_sp">
<h2 class="components_subtitle">
    <a href="#parrafos" class="components_sublink">#</a> Párrafos
</h2>
<p class="components_paragraph">
    Los párrafos son simples, y se implementa de la siguiente manera:
</p>
<pre class="language-markup components_box"><code>
<xmp>
<p class="components_paragraph">
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. In accusantium quae, tempora enim laborum rerum soluta reprehenderit cumque, non doloribus adipisci maxime. Asperiores nobis quia ducimus ea neque nam officia.
</p>
</xmp>
</code></pre>
<!-- Lista -->
<hr class="components_sp">
<h2 class="components_subtitle">
    <a href="#lista" class="components_sublink">#</a> Lista
</h2>
<p class="components_paragraph">
    Este componente muestra simplemente una lista de elementos y se incluye de esta manera:
</p>
<pre class="language-markup components_box"><code>
<xmp>
<ul class="components_ul">
    <li class="components_ul_li">Item 1</li>
    <li class="components_ul_li">Item 2</li>
    <li class="components_ul_li">Item 3</li>
    <li class="components_ul_li">Item 4</li>
    <li class="components_ul_li">Item 5</li>
</ul>
</xmp>
</code></pre>
<!-- Separadores -->
<hr class="components_sp">
<h2 class="components_subtitle">
    <a href="#guide" class="components_sublink">#</a> Separadores
</h2>
<p class="components_paragraph">
    Por ahora se tienen dos tipos de separadores, dentro del <span class="components_code">aside</span> del lado izquierdo y otro dentro del contenido general.
</p>
<p class="components_paragraph">
    El separador general es:
</p>
<pre class="language-markup components_box"><code>
<xmp>
<hr class="components_sp">
</xmp>
</code></pre>
<p class="components_paragraph">
    El separador del menu es:
</p>
<pre class="language-markup components_box"><code>
<xmp>
<div class="components_aside_sp"></div>
</xmp>
</code></pre>
<!-- Muestra de código -->
<hr class="components_sp">
<h2 class="components_subtitle">
    <a href="#guide" class="components_sublink">#</a> Muestra de código
</h2>
<p class="components_paragraph">
    La muestra de código permite visualizar de manera dinámica y real una sección del componente para su implementación. Se puede instanciar de varias maneras, bien sea:
</p>
<ul class="components_ul">
    <li class="components_ul_li">HTML</li>
    <li class="components_ul_li">CSS</li>
    <li class="components_ul_li">JavaScript</li>
</ul>
<p class="components_paragraph">
    En caso de mostrar código HTML se debe añadir la clase <span class="components_code">language-markup</span> para pueda mostrar un lenguaje de marcado.
</p>
<pre class="language-markup components_box">
<code>
<xmp>
<pre class="language-markup components_box">
    <code>
        < xmp >
            <!-- Inicia la visualización del fragmento -->
            <div class="components_aside_sp"></div>
            <!-- Termina la visualización del fragmento -->
        < /xmp >
    </code>
</pre>

</xmp>
</code></pre>
<p class="components_paragraph">
    Ahora, en caso de mostrar CSS se debe añadir la clase <span class="components_code">language-css</span>:
</p>
<pre class="language-markup components_box">
<code>
<xmp>

<pre class="language-css components_box">
    <code>
        .mi-clase {
            padding: 0 1em;
            overflow: auto;
        }
    </code>
</pre>

</xmp>
</code></pre>
<p class="components_paragraph">
    Y por último, para mostrar código JavaScript debe añadir la clase <span class="components_code">language-js</span>:
</p>
<pre class="language-markup components_box">
<code>
<xmp>

<pre class="language-js components_box">
    <code>
        function welcome() {
            alert('¡Bienvenido!') 
        }
    </code>
</pre>

</xmp>
</code></pre>
<div class="components_note">
    <strong class="components_color_primary">NOTA:</strong> Si se requiere mostrar solamente <span class="components_code">HTML, CSS y JS</span> juntos entonces deberá colocar las tres clases antes mencionadas. De lo contrario, se <strong class="components_color_primary">recomienda</strong> usarlo separado.
</div>
<!-- Demostración -->
<hr class="components_sp">
<h2 class="components_subtitle">
    <a href="#guide" class="components_sublink">#</a> Demostración
</h2>
<p class="components_paragraph">
    Al colocar la clase <span class="components_code">components_demo</span> se mostrará un borde blanco, que indicará que esa es la <strong class="components_color_primary">demostración</strong> del elemento que se ha subido. Vamos a ver un ejemplo con la demostración de la <strong class="components_color_primary">lista</strong>:
</p>
<div class="components_demo">
    <ul class="components_ul">
        <li class="components_ul_li">Item 1</li>
        <li class="components_ul_li">Item 2</li>
        <li class="components_ul_li">Item 3</li>
    </ul>
</div>
<div class="components_paragraph">
    La demostración se muestra de esta manera:
</div>
<pre class="language-markup components_box">
<code>
<xmp>
<h3 class="components_h3">Demostración:</h3>
<div class="components_demo">
    <!-- Código de la demostración -->
</div>
</xmp>
</code></pre>
<div class="components_note">
    <strong class="components_color_primary">NOTA:</strong> El subtítulo de <span class="components_code">h3</span> es opcional, eso ya depende del desarrollador colocar ese subtítulo.
</div>
<!-- Helpers -->
<hr class="components_sp">
<h2 class="components_subtitle">
    <a href="#idUnico" class="components_sublink">#</a> Helpers
</h2>
<p class="components_paragraph">
    Esta sección muestra algunos componentes de ayuda para <span class="components_code">resaltar</span> o cambiar de <span class="components_color_primary">color</span> una palabra o texto.
</p>
<p class="components_paragraph">
    Para resaltar un texto:
</p>
<pre class="language-markup components_box">
<code>
<xmp>
<span class="components_code">resaltar</span>
</xmp>
</code></pre>
<p class="components_paragraph">
    Para cambiar de color un texto al color primario que es: <span class="components_code">#42b574</span>
</p>
<pre class="language-markup components_box">
<code>
<xmp>
<span class="components_color_primary">color</span>
</xmp>
</code></pre>













