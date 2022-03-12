import './js/slideshow'

const $ = jQuery
const banner = jQuery( '#banner' )

if ( banner ) {
    const elements = banner.children( 'div' )

    let currElement = 0;

    elements.hide();
    jQuery( elements[currElement] ).show();
    
    setInterval( () => {
        elements.hide()

        currElement++
        if ( currElement >= elements.size() ) currElement = 0;

        jQuery( elements[currElement] ).slideDown( 300 )
    }, 5000 )
}

$( document ).ready( () => {
    const popup = $( '#main-popup' )
    popup.hide();
    
    setTimeout(() => popup.fadeIn( 1000 ), 1000 )
    
    $( '#main-popup' ).click( () => {
        popup.hide()
    })

    $( '#popup-close-btn' ).click( () => {
        popup.hide()
    })

    $( '.popup' ).click( ( ev ) => {
        ev.stopPropagation()
    })

    $( document ).on( 'keydown', ( event ) => {
        if ( event.key === 'Escape' ) {
            popup.hide()
        }
    })
})
