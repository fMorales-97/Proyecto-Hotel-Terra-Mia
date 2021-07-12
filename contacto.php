<?php
require_once "templates/header.php";
?>
  <main>
    <section class="container">
      <h2 class="h2">Contacto</h2>
      <div class="txt-wrap">
        <p class="p-center">
          ¿Ya te decidiste?
        </p>
        <p class="p-center">
          Si es así, no pierdas tiempo y ponte en contacto con nosotros para 
          que puedas agendar una reserva y disfrutar de todo lo que Hotel Terra 
          Mía tiene para ofrecerte.
        </p>
      </div>
    </section>

    <section class="container">
      <div class="contacto-container">
        <div class="contacto-container__datos">
          <h2 class="h2">Datos de transferencia</h2>
          <ul>
            <li>Terra Mía SPA</li>
            <li>76.608.886-4</li>
            <li>Cuenta Vista Banco Estado</li>
            <li>25170702088</li>
          </ul>
        </div>
        <div class="contacto-container__form">
          <form action="" method="POST">
            <fieldset>
              <legend>Habitaciones</legend>
              <div class="form-group">
                <input id="habitacion-st" type="radio" name="habitacion-radio" value="Standard Twin">
                <label for="habitacion-st">Standard Twin</label>
              </div>
              <div class="form-group">
                <input id="habitacion-dc" type="radio" name="habitacion-radio" value="Doble Cama">
                <label for="habitacion-dc">Doble Cama</label>
              </div>
              <div class="form-group">
                <input id="habitacion-fd" type="radio" name="habitacion-radio" value="Familiar Deluxe">
                <label for="habitacion-fd">Familiar Deluxe</label>
              </div>
            </fieldset>
            <div class="form-flex">
              <div class="form-group">
                <label class="form-label" for="nombre-txt">Nombre:</label>
                <input class="form-input" id="nombre-txt" class="input" type="text" name="nombre-txt">
              </div>
              <div class="form-group">
                <label class="form-label" for="correo-txt">Correo:</label>
                <input class="form-input" id="correo-txt" class="input" type="email" name="correo-txt" placeholder="ejemplo@ejemplo.com">
              </div>
            </div>
            <div class="form-flex">
              <div class="form-group">
                <label class="form-label" for="telefono-num">Teléfono:</label>
                <input class="form-input" id="telefono-num" class="input" type="tel" name="telefono-num">
              </div>
              <div class="form-group">
                <label class="form-label" for="entidad-sel">Tipo de entidad:</label>
                <select class="form-input" id="entidad-sel" class="input" name="entidad-sel">
                  <option>Persona</option>
                  <option>Empresa</option>
                </select>
              </div>
              <div class="form-group">
                <label class="form-label" for="mensaje-txt">Deja tu mensaje:</label>
                <textarea class="form-input" id="mensaje-txt" class="input" name="mensaje-txt"></textarea>
                <button class="btn" id="btn-form" type="button">Enviar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

    <section class="container">
      <h2 class="h2">Nuestra ubicación</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.8736922666535!2d-71.61481168515408!3d-33.58262858073637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x966238e46a4bad2b%3A0x2016c87127c46e93!2sTerra%20Mia%20Hotel%20Restaurant%20West!5e0!3m2!1ses-419!2scl!4v1625812159604!5m2!1ses-419!2scl" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
  </main>
<?php
require_once "templates/footer.php";
?>
  <!-- -- -- -- SweetAlert JS -- -- -- -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- -- -- -- Mi JS -- -- -- -->
  <script src="js/contacto.js"></script>
</body>
</html>
