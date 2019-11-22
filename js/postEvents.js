document.addEventListener('click', postEvents);
console.log('hello')

function postEvents(e) {
    // console.log('hello')
    if (!e.target.matches('#edit') && !e.target.matches('#msgBlock')) {
        return 
    } else if (e.target.matches('#edit')) {
        console.log('hello')
    } 
    // else if (e.target.matches('#msgBlock')) {
    //     document.querySelector('#makeComment').classList.toggle('hidden')
    // }

}

