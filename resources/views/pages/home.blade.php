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
            My name is Jérémie Ges, I'm a French <strong>Full Stack developer</strong> travelling around the world.<br/>
            I work for customers from <strong>different countries</strong> (France, America, Greece) and I code awesome web applications to automate their boring tasks, so they can better understand their customers and improve their logistics. In short : I turbo charge businesses and give them a technological edge over their competition. <br/>
            I’ve been living in  Thessaloniki (Greece) for over 1 year and have fallen in love with the culture and the Greek language.
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
            <li>PHPUnit</li>
            <li>Vagrant / Homestead</li>
            <li>Composer</li>
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
            <li>Mailtrap.io</li>
            <li>Mailgun</li>
          </ul>
        </div>
      </div>
      
      <div class="clear"></div>
      <div class="+spacer"></div>

      <div class="alert --with-icon"><i class="fa fa-info"></i> Here are the technologies I use in my day-to-day life. I’ve also worked  with some others stacks like Ruby on Rails and Nodejs / Sails.</div>
      
      <div class="+spacer-medium +center">
        <a target="_blank" href="http://www.codeivate.com/users/gesjeremie" class="button">Want to see some nerd stats ?</a><br/>
        <a target="_blank" class="button --link" href="https://github.com/GesJeremie">Or maybe my <i class="fa fa-github"></i> Github</a>
      </div>

    </div>
  </div>

  {{-- Experiences --}}
  <div class="section">
    <h2 class="section__title">Experiences</h2>
      
    <div class="container">
      <div class="section__content">
        <strong>Baby Sitting Bordeaux (Bordeaux, France)</strong><br/>
        Founder - Full Stack Developer / Marketing / Support<br/>
        
        Baby Sitting Bordeaux is  an application to create connections between families and babysitters in the city of Bordeaux, France.<br/>

        I used Laravel 5.1 and Mysql for the backend. Everything is well tested with PHPUnit. I created some PHPUnit asserts connected to the API of mailtrap.io so I can easily  test that emails are being sent correctly (AssertEmailIsSent(), AssertEmailSubjectContains(), AssertEmailNameSenderEquals(), ...).<br/>

        The CSS part is coded with a modular Sass structure. and uses Csstyle.io (It looks like BEM without the pain). For the javascript section, I used coffeescript coupled with Gothamjs.io (a side project). The whole front-end is compiled by brunch.io (similar to Grunt / Gulp) with an average time of 100ms.<br/>

        The application is proudly hosted on DigitalOcean and can be deployed with zero-downtime thanks to deployer (similar to capistrano).<br/>

        The whole project (Development / Marketing / Support) is organised with Trello and versioned on Bitbucket.<br/>

        <div class="+spacer"></div>

        <strong>Virtual Safety Inc & Gotham Partners LLC (Baton Rouge, Louisiana)</strong><br/>
        Remote Employee - Front-End Developer<br/>
        Feb 2014 - Present<br/>

        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pretium commodo massa sed lobortis. Morbi nec risus nunc. Quisque molestie lectus vitae commodo interdum. Pellentesque sodales tincidunt neque, sit amet facilisis nisl aliquet id. Nam efficitur nisi ut eleifend placerat. Nulla at eleifend felis, nec pharetra dui. Donec dapibus lorem sed dapibus congue. Donec interdum odio eu dolor pharetra viverra. Nam porta dui nec porta egestas. Vivamus volutpat mauris a euismod pretium. Fusce ac lacus est. Proin eleifend nisl posuere accumsan volutpat. Sed mollis at mi eget faucibus. Cras a purus lacus. Donec laoreet laoreet massa sit amet vulputate.

        <div class="+spacer"></div>

        <strong>La Petite Box SAS (Bordeaux, France)</strong><br/>
        Co-Founder -  Front-end Developer<br/>
        Sept 2014 - Present<br/>
        
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pretium commodo massa sed lobortis. Morbi nec risus nunc. Quisque molestie lectus vitae commodo interdum. Pellentesque sodales tincidunt neque, sit amet facilisis nisl aliquet id. Nam efficitur nisi ut eleifend placerat. Nulla at eleifend felis, nec pharetra dui. Donec dapibus lorem sed dapibus congue. Donec interdum odio eu dolor pharetra viverra. Nam porta dui nec porta egestas. Vivamus volutpat mauris a euismod pretium. Fusce ac lacus est. Proin eleifend nisl posuere accumsan volutpat. Sed mollis at mi eget faucibus. Cras a purus lacus. Donec laoreet laoreet massa sit amet vulputate.



        <div class="+spacer"></div>

        Agence Volt (Bordeaux, France)<br/>
        Co-Founder - Full Stack Developer<br/>
        Nov 2012 - Nov 2013<br/>
        
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pretium commodo massa sed lobortis. Morbi nec risus nunc. Quisque molestie lectus vitae commodo interdum. Pellentesque sodales tincidunt neque, sit amet facilisis nisl aliquet id. Nam efficitur nisi ut eleifend placerat. Nulla at eleifend felis, nec pharetra dui. Donec dapibus lorem sed dapibus congue. Donec interdum odio eu dolor pharetra viverra. Nam porta dui nec porta egestas. Vivamus volutpat mauris a euismod pretium. Fusce ac lacus est. Proin eleifend nisl posuere accumsan volutpat. Sed mollis at mi eget faucibus. Cras a purus lacus. Donec laoreet laoreet massa sit amet vulputate.


        <div class="+spacer"></div>

        Alcool Arcachon (Bordeaux, France)<br/>
        Co-Founder - Full Stack Developer / Delivery<br/>
        May 2013 - Sept 2013<br/>
        
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pretium commodo massa sed lobortis. Morbi nec risus nunc. Quisque molestie lectus vitae commodo interdum. Pellentesque sodales tincidunt neque, sit amet facilisis nisl aliquet id. Nam efficitur nisi ut eleifend placerat. Nulla at eleifend felis, nec pharetra dui. Donec dapibus lorem sed dapibus congue. Donec interdum odio eu dolor pharetra viverra. Nam porta dui nec porta egestas. Vivamus volutpat mauris a euismod pretium. Fusce ac lacus est. Proin eleifend nisl posuere accumsan volutpat. Sed mollis at mi eget faucibus. Cras a purus lacus. Donec laoreet laoreet massa sit amet vulputate.


        <div class="+spacer"></div>

        Freelance Developer<br/>
        2007 - Present<br/>

        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pretium commodo massa sed lobortis. Morbi nec risus nunc. Quisque molestie lectus vitae commodo interdum. Pellentesque sodales tincidunt neque, sit amet facilisis nisl aliquet id. Nam efficitur nisi ut eleifend placerat. Nulla at eleifend felis, nec pharetra dui. Donec dapibus lorem sed dapibus congue. Donec interdum odio eu dolor pharetra viverra. Nam porta dui nec porta egestas. Vivamus volutpat mauris a euismod pretium. Fusce ac lacus est. Proin eleifend nisl posuere accumsan volutpat. Sed mollis at mi eget faucibus. Cras a purus lacus. Donec laoreet laoreet massa sit amet vulputate.


      </div>
    </div>



    


  </div>

  {{-- Sideprojects --}}
  <div class="section --grey">
    <h2 class="section__title">Side Projects</h2>
  </div>


  {{-- Hobbies --}}
  <div class="section">
    <h2 class="section__title">Hobbies</h2>
  </div>

  {{-- Contact --}}
  <div class="section --grey">
    <h2 class="section__title">Contact</h2>
  </div>

  <div class="+spacer-large"></div>

@stop