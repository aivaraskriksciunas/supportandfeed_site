
const expandBtn = jQuery( '#menu-expand-btn' )
const closeBtn  = jQuery( '#menu-close-btn' )
const mobileMenu = jQuery( '#menu-mobile-full' ) 

expandBtn.click( () => {
    mobileMenu.slideDown( 200 )
})

closeBtn.click( () => {
    mobileMenu.slideUp( 200 )
} ) 

mobileMenu.click( () => {
    mobileMenu.slideUp( 200 );
} )