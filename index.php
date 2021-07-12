<?php
require_once "templates/header.php";
?>
  <main>
    <section class="banner">
      <h1 class="banner__title--1">Hotel</h1>
      <h1 class="banner__title--2">Terra</h1>
      <h1 class="banner__title--3">Mía</h1>
    </section>

    <section class="container">
      <div class="txt-wrap">
        <h2 class="h2">Quienes somos</h2>
        <p class="p-center">
          Hotel Terra Mía es un hotel boutique atendido por sus dueños, el cual 
          busca entregar un excelente servicio y un cálido ambiente hogareño para 
          sus clientes. Vive la experiencia de hospedarte con nosotros.
        </p>
      </div>
    </section>

    <section class="container container--alt">
      <div class="txt-wrap">
        <h2 class="h2--alt">Habitaciones</h2>
        <p class="p-center">
          No importa si se trata de una persona natural o de una empresa, contamos 
          con distintos modelos de habitaciones para cada necesidad de nuestros 
          clientes, aquí encontrarás todo lo que buscas para tu comodidad.
        </p>
      </div>
      <div class="cards">
        <article class="card-habitaciones">
          <div class="card-habitaciones__img"><img src="img/img-3.jpeg" alt="Imagen de habitación Standard Twin"></div>
          <div class="card-habitaciones__body">
            <h3 class="h3">Standard Twin</h3>
            <p class="p--sec">
              Es la habitación más basica que tenemos, la cual es ideal para 
              cualquier persona o pareja que necesite hospedarse.
            </p>
            <a class="btn" href="contacto.php">Reservar</a>
            <a class="btn--alt" href="habitaciones.php#habitacion-standard-twin">Saber más</a>
          </div>
        </article>
        <article class="card-habitaciones">
          <div class="card-habitaciones__img"><img src="img/img-4.jpeg" alt="Imagen de habitación Doble Cama"></div>
          <div class="card-habitaciones__body">
            <h3 class="h3">Doble Cama</h3>
            <p class="p--sec">
              Es una habitación que contiene todas las comodidades necesarias 
              para alojar a dos personas sin problemas.
            </p>
            <a class="btn" href="contacto.php">Reservar</a>
            <a class="btn--alt" href="habitaciones.php#habitacion-doble-cama">Saber más</a>
          </div>
        </article>
        <article class="card-habitaciones">
          <div class="card-habitaciones__img"><img src="img/img-5.jpeg" alt="Imagen de habitación Familiar Deluxe"></div>
          <div class="card-habitaciones__body">
            <h3 class="h3">Familiar Deluxe</h3>
            <p class="p--sec">
              Una excelente elección para una familia pequeña que quiera 
              hospedarse, está equipara con todo lo necesario para asegurar tu 
              comodidad.
            </p>
            <a class="btn" href="contacto.php">Reservar</a>
            <a class="btn--alt" href="habitaciones.php#habitacion-familiar-deluxe">Saber más</a>
          </div>
        </article>
      </div>
    </section>

    <section class="container">
      <h2 class="h2">Lo que ofrecemos</h2>
      <div class="cards">
        <div class="card-servicio" id="card-servicio-1">
          <div class="card-servicio__svg"></div>
          <hr>
          <h3 class="h3--dark">Desayuno</h3>
        </div>
        <div class="card-servicio" id="card-servicio-2">
          <div class="card-servicio__svg"></div>
          <hr>
          <h3 class="h3--dark">Eventos</h3>
        </div>
        <div class="card-servicio" id="card-servicio-3">
          <div class="card-servicio__svg"></div>
          <hr>
          <h3 class="h3--dark">Bar</h3>
        </div>
      </div>
    </section>

    <section class="container">
      <div class="txt-wrap">
        <h2 class="h2">¿Por qué nosotros?</h2>
        <p class="p-center">
          Hotel Terra Mía es la mejor opción para ti, pues nuestro servicio es de 
          primera y poseemos todas las comodidades necesarias para una gran 
          experiencia, al igual que un grato ambiente hogareño. Alguna de nuestras 
          cualidades son.
        </p>
      </div>
      <div class="razones">
        <div class="razon">
          <div class="razon__svg"></div>
          <div class="txt-wrap--alt">
            <h3 class="h3">Medidas <span>covid-19</span></h3>
            <p>
              Nos importa la salud de nuestros clientes, es por eso que tenemos 
              un protocolo con medidas preventivas contra el <span>covid-19</span>, 
              así podrás disfrutar de nuestros servicios con toda seguridad.
            </p>
          </div>
        </div>
        <div class="razon">
          <div class="razon__svg"></div>
          <div class="txt-wrap--alt">
            <h3 class="h3">Cerca del mall</h3>
            <p>
              Nuestro hotel se encuentra a menos de 5 minutos del centro comercial 
              de San Antonio, por lo que podrás ir de compras cuando lo necesites.
            </p>
          </div>
        </div>
        <div class="razon">
          <div class="razon__svg"></div>
          <div class="txt-wrap--alt">
            <h3 class="h3">Vista al mar</h3>
            <p>
              Contamos con una excelente vista al mar y estamos cercanos al paseo 
              El Mar/Bella Mar, el cual es un destino turístico típico de la 
              ciudad, y un panorama ideal para disfrutar tanto en pareja como en 
              familia.
            </p>
          </div>
        </div>
        <div class="razon">
          <div class="razon__svg"></div>
          <div class="txt-wrap--alt">
            <h3 class="h3">Cómoda ubicación</h3>
            <p>
              Todo lo anterior se puede resumir en que nuestro hotel tiene una 
              ubicación céntrica en San Antonio, aquí no tendrás problemas de 
              locomoción y podrás visitar distintos lugares de la ciudad.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="container container--alt">
      <h2 class="h2--alt">¿Qué dicen nuestros clientes?</h2>
      <div id="splide-testimonios" class="splide">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide card-testimonio">
              <span class="inicial">A</span>
              <h4 class="h4">Aldo</h4>
              <blockquote>
                Rico desayuno ambiente familiar buena atención limpio y 
                agradable.
              </blockquote>
            </li>
            <li class="splide__slide card-testimonio">
              <span class="inicial">A</span>
              <h4 class="h4">Alex</h4>
              <blockquote>
                Muy buena atención de sus dueños, el desayuno bastante bueno 
                y suficiente, mesas con una excelente vista al puerto. 
                Habitación amplia y limpia.
              </blockquote>
            </li>
            <li class="splide__slide card-testimonio">
              <span class="inicial">C</span>
              <h4 class="h4">Camila</h4>
              <blockquote>
                El lugar es un pequeño oasis dentro de San Antonio, ya que el 
                entorno no es muy bonito, sin embargo, el alojamiento está 
                bien cuidado y tiene una excelente vista al mar. El desayuno 
                es bueno, simple pero cumple.
              </blockquote>
            </li>
            <li class="splide__slide card-testimonio">
              <span class="inicial">M</span>
              <h4 class="h4">Maidy</h4>
              <blockquote>
                La atención, es muy acogedor y tranquilo, atienden muy bien 
                Lo recomiendo y me alojaré allí cada vez que vaya a San 
                Antonio.
              </blockquote>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="container">
      <h2 class="h2">Nuestros huéspedes</h2>
      <div id="splide-marcas" class="splide">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide"><img src="img/huesped-1.png" alt="Logo de empresa hospedada en Hotel Terra Mía"></li>
            <li class="splide__slide"><img src="img/huesped-2.png" alt="Logo de empresa hospedada en Hotel Terra Mía"></li>
            <li class="splide__slide"><img src="img/huesped-3.png" alt="Logo de empresa hospedada en Hotel Terra Mía"></li>
            <li class="splide__slide"><img src="img/huesped-4.png" alt="Logo de empresa hospedada en Hotel Terra Mía"></li>
            <li class="splide__slide"><img src="img/huesped-5.png" alt="Logo de empresa hospedada en Hotel Terra Mía"></li>
            <li class="splide__slide"><img src="img/huesped-6.png" alt="Logo de empresa hospedada en Hotel Terra Mía"></li>
            <li class="splide__slide"><img src="img/huesped-7.png" alt="Logo de empresa hospedada en Hotel Terra Mía"></li>
            <li class="splide__slide"><img src="img/huesped-8.png" alt="Logo de empresa hospedada en Hotel Terra Mía"></li>
            <li class="splide__slide"><img src="img/huesped-9.png" alt="Logo de empresa hospedada en Hotel Terra Mía"></li>
          </ul>
        </div>
      </div>
    </section>

    <section class="container cta">
      <div class="cta__img"></div>
      <div class="cta__txt">
        <h2 class="h2">¡No esperes más!</h2>
        <p class="p-center">
          Reserva tu habitación y disfruta de la experiencia de hospedarte en 
          Hotel Terra Mía
        </p>
        <a class="btn" href="contacto.php">Reservar</a>
      </div>
    </section>
  </main>
<?php
require_once "templates/footer.php";
?>
  <!-- -- -- -- Splide JS -- -- -- -->
  <script src="vendor/splide/dist/js/splide.min.js"></script>
  <!-- -- -- -- Mi JS -- -- -- -->
  <script src="js/index.js"></script>
</body>
</html>
