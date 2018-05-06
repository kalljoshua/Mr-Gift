
@extends('...layouts.user_layout')
@section('title')
    <title>::Mr.Gift:: About-Us</title>
@endsection

@section('content')

    <div id="content">

        <!-- Error Page -->
        <section>
            <div class="container">
                <div class="row">
                    <h3>About Us </h3>
                    <p>Welcome to <b>Mr. Gift</b> – one of Uganda’s most established gift delivery and online florists.
                        We strive to deliver the best quality and most beautifully wrapped hampers, gifts and
                        flowers for delivery countrywide.
                    </p>
                    <p>
                        Mr. Gift also avails the perfect chill-out kit to spread happy vibes. Surprise a friend,
                        treat yourself or custom tier for events, employees, networking, giveaways,
                        etc! LET us create the happiness movement.
                    </p>
                    <p>
                        With Mr. Gift Uganda, you can increase profits by boosting morale.
                        We help you congratulate an employee, network with current, past & future clients,
                        get welcome packs for events, giveaways or anything else, we have the answer!
                        We do custom items, and custom branding too.
                    </p>
                </div>
            </div>
        </section>

        <!-- Clients img -->
        @include('user.sponsors')
    </div>
    <!-- End Content -->

@endsection