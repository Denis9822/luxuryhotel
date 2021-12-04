@extends('layouts.index',[
    'title' => \App\Helpers\Pages::getSeo()->seo_title ?? '',
    'description' => \App\Helpers\Pages::getSeo()->seo_description ?? '',
    'image' => \App\Helpers\Pages::getSeo()->seo_img ?? '',
    'type' => 'page',
    'title_t' => \App\Helpers\Pages::getSeo()->seo_title ?? '',
    'description_t' => \App\Helpers\Pages::getSeo()->seo_description ?? '',
    'image_t' => \App\Helpers\Pages::getSeo()->seo_img ?? ''
])

@section('content')

    <div class="page-template-content">
        <div class="container">
            <div class="pag mt-5">
                <h1>About-us</h1>
            </div>
        </div>

    </div>

<style>
    .daterangepicker
    {
        right: 41% !important;
    }
</style>

@endsection

