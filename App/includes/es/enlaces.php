<?php
// Listado compartido por el nav y el footer en castellano. Si se crea una
// página nueva, su href debe coincidir con una ruta de App/config/config.php.
// $idSubmenu llega desde nav.php o footer.php para evitar IDs HTML duplicados.
?>
<ul class="enlaces01">
  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/es">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/home.svg') ?>" alt="">
      <span>Inicio</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/es/servicios">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/boxes.svg') ?>" alt="">
      <span>Servicios</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/es/formacion">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/tag.svg') ?>" alt="">
      <span>Cursos</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/es/casos-de-exito">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/grid.svg') ?>" alt="">
      <span>Portafolio</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/es/contacto">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/mail.svg') ?>" alt="">
      <span>Contacto</span>
    </a>
  </li>
</ul>
