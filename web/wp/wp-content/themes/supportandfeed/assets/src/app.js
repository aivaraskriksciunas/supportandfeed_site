import './scss/index.scss'
import './js/navmenu'
import './js/modal'
import './js/faq'

// Get the navbar
var navbar = document.getElementById( 'mainNavbar' );
var mobileNavbar = document.getElementById( 'mobileNavbar' );
var pageContainer = document.getElementsByClassName( 'page' )[0];

// Get the offset position of the navbar
var sticky = navbar.offsetTop + 10;

// Check if the navbar is still visible after scroll
window.onscroll = () => {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add( 'navbar-sticky' );
        mobileNavbar.classList.add( 'navbar-sticky' );
        pageContainer.classList.add( 'mt-16' );
    } else {
        navbar.classList.remove( 'navbar-sticky' );
        mobileNavbar.classList.remove( 'navbar-sticky' )
        pageContainer.classList.remove( 'mt-16' );
    }
}