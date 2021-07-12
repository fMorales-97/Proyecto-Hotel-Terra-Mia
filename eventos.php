<?php
require_once "templates/header.php";
?>
  <main>
    <section>
      <div id="splide-eventos" class="splide">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide"><img src="img/img-7.jpeg" alt=""></li>
            <li class="splide__slide"><img src="img/img-8.jpeg" alt=""></li>
            <li class="splide__slide"><img src="img/img-10.jpg" alt=""></li>
          </ul>
        </div>
      </div>
    </section>

    <section class="container">
      <h2 class="h2">Salón de eventos</h2>
      <div class="txt-wrap">
        <p class="p-center">
          Te ofrecemos una excelente producción de eventos en un hermoso salón 
          con vista al mar para que puedas realizar cualquier tipo de actividad, 
          ya sea un cumpleaños, un matrimonio, banquetería, etc. Tambien 
          contamos con un proyector para que puedas realizar presentaciones en 
          caso de que organices una junta empresarial.
        </p>
        <p class="p-center">Solo debes venir y disfrutar.</p>
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
  <script src="js/eventos.js"></script>
</body>
</html>
