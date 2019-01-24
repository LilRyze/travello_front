<!-- Testimonials -->

<div class="testimonials" id="testimonials">
    <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{{Illuminate\Support\Facades\Storage::url("testimonials.jpg")}}" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section_subtitle">simply amazing places</div>
                <div class="section_title"><h2>Testimonials</h2></div>
            </div>
        </div>
        <div class="row testimonials_row">
            <div class="col">

                <!-- Testimonials Slider -->
                <div class="testimonials_slider_container">
                    <div class="owl-carousel owl-theme testimonials_slider">

                        <!-- Slide -->
                        @foreach($reviews as $review)
                        <div class="owl-item text-center">
                            @if(strlen($review->text) >= 455)
                                <div class="testimonial">{{substr($review->text, 0, 455)}}...</div>
                            @else
                                <div class="testimonial">{{$review->text}}</div>
                        @endif
                            <div class="testimonial_author">
                                <div class="testimonial_author_content d-flex flex-row align-items-end justify-content-start">
                                    <div>{{$review->author_name}}</div>
                                    <div>{{$review->rating}} Stars</div>
                                </div>
                            </div>
                        </div>
                        @endforeach()
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="test_nav">
        <ul class="d-flex flex-column align-items-end justify-content-end">
            <li><a href="#">City Breaks Clients<span>01</span></a></li>
            <li><a href="#">Cruises Clients<span>02</span></a></li>
            <li><a href="#">All Inclusive Clients<span>03</span></a></li>
        </ul>
    </div>
</div>
