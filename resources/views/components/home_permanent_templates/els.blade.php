@extends('layouts.default')
@push('title', get_phrase('Home'))
@push('meta')@endpush
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/frontend/default/fonts/urbanist/font.css') }}">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span,
        a,
        button {
            font-family: 'urbanist', sans-serif !important;
        }

        .btn-danger-1,
        .btn-whitelight,
        .info {
            font-family: 'urbanist', sans-serif !important;
        }

        .subtitle-1,
        .subtitle-2,
        .subtitle-3,
        .subtitle-4,
        .subtitle-5 {
            font-family: 'urbanist', sans-serif !important;
            font-weight: 500;
        }

        .title,
        .title-1,
        .title-2,
        .title-3,
        .title-4,
        .title-5 {
            font-family: 'urbanist', sans-serif !important;
            font-weight: 700;
        }

        .scale-single-slide {
            display: flex;
            flex-wrap: nowrap;
            align-content: center;
            justify-content: center;
            align-items: center;
            aspect-ratio: 789/465;
        }




        .scale-slider {
            width: 80% !important;
        }

        .els-section1 {
            padding-top: 100px;
            background: url("{{ asset('assets/frontend/default/images/banner_bg-1.webp') }}");
            background-size: cover;
            margin-bottom: 50px;
        }

        .slider-wrapper {
            margin-top: -10%;
            padding-bottom: 100px;

        }

        .header-area {
            position: fixed;
            width: 100%;
            background: transparent;
            z-index: 100;
        }

        .header-area.scrolled {
            background: white;
            /* Background on scroll */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            /* Optional shadow */
        }

        /* End main header */
    </style>
@endpush
@section('content')
    <!-- Banner Area Start -->

    <section class="els-section1">
        <div class="container ">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center aos-init aos-animate"
                    data-aos="zoom-out">
                    <h1 class="title-5 lh-normal text-black mb-20px">
                        <span
                            class="highlight-title d-inline-flex">{{ get_frontend_settings('banner_title') }}</span>
                    </h1>
                    <p class="subtitle-5 fs-15px lh-24px text-black mb-30px">
                        {{ get_frontend_settings('banner_sub_title') }}</p>
                    <div class="d-flex text-lft">
                        <a href="{{ route('courses') }}"
                            class="btn btn-danger-1">{{ get_phrase('Get Started Now') }}</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img aos-init aos-animate" data-aos="zoom-out"
                    data-aos-delay="200">
                    <img src="{{ asset('assets/frontend/default/images/banner_img.png') }}" class="img-fluid animated"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- <section>
        <div class="container slider-wrapper">
            <!-- Swiper -->
            <div class="swiper scale-slider scale-slider-main">
                <div class="swiper-wrapper">
                    @php
                        $university = json_decode(get_homepage_settings('university'));
                        $slider_items = json_decode($university->slider_items ?? '{}', true) ?? [];
                    @endphp
                    @foreach ($slider_items as $key => $slider_items)
                        @php $ext = pathinfo($slider_items, PATHINFO_EXTENSION); @endphp
                        @if (file_exists(public_path($slider_items)))
                            <div class="swiper-slide">
                                <div class="scale-single-slide">
                                    <div class="scale-slide-image">
                                        <img src="{{ asset($slider_items) }}" alt="banner">
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="swiper-slide">
                                <div class="scale-single-slide">
                                    <div class="lms-video">
                                        @if ($ext == 'mp4' || $ext == 'webm')
                                            <video class="universityPlayer" id="player{{ $key }}"
                                                src="{{ $slider_items }}" controls></video>
                                        @else
                                            <div class="plyr__video-embed universityPlayer" id="player{{ $key }}">
                                                <iframe src="{{ $slider_items }}" title="YouTube video player"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen></iframe>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="swiper-button-next" onclick="playerPlayPause()"></div>
                <div class="swiper-button-prev" onclick="playerPlayPause()"></div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="lms-banner-section4 px-20">
        <div class="container">
            <div class="row mb-100px">
                <div class="col-md-12">
                    <div class="lms-banner-area-4">
                        
                        <div class="uv-banner-content">
                            <div class="row flex-lg-row-reverse ">
                                <div class="col-lg-4">
                                    <div style="" class="lc-block mb-4">
                                        <img class="img-fluid shadow"
                                            src="{{ asset('assets/frontend/default/image/rkbanner1.webp') }}"
                                            alt="Photo by Kaloyan Draganov">
                                    </div><!-- /lc-block -->
                                </div>
                                <div class="col-lg-8 d-flex flex-column justify-content-center">
                                    
                                    <h1 class="title-5 lh-normal text-white mb-20px">
                                        <span
                                            class="highlight-title d-inline-flex">{{ get_frontend_settings('banner_title') }}</span>
                                    </h1>
                                    <p class="subtitle-5 fs-15px lh-24px text-white mb-30px">
                                        {{ get_frontend_settings('banner_sub_title') }}</p>
                                    <div class="d-flex text-lft">
                                        <a href="{{ route('courses') }}"
                                            class="btn btn-danger-1">{{ get_phrase('Get Started Now') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Swiper -->
                        <div class="swiper scale-slider scale-slider-main w-[70%]">
                            <div class="swiper-wrapper">
                                @php
                                    $university = json_decode(get_homepage_settings('university'));
                                    $slider_items = json_decode($university->slider_items ?? '{}', true) ?? [];
                                @endphp
                                @foreach ($slider_items as $key => $slider_items)
                                    @php $ext = pathinfo($slider_items, PATHINFO_EXTENSION); @endphp
                                    @if (file_exists(public_path($slider_items)))
                                        <div class="swiper-slide">
                                            <div class="scale-single-slide">
                                                <div class="scale-slide-image">
                                                    <img src="{{ asset($slider_items) }}" alt="banner">
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="swiper-slide">
                                            <div class="scale-single-slide">
                                                <div class="lms-video">
                                                    @if ($ext == 'mp4' || $ext == 'webm')
                                                        <video class="universityPlayer" id="player{{ $key }}"
                                                            src="{{ $slider_items }}" controls></video>
                                                    @else
                                                        <div class="plyr__video-embed universityPlayer"
                                                            id="player{{ $key }}">
                                                            <iframe src="{{ $slider_items }}" title="YouTube video player"
                                                                frameborder="0"
                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                allowfullscreen></iframe>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="swiper-button-next" onclick="playerPlayPause()"></div>
                            <div class="swiper-button-prev" onclick="playerPlayPause()"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="uv-banner-shape1"></span>
        <span class="uv-banner-shape2"></span>
    </section> --}}
    <!-- Banner Area End -->

    <!-- Service Area Start -->
    <section class="px-20">
        <div class="container">
            <div class="row g-28px mb-100px">
                @foreach (App\Models\Category::take(8)->get() as $category)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <a class="w-100" href="{{ route('courses', $category->slug) }}">
                            <div class="lms-service-card-2 max-sm-350px">
                                <div class="service-card-banner-2 mb-20px">
                                    @if ($category->thumbnail)
                                        <img src="{{ get_image($category->thumbnail) }}" alt="">
                                    @endif
                                </div>
                                <div>
                                    <h4 class="title-5 fs-20px lh-28px fw-500 mb-2 text-center">{{ $category->title }}</h4>
                                    <p class="subtitle-5 fs-15px lh-25px text-center">
                                        {{ count_category_courses($category->id) }} {{ get_phrase('courses') }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Service Area End -->

    <!-- Creating A Community Area Start -->
    <section class="px-20">
        <div class="container">
            <div class="row g-28px align-items-center mb-100px">
                <div class="col-xl-5 col-lg-6">
                    <div class="community-banner-2">
                        @php
                            $storImage = json_decode(get_homepage_settings('university'));
                        @endphp
                        @if (isset($storImage->faq_image))
                            <img src="{{ asset('uploads/home_page_image/university/' . $storImage->image) }}"
                                alt="">
                        @endif
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="ms-xl-3">
                        <h2 class="title-5 fs-32px lh-42px fw-500 mb-30px">
                            {{ get_phrase('Creating A Community Of Life Long Learners') }}</h2>
                        <p class="subtitle-5 fs-15px lh-25px mb-30px">
                            {{ get_phrase("Our LMS goes beyond just providing courses. It's a platform designed to ignite curiosity and empower your lifelong learning journey.  This supportive community provides a space to ask questions, no matter how big or small, and receive insightful answers from experienced learners and subject-matter experts.") }}
                        </p>
                        <p class="subtitle-5 fs-15px lh-25px mb-30px">
                            {{ get_phrase("Share your own experiences and challenges, and find encouragement and inspiration from others on a similar path. The diverse perspectives within our community will broaden your horizons and challenge your thinking, fostering a deeper understanding and a richer learning experience.  Together, we'll transform learning from a solitary pursuit into a collaborative adventure, where shared knowledge fuels individual growth and collective discovery.") }}
                        </p>
                        <a href="{{ route('about.us') }}"
                            class="btn btn-danger-1">{{ get_phrase('Learn more about us') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Creating A Community Area End -->
    <!-- Online Course Area Start -->
    <section class="px-20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-2 mb-50px">
                        <h1 class="title-5 fs-32px lh-42px fw-500 mb-20px text-center">
                            {{ get_phrase('Our Online Courses') }}</h1>
                        <p class="subtitle-5 fs-15px lh-24px text-center">
                            {{ get_phrase('Awesome  site. on the top advertising a business online includes assembling Having the most keep.') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-28px mb-50px">
                @php
                    $featured_courses = DB::table('courses')->where('status', 'active')->latest('id')->take(4)->get();
                @endphp
                @foreach ($featured_courses->take(4) as $key => $row)
                    @php
                        $ratings = DB::table('reviews')
                            ->where('course_id', $row->id)
                            ->pluck('rating')
                            ->toArray();
                        $average_rating = count($ratings) > 0 ? array_sum($ratings) / count($ratings) : null;
                    @endphp
                    <div class="col-lg-6">
                        <a href="{{ route('course.details', $row->slug) }}" class="d-block h-100 w-100 max-sm-350px">
                            <div class="lms-1-card">
                                <div class="lms-1-card-body">
                                    <div class="d-flex gap-3 align-items-center flex-sm-row flex-column">
                                        <div class="list-view-banner2">
                                            <img src="{{ get_image($row->thumbnail) }}" alt="banner">
                                        </div>
                                        <div class="list-view-details1 w-100">
                                            <h5 class="title-5 fs-18px lh-26px fw-500 mb-12px">{{ ucfirst($row->title) }}
                                            </h5>
                                            <p class="subtitle-5 fs-14px lh-24px mb-10px">
                                                {{ Str::limit(strip_tags($row->short_description), 78) }}</p>
                                            <div
                                                class="card-leason-rating2 d-flex gap-2 align-items-center justify-content-between">
                                                <div class="card-icon-text4 d-flex gap-2 align-items-center">
                                                    <span class="fi-rr-book-open-cover"></span>
                                                    <p class="subtitle-5 fs-13px lh-26px">{{ lesson_count($row->id) }}
                                                        {{ get_phrase('lesson') }}</p>
                                                </div>
                                                <div class="card-rating3 d-flex gap-1 align-items-center">
                                                    @if ($average_rating !== null)
                                                        <p class="title-5 fs-15px lh-26px fw-medium">
                                                            {{ number_format($average_rating, 1) }}</p>
                                                        <img src="{{ asset('assets/frontend/default/image/star-yellow-14.svg') }}"
                                                            alt="">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                                <div class="d-flex align-items-center gap-12px">
                                                    <div class="card-author-sm">
                                                        <img src="{{ course_instructor_image($row->id) }}"
                                                            alt="">
                                                    </div>
                                                    <div class="title-5 fs-13px lh-26px fw-medium">
                                                        {{ course_by_instructor($row->id)->name }}</div>
                                                </div>


                                                @if (isset($row->is_paid) && $row->is_paid == 0)
                                                    <h4 class="title-5 fs-20px lh-26px fw-500 text-danger-2">
                                                        {{ get_phrase('Free') }}</h4>
                                                @elseif (isset($row->discount_flag) && $row->discount_flag == 1)
                                                    <h4 class="title-5 fs-20px lh-26px fw-500 text-danger-2">
                                                        {{ currency(number_format($row->discounted_price, 2)) }}
                                                        <del
                                                            class="fs-14px text-secondary">{{ currency($row->price) }}</del>
                                                    </h4>
                                                @else
                                                    <h4 class="title-5 fs-20px lh-26px fw-500 text-danger-2">
                                                        {{ currency(number_format($row->price, 2)) }}</h4>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row mb-100px">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-center">
                        <a href="{{ route('courses') }}" class="btn btn-danger-1">{{ get_phrase('See More') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Online Course Area End -->

    <!-- Event Area Start -->
    <section class="px-20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-2 mb-50px">
                        <h1 class="title-5 fs-32px lh-42px fw-500 mb-20px text-center">
                            {{ get_phrase('Think more clearly') }}</h1>
                        <p class="subtitle-5 fs-15px lh-24px text-center">
                            {{ get_phrase('Awesome  site. on the top advertising a business online includes assembling Having the most keep.') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mb-50px">
                <div class="col-12">
                    <div class="lms-event-wrap1">
                        @php
                            $motivational_speeches = json_decode(get_frontend_settings('motivational_speech'), true);
                            $increment = 1;
                        @endphp
                        @foreach ($motivational_speeches as $key => $motivational_speech)
                            <div class="lms-event-single1 d-flex gap-2">
                                @php
                                    $admininfo = DB::table('users')->where('role', 'admin')->first();
                                @endphp
                                <div class="lms-event-number">
                                    <h1 class="title-5 fs-44px lh-29px fw-500">{{ $increment++ }}</h1>
                                </div>
                                <div class="event-details-banner-wrap w-100 d-flex">
                                    <div>
                                        <h3 class="title-5 fs-20px lh-26px fw-500 mb-14px">
                                            {{ $motivational_speech['title'] }}</h3>
                                        <div class="d-flex align-items-center gap-12px mb-20px">
                                            <div class="lms-author-sm">
                                                @if ($admininfo->photo)
                                                    <img src="{{ get_image($admininfo->photo) }}" alt="">
                                                @else
                                                    <img src="{{ asset('uploads/users/admin/placeholder/placeholder.png') }}"
                                                        alt="">
                                                @endif
                                            </div>
                                            <div class="title-5 fs-13px lh-26px fw-medium">{{ $admininfo->name }}</div>
                                        </div>
                                        <p class="subtitle-5 fs-15px lh-25px">{{ $motivational_speech['description'] }}
                                        </p>
                                    </div>
                                    <div class="lms-event1-banner">
                                        @if ($motivational_speech['image'])
                                            <img src="{{ get_image($motivational_speech['image']) }}" alt="">
                                        @else
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Event Area End -->

    <!-- Tuition Area Start -->
    <section class="pt-5 px-20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-2 mb-50px">
                        <h1 class="title-5 fs-32px lh-42px fw-500 mb-20px text-center">
                            {{ get_phrase('Frequently Asked Questions') }}</h1>
                        <p class="subtitle-5 fs-15px lh-24px text-center">
                            {{ get_phrase('Awesome  site. on the top advertising a business online includes assembling Having the most keep.') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-28px align-items-center mb-100px">
                <div class="col-lg-5">
                    <div class="tuition-banner">
                        @if (isset($storImage->faq_image))
                            <img src="{{ asset('uploads/home_page_image/university/' . $storImage->faq_image) }}"
                                alt="">
                        @endif
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="lms-1-card rounded-20px">
                        <div class="lms-1-card-body p-40px">
                            <div class="accordion qnaaccordion-five" id="accordionExample5">
                                @php
                                    $faqs =
                                        count(json_decode(get_frontend_settings('website_faqs'), true)) > 0
                                            ? json_decode(get_frontend_settings('website_faqs'), true)
                                            : [['question' => '', 'answer' => '']];
                                @endphp
                                @foreach ($faqs as $key => $faq)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="{{ $key }}">
                                            <button class="accordion-button py-4 {{ $key == 0 ? '' : 'collapsed' }}"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#qnaOne{{ $key }}" aria-expanded="true"
                                                aria-controls="qnaOne">
                                                {{ $faq['question'] }}
                                            </button>
                                        </h2>
                                        <div id="qnaOne{{ $key }}"
                                            class="accordion-collapse collapse px-0 {{ $key == 0 ? 'show' : '' }}"
                                            aria-labelledby="{{ $key }}" data-bs-parent="#accordionExample5">
                                            <div class="accordion-body">
                                                <p class="answer">{{ $faq['answer'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tuition Area End -->

    <!-- Testimonial Area End -->

    {{-- <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title-2 mb-30px">
                        <h1 class="title-5 fs-32px lh-42px fw-500 text-center">
                            {{ get_phrase('What the people Thinks About Us') }}</h1>
                    </div>
                </div>
            </div>
            <div class="row mb-50px">
                <div class="col-md-12">
                    <div class="swiper lms-testimonial-2">
                        <div class="swiper-wrapper">
                            @php
                                $reviews = DB::table('user_reviews')->get();
                            @endphp
                            @foreach ($reviews as $review)
                                @php
                                    $userDetails = DB::table('users')
                                        ->where('id', $review->user_id)
                                        ->first();
                                @endphp
                                <div class="swiper-slide">
                                    <div class="lms-1-card rounded-4">
                                        <div class="lms-single-testimonial2">
                                            <div class="d-flex justify-content-between gap-2 mb-14px">
                                                <div class="testimonial-profile-wrap2 d-flex align-items-center ">
                                                    <div class="testimonial-profile-2">
                                                        <img src="{{ get_image_by_id($userDetails->id) }}"
                                                            alt="">
                                                    </div>
                                                    <div>
                                                        <h4 class="title-5 fs-18px lh-25px fw-semibold mb-5px">
                                                            {{ $userDetails->name }}</h4>
                                                        <p class="subtitle-5 fs-14px lh-24px">
                                                            {{ date('h:i A', strtotime($review->created_at)) }}</p>
                                                    </div>
                                                </div>
                                                <div class="testimonial-quate-1">
                                                    <img src="assets/images/icons/quate-red.svg" alt="">
                                                </div>
                                            </div>
                                            <p class="subtitle-5 fs-15px lh-24px mb-14px">{{ $review->review }}</p>
                                            <div class="d-flex align-items-center gap-1">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $review->rating)
                                                        <img src="{{ asset('assets/frontend/default/image/star-yellow-14.svg') }}"
                                                            alt="">
                                                    @else
                                                        <img src="{{ asset('assets/frontend/default/image/star.svg') }}"
                                                            alt="">
                                                    @endif
                                                @endfor
                                                <h6 class="title-5 ms-2 fs-18px lh-37px fw-semibold">
                                                    ({{ $review->rating }})</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="testimonials-wrapper section-padding mb-4 px-20">
        <span class="elips left-elips"><img class="builder-editable" builder-identity="1"
                src="{{ asset('assets/page-builder/block-image/Ellipse 8.png') }}" alt="..."></span>
        <span class="elips right-elips"><img class="builder-editable" builder-identity="2"
                src="{{ asset('assets/page-builder/block-image/Ellipse 9.png') }}" alt="..."></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-title ">
                        <span class="title-head builder-editable"
                            builder-identity="3">{{ get_phrase('Testimonial') }}</span>
                        <h2 class="title builder-editable" builder-identity="4">
                            {{ get_phrase('What our clients says about us') }}</h2>
                        <p class="description mt-5 builder-editable" builder-identity="5">
                            {{ get_phrase('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.') }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="user-slider owl-carousel owl-theme">
                        @php
                            $reviews = DB::table('user_reviews')->get();
                        @endphp

                        @if ($reviews->isEmpty())
                            <!-- Your code for empty reviews -->
                            No review found
                        @else
                            @foreach ($reviews as $review)
                                @php
                                    $userDetails = DB::table('users')
                                        ->where('id', $review->user_id)
                                        ->first();
                                @endphp

                                @if ($userDetails)
                                    <!-- Single User Opinion -->
                                    <div class="single-opinion">
                                        <div class="user-image">
                                            <img class="builder-editable" builder-identity="6"
                                                src="{{ asset('assets/page-builder/block-image/test-image.png') }}"
                                                alt="">
                                        </div>
                                        <div class="testimonial-border">
                                            <div class="testimonial-des">
                                                <p class="description overlay-content overlay-content-max-h-150">
                                                    <span class="builder-editable"
                                                        builder-identity="7">{{ $review->review }}</span>
                                                </p>
                                                <div class="user-info d-flex">
                                                    <div class="ellipsis-line-2">
                                                        <h4><span class="builder-editable"
                                                                builder-identity="8">{{ $userDetails->name }}</span>
                                                        </h4>
                                                        <p><span class="builder-editable"
                                                                builder-identity="9">{{ $userDetails->email }}</span>
                                                        </p>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-1">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= $review->rating)
                                                                <img src="{{ asset('assets/frontend/default/image/star-yellow-14.svg') }}"
                                                                    alt="">
                                                            @else
                                                                <img src="{{ asset('assets/frontend/default/image/star.svg') }}"
                                                                    alt="">
                                                            @endif
                                                        @endfor
                                                        <h6 class="title-5 ms-2 fs-18px lh-37px fw-semibold">
                                                            ({{ $review->rating }})
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $('.testimonials-wrapper .user-slider').owlCarousel({
            loop: false,
            autoplay: false,
            margin: 10,
            nav: true,
            navText: ['<i class="fa-solid fa-chevron-left"></i>', '<i class="fa-solid fa-chevron-right"></i>'],
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    </script>

    <!-- Testimonial Area End -->


    <!-- Blog Area Start -->
    @if (get_frontend_settings('blog_visibility_on_the_home_page'))
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-1 mb-50px">
                            <h1 class="title-3 mb-26px fs-40px lh-52px fw-medium text-center">{{ get_phrase('Our Blog') }}
                            </h1>
                            <p class="subtitle-2 fs-15px lh-24px text-center">
                                {{ get_phrase('Awesome  site. on the top advertising a business online includes assembling Having the most keep.') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row g-20px mb-100px">
                    @foreach ($blogs as $key => $blog)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <a href="{{ route('blog.details', $blog->slug) }}" class="blog-post1-link">
                                <div class="blog-post1-inner">
                                    <div class="banner">
                                        <img src="{{ get_image($blog->thumbnail) }}" alt="...">
                                    </div>
                                    <div class="blog-post1-details">
                                        <h3 class="title-5 mb-3 pt-2">{{ ucfirst($blog->title) }}</h3>
                                        <p class="info ellipsis-line-2">
                                            {{ ellipsis(strip_tags($blog->description), 160) }}</p>
                                        <p class="read-more d-flex align-items-center">
                                            <span>{{ get_phrase('Read More') }}</span>
                                            <img src="{{ asset('assets/frontend/default/image/angle-right-black-18.svg') }}"
                                                alt="">
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    <!-- Blog Area End -->

@endsection

@push('js')
    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header-area'); // Select by class name
            if (window.scrollY > 50) { // Adjust scroll value as needed
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        if ($('.universityPlayer').length > 0) {
            // Select all video elements
            const players = Array.from(document.querySelectorAll('.universityPlayer'));
            // Initialize Plyr for each video element
            const plyrInstances = players.map(player => new Plyr(player));
            // Function to pause all players except the currently playing one
            function pauseOtherPlayers(currentPlayer) {
                plyrInstances.forEach(player => {
                    if (player !== currentPlayer && !player.paused) {
                        player.pause();
                    }
                });
            }
            // Add 'play' event listener to each player
            plyrInstances.forEach(player => {
                player.on('play', () => {
                    pauseOtherPlayers(player);
                });
            });
        }

        function playerPlayPause() {
            setTimeout(function() {
                if ($('.swiper-slide-active .lms-video .plyr:not(.plyr--playing)').length > 0) {
                    $('.swiper-slide-active .lms-video .plyr:not(.plyr--playing)').trigger('click');
                } else {
                    $('.plyr--playing').trigger('click');
                }
            }, 600);
        }
    </script>
@endpush
