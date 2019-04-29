@extends('template')
@section('title')
Home
@endsection

@section('banniere')
<div class="uk-container">
	<ul class="uk-breadcrumb">
	    <li><a href="" class="uk-icon-link" uk-icon="icon:home"></a></li>
	    <li><span>Contactez Nous</span></li>
	</ul>
</div>
@endsection

@section('contenu')

<div class="uk-section uk-section-default">
	<div class="uk-container">
		<div uk-grid>	
			<div class="uk-width-3-4@m">
				<h3>Formulaire de contact</h3>
				{!!Form::open()!!}
				{!!Form::text('nom','',['class'=>'uk-input uk-margin-small','placeholder'=>'Nom Complet'])!!}
				{!!Form::email('email','',['class'=>'uk-input uk-margin-small','placeholder'=>'E-mail (ex:xyz@gmail.com)'])!!}
				{!!Form::text('phone','',['class'=>'uk-input uk-margin-small','placeholder'=>'Telephone'])!!}
				{!!Form::text('societe','',['class'=>'uk-input uk-margin-small','placeholder'=>'Societe'])!!}
				{!!Form::textarea('message','',['class'=>'uk-textarea uk-margin-small','placeholder'=>'Parlez nous de votre projet'])!!}
				{!!Form::submit('Envoyer',['class'=>'uk-button uk-button-primary'])!!}
				{!!Form::close()!!}
			</div>
			<div class="uk-width-1-4@m">ll</div>
		</div>
	</div>
</div>


@endsection

