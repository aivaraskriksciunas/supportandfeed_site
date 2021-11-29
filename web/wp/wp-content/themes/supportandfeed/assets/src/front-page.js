import './js/slideshow'

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
    }, 7000 )
}