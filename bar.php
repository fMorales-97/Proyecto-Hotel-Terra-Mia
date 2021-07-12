<?php
require_once "templates/header.php";
?>
  <main>
    <section>
      <div id="splide-bar" class="splide">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide"><img src="img/img-card2.jpg" alt=""></li>
            <li class="splide__slide"><img src="img/img-9.jpg" alt=""></li>
            <li class="splide__slide"><img src="img/img-13.jpg" alt=""></li>
            <li class="splide__slide"><img src="img/img-14.jpg" alt=""></li>
          </ul>
        </div>
      </div>
    </section>

    <section class="container">
      <h2 class="h2">Salón de eventos</h2>
      <div class="txt-wrap">
        <p class="p-center">
          Nuestro hotel cuenta con un servicio de bar en el cual podrás 
          disfrutar de buenas cervezas, excelentes tragos preparados y una fina 
          selección de vinos de primera categoría, puedes aprovechar nuestro 
          happy hour para beber todo lo que quieras.
        </p>
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
  <script src="js/bar.js"></script>
</body>
</html>
