// Modal of Adimn
let content = document.getElementById('content');
let openAdm = document.getElementById('openAdm');
let closeAdm = document.getElementById('closeAdm');

var btn = document.querySelector('button');

btn.addEventListener('click', click);

function click(){
    content.style.display = 'block'
}

openAdm.addEventListener('click',open);
closeAdm.addEventListener('click',close);

function open(){
    content.style.display = 'block';
}

function close(){
    window.open('index.php', '_self');
}

// End Modla admin