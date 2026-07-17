import '../scss/inicio.scss';
import { initAnimations } from './resources/animations';
import { initGuapiHero } from './components/_guapiHero';
import { initGuapiServices } from './components/_guapiServices';

document.addEventListener("DOMContentLoaded", () => {
    initAnimations();
    initGuapiHero();
    initGuapiServices();
});
