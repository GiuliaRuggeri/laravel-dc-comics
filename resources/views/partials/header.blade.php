<header>
    <nav class="navbar p-0">
        <div class="container">
            <a href="/">
             <img src="../assets/img/dc-logo.png" class="navbar-brand logo">
            </a>
            <form class="d-flex" role="search">
                <ul class="navbar-nav d-flex flex-row">
                    @foreach (config("data.links") as $link)
                     <li class="nav-item ms-2 link">
                        <a class=" nav-link active " aria-current="page" href="{{$link['url']}}">{{ $link['text'] }}</a>
                    </li>

                        
                    @endforeach
                   
                </ul>
            </form>
        </div>
    </nav>
</header>