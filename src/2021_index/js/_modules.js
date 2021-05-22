import burger from "./modules/burger";
import FixedElementClearance from "./modules/fixed-element-clearance";
import LazyLoad from "vanilla-lazyload";
import MenuToggle from "./modules/menu-toggle";
import SmoothScroll from "smooth-scroll/dist/smooth-scroll";
import menuControl from './modules/menu-control';
import search from './modules/search';
import header from "./modules/header";
// Less used modules
//
import accordion from "./modules/accordion";
import SamuraiModal from "./modules/samurai-modal";
import SamuraiTabs from "./modules/samurai-tabs";
import slides from "./modules/slides";
import preloader from "./modules/preloader";

export default () => {
    new LazyLoad({ elements_selector: ".lazy" });

    new SmoothScroll('a[href*="#"]', {
        header: ".main-header-bundle",
        speed: 1500,
        speedAsDuration: true,
        easing: "easeOutQuint",
    });

    new FixedElementClearance({
        element: ".js-get-main-header-height",
        CSSVariableName: "main-header-height",
    });

    new MenuToggle({
        menuToggle: [".js-main-menu-mobile-toggle"],
        menuElement: ".main-menu-mobile",
        menuClose: [".js-close-menu-mobile"],
        activeBodyClass: "mobile-menu-is-open",
        breakpointToHide: 1200,
    });

    new SamuraiModal();
    new SamuraiTabs();

    accordion();
    menuControl();
    slides();
    burger();
    search();
    preloader();
    header();
};
