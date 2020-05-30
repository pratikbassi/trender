<style>
.app-nav-auth {
    background: #8d6b94;
    display: grid;
    grid-template-areas: "home space dash new logout";
    grid-template-rows: 10vh ;
    grid-template-columns: 20vw 50vw auto auto auto   ;
    justify-items: stretch;
}

.nav-home {
    grid-area: home;
    place-self: center;
}

.nav-dash {
    grid-area: dash;
    place-self: center;
}

.nav-new {
    grid-area: new;
    place-self: center;
}

.nav-logout {
    grid-area: logout;
    place-self: center;
}

.home-link {
    place-self: center;
    color: #fcfff7;
}

.link {
    place-self: center;
    color: #fcfff7;
    padding-right: 1vw;
}

@media only screen and (max-width : 515px) {
    .app-nav-auth {
        background: #8d6b94;
        display: grid;
        grid-template-areas:
        "home"
        "dash"
        "new"
        "logout"
        ;
        grid-template-rows: auto ;
        grid-template-columns: auto   ;
        justify-items: stretch;
    }

}

@media only screen and (max-width : 756px) and (min-width: 515px) {
    .app-nav-auth {
        background: #8d6b94;
        display: grid;
        grid-template-areas:
        "home space dash logout"
        "home space new logout"
        ;
        grid-template-rows: 5vh 5vh;
        grid-template-columns: 20vw 50vw 15vw 15vw   ;
        justify-items: stretch;
    }

}





</style>

    <nav class='navigation'>
        <div>
            @guest
                <guest-bar></guest-bar>
            @endguest
            @auth
                <nav-bar></nav-bar>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endauth
        </div>
    </nav>



