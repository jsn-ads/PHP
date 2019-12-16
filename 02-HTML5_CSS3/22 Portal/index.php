<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta id="viewport" name="viewport" content="width=device-width, user-scalable=no">
		<title>Portal</title>
		<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<script type="text/javascript" src="assets/js/script.js"></script>
	</head>
	<body>
		<div class="topo">
			<div class="topoint">
				<div class="topoA">
					<ul>
						<li><a href="" class="ativo">Home</a></li>
						<li><a href="">Quem Somos</a></li>
						<li><a href="">Anuncie aqui</a></li>
						<li><a href="">Contatos</a></li>
					</ul>
				</div>
				<div class="topoB">
					<input type="image" src="assets/images/search.png" border="0" width="26px" height="26px">
					<input type="text" name="busca" class="topobusca" placeholder="Busca...">
					<a href=""><img src="assets/images/youtube.png"></a>
					<a href=""><img src="assets/images/twitter.png"></a>
					<a href=""><img src="assets/images/facebook.png"></a>
					<a href=""><img src="assets/images/googleplus.png"></a>
					<a href=""><img src="assets/images/rss.png"></a>	
				</div>
			</div>
		</div>

		<div class="topo2">
			<div class="topo2int">
				<div class="logo">
					<img src="assets/images/logo.png" border="0" width="230px">
				</div>
				<div class="banner">
					
				</div>
			</div>
		</div>

		<div class="menu">
			<div class="menuint">
				<img  class="menumobile" src="assets/images/menu.png" border="0" height="40px" width="40px" onclick="toggleMenu()">
				<ul id="menu">
					<li><a href="">Home</a></li>
					<li><a href="">Economia</a></li>
					<li>
						<a href="">Entretenimento</a>
							<img src="assets/images/down-arrow.png" border="0" width="10px">
							<div class="submenu">
								<a href="">
									<div class="submenuitem">Sub menu 1</div>
								</a>
								<a href="">
									<div class="submenuitem">Sub menu 2</div>
								</a>
								<a href="">
									<div class="submenuitem">Sub menu 3</div>
								</a>
								<a href="">
									<div class="submenuitem">Sub menu 4</div>
								</a>
								<a href="">
									<div class="submenuitem">Sub menu 5</div>
								</a>
							</div>
					</li>
					<li>
						<a href="">Esportes</a>
						<img src="assets/images/down-arrow.png" border="0" width="10px">
						<div class="submenu">
							<a href="">
								<div class="submenuitem">Sub menu 1</div>
							</a>
							<a href="">
								<div class="submenuitem">Sub menu 2</div>
							</a>
							<a href="">
								<div class="submenuitem">Sub menu 3</div>
							</a>
						</div>
					</li>
					<li><a href="">Geral</a></li>
					<li>
						<a href="">Notícias</a>
						<img src="assets/images/down-arrow.png" border="0" width="10px">
						<div class="submenu">
							<a href="">
								<div class="submenuitem">Sub menu 1</div>
							</a>
							<a href="">
								<div class="submenuitem">Sub menu 2</div>
							</a>
							<a href="">
								<div class="submenuitem">Sub menu 3</div>
							</a>
							<a href="">
								<div class="submenuitem">Sub menu 4</div>
							</a>
						</div>
					</li>
					<li><a href="">Polícia</a></li>
					<li><a href="">Videos</a></li>
				</ul>
			</div>
		</div>

		<div class="ultimasnoticias">
			<div class="ultimasnoticiasint">
				<div class="ultnoticiasarea">
					<div class="ultnoticiastitulo">
						ULTIMAS NOTÍCIAS
					</div>
					<div class="ultimasnoticiascont">
						Sony lança Last of US part 2 
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="containerint">
				<div class="leftside">
					<div class="slideshow" id="slideshow">
						<div class="slidenext">
							<div class="next" onclick="mudarSlide(0)"></div>
							<div class="next" onclick="mudarSlide(1)"></div>
							<div class="next" onclick="mudarSlide(2)"></div>
							<div class="next" onclick="mudarSlide(3)"></div>
						</div>
						<div class="slideshowarea">
							<div class="slide">
								<img src="assets/images/slide1.jpg">
								<div class="slideinfo">
									<div class="slidetitulo">
										God of War
									</div>
									<div class="slidesubtitulo">
										Estreia 20 de Abril
									</div>
								</div>
							</div>
							<div class="slide">
								<img src="assets/images/slide2.jpg">
								<div class="slideinfo">
									<div class="slidetitulo">
										Guears of War
									</div>
									<div class="slidesubtitulo">
										Estreia 20 de Abril
									</div>
								</div>
							</div>
							<div class="slide">
								<img src="assets/images/slide3.jpg">
								<div class="slideinfo">
									<div class="slidetitulo">
										Horizon Zero Dawn
									</div>
									<div class="slidesubtitulo">
										Estreia 20 de Abril
									</div>
								</div>
							</div>
							<div class="slide">
								<img src="assets/images/slide4.jpg">
								<div class="slideinfo">
									<div class="slidetitulo">
										Last of US
									</div>
									<div class="slidesubtitulo">
										Estreia 20 de Abril
									</div>
								</div>
							</div>
						</div> 
					</div>

					<div class="widget">
						<div class="widget_titulo">
							NOTÍCIAS
						</div>
						<div class="widget_conteudo">
							<div class="noticiaarea1">
								<div class="noticiaitem central">
									<div class="noticiaimg">
										<img src="" border="0" width="80px" height="80px">
									</div>
									<div class="noticiatitulo">
										aqui e a parte titulo
									</div>
									<div class="noticiainfo">
										500 comentarios
									</div>
								</div>
							</div>
							<div class="noticiaarea2">
								<div class="noticiaitem">
									<div class="noticiaimg">
										<img src="" border="0" width="80px" height="80px">
									</div>
									<div class="noticiatitulo">
										aqui e a parte titulo
									</div>
									<div class="noticiainfo">
										500 comentarios
									</div>
								</div>

								<div class="noticiaitem">
									<div class="noticiaimg">
										<img src="" border="0" width="80px" height="80px">
									</div>
									<div class="noticiatitulo">
										aqui e a parte titulo
									</div>
									<div class="noticiainfo">
										500 comentarios
									</div>
								</div>

								<div class="noticiaitem">
									<div class="noticiaimg">
										<img src="" border="0" width="80px" height="80px">
									</div>
									<div class="noticiatitulo">
										aqui e a parte titulo
									</div>
									<div class="noticiainfo">
										500 comentarios
									</div>
								</div>

								<div class="noticiaitem">
									<div class="noticiaimg">
										<img src="" border="0" width="80px" height="80px">
									</div>
									<div class="noticiatitulo">
										aqui e a parte titulo
									</div>
									<div class="noticiainfo">
										500 comentarios
									</div>
								</div>
							</div> 
							<div style="clear: both;"></div>
						</div>.
					</div>
				</div>

				<div class="rightside">
					<div class="widget">
						<div class="widget_titulo">
							SOCIAL
						</div>
						<div class="widget_conteudo_social">
							<a href=""><img src="assets/images/youtube.png"></a>
							<a href=""><img src="assets/images/twitter.png"></a>
							<a href=""><img src="assets/images/facebook.png"></a>
							<a href=""><img src="assets/images/googleplus.png"></a>
							<a href=""><img src="assets/images/rss.png"></a>
						</div>
					</div>

					<div class="widget">
						<div class="widget_titulo">
							ÚLTIMAS NOTÍCIAS
						</div>
						<div class="widget_conteudo">
							<div class="noticia_item">
								<a href="">Noticia Item Rightside
										   Noticia Item Rightside
								</a>
							</div>
							<div class="noticia_item">
								<a href="">Noticia Item Rightside
										   Noticia Item Rightside
								</a>
							</div>
							<div class="noticia_item">
								<a href="">Noticia Item Rightside
										   Noticia Item Rightside
								</a>
							</div>
							<div class="noticia_item">
								<a href="">Noticia Item Rightside
										   Noticia Item Rightside
								</a>
							</div>
							<div class="noticia_item">
								<a href=""> Noticia Item Rightside
										   	Noticia Item Rightside
								</a>
							</div>
						</div>
					</div>

					<div class="widget">
						<div class="widget_titulo">
							PUBLICIDADE
						</div>
						<div class="widget_conteudo">
							<img src="assets/images/banner.jpg" border="0" width="275px">
						</div>
					</div>

					<div class="widget">
						<div class="widget_titulo">
							ENCONTRE-NOS NO FACEBOOK
						</div>
						<div class="widget_conteudo">
							<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffacebook&tabs&width=275&height=154&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="275" height="154" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>