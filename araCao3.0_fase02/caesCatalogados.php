<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aracão - projeto IFNM Araçuaí</title>

	<!-- Estilo customizado -->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

	<script src="dadosCaes.js"></script>
		<script>
			function getCaes() {
				let xmlHttp = new XMLHttpRequest();
				xmlHttp.open('GET', 'http://localhost/ajaxcaesderua/dadosCaes.json')

				xmlHttp.onreadystatechange = () => {
					if(xmlHttp.readyState == 4 && xmlHttp.status == 200) {
						let JSONCaes = xmlHttp.responseText

						let objJSONCaes = JSON.parse(JSONCaes)
						objJSONCaes=objJSONCaes.caesDeRua
						console.log(objJSONCaes)
												
						for(let i in objJSONCaes.cao) {
							let item = objJSONCaes.cao[i]

							console.log(item)
														
							let divRow = document.createElement('div')
							divRow.className = 'row'
							let divCol = document.createElement('div')
							divCol.className = 'col'
							let foto = '';
							for (let f in item.fotografias.foto) {
								if (foto) foto += ' ';
								foto += '<img class="imagem-catalogo" src="' + item.fotografias.foto[f] + '">';
							}
							let pfoto = document.createElement('p');
							pfoto.innerHTML = foto;							
							let p1 = document.createElement('p')
							p1.innerHTML = '<strong>Identificação:</strong> ' + item.identificacao
							let p2 = document.createElement('p')
							p2.innerHTML = '<strong>Nome:</strong> ' + item.nome
							let p3 = document.createElement('p')
							p3.innerHTML = '<strong>Data Registro:</strong> ' + item.dataRegistro
							let p4 = document.createElement('p')
							p4.innerHTML = '<strong>Gênero:</strong> ' + item.genero
							let p5 = document.createElement('p')
							p5.innerHTML = '<strong>Localização:</strong> ' + item.localizacao.latitude + ' (' + item.localizacao.longitude + ')' + ' (' + item.localizacao.endereco + ')'
							let p6 = document.createElement('p')
							p6.innerHTML = '<strong>Cor Pelagem:</strong> ' + item.corPelagem
							let p7 = document.createElement('p')
							p7.innerHTML = '<strong>Porte:</strong> ' + item.tamanho
							let p8 = document.createElement('p')
							p8.innerHTML = '<strong>Raça:</strong> ' + item.raca
							let p9 = document.createElement('p')
							p9.innerHTML = '<strong>Marcas Distintivas:</strong> ' + item.marcasDistintivas
							let p10 = document.createElement('p')
							p10.innerHTML = '<strong>Idade:</strong> ' + item.idade
							let p11 = document.createElement('p')
							p11.innerHTML = '<strong>História:</strong> ' + item.historia					
							let p12 = document.createElement('p')
							p12.innerHTML = '<strong>Estado Esterilizacao:</strong> ' + item.estadoEsterilizacao
							let p13 = document.createElement('p')
							p13.innerHTML = '<strong>Status:</strong> ' + item.status												
							let p14 = document.createElement('p')
							p14.innerHTML = '<strong>Cuidados  e Necessidades:</strong> ' + item.cuidadosENecessidades
							let p15 = document.createElement('p')
							p15.innerHTML = '<strong>Histórico de Atendimento:</strong> ' + item.historicoAtendimento
							let p16 = document.createElement('p')
							p16.innerHTML = '<strong>Destino:</strong> ' + item.destino
							let p17 = document.createElement('p')
							p17.innerHTML = '<strong>Observações:</strong> ' + item.observacoes
							
							let hr = document.createElement('hr')
							let br = document.createElement('br')

							divCol.appendChild(br)
							divRow.appendChild(divCol)
							divCol.appendChild(pfoto)
							divCol.appendChild(p1)
							divCol.appendChild(p2)
							divCol.appendChild(p3)
							divCol.appendChild(p4)
							divCol.appendChild(p5)
							divCol.appendChild(p6)
							divCol.appendChild(p7)
							divCol.appendChild(p8)
							divCol.appendChild(p9)
							divCol.appendChild(p10)
							divCol.appendChild(p11)
							divCol.appendChild(p12)
							divCol.appendChild(p13)
							divCol.appendChild(p14)
							divCol.appendChild(p15)
							divCol.appendChild(p16)
							divCol.appendChild(p17)
							divCol.appendChild(hr)
							divCol.appendChild(br)
							

							document.getElementById('lista').appendChild(divRow)						
						}						
					}
					if(xmlHttp.readyState == 4 && xmlHttp.status == 404) {
						//..
					}
				}
				xmlHttp.send()
			}
		</script>	
</head>
<body id="duas-colunas" class="Contato">
	<div id="container"><!-- Início container -->
		<!-- Início topo --><?php include 'topo.php'; ?><!-- fim topo -->
		<div id="conteudo"><!-- Início conteúdo -->			
			<div id="primario"><!-- Início primário -->
				<div class="caixa destaque">
					<h2>Doguinhos Catalogados</h2>
					<div class="caixa-conteudo">
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. 
							It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
						</p>
						<br>
					</div>

					<div class="catalogo" > 			
						<div class="row mb-5">
							<div class="col">
								
								<input class="submit" type="submit" onclick="getCaes()" value="Pesquisar">
								
							</div>
						</div>
						<br>
						<div id="lista"></div>
						
					</div>
				</div>
			</div><!-- Fim Primário-->	
			<!-- Início Lateral --> <?php include 'lateral.php'; ?> <!-- Fim Lateral -->		
		</div><!-- fim /conteúdo -->
	</div><!-- fim /container -->
	<!-- Início rodapé --> <?php include 'rodape.php'; ?> <!-- Fim rodapé -->
	</div>
</body>
</html>