<style>
    * {
        box-sizing: border-box;
    }

    .columns {
        width: 100%;
        padding: 8px;
    }

    .price {
        list-style-type: none;
        border: 1px solid #eee;
        margin: 0;
        padding: 0;
        -webkit-transition: 0.3s;
        transition: 0.3s;
    }

    .price:hover {
        box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
    }

    .price .header {
        background-color: #111;
        color: white;
        font-size: 25px;
    }

    .price li {
        border-bottom: 1px solid #eee;
        padding: 20px;
        text-align: center;
    }

    .price .grey {
        background-color: #eee;
        font-size: 20px;
    }

    .button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 25px;
        text-align: center;
        text-decoration: none;
        font-size: 18px;
    }
</style>
<div class="modal fade" id="modal-bronze">
    <div class="modal-dialog" style="width: 30%;">
        <div class="modal-content">
            <div class="columns">
                <ul class="price">
                    <li class="header" style="background-color: #ED70A8;">Bronze Package</li>
                    <li class="grey"
                        style="font-size: 22px; font-weight: 700">UGX 45,000.00</li>
                    <li class="grey">5 different items each month to bring a smile to your loved
                        one's face and to relax. Spread the wings of Love with this Package.
                    </li>
                    <li class="grey">
                        <form action="{{ route('cart.store') }}" method="POST">
                            {{ csrf_field() }}
                            {{--<input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="hidden" name="price" value="{{ $product->price }}">--}}
                            <button type="submit" class="btn-round">
                                <i class="icon-basket-loaded"></i> Once Off Purchase</button>
                        </form>
                    </li>
                    <li class="grey">
                        <button type="submit" class="btn-round">
                            <i class="icon-basket-loaded"></i> Subscribe Now</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-silver">
    <div class="modal-dialog" style="width: 30%;">
        <div class="modal-content">
            <div class="columns">
                <ul class="price">
                    <li class="header" style="background-color: #8822EF;">Silver Package</li>
                    <li class="grey"
                        style="font-size: 22px; font-weight: 700">UGX 75,000.00</li>
                    <li class="grey">Amazing 7 items, uniquely packaged, and amazingly wrapped to boost your friendship.
                        Show you care with this ultimate package.
                    </li>
                    <li class="grey">
                        <a href="#" class="button" style="background-color: #8822EF;">Once Off Purchase</a></li>
                    <li class="grey">
                        <a href="#" class="button" style="background-color: #8822EF;">Subscribe Now</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-golden">
    <div class="modal-dialog" style="width: 30%;">
        <div class="modal-content">
            <div class="columns">
                <ul class="price">
                    <li class="header" style="background-color: #33CC89;">Golden Package</li>
                    <li class="grey"
                        style="font-size: 22px; font-weight: 700">UGX 125,000.00</li>
                    <li class="grey">7+ items Carefully packaged, Romantically wrapped
                        and distinguishably delivered to
                        your loved ones.
                        Punched up with Tenderness.
                    </li>
                    <li class="grey">
                        <a href="#" class="button" style="background-color: #33CC89;">Once Off Purchase</a></li>
                    <li class="grey">
                        <a href="#" class="button" style="background-color: #33CC89;">Subscribe Now</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-platinum">
    <div class="modal-dialog" style="width: 30%;">
        <div class="modal-content">
            <div class="columns">
                <ul class="price">
                    <li class="header" style="background-color: #15CDCD">Platinum Package</li>
                    <li class="grey"
                        style="font-size: 22px; font-weight: 700">UGX 150,000.00</li>
                    <li class="grey">The Ultimate Comes with Customized items with a Uniquely
                        Crafted Message of Your Choice.
                        Its BIG, BOLD & AMAZING. The secret is within!
                    </li>
                    <li class="grey">
                        <a href="#" class="button" style="background-color: #15CDCD">Once Off Purchase</a></li>
                    <li class="grey">
                        <a href="#" class="button" style="background-color: #15CDCD">Subscribe Now</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>