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

        .responsive-banner {
            position: relative;
            width: 100%;
            padding-top: 56.25%;
            /* Aspect ratio: 16:9 */
            overflow: hidden;
            border-radius: 8px;
            /* Optional: Adds rounded corners */
        }

        .responsive-banner img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Ensures the image covers the container while cropping excess */
        }

        .typed-cursor {
            font-weight: 300 !important;
            color: rgb(63, 63, 63) !important;
        }

        .short-title {
            background: rgb(255, 241, 241);
            border-radius: 5px;
            padding: 4px 8px;
            color: rgba(0, 0, 0, 0.741);
        }

        .phoneNumber {
            color: #EC2426;
            font-weight: 700;
        }

        .typed-output {
            color: #EC2426;
        }


        .category-wrapper {
            width: 100vw;
            position: relative;
        }

        .swiper-pagination-wrapper {
            position: relative;
        }

        .swiper-pagination .swiper-pagination-bullet-active {
            background: #EC2426 !important;
        }

        .home-icon-box-1 {
            border-radius: 20px;
            max-width: 150px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 40%;
            padding: 5px;
            margin-left: 40px;
        }



        .home-icon-box-2 {
            border-radius: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 65%;
            right: 0;
            padding: 5px;
            margin-right: 100px;
        }

        .bshape_03 {
            position: absolute;
            top: 15%;
            margin-left: 150px;
            width: 70px;
        }

        .bshape_04 {
            position: absolute;
            bottom: 25%;
            left: 45%;
            width: 80px;
        }

        .bshape_05 {
            position: absolute;
            top: 20%;
            right: 10%;
            width: 70px;
        }

        @media (max-width: 768px) {
            .home-icon-box-1 {
                border-radius: 20px;
                top: 60%;
                padding: 5px;
                margin-left: 20px;
            }

            .home-icon-box-2 {
                border-radius: 20px;
                top: 90%;
                padding: 5px;
                margin-right: 20px;
            }

            .bshape_03,
            .bshape_04,
            .bshape_05 {
                display: none;
            }
        }


        .els-navigation-btn {
            position: absolute;
            background: #ec2426;
            border: none;
            background-size: content;
            background-repeat: no-repeat;
            background-position: center;
        }
        @media (max-width: 768px) {
            .home-icon-box-1 {
                border-radius: 20px;
                top: 60%;
                padding: 5px;
                margin-left: 20px;
            }

            .home-icon-box-2 {
                border-radius: 20px;
                top: 90%;
                padding: 5px;
                margin-right: 20px;
            }

            .bshape_03,
            .bshape_04,
            .bshape_05 {
                display: none;
            }
            .els-navigation-btn{
                display: none;
            }
        }

        .swiper-button-next.els-navigation-btn {
            right: 100px;
            background-image: url('{{ asset('assets/frontend/default/images/next-arrow.svg') }}');
        }

        .swiper-button-prev.els-navigation-btn {
            left: 100px;
            background-image: url('{{ asset('assets/frontend/default/images/prev-arrow.svg') }}');
        }

        .els-navigation-btn:hover {
            background-color: #ec2426BD;
        }

        .els-navigation-btn::after {
            content: '';
        }



        /* End main header */
    </style>
@endpush
@section('content')
    <!-- Banner Area Start -->
    <section class="els-section1">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-sm-2 order-lg-1 d-flex flex-column align-items-center align-items-sm-start justify-content-center aos-init aos-animate"
                    data-aos="zoom-out">
                    <span class="short-title"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                            height="24" color="red" fill="none" class="pe-2">
                            <path
                                d="M9.42613 3.06269C10.6836 2.35423 11.3124 2 12 2C12.6876 2 13.3164 2.35423 14.5739 3.06269L16.3239 4.04861C17.6292 4.78401 18.2819 5.15171 18.6409 5.76664C19 6.38157 19 7.13157 19 8.63158V10.3684C19 11.8684 19 12.6184 18.6409 13.2334C18.2819 13.8483 17.6292 14.216 16.3239 14.9514L14.5739 15.9373C13.3164 16.6458 12.6876 17 12 17C11.3124 17 10.6836 16.6458 9.42613 15.9373L7.67613 14.9514C6.37081 14.216 5.71815 13.8483 5.35908 13.2334C5 12.6184 5 11.8684 5 10.3684V8.63158C5 7.13157 5 6.38157 5.35908 5.76664C5.71815 5.15171 6.37081 4.78401 7.67613 4.04861L9.42613 3.06269Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                            <path d="M9 10.1667C9 10.1667 9.75 10.1667 10.5 11.5C10.5 11.5 12.8824 8.16667 15 7.5"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M16.8825 15L17.5527 18.2099C17.9833 20.2723 18.1986 21.3035 17.7563 21.7923C17.3141 22.281 16.546 21.8606 15.0099 21.0198L12.7364 19.7753C12.3734 19.5766 12.1919 19.4773 12 19.4773C11.8081 19.4773 11.6266 19.5766 11.2636 19.7753L8.99008 21.0198C7.45397 21.8606 6.68592 22.281 6.24365 21.7923C5.80139 21.3035 6.01669 20.2723 6.44731 18.2099L7.11752 15"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>100% Satisfaction Guarantee</span>
                    <h1 class="title-5 lh-normal text-black">
                        <span
                            class="highlight-title d-inline-flex">{{ get_frontend_settings('typing_effect_title') }}</span>
                    </h1>
                    <h1 class="title-5 lh-normal mb-20px">
                        <span id="typed-output" class="typed-output highlight-title d-inline-flex"></span>
                    </h1>
                    <p class="subtitle-5 fs-15px lh-24px text-black text-center text-sm-start mb-30px">
                        {{ get_frontend_settings('banner_sub_title') }}</p>


                    <div>
                        <!-- Element to contain animated typing -->

                        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
                        <script>
                            const strings = "{{ get_frontend_settings('typing_effect_phrases') }}";
                            const wordsArray = strings.split(",");
                            const typed = new Typed("#typed-output", {
                                strings: wordsArray,
                                typeSpeed: 50,
                                backSpeed: 25,
                                loop: true,
                            });
                        </script>

                    </div>
                    <div class="d-flex gap-2">
                        <div class="d-flex text-lft">
                            <a href="{{ route('courses') }}"
                                class="btn btn-danger-1">{{ get_phrase('Get Started Now') }}</a>
                        </div>
                        <div class="d-flex px-1 px-md-3 align-items-center">
                            <div class="pe-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"
                                    color="#EC2426" fill="none">
                                    <path d="M13 3C17.4183 3 21 6.58172 21 11M13.5 6.5C15.7091 6.5 17.5 8.29086 17.5 10.5"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M9.15825 5.71223L8.7556 4.80625C8.49232 4.21388 8.36068 3.91768 8.1638 3.69101C7.91707 3.40694 7.59547 3.19794 7.23567 3.08785C6.94858 3 6.62446 3 5.97621 3C5.02791 3 4.55375 3 4.15573 3.18229C3.68687 3.39702 3.26343 3.86328 3.09473 4.3506C2.95151 4.76429 2.99253 5.18943 3.07458 6.0397C3.94791 15.0902 8.90981 20.0521 17.9603 20.9254C18.8106 21.0075 19.2357 21.0485 19.6494 20.9053C20.1367 20.7366 20.603 20.3131 20.8177 19.8443C21 19.4462 21 18.9721 21 18.0238C21 17.3755 21 17.0514 20.9122 16.7643C20.8021 16.4045 20.5931 16.0829 20.309 15.8362C20.0823 15.6393 19.7861 15.5077 19.1937 15.2444L18.2878 14.8417C17.6462 14.5566 17.3255 14.4141 16.9995 14.3831C16.6876 14.3534 16.3731 14.3972 16.0811 14.5109C15.776 14.6297 15.5063 14.8544 14.967 15.3038C14.4301 15.7512 14.1617 15.9749 13.8337 16.0947C13.543 16.2009 13.1586 16.2403 12.8523 16.1951C12.5069 16.1442 12.2423 16.0029 11.7133 15.7201C10.0672 14.8405 9.15953 13.9328 8.27986 12.2867C7.99714 11.7577 7.85578 11.4931 7.80487 11.1477C7.75974 10.8414 7.79908 10.457 7.9053 10.1663C8.02512 9.83828 8.24881 9.56986 8.69619 9.033C9.14562 8.49368 9.37034 8.22402 9.48915 7.91891C9.60285 7.62694 9.64661 7.3124 9.61694 7.00048C9.58594 6.67452 9.44338 6.35376 9.15825 5.71223Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </div>
                            <div class="pl-2 pl-md-3">
                                <h3>Have any question?</h3>
                                <h2 class="phoneNumber">{{ get_settings('phone') }}</h2>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 order-sm-1 order-lg-2 hero-img aos-init aos-animate" data-aos="zoom-out"
                    data-aos-delay="200">
                    <img src="{{ asset('assets/frontend/default/images/banner_img.png') }}" class="img-fluid animated"
                        alt="">

                    <div class=" card shadow home-icon-box-1">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="icon icon-shape icon-shape-primary rounded-circle mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"
                                    color="#ff2458" fill="none">
                                    <path
                                        d="M15 8C15 9.65685 13.6569 11 12 11C10.3431 11 9 9.65685 9 8C9 6.34315 10.3431 5 12 5C13.6569 5 15 6.34315 15 8Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M16 4C17.6568 4 19 5.34315 19 7C19 8.22309 18.268 9.27523 17.2183 9.7423"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M13.7143 14H10.2857C7.91876 14 5.99998 15.9188 5.99998 18.2857C5.99998 19.2325 6.76749 20 7.71426 20H16.2857C17.2325 20 18 19.2325 18 18.2857C18 15.9188 16.0812 14 13.7143 14Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M17.7143 13C20.0812 13 22 14.9188 22 17.2857C22 18.2325 21.2325 19 20.2857 19"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M8 4C6.34315 4 5 5.34315 5 7C5 8.22309 5.73193 9.27523 6.78168 9.7423"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M3.71429 19C2.76751 19 2 18.2325 2 17.2857C2 14.9188 3.91878 13 6.28571 13"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <p>Total Students</p>
                            <h1 class="mb-2 text-center font-weight-bold">5K</h1>
                        </div>
                    </div>
                    <div class=" card shadow home-icon-box-2">
                        <div class="card-body d-flex align-items-center gap-2">
                            <div class="icon icon-shape icon-shape-primary rounded-circle mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36"
                                    color="#9013fe" fill="none">
                                    <path
                                        d="M2 8C2 9.34178 10.0949 13 11.9861 13C13.8772 13 21.9722 9.34178 21.9722 8C21.9722 6.65822 13.8772 3 11.9861 3C10.0949 3 2 6.65822 2 8Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M5.99414 11L6.23925 16.6299C6.24415 16.7426 6.25634 16.8555 6.28901 16.9635C6.38998 17.2973 6.57608 17.6006 6.86 17.8044C9.08146 19.3985 14.8901 19.3985 17.1115 17.8044C17.3956 17.6006 17.5816 17.2973 17.6826 16.9635C17.7152 16.8555 17.7274 16.7426 17.7324 16.6299L17.9774 11"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M20.4734 9.5V16.5M20.4734 16.5C19.6814 17.9463 19.3312 18.7212 18.9755 20C18.8983 20.455 18.9596 20.6843 19.2732 20.8879C19.4006 20.9706 19.5537 21 19.7055 21H21.2259C21.3876 21 21.5507 20.9663 21.6838 20.8745C21.9753 20.6735 22.0503 20.453 21.9713 20C21.6595 18.8126 21.2623 18.0008 20.4734 16.5Z"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="d-flex flex-column align-items-start">
                                <p>Students placed</p>
                                <h2 class="mb-2 text-center font-weight-bold">8K+</h2>
                            </div>

                        </div>
                    </div>
                    <img class="bshape_03" src="{{ asset('assets/frontend/default/images/bshape_03.png') }}"
                        alt="">
                    <img class="bshape_04" src="{{ asset('assets/frontend/default/images/bshape_04.png') }}"
                        alt="">
                    <img class="bshape_05" src="{{ asset('assets/frontend/default/images/bshape_05.png') }}"
                        alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Category Area Start -->
    <section class="section-padding">
        <div class="category-wrapper">
            <div class="container swiper categorySwiper">
                <div class="swiper-wrapper">
                    @foreach (App\Models\Category::where('parent_id', 0)->get() as $category)
                        <div class="swiper-slide">
                            <a class="w-100" href="{{ route('courses', $category->slug) }}">
                                <div class="lms-service-card-2 max-sm-350px">
                                    <div class="service-card-banner-2 mb-20px responsive-banner">
                                        <img src="{{ $category->thumbnail ? get_image($category->thumbnail) : asset('assets/frontend/default/images/category-placeholder.webp') }}"
                                            alt="Category Banner" class="img-fluid">
                                    </div>
                                    <div>
                                        <h4 class="title-5 fs-20px lh-28px fw-500 mb-2 text-center">{{ $category->title }}
                                        </h4>
                                        <p class="subtitle-5 fs-15px lh-25px text-center">
                                            {{ count_category_courses($category->id) }} {{ get_phrase('courses') }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="swiper-button-next els-navigation-btn"></div>
            <div class="swiper-button-prev els-navigation-btn"></div>

        </div>
        <div class="swiper-pagination-wrapper mt-5">
            <div class="swiper-pagination"></div>
        </div>
        <div class="d-flex justify-content-center mt-2 mt-sm-4">
            <a href="{{ route('courses') }}" class="btn btn-danger-1">{{ get_phrase('View All') }}</a>
        </div>
    </section>
    <!-- Category Area End -->

    <!-- About Area Start -->
    <section class="testimonials-wrapper section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="skill-image position-relative">
                        <img class="builder-editable" builder-identity="1"
                            src="{{ asset('assets/frontend/default/image/skill-image.png') }}" alt="...">
                        <div class="over-text">
                            <span>
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.12494 20.0241C9.16021 20.0241 10.1674 20.1415 11.1466 20.3763C12.1258 20.6111 13.0977 20.9793 14.0625 21.4809V9.19239C13.1843 8.62028 12.2339 8.1912 11.2115 7.90514C10.1891 7.61907 9.16021 7.47604 8.12494 7.47604C7.37494 7.47604 6.67422 7.53493 6.02278 7.6527C5.37134 7.77049 4.70188 7.9632 4.01438 8.23082C3.91821 8.26289 3.85009 8.30897 3.81003 8.36907C3.76997 8.42918 3.74994 8.49528 3.74994 8.56739V20.3895C3.74994 20.5017 3.79 20.5838 3.87013 20.6359C3.95027 20.688 4.03843 20.694 4.13459 20.6539C4.72753 20.452 5.35332 20.2966 6.01197 20.1876C6.67061 20.0786 7.37494 20.0241 8.12494 20.0241ZM15.9374 21.4809C16.9022 20.9793 17.8741 20.6111 18.8533 20.3763C19.8324 20.1415 20.8397 20.0241 21.8749 20.0241C22.6249 20.0241 23.3293 20.0786 23.9879 20.1876C24.6466 20.2966 25.2723 20.452 25.8653 20.6539C25.9614 20.694 26.0496 20.688 26.1297 20.6359C26.2099 20.5838 26.2499 20.5017 26.2499 20.3895V8.56739C26.2499 8.49528 26.2299 8.43118 26.1898 8.37507C26.1498 8.31897 26.0817 8.27089 25.9855 8.23082C25.298 7.9632 24.6285 7.77049 23.9771 7.6527C23.3257 7.53493 22.6249 7.47604 21.8749 7.47604C20.8397 7.47604 19.8108 7.61907 18.7884 7.90514C17.7659 8.1912 16.8156 8.62028 15.9374 9.19239V21.4809ZM14.9999 23.7068C14.7564 23.7068 14.5284 23.6763 14.3161 23.6154C14.1037 23.5545 13.903 23.4736 13.7139 23.3726C12.8533 22.8854 11.9531 22.5181 11.0132 22.2704C10.0733 22.0229 9.11052 21.8991 8.12494 21.8991C7.36212 21.8991 6.61294 21.9836 5.87738 22.1527C5.14179 22.3217 4.43266 22.5705 3.74997 22.899C3.30447 23.1042 2.88059 23.0717 2.47834 22.8017C2.07611 22.5317 1.875 22.149 1.875 21.6539V8.08183C1.875 7.8126 1.9443 7.55979 2.08291 7.32342C2.22153 7.08704 2.42146 6.91677 2.68269 6.8126C3.52883 6.40075 4.41064 6.09587 5.32809 5.89795C6.24555 5.70003 7.17783 5.60107 8.12494 5.60107C9.34129 5.60107 10.5296 5.76734 11.6898 6.09989C12.8501 6.43241 13.9535 6.92319 14.9999 7.57223C16.0464 6.92319 17.1498 6.43241 18.31 6.09989C19.4703 5.76734 20.6586 5.60107 21.8749 5.60107C22.822 5.60107 23.7543 5.70003 24.6718 5.89795C25.5892 6.09587 26.471 6.40075 27.3172 6.8126C27.5784 6.91677 27.7783 7.08704 27.917 7.32342C28.0556 7.55979 28.1249 7.8126 28.1249 8.08183V21.6539C28.1249 22.149 27.9158 22.5276 27.4975 22.7897C27.0792 23.0517 26.6393 23.0801 26.1778 22.875C25.5031 22.5545 24.804 22.3117 24.0804 22.1467C23.3569 21.9816 22.6217 21.8991 21.8749 21.8991C20.8894 21.8991 19.9266 22.0229 18.9867 22.2704C18.0468 22.5181 17.1466 22.8854 16.286 23.3726C16.0969 23.4736 15.8961 23.5545 15.6838 23.6154C15.4715 23.6763 15.2435 23.7068 14.9999 23.7068ZM17.4278 11.077C17.4278 10.9376 17.4775 10.795 17.5768 10.6491C17.6762 10.5033 17.7892 10.4031 17.9158 10.3487C18.536 10.1003 19.1742 9.91195 19.8305 9.78376C20.4867 9.65555 21.1682 9.59145 21.8749 9.59145C22.2836 9.59145 22.679 9.61548 23.0612 9.66354C23.4434 9.71163 23.8284 9.77733 24.2163 9.86067C24.3637 9.89431 24.4911 9.97444 24.5985 10.101C24.7058 10.2276 24.7595 10.3751 24.7595 10.5434C24.7595 10.8254 24.671 11.0317 24.4939 11.1623C24.3168 11.2929 24.0873 11.3246 23.8052 11.2573C23.5056 11.1948 23.1943 11.1499 22.8713 11.1227C22.5484 11.0954 22.2163 11.0818 21.8749 11.0818C21.2692 11.0818 20.6758 11.1399 20.0949 11.2561C19.5139 11.3723 18.9598 11.5297 18.4326 11.7284C18.1377 11.8422 17.8966 11.8358 17.7091 11.7092C17.5216 11.5826 17.4278 11.3719 17.4278 11.077ZM17.4278 17.9039C17.4278 17.7645 17.4775 17.6199 17.5768 17.47C17.6762 17.3202 17.7892 17.218 17.9158 17.1635C18.5199 16.9151 19.1582 16.7289 19.8305 16.6047C20.5027 16.4805 21.1842 16.4184 21.8749 16.4184C22.2836 16.4184 22.679 16.4424 23.0612 16.4905C23.4434 16.5385 23.8284 16.6042 24.2163 16.6876C24.3637 16.7212 24.4911 16.8014 24.5985 16.928C24.7058 17.0546 24.7595 17.202 24.7595 17.3703C24.7595 17.6523 24.671 17.8586 24.4939 17.9892C24.3168 18.1198 24.0873 18.1515 23.8052 18.0842C23.5056 18.0217 23.1943 17.9768 22.8713 17.9496C22.5484 17.9223 22.2163 17.9087 21.8749 17.9087C21.2772 17.9087 20.6898 17.9656 20.1129 18.0794C19.536 18.1932 18.9839 18.3534 18.4567 18.5602C18.1618 18.682 17.9166 18.6788 17.7211 18.5505C17.5256 18.4223 17.4278 18.2068 17.4278 17.9039ZM17.4278 14.5025C17.4278 14.3631 17.4775 14.2204 17.5768 14.0746C17.6762 13.9288 17.7892 13.8286 17.9158 13.7741C18.536 13.5257 19.1742 13.3374 19.8305 13.2092C20.4867 13.081 21.1682 13.0169 21.8749 13.0169C22.2836 13.0169 22.679 13.041 23.0612 13.089C23.4434 13.1371 23.8284 13.2028 24.2163 13.2861C24.3637 13.3198 24.4911 13.3999 24.5985 13.5265C24.7058 13.6531 24.7595 13.8006 24.7595 13.9688C24.7595 14.2509 24.671 14.4572 24.4939 14.5878C24.3168 14.7184 24.0873 14.7501 23.8052 14.6828C23.5056 14.6203 23.1943 14.5754 22.8713 14.5481C22.5484 14.5209 22.2163 14.5073 21.8749 14.5073C21.2692 14.5073 20.6758 14.5654 20.0949 14.6815C19.5139 14.7977 18.9598 14.9552 18.4326 15.1539C18.1377 15.2677 17.8966 15.2613 17.7091 15.1347C17.5216 15.0081 17.4278 14.7974 17.4278 14.5025Z"
                                        fill="white" />
                                </svg>

                            </span>
                            <div class="b-text">
                                <h5 class="builder-editable" builder-identity="2">{{ get_phrase('150k +') }}</h5>
                                <p class="builder-editable" builder-identity="3">{{ get_phrase('Top rated Courses') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="skil-content">
                        <span class="title-head builder-editable"
                            builder-identity="4">{{ get_phrase('Know About Us') }}</span>
                        <h2 class="title"><span class="builder-editable"
                                builder-identity="5">{{ get_phrase('Learn & Grow Your Skills From ') }}</span> <span
                                class="gradient shadow-none color builder-editable"
                                builder-identity="52nd">{{ get_phrase('Educate') }}</span>
                        </h2>
                        <p class="description mt-5 builder-editable" builder-identity="6">
                            {{ get_phrase('It offers courses designed to enhance knowledge and develop practical skills for personal and professional growth.') }}
                        </p>
                        <ul>
                            <li>
                                <div class="svg">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.4083 16.3111L24.8186 12.8896C24.9709 12.7356 25.1492 12.6585 25.3535 12.6585C25.5578 12.6585 25.7407 12.7356 25.9022 12.8896C26.0638 13.0437 26.1427 13.224 26.1389 13.4307C26.1352 13.6373 26.0563 13.8144 25.9022 13.962L22.059 17.7761C21.874 17.9676 21.6539 18.0633 21.3986 18.0633C21.1434 18.0633 20.92 17.9676 20.7286 17.7761L18.8978 15.9274C18.7437 15.7804 18.6648 15.6083 18.6611 15.4111C18.6573 15.2138 18.7362 15.0345 18.8978 14.8729C19.0518 14.7189 19.2324 14.64 19.4396 14.6362C19.6468 14.6325 19.8274 14.7114 19.9814 14.8729L21.4083 16.3111ZM10.628 21.9694C8.90488 20.4288 7.48318 19.0886 6.36289 17.9489C5.24258 16.8091 4.36009 15.7924 3.71543 14.8987C3.07077 14.005 2.62092 13.1891 2.36589 12.4509C2.1109 11.7128 1.9834 10.9653 1.9834 10.2085C1.9834 8.64995 2.51737 7.32997 3.58532 6.24857C4.65325 5.16717 5.95675 4.62646 7.49584 4.62646C8.47555 4.62646 9.41374 4.85495 10.3104 5.31191C11.2071 5.76885 11.9703 6.42286 12.6 7.27392C13.2355 6.42101 13.9837 5.76654 14.8444 5.31051C15.7051 4.85448 16.6195 4.62646 17.5875 4.62646C18.992 4.62646 20.2312 5.07706 21.3051 5.97825C22.379 6.87942 23.0072 8.01729 23.1897 9.39186H21.6417C21.4517 8.48544 20.9918 7.71737 20.2619 7.08766C19.532 6.45796 18.6405 6.1431 17.5875 6.1431C16.5016 6.1431 15.6491 6.42018 15.0298 6.97435C14.4106 7.52852 13.7614 8.23712 13.0824 9.10016H12.1176C11.4042 8.21019 10.7393 7.49486 10.1231 6.95417C9.50685 6.41346 8.6311 6.1431 7.49584 6.1431C6.37255 6.1431 5.42576 6.53386 4.65544 7.31537C3.88515 8.0969 3.50001 9.06128 3.50001 10.2085C3.50001 10.8259 3.62153 11.4525 3.86459 12.0883C4.10765 12.7242 4.56459 13.4688 5.23542 14.3221C5.90626 15.1754 6.82987 16.188 8.00626 17.3599C9.18265 18.5318 10.7139 19.9689 12.6 21.671C13.131 21.1983 13.8418 20.5589 14.7325 19.7527C15.6232 18.9465 16.2743 18.3475 16.6856 17.9556L16.8531 18.1232L17.2218 18.4918L17.5904 18.8605L17.758 19.028C17.3347 19.4393 16.9043 19.8421 16.4668 20.2362C16.0293 20.6303 15.6363 20.9859 15.2878 21.303L13.2215 23.1697C13.03 23.3222 12.8229 23.3985 12.6 23.3985C12.3772 23.3985 12.17 23.3222 11.9786 23.1697L10.628 21.9694Z"
                                            fill="#F81163" />
                                    </svg>
                                </div>
                                <div class="skill-text">
                                    <span class="builder-editable"
                                        builder-identity="7">{{ get_phrase('Life time Access') }}</span>
                                    <p class="builder-editable" builder-identity="8">
                                        {{ get_phrase('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.') }}
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="svg color-dash">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M6.31752 20.0083C4.63719 20.0083 3.21281 19.4264 2.04437 18.2627C0.875956 17.0989 0.291748 15.6806 0.291748 14.0077C0.291748 12.3349 0.875995 10.914 2.04449 9.74505C3.213 8.57615 4.63712 7.9917 6.31685 7.9917C6.98557 7.9917 7.62746 8.10762 8.24252 8.33945C8.85757 8.57129 9.41637 8.90932 9.91894 9.35355L12.4699 11.5814L11.3212 12.5776L8.952 10.4798C8.59152 10.1672 8.18948 9.92712 7.74587 9.75961C7.30225 9.59207 6.84178 9.50831 6.36448 9.50831C5.10613 9.50831 4.03219 9.94615 3.14264 10.8218C2.25312 11.6975 1.80836 12.7584 1.80836 14.0044C1.80836 15.2504 2.25312 16.3147 3.14264 17.1971C4.03219 18.0796 5.10613 18.5209 6.36448 18.5209C6.84178 18.5209 7.30225 18.4371 7.74587 18.2696C8.18948 18.1021 8.59152 17.862 8.952 17.5494L18.0812 9.35355C18.5762 8.92128 19.1323 8.58623 19.7493 8.34841C20.3664 8.1106 21.0106 7.9917 21.6821 7.9917C23.3622 7.9917 24.7865 8.57532 25.9553 9.74255C27.124 10.9098 27.7084 12.3286 27.7084 13.999C27.7084 15.6868 27.1201 17.1104 25.9435 18.2695C24.767 19.4287 23.333 20.0083 21.6417 20.0083C20.9734 20.0083 20.3355 19.8905 19.7281 19.655C19.1207 19.4194 18.562 19.0832 18.052 18.6465L15.4943 16.3894L16.6789 15.4112L19.0481 17.5202C19.4086 17.8418 19.8106 18.0841 20.2542 18.2471C20.6979 18.4102 21.1583 18.4917 21.6356 18.4917C22.894 18.4917 23.9679 18.0539 24.8575 17.1782C25.747 16.3025 26.1917 15.2416 26.1917 13.9956C26.1917 12.7496 25.747 11.6854 24.8575 10.8029C23.9679 9.92038 22.894 9.47914 21.6356 9.47914C21.1583 9.47914 20.6979 9.56291 20.2542 9.73044C19.8106 9.89796 19.4086 10.138 19.0481 10.4506L9.92596 18.6442C9.4262 19.0974 8.86775 19.4381 8.2506 19.6662C7.63347 19.8943 6.98911 20.0083 6.31752 20.0083Z"
                                            fill="#ec2426" />
                                    </svg>
                                </div>
                                <div class="skill-text">
                                    <span class="builder-editable"
                                        builder-identity="9">{{ get_phrase('Learn from Anywhere') }}</span>
                                    <p class="builder-editable" builder-identity="10">
                                        {{ get_phrase('It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.') }}
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <a href="{{ route('about.us') }}" class="btn btn-danger-1 gradient mt-50 builder-editable"
                            builder-identity="11">{{ get_phrase('More about us') }} <i
                                class="fa-solid fa-arrow-right-long ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->

    <!-- Online Course Area Start -->
    <section class="section-padding">
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
            <div class="row">
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
    {{-- <section class="">
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
    </section> --}}
    <!-- Event Area End -->

    <!-- FAQ Area Start -->
    <section class="section-padding">
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
            <div class="row g-28px align-items-center">
                {{-- <div class="col-lg-5">
                    <div class="tuition-banner">
                        @if (isset($storImage->faq_image))
                            <img src="{{ asset('uploads/home_page_image/university/' . $storImage->faq_image) }}"
                                alt="">
                        @endif
                    </div>
                </div> --}}
                <div class="col-lg-12">
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
    <!-- FAQ Area End -->

    <!-- Testimonial Area Start -->
    <section class="testimonials-wrapper section-padding px-20">
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
                            <div class="single-opinion">
                                <div class="user-image">
                                    <img class="builder-editable" builder-identity="6"
                                        src="{{ asset('assets/page-builder/block-image/test-image.png') }}"
                                        alt="">
                                </div>
                                <div class="testimonial-border">
                                    <div class="testimonial-des">
                                        <div class="user-info d-flex">
                                            <div class="ellipsis-line-2">
                                                <h4><span class="builder-editable" builder-identity="8">No review</span>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            @foreach ($reviews as $review)
                            
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
                                                <div class="user-info d-flex gap-2">
                                                    <div class="ellipsis-line-2">
                                                        <h4><span class="builder-editable"
                                                                builder-identity="8">{{ $review->user_name }}</span>
                                                        </h4>
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
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Area End -->
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
        <section class="section-padding">
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
                <div class="row g-20px">
                    @foreach ($blogs as $key => $blog)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <a href="{{ route('blog.details', $blog->slug) }}" class="blog-post1-link">
                                <div class="blog-post1-inner">
                                    <div class="banner">
                                        <img src="{{ get_image($blog->thumbnail) }}" alt="...">
                                    </div>
                                    <div class="blog-post1-details">
                                        <h3 class="title-3 mb-3 pt-2">{{ ucfirst($blog->title) }}</h3>
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
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".categorySwiper", {
            slidesPerView: 4,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
            breakpoints: {
                // When screen width is 320px or more (mobile)
                320: {
                    slidesPerView: 1,
                },
                // When screen width is 768px or more (tablet)
                768: {
                    slidesPerView: 2,
                },
                // When screen width is 1024px or more (desktop)
                1024: {
                    slidesPerView: 4,
                }
            }
        });
    </script>
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
