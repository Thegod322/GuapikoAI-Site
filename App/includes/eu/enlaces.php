<?php
// Listado compartido por el nav y el footer en castellano. Si se crea una
// página nueva, su href debe coincidir con una ruta de App/config/config.php.
// $idSubmenu llega desde nav.php o footer.php para evitar IDs HTML duplicados.
?>
<ul class="enlaces01">
  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/eu">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/home.svg') ?>" alt="Hasierako Ikonoa" title="Joan Hasierara">
      <span>Hasiera</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/eu/zerbitzuak">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/boxes.svg') ?>" alt="Zerbitzuen Ikonoa" title="Joan Zerbitzuetara">
      <span>Zerbitzuak</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/eu/prestakuntza">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/tag.svg') ?>" alt="Ikastaroen Ikonoa" title="Joan Ikastaroetara">
      <span>Ikastaroak</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/eu/kasu-arrakastatsuak">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/grid.svg') ?>" alt="Portafolioaren Ikonoa" title="Joan Portafoliora">
      <span>Portafolioa</span>
    </a>
  </li>

  <li class="enlaces01__item">
    <a class="enlaces01__link" href="/eu/kontaktua">
      <img class="enlaces01__icon" src="<?= asset('assets/img/icons/mail.svg') ?>" alt="Kontaktuaren Ikonoa" title="Joan Kontaktura">
      <span>Kontaktua</span>
    </a>
  </li>
</ul>
