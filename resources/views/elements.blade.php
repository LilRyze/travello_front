<!DOCTYPE html>
<html lang="en">
@extends('elements.head_styles_elements')
@extends('layouts.partials.head')

@section('title')
    <title>Elements</title>
@endsection

<body>
<div class="super-container">
    @include('layouts.partials.header')
    @include('layouts.partials.menu')
    <div class="home">
        <div class="background_image" style="background-image:url({{Illuminate\Support\Facades\Storage::url("elements.jpg")}})"></div>
    </div>
    @include('layouts.partials.search')
    @include('elements.elements')
    @include('layouts.partials.footer')
    @include('layouts.partials.footer_scripts')
    @include('elements.footer_scripts_elements')
</div>
</body>
</html>
