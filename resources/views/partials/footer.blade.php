<footer>
    <!--Footer menu-->
    <div class="bgimage">
        <div class="container">
            <div class="row p-0">
                <div class="col-2">
                    <ul class="mt-3">
                        <span class="title">DC COMICS</span>
                        <li class="list-item">Characters</li>
                        <li class="list-item">Comics</li>
                        <li class="list-item">Movies</li>
                        <li class="list-item">TV</li>
                        <li class="list-item">Games</li>
                        <li class="list-item">Videos</li>
                        <li class="list-item">News</li>
                    </ul>
                    <ul class="mt-3">
                        <span class="title">SHOP</span>
                        <li class="list-item">Characters</li>
                        <li class="list-item">Comics</li>
                    </ul>
                </div>
                <div class="col-2">
                    <ul class="mt-3">
                        <span class="title">DC</span>
                        <li class="list-item">Terms of use</li>
                        <li class="list-item">Privacy policy (new)</li>
                        <li class="list-item">Ad choices</li>
                        <li class="list-item">Advertising</li>
                        <li class="list-item">Jobs</li>
                        <li class="list-item">Subscriptions</li>
                        <li class="list-item">Talent Workshop</li>
                        <li class="list-item">CPSC Certificates</li>
                        <li class="list-item">Ratings</li>
                        <li class="list-item">Shop Help</li>
                        <li class="list-item">Contatc us</li>
                    </ul>

                </div>
                <div class="col-2">
                    <ul class="mt-3">
                        <span class="title">SITES</span>
                        <li class="list-item">DC</li>
                        <li class="list-item">MAD Magazine</li>
                        <li class="list-item">DC Kids</li>
                        <li class="list-item">DC Universe</li>
                        <li class="list-item">DC Power Visa</li>
                    </ul>

                </div>

                <div class="col-6 dclogo">

                </div>
            </div>
        </div>

    </div>
    <div class="wrapper">
        <div class="container p-3">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-dark mybtn">SIGN-UP NOW!</button>
                </div>
                <div class="col-6 d-flex">
                    <h4 class="textblue text-center">FOLLOW US</h4>
                    @foreach(config("data.logos") as $logo)

                    <img class="ms-2" src="{{$logo}}" alt="">
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</footer>