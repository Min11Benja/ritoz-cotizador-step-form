function changeFondo(srcFondo) {
    /*console.log("changeFondo func -> ");
    let id_toChange = 'product-preview-img';
    console.log("id_toChange:" + id_toChange)
    let srcFondo = 'images/speedy-gonzales.png';
    console.log("srcFondo:" +srcFondo);*/
    document.getElementById('product-preview-img').src = srcFondo;
    document.getElementById('zoom-preview-img').href = srcFondo;

}

function changeParentAmount(inputIdToEdit, qtyClickSelected) {
    document.getElementById(inputIdToEdit).setAttribute('data-price', qtyClickSelected);
    document.getElementById(inputIdToEdit).setAttribute('data-total', qtyClickSelected);

    let newValueLabelTxt =
        document.getElementById(inputIdToEdit).getAttribute('data-label', qtyClickSelected);
    console.log("newValueLabelTxt:" + newValueLabelTxt);
    newValueLabelTxt = newValueLabelTxt + " - " + qtyClickSelected + " pz";
    console.log("new newValueLabelTxt:" + newValueLabelTxt);

    document.getElementById(inputIdToEdit).value = newValueLabelTxt;
}

/* Editar telefono si es en USA o en Mexico */
$.get("https://ipinfo.io", function(response) {
    if(response.country === "US") {
        $("#welcome-msg-country").html("Welcome, America!");
        /* whatsapp url USA telefono */
        $(".whatsapp-icon").attr("href", "https://api.whatsapp.com/send?phone=+16825549050");
    }
    else if(response.country === "MX") {
        $("#welcome-msg-country").html("Bienvenido, Mexico!");
        /* whatsapp url mexico telefono */
        $(".whatsapp-icon").attr("href", "https://api.whatsapp.com/send?phone=+524448002313");
    }
    
}, "jsonp");

