<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<!--icones-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" type="text/css" rel="stylesheet">
	<!--Font-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,300;0,400;0,600;1,500&display=swap" rel="stylesheet">

	<title>Twitch</title>
</head>
<body>

	<header>
		<i class="fa-brands fa-twitch logo display_in"></i>
		<h3 class="display_in procurar">Procurar</h3>
		<i class="fa-solid fa-ellipsis-vertical display_in menu"></i>

		<div class="center_h">
			<input type="text" name="" value="Buscar">
			<button><i class="fa-solid fa-magnifying-glass"></i></button>
		</div><!--center_h-->

		<div class="right_h">
			<i class="fa-solid fa-crown coroa"></i>
			<button class="entrar_btn">Entrar</button>
			<button class="cadastrar_btn">Cadastrar-se</button>
			<i class="fa-regular fa-user usuario"></i>
		</div><!--right_h-->
	</header>

	<section class="sidebar display_in">
		<h3 class="titulo_sidebar display_in">CANAIS RECOMENDADOS</h3>
		<i class="fa-solid fa-arrow-left display_in fechar_side"></i>

		<div class="perfil_side">
			<div class="img_perfil display_in"></div>
			<div class="display_in">
			<p class="nome_perfil">Usuario</p>
			<p class="jogo_perfil">Jogo</p>
			</div>
			<div class="ao_vivo display_in"></div>
			<p class="display_in ao_vivo_num">7,7 mil</p>
		</div><!--perfil_side-->

		<div class="perfil_side">
			<div class="img_perfil display_in"></div>
			<div class="display_in">
			<p class="nome_perfil">Usuario</p>
			<p class="jogo_perfil">Jogo</p>
			</div>
			<div class="ao_vivo display_in"></div>
			<p class="display_in ao_vivo_num">8,3 mil</p>
		</div><!--perfil_side-->

		<div class="perfil_side">
			<div class="img_perfil display_in"></div>
			<div class="display_in">
			<p class="nome_perfil">Usuario</p>
			<p class="jogo_perfil">Jogo</p>
			</div>
			<div class="ao_vivo display_in"></div>
			<p class="display_in ao_vivo_num">1,8 mil</p>
		</div><!--perfil_side-->

		<div class="perfil_side">
			<div class="img_perfil display_in"></div>
			<div class="display_in">
			<p class="nome_perfil">Usuario</p>
			<p class="jogo_perfil">Jogo</p>
			</div>
			<div class="ao_vivo display_in"></div>
			<p class="display_in ao_vivo_num">2,3 mil</p>
		</div><!--perfil_side-->

		<div class="perfil_side">
			<div class="img_perfil display_in"></div>
			<div class="display_in">
			<p class="nome_perfil">Usuario</p>
			<p class="jogo_perfil">Jogo</p>
			</div>
			<div class="ao_vivo display_in"></div>
			<p class="display_in ao_vivo_num">5,9 mil</p>
		</div><!--perfil_side-->

		<div class="perfil_side">
			<div class="img_perfil display_in"></div>
			<div class="display_in">
			<p class="nome_perfil">Usuario</p>
			<p class="jogo_perfil">Jogo</p>
			</div>
			<div class="ao_vivo display_in"></div>
			<p class="display_in ao_vivo_num">1,6 mil</p>
		</div><!--perfil_side-->
	</section><!--sidebar-->

	<section class="video_section display_in" >
		<div class="btn_mudar position_btnMudar"><i class="fas fa-chevron-left seta"></i></div>
		<div class="video video_p position1 altura display_in">
			<div class="video_tela display_in">
				<p>AO VIVO</p>
			</div>

			<div class="img_perfil_principal display_in"></div>
			<div class="perfil_principal display_in">
				<p>Nome</p>
				<p>Jogo</p>
				<p>113 espectadores</p>
				<p class="display_in" style="margin-left:-75px; margin-top: 15px; padding: 2px 10px; background-color: rgb(230, 230, 230); font-size: 12px; border-radius: 20px; color: rgb(50, 50, 50);font-weight: bold;">Português</p>
			
				<p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat...</p>
			</div><!--perfil_principal-->

			

		</div>
		<div class="video  position2  altura2 display_in"></div>
		<div class="video  position3  altura2 display_in"></div>
		<div class="video  position4  altura3 display_in"></div>
		<div class="video  position5  altura3 display_in"></div>
		<div class="btn_mudar position_btnMudar2"><i class="fas fa-chevron-right seta"></i></div>
	</section><!--video_section-->

	<section class="videos_gostar display_in">
		<h3>Canais ao vivo que achamos que vai gostar</h3>
		

		<div style="margin-right: 6px" class="container_video display_in">
			<div class="video_pequeno"></div>
			<div style="width: 40px; height: 40px; vertical-align: top; margin-top: 10px;" class="img_perfil display_in"></div>
			<div style="margin-left: 10px;" class="display_in">
			<p style="margin-top: 5px ; margin-bottom: 5px;font-weight: bold;">Nome da live</p>
			<p style=" font-weight: normal;" class="nome_perfil">Usuario</p>
			<p style="margin-bottom: 6px;"class="jogo_perfil">Jogo</p>
			<p  class="display_in"style=" padding: 2px 10px; background-color: rgb(230, 230, 230); font-size: 12px; border-radius: 20px; color: rgb(50, 50, 50);font-weight: bold;">Português</p>
			</div>
		</div><!--container_video-->

		<div style="margin-right: 6px" class="container_video display_in">
			<div class="video_pequeno"></div>
			<div style="width: 40px; height: 40px; vertical-align: top; margin-top: 10px;" class="img_perfil display_in"></div>
			<div style="margin-left: 10px;" class="display_in">
			<p style="margin-top: 5px ; margin-bottom: 5px;font-weight: bold;">Nome da live</p>
			<p style=" font-weight: normal;" class="nome_perfil">Usuario</p>
			<p style="margin-bottom: 6px;"class="jogo_perfil">Jogo</p>
			<p  class="display_in"style=" padding: 2px 10px; background-color: rgb(230, 230, 230); font-size: 12px; border-radius: 20px; color: rgb(50, 50, 50);font-weight: bold;">Português</p>
			</div>
		</div><!--container_video-->

		<div style="margin-right: 6px" class="container_video display_in">
			<div class="video_pequeno"></div>
			<div style="width: 40px; height: 40px; vertical-align: top; margin-top: 10px;" class="img_perfil display_in"></div>
			<div style="margin-left: 10px;" class="display_in">
			<p style="margin-top: 5px ; margin-bottom: 5px;font-weight: bold;">Nome da live</p>
			<p style=" font-weight: normal;" class="nome_perfil">Usuario</p>
			<p style="margin-bottom: 6px;"class="jogo_perfil">Jogo</p>
			<p  class="display_in"style=" padding: 2px 10px; background-color: rgb(230, 230, 230); font-size: 12px; border-radius: 20px; color: rgb(50, 50, 50);font-weight: bold;">Português</p>
			</div>
		</div><!--container_video-->

		<div style="margin-right: 6px" class="container_video display_in">
			<div class="video_pequeno"></div>
			<div style="width: 40px; height: 40px; vertical-align: top; margin-top: 10px;" class="img_perfil display_in"></div>
			<div style="margin-left: 10px;" class="display_in">
			<p style="margin-top: 5px ; margin-bottom: 5px;font-weight: bold;">Nome da live</p>
			<p style=" font-weight: normal;" class="nome_perfil">Usuario</p>
			<p style="margin-bottom: 6px;"class="jogo_perfil">Jogo</p>
			<p  class="display_in"style=" padding: 2px 10px; background-color: rgb(230, 230, 230); font-size: 12px; border-radius: 20px; color: rgb(50, 50, 50);font-weight: bold;">Português</p>
			</div>
		</div><!--container_video-->

		
	</section>


</body>
</html>