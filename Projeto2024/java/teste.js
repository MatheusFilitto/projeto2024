// script.js

const bot = document.getElementById('bot');
bot.addEventListener('click', mostrarMensagem);


function mostrarMensagem() {
    const mensagemElemento = document.getElementById('mensagem');
    const valor = mensagemElemento.value
    if (valor) {
        mensagemElemento.textContent = 'Bem Vindo ' + document.getElementById('login') ;
    }
}

// Aguarda o carregamento do DOM para executar a função
document.addEventListener('DOMContentLoaded', mostrarMensagem);
