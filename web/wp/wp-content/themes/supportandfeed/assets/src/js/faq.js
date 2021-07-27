
const faqSections = jQuery( '.faq-container' )

jQuery( '.faq-paragraph' ).hide()

jQuery( '.faq-question' ).click( ev => {
    const section = jQuery( ev.target ).closest( '.faq-container' )
    section.find( '.faq-paragraph' ).slideToggle( 300 )
} )
