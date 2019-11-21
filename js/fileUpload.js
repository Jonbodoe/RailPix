document.getElementById('import').addEventListener('change', previewImg);

function previewImg(e) {
    let reader = new FileReader();
    reader.addEventListener("load", loader);
    reader.readAsDataURL(this.files[0]);
    passToURL()
}

function loader (e) {
    document.getElementById('image').src = e.target.result;
};

function passToURL(){
}