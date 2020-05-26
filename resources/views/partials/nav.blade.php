
    <nav class='navigation'>
        <div>
            @guest
                <app-nav-guest></app-nav-guest>
            @endguest
            @auth
                <app-nav-auth></app-nav-auth>
            @endauth
            </div>
        </div>
    </nav>



