document.getElementById('upload').addEventListener('change', previewImg);
function previewImg(e) {
    let reader = new FileReader();
    reader.addEventListener("load", loader);
    reader.readAsDataURL(this.files[0]);
}

function loader (e) {
    document.getElementById('img').src = e.target.result;
};
