document.addEventListener('click', function(e) {
    popup(e);
});

function popup(event) {
    if (!event.target.matches('.add') && !event.target.matches('#pageBlur')) {
        return
    } else if (event.target.matches('.add')) { 
        console.log('helloish')
        document.getElementById('displayForm').classList.remove('hidden');
        
    } else if (event.target.matches('#pageBlur')) {
        console.log('hello')
        document.getElementById('displayForm').classList.add('hidden');
    } 
}





