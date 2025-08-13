@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.global.seo', [
        'name' => '404',
        'title' => '404',
        'description' => '404',
        'keyword' => '404',
        'schema' => '404',
        'seoimage' => 'frontend/assets/img/404.jpg',
        'created_at' => '2023-06-06T08:09:15+00:00',
        'updated_at' => '2023-06-06T10:54:05+00:00',
    ])
@endsection

@section('content')
    <div class="error-wrapper pt-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="error-content text-center">
                        <div class="error-img">
                            <div class="media-wrapper">
                                <img class="w-100" src="{{ asset('frontend/assets/img/404.jpg') }}" alt="404">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
