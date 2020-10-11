function changeFondo(srcFondo) {
    /*console.log("changeFondo func -> ");
    let id_toChange = 'product-preview-img';
    console.log("id_toChange:" + id_toChange)
    let srcFondo = 'images/speedy-gonzales.png';
    console.log("srcFondo:" +srcFondo);*/
    document.getElementById('product-preview-img').src = srcFondo;
    document.getElementById('zoom-preview-img').href = srcFondo;
    
}
