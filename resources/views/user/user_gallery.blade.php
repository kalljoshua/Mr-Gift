
@extends('...layouts.user_layout')
@section('title')
    <title>::Mr.Gift:: Gallery</title>
@endsection

<style>

    .filter-button
    {
        font-size: 18px;
        border: 1px solid #42B32F;
        border-radius: 5px;
        text-align: center;
        color: #42B32F;
        margin-bottom: 30px;

    }
    .filter-button:hover
    {
        font-size: 18px;
        border: 1px solid #42B32F;
        border-radius: 5px;
        text-align: center;
        color: #ffffff;
        background-color: #42B32F;

    }
    .btn-default:active .filter-button:active
    {
        background-color: #42B32F;
        color: white;
    }

    .gallery_product
    {
        margin-bottom: 30px;
    }

</style>


@section('content')

    <!-- Content -->
    <div id="content">
        <!-- Linking -->
        <div class="linking">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Gallery</li>
                </ol>
            </div>
        </div>

        <section class="featur-tabs padding-top-60 padding-bottom-30">
        <div class="container">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-pills margin-bottom-40" role="tablist">
                <li role="presentation" class="active">
                    <a href="index.html#featur" aria-controls="featur" role="tab" data-toggle="tab">Photos</a></li>
                <li role="presentation">
                    <a href="index.html#special" aria-controls="special" role="tab" data-toggle="tab">Videos</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Featured -->
                <div role="tabpanel" class="tab-pane active fade in" id="featur">
                    @foreach($gallery as $item)
                        @if($item->image != "no image")
                        <!-- Product -->
                        <div class="gallery_product col-sm-4 col-xs-6 col-md-3 col-lg-3 filter hdpe">
                            <a class="thumbnail fancybox" rel="ligthbox"
                               href="/images/gallery/user_400x400/{{$item->image}}">
                                <img src="/images/gallery/user_400x400/{{$item->image}}"
                                     class="img-responsive">
                                <div class='text-left'>
                                    <small class='text-muted'>{{$item->title}}</small>
                                </div> <!-- text-right / end -->
                            </a>
                        </div>
                        @endif
                        @endforeach
                </div>

                <!-- Special -->
                <div role="tabpanel" class="tab-pane fade" id="special">
                    <!-- Items Slider -->
                @foreach($gallery as $item)
                    @if($item->image == "no image")
                        <!-- Product -->
                            <div class="gallery_product col-lg-3 col-md-3 col-sm-4 col-xs-6 filter sprinkle">
                                <iframe width="315" height="315"
                                        src="{{$item->video_link}}">
                                </iframe>
                            </div>
                        @endif
                    @endforeach
                </div>

                <!-- on sale -->

            </div>
        </div>
        </section>

    </div>
    <script>

    </script>
@endsection