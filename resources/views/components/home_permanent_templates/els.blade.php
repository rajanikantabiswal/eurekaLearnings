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

        .els-section1 .card h1 {
            font-weight: 700 !important;
        }

        section.ec-council {
            position: relative;
            background: url("{{ asset('assets/frontend/default/images/ec-council-batch.webp') }}");
            background-size: content;
            background-repeat: no-repeat;
            background-position: center;
            border-bottom: 1px solid #EC2426;
        }

        section.ec-council::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #eeeeee59;
            /* Adjust the color and opacity */
            z-index: 1;
            pointer-events: none;
            /* Ensures that it doesn’t block interactions */
        }

        section.ec-council>* {
            position: relative;
            z-index: 2;
        }

        .ec-council .title {
            width: 50%;
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

            .ec-council .title {
                width: 100%;
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

            .els-navigation-btn {
                display: none;
            }
        }

        .swiper-button-next.els-navigation-btn {
            background-image: url('{{ asset('assets/frontend/default/images/next-arrow.svg') }}');
        }

        .swiper-button-prev.els-navigation-btn {
            background-image: url('{{ asset('assets/frontend/default/images/prev-arrow.svg') }}');
        }

        .els-navigation-btn:hover {
            background-color: #ec2426BD;
        }

        .els-navigation-btn::after {
            content: '';
        }

        .marquee-box {
            --space: 2rem;

            display: grid;
            align-content: center;
            overflow: hidden;
            gap: var(--space);
            width: 100%;
            font-family: "Corben", system-ui, sans-serif;
            font-size: 1.5rem;
            line-height: 1.5;
        }

        .marquee {
            --duration: 10s;
            --gap: var(--space);

            display: flex;
            overflow: hidden;
            user-select: none;
            gap: var(--gap);

        }

        .marquee__group {
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: space-around;
            gap: var(--gap);
            min-width: 100%;
            animation: scroll var(--duration) linear infinite;
        }

        @media (prefers-reduced-motion: reduce) {
            .marquee__group {
                animation-play-state: paused;
            }
        }

        .marquee__group img {
            /* max-width: clamp(10rem, 1rem + 28vmin, 20rem);
                                                        aspect-ratio: 1; */
            object-fit: content;
            border-radius: 1rem;
            width: 160px;
        }

        /* .marquee__group p {
                                                        background-image: linear-gradient(75deg,
                                                                hsl(240deg 70% 49%) 0%,
                                                                hsl(253deg 70% 49%) 11%,
                                                                hsl(267deg 70% 49%) 22%,
                                                                hsl(280deg 71% 48%) 33%,
                                                                hsl(293deg 71% 48%) 44%,
                                                                hsl(307deg 71% 48%) 56%,
                                                                hsl(320deg 71% 48%) 67%,
                                                                hsl(333deg 72% 48%) 78%,
                                                                hsl(347deg 72% 48%) 89%,
                                                                hsl(0deg 73% 47%) 100%);
                                                        -webkit-background-clip: text;
                                                        -webkit-text-fill-color: transparent;
                                                    } */

        .marquee--borders {
            border-block: 3px solid #ec2426;
            padding-block: 0.75rem;
        }

        .marquee--reverse .marquee__group {
            animation-delay: calc(var(--duration) / -2);
            animation-direction: reverse;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(calc(-100% - var(--gap)));
            }
        }

        section.alliance h1 {
            font-size: 22px !important;
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
                    <h1 class="title-5 lh-normal mb-20px overflow-auto text-nowrap">
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
                    <div class="d-flex flex-column flex-sm-row gap-4">
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

                    <div class="card shadow home-icon-box-1">
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
                    <div class="card shadow home-icon-box-2">
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
                                <h1 class="mb-2 text-center font-weight-bold">8K+</h1>
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

    <!-- Alliance Area Start -->
    <section class="py-4 alliance">
        <div class="">
            <h1 class="title-5 fs-32px lh-42px fw-500 mb-20px text-center">
                Associates and Strategic Alliance</h1>
        </div>
        <div class="marquee-box">
            <div class="marquee">
                <div class="marquee__group">
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture8-1-e1700473146554.png'
                        alt=''>
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture11-1-e1700473181203.png'
                        alt=''>
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture19-1.png' alt=''>
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture21-1.png' alt=''>
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture12-1.png' alt=''>
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture8-1-e1700473146554.png'
                        alt=''>
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture11-1-e1700473181203.png'
                        alt=''>
                </div>

                <div aria-hidden="true" class="marquee__group">
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture8-1-e1700473146554.png'
                        alt=''>
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture11-1-e1700473181203.png'
                        alt=''>
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture19-1.png' alt=''>
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture21-1.png' alt=''>
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture12-1.png' alt=''>
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture8-1-e1700473146554.png'
                        alt=''>
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture11-1-e1700473181203.png'
                        alt=''>
                </div>
            </div>

            {{-- <div class="marquee marquee--borders" style="--duration: 100s">
                <div class="marquee__group">
                    <p class="gradient color shadow-none">ASSOCIATES & STRATEGIC ALLIANCES</p>
                    <p class="gradient color shadow-none" aria-hidden="true">ASSOCIATES & STRATEGIC ALLIANCES</p>
                    <p class="gradient color shadow-none" aria-hidden="true">ASSOCIATES & STRATEGIC ALLIANCES</p>
                </div>

                <div aria-hidden="true" class="marquee__group">
                    <p class="gradient color shadow-none">ASSOCIATES & STRATEGIC ALLIANCES</p>
                    <p class="gradient color shadow-none">ASSOCIATES & STRATEGIC ALLIANCES</p>
                    <p class="gradient color shadow-none">ASSOCIATES & STRATEGIC ALLIANCES</p>
                </div>
            </div> --}}

            {{-- <div class="marquee marquee--reverse">
                <div class="marquee__group">
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture8-1-e1700473146554.png'
                        alt=''>
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture11-1-e1700473181203.png'
                        alt=''>
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture19-1.png'
                        alt=''>
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture21-1.png'
                        alt=''>
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture12-1.png'
                        alt=''>
                </div>

                <div aria-hidden="true" class="marquee__group">
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture8-1-e1700473146554.png'
                        alt=''>
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture11-1-e1700473181203.png'
                        alt=''>
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture19-1.png'
                        alt=''>
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture21-1.png'
                        alt=''>
                    <img src='https://eurekalearnings.in/wp-content/uploads/2023/10/Picture12-1.png'
                        alt=''>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- Alliance Area Start -->


    <section class="section-padding ec-council ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-sm-0">
                    <div class="title">
                        <h1 class="title-5 fs-32px">The Only center in Odisha accredited by the <span
                                class="gradient shadow-none color builder-editable">EC-Council</span></h1>
                    </div>

                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('assets/frontend/default/images/points.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Category Area Start -->
    <section class="section-padding">
        <!-- Section title -->
        <div class="row">
            <div class="col-md-12">
                <div class="home1-section-title">
                    <h1 class="title mb-20 fw-500">{{ get_phrase('Browse by Categories') }}</h1>
                    <p class="info">
                        {{ get_phrase('Those course highlights a handpicked course with exceptional content or exclusive offerings.') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="category-wrapper container">
            <div class="w-100 swiper categorySwiper">
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

                    <div id="myCanvasContainer">
                        <canvas width="500" height="500" style="width: 100%; max-width: 70vh;" id="myCanvas">
                            <div id="tags">
                                <a title="Laravel" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Laravel"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(255, 45, 32);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Laravel</title> <path d=&quot;M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z&quot;></path> </svg>"></a>
                                <a title="Prometheus" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Prometheus"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(230, 82, 44);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Prometheus</title> <path d=&quot;M12 0C5.373 0 0 5.372 0 12c0 6.627 5.373 12 12 12s12-5.373 12-12c0-6.628-5.373-12-12-12zm0 22.46c-1.885 0-3.414-1.26-3.414-2.814h6.828c0 1.553-1.528 2.813-3.414 2.813zm5.64-3.745H6.36v-2.046h11.28v2.046zm-.04-3.098H6.391c-.037-.043-.075-.086-.111-.13-1.155-1.401-1.427-2.133-1.69-2.879-.005-.025 1.4.287 2.395.511 0 0 .513.119 1.262.255-.72-.843-1.147-1.915-1.147-3.01 0-2.406 1.845-4.508 1.18-6.207.648.053 1.34 1.367 1.387 3.422.689-.951.977-2.69.977-3.755 0-1.103.727-2.385 1.454-2.429-.648 1.069.168 1.984.894 4.256.272.854.237 2.29.447 3.201.07-1.892.395-4.652 1.595-5.605-.529 1.2.079 2.702.494 3.424.671 1.164 1.078 2.047 1.078 3.716a4.642 4.642 0 01-1.11 2.996c.792-.149 1.34-.283 1.34-.283l2.573-.502s-.374 1.538-1.81 3.019z&quot;></path> </svg>"></a>
                                <a title="GitLab" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="GitLab"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(252, 109, 38);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>GitLab</title> <path d=&quot;m23.6004 9.5927-.0337-.0862L20.3.9814a.851.851 0 0 0-.3362-.405.8748.8748 0 0 0-.9997.0539.8748.8748 0 0 0-.29.4399l-2.2055 6.748H7.5375l-2.2057-6.748a.8573.8573 0 0 0-.29-.4412.8748.8748 0 0 0-.9997-.0537.8585.8585 0 0 0-.3362.4049L.4332 9.5015l-.0325.0862a6.0657 6.0657 0 0 0 2.0119 7.0105l.0113.0087.03.0213 4.976 3.7264 2.462 1.8633 1.4995 1.1321a1.0085 1.0085 0 0 0 1.2197 0l1.4995-1.1321 2.4619-1.8633 5.006-3.7489.0125-.01a6.0682 6.0682 0 0 0 2.0094-7.003z&quot;></path> </svg>"></a>
                                <a title="Ansible" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Ansible"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(238, 0, 0);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Ansible</title> <path d=&quot;M10.617 11.473l4.686 3.695-3.102-7.662zM12 0C5.371 0 0 5.371 0 12s5.371 12 12 12 12-5.371 12-12S18.629 0 12 0zm5.797 17.305c-.011.471-.403.842-.875.83-.236 0-.416-.09-.664-.293l-6.19-5-2.079 5.203H6.191L11.438 5.44c.124-.314.427-.52.764-.506.326-.014.63.189.742.506l4.774 11.494c.045.111.08.234.08.348-.001.009-.001.009-.001.023z&quot;></path> </svg>"></a>
                                <a title="Apache Spark" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Apache Spark"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(226, 90, 28);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Apache Spark</title> <path d=&quot;M10.812 0c-.425.013-.845.215-1.196.605a3.593 3.593 0 00-.493.722c-.355.667-.425 1.415-.556 2.143a551.9 551.9 0 00-.726 4.087c-.027.16-.096.227-.244.273C5.83 8.386 4.06 8.94 2.3 9.514c-.387.125-.773.289-1.114.506-1.042.665-1.196 1.753-.415 2.71.346.422.79.715 1.284.936 1.1.49 2.202.976 3.3 1.47.019.01.036.013.053.019h-.004l1.306.535c0 .023.002.045 0 .073-.2 2.03-.39 4.063-.58 6.095-.04.419-.012.831.134 1.23.317.87 1.065 1.148 1.881.701.372-.204.666-.497.937-.818 1.372-1.623 2.746-3.244 4.113-4.872.111-.133.205-.15.363-.098.349.117.697.231 1.045.347h.001c.02.012.045.02.073.03l.142.042c1.248.416 2.68.775 3.929 1.19.4.132.622.164 1.045.098.311-.048.592-.062.828-.236.602-.33.995-.957.988-1.682-.005-.427-.154-.813-.35-1.186-.82-1.556-1.637-3.113-2.461-4.666-.078-.148-.076-.243.037-.375 1.381-1.615 2.756-3.236 4.133-4.855.272-.32.513-.658.653-1.058.308-.878-.09-1.57-1-1.741a2.783 2.783 0 00-1.235.069c-1.974.521-3.947 1.041-5.918 1.57-.175.047-.26.015-.355-.144a353.08 353.08 0 00-2.421-4.018 4.61 4.61 0 00-.652-.849c-.371-.37-.802-.549-1.227-.536zm.172 3.703a.592.592 0 01.189.211c.87 1.446 1.742 2.89 2.609 4.338.07.118.135.16.277.121 1.525-.41 3.052-.813 4.579-1.217.367-.098.735-.193 1.103-.289a.399.399 0 01-.1.2c-1.259 1.48-2.516 2.962-3.779 4.438-.11.13-.12.22-.04.37.937 1.803 1.768 3.309 2.498 4.76l-3.696-1.019c-.538-.18-1.077-.358-1.615-.539-.163-.055-.25-.03-.36.1-1.248 1.488-2.504 2.97-3.759 4.454a.398.398 0 01-.18.132c.035-.378.068-.757.104-1.136.149-1.572.297-3.144.451-4.716-.03-.318.117-.405-.322-.545-1.493-.593-3.346-1.321-4.816-1.905a.595.595 0 01.24-.134c1.797-.57 3.595-1.14 5.394-1.705.127-.04.199-.092.211-.233.013-.148.05-.294.076-.441.241-1.363.483-2.726.726-4.088.068-.386.14-.771.21-1.157z&quot;></path> </svg>"></a><a
                                    title="MongoDB" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="MongoDB"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(71, 162, 72);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>MongoDB</title> <path d=&quot;M17.193 9.555c-1.264-5.58-4.252-7.414-4.573-8.115-.28-.394-.53-.954-.735-1.44-.036.495-.055.685-.523 1.184-.723.566-4.438 3.682-4.74 10.02-.282 5.912 4.27 9.435 4.888 9.884l.07.05A73.49 73.49 0 0111.91 24h.481c.114-1.032.284-2.056.51-3.07.417-.296.604-.463.85-.693a11.342 11.342 0 003.639-8.464c.01-.814-.103-1.662-.197-2.218zm-5.336 8.195s0-8.291.275-8.29c.213 0 .49 10.695.49 10.695-.381-.045-.765-1.76-.765-2.405z&quot;></path> </svg>"></a><a
                                    title="CSS3" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="CSS3"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(21, 114, 182);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>CSS3</title> <path d=&quot;M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.413L5.41 4.41l.213 2.622 10.125.002-.255 2.716h-6.64l.24 2.573h6.182l-.366 3.523-2.91.804-2.956-.81-.188-2.11h-2.61l.29 3.855L12 19.288l5.373-1.53L18.59 4.414z&quot;></path> </svg>"></a><a
                                    title="Sass" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Sass"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(204, 102, 153);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Sass</title> <path d=&quot;M12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zM9.615 15.998c.175.645.156 1.248-.024 1.792l-.065.18c-.024.061-.052.12-.078.176-.14.29-.326.56-.555.81-.698.759-1.672 1.047-2.09.805-.45-.262-.226-1.335.584-2.19.871-.918 2.12-1.509 2.12-1.509v-.003l.108-.061zm9.911-10.861c-.542-2.133-4.077-2.834-7.422-1.645-1.989.707-4.144 1.818-5.693 3.267C4.568 8.48 4.275 9.98 4.396 10.607c.427 2.211 3.457 3.657 4.703 4.73v.006c-.367.18-3.056 1.529-3.686 2.925-.675 1.47.105 2.521.615 2.655 1.575.436 3.195-.36 4.065-1.649.84-1.261.766-2.881.404-3.676.496-.135 1.08-.195 1.83-.104 2.101.24 2.521 1.56 2.43 2.1-.09.539-.523.854-.674.944-.15.091-.195.12-.181.181.015.09.091.09.21.075.165-.03 1.096-.45 1.141-1.471.045-1.29-1.186-2.729-3.375-2.7-.9.016-1.471.091-1.875.256-.03-.045-.061-.075-.105-.105-1.35-1.455-3.855-2.475-3.75-4.41.03-.705.285-2.564 4.8-4.814 3.705-1.846 6.661-1.335 7.171-.21.733 1.604-1.576 4.59-5.431 5.024-1.47.165-2.235-.404-2.431-.615-.209-.225-.239-.24-.314-.194-.12.06-.045.255 0 .375.12.3.585.825 1.396 1.095.704.225 2.43.359 4.5-.45 2.324-.899 4.139-3.405 3.614-5.505l.073.067z&quot;></path> </svg>"></a><a
                                    title="Ruby on Rails" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Ruby on Rails"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(211, 0, 1);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Ruby on Rails</title> <path d=&quot;M.741 19.365h8.36s-1.598-7.291 3.693-10.243l.134-.066c1.286-.637 4.907-2.431 10.702 1.854.19-.159.37-.286.37-.286s-5.503-5.492-11.63-4.878c-3.079.275-6.867 3.079-9.09 6.783C1.058 16.233.741 19.365.741 19.365Zm8.804-.783a10.682 10.682 0 0 1-.127-1.333l1.143.412c.063.498.159.963.254 1.376l-1.27-.455Zm-7.799-4.317L.529 13.82c-.201.455-.423.984-.529 1.27l1.217.444c.137-.359.36-.878.529-1.269Zm7.831.296.857.677c.042-.413.116-.825.222-1.238l-.762-.603c-.137.391-.233.783-.317 1.164Zm2.042-2.646-.508-.762c.191-.243.413-.486.656-.709l.476.72a5.958 5.958 0 0 0-.624.751ZM4.19 8.878l.752.656c-.254.265-.498.551-.72.836l-.815-.698c.244-.265.508-.529.783-.794Zm9.799 1.027-.243-.73c.265-.117.571-.233.931-.339l.233.698a6.82 6.82 0 0 0-.921.371Zm3.122-.656.042-.667c.339.021.688.064 1.048.138l-.042.656a5.859 5.859 0 0 0-1.048-.127ZM8.942 6.392l-.476-.731c-.265.138-.54.286-.826.455l.487.741c.275-.169.54-.328.815-.465Zm9.217-.053.042-.709c-.095-.053-.36-.18-1.026-.371l-.043.699c.349.116.688.243 1.027.381ZM13.238 5.28h.106l-.212-.645c-.328 0-.666.021-1.016.063l.201.625a8.87 8.87 0 0 1 .921-.043Z&quot;></path> </svg>"></a><a
                                    title="Vercel" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Vercel"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(0, 0, 0);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Vercel</title> <path d=&quot;M24 22.525H0l12-21.05 12 21.05z&quot;></path> </svg>"></a><a
                                    title="RabbitMQ" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="RabbitMQ"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(255, 102, 0);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>RabbitMQ</title> <path d=&quot;M23.035 9.601h-7.677a.956.956 0 01-.962-.962V.962a.956.956 0 00-.962-.956H10.56a.956.956 0 00-.962.956V8.64a.956.956 0 01-.962.962H5.762a.956.956 0 01-.961-.962V.962A.956.956 0 003.839 0H.959a.956.956 0 00-.956.962v22.076A.956.956 0 00.965 24h22.07a.956.956 0 00.962-.962V10.58a.956.956 0 00-.962-.98zm-3.86 8.152a1.437 1.437 0 01-1.437 1.443h-1.924a1.437 1.437 0 01-1.436-1.443v-1.917a1.437 1.437 0 011.436-1.443h1.924a1.437 1.437 0 011.437 1.443z&quot;></path> </svg>"></a><a
                                    title="NGINX" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="NGINX"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(0, 150, 57);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>NGINX</title> <path d=&quot;M12 0L1.605 6v12L12 24l10.395-6V6L12 0zm6 16.59c0 .705-.646 1.29-1.529 1.29-.631 0-1.351-.255-1.801-.81l-6-7.141v6.66c0 .721-.57 1.29-1.274 1.29H7.32c-.721 0-1.29-.6-1.29-1.29V7.41c0-.705.63-1.29 1.5-1.29.646 0 1.38.255 1.83.81l5.97 7.141V7.41c0-.721.6-1.29 1.29-1.29h.075c.72 0 1.29.6 1.29 1.29v9.18H18z&quot;></path> </svg>"></a><a
                                    title="WordPress" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="WordPress"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(33, 117, 155);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>WordPress</title> <path d=&quot;M21.469 6.825c.84 1.537 1.318 3.3 1.318 5.175 0 3.979-2.156 7.456-5.363 9.325l3.295-9.527c.615-1.54.82-2.771.82-3.864 0-.405-.026-.78-.07-1.11m-7.981.105c.647-.03 1.232-.105 1.232-.105.582-.075.514-.93-.067-.899 0 0-1.755.135-2.88.135-1.064 0-2.85-.15-2.85-.15-.585-.03-.661.855-.075.885 0 0 .54.061 1.125.09l1.68 4.605-2.37 7.08L5.354 6.9c.649-.03 1.234-.1 1.234-.1.585-.075.516-.93-.065-.896 0 0-1.746.138-2.874.138-.2 0-.438-.008-.69-.015C4.911 3.15 8.235 1.215 12 1.215c2.809 0 5.365 1.072 7.286 2.833-.046-.003-.091-.009-.141-.009-1.06 0-1.812.923-1.812 1.914 0 .89.513 1.643 1.06 2.531.411.72.89 1.643.89 2.977 0 .915-.354 1.994-.821 3.479l-1.075 3.585-3.9-11.61.001.014zM12 22.784c-1.059 0-2.081-.153-3.048-.437l3.237-9.406 3.315 9.087c.024.053.05.101.078.149-1.12.393-2.325.609-3.582.609M1.211 12c0-1.564.336-3.05.935-4.39L7.29 21.709C3.694 19.96 1.212 16.271 1.211 12M12 0C5.385 0 0 5.385 0 12s5.385 12 12 12 12-5.385 12-12S18.615 0 12 0&quot;></path> </svg>"></a><a
                                    title="Google Cloud" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Google Cloud"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(66, 133, 244);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Google Cloud</title> <path d=&quot;M12.19 2.38a9.344 9.344 0 0 0-9.234 6.893c.053-.02-.055.013 0 0-3.875 2.551-3.922 8.11-.247 10.941l.006-.007-.007.03a6.717 6.717 0 0 0 4.077 1.356h5.173l.03.03h5.192c6.687.053 9.376-8.605 3.835-12.35a9.365 9.365 0 0 0-2.821-4.552l-.043.043.006-.05A9.344 9.344 0 0 0 12.19 2.38zm-.358 4.146c1.244-.04 2.518.368 3.486 1.15a5.186 5.186 0 0 1 1.862 4.078v.518c3.53-.07 3.53 5.262 0 5.193h-5.193l-.008.009v-.04H6.785a2.59 2.59 0 0 1-1.067-.23h.001a2.597 2.597 0 1 1 3.437-3.437l3.013-3.012A6.747 6.747 0 0 0 8.11 8.24c.018-.01.04-.026.054-.023a5.186 5.186 0 0 1 3.67-1.69z&quot;></path> </svg>"></a><a
                                    title="Grafana" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Grafana"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(244, 104, 0);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Grafana</title> <path d=&quot;M23.02 10.59a8.578 8.578 0 0 0-.862-3.034 8.911 8.911 0 0 0-1.789-2.445c.337-1.342-.413-2.505-.413-2.505-1.292-.08-2.113.4-2.416.62-.052-.02-.102-.044-.154-.064-.22-.089-.446-.172-.677-.247-.231-.073-.47-.14-.711-.197a9.867 9.867 0 0 0-.875-.161C14.557.753 12.94 0 12.94 0c-1.804 1.145-2.147 2.744-2.147 2.744l-.018.093c-.098.029-.2.057-.298.088-.138.042-.275.094-.413.143-.138.055-.275.107-.41.166a8.869 8.869 0 0 0-1.557.87l-.063-.029c-2.497-.955-4.716.195-4.716.195-.203 2.658.996 4.33 1.235 4.636a11.608 11.608 0 0 0-.607 2.635C1.636 12.677.953 15.014.953 15.014c1.926 2.214 4.171 2.351 4.171 2.351.003-.002.006-.002.006-.005.285.509.615.994.986 1.446.156.19.32.371.488.548-.704 2.009.099 3.68.099 3.68 2.144.08 3.553-.937 3.849-1.173a9.784 9.784 0 0 0 3.164.501h.08l.055-.003.107-.002.103-.005.003.002c1.01 1.44 2.788 1.646 2.788 1.646 1.264-1.332 1.337-2.653 1.337-2.94v-.058c0-.02-.003-.039-.003-.06.265-.187.52-.387.758-.6a7.875 7.875 0 0 0 1.415-1.7c1.43.083 2.437-.885 2.437-.885-.236-1.49-1.085-2.216-1.264-2.354l-.018-.013-.016-.013a.217.217 0 0 1-.031-.02c.008-.092.016-.18.02-.27.011-.162.016-.323.016-.48v-.253l-.005-.098-.008-.135a1.891 1.891 0 0 0-.01-.13c-.003-.042-.008-.083-.013-.125l-.016-.124-.018-.122a6.215 6.215 0 0 0-2.032-3.73 6.015 6.015 0 0 0-3.222-1.46 6.292 6.292 0 0 0-.85-.048l-.107.002h-.063l-.044.003-.104.008a4.777 4.777 0 0 0-3.335 1.695c-.332.4-.592.84-.768 1.297a4.594 4.594 0 0 0-.312 1.817l.003.091c.005.055.007.11.013.164a3.615 3.615 0 0 0 .698 1.82 3.53 3.53 0 0 0 1.827 1.282c.33.098.66.14.971.137.039 0 .078 0 .114-.002l.063-.003c.02 0 .041-.003.062-.003.034-.002.065-.007.099-.01.007 0 .018-.003.028-.003l.031-.005.06-.008a1.18 1.18 0 0 0 .112-.02c.036-.008.072-.013.109-.024a2.634 2.634 0 0 0 .914-.415c.028-.02.056-.041.085-.065a.248.248 0 0 0 .039-.35.244.244 0 0 0-.309-.06l-.078.042c-.09.044-.184.083-.283.116a2.476 2.476 0 0 1-.475.096c-.028.003-.054.006-.083.006l-.083.002c-.026 0-.054 0-.08-.002l-.102-.006h-.012l-.024.006c-.016-.003-.031-.003-.044-.006-.031-.002-.06-.007-.091-.01a2.59 2.59 0 0 1-.724-.213 2.557 2.557 0 0 1-.667-.438 2.52 2.52 0 0 1-.805-1.475 2.306 2.306 0 0 1-.029-.444l.006-.122v-.023l.002-.031c.003-.021.003-.04.005-.06a3.163 3.163 0 0 1 1.352-2.29 3.12 3.12 0 0 1 .937-.43 2.946 2.946 0 0 1 .776-.101h.06l.07.002.045.003h.026l.07.005a4.041 4.041 0 0 1 1.635.49 3.94 3.94 0 0 1 1.602 1.662 3.77 3.77 0 0 1 .397 1.414l.005.076.003.075c.002.026.002.05.002.075 0 .024.003.052 0 .07v.065l-.002.073-.008.174a6.195 6.195 0 0 1-.08.639 5.1 5.1 0 0 1-.267.927 5.31 5.31 0 0 1-.624 1.13 5.052 5.052 0 0 1-3.237 2.014 4.82 4.82 0 0 1-.649.066l-.039.003h-.287a6.607 6.607 0 0 1-1.716-.265 6.776 6.776 0 0 1-3.4-2.274 6.75 6.75 0 0 1-.746-1.15 6.616 6.616 0 0 1-.714-2.596l-.005-.083-.002-.02v-.056l-.003-.073v-.096l-.003-.104v-.07l.003-.163c.008-.22.026-.45.054-.678a8.707 8.707 0 0 1 .28-1.355c.128-.444.286-.872.473-1.277a7.04 7.04 0 0 1 1.456-2.1 5.925 5.925 0 0 1 .953-.763c.169-.111.343-.213.524-.306.089-.05.182-.091.273-.135.047-.02.093-.042.138-.062a7.177 7.177 0 0 1 .714-.267l.145-.045c.049-.015.098-.026.148-.041.098-.029.197-.052.296-.076.049-.013.1-.02.15-.033l.15-.032.151-.028.076-.013.075-.01.153-.024c.057-.01.114-.013.171-.023l.169-.021c.036-.003.073-.008.106-.01l.073-.008.036-.003.042-.002c.057-.003.114-.008.171-.01l.086-.006h.023l.037-.003.145-.007a7.999 7.999 0 0 1 1.708.125 7.917 7.917 0 0 1 2.048.68 8.253 8.253 0 0 1 1.672 1.09l.09.077.089.078c.06.052.114.107.171.159.057.052.112.106.166.16.052.055.107.107.159.164a8.671 8.671 0 0 1 1.41 1.978c.012.026.028.052.04.078l.04.078.075.156c.023.051.05.1.07.153l.065.15a8.848 8.848 0 0 1 .45 1.34.19.19 0 0 0 .201.142.186.186 0 0 0 .172-.184c.01-.246.002-.532-.024-.856z&quot;></path> </svg>"></a><a
                                    title="Helm" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Helm"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(15, 22, 137);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Helm</title> <path d=&quot;M12.337 0c-.475 0-.861 1.016-.861 2.269 0 .527.069 1.011.183 1.396a8.514 8.514 0 0 0-3.961 1.22 5.229 5.229 0 0 0-.595-1.093c-.606-.866-1.34-1.436-1.79-1.43a.381.381 0 0 0-.217.066c-.39.273-.123 1.326.596 2.353.267.381.559.705.84.948a8.683 8.683 0 0 0-1.528 1.716h1.734a7.179 7.179 0 0 1 5.381-2.421 7.18 7.18 0 0 1 5.382 2.42h1.733a8.687 8.687 0 0 0-1.32-1.53c.35-.249.735-.643 1.078-1.133.719-1.027.986-2.08.596-2.353a.382.382 0 0 0-.217-.065c-.45-.007-1.184.563-1.79 1.43a4.897 4.897 0 0 0-.676 1.325 8.52 8.52 0 0 0-3.899-1.42c.12-.39.193-.887.193-1.429 0-1.253-.386-2.269-.862-2.269zM1.624 9.443v5.162h1.358v-1.968h1.64v1.968h1.357V9.443H4.62v1.838H2.98V9.443zm5.912 0v5.162h3.21v-1.108H8.893v-.95h1.64v-1.142h-1.64v-.84h1.853V9.443zm4.698 0v5.162h3.218v-1.362h-1.86v-3.8zm4.706 0v5.162h1.364v-2.643l1.357 1.225 1.35-1.232v2.65h1.365V9.443h-.614l-2.1 1.914-2.109-1.914zm-11.82 7.28a8.688 8.688 0 0 0 1.412 1.548 5.206 5.206 0 0 0-.841.948c-.719 1.027-.985 2.08-.596 2.353.39.273 1.289-.338 2.007-1.364a5.23 5.23 0 0 0 .595-1.092 8.514 8.514 0 0 0 3.961 1.219 5.01 5.01 0 0 0-.183 1.396c0 1.253.386 2.269.861 2.269.476 0 .862-1.016.862-2.269 0-.542-.072-1.04-.193-1.43a8.52 8.52 0 0 0 3.9-1.42c.121.4.352.865.675 1.327.719 1.026 1.617 1.637 2.007 1.364.39-.273.123-1.326-.596-2.353-.343-.49-.727-.885-1.077-1.135a8.69 8.69 0 0 0 1.202-1.36h-1.771a7.174 7.174 0 0 1-5.227 2.252 7.174 7.174 0 0 1-5.226-2.252z&quot;></path> </svg>"></a><a
                                    title="Cypress" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Cypress"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(105, 211, 167);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Cypress</title> <path d=&quot;M11.998.0195c-.8642 0-1.6816.1101-2.1445.1934v.002C4.1731 1.2283 0 6.1368 0 12.0018c0 1.1265.1573 2.2328.4648 3.3028.0387.1453.0915.2993.1368.4473 1.607 4.865 6.2245 8.226 11.3925 8.2285.0651 0 .2518-.0003.502-.0118.8564-.0353 1.6228-.5734 1.9512-1.369l.4736-1.1544L20.4258 8.043H18.621l-2.3164 5.871-2.334-5.871h-1.9082l3.2734 8.0117c-.8115 1.9702-1.6252 3.9395-2.4355 5.9101-.0808.1945-.2655.3284-.4727.336-.144.005-.285.0098-.4316.0098-4.5848 0-8.6672-3.0695-9.9277-7.4649a10.3058 10.3058 0 0 1-.3985-2.8437c0-5.0887 3.6521-9.3404 8.6035-10.164.2214-.037.8885-.1446 1.7246-.1446 4.4166 0 8.269 2.732 9.7305 6.8476.0558.144.0977.293.1465.4395.299.9746.4531 1.9887.4531 3.0215 0 4.5696-2.9413 8.5326-7.3164 9.8613l.4863 1.5996c5.085-1.546 8.4995-6.1518 8.502-11.459 0-1.5491-.2983-2.8706-.6504-3.8926-.0432-.1212-.0873-.2422-.1309-.3633h-.002C21.4577 3.0954 17.0444.0195 11.998.0195ZM8.4336 7.8906c-1.1999 0-2.1747.3852-2.9805 1.1758-.8007.7856-1.205 1.7736-1.205 2.9356 0 1.1544.4068 2.1368 1.205 2.9199.8058.7906 1.7806 1.1738 2.9805 1.1738 1.705 0 3.1556-.955 3.7871-2.4883l.0332-.082-1.6289-.5547c-.168.4563-.7552 1.4883-2.1914 1.4883-.6745 0-1.2437-.2344-1.6934-.6992-.4572-.4699-.6875-1.0632-.6875-1.7578 0-.6998.2253-1.2809.6875-1.7735.4522-.4648 1.019-.7012 1.6934-.7012 1.438 0 2.0238 1.0815 2.1934 1.4883l1.627-.5527-.0333-.084c-.629-1.5358-2.082-2.4883-3.7871-2.4883Z&quot;></path> </svg>"></a><a
                                    title="Astro" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Astro"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(188, 82, 238);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Astro</title> <path d=&quot;M8.358 20.162c-1.186-1.07-1.532-3.316-1.038-4.944.856 1.026 2.043 1.352 3.272 1.535 1.897.283 3.76.177 5.522-.678.202-.098.388-.229.608-.36.166.473.209.95.151 1.437-.14 1.185-.738 2.1-1.688 2.794-.38.277-.782.525-1.175.787-1.205.804-1.531 1.747-1.078 3.119l.044.148a3.158 3.158 0 0 1-1.407-1.188 3.31 3.31 0 0 1-.544-1.815c-.004-.32-.004-.642-.048-.958-.106-.769-.472-1.113-1.161-1.133-.707-.02-1.267.411-1.415 1.09-.012.053-.028.104-.045.165h.002zm-5.961-4.445s3.24-1.575 6.49-1.575l2.451-7.565c.092-.366.36-.614.662-.614.302 0 .57.248.662.614l2.45 7.565c3.85 0 6.491 1.575 6.491 1.575L16.088.727C15.93.285 15.663 0 15.303 0H8.697c-.36 0-.615.285-.784.727l-5.516 14.99z&quot;></path> </svg>"></a><a
                                    title="TensorFlow" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="TensorFlow"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(255, 111, 0);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>TensorFlow</title> <path d=&quot;M1.292 5.856L11.54 0v24l-4.095-2.378V7.603l-6.168 3.564.015-5.31zm21.43 5.311l-.014-5.31L12.46 0v24l4.095-2.378V14.87l3.092 1.788-.018-4.618-3.074-1.756V7.603l6.168 3.564z&quot;></path> </svg>"></a><a
                                    title="TypeScript" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="TypeScript"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(49, 120, 198);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>TypeScript</title> <path d=&quot;M1.125 0C.502 0 0 .502 0 1.125v21.75C0 23.498.502 24 1.125 24h21.75c.623 0 1.125-.502 1.125-1.125V1.125C24 .502 23.498 0 22.875 0zm17.363 9.75c.612 0 1.154.037 1.627.111a6.38 6.38 0 0 1 1.306.34v2.458a3.95 3.95 0 0 0-.643-.361 5.093 5.093 0 0 0-.717-.26 5.453 5.453 0 0 0-1.426-.2c-.3 0-.573.028-.819.086a2.1 2.1 0 0 0-.623.242c-.17.104-.3.229-.393.374a.888.888 0 0 0-.14.49c0 .196.053.373.156.529.104.156.252.304.443.444s.423.276.696.41c.273.135.582.274.926.416.47.197.892.407 1.266.628.374.222.695.473.963.753.268.279.472.598.614.957.142.359.214.776.214 1.253 0 .657-.125 1.21-.373 1.656a3.033 3.033 0 0 1-1.012 1.085 4.38 4.38 0 0 1-1.487.596c-.566.12-1.163.18-1.79.18a9.916 9.916 0 0 1-1.84-.164 5.544 5.544 0 0 1-1.512-.493v-2.63a5.033 5.033 0 0 0 3.237 1.2c.333 0 .624-.03.872-.09.249-.06.456-.144.623-.25.166-.108.29-.234.373-.38a1.023 1.023 0 0 0-.074-1.089 2.12 2.12 0 0 0-.537-.5 5.597 5.597 0 0 0-.807-.444 27.72 27.72 0 0 0-1.007-.436c-.918-.383-1.602-.852-2.053-1.405-.45-.553-.676-1.222-.676-2.005 0-.614.123-1.141.369-1.582.246-.441.58-.804 1.004-1.089a4.494 4.494 0 0 1 1.47-.629 7.536 7.536 0 0 1 1.77-.201zm-15.113.188h9.563v2.166H9.506v9.646H6.789v-9.646H3.375z&quot;></path> </svg>"></a><a
                                    title="Express" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Express"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(0, 0, 0);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Express</title> <path d=&quot;M24 18.588a1.529 1.529 0 01-1.895-.72l-3.45-4.771-.5-.667-4.003 5.444a1.466 1.466 0 01-1.802.708l5.158-6.92-4.798-6.251a1.595 1.595 0 011.9.666l3.576 4.83 3.596-4.81a1.435 1.435 0 011.788-.668L21.708 7.9l-2.522 3.283a.666.666 0 000 .994l4.804 6.412zM.002 11.576l.42-2.075c1.154-4.103 5.858-5.81 9.094-3.27 1.895 1.489 2.368 3.597 2.275 5.973H1.116C.943 16.447 4.005 19.009 7.92 17.7a4.078 4.078 0 002.582-2.876c.207-.666.548-.78 1.174-.588a5.417 5.417 0 01-2.589 3.957 6.272 6.272 0 01-7.306-.933 6.575 6.575 0 01-1.64-3.858c0-.235-.08-.455-.134-.666A88.33 88.33 0 010 11.577zm1.127-.286h9.654c-.06-3.076-2.001-5.258-4.59-5.278-2.882-.04-4.944 2.094-5.071 5.264z&quot;></path> </svg>"></a><a
                                    title="GraphQL" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="GraphQL"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(225, 0, 152);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>GraphQL</title> <path d=&quot;M12.002 0a2.138 2.138 0 1 0 0 4.277 2.138 2.138 0 1 0 0-4.277zm8.54 4.931a2.138 2.138 0 1 0 0 4.277 2.138 2.138 0 1 0 0-4.277zm0 9.862a2.138 2.138 0 1 0 0 4.277 2.138 2.138 0 1 0 0-4.277zm-8.54 4.931a2.138 2.138 0 1 0 0 4.276 2.138 2.138 0 1 0 0-4.276zm-8.542-4.93a2.138 2.138 0 1 0 0 4.276 2.138 2.138 0 1 0 0-4.277zm0-9.863a2.138 2.138 0 1 0 0 4.277 2.138 2.138 0 1 0 0-4.277zm8.542-3.378L2.953 6.777v10.448l9.049 5.224 9.047-5.224V6.777zm0 1.601 7.66 13.27H4.34zm-1.387.371L3.97 15.037V7.363zm2.774 0 6.646 3.838v7.674zM5.355 17.44h13.293l-6.646 3.836z&quot;></path> </svg>"></a><a
                                    title="JavaScript" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="JavaScript"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(247, 223, 30);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>JavaScript</title> <path d=&quot;M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z&quot;></path> </svg>"></a><a
                                    title="Vue.js" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Vue.js"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(79, 192, 141);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Vue.js</title> <path d=&quot;M24,1.61H14.06L12,5.16,9.94,1.61H0L12,22.39ZM12,14.08,5.16,2.23H9.59L12,6.41l2.41-4.18h4.43Z&quot;></path> </svg>"></a><a
                                    title="Tailwind CSS" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Tailwind CSS"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(6, 182, 212);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Tailwind CSS</title> <path d=&quot;M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z&quot;></path> </svg>"></a><a
                                    title="Gatsby" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Gatsby"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(102, 51, 153);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Gatsby</title> <path d=&quot;M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.6 0 12 0zm0 2.571c3.171 0 5.915 1.543 7.629 3.858l-1.286 1.115C16.886 5.572 14.571 4.286 12 4.286c-3.343 0-6.171 2.143-7.286 5.143l9.857 9.857c2.486-.857 4.373-3 4.973-5.572h-4.115V12h6c0 4.457-3.172 8.228-7.372 9.17L2.83 9.944C3.772 5.743 7.543 2.57 12 2.57zm-9.429 9.6l9.344 9.258c-2.4-.086-4.801-.943-6.601-2.743-1.8-1.8-2.743-4.201-2.743-6.515z&quot;></path> </svg>"></a><a
                                    title="Kubernetes" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Kubernetes"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(50, 108, 229);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Kubernetes</title> <path d=&quot;M10.204 14.35l.007.01-.999 2.413a5.171 5.171 0 0 1-2.075-2.597l2.578-.437.004.005a.44.44 0 0 1 .484.606zm-.833-2.129a.44.44 0 0 0 .173-.756l.002-.011L7.585 9.7a5.143 5.143 0 0 0-.73 3.255l2.514-.725.002-.009zm1.145-1.98a.44.44 0 0 0 .699-.337l.01-.005.15-2.62a5.144 5.144 0 0 0-3.01 1.442l2.147 1.523.004-.002zm.76 2.75l.723.349.722-.347.18-.78-.5-.623h-.804l-.5.623.179.779zm1.5-3.095a.44.44 0 0 0 .7.336l.008.003 2.134-1.513a5.188 5.188 0 0 0-2.992-1.442l.148 2.615.002.001zm10.876 5.97l-5.773 7.181a1.6 1.6 0 0 1-1.248.594l-9.261.003a1.6 1.6 0 0 1-1.247-.596l-5.776-7.18a1.583 1.583 0 0 1-.307-1.34L2.1 5.573c.108-.47.425-.864.863-1.073L11.305.513a1.606 1.606 0 0 1 1.385 0l8.345 3.985c.438.209.755.604.863 1.073l2.062 8.955c.108.47-.005.963-.308 1.34zm-3.289-2.057c-.042-.01-.103-.026-.145-.034-.174-.033-.315-.025-.479-.038-.35-.037-.638-.067-.895-.148-.105-.04-.18-.165-.216-.216l-.201-.059a6.45 6.45 0 0 0-.105-2.332 6.465 6.465 0 0 0-.936-2.163c.052-.047.15-.133.177-.159.008-.09.001-.183.094-.282.197-.185.444-.338.743-.522.142-.084.273-.137.415-.242.032-.024.076-.062.11-.089.24-.191.295-.52.123-.736-.172-.216-.506-.236-.745-.045-.034.027-.08.062-.111.088-.134.116-.217.23-.33.35-.246.25-.45.458-.673.609-.097.056-.239.037-.303.033l-.19.135a6.545 6.545 0 0 0-4.146-2.003l-.012-.223c-.065-.062-.143-.115-.163-.25-.022-.268.015-.557.057-.905.023-.163.061-.298.068-.475.001-.04-.001-.099-.001-.142 0-.306-.224-.555-.5-.555-.275 0-.499.249-.499.555l.001.014c0 .041-.002.092 0 .128.006.177.044.312.067.475.042.348.078.637.056.906a.545.545 0 0 1-.162.258l-.012.211a6.424 6.424 0 0 0-4.166 2.003 8.373 8.373 0 0 1-.18-.128c-.09.012-.18.04-.297-.029-.223-.15-.427-.358-.673-.608-.113-.12-.195-.234-.329-.349-.03-.026-.077-.062-.111-.088a.594.594 0 0 0-.348-.132.481.481 0 0 0-.398.176c-.172.216-.117.546.123.737l.007.005.104.083c.142.105.272.159.414.242.299.185.546.338.743.522.076.082.09.226.1.288l.16.143a6.462 6.462 0 0 0-1.02 4.506l-.208.06c-.055.072-.133.184-.215.217-.257.081-.546.11-.895.147-.164.014-.305.006-.48.039-.037.007-.09.02-.133.03l-.004.002-.007.002c-.295.071-.484.342-.423.608.061.267.349.429.645.365l.007-.001.01-.003.129-.029c.17-.046.294-.113.448-.172.33-.118.604-.217.87-.256.112-.009.23.069.288.101l.217-.037a6.5 6.5 0 0 0 2.88 3.596l-.09.218c.033.084.069.199.044.282-.097.252-.263.517-.452.813-.091.136-.185.242-.268.399-.02.037-.045.095-.064.134-.128.275-.034.591.213.71.248.12.556-.007.69-.282v-.002c.02-.039.046-.09.062-.127.07-.162.094-.301.144-.458.132-.332.205-.68.387-.897.05-.06.13-.082.215-.105l.113-.205a6.453 6.453 0 0 0 4.609.012l.106.192c.086.028.18.042.256.155.136.232.229.507.342.84.05.156.074.295.145.457.016.037.043.09.062.129.133.276.442.402.69.282.247-.118.341-.435.213-.71-.02-.039-.045-.096-.065-.134-.083-.156-.177-.261-.268-.398-.19-.296-.346-.541-.443-.793-.04-.13.007-.21.038-.294-.018-.022-.059-.144-.083-.202a6.499 6.499 0 0 0 2.88-3.622c.064.01.176.03.213.038.075-.05.144-.114.28-.104.266.039.54.138.87.256.154.06.277.128.448.173.036.01.088.019.13.028l.009.003.007.001c.297.064.584-.098.645-.365.06-.266-.128-.537-.423-.608zM16.4 9.701l-1.95 1.746v.005a.44.44 0 0 0 .173.757l.003.01 2.526.728a5.199 5.199 0 0 0-.108-1.674A5.208 5.208 0 0 0 16.4 9.7zm-4.013 5.325a.437.437 0 0 0-.404-.232.44.44 0 0 0-.372.233h-.002l-1.268 2.292a5.164 5.164 0 0 0 3.326.003l-1.27-2.296h-.01zm1.888-1.293a.44.44 0 0 0-.27.036.44.44 0 0 0-.214.572l-.003.004 1.01 2.438a5.15 5.15 0 0 0 2.081-2.615l-2.6-.44-.004.005z&quot;></path> </svg>"></a><a
                                    title="Terraform" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Terraform"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(132, 79, 186);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Terraform</title> <path d=&quot;M1.44 0v7.575l6.561 3.79V3.787zm21.12 4.227l-6.561 3.791v7.574l6.56-3.787zM8.72 4.23v7.575l6.561 3.787V8.018zm0 8.405v7.575L15.28 24v-7.578z&quot;></path> </svg>"></a><a
                                    title="PostgreSQL" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="PostgreSQL"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(65, 105, 225);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>PostgreSQL</title> <path d=&quot;M23.5594 14.7228a.5269.5269 0 0 0-.0563-.1191c-.139-.2632-.4768-.3418-1.0074-.2321-1.6533.3411-2.2935.1312-2.5256-.0191 1.342-2.0482 2.445-4.522 3.0411-6.8297.2714-1.0507.7982-3.5237.1222-4.7316a1.5641 1.5641 0 0 0-.1509-.235C21.6931.9086 19.8007.0248 17.5099.0005c-1.4947-.0158-2.7705.3461-3.1161.4794a9.449 9.449 0 0 0-.5159-.0816 8.044 8.044 0 0 0-1.3114-.1278c-1.1822-.0184-2.2038.2642-3.0498.8406-.8573-.3211-4.7888-1.645-7.2219.0788C.9359 2.1526.3086 3.8733.4302 6.3043c.0409.818.5069 3.334 1.2423 5.7436.4598 1.5065.9387 2.7019 1.4334 3.582.553.9942 1.1259 1.5933 1.7143 1.7895.4474.1491 1.1327.1441 1.8581-.7279.8012-.9635 1.5903-1.8258 1.9446-2.2069.4351.2355.9064.3625 1.39.3772a.0569.0569 0 0 0 .0004.0041 11.0312 11.0312 0 0 0-.2472.3054c-.3389.4302-.4094.5197-1.5002.7443-.3102.064-1.1344.2339-1.1464.8115-.0025.1224.0329.2309.0919.3268.2269.4231.9216.6097 1.015.6331 1.3345.3335 2.5044.092 3.3714-.6787-.017 2.231.0775 4.4174.3454 5.0874.2212.5529.7618 1.9045 2.4692 1.9043.2505 0 .5263-.0291.8296-.0941 1.7819-.3821 2.5557-1.1696 2.855-2.9059.1503-.8707.4016-2.8753.5388-4.1012.0169-.0703.0357-.1207.057-.1362.0007-.0005.0697-.0471.4272.0307a.3673.3673 0 0 0 .0443.0068l.2539.0223.0149.001c.8468.0384 1.9114-.1426 2.5312-.4308.6438-.2988 1.8057-1.0323 1.5951-1.6698zM2.371 11.8765c-.7435-2.4358-1.1779-4.8851-1.2123-5.5719-.1086-2.1714.4171-3.6829 1.5623-4.4927 1.8367-1.2986 4.8398-.5408 6.108-.13-.0032.0032-.0066.0061-.0098.0094-2.0238 2.044-1.9758 5.536-1.9708 5.7495-.0002.0823.0066.1989.0162.3593.0348.5873.0996 1.6804-.0735 2.9184-.1609 1.1504.1937 2.2764.9728 3.0892.0806.0841.1648.1631.2518.2374-.3468.3714-1.1004 1.1926-1.9025 2.1576-.5677.6825-.9597.5517-1.0886.5087-.3919-.1307-.813-.5871-1.2381-1.3223-.4796-.839-.9635-2.0317-1.4155-3.5126zm6.0072 5.0871c-.1711-.0428-.3271-.1132-.4322-.1772.0889-.0394.2374-.0902.4833-.1409 1.2833-.2641 1.4815-.4506 1.9143-1.0002.0992-.126.2116-.2687.3673-.4426a.3549.3549 0 0 0 .0737-.1298c.1708-.1513.2724-.1099.4369-.0417.156.0646.3078.26.3695.4752.0291.1016.0619.2945-.0452.4444-.9043 1.2658-2.2216 1.2494-3.1676 1.0128zm2.094-3.988-.0525.141c-.133.3566-.2567.6881-.3334 1.003-.6674-.0021-1.3168-.2872-1.8105-.8024-.6279-.6551-.9131-1.5664-.7825-2.5004.1828-1.3079.1153-2.4468.079-3.0586-.005-.0857-.0095-.1607-.0122-.2199.2957-.2621 1.6659-.9962 2.6429-.7724.4459.1022.7176.4057.8305.928.5846 2.7038.0774 3.8307-.3302 4.7363-.084.1866-.1633.3629-.2311.5454zm7.3637 4.5725c-.0169.1768-.0358.376-.0618.5959l-.146.4383a.3547.3547 0 0 0-.0182.1077c-.0059.4747-.054.6489-.115.8693-.0634.2292-.1353.4891-.1794 1.0575-.11 1.4143-.8782 2.2267-2.4172 2.5565-1.5155.3251-1.7843-.4968-2.0212-1.2217a6.5824 6.5824 0 0 0-.0769-.2266c-.2154-.5858-.1911-1.4119-.1574-2.5551.0165-.5612-.0249-1.9013-.3302-2.6462.0044-.2932.0106-.5909.019-.8918a.3529.3529 0 0 0-.0153-.1126 1.4927 1.4927 0 0 0-.0439-.208c-.1226-.4283-.4213-.7866-.7797-.9351-.1424-.059-.4038-.1672-.7178-.0869.067-.276.1831-.5875.309-.9249l.0529-.142c.0595-.16.134-.3257.213-.5012.4265-.9476 1.0106-2.2453.3766-5.1772-.2374-1.0981-1.0304-1.6343-2.2324-1.5098-.7207.0746-1.3799.3654-1.7088.5321a5.6716 5.6716 0 0 0-.1958.1041c.0918-1.1064.4386-3.1741 1.7357-4.4823a4.0306 4.0306 0 0 1 .3033-.276.3532.3532 0 0 0 .1447-.0644c.7524-.5706 1.6945-.8506 2.802-.8325.4091.0067.8017.0339 1.1742.081 1.939.3544 3.2439 1.4468 4.0359 2.3827.8143.9623 1.2552 1.9315 1.4312 2.4543-1.3232-.1346-2.2234.1268-2.6797.779-.9926 1.4189.543 4.1729 1.2811 5.4964.1353.2426.2522.4522.2889.5413.2403.5825.5515.9713.7787 1.2552.0696.087.1372.1714.1885.245-.4008.1155-1.1208.3825-1.0552 1.717-.0123.1563-.0423.4469-.0834.8148-.0461.2077-.0702.4603-.0994.7662zm.8905-1.6211c-.0405-.8316.2691-.9185.5967-1.0105a2.8566 2.8566 0 0 0 .135-.0406 1.202 1.202 0 0 0 .1342.103c.5703.3765 1.5823.4213 3.0068.1344-.2016.1769-.5189.3994-.9533.6011-.4098.1903-1.0957.333-1.7473.3636-.7197.0336-1.0859-.0807-1.1721-.151zm.5695-9.2712c-.0059.3508-.0542.6692-.1054 1.0017-.055.3576-.112.7274-.1264 1.1762-.0142.4368.0404.8909.0932 1.3301.1066.887.216 1.8003-.2075 2.7014a3.5272 3.5272 0 0 1-.1876-.3856c-.0527-.1276-.1669-.3326-.3251-.6162-.6156-1.1041-2.0574-3.6896-1.3193-4.7446.3795-.5427 1.3408-.5661 2.1781-.463zm.2284 7.0137a12.3762 12.3762 0 0 0-.0853-.1074l-.0355-.0444c.7262-1.1995.5842-2.3862.4578-3.4385-.0519-.4318-.1009-.8396-.0885-1.2226.0129-.4061.0666-.7543.1185-1.0911.0639-.415.1288-.8443.1109-1.3505.0134-.0531.0188-.1158.0118-.1902-.0457-.4855-.5999-1.938-1.7294-3.253-.6076-.7073-1.4896-1.4972-2.6889-2.0395.5251-.1066 1.2328-.2035 2.0244-.1859 2.0515.0456 3.6746.8135 4.8242 2.2824a.908.908 0 0 1 .0667.1002c.7231 1.3556-.2762 6.2751-2.9867 10.5405zm-8.8166-6.1162c-.025.1794-.3089.4225-.6211.4225a.5821.5821 0 0 1-.0809-.0056c-.1873-.026-.3765-.144-.5059-.3156-.0458-.0605-.1203-.178-.1055-.2844.0055-.0401.0261-.0985.0925-.1488.1182-.0894.3518-.1226.6096-.0867.3163.0441.6426.1938.6113.4186zm7.9305-.4114c.0111.0792-.049.201-.1531.3102-.0683.0717-.212.1961-.4079.2232a.5456.5456 0 0 1-.075.0052c-.2935 0-.5414-.2344-.5607-.3717-.024-.1765.2641-.3106.5611-.352.297-.0414.6111.0088.6356.1851z&quot;></path> </svg>"></a><a
                                    title="Android Studio" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Android Studio"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(61, 220, 132);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Android Studio</title> <path d=&quot;M19.2693 10.3368c-.3321 0-.6026.2705-.6026.6031v9.8324h-1.7379l-3.3355-6.9396c.476-.5387.6797-1.286.5243-2.0009a2.2862 2.2862 0 0 0-1.2893-1.6248v-.8124c.0121-.2871-.1426-.5787-.4043-.7407-.1391-.0825-.2884-.1234-.4402-.1234a.8478.8478 0 0 0-.4318.1182c-.2701.1671-.4248.4587-.4123.7662l-.0003.721c-1.0149.3668-1.6619 1.4153-1.4867 2.5197a2.282 2.282 0 0 0 .5916 1.2103l-3.2096 6.9064H4.0928c-1.0949-.007-1.9797-.8948-1.9832-1.9896V5.016c-.0055 1.1024.8836 2.0006 1.9859 2.0062a2.024 2.024 0 0 0 .1326-.0037h14.7453s2.5343-.2189 2.8619 1.5392c-.2491.0287-.4449.2321-.4449.4889 0 .7115-.5791 1.2901-1.3028 1.2901h-.8183zM17.222 22.5366c.2347.4837.0329 1.066-.4507 1.3007-.1296.0629-.2666.0895-.4018.0927a.9738.9738 0 0 1-.3194-.0455c-.024-.0078-.046-.0209-.0694-.0305a.9701.9701 0 0 1-.2277-.1321c-.0247-.0192-.0495-.038-.0724-.0598-.0825-.0783-.1574-.1672-.21-.2757l-1.2554-2.6143-1.5585-3.2452a.7725.7725 0 0 0-.6995-.4443h-.0024a.792.792 0 0 0-.7083.4443l-1.5109 3.2452-1.2321 2.6464a.9722.9722 0 0 1-.7985.5795c-.0626.0053-.1238-.0024-.185-.0087-.0344-.0036-.069-.0053-.1025-.0124-.0489-.0103-.0954-.0278-.142-.0452-.0301-.0113-.0613-.0197-.0901-.0339-.0496-.0244-.0948-.0565-.1397-.0889-.0217-.0156-.0457-.0275-.0662-.045a.9862.9862 0 0 1-.1695-.1844.9788.9788 0 0 1-.0708-.9852l.8469-1.8223 3.2676-7.0314a1.7964 1.7964 0 0 1-.7072-1.1637c-.1555-.9799.5129-1.9003 1.4928-2.0559V9.3946a.3542.3542 0 0 1 .1674-.3155.3468.3468 0 0 1 .3541 0 .354.354 0 0 1 .1674.3155v1.159l.0129.0064a1.8028 1.8028 0 0 1 1.2878 1.378 1.7835 1.7835 0 0 1-.6439 1.7836l3.3889 7.0507.8481 1.7643zM12.9841 12.306c.0042-.6081-.4854-1.1044-1.0935-1.1085a1.1204 1.1204 0 0 0-.7856.3219 1.101 1.101 0 0 0-.323.7716c-.0042.6081.4854 1.1044 1.0935 1.1085h.0077c.6046 0 1.0967-.488 1.1009-1.0935zm-1.027 5.2768c-.1119.0005-.2121.0632-.2571.1553l-1.4127 3.0342h3.3733l-1.4564-3.0328a.274.274 0 0 0-.2471-.1567zm8.1432-6.7459l-.0129-.0001h-.8177a.103.103 0 0 0-.103.103v12.9103a.103.103 0 0 0 .0966.103h.8435c.9861-.0035 1.7836-.804 1.7836-1.79V9.0468c0 .9887-.8014 1.7901-1.7901 1.7901zM2.6098 5.0161v.019c.0039.816.6719 1.483 1.4874 1.4869a12.061 12.061 0 0 1 .1309-.0034h1.1286c.1972-1.315.7607-2.525 1.638-3.4859H4.0993c-.9266.0031-1.6971.6401-1.9191 1.4975.2417.0355.4296.235.4296.4859zm6.3381-2.8977L7.9112.3284a.219.219 0 0 1 0-.2189A.2384.2384 0 0 1 8.098 0a.219.219 0 0 1 .1867.1094l1.0496 1.8158a6.4907 6.4907 0 0 1 5.3186 0L15.696.1094a.2189.2189 0 0 1 .3734.2189l-1.0302 1.79c1.6671.9125 2.7974 2.5439 3.0975 4.4018l-12.286-.0014c.3004-1.8572 1.4305-3.488 3.0972-4.4003zm5.3774 2.6202a.515.515 0 0 0 .5271.5028.515.515 0 0 0 .5151-.5151.5213.5213 0 0 0-.8885-.367.5151.5151 0 0 0-.1537.3793zm-5.7178-.0067a.5151.5151 0 0 0 .5207.5095.5086.5086 0 0 0 .367-.1481.5215.5215 0 1 0-.734-.7341.515.515 0 0 0-.1537.3727z&quot;></path> </svg>"></a><a
                                    title="Git" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Git"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(240, 80, 50);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Git</title> <path d=&quot;M23.546 10.93L13.067.452c-.604-.603-1.582-.603-2.188 0L8.708 2.627l2.76 2.76c.645-.215 1.379-.07 1.889.441.516.515.658 1.258.438 1.9l2.658 2.66c.645-.223 1.387-.078 1.9.435.721.72.721 1.884 0 2.604-.719.719-1.881.719-2.6 0-.539-.541-.674-1.337-.404-1.996L12.86 8.955v6.525c.176.086.342.203.488.348.713.721.713 1.883 0 2.6-.719.721-1.889.721-2.609 0-.719-.719-.719-1.879 0-2.598.182-.18.387-.316.605-.406V8.835c-.217-.091-.424-.222-.6-.401-.545-.545-.676-1.342-.396-2.009L7.636 3.7.45 10.881c-.6.605-.6 1.584 0 2.189l10.48 10.477c.604.604 1.582.604 2.186 0l10.43-10.43c.605-.603.605-1.582 0-2.187&quot;></path> </svg>"></a><a
                                    title="Next.js" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Next.js"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(0, 0, 0);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Next.js</title> <path d=&quot;M18.665 21.978C16.758 23.255 14.465 24 12 24 5.377 24 0 18.623 0 12S5.377 0 12 0s12 5.377 12 12c0 3.583-1.574 6.801-4.067 9.001L9.219 7.2H7.2v9.596h1.615V9.251l9.85 12.727Zm-3.332-8.533 1.6 2.061V7.2h-1.6v6.245Z&quot;></path> </svg>"></a><a
                                    title="Node.js" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Node.js"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(95, 160, 78);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Node.js</title> <path d=&quot;M11.998,24c-0.321,0-0.641-0.084-0.922-0.247l-2.936-1.737c-0.438-0.245-0.224-0.332-0.08-0.383 c0.585-0.203,0.703-0.25,1.328-0.604c0.065-0.037,0.151-0.023,0.218,0.017l2.256,1.339c0.082,0.045,0.197,0.045,0.272,0l8.795-5.076 c0.082-0.047,0.134-0.141,0.134-0.238V6.921c0-0.099-0.053-0.192-0.137-0.242l-8.791-5.072c-0.081-0.047-0.189-0.047-0.271,0 L3.075,6.68C2.99,6.729,2.936,6.825,2.936,6.921v10.15c0,0.097,0.054,0.189,0.139,0.235l2.409,1.392 c1.307,0.654,2.108-0.116,2.108-0.89V7.787c0-0.142,0.114-0.253,0.256-0.253h1.115c0.139,0,0.255,0.112,0.255,0.253v10.021 c0,1.745-0.95,2.745-2.604,2.745c-0.508,0-0.909,0-2.026-0.551L2.28,18.675c-0.57-0.329-0.922-0.945-0.922-1.604V6.921 c0-0.659,0.353-1.275,0.922-1.603l8.795-5.082c0.557-0.315,1.296-0.315,1.848,0l8.794,5.082c0.57,0.329,0.924,0.944,0.924,1.603 v10.15c0,0.659-0.354,1.273-0.924,1.604l-8.794,5.078C12.643,23.916,12.324,24,11.998,24z M19.099,13.993 c0-1.9-1.284-2.406-3.987-2.763c-2.731-0.361-3.009-0.548-3.009-1.187c0-0.528,0.235-1.233,2.258-1.233 c1.807,0,2.473,0.389,2.747,1.607c0.024,0.115,0.129,0.199,0.247,0.199h1.141c0.071,0,0.138-0.031,0.186-0.081 c0.048-0.054,0.074-0.123,0.067-0.196c-0.177-2.098-1.571-3.076-4.388-3.076c-2.508,0-4.004,1.058-4.004,2.833 c0,1.925,1.488,2.457,3.895,2.695c2.88,0.282,3.103,0.703,3.103,1.269c0,0.983-0.789,1.402-2.642,1.402 c-2.327,0-2.839-0.584-3.011-1.742c-0.02-0.124-0.126-0.215-0.253-0.215h-1.137c-0.141,0-0.254,0.112-0.254,0.253 c0,1.482,0.806,3.248,4.655,3.248C17.501,17.007,19.099,15.91,19.099,13.993z&quot;></path> </svg>"></a><a
                                    title="Elastic Stack" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Elastic Stack"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(0, 85, 113);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Elastic Stack</title> <path d=&quot;M1.875 0C.839 0 0 .84 0 1.875v4.792h24V1.875C24 .839 23.16 0 22.125 0zM0 8.889v6.222h24V8.89zm0 8.444v4.792C0 23.161.84 24 1.875 24h9v-6.667zm13.125 0V24h9C23.161 24 24 23.16 24 22.125v-4.792z&quot;></path> </svg>"></a><a
                                    title="Dart" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Dart"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(1, 117, 194);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Dart</title> <path d=&quot;M4.105 4.105S9.158 1.58 11.684.316a3.079 3.079 0 0 1 1.481-.315c.766.047 1.677.788 1.677.788L24 9.948v9.789h-4.263V24H9.789l-9-9C.303 14.5 0 13.795 0 13.105c0-.319.18-.818.316-1.105l3.789-7.895zm.679.679v11.787c.002.543.021 1.024.498 1.508L10.204 23h8.533v-4.263L4.784 4.784zm12.055-.678c-.899-.896-1.809-1.78-2.74-2.643-.302-.267-.567-.468-1.07-.462-.37.014-.87.195-.87.195L6.341 4.105l10.498.001z&quot;></path> </svg>"></a><a
                                    title="Kotlin" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Kotlin"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(127, 82, 255);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Kotlin</title> <path d=&quot;M24 24H0V0h24L12 12Z&quot;></path> </svg>"></a><a
                                    title="PyTorch" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="PyTorch"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(238, 76, 44);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>PyTorch</title> <path d=&quot;M12.005 0L4.952 7.053a9.865 9.865 0 000 14.022 9.866 9.866 0 0014.022 0c3.984-3.9 3.986-10.205.085-14.023l-1.744 1.743c2.904 2.905 2.904 7.634 0 10.538s-7.634 2.904-10.538 0-2.904-7.634 0-10.538l4.647-4.646.582-.665zm3.568 3.899a1.327 1.327 0 00-1.327 1.327 1.327 1.327 0 001.327 1.328A1.327 1.327 0 0016.9 5.226 1.327 1.327 0 0015.573 3.9z&quot;></path> </svg>"></a><a
                                    title="Android" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Android"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(52, 168, 83);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Android</title> <path d=&quot;M18.4395 5.5586c-.675 1.1664-1.352 2.3318-2.0274 3.498-.0366-.0155-.0742-.0286-.1113-.043-1.8249-.6957-3.484-.8-4.42-.787-1.8551.0185-3.3544.4643-4.2597.8203-.084-.1494-1.7526-3.021-2.0215-3.4864a1.1451 1.1451 0 0 0-.1406-.1914c-.3312-.364-.9054-.4859-1.379-.203-.475.282-.7136.9361-.3886 1.5019 1.9466 3.3696-.0966-.2158 1.9473 3.3593.0172.031-.4946.2642-1.3926 1.0177C2.8987 12.176.452 14.772 0 18.9902h24c-.119-1.1108-.3686-2.099-.7461-3.0683-.7438-1.9118-1.8435-3.2928-2.7402-4.1836a12.1048 12.1048 0 0 0-2.1309-1.6875c.6594-1.122 1.312-2.2559 1.9649-3.3848.2077-.3615.1886-.7956-.0079-1.1191a1.1001 1.1001 0 0 0-.8515-.5332c-.5225-.0536-.9392.3128-1.0488.5449zm-.0391 8.461c.3944.5926.324 1.3306-.1563 1.6503-.4799.3197-1.188.0985-1.582-.4941-.3944-.5927-.324-1.3307.1563-1.6504.4727-.315 1.1812-.1086 1.582.4941zM7.207 13.5273c.4803.3197.5506 1.0577.1563 1.6504-.394.5926-1.1038.8138-1.584.4941-.48-.3197-.5503-1.0577-.1563-1.6504.4008-.6021 1.1087-.8106 1.584-.4941z&quot;></path> </svg>"></a><a
                                    title="Figma" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Figma"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(242, 78, 30);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Figma</title> <path d=&quot;M15.852 8.981h-4.588V0h4.588c2.476 0 4.49 2.014 4.49 4.49s-2.014 4.491-4.49 4.491zM12.735 7.51h3.117c1.665 0 3.019-1.355 3.019-3.019s-1.355-3.019-3.019-3.019h-3.117V7.51zm0 1.471H8.148c-2.476 0-4.49-2.014-4.49-4.49S5.672 0 8.148 0h4.588v8.981zm-4.587-7.51c-1.665 0-3.019 1.355-3.019 3.019s1.354 3.02 3.019 3.02h3.117V1.471H8.148zm4.587 15.019H8.148c-2.476 0-4.49-2.014-4.49-4.49s2.014-4.49 4.49-4.49h4.588v8.98zM8.148 8.981c-1.665 0-3.019 1.355-3.019 3.019s1.355 3.019 3.019 3.019h3.117V8.981H8.148zM8.172 24c-2.489 0-4.515-2.014-4.515-4.49s2.014-4.49 4.49-4.49h4.588v4.441c0 2.503-2.047 4.539-4.563 4.539zm-.024-7.51a3.023 3.023 0 0 0-3.019 3.019c0 1.665 1.365 3.019 3.044 3.019 1.705 0 3.093-1.376 3.093-3.068v-2.97H8.148zm7.704 0h-.098c-2.476 0-4.49-2.014-4.49-4.49s2.014-4.49 4.49-4.49h.098c2.476 0 4.49 2.014 4.49 4.49s-2.014 4.49-4.49 4.49zm-.097-7.509c-1.665 0-3.019 1.355-3.019 3.019s1.355 3.019 3.019 3.019h.098c1.665 0 3.019-1.355 3.019-3.019s-1.355-3.019-3.019-3.019h-.098z&quot;></path> </svg>"></a><a
                                    title="OpenStack" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="OpenStack"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(237, 25, 68);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>OpenStack</title> <path d=&quot;M18.575 9.29h5.418v5.42h-5.418zM0 9.29h5.419v5.42H0zm18.575 7.827a1.207 1.207 0 0 1-1.206 1.206H6.623a1.207 1.207 0 0 1-1.205-1.206v-.858H0v5.252a2.236 2.236 0 0 0 2.229 2.23h19.53A2.237 2.237 0 0 0 24 21.512V16.26h-5.425zM21.763.258H2.233a2.236 2.236 0 0 0-2.23 2.23V7.74h5.419v-.858a1.206 1.206 0 0 1 1.205-1.206h10.746a1.206 1.206 0 0 1 1.205 1.206v.858H24V2.487A2.237 2.237 0 0 0 21.763.258Z&quot;></path> </svg>"></a><a
                                    title="Flutter" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Flutter"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(2, 86, 155);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Flutter</title> <path d=&quot;M14.314 0L2.3 12 6 15.7 21.684.013h-7.357zm.014 11.072L7.857 17.53l6.47 6.47H21.7l-6.46-6.468 6.46-6.46h-7.37z&quot;></path> </svg>"></a><a
                                    title="Firebase" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Firebase"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(221, 44, 0);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Firebase</title> <path d=&quot;M19.455 8.369c-.538-.748-1.778-2.285-3.681-4.569-.826-.991-1.535-1.832-1.884-2.245a146 146 0 0 0-.488-.576l-.207-.245-.113-.133-.022-.032-.01-.005L12.57 0l-.609.488c-1.555 1.246-2.828 2.851-3.681 4.64-.523 1.064-.864 2.105-1.043 3.176-.047.241-.088.489-.121.738-.209-.017-.421-.028-.632-.033-.018-.001-.035-.002-.059-.003a7.46 7.46 0 0 0-2.28.274l-.317.089-.163.286c-.765 1.342-1.198 2.869-1.252 4.416-.07 2.01.477 3.954 1.583 5.625 1.082 1.633 2.61 2.882 4.42 3.611l.236.095.071.025.003-.001a9.59 9.59 0 0 0 2.941.568q.171.006.342.006c1.273 0 2.513-.249 3.69-.742l.008.004.313-.145a9.63 9.63 0 0 0 3.927-3.335c1.01-1.49 1.577-3.234 1.641-5.042.075-2.161-.643-4.304-2.133-6.371m-7.083 6.695c.328 1.244.264 2.44-.191 3.558-1.135-1.12-1.967-2.352-2.475-3.665-.543-1.404-.87-2.74-.974-3.975.48.157.922.366 1.315.622 1.132.737 1.914 1.902 2.325 3.461zm.207 6.022c.482.368.99.712 1.513 1.028-.771.21-1.565.302-2.369.273a8 8 0 0 1-.373-.022c.458-.394.869-.823 1.228-1.279zm1.347-6.431c-.516-1.957-1.527-3.437-3.002-4.398-.647-.421-1.385-.741-2.194-.95.011-.134.026-.268.043-.4.014-.113.03-.216.046-.313.133-.689.332-1.37.589-2.025.099-.25.206-.499.321-.74l.004-.008c.177-.358.376-.719.61-1.105l.092-.152-.003-.001c.544-.851 1.197-1.627 1.942-2.311l.288.341c.672.796 1.304 1.548 1.878 2.237 1.291 1.549 2.966 3.583 3.612 4.48 1.277 1.771 1.893 3.579 1.83 5.375-.049 1.395-.461 2.755-1.195 3.933-.694 1.116-1.661 2.05-2.8 2.708-.636-.318-1.559-.839-2.539-1.599.79-1.575.952-3.28.479-5.072zm-2.575 5.397c-.725.939-1.587 1.55-2.09 1.856-.081-.029-.163-.06-.243-.093l-.065-.026c-1.49-.616-2.747-1.656-3.635-3.01-.907-1.384-1.356-2.993-1.298-4.653.041-1.19.338-2.327.882-3.379.316-.07.638-.114.96-.131l.084-.002c.162-.003.324-.003.478 0 .227.011.454.035.677.07.073 1.513.445 3.145 1.105 4.852.637 1.644 1.694 3.162 3.144 4.515z&quot;></path> </svg>"></a><a
                                    title="icon" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="icon"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(0, 0, 0);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>icon</title> <path d=&quot;M6.763 10.036c0 .296.032.535.088.71.064.176.144.368.256.576.04.063.056.127.056.183 0 .08-.048.16-.152.24l-.503.335a.383.383 0 0 1-.208.072c-.08 0-.16-.04-.239-.112a2.47 2.47 0 0 1-.287-.375 6.18 6.18 0 0 1-.248-.471c-.622.734-1.405 1.101-2.347 1.101-.67 0-1.205-.191-1.596-.574-.391-.384-.59-.894-.59-1.533 0-.678.239-1.23.726-1.644.487-.415 1.133-.623 1.955-.623.272 0 .551.024.846.064.296.04.6.104.918.176v-.583c0-.607-.127-1.03-.375-1.277-.255-.248-.686-.367-1.3-.367-.28 0-.568.031-.863.103-.295.072-.583.16-.862.272a2.287 2.287 0 0 1-.28.104.488.488 0 0 1-.127.023c-.112 0-.168-.08-.168-.247v-.391c0-.128.016-.224.056-.28a.597.597 0 0 1 .224-.167c.279-.144.614-.264 1.005-.36a4.84 4.84 0 0 1 1.246-.151c.95 0 1.644.216 2.091.647.439.43.662 1.085.662 1.963v2.586zm-3.24 1.214c.263 0 .534-.048.822-.144.287-.096.543-.271.758-.51.128-.152.224-.32.272-.512.047-.191.08-.423.08-.694v-.335a6.66 6.66 0 0 0-.735-.136 6.02 6.02 0 0 0-.75-.048c-.535 0-.926.104-1.19.32-.263.215-.39.518-.39.917 0 .375.095.655.295.846.191.2.47.296.838.296zm6.41.862c-.144 0-.24-.024-.304-.08-.064-.048-.12-.16-.168-.311L7.586 5.55a1.398 1.398 0 0 1-.072-.32c0-.128.064-.2.191-.2h.783c.151 0 .255.025.31.08.065.048.113.16.16.312l1.342 5.284 1.245-5.284c.04-.16.088-.264.151-.312a.549.549 0 0 1 .32-.08h.638c.152 0 .256.025.32.08.063.048.12.16.151.312l1.261 5.348 1.381-5.348c.048-.16.104-.264.16-.312a.52.52 0 0 1 .311-.08h.743c.127 0 .2.065.2.2 0 .04-.009.08-.017.128a1.137 1.137 0 0 1-.056.2l-1.923 6.17c-.048.16-.104.263-.168.311a.51.51 0 0 1-.303.08h-.687c-.151 0-.255-.024-.32-.08-.063-.056-.119-.16-.15-.32l-1.238-5.148-1.23 5.14c-.04.16-.087.264-.15.32-.065.056-.177.08-.32.08zm10.256.215c-.415 0-.83-.048-1.229-.143-.399-.096-.71-.2-.918-.32-.128-.071-.215-.151-.247-.223a.563.563 0 0 1-.048-.224v-.407c0-.167.064-.247.183-.247.048 0 .096.008.144.024.048.016.12.048.2.08.271.12.566.215.878.279.319.064.63.096.95.096.502 0 .894-.088 1.165-.264a.86.86 0 0 0 .415-.758.777.777 0 0 0-.215-.559c-.144-.151-.416-.287-.807-.415l-1.157-.36c-.583-.183-1.014-.454-1.277-.813a1.902 1.902 0 0 1-.4-1.158c0-.335.073-.63.216-.886.144-.255.335-.479.575-.654.24-.184.51-.32.83-.415.32-.096.655-.136 1.006-.136.175 0 .359.008.535.032.183.024.35.056.518.088.16.04.312.08.455.127.144.048.256.096.336.144a.69.69 0 0 1 .24.2.43.43 0 0 1 .071.263v.375c0 .168-.064.256-.184.256a.83.83 0 0 1-.303-.096 3.652 3.652 0 0 0-1.532-.311c-.455 0-.815.071-1.062.223-.248.152-.375.383-.375.71 0 .224.08.416.24.567.159.152.454.304.877.44l1.134.358c.574.184.99.44 1.237.767.247.327.367.702.367 1.117 0 .343-.072.655-.207.926-.144.272-.336.511-.583.703-.248.2-.543.343-.886.447-.36.111-.734.167-1.142.167zM21.698 16.207c-2.626 1.94-6.442 2.969-9.722 2.969-4.598 0-8.74-1.7-11.87-4.526-.247-.223-.024-.527.272-.351 3.384 1.963 7.559 3.153 11.877 3.153 2.914 0 6.114-.607 9.06-1.852.439-.2.814.287.383.607zM22.792 14.961c-.336-.43-2.22-.207-3.074-.103-.255.032-.295-.192-.063-.36 1.5-1.053 3.967-.75 4.254-.399.287.36-.08 2.826-1.485 4.007-.215.184-.423.088-.327-.151.32-.79 1.03-2.57.695-2.994z&quot;></path> </svg>"></a><a
                                    title="SonarQube" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="SonarQube"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(78, 155, 205);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>SonarQube</title> <path d=&quot;M15.685.386l-.465.766c3.477 2.112 6.305 5.27 7.966 8.89L24 9.67C22.266 5.887 19.313 2.59 15.685.386zM8.462.91l-.305 1.075c6.89 1.976 12.384 7.64 13.997 14.421l1.085-.258C21.535 8.977 15.735 2.997 8.462.909zM0 2.667v1.342c10.963 0 19.883 8.795 19.883 19.605h1.342c0-11.55-9.522-20.947-21.225-20.947z&quot;></path> </svg>"></a><a
                                    title="React" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="React"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(97, 218, 251);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>React</title> <path d=&quot;M14.23 12.004a2.236 2.236 0 0 1-2.235 2.236 2.236 2.236 0 0 1-2.236-2.236 2.236 2.236 0 0 1 2.235-2.236 2.236 2.236 0 0 1 2.236 2.236zm2.648-10.69c-1.346 0-3.107.96-4.888 2.622-1.78-1.653-3.542-2.602-4.887-2.602-.41 0-.783.093-1.106.278-1.375.793-1.683 3.264-.973 6.365C1.98 8.917 0 10.42 0 12.004c0 1.59 1.99 3.097 5.043 4.03-.704 3.113-.39 5.588.988 6.38.32.187.69.275 1.102.275 1.345 0 3.107-.96 4.888-2.624 1.78 1.654 3.542 2.603 4.887 2.603.41 0 .783-.09 1.106-.275 1.374-.792 1.683-3.263.973-6.365C22.02 15.096 24 13.59 24 12.004c0-1.59-1.99-3.097-5.043-4.032.704-3.11.39-5.587-.988-6.38-.318-.184-.688-.277-1.092-.278zm-.005 1.09v.006c.225 0 .406.044.558.127.666.382.955 1.835.73 3.704-.054.46-.142.945-.25 1.44-.96-.236-2.006-.417-3.107-.534-.66-.905-1.345-1.727-2.035-2.447 1.592-1.48 3.087-2.292 4.105-2.295zm-9.77.02c1.012 0 2.514.808 4.11 2.28-.686.72-1.37 1.537-2.02 2.442-1.107.117-2.154.298-3.113.538-.112-.49-.195-.964-.254-1.42-.23-1.868.054-3.32.714-3.707.19-.09.4-.127.563-.132zm4.882 3.05c.455.468.91.992 1.36 1.564-.44-.02-.89-.034-1.345-.034-.46 0-.915.01-1.36.034.44-.572.895-1.096 1.345-1.565zM12 8.1c.74 0 1.477.034 2.202.093.406.582.802 1.203 1.183 1.86.372.64.71 1.29 1.018 1.946-.308.655-.646 1.31-1.013 1.95-.38.66-.773 1.288-1.18 1.87-.728.063-1.466.098-2.21.098-.74 0-1.477-.035-2.202-.093-.406-.582-.802-1.204-1.183-1.86-.372-.64-.71-1.29-1.018-1.946.303-.657.646-1.313 1.013-1.954.38-.66.773-1.286 1.18-1.868.728-.064 1.466-.098 2.21-.098zm-3.635.254c-.24.377-.48.763-.704 1.16-.225.39-.435.782-.635 1.174-.265-.656-.49-1.31-.676-1.947.64-.15 1.315-.283 2.015-.386zm7.26 0c.695.103 1.365.23 2.006.387-.18.632-.405 1.282-.66 1.933-.2-.39-.41-.783-.64-1.174-.225-.392-.465-.774-.705-1.146zm3.063.675c.484.15.944.317 1.375.498 1.732.74 2.852 1.708 2.852 2.476-.005.768-1.125 1.74-2.857 2.475-.42.18-.88.342-1.355.493-.28-.958-.646-1.956-1.1-2.98.45-1.017.81-2.01 1.085-2.964zm-13.395.004c.278.96.645 1.957 1.1 2.98-.45 1.017-.812 2.01-1.086 2.964-.484-.15-.944-.318-1.37-.5-1.732-.737-2.852-1.706-2.852-2.474 0-.768 1.12-1.742 2.852-2.476.42-.18.88-.342 1.356-.494zm11.678 4.28c.265.657.49 1.312.676 1.948-.64.157-1.316.29-2.016.39.24-.375.48-.762.705-1.158.225-.39.435-.788.636-1.18zm-9.945.02c.2.392.41.783.64 1.175.23.39.465.772.705 1.143-.695-.102-1.365-.23-2.006-.386.18-.63.406-1.282.66-1.933zM17.92 16.32c.112.493.2.968.254 1.423.23 1.868-.054 3.32-.714 3.708-.147.09-.338.128-.563.128-1.012 0-2.514-.807-4.11-2.28.686-.72 1.37-1.536 2.02-2.44 1.107-.118 2.154-.3 3.113-.54zm-11.83.01c.96.234 2.006.415 3.107.532.66.905 1.345 1.727 2.035 2.446-1.595 1.483-3.092 2.295-4.11 2.295-.22-.005-.406-.05-.553-.132-.666-.38-.955-1.834-.73-3.703.054-.46.142-.944.25-1.438zm4.56.64c.44.02.89.034 1.345.034.46 0 .915-.01 1.36-.034-.44.572-.895 1.095-1.345 1.565-.455-.47-.91-.993-1.36-1.565z&quot;></path> </svg>"></a><a
                                    title="Docker" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Docker"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(36, 150, 237);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Docker</title> <path d=&quot;M13.983 11.078h2.119a.186.186 0 00.186-.185V9.006a.186.186 0 00-.186-.186h-2.119a.185.185 0 00-.185.185v1.888c0 .102.083.185.185.185m-2.954-5.43h2.118a.186.186 0 00.186-.186V3.574a.186.186 0 00-.186-.185h-2.118a.185.185 0 00-.185.185v1.888c0 .102.082.185.185.185m0 2.716h2.118a.187.187 0 00.186-.186V6.29a.186.186 0 00-.186-.185h-2.118a.185.185 0 00-.185.185v1.887c0 .102.082.185.185.186m-2.93 0h2.12a.186.186 0 00.184-.186V6.29a.185.185 0 00-.185-.185H8.1a.185.185 0 00-.185.185v1.887c0 .102.083.185.185.186m-2.964 0h2.119a.186.186 0 00.185-.186V6.29a.185.185 0 00-.185-.185H5.136a.186.186 0 00-.186.185v1.887c0 .102.084.185.186.186m5.893 2.715h2.118a.186.186 0 00.186-.185V9.006a.186.186 0 00-.186-.186h-2.118a.185.185 0 00-.185.185v1.888c0 .102.082.185.185.185m-2.93 0h2.12a.185.185 0 00.184-.185V9.006a.185.185 0 00-.184-.186h-2.12a.185.185 0 00-.184.185v1.888c0 .102.083.185.185.185m-2.964 0h2.119a.185.185 0 00.185-.185V9.006a.185.185 0 00-.184-.186h-2.12a.186.186 0 00-.186.186v1.887c0 .102.084.185.186.185m-2.92 0h2.12a.185.185 0 00.184-.185V9.006a.185.185 0 00-.184-.186h-2.12a.185.185 0 00-.184.185v1.888c0 .102.082.185.185.185M23.763 9.89c-.065-.051-.672-.51-1.954-.51-.338.001-.676.03-1.01.087-.248-1.7-1.653-2.53-1.716-2.566l-.344-.199-.226.327c-.284.438-.49.922-.612 1.43-.23.97-.09 1.882.403 2.661-.595.332-1.55.413-1.744.42H.751a.751.751 0 00-.75.748 11.376 11.376 0 00.692 4.062c.545 1.428 1.355 2.48 2.41 3.124 1.18.723 3.1 1.137 5.275 1.137.983.003 1.963-.086 2.93-.266a12.248 12.248 0 003.823-1.389c.98-.567 1.86-1.288 2.61-2.136 1.252-1.418 1.998-2.997 2.553-4.4h.221c1.372 0 2.215-.549 2.68-1.009.309-.293.55-.65.707-1.046l.098-.288Z&quot;></path> </svg>"></a><a
                                    title="Swift" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="Swift"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(240, 81, 56);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>Swift</title> <path d=&quot;M7.508 0c-.287 0-.573 0-.86.002-.241.002-.483.003-.724.01-.132.003-.263.009-.395.015A9.154 9.154 0 0 0 4.348.15 5.492 5.492 0 0 0 2.85.645 5.04 5.04 0 0 0 .645 2.848c-.245.48-.4.972-.495 1.5-.093.52-.122 1.05-.136 1.576a35.2 35.2 0 0 0-.012.724C0 6.935 0 7.221 0 7.508v8.984c0 .287 0 .575.002.862.002.24.005.481.012.722.014.526.043 1.057.136 1.576.095.528.25 1.02.495 1.5a5.03 5.03 0 0 0 2.205 2.203c.48.244.97.4 1.498.495.52.093 1.05.124 1.576.138.241.007.483.009.724.01.287.002.573.002.86.002h8.984c.287 0 .573 0 .86-.002.241-.001.483-.003.724-.01a10.523 10.523 0 0 0 1.578-.138 5.322 5.322 0 0 0 1.498-.495 5.035 5.035 0 0 0 2.203-2.203c.245-.48.4-.972.495-1.5.093-.52.124-1.05.138-1.576.007-.241.009-.481.01-.722.002-.287.002-.575.002-.862V7.508c0-.287 0-.573-.002-.86a33.662 33.662 0 0 0-.01-.724 10.5 10.5 0 0 0-.138-1.576 5.328 5.328 0 0 0-.495-1.5A5.039 5.039 0 0 0 21.152.645 5.32 5.32 0 0 0 19.654.15a10.493 10.493 0 0 0-1.578-.138 34.98 34.98 0 0 0-.722-.01C17.067 0 16.779 0 16.492 0H7.508zm6.035 3.41c4.114 2.47 6.545 7.162 5.549 11.131-.024.093-.05.181-.076.272l.002.001c2.062 2.538 1.5 5.258 1.236 4.745-1.072-2.086-3.066-1.568-4.088-1.043a6.803 6.803 0 0 1-.281.158l-.02.012-.002.002c-2.115 1.123-4.957 1.205-7.812-.022a12.568 12.568 0 0 1-5.64-4.838c.649.48 1.35.902 2.097 1.252 3.019 1.414 6.051 1.311 8.197-.002C9.651 12.73 7.101 9.67 5.146 7.191a10.628 10.628 0 0 1-1.005-1.384c2.34 2.142 6.038 4.83 7.365 5.576C8.69 8.408 6.208 4.743 6.324 4.86c4.436 4.47 8.528 6.996 8.528 6.996.154.085.27.154.36.213.085-.215.16-.437.224-.668.708-2.588-.09-5.548-1.893-7.992z&quot;></path> </svg>"></a><a
                                    title="icon" href="#" target="_self" rel="noopener noreferrer"
                                    style="cursor: pointer;"><img height="42" width="42" alt="icon"
                                        src="data:image/svg+xml;utf8,<svg xmlns=&quot;http://www.w3.org/2000/svg&quot; style=&quot;fill: rgb(0, 0, 0);&quot; viewBox=&quot;0 0 24 24&quot; height=&quot;42px&quot; width=&quot;42px&quot;> <title>icon</title> <path d=&quot;M23.15 2.587L18.21.21a1.494 1.494 0 0 0-1.705.29l-9.46 8.63-4.12-3.128a.999.999 0 0 0-1.276.057L.327 7.261A1 1 0 0 0 .326 8.74L3.899 12 .326 15.26a1 1 0 0 0 .001 1.479L1.65 17.94a.999.999 0 0 0 1.276.057l4.12-3.128 9.46 8.63a1.492 1.492 0 0 0 1.704.29l4.942-2.377A1.5 1.5 0 0 0 24 20.06V3.939a1.5 1.5 0 0 0-.85-1.352zm-5.146 14.861L10.826 12l7.178-5.448v10.896z&quot;></path> </svg>"></a>

                            </div>
                        </canvas>
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
    <script>
        window.onload = function() {
            try {
                TagCanvas.Start('myCanvas', 'tags', {
                    textColour: '#ff0000',
                    reverse: true,
                    depth: 0.8,
                    maxSpeed: 0.03,
                    initial: [0.8, -0.3],
                    pinchZoom: false,
                    wheelZoom: false,
                    dragControl: true,
                    decel: 0.95,
                    noSelect: true
                });
            } catch (e) {
                // something went wrong, hide the canvas container
                document.getElementById('myCanvasContainer').style.display = 'none';
            }
        };
        // $(function() {

        //     $options = {
        //         textColour: '#ff0000',
        //         outlineColour: '#ff00ff',
        //         reverse: true,
        //         depth: 0.8,
        //         maxSpeed: 0.05
        //     };
        //     $("#myCanvas").tagcanvas($options, "tags");
        // });
    </script>
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
