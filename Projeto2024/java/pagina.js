
document.addEventListener('DOMContentLoaded', function() {

    const urlParams = new URLSearchParams(window.location.search);
    const mensagem = urlParams.get('mensagem');
    if (mensagem) {
        document.getElementById('mensagem').textContent = mensagem;
    }

    const bot = document.getElementById('bot');
    if (bot) {
        bot.addEventListener('click', function(event) {
            event.preventDefault();
            
            const login = document.getElementById('login').value;
            if (login) {
                window.location.href = 'pagina.php?mensagem=Bem%20Vindo%20' + encodeURIComponent(login);
            }
        });
    }
});
