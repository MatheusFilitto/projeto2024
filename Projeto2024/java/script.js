document.addEventListener('DOMContentLoaded', function() {
    // Seleciona todos os elementos de input checkbox
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');

    // Garante que todos os checkboxes estejam desmarcados ao carregar a página
    checkboxes.forEach(checkbox => checkbox.checked = false);

    // Adiciona o evento de clique para abrir e fechar os acordeões

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            // Não fecha mais todos os acordeões; apenas permite a mudança de estado
            checkboxes.forEach(cb => {
             if (cb !== this) cb.checked = false;
            });
        });
    });

});
