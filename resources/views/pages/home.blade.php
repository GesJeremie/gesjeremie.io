@extends('layouts.master')

@section('content')
  <div class="header">
    <div class="header__overlay"></div>
    <div class="container +center">
      <h1 class="header__title">Full Stack Developer</h1>
      <h2 class="header__punchline">PHP, Laravel, Coffeescript, SASS <strong>enthusiast</strong>.</h2>
      <a href="#" class="header__button">Hire me</a>
    </div>
  </div>

  <div class="section">
    <h2 class="section__title">About</h2>
    <div class="container">
      <div class="row">
        <div class="grid-4">  
          <div class="picture --avatar" style="background-image: url('{{ url('images/avatar.jpg') }}')"></div>
        </div>
        <div class="grid-8">
          <p class="section__content">
            My name is Jérémie Ges, I'm a French Full Stack developer travelling around the world.<br/>
            I work for customers from different countries (France, America, Greece) and I code awesome web applications to automate their boring tasks, to understand better their customers, to improve their logistics, in short : I give super powers to businesses.<br/>
            Currently I'm living in Thessaloniki (Greece) since more than 1 year where I fell in love with the culture and the language.
            <br/>
            I'm available to be hired and work in your awesome team (I can move everywhere in the world :p).
          </p>
        </div>
      </div>
    </div>
  </div>
@stop