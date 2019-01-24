<!DOCTYPE html>
<html lang="en">
@extends('about.head_styles_about')
@extends('layouts.partials.head')
@section('title')
    <title>About Us</title>
    @endsection

<body>
<div class="super-container">
    @include('layouts.partials.header')
    @include('layouts.partials.menu')
    <div class="home">
        <div class="background_image" style="background-image:url({{Illuminate\Support\Facades\Storage::url("about.jpg")}})"></div>
    </div>
    @include('layouts.partials.search')
    @include('about.about')
    @include('about.milestones')
    @include('about.choose_us')
    @include('about.team')
    @include('layouts.partials.footer')
    @include('layouts.partials.footer_scripts')
    @include('about.footer_scripts_about')

</div>
</body>
</html>
