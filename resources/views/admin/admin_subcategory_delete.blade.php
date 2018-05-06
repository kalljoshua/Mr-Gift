@extends('...layouts.admin_layout')
@section('title')
    <title>::Mr.Gifa fa-Admin::Delete Sub-Category</title>
@endsection

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">

            @include('flash::message')

            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Delete Sub-Category</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Categories and Types</a>
                                </li>
                                <li class="breadcrumb-item active">Delete Sub-Category
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div>

            <div class="content-body"><!-- HTML5 export buttons table -->
                <!-- Column selectors table -->
                <section id="horizontal-form-layouts">

                    <div class="row">
                        <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">

                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <p style="text-align: center;">Are you sure you want to delete this Sub-Category?</p>
                                    <table class="table" >
                                        <tr>
                                            <td>
                                                {{$subcategory->name}}
                                            </td>
                                            <td>
                                                <a href="{{route('admin.all.subcategories')}}"><button class="btn btn-default">Cancel</button></a>
                                                <a href="#"
                                                   onclick="event.preventDefault();
                                                    document.getElementById('delete-form').submit();" class="btn btn-danger">Delete</a>

                                                <form id="delete-form" action="{{ route('admin.subcategory.destroy') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" value="{{$subcategory->id}}" name="id">
                                                </form>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                </section>
                <!--/ Column selectors table -->

            </div>
        </div>
    </div>

@endsection