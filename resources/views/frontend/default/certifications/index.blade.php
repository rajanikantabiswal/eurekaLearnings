@extends('layouts.default')
@push('title', get_phrase('Certifications'))
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

        .header-area {
            position: fixed;
            width: 100%;
            background: transparent;
            z-index: 100;
        }

        .header-area.scrolled {
            background: white !important;
            /* Background on scroll */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            /* Optional shadow */
        }

        .vendors {
            display: grid;
            grid-template-columns: auto auto auto auto auto auto;
            gap: 20px;

        }

        .vendors div {
            box-shadow: 0 4px 8px 0 rgba(47, 47, 47, 0.2), 0 6px 20px 0 rgba(70, 70, 70, 0.19);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            border-radius: 10px;
        }
        .vendors img{
            max-width: 10vw;
        }
        @media (max-width: 768px){
            .vendors {
            display: grid;
            grid-template-columns: auto auto auto;
            gap: 10px;

        }

        .vendors div {
            box-shadow: 0 4px 8px 0 rgba(47, 47, 47, 0.2), 0 6px 20px 0 rgba(70, 70, 70, 0.19);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
            border-radius: 10px;
        }
        .vendors img{
            max-width: 20vw;
        }
        }
    </style>
@endpush
@section('content')
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 d-flex flex-column justify-content-center">
                    <span class="title-head builder-editable" builder-identity="4">Know About Us</span>
                    <h2 class="title mb-4"><span class="gradient shadow-none color builder-editable"
                            builder-identity="52nd">Unique Methodology </span><span class="builder-editable"
                            builder-identity="5">to Prepare Your Certification</span>
                    </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores iste a cumque autem dolorem, qui,
                        incidunt ipsa, quod quaerat ab fugiat? Culpa, molestiae ea. Eum dicta atque repudiandae corporis, a
                        natus consequuntur? Facere ipsa labore tenetur quisquam. Corrupti odit dicta repellat atque enim
                        dolores placeat necessitatibus quibusdam? Perferendis, voluptates. Quasi quia modi exercitationem
                        itaque facere ullam ipsum sit, ut nemo dolorem quas consequatur saepe quo fugiat non natus expedita
                        tempora, incidunt temporibus reprehenderit enim doloremque deserunt harum voluptatibus! Dolorum
                        omnis porro atque dolor fugit quisquam veritatis quis, ea amet mollitia architecto hic odit
                        doloremque repellat quae? Aperiam impedit eius ea.</p>


                </div>
                <div class="col-lg-5 p-5">
                    <img src="{{ asset('assets/frontend/default/images/certification-image1.webp') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding testimonials-wrapper">
        <div class="container ">
            <div class="home1-section-title">
                <h1 class="title mb-20 fw-500">Browse by Categories</h1>
                <p class="info">
                    Those course highlights a handpicked course with exceptional content or exclusive offerings.
                </p>
            </div>
            <div class="vendors">
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/Microsoft.png" class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/palo-alto.png" class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/gcp-1.png" class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/1_b_al7C5p26tbZG4sy-CWqw-1.png"
                        class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/Oracle.png" class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/Cisco_logo-1000px.png"
                        class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/Ec_Council_Logo.png" class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/pmi-logo.png" class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/PC-logo-1200px.png" class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/58482f67cef1014c0b5e4a81.png"
                        class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/Comptia-logo.svg_.png"
                        class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/isc2.png" class="img-fluid">
                </div>

                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/1200px-ISACA_logo.png"
                        class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/vm58v8a7-vmware-logo-vmware-time-to-pick-a-new-fight-removebg-preview.png"
                        class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/Kubernetes-Logo.png" class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/BCS.png" class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/png-clipart-cyberark-synercomm-inc-computer-security-nasdaq-cybr-business-business-blue-angle.png"
                        class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/png-transparent-docker-logo-kubernetes-microservices-cloud-computing-dockers-logo-text-logo-cloud-computing.png"
                        class="img-fluid">
                </div>

                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/scaled-agile-sq-logo.png"
                        class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/png-clipart-scrum-agile-software-development-kanban-computer-software-devops-others-text-logo.png"
                        class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/Python.png" class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/HPE.png" class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/the-open-group.png" class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/download.png" class="img-fluid">
                </div>

                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/cloud-security-alliance-csa.png"
                        class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/IBM.png" class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/adobe.png" class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/Pegasystem.png" class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/iSQI_newClaim_en-2.webp"
                        class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/logo.webp" class="img-fluid">
                </div>

                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/62e14245eb4d9a9dc054c181.png"
                        class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/Untitled-12.png" class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/Logo-EXIN-colored.png"
                        class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/Untitled-1.png" class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/CHKP_BIG-58eea9a0.png"
                        class="img-fluid">
                </div>
                <div>
                    <img src="https://eurekalearnings.in/wp-content/uploads/2023/11/citrix.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
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
    </script>
@endpush
