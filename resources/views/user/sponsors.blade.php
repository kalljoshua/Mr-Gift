

        <!-- Clients img -->
        @if(sizeof(App\Sponsor::all())>0)
            <section class="light-gry-bg clients-img">
                <div class="container">
                    <div class="heading">
                        <h2>Our Partners</h2>
                        <hr>
                    </div>
                    <ul>
                        @foreach(App\Sponsor::all() as $sponsor)
                            <a href="{{$sponsor->website}}" target="_blank">
                                <li><img src="/images/partners/{{$sponsor->logo}}" alt="" ></li>
                            </a>
                        @endforeach
                    </ul>
                </div>
            </section>
        @endif

