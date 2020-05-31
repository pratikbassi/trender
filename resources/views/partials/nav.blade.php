<style>





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



