document.addEventListener('click', function(e) {
    popup(e);
});

function popup(event) {
    if (!event.target.matches('.add') && event.target.matches('#pageBlur')) {
        return
    } else if (event.target.matches('.add')) { 
        document.getElementById('displayForm').classList.remove('hidden');
        document.getElementById('profile').classList.add('noscroll');
        
    } else if (event.target.matches('#pageBlur')) {
        document.getElementById('displayForm').classList.add('hidden');
    } 

    // MAKE LAST CONDITIONAL WORK.
}





