
// By default, hide all staff blocks
jQuery( '.staff-block-modal' ).hide()

// Open staff block modal
jQuery( '.staff-block-name, .staff-block-profile' ).click( ( item ) => {
    const parent = jQuery( item.target ).parents( '.wp-block-sf-staff-block' )
    const modal = jQuery( parent ).children( '.staff-block-modal' )
    show_modal( modal )
} )

// Close modal when clicking on the backdrop
jQuery( '.staff-block-modal' ).click( ( item ) => {
    hide_modal( jQuery( item.target ))
})

jQuery( '.modal-close-btn' ).click( item => {
    const parentModal = jQuery( item.target ).parents( '.staff-block-modal' )
    hide_modal( jQuery( parentModal ))
})

// Prevent closing of the modal when clicking inside of it
jQuery( '.modal-container' ).click( ( ev ) => {
    ev.stopPropagation()
} )

function show_modal( modal ) {
    modal.fadeIn( 200 )
    jQuery( 'body' ).css( 'overflow', 'hidden' )
}

function hide_modal( modal ) {
    modal.fadeOut( 200 )
    jQuery( 'body' ).css( 'overflow', 'scroll' )
}