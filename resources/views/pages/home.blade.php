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
            I work for customers from <strong>different countries</strong> (France, America, Greece) and I code awesome web applications to automate their boring tasks, so they can better understand their customers and improve their logistics. In short : <strong>I turbo charge businesses</strong> and give them a <strong>technological</strong> edge over their competition. <br/>
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

      <div class="alert --with-icon"><i class="fa fa-info"></i> Here are the technologies I use in my day-to-day life. I’ve also worked  with some others stacks like Ruby / Rails and Nodejs / Sails.</div>
      
      <div class="+spacer-medium +center">
        <a target="_blank" href="http://www.codeivate.com/users/gesjeremie" class="button">Want to see some nerd stats ?</a><br/>
        <a target="_blank" class="button --link" href="https://github.com/GesJeremie">Or maybe my <i class="fa fa-github"></i> Github</a>
      </div>

    </div>
  </div>

  {{-- Experiences --}}
  <div class="section">
    <h2 class="section__title">Experiences</h2>
    <div class="+spacer"></div>
    <div class="container">
      <div>
        <h3 class="section__company">Baby Sitting Bordeaux (Bordeaux, France)</h3>
        <h4 class="section__role">Founder - Full Stack Developer / Marketing / Support</h4>
        <h5 class="section__date">November 2015 - Present</h5>
        <p class="section__content --experiences">
          Baby Sitting Bordeaux is  an application to <strong>create connections between families and babysitters</strong> in the city of Bordeaux, France.<br/>

          I used Laravel 5.1 and Mysql for the backend. Everything is <strong>well tested</strong> with PHPUnit. I created some PHPUnit asserts connected to the API of mailtrap.io so I can easily test that emails are being sent correctly <code>(AssertEmailIsSent(), AssertEmailSubjectContains(), AssertEmailNameSenderEquals(), ...)</code>.<br/>

          The CSS part is coded with a <strong>modular Sass structure</strong> and uses <strong>csstyle.io</strong> (It looks like BEM without the pain). For the javascript section, I used <strong>coffeescript</strong> coupled with Gothamjs.io (a side project). The whole front-end is compiled by <strong>brunch.io</strong> (similar to Grunt / Gulp) with <strong>an average time of 100ms</strong>.<br/>

          The application is proudly hosted on <strong>DigitalOcean</strong> and can be deployed with <strong>zero-downtime</strong> thanks to <strong>deployer</strong> (similar to capistrano for PHP).<br/>

          The whole project (Development / Marketing / Support) is <strong>organised with Trello</strong> and <strong>versioned on Bitbucket</strong>.<br/>
        </p>

        <div class="+spacer-large"></div>
        
        <h3 class="section__company">Virtual Safety Inc & Gotham Partners LLC (Baton Rouge, Louisiana)</h3>
        <h4 class="section__role">Remote Employee - Front-End Developer</h4>
        <h5 class="section__date">Feb 2014 - Present<h5>

        <p class="section__content --experiences">
          Front-end developer in a team of four Ruby on Rails developers. We created three full stack ruby SaaS applications and handled everything from design and planning to deployment.<br/>

          I personally dealt with the schema of the front-end (Coffeescript / Sass) and wrote most of the front-end code. Had to overcome obstacles such as constantly evolving software requirements based on user’s needs while keeping the code base clean and maintainable.<br/>
        </p>

        <div class="+spacer-large"></div>
        
        <p class="section__content">
          <strong>La Petite Box SAS (Bordeaux, France)</strong><br/>
          Co-Founder -  Front-end Developer<br/>
          Sept 2014 - Present<br/>
          
          Created a monthly delivery box company with two other associates and one graphic artist. I was the front-end developer, I designed the UI/UX for the interface. I worked with a back-end developer to build and ship the application in 2 weeks.<br/>

          I managed the company for 2 months. My responsibilities included:<br/>
          - Dealing with our partners to get low prices on our orders<br/>
          - Manage the stock<br/>
          - Customer delivery logistics<br/>
          - Preparation of the boxes<br/>
        </p>



        <div class="+spacer"></div>
        
        <p class="section__content">
          Agence Volt (Bordeaux, France)<br/>
          Co-Founder - Full Stack Developer<br/>
          Nov 2012 - Nov 2013<br/>
          
          Created a code outsourcing company with one other associate. I created the back-end and the front-end for three big web-projects that were made within one year and stayed scalable despite lots of changes to user stories.<br/>
        </p>

        <div class="+spacer"></div>
        
        <p class="section__content">
          Alcool Arcachon (Bordeaux, France)<br/>
          Co-Founder - Full Stack Developer / Delivery<br/>
          May 2013 - Sept 2013<br/>
          
          In my hometown it was legal to sell alcohol late into the night, but most stores did not stay open late. There was a need  that no one was servicing. I teamed up with  one other associate and created a web based alcohol delivery service. <br/>

          We leveraged the power of social media in combination with an easy to use web interface that made ordering alcohol online easier than ordering a pizza. <br/>

          We started with a Minimum Valuable Product and after seeing success we began growing the usability of the ordering platform. <br/>

           Aside from improving the website, we created an App that customers could use as well to order from their phones. <br/>

           The company became very profitable very quickly. We however, found it difficult to grow outside of the local area for legal reasons. After overcoming all the technological challenges we started to grow bored with the business and ultimately sold the company for a nice profit. <br/>
        </p>

        <div class="+spacer"></div>
        
        <p class="section__content">
          Freelance Developer<br/>
          2007 - Present<br/>

          I began improving my workflow by moving to an Object-Oriented approach with SlimFramework. <br/>

          I pushed forward with CodeIgniter and began to improve the Framework with Observers Pattern, auto-migrations, and other tools that help scale high traffic applications. <br/>

          I quickly reached the limits of CodeIgniter and discovered the world of Ruby on Rails and later Laravel. 
        </p>

      </div>
    </div>



    


  </div>

  {{-- Open Source --}}
  <div class="section --grey">
    <h2 class="section__title">Open Source</h2>
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