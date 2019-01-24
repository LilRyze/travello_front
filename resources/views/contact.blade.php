<!DOCTYPE html>
<html lang="en">
@extends('contact.head_styles_contact')
@extends('layouts.partials.head')

@section('title')
    <title>Contact</title>
@endsection

<body>
<div class="super-container">
    @include('layouts.partials.header')
    @include('layouts.partials.menu')
    <div class="home">
        <div class="background_image" style="background-image:url({{Illuminate\Support\Facades\Storage::url("contact.jpg")}})"></div>
    </div>
    @include('layouts.partials.search')
    @include('contact.contact')
    @include('contact.map')
    @include('layouts.partials.footer')
    @include('layouts.partials.footer_scripts')
    @include('contact.footer_scripts_contact')
</div>
</body>
</html>
