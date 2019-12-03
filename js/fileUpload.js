document.getElementById('upload').addEventListener('change', previewImg);
function previewImg(e) {
    let reader = new FileReader();
    reader.addEventListener("load", loader);
    reader.readAsDataURL(this.files[0]);
    showContent()
    console.log('yaas')
}

function loader (e) {
    document.getElementById('img').src = e.target.result;
};

function showContent() {
    document.getElementById('displayForms').classList.remove('hidden');
}
// document.getElementById('submitComment').addEventListener('click', (e)=>{
//     e.preventDefault;
// });

// function passToURL(){
// }