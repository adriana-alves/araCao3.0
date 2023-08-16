<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aracão - projeto IFNM Araçuaí</title>

	<!-- Estilo customizado -->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	
	<!-- Início script --> <?php include 'emConstrucao.php'; ?> <!-- Fim script -->

</head>

<body id="duas-colunas" class="Encontrei">
	<div id="container"><!-- Início container -->
	
		<!-- Início topo --> <?php include 'topo.php'; ?><!-- fim /topo -->	
		
		<div id="conteudo"><!-- Início conteúdo -->
			<div id="primario"><!-- Início primário -->
				<div class="caixa destaque"><h2>Encontrei um doguinho</h2></div>
				<div class="caixa">
					<div class="caixa-conteudo">
						<ul id="projeto-rede">
							<li><a href="#"onclick="requisitarImagem('imagens/emConstrucao.jpg')"><img src="imagens/dog.png" width="40"><h3> Quero cadastrar - App ios </h3></a></li>
							<li><a href="#"onclick="requisitarImagem('imagens/emConstrucao.jpg')"><img src="imagens/dog.png" width="40"><h3> Quero cadastrar - App android </h3></a></li>
							<li> <a href="video/tutorial.mp4"><img src="imagens/dog.png" width="40"><h3>Não sei como cadastrar, e agora?</h3><p><br> Clique aqui para assistir ao tutorial em vídeo.</p></a></li>
						</ul>
					</div>
				</div>
			</div>				
		</div><!-- Fim Primário-->

	<!-- Início Lateral --> <?php include 'lateral.php'; ?> <!-- Fim Lateral -->	
	
</div><!-- fim /conteúdo -->
</div><!-- fim /container -->
<!-- Início rodapé --> <?php include 'rodape.php'; ?> <!-- Fim rodapé -->
</body>
</html>