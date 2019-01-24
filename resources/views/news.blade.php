<!DOCTYPE html>
<html lang="en">
@extends('news.head_styles_news')
@extends('layouts.partials.head')
@section('title')
    <title>News</title>
@endsection

<body>
<div class="super_container">
    @include('layouts.partials.header')
    @include('layouts.partials.menu')
    <div class="home">
        <div class="background_image" style="background-image:url({{Illuminate\Support\Facades\Storage::url("news.jpg")}})"></div>
    </div>
    @include('layouts.partials.search')
    @include('news.news')
    @include('layouts.partials.footer')
    @include('layouts.partials.footer_scripts')
    @include('news.footer_scripts_news')
</div>

</body>
</html>
