{{--TODO: start layout --}}
@extends('dashboard.layout.master')
{{-- fro title page--}}
@section('title')
    {{trans('links.home_page')}}
@endsection

{{-- for content header--}}
@section('content_header')
    <div class=" col-sm-6">
        <h6 class="dir-right m-0">{{trans('content.home')}}</h6>
    </div>
@endsection

{{--TODO: start content --}}
@section('content')

    {{--for earnings --}}
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i
                                class="fa-regular fa-money-bill-trend-up"></i></span>
            <div class="info-box-content">
                <span class="info-box-text Likes">{{trans('content.earnings')}}</span>
                <span class="info-box-number">41,410</span>
            </div>
        </div>
    </div>
    <div class="clearfix hidden-md-up"></div>

    {{--for sales --}}
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i
                                class="fa-regular fa-cart-circle-plus"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">{{trans('content.sales')}}</span>
                <span class="info-box-number">760</span>
            </div>
        </div>
    </div>

    {{--for products --}}
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3"><span class="info-box-icon bg-primary elevation-1">
                            <i class="fa-regular fa-rectangle-history-circle-plus"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">{{trans('content.products')}}</span>
                <span class="info-box-number">2,000</span>
            </div>
        </div>
    </div>

    {{--for clients --}}
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3"><span class="info-box-icon bg-warning elevation-1"><i
                    class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">{{trans('content.clients')}}</span>
                <span class="info-box-number">2,000</span>
            </div>
        </div>
    </div>

@endsection
{{--TODO: end content --}}
