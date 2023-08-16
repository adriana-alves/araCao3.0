<script>
    
    function requisitarImagem(url) {
    let img = new Image();
    
    img.onload = function() {
        // A imagem foi carregada com sucesso
        document.getElementById('conteudo').innerHTML = '<img src="' + url + '">';
    };

    img.onerror = function() {
        // Ocorreu um erro ao carregar a imagem
        document.getElementById('conteudo').innerHTML = 'Conetúdo em Desenvolvimento.';
    };

    img.src = url;
}
    
    </script>