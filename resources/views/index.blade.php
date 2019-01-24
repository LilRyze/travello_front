<!DOCTYPE html>
<html lang="en">
@extends('index.head_styles_index')
@extends('layouts.partials.head')

   @section('title')
        <title>Travello</title>
   @endsection

<body>

<div class="super_container">
    @include('index.head_styles_index')
    @include('layouts.partials.header')
    @include('layouts.partials.menu')
    @include('index.home')
	@include('layouts.partials.search')
    @include('index.intro')
    @include('index.destinations')
    @include('index.testimonials')
    @include('index.news')
    @include('layouts.partials.footer')
    @include('layouts.partials.footer_scripts')
</div>

</body>
</html>
