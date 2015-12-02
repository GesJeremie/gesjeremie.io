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
  <div class="section">
    <h2 class="section__title">Skills</h2>  
    
    Front:
      - Html / Blade / Haml / Erb
      - Css / Sass / Csstyle.io / Gridle.org / Bootstrap
      - Bower
      - Brunch.io (In my opinion better than Gulp / Grunt)
      - Javascript / Coffeescript / Qunit / jQuery

    Back:
      - PHP
      - Frameworks: Laravel 4.2 and 5.1 / Codeigniter / PhalconPHP
      - Vagrant / Homestead
      - Composer
      - TDD (phpunit)
      - Deployer / Capistrano
      - Mysql

    Toolkit:
      - Git / Github / Bitbucket
      - Digital Ocean
      - Stripe
      - Sequel Pro
      - Sublime text
      - Command Line / Iterm
      - Trello

    I listed here the technologies I use in my day-to-day life. In fact I already worked with the Ruby / Rails and Nodejs / Sails stacks.
  
    Want to see nerd stats ? http://www.codeivate.com/users/gesjeremie
  </div>

  {{-- Experiences --}}
  <div class="section">
    <h2 class="section__title">Experiences</h2>
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