<div class='wrap'>

<?php 

    function _sfqrc_get_logo_data_uri( $file ) 
    {
        $image = __DIR__ . "/assets/$file";
        $type = pathinfo( $image, PATHINFO_EXTENSION );
        $data = file_get_contents( $image );
        return 'data:image/' . $type . ';base64,' . base64_encode( $data );
    }
    
?>

<form id='qrCodeCreateForm' action=''>
    <input type='hidden' name='logo' value='<?= _sfqrc_get_logo_data_uri( 'sf_logo.png' ) ?>'>
    <input type='hidden' name='logo_black' value='<?= _sfqrc_get_logo_data_uri( 'sf_logo_black.png' ) ?>'>

    <div class='form-group'>
        <label for='dataInput'>Text/URL to encode:</label>
        <input id='dataInput' type='text' name='data'>
    </div>

    <p>QR code style:</p>

    <div id='qrCodeStyleChoices'>
        <div class='qrCodeStyleChoice'>
            <input type="radio" id="qrCodeStyleChoice1" name="qr_style" value="green" checked>
            <label for="qrCodeStyleChoice1">Green logo</label>
        </div>

        <div class='qrCodeStyleChoice'>
            <input type="radio" id="qrCodeStyleChoice2" name="qr_style" value="black">
            <label for="qrCodeStyleChoice2">Black and white</label>
        </div>

        <div class='qrCodeStyleChoice'>
            <input type="radio" id="qrCodeStyleChoice3" name="qr_style" value="no_logo">
            <label for="qrCodeStyleChoice3">Without logo</label>
        </div>
    </div>

    <button class='button button-primary' id='createQrCodeBtn' type='submit'>Create</button>
</form>

<div id='qrCodeResultContainer'>
    <img id='qrCodeResult'>

    <div id='imageDownload'>
        <a id='imageDownloadBtn' class='button button-primary'>Download</a>
        <p>Or right click on the image and select "Save image as..."</p>
    </div>
</div>

</div>





