<div class="hide-xs">    
    <div class="menu">
        <a href="{{ url() }}">Accueil</a>
        <a href="{{ action('Pages@getContact') }}">Contact</a>
        <a href="{{ action('Pages@getLegal') }}">Mentions Légales</a>
        <a target="_blank" href="{{ url('https://www.facebook.com/Baby-Sitting-Bordeaux-900752106675843/') }}">Facebook</a>
    </div>
</div>

<div class="hide show-xs">
    <div class="menu --mobile">
        <a href="#" data-jq-dropdown="#dropdown-mobile"><i class="fa fa-bars"></i></a>
    </div>

    <!-- Dropdowns -->
    <div id="dropdown-mobile" class="jq-dropdown jq-dropdown-tip">
        <ul class="jq-dropdown-menu">
            <li><a href="{{ url() }}">Accueil</a></li>
            <li><a href="{{ action('Pages@getContact') }}">Contact</a></li>
            <li> <a href="{{ action('Pages@getLegal') }}">Mentions Légales</a></li>
            <li class="jq-dropdown-divider"></li>
            <li><a target="_blank" href="{{ url('https://www.facebook.com/Baby-Sitting-Bordeaux-900752106675843/') }}">Facebook</a></li>
        </ul>
    </div>
</div>