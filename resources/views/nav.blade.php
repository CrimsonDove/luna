<?php
    if( UserService::isLoggedIn() == false ){
?>
    <div id="nav" style="margin-bottom: 1em;">
        <a href="{{ URL::to('/') }}" class="button">home</a>
        <a href="{{ URL::to('login') }}" class="button">Login</a>
        <a href="{{ URL::to('register') }}" class="button">Register</a>
        <a href="{{ URL::to('drop') }}" class="button">drop service</a>
    </div>
<?php
    } else {
?>
    <div id="nav" style="margin-bottom: 1em;">
        <a href="{{ URL::to('/') }}" class="button">home</a>
        <a href="{{ URL::to('logoff') }}" class="button">log off</a>
    </div>
<?php
    }
?>