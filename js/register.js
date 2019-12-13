document.querySelector('#link2register').addEventListener('click', function (e) {
    document.querySelector('#register').classList.remove('hidden');
})

document.querySelector('#link2selfInfo').addEventListener('click', function(e) {
    document.querySelector('#register-form').classList.add('hidden');
    document.querySelector('#personal-form').classList.remove('hidden');
})