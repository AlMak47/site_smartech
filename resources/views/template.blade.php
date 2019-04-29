<!DOCTYPE html>
<html>
<head>
	<title>Smartech-@yield('title')</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/png" />

	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
	<style type="text/css">
		body,html{
			margin : 0 !important;
			padding: 0 !important;
		}
	</style>
</head>
<body>
	<!-- SOCIAL NETWORK  -->
	<div id="network" style="background:rgba(255,255,255,0.2);display: none;" class="uk-position-absolute uk-position-fixed uk-position-z-index uk-margin-xlarge-top uk-card uk-card-default uk-padding-remove" >
		<div><a href="" class="social-network uk-icon-link uk-button uk-button-primary uk-margin-remove" uk-icon="icon:facebook;ratio:2"></a></div>
		<div><a href="" class="social-network uk-icon-link uk-button uk-button-danger uk-margin-remove" uk-icon="icon:instagram;ratio:2"></a></div>
		<div><a href="" class="social-network uk-icon-link uk-button uk-button-default uk-margin-remove" uk-icon="icon:mail;ratio:2"></a></div>
	</div>
	<!-- // -->
<!-- NAVBAR -->
<nav class="uk-navbar-container" style="background:rgba(255,255,255,1);" uk-navbar>
	<div class="uk-navbar-left">
		<a class="uk-navbar-item uk-logo" href="{{url('/')}}"><img src="{{asset('img/logo.png')}}" uk-img></a>
	</div>
	<div class="uk-navbar-right">
		<a href="" class="uk-icon-link uk-button" uk-icon="icon:facebook"></a>
		<a href="" class="uk-icon-link uk-button" uk-icon="icon:instagram"></a>
		<a href="" class="uk-icon-link uk-button" uk-icon="icon:twitter"></a>
		<a href="" class="uk-icon-link uk-button" uk-icon="icon:google-plus"></a>
		<a href="" class="uk-icon-link uk-button" uk-icon="icon:mail">infos@smartechguinee.com</a>
		<a href="" class="uk-icon-link uk-button" uk-icon="icon:phone">+224 624 075 702</a>
	</div>
</nav>

<nav class="uk-navbar-container uk-light" style="background:rgba(30,135,243,1);" uk-sticky="show-on-up: true;animation: uk-animation-slide-top" uk-navbar>
	<div class="uk-navbar-center">
		<ul class="uk-navbar-nav">
            <li class="uk-active"><a href="{{url('/')}}">Home</a></li>
            <li class="uk-parent"><a href="">Services</a></li>
            <li class="uk-parent"><a href="">Realisations</a></li>
            <li class="uk-parent"><a href="">L'Agence</a></li>
            <li class="uk-parent"><a href="{{url('/contact-us')}}">Contactez Nous</a></li>
        </ul>
	</div>
</nav>

<!-- // -->
<!-- BANNIERE -->
@yield('banniere')

<!-- // -->
@yield('contenu')

<!--  -->
<!-- FOOTER -->
<footer class="uk-section uk-section-primary">
	<div class="uk-container">
		<div class="" uk-grid>
			<div class="uk-width-1-3@m">
				<h3><span uk-icon="icon:social;ratio:1.6"></span> Suivez Nous</h3>
				<div class="fb-page" data-href="https://www.facebook.com/smartechGuinee/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/smartechGuinee/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/smartechGuinee/">Smartech Guinee</a></blockquote></div>
			</div>
			<div class="uk-width-2-3@m">
				<h4><span uk-icon="icon:location;ratio:1.6"></span> Trouvez Nous facilement 
					<span><span uk-icon="icon:phone;ratio:1.6"></span> +224 624 075 702</span>
					<span><span uk-icon="icon:mail;ratio:1.6"></span> infos@smartechguinee.com</span>
				</h4>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15737.981322076543!2d-13.6739594!3d9.552499!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x76d511fe2b511dbe!2sSmartech!5e0!3m2!1sfr!2s!4v1550687702022" width="800" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</footer>
<!-- // -->
<!-- FACEBOOK SDK -->
<div id="fb-root"></div>
<script async defer src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2&appId=2005235842908607"></script>
<!-- // -->
<!-- JQUERY -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.js"></script>
<!-- ANIMEJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js"></script>
<script type="text/javascript">
	$(function() {
		// 
		anime({
			targets: '.get-started',
			translateY:10,
			duration : 1000,
			loop : true,
			easing: 'easeInOutSine'
		});
		// 
		 anime({
				targets : '.service-image',
				rotateX: 360,
				duration : 5000,
				easign : 'easeInOutSine',
				delay: 1000,
				loop : true
			});
		
		$(window).on('scroll',function () {
			if($(this).scrollTop() > 100) {
				$("#network").attr('style',"display:block");
				
			} else {
				$("#network").fadeOut();
			}
		});
		anime({
			targets: '#network',
			rotateY :360,
			translateY : 100,
			duration : 5000,
			loop : true
		});
	});
</script>
@yield('scripts')
</body>
</html>