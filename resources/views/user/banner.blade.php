<!-- Slid Sec -->
<section class="slid-sec" style="height: 350px;">
        <div class="container-fluid">
            <div class="row">

                <!-- Main Slider  -->
                <div class="col-md-12 no-padding" style="height: 350px;">

                    <!-- Main Slider Start -->
                    <div class="tp-banner-container">
                        <div class="tp-banner">
                            <ul>
                                <!-- SLIDE  -->
                                @foreach($banners as $banner)
                                <li data-transition="pop" data-slotamount="7" data-masterspeed="300"
                                    data-saveperformance="off" >
                                    <!-- MAIN IMAGE -->
                                    <img src="/images/advert/advert_810x400/{{$banner->image}}"  alt="slider"
                                         data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat">

                                    <!-- LAYER NR. 1 -->
                                    <div class="tp-caption sfl tp-resizeme"
                                         data-x="left" data-hoffset="160"
                                         data-y="center" data-voffset="-140"
                                         data-speed="800"
                                         data-start="800"
                                         data-easing="Power3.easeInOut"
                                         data-splitin="chars"
                                         data-splitout="none"
                                         data-elementdelay="0.03"
                                         data-endelementdelay="0.4"
                                         data-endspeed="300"
                                         style="z-index: 5; font-size:35px; font-weight:800; color:#90030e;
                                         max-width: auto; max-height: auto; white-space: nowrap;">
                                        {{$banner->offer}} </div>

                                    <!-- LAYER NR. 2 -->
                                    <div class="tp-caption sfr tp-resizeme"
                                         data-x="left" data-hoffset="240"
                                         data-y="center" data-voffset="-80"
                                         data-speed="800"
                                         data-start="1000"
                                         data-easing="Power3.easeInOut"
                                         data-splitin="chars"
                                         data-splitout="none"
                                         data-elementdelay="0.03"
                                         data-endelementdelay="0.1"
                                         data-endspeed="300"
                                         style="z-index: 6; font-size:28px; color:#90030e;
                                         font-weight:800; white-space: nowrap;">UGX {{number_format($banner->price)}}</div>


                                    <!-- LAYER NR. 4 -->
                                    <div class="tp-caption lfb tp-resizeme scroll"
                                         data-x="left" data-hoffset="280"
                                         data-y="center" data-voffset="-10"
                                         data-speed="800"
                                         data-start="1300"
                                         data-easing="Power3.easeInOut"
                                         data-elementdelay="0.1"
                                         data-endelementdelay="0.1"
                                         data-endspeed="300"
                                         data-scrolloffset="0"
                                         style="z-index: 8;">
                                            <a href="{{route('product.details',['product_id' => $banner->product->id])}}" class="btn-round big" style="background-color:#90030e">
                                                Shop Now</a>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

             </div>
        </div>
</section>