
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
<body class="home">
	<div id="container"><!-- Início container -->
		<!-- Início topo --><?php include 'topo.php'; ?><!-- fim topo -->
		<div id="conteudo">	<!-- Início conteúdo -->
			<div id="primario">	<!-- Início primário -->
				<div class="caixa destaque">
					<h2>Nossas Câmeras</h2>
					<div class="caixa-conteudo">
						<img class="imagem-principal" src="imagens/dog.png">
						<p>
							Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
							Contrary to popular belief, Lorem Ipsum is not simply random text. 
						</p>
						<br>
						<a href="#"onclick="requisitarImagem('imagens/emConstrucao.jpg')">Leia mais!</a>
					</div>
				</div>
				<!-- Início projeto --> <?php include 'projeto.php'; ?> <!-- Fim projeto -->
			</div> <!-- Fim Primário-->
			<div id="secundario"><!-- Início Secundário-->
				<div class="caixa comedouro">
					<h2>Nossos Comedouros</h2>
					<div class="caixa-conteudo">
						<img class="imagem-principal" src="imagens/dog.png">
						<p>
							Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
							Contrary to popular belief, Lorem Ipsum is not simply random text. 
						</p>
						<br>
						<a href="#"onclick="requisitarImagem('imagens/emConstrucao.jpg')">Leia mais!</a>
					</div>
				</div>
				<!-- Início Rede --> <?php include 'naRede.php'; ?> <!-- Fim Rede -->
			</div><!-- Fim Secudário-->
			<!-- Início Lateral --> <?php include 'lateral.php'; ?> <!-- Fim Lateral -->			
		</div><!-- fim /conteúdo -->
	</div><!-- fim /container -->
	<!-- Início rodapé --> <?php include 'rodape.php'; ?> <!-- Fim rodapé -->
</body>
</html>