
@extends('...layouts.user_layout')
@section('title')
    <title>::Mr.Gift:: Rewards</title>
@endsection

@section('content')

    <div id="content">

        <!-- Error Page -->
        <section>
            <div class="container">
                <div class="row">
                    <h3>Terms of Conditions</h3>
                    <p>All orders placed on mrgiftuganda.com are subject to the following terms and conditions.</p>
                    <p><h5>Products:</h5>
                        Products are showcased under different category headings.
                        Product description and images are best to our knowledge.
                        We only deliver within and around Kampala. Delivery outside the central part of Kampala,
                        is subjected to delivery and insurance fees.
                    </p>
                    <p><h5>Product Unavailability:</h5>
                        If an item is out-of-stock or unavailable for any reason,
                        customers can (1) wait until the item becomes available,
                        (2) ask for an alternative product or (3) ask for full refund.
                    </p>
                    <p><h5>Pricing:</h5>
                        We offer competitive pricing. We guarantee to match any lower prices if you find anywhere else.
                    </p>
                    <p><h5>Delivery:</h5>
                        We offer door-to-door service for all deliveries within Kampala city.
                        In case of out-of-Kampala deliveries, we offer home delivery only for packages
                        that do not have perishables in them. In some cases, recipients out-of-Kampala may have to pick up gift
                        items from courier office by themselves. We notify recipients in such cases.
                    </p>
                    <p><h5>Delivery Date:</h5>
                        Customers may specify a day for deliveries. <b>Mr. Gift Uganda</b> offers
                        No specific time of a day guaranteed for any deliveries.
                        Delivery Process Note: No specific time (or time frame) guaranteed for deliveries.
                        However it is our best effort to make deliveries at recipients' convenience.
                    </p>
                    <p><h5>Delivery Exception: </h5>
                        We deliver all gift orders on the day specified by customers.
                        However (because of past experience) in some incidents which are out of our control
                        such as (not limited to) political unrest, street strike, we may postpone delivery.
                        We resume delivery soonest the possible. We notify both sender and recipient of such incidents.
                    </p>
                    <p><h5>Delivery & Recipients:</h5>
                        We ensure timely delivery. In most cases, gifts are delivered to the respective recipients. We notify the
                        sender through delivery confirmation email or text if the recipient is not available to receive the gift items.
                    </p>
                    <p><h5>Fees:</h5>
                        There is a separate fee for delivery, which covers our delivery staff and fuel surcharge.
                        Fees vary based on delivery destinations.
                        Sometimes, we do not charge any fee for delivery. It all depends on the location of the recipient.
                    </p>
                    <p><h5>Gift wrap option</h5>
                        can be added for additional cost. A good looking gift wrapper is used with custom message attached.
                    </p>
                    <p><h5>Pick Up option:</h5>
                        We have no pick up option. Delivery is our core goal. Our mission of spreading the wings of
                        Love and Care, are best portrayed through our sophisticated methods of delivery.
                        Believe us, you will like it big time.
                    </p>
                    <p><h5>Payment Processing:</h5>
                        We use Mobile Money to receive payments. Sometimes, we may opto for bank wire,
                        or any method you prefer, for as long as it delivers the payment to us.
                        Of recent, we accept bitcoins to buy gifts.
                    </p>
                    <p><h5>Website security:</h5>
                        Mr.Gift Uganda site is secured by GeoTrust providing 256 bit encryption.
                        We also use the most sophisticated high-tech cloud servers that guarantee timely security over your data.
                    </p>
                    <p><h5>Delivery Confirmation:</h5>
                        is sent in one of the following forms.
                    - Photo Confirmation: for deliveries in Kampala only, subject to recipients' permission for photograph to be taken.
                    -SMS Confirmation: for all deliveries outside Kathmandu valley.
                    </p>

                    <p><b>Special offers/ Discounts:</b> are offered periodically.</p>
                    <p><h5>Refund Policy:</h5>
                        There is a 7-day refund/replacement policy for wrong and damaged items.
                        Wrong item(s) is replaced or refunded if returned in its original box or condition.
                        There will be no refund on perishable items including cake, flower and sweets.
                        However replacement is offered on damaged cake delivery.
                    </p>
                    <p><h5>Order Cancellation:</h5>
                        If any existing order(s) is canceled by the gift senders, there will be a 10% cancellation
                        fee for orders up to Ugx 50,000, and 7% cancellation fee for orders of Ugx100,000 and above.
                    </p>
                </div>
            </div>
        </section>

        <!-- Clients img -->
    @include('user.sponsors')

    </div>
    <!-- End Content -->

@endsection