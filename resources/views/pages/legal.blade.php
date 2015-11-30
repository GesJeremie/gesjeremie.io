@extends('layouts.master')

@section('title')
  <title>Mentions légales | Baby Sitting Bordeaux</title>
@stop

@section('seo')
  <meta name="description" content="Qui se cache derrière baby sitting bordeaux ? Réponse: Un petit développeur !" />
  <meta name="keywords" content="baby sitting, baby-sitting, nounous bordeaux, baby sitting bordeaux, baby sitter bordeaux, annonces baby sitting bordeaux, annonces nounous bordeaux" />

  <!-- Facebook -->
  <meta property="og:title" content="Contact | Baby Sitting Bordeaux"/>
  <meta property="og:description" content="Qui se cache derrière baby sitting bordeaux ? Réponse: Un petit développeur !" />
  <meta property="og:url" content="{{ url() }}" />
  <meta property="og:site_name" content="Baby Sitting Bordeaux"/>
  <meta property="og:image" content="{{ url('images/facebook_meta/home.png') }}"/>
@stop

@section('content')

  <div class="container">
    <div class="grid-10 centered +spacer">
      <div class="page">
        <h1 class="title --heading">Mentions Légales</h1>

        <p>
          BabySittingBordeaux.fr est un site édité par Ges Jérémie.<br/>

          Siège social : 23 allée jacques bossuet, 33470, Gujan-Mestras<br/>
          SIRET: 753 806 413 00013<br/>
          APE: 7021Z
        </p>
      </div>
    </div>
  </div>
@stop
