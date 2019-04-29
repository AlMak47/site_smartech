@extends('home')

@section('contenu')
<div class="uk-section-default">
	<div class="uk-container">
		<h3>Add Article</h3>
		<hr class="uk-divider-small">
		{!!Form::open()!!}
		{!!Form::text('titre','',['class'=>'uk-input uk-margin-small','placeholder'=>'Titre'])!!}
		{!!Form::file('image')!!}
		{!!Form::textarea('contenu','',['class'=>''])!!}
		{!!Form::close()!!}
	</div>
</div>
@endsection
