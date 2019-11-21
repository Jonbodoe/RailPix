document.addEventListener('click', function(e) {
    popup(e);
    // editpost(e);
});

function popup(event) {
    console.log(event.target)
    if (event.target.matches('.add')) { 
        document.getElementById('displayForm').classList.remove('hidden');
        document.getElementById('profile').classList.add('noscroll');
        
    } else if (event.target.matches('#pageBlur')) {
        document.getElementById('displayForm').classList.add('hidden');
    }
}
// function editPost(e) {
// }




