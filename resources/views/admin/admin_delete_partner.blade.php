@extends('...layouts.admin_layout')
@section('title')
    <title>::Mr.Gifa fa-Admin::Delete Sponsor</title>
@endsection

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">

            @include('flash::message')

            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Delete Sponsor</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Sponsors</a>
                                </li>
                                <li class="breadcrumb-item active">Delete Sponsor
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
                        <div class="col-md-12">
                            <div class="card">

                                <div class="card-content collpase show">
                                    <div class="card-body">

                                        <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">

                                                    <h4 class="page-section-heading">Delete Sponsor</h4>
                                                    <div class="panel panel-default">
                                                        <div class="panel-body">
                                                            <p style="text-align: center;">Are you sure you want to delete this Sponsor?</p>
                                                            <table class="table" >
                                                                <tr>
                                                                    <td>
                                                                        <img src="/images/partners/{{$partner->logo}}"/>
                                                                        {{$partner->name}}
                                                                    </td>
                                                                    <td>
                                                                        <a href="#"
                                                                           onclick="event.preventDefault();
                                                                            document.getElementById('delete-form').submit();" class="btn btn-danger">Delete</a>

                                                                        <form id="delete-form" action="{{ route('admin.sponsors.destroy') }}"
                                                                              method="POST" style="display: none;">
                                                                            {{ csrf_field() }}
                                                                            <input type="hidden" value="{{$partner->id}}" name="id">
                                                                        </form>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
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