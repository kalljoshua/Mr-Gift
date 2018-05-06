
@extends('...layouts.user_layout')
@section('title')
    <title>::Mr.Gift:: FAQ</title>
@endsection

@section('content')

    <div id="content">

        <!-- Error Page -->
        <section>
            <div class="container">
                <p class="row">
                    <h3 class="padding-top-40 padding-bottom-40">Frequently Asked Questions (FAQ)</h3>

                    <p><h6>Can you deliver on my preferred delivery date?</h6>
                        Certainly. You can choose a delivery date on checkout page while placing an order.
                        Orders are delivered on the selected delivery day within and around Kampala.
                        Delivery date may vary to Outside Kampala locations.
                        We recommend to place orders early for timely delivery.
                    </p>
                    <p><h6>Is it possible for one to make up their own hampers,
                        as I’d like to get two hampers done, but would like to put more in the hamper than one gift.?</h6>
                        You are welcome to create more than one hamper per order or combine gifts to go into the hamper.
                        Please provide details of which gifts you want combined in the special instructions field
                        ( last step before check out) to ensure that we pack the hamper the way you want it.
                    </p>
                    <p><h6>Do You deliver every day?</h6>
                        Yes, we do deliveries each single day, unless otherwise.
                        We can deliver to either your work address, home address or anywhere that the reciient feels comfortable
                        to receive the package from. Our courier will usually phone the recipient to arrange for a convenient time.
                    </p>
                    <p><h6>I do not have exact full delivery address in Kampala for my recipient. Can you still deliver?</h6>
                        Yes. You can provide your recipient's name, area address and phone numbers.
                        We can call your recipient's for directions before sending out for delivery.
                    </p>
                    <p><h6>Last-minute order. Can you deliver today?</h6>
                        Definitely. Please see <a href="http://giftmandu.com/on_sale.php">Express-Delivery-Items</a> for
                        same-day delivery inside Kampala.
                        Orders placed by 12pm noon (Kampala' s Local Time) can be delivered the same day.
                    </p>
                    <p><h6>What if I have more questions, how can I get in touch with you?</h6>
                        Oh sure, we are socially digital.

                    <h5 class="text-info">Happy Gift-Giving!</h5>

                    <p>Call us:8am - 5pm (East African Time ) - Sunday through Friday</p>
                        <ul style="padding-left: 25px">
                            <li>+256784741443</li>
                            <li>+256705678121</li>
                        </ul>

                    <p>Find us on <a href="https://www.facebook.com/MrGiftUganda/">FACEBOOK</a> , or follow us on Twitter.</p>
                    <p>Send us an email( mrgiftuganda@gmail.com)</p>

                    <p>Or maybe join our whatsapp group by clicking <a href="https://chat.whatsapp.com/GQKls5CyMTjJSdGauGKI9O">here</a>,
                        where you find an amazing community of people that order for our packages and build each other.</p>

                    <p><h6>Happy Customers:</h6>
                    We've served thousands of customers. They are very satisfied and so kind to leave us encouraging words.</p>
                </div>
            </div>
        </section>

        <!-- Clients img -->
        @include('user.sponsors')

    </div>
    <!-- End Content -->

@endsection