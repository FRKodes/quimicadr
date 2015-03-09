@extends('default')

@section('content')

<section>
	<div class="home-slider" id="inicio">
		<div class="item one">
			<p class="header">Tenemos la solución que buscas</p>
			<p class="text">Brindamos soluciones de productos químicos a empresas que se preocupan por cuidar sus instalaciones</p>
			<span class="icon-02"></span>
		</div>
		<div class="item two">
			<p class="header">Obtén un servicio personalizado</p>
			<p class="text">Desarrollamos productos de acuerdo a la necesidad específica de cada cliente</p>
			<span class="icon-02"></span>
		</div>
		<div class="item three">
			<p class="header">Productos de la más alta calidad</p>
			<p class="text">Nuestros productos cuentan con certificados reconocidos mundialmente</p>
			<span class="icon-02"></span>
		</div>
	</div>
</section>

<section class="about" id="acercade">
	<h2>
		Estamos comprometidos con siempre ofrecer:
	</h2>

	<ul>
		<li>- Precios competitivos</li>
		<li>- Servicio técnico personalizado</li>
		<li>- Atención inmediata</li>
	</ul>
	<div class="blue-container">
		<div class="about-slider">
			<div class="item">
				<h2>Misión</h2>
				<p>Como empresa "Industria Química DR" tiene la misión de solucionar las necesidades y problemas de nuestros clientes  mediante un servicio personalizado, nuestros esfuerzos están enfocados al sector industrial, hotelero y restaurantero.</p>
			</div>
			<div class="item">
				<h2>VISIÓN</h2>
				<p>Ser reconocidos como una empresa de calidad que cada uno de nuestros clientes están satisfechos con nuestros productos y servicio que brindamos y así ellos mismos no recomienden en el mercado.</p>
			</div>
			<div class="item">
				<h2>VALORES</h2>
				<p class="valores">SATISFACCION, ETICA, RESPONSABILIDAD, VERDAD, INGENIO, CALIDAD, INNOVACION, ORIGINALIDAD.</p>
				{{-- <ul class="acrostic">
					<li class="s active" data-meaning="satisfacción">s</li>
					<li class="e" data-meaning="etica">e</li>
					<li class="r" data-meaning="responsabilidad">r</li>
					<li class="v" data-meaning="verdad">v</li>
					<li class="i" data-meaning="ingenio">i</li>
					<li class="c" data-meaning="calidad">c</li>
					<li class="i" data-meaning="innovación">i</li>
					<li class="o" data-meaning="originalidad">o</li>
				</ul>
				<div class="meaning">satisfacción</div> --}}

				<ul class="acrostic">
					<li class="s">
						<div class="capital active" data-meaning="satisfaccion">s</div>
						<div class="word">atisfacción</div>
						<div class="meaning satisfaccion" style="display:inline-block">Es el grado de conformidad de la persona respecto a su entorno de trabajo. La satisfacción laboral incluye la consideración de la remuneración, el tipo de trabajo, las relaciones humanas, la seguridad, etc.</div>
					</li>
					<li class="e">
						<div class="capital" data-meaning="etica">e</div>
						<div class="word">tica</div>
						<div class="meaning etica">Es una declaración moral que elabora afirmaciones y define lo que es bueno, malo, obligatorio, permitido, etc. en lo referente a una acción o a una decisión.</div>
					</li>
					<li class="r">
						<div class="capital" data-meaning="responsabilidad">r</div>
						<div class="word">esponsabilidad</div>
						<div class="meaning responsabilidad">Es un valor que está en la conciencia de la persona, que le permite reflexionar, administrar, orientar y valorar las consecuencias de sus actos, siempre en el plano de lo moral.</div>
					</li>
					<li class="v">
						<div class="capital" data-meaning="verdad">v</div>
						<div class="word">erdad</div>
						<div class="meaning verdad">Desde la honestidad, la buena fe y la sinceridad humana en general, hasta el acuerdo de losconocimientos con las cosas que se afirman como realidades: los hechos o la cosa en particular;[2] así como la relación de los hechos o las cosas en su totalidad en la constitución del todo.</div>
					</li>
					<li class="i">
						<div class="capital" data-meaning="ingenio">i</div>
						<div class="word">ngenio</div>
						<div class="meaning ingenio">Es la generación de nuevas ideas o conceptos, o de nuevas asociaciones entre ideas y conceptos conocidos, que habitualmente producen soluciones originales.</div>
					</li>
					<li class="c">
						<div class="capital" data-meaning="calidad">c</div>
						<div class="word">alidad</div>
						<div class="meaning calidad">Es una herramienta básica para una propiedad inherente de cualquier cosa que permite que la misma sea comparada con cualquier otra de su misma especie.</div>
					</li>
					<li class="i">
						<div class="capital" data-meaning="innovación">i</div>
						<div class="word">nnovación</div>
						<div class="meaning innovación">se utiliza de manera específica en el sentido de nuevas propuestas, inventos y su implementación económica</div>
					</li>
					<li class="o">
						<div class="capital" data-meaning="originalidad">o</div>
						<div class="word">riginalidad</div>
						<div class="meaning originalidad">Es la cualidad de las obras creadas o inventadas que las hace ser nuevas o novedosas, son únicas y que las distingue de las copias, las falsificaciones, los plagios o las obras derivadas.</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="esfuerzos">
	<h3>Sin importar cuál sea el problema, lo podemos solucionar</h3>
	<p> Siendo uno de nuestros valores agregados, el desarrollo de productos de acuerdo a la necesidad específica de cada cliente, distintivo servicio y atención inmediata. </p>
</section>

<section class="productos" id="productos">
	<h2>Productos</h2>
	<ul class="first-list">
		<li>-Lubricantes</li>
		<li>-Aditivos</li>
		<li>-Detergentes</li>
		<li>-Sanitizantes</li>
		<li>-Químicos Generales</li>
		<li>-Refacciones</li>
	</ul>

	<p class="target">Para lavanderias, hospitales, hoteles, restaurantes, cocinas y lavado de garrafones.</p>
	
	<p class="target">Todos nuestros productos están certificados y cuentan con sus respectivas hojas de seguridad y fichas técnicas.</p>

	<figure>
		<img src="images/barriles.jpg" width="1000" height="1000" alt="Imagen garrafones productos químicos DR.">
	</figure>
	
	<p class="catalogos">Descarga nuestros catálogos de productos</p>

	<ul class="prods">
		<li><a href="pdf/quimicoga/aditivo-para-lavado-de-botella.pdf" target="_blank">- Aditivos para lavado de botellas</a></li>
		<li><a href="pdf/quimicoga/detergente-para-lavado-de-garrafon.pdf" target="_blank">- Detergentes para lavado de garrafón</a></li>
		<li><a href="pdf/quimicoga/detergentes-de-cocina.pdf" target="_blank">- Detergentes de cocina</a></li>
		<li><a href="pdf/quimicoga/detergentes-y-lavanderia.pdf" target="_blank">- Detergentes y lavandería</a></li>
		<li><a href="pdf/quimicoga/detergentes-y-sanitizantes-cip.pdf" target="_blank">- Detergentes y sanitizantes para equipos CIP</a></li>
		<li><a href="pdf/quimicoga/lubricantes-para-transportador-de-tablillas.pdf" target="_blank">- Lubricantes para transportador de tablillas</a></li>
		<li><a href="pdf/quimicoga/productos-para-equipos-de-aguas.pdf" target="_blank">- Productos químicos para equipos de aguas</a></li>
		<li><a href="pdf/quimicoga/productos-quimicos-generales-para-limpieza.pdf" target="_blank">- Productos químicos generales para limpieza</a></li>
	</ul>

	<div class="blocks-container">
		<div class="col">
			<figure><img src="images/logo-quimicoga.jpg" width="400" height="169" alt="logo quimicoga"></figure>
			<ul>
				<li><a href="pdf/quimicoga/aditivo-para-lavado-de-botella.pdf" target="_blank">- Aditivos para lavado de botellas</a></li>
				<li><a href="pdf/quimicoga/detergente-para-lavado-de-garrafon.pdf" target="_blank">- Detergentes para lavado de garrafón</a></li>
				<li><a href="pdf/quimicoga/detergentes-de-cocina.pdf" target="_blank">- Detergentes de cocina</a></li>
				<li><a href="pdf/quimicoga/detergentes-y-lavanderia.pdf" target="_blank">- Detergentes y lavandería</a></li>
				<li><a href="pdf/quimicoga/detergentes-y-sanitizantes-cip.pdf" target="_blank">- Detergentes y sanitizantes para equipos CIP</a></li>
				<li><a href="pdf/quimicoga/lubricantes-para-transportador-de-tablillas.pdf" target="_blank">- Lubricantes para transportador de tablillas</a></li>
				<li><a href="pdf/quimicoga/productos-para-equipos-de-aguas.pdf" target="_blank">- Productos químicos para equipos de aguas</a></li>
				<li><a href="pdf/quimicoga/productos-quimicos-generales-para-limpieza.pdf" target="_blank">- Productos químicos generales para limpieza</a></li>
			</ul>
		</div>
		<div class="col">
			<figure><img class="admex" src="images/logo-admex.jpg" width="200" height="178" alt="logo admex"></figure>
			<ul>
				<li><a href="pdf/admex/aditivo-para-lavado-de-botellas-de-plastico-y-vidrio.pdf" target="_blank">- Lubricantes</a></li>
				<li><a href="pdf/admex/detergentes-lavado-garrafones.pdf" target="_blank">- Aditivos</a></li>
				<li><a href="pdf/admex/detergentes-para-sistemas-cip.pdf" target="_blank">- Detergentes</a></li>
				<li><a href="pdf/admex/espumas-sanitizantes.pdf" target="_blank">- Sanitizantes</a></li>
				<li><a href="pdf/admex/lubricantes-para-transportadores-de-tablillas.pdf" target="_blank">- Químicos para aguas</a></li>
				<li><a href="pdf/admex/productos-para-lavanderias-hospitales-hoteles.pdf" target="_blank">- Químicos Generales</a></li>
				<li><a href="pdf/admex/productos-para-restaurantes-cocinas-insdutriales.pdf" target="_blank">- Lavanderías, Hospitales y Hoteles</a></li>
				<li><a href="pdf/admex/productos-quimicos-generales-de-mantenimiento.pdf" target="_blank">- Productos para Restaurantes y Cocinas</a></li>
				<li><a href="pdf/admex/productos-quimicos-para-tratamiento-de-aguas.pdf" target="_blank">- Espumas Sanitizantes </a></li>
				<li><a href="pdf/admex/sanitizantes-para-sistemas-cip-y-generales.pdf" target="_blank">- Lavado de Garrafones</a></li>
			</ul>
		</div>
		<div class="col">
			<figure><img class="suplementos" src="images/logo-suplementos-mineros.jpg" width="200" height="150" alt="logo suplementos mineros"></figure>
			<ul>
				<li><a href="pdf/suplementos-mineros/smi-catalogo.pdf" target="_blank">- Sistemas de filtrado, elementos filtrantes de diferentes grados, para uso hidráulico, neumático, instrumental y sanitario.</a></li>
			</ul>
		</div>
	</div>

	<div class="more">
		<a href="#more" title="Ver más productos">
			<span class="txt">Ver </span><br>
			<span class="icon-02 down"></span>
		</a>
	</div>
</section>

<section class="angle">
	<div class="container"></div>
</section>

<secttion class="buscamos">
	<p>Buscamos que cada uno de nuestros clientes esten satisfechos con nuestros productos y servicio que brindamos, y posicionarnos como líderes en el mercado.</p>
</secttion>

<section class="certificados" id="certificados">
	<h2>Certificados</h2>
	<p>
		Nuestros productos vienen respaldados por importantes productoras como INDUSTRIA QUÍMICA ADMEX y QUIMICOGA. Las cuales cuentan con diversos certificados reconocios mundialmente.
	</p>
	<div class="container">
		<div class="col">
			<div class="desc">
				<a href="pdf/cert/certificate-admex-22k.pdf" target="_blank">
					<span class="icon-03"></span><br>
					<span class="iso">ISO 22000:2005</span>
				</a>
			</div>
		</div>
		<div class="col">
			<div class="desc">
				<a href="pdf/cert/certificadoiso-90002008-global.pdf" target="_blank">
					<span class="icon-03"></span><br>
					<span class="iso">ISO 9001:2008</span>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="contacto" id="contacto">
	<h2>Contacto</h2>

	<p class="company">COMERCIALIZADORA QUIMICA INDUSTRIAL DR S DE RL DE CV </p>
	
	<address>Industria del Vestido 2206 Col. Industrial Norte CP 45130 Zapopan, Jalisco.</address>
	
	<p>Tel: 36 36 15 07</p>
	
	<div class="mapa">
		<figure>
			<a href="https://www.google.com.mx/maps/search/Industria+del+Vestido+2206/@20.7435071,-103.3881059,19z?hl=es-419" title="Clic par ver el mapa más grande">
				<img class="sm" src="images/mapa-dr.jpg" width="480" height="200" alt="Mapa DR">
				<img class="lg" src="images/mapa-dr-lg.jpg" width="1000" height="244" alt="Mapa DR">
			</a>
		</figure>
	</div>
	
	<p>Gracias por ponerte en contacto con el equipo de Química DR. Déjanos tu mensaje y te reponderemos a la brevedad.</p>
	
	<div class="form">
		
		{{-- Mandrill {{ getenv('MANDRILL_SECRET')}} --}}

		{!! Form::open(['url'=>'sendmail', 'id'=>'contactForm'])!!}
			<div class="lines-container">
				<div class="line">{!! Form::text('name', null, ['class'=>'input_text', 'name'=>'name', 'placeholder'=>'Nombre', 'maxlength'=>'50', 'data-validate'=>'required']) !!}</div>
				<div class="line">{!! Form::text('email', null, ['class'=>'input_text', 'name'=>'email', 'placeholder'=>'Email', 'maxlength'=>'70', 'data-validate'=>'required|email']) !!}</div>
				<div class="line">{!! Form::text('phone', null, ['class'=>'input_text', 'name'=>'phone', 'placeholder'=>'Teléfono', 'maxlength'=>'20']) !!}</div>
			</div>
			<div class="line">{!! Form::textarea('message', null, ['class'=>'input_text', 'name'=>'message', 'placeholder'=>'Escribe tu mensaje', 'data-validate'=>'required']) !!}</div>
			<div class="line">{!! Form::submit('Enviar', ['class'=>'submit_btn']) !!}</div>
			<div class="advice">*Por favor llena los campos marcados en rojo</div>
			<div class="sent_mail_alert">
				Thanks! <br>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit.
			</div>
		{!! Form::close()!!}
	</div>
</section>

@stop