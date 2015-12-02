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
  
  {{-- About --}}
  <div class="section">
    <h2 class="section__title">About</h2>
    <div class="container">
      <div class="row">
        <div class="grid-4">  
          <div class="picture --avatar" style="background-image: url('{{ url('images/avatar.jpg') }}')"></div>
        </div>
        <div class="grid-8">
          <p class="section__content">
            My name is Jérémie Ges, I'm a <strong>French Full Stack developer</strong> travelling around the world.<br/>
            I work for customers from <strong>different countries</strong> (France, America, Greece) and I code awesome web applications to automate their boring tasks, to understand better their customers, to improve their logistics, in short : I give <strong>super powers</strong> to businesses.<br/>
            Currently I'm living in Thessaloniki (Greece) since more than 1 year where I fell in love with the culture and the language.
          </p>
          <div class="alert --with-icon">
            <i class="fa fa-globe"></i> I'm available to be hired and work in your awesome team.
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>

  {{-- Skills --}}
  <div class="section --grey">
    <h2 class="section__title">Skills</h2>  
    <div class="container">
      <div class="row">
        <div class="grid-4">
          <ul class="list">
            <li class="list__title">Front</li>
            <li>Html / Blade / Haml / Erb</li>
            <li>Css / Sass / Csstyle.io / Gridle.org / Bootstrap</li>
            <li>Bower</li>
            <li>Brunch.io (In my opinion better than Gulp / Grunt)</li>
            <li>Javascript / Coffeescript / Qunit / jQuery / Gothamjs.io</li>
          </ul>
        </div>
        <div class="grid-4">
          <ul class="list">
            <li class="list__title">Back</li>
            <li>PHP</li>
            <li>Laravel 4.2 and 5.1 / Codeigniter / PhalconPHP</li>
            <li>Vagrant / Homestead</li>
            <li>Composer</li>
            <li>TDD (phpunit)</li>
            <li>Deployer / Capistrano</li>
            <li>Mysql</li>
          </ul>
        </div>
        
        <div class="grid-4">
          <ul class="list">
            <li class="list__title">Toolkit</li>
            <li>Git / Github / Bitbucket</li>
            <li>Digital Ocean</li>
            <li>Stripe</li>
            <li>Sequel Pro</li>
            <li>Sublime text</li>
            <li>Command Line / Iterm</li>
            <li>Trello</li>
          </ul>
        </div>
      </div>
      
      <div class="clear"></div>
      <div class="+spacer"></div>

      <div class="alert --with-icon"><i class="fa fa-info"></i> I listed here the technologies I use in my <strong>day-to-day life</strong>. In fact I already worked with some others stacks like <strong>Ruby / Rails</strong> and <strong>Nodejs / Sails</strong>.</div>
      
      <div class="+spacer-medium +center">
        <a target="_blank" href="http://www.codeivate.com/users/gesjeremie" class="button">Want to see some nerd stats ?</a><br/>
        <a target="_blank" class="button --link" href="https://github.com/GesJeremie">Or see what I do on <i class="fa fa-github"></i> Github</a>
      </div>

    </div>
  </div>

  {{-- Experiences --}}
  <div class="section">
    <h2 class="section__title">Experiences</h2>

    Baby Sitting Bordeaux (Bordeaux, France)
    Founder - Back-end / Front-end Developer / Marketing / Support
    November 2015 - Present

    Virtual Safety Inc & Gotham Partners LLC (Baton Rouge, Louisiana)
    Front-End Developer
    Feb 2014 - Present

    La Petite Box SAS (Bordeaux, France)
    Co-Founder -  Front-end Developer
    Sept 2014 - Present

    Agence Volt (Bordeaux, France)
    Co-Founder - Back-end / Front-end Developer
    Nov 2012 - Nov 2013

    Alcool Arcachon (Bordeaux, France)
    Co-Founder - Back-end / Front-end Developer / Delivery
    May 2013 - Sept 2013
    
    Freelance Developer
    2007 - Present 
    


  </div>

  {{-- Sideprojects --}}
  <div class="section">
    <h2 class="section__title">Side Projects</h2>
  </div>


  {{-- Hobbies --}}
  <div class="section">
    <h2 class="section__title">Hobbies</h2>
  </div>

  {{-- Contact --}}
  <div class="section">
    <h2 class="section__title">Contact</h2>
  </div>

  <div class="+spacer-large"></div>

@stop