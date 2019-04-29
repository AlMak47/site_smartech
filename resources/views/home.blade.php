@extends('layouts.app')

@section('content')
<nav>
    
        <a href="{{url('admin/about-us')}}" class="uk-button uk-button-primary">About-us</a>
        <a href="{{url('admin/about-us')}}" class="uk-button uk-button-primary">Services</a>
        <a href="{{url('admin/add-article')}}" class="uk-button uk-button-primary">Add Articles</a>
        <a href="{{url('admin/about-us')}}" class="uk-button uk-button-primary">Realisations</a>
    
</nav>
@yield('contenu')

@endsection
