<!DOCTYPE html>
<html lang="en">
@extends('destinations.head_styles_destination')
@extends('layouts.partials.head')

@section('title')
    <title>Destinations</title>
@endsection

<body>
<div class="super-container">
    @include('layouts.partials.header')
    @include('layouts.partials.menu')
    <div class="home">
        <div class="background_image" style="background-image:url({{Illuminate\Support\Facades\Storage::url("destinations.jpg")}})"></div>
    </div>
    @include('layouts.partials.search')
    @include('destinations.destinations')
    @include('layouts.partials.footer')
    @include('layouts.partials.footer_scripts')
    @include('destinations.footer_scripts_destination')
</div>
</body>
</html>
