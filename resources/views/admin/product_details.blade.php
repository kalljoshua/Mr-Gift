<div class="modal fade text-left" id="large{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel17"><b>{{$product->name}} - Product Details</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <div class="card-footer text-muted">
                    <span class="float-left" style="font-size: 16px;"><b>Price: UGX {{number_format($product->price)}}</b></span>
                    @if(($product->active)==0)

                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="tags float-right">
                        <span class="badge badge-pill badge-danger">Pending</span>
                        @else
                            <span class="badge badge-pill badge-success">Approved</span>
                        @endif
						<span class="tour-price-single animated growIn slower"
                              style="color: #FDC600; font-size: 15px">
                                                @for ($k=1; $k <= 5 ; $k++)
                                <span data-title="Average Rate: 5 / 5"
                                      class="bottom-ratings tip">
                                    <span class="glyphicon glyphicon-star{{ ($k <= $product->rating) ? '' : '-empty'}}"
                                                              style="font-size: 15px"></span>
                                                    </span>
                            @endfor
                            ({{$product->rating}})
                        </span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="badge badge-pill badge-info">{{$product->reviews->count()}} Review(s)</span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="badge badge-pill badge-default">{{$product->views}} &nbsp;<i class="fa fa-eye"></i> </span>
					</span>
                </div>
                <hr>
                <div class="col-xl-12 col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example" data-slide-to="1"></li>
                                    <li data-target="#carousel-example" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="/admin_inc/app-assets/images/carousel/08.jpg" class="d-block w-100" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/admin_inc/app-assets/images/carousel/03.jpg" class="d-block w-100" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="/admin_inc/app-assets/images/carousel/01.jpg" class="d-block w-100" alt="Third slide">
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-example" role="button" data-slide="prev">
                                    <span class="icon-prev" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example" role="button" data-slide="next">
                                    <span class="icon-next" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="card-body">
                                <p class="card-text">{{$product->description}}</p>

                            </div>
                        </div>
                        <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">

                            <span class="float-left"><i class="fa fa-clock-o"></i>&nbsp;{{$product->created_at->diffForHumans()}}</span>
                            @if(($product->status)==0)
                                <span class="badge badge-pill badge-warning">Out of stock</span>
                            @else
                                <span class="badge badge-pill badge-success">In stock</span>
                            @endif
                            <span class="tags float-right">
						<span class="badge badge-pill badge-primary">{{$product->sub_category->category->name}}</span>
						<span class="badge badge-pill badge-danger">{{$product->occassion->name}}</span>
					</span>
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-outline-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>