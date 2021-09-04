const $ = jQuery;
import { AwesomeQR } from 'awesome-qr'

$( document ).ready(() => {

    const qrCodeResult = $( '#qrCodeResult' )
    const qrCodeResultContainer = $( '#qrCodeResultContainer' )
    const qrCodeCreateForm = $( '#qrCodeCreateForm' )
    const imageDownloadBtn = $( '#imageDownloadBtn' )
    const qrCodeData = qrCodeCreateForm.find( 'input[name="data"]' )
    const greenLogo = $( 'input[name="logo"]' ).val()
    const blackLogo = $( 'input[name="logo_black"]' ).val()

    qrCodeResultContainer.hide()

    qrCodeCreateForm.submit( ( ev ) => {

        ev.preventDefault();

        let options = {
            text: qrCodeData.val(),
            size: 600,
            components: {
                data: { scale: 0.8 },
                alignment: { scale: 0.7 },
                timing: { scale: 0.8 },
                cornerAlignment: { scale: 0.8 }
            },

            logoScale: 3,
            logoMargin: 10,
            logoCornerRadius: 0,
        }

        // Choose the logo based on the style
        let style = qrCodeCreateForm.find( 'input[name="qr_style"]:checked' ).val()
        console.log( style )
        if ( style == null || style == "green" ) {
            options['logoImage'] = greenLogo
        }
        else if ( style == "black" ) {
            options['logoImage'] = blackLogo
        }
        else {
            options['logoImage'] = null
        }
        
        new AwesomeQR( options ).draw().then( ( dataUrl ) => {
            qrCodeResult.attr( 'src', dataUrl );
            imageDownloadBtn.attr( 'href', dataUrl );
            imageDownloadBtn.attr( 'download', 'qr-code.png' );
            qrCodeResultContainer.show( 500 )
        } );
    } )
    
})



