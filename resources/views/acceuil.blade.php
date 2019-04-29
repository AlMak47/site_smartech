@extends('template')
@section('title')
Home
@endsection

@section('banniere')
<div uk-slideshow="min-height:300;max-height:500">
    <ul class="uk-slideshow-items">
        <li>
            <img src="{{asset('img/background.jpeg')}}" alt="" uk-cover>
            <div class="uk-position-center uk-overlay uk-overlay-primary uk-position-small">
            	<h2 class="uk-h1">Une Agence digitale faite pour vous</h2>
                <p class="uk-text-lead uk-text-center">Nous allions Technologie et Savoir Faire</p>
                <!-- <hr class="uk-divider-small"> -->
                <div class="uk-text-center"><a class="uk-icon-button get-started" id="get-started" uk-icon="icon:arrow-down;ratio:2"></a></div>
            </div>
        </li>
    </ul>
</div>
@endsection

@section('contenu')
<div class="uk-section uk-section-muted" id="about-us">
	<div class="uk-container">
		<h1 class="uk-h3 uk-text-danger uk-text-center" uk-scrollspy="cls:uk-animation-slide-left;delay:900">Smartech est né en 2017</h1>
		<h2 class="uk-h2 uk-text-center" uk-scrollspy="cls:uk-animation-slide-right;delay:1000">
			Agence web , nous vous accompagnons dans la creation de site internet : Etude , Conception , Developpement , Design , SEO.
			Notre agence est capable de repondre a tous vos besoins et d'elaborer une veritable strategie digitale.
		</h2>
	</div>
</div>
<!-- SERVICES -->
<div class="uk-section uk-section-default">
	<div class="uk-container">
		<div class="uk-child-width-1-2@m" uk-grid>
			<div>
				<h3>Conception Web</h3>
				<p class="uk-text-justify">
					Vous etes une entreprise et recherchez un pure player pour vous epauler et developper votre pole 
					interactif ?
				</p>
				<p class="uk-text-justify">
					Vous recherchez une agence capable de vous accompagner sur toutes les technologies web ?
					Nous mettons en place la strategie digitale sur mesure qui repond a votre problematique et vous garantit une performance optimale.
				</p>
				<a href="" class="uk-button uk-button-default uk-border-rounded">Demandez un devis<span uk-icon="icon:arrow-right;"></span></a>
			</div>
			<div>
				<img src="{{asset('img/web.jpg')}}" class="service-image uk-width-large uk-border-rounded uk-box-shadow-small" id='ser-img1' uk-img>
			</div>
		</div>
		<div class="uk-child-width-1-2@m" uk-grid>

			<div>
				<img src="{{asset('img/digital-marketing.png')}}" class="service-image uk-width-large uk-border-rounded uk-box-shadow-small" id="ser-img2" uk-img>
			</div>
			<div>
				<h3>Marketing digital</h3>
				<p class="uk-text-justify">
					Connaitre votre marche et les tendances du moment . Etre conseille par des experts en communication web et etre
					epaule par des graphistes dedies pour votre projet. De l'expression de vos besoins aux conseils permettant de mieux
					exprimer votre identite visuelle, SMARTECH vous accompagne et vous conseille.
				</p>
				<a href="" class="uk-button uk-button-default uk-border-rounded">Demandez un devis <span uk-icon="icon:arrow-right;"></span></a>
			</div>
		</div>
	</div>
</div>
<!-- // -->
<!-- <hr class="uk-divider-small uk-text-center"> -->
<!-- <div class="uk-section uk-section-muted">
	<div class="uk-container">
		<h2>Dernieres Realisations</h2> -->
		<!-- <div class="uk-child-width-1-3@m" uk-grid>
			<div>
				<div class="uk-inline uk-light">
		            <img src="{{asset('realisations/djigui.png')}}" alt="">
		            <div class="uk-overlay-primary uk-position-cover">
		                <div class="uk-position-center">
		                    <span uk-icon="icon:link;ratio:2">DjiguiProd</span>
		                </div>
		            </div>
		        </div>
			</div>
			<div>
				<div class="uk-inline uk-light">
		            <img src="{{asset('realisations/simplex.png')}}" alt="">
		            <div class="uk-overlay-primary uk-position-cover">
		                <div class="uk-position-center">
		                    <span uk-icon="icon:link;ratio:2">Simplex</span>
		                </div>
		            </div>
		        </div>
			</div>
			<div>
				<div class="uk-inline uk-light">
		            <img src="{{asset('realisations/aid.png')}}" alt="">
		            <div class="uk-overlay-primary uk-position-cover">
		                <div class="uk-position-center">
		                    <span uk-icon="icon:link;ratio:2">Ong Aid</span>
		                </div>
		            </div>
		        </div>
			</div>
		</div> -->
		<!-- // -->
		<!-- <div uk-slider="autoplay:true;autoplay-interval: 2000;finite:true">
		    <ul class="uk-slider-items uk-child-width-1-3@s uk-child-width-1-4@ uk-grid">
		        <li>
		            <img src="{{asset('realisations/djigui.png')}}" alt="">
		        </li>
		        <li>
		            <img src="{{asset('realisations/simplex.png')}}" alt="">
		        </li>
		        <li>
		            <img src="{{asset('realisations/aid.png')}}" alt="">
		        </li>
		        <li>
		            <img src="{{asset('realisations/pacifique.png')}}" alt="">
		        </li>
		    </ul>
		</div> -->
		<!-- // -->
	<!-- </div> -->
<!-- </div> -->
<!-- PARALLAXE -->
<div class="uk-height-medium uk-background-cover uk-light uk-flex" uk-parallax="bgy: -200" style="background-image: url({{asset('img/parallaxe.jpg')}});">

    <div class="uk-width-1-1@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
	    <h1 class="uk-h2">VOTRE PROJET DE CRÉATION DE SITE WEB COMMENCE PAR UNE IDÉE… NOUS LUI DONNERONS VIE EN ALLIANT LA TECHNOLOGIE AU SAVOIR FAIRE</h1>
    	<a href="" class="uk-button uk-button-primary uk-padding-small uk-border-rounded">Contactez Nous Maintenant</a>
    </div>
</div>
<!-- /// -->
<!-- ARTICLES -->
<div class="uk-section uk-section-default">
	<div class="uk-container">
		<h3>Retrouvez les dernieres actualites de notre agence et du domaine digital</h3>
		<hr class="uk-divider-small">
		<div class="uk-child-width-1-4@m" uk-grid>
			@for($i=0;$i < 4 ; $i++)
			<div>

				<div class="uk-card uk-card-default">
		            <div class="uk-card-media-top">
		                <img src="{{asset('img/news.jpg')}}" alt="">
		            </div>
		            <div class="uk-card-body">
		                <h3 class="uk-card-title">Media Top</h3>
		                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
		                <a href="" class="uk-icon-link" uk-icon="icon:arrow-right">Details</a>
		            </div>			
				</div>

		</div>
		@endfor
	</div>
	<div class="uk-text-center uk-margin-small"><a href="" class="uk-icon-link" uk-icon="icon:more-vertical">Plus d'articles</a></div>
</div>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
	$(function () {
		console.log($("#about-us").scrollTop());
		$("#get-started").on('click',function () {
			$("html,body").animate({
				scrollTop : 700
			},1000);
		});

		
	});
</script>
@endsection