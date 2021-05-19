
const slideshow = jQuery( '#main-slideshow' )
const images = slideshow.find( '#image-container' ).first().children( '.slideshow-image' )
const SLIDESHOW_INTERVAL = 10000
const TRANSITION_SPEED = 1500
let current_image = 0;

function init_slideshow() {
    // Initialize slideshow elements
    for ( let i = 0; i < images.length; i++ ) {
        // Set element background images
        let img = jQuery( images[i] )
        // Url for each element is stored in src attribute
        let img_src = img.attr( 'src' )
        // Set image for this item
        img.css( 'background-image', `url(${img_src})` )

        // If this is not the first item, hide it
        if ( i == 0 ) continue;
        jQuery( images[i] ).hide();
    }
}

setInterval( () => {
    let prev = current_image
    current_image ++
    if ( current_image >= images.length )
        current_image = 0

    jQuery( images[current_image] ).fadeIn( TRANSITION_SPEED )
    jQuery( images[prev] ).fadeOut( TRANSITION_SPEED )

}, SLIDESHOW_INTERVAL )

init_slideshow()