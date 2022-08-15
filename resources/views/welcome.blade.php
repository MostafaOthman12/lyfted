@extends('layout')
@section('imports')
    <link href={{ asset("assets/css/style.css")}} rel="stylesheet">
    <link href={{ asset("assets/css/styleres.css")}} rel="stylesheet">
@endsection
@section('main')
    <section class="shape">
        <div class="box"></div>
        <header class="text">
            <nav class="navbar navbar-expand-lg fixed ">
                <div class="container">
                    <a title="home" href={{ url('/') }}>
                        <svg
                            id="Layer_1"
                            data-name="Layer 1"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 1671.06 582.24"
                        >
                            <defs>
                                <style>
                                    .cls-1 {
                                        font-size: 47.38px;
                                        font-family: NexaBold, Nexa Bold;
                                    }
                                </style>
                            </defs>
                            <path
                                d="M1267.42,1324.66l97.63-7.06.21,1.6c-9.41,1.37-18.82,2.78-28.24,4.1q-63.49,8.9-127,17.74c-30.61,4.26-61.23,8.4-91.84,12.68-36.37,5.09-72.72,10.31-109.08,15.42-26.18,3.67-52.37,7.25-78.55,10.89q-55.15,7.65-110.3,15.33-60.06,8.36-120.12,16.72c-50.8,7.13-101.59,14.4-152.39,21.5-36,5-72,9.8-108,14.83-50.62,7.08-101.21,14.35-151.82,21.42-36,5-72,9.8-108,14.84-45.23,6.33-90.44,12.88-135.67,19.21-27.14,3.81-54.32,7.31-81.47,11.08-35.61,5-71.2,10.06-106.81,15-31.18,4.37-62.38,8.6-93.56,13-21.36,3-42.69,6.14-64,9.17a31,31,0,0,1-4.12,0c20.43-194,40.81-387.41,61.32-582.18a58.82,58.82,0,0,1,4.63,3.66q52.25,52.22,104.51,104.4c3.06,3,4,6.16,3.81,10.38q-5.82,99.66-11.39,199.34-3.69,65.87-7.14,131.75c-.1,1.87,0,3.74,0,6.15,16.09-1.25,31.54-2.33,47-3.79,1.72-.16,3.59-2.16,4.81-3.75q67.76-89.24,135.38-178.54c10.11-13.34,20.07-26.79,30.58-39.79,1.94-2.4,6.14-3.79,9.44-4.12,14.31-1.43,28.67-2.24,43-3.36,22-1.72,44.09-3.5,68-5.41L-1.11,1414.73c10.21-.59,18.79-1,27.36-1.6q40.46-2.82,80.89-5.79c11-.79,22.1-1.74,33.16-2.42,3.82-.23,5.42-2.15,6.17-5.64q10.28-47.88,20.68-95.74,11.43-52.41,23.09-104.77c2.76-12.25,3.06-12.24,15.88-13.23q75.57-5.8,151.14-11.54,86.91-6.7,173.82-13.49,83.43-6.4,166.87-12.65c6.9-.52,13.79-1.23,21.54-1.92-2.68,11.19-5.11,21.32-7.51,31.47-2.24,9.45-4.51,18.9-6.63,28.39-.75,3.41-2,5.13-6.06,5.42-26.93,1.9-53.83,4.29-80.77,6.19-4.75.33-6.16,2.39-7.06,6.57-6.28,29.07-12.77,58.09-19.2,87.13q-6.35,28.76-12.67,57.5a41.79,41.79,0,0,0-.36,5l142.52-10.12c-9.67-6-15.36-14.79-20.23-24.37a26.6,26.6,0,0,1-2.24-19.16q18.76-78.24,37.29-156.54c1.12-4.72,2.71-9.37,3.43-14.16.59-3.93,2.52-5,6.15-5.3,25.59-1.92,51.16-4,76.73-6q60.15-4.79,120.29-9.6,35.73-2.86,71.47-5.75c1.7-.14,3.41,0,6.12,0-2,9.59-3.87,18.44-5.79,27.28-1.66,7.6-3.84,15.12-5,22.79-.78,5.36-3.31,7.13-8.32,7.47-21.14,1.42-42.27,3.05-63.4,4.65-34.3,2.61-68.59,5.31-102.9,7.82-3.74.27-5.54,1.71-6.31,5.34q-9.23,43.33-18.63,86.64c-.86,4-1.84,8-2.67,12-1.42,6.75,2.18,11.08,9,10.5,29.63-2.5,59.25-5.18,88.89-7.66,25.18-2.1,50.38-4,75.57-6,1.67-.13,3.36,0,5.67,0l-10.6,50.57c7.17,2.08,8,1.47,9.39-5.2q11.6-54.16,23.33-108.3c.08-.39.2-.76.28-1.14,2.95-13.56,2.95-13.49,16.6-14.5q41.88-3.1,83.74-6.31c1.87-.14,3.75,0,6.3,0-5.67,25.25-11.18,49.78-16.93,75.4,10.08-.68,19.1-1.23,28.12-1.91,21.31-1.62,42.62-3.36,63.93-5,7.16-.53,12.26-3.8,14.14-10.88,5.42-20.47,10.5-41,15.59-61.58,2.61-10.56,4.94-21.2,7.46-31.79,1.8-7.56.51-9.18-7.27-8.57q-63.35,5-126.69,10-35.17,2.79-70.33,5.6c-1.47.12-3,0-5.37,0,1.16-6.26,2.12-11.73,3.18-17.18,2.31-11.82,4.83-23.61,6.91-35.47.74-4.19,2.56-5.81,6.79-6.13,24.81-1.86,49.59-4,74.39-6q65.38-5.11,130.78-10.08c17.44-1.34,34.87-2.7,52.32-3.8a16.57,16.57,0,0,1,7.76,1.69c16.2,7.69,22.78,21.71,22.07,38.5-.53,12.28-3.46,24.58-6.29,36.64-8.22,35-16.41,70-25.69,104.75A93.3,93.3,0,0,1,1267.42,1324.66ZM245.11,1397.33c14.05-.95,27.18-1.8,40.31-2.74,31-2.21,62-4.52,93.06-6.71q51.19-3.63,102.4-7.07c4.17-.27,6.09-1.91,6.9-6.07,2.47-12.58,5.3-25.09,8-37.61q10.48-48.44,20.95-96.87c1-4.77,1.75-9.62,2.71-15l-90.3,6.94c.71-4.08,1.3-7.4,2-11.5-3.46.21-6.31.33-9.15.56-12.4,1-24.79,2.07-37.18,3-31.57,2.49-63.13,5-94.71,7.25-4.09.29-5.37,2.12-6.16,5.44-2,8.51-4.13,17-6.2,25.49q-13.83,56.61-27.65,113.21C248.43,1382.62,246.9,1389.56,245.11,1397.33Z"
                                transform="translate(305.81 -969.99)"
                            />
                            <path
                                d="M-114.41,1210.87c5.66-.67,10.59-1.44,15.55-1.82q36.3-2.83,72.63-5.46c11.59-.83,22.21,7,26.2,19.11,1.58,4.79,2.69,9.79,4.79,14.33,1.8,3.91.7,6.44-1.7,9.43q-36.76,45.64-73.36,91.43a23.33,23.33,0,0,1-2,1.55C-86.36,1296.63-100.21,1254.26-114.41,1210.87Z"
                                transform="translate(305.81 -969.99)"
                            />
                            <path
                                d="M989.06,1208.05c-3.64,12.87-6.86,24.82-10.41,36.68-4.17,13.92-4.28,14-19,15.19q-60.09,4.74-120.22,9.24c-1.82.13-3.66,0-6.31,0,4.57-16.52,8.74-32,13.3-47.41.45-1.5,3.24-3.12,5.06-3.27,26.32-2.22,52.66-4.18,79-6.21l54.61-4.22C986,1208,987,1208.05,989.06,1208.05Z"
                                transform="translate(305.81 -969.99)"
                            />
                            <path
                                d="M447.19,1245.1c-4.09,15.7-7.71,30.37-11.77,44.92-3.57,12.79-3.82,12.33-17.49,13.26-35.44,2.39-70.84,5.17-106.26,7.76-6.93.51-13.87.84-21.78,1.3,2.08-8.56,4-16.56,6-24.53,2.16-8.67,4.49-17.29,6.54-26,.92-3.9,2.71-5.74,7.05-6.06,30.39-2.26,60.76-4.8,91.14-7.28,13.15-1.08,26.28-2.28,39.43-3.37C442.08,1245,444.18,1245.1,447.19,1245.1Z"
                                transform="translate(305.81 -969.99)"
                            />
                            <text
                                class="cls-1"
                                transform="matrix(1.02, -0.08, 0.08, 1, 190.62, 209)"
                            >
                                AUTO DETAILING
                            </text>
                        </svg>
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
                        <ul class="navbar-nav d-flex justify-content-between">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href={{ url("/") }}>Home</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href= {{ url('/service')  }}>Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href={{ url('/giftcard') }}>Gift Card</a>
                            </li>
                            <li class="nav-item">
                                <a href={{url('/profile')}} class="nav-link">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a href={{ url('/donation') }} class="nav-link">Donation</a>
                            </li>
                            <li class="nav-item">
                                <a href={{ url('/contact') }} class="nav-link">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section class="header-text">
                <p>GIVE YOUR CAR</p>
                <p>THE BEST TREAT</p>
                <a class="btn btn-danger" href="#Packages">GET STARTED</a>
            </section>
        </header>
    </section>

    <main>
        <section class="sec1 s1">
            <div><img src={{ asset("assets/img/Rectangle38.png")}} alt=""/></div>
            <div class="text1">
                <h1><span>ABOU</span>T US</h1>
                <p>Our goal at <strong>LYFTED Auto Detailing </strong> is to get the job done right the first time,
                    every time. Whether it may be your vehicle or fleet needing a complete exterior or interior
                    detailing, we pride ourselves on providing the personalized service and fair prices you can expect
                    from a locally-owned and operated business. If any issues arise while we’ve got your vehicle, our
                    owner is on-site to provide the best possible care for you and your vehicle. We have proudly served
                    residents and businesses of Calgary & Surrounding Area since 2020, offering reliable auto detailing
                    services you can count on the first time.</p>
                <p>
                    We offer a full range of auto detailing services to located in
                    Calgary Alberta.
                </p>
                <p>We Even Come To You</p>
            </div>
        </section>
        <section class="sec1 s2">
            <div class="text2">
                <h1><span>WHAT</span> WE OFFER</h1>
                <p>
                    <strong> Lyfted Auto Detailing </strong> provides services that are
                    performed by highly trained detailing professionals that you can
                    trust Start to Finish!
                </p>
                <ul>
                    <li>We make auto detailing convenient for you</li>
                    <li>We get the job done right — the first time</li>
                    <li>Results for Setting Exceptional Standards</li>
                    <li>Same day for most services</li>
                </ul>
            </div>
            <div><img src={{ asset("assets/img/Rectangle103.png")}} alt="icon"/></div>
        </section>
        <section class="bar">
            <section>
                <img src={{ asset("assets/img/icon-1.svg")}} alt="icon"/>
                <p>ATTENTION TO DETAILS</p>
            </section>
            <section>
                <img src={{asset("assets/img/icons8-delivery-91.svg")}} alt=""/>

                <p>WE COME TO YOU</p>
            </section>
            <section>
                <img src={{asset("assets/img/charity-donation-hand-love.svg")}} alt=""/>
                <p>WE'RE TRUSTED</p>
            </section>
            <section>
                <img src={{asset("assets/img/policy.svg")}} alt=""/>
                <p>WARRANTY-BACKED</p>
            </section>
        </section>
        <section class="how-work">
            <h1>HOW <span>WE W</span>ORK</h1>
            <div class="cards">
                <section>
                    <div class="elapse">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="35.5"
                            height="35"
                            viewBox="0 0 35.5 35"
                        >
                            <path
                                d="M38.461,24.419l-3.687-3.259V15.608C34.765,9.4,29.468,4.2,22.488,3.539V1.125h-2.73V3.539C12.8,4.24,7.53,9.418,7.471,15.608v5.552L3.784,24.419a1.043,1.043,0,0,0-.409.844v3.621a1.064,1.064,0,0,0,.373.877,1.381,1.381,0,0,0,.992.33H14.3c0,3.333,3.056,6.034,6.826,6.034s6.826-2.7,6.826-6.034H37.5a1.381,1.381,0,0,0,.992-.33,1.064,1.064,0,0,0,.373-.877V25.263A1.043,1.043,0,0,0,38.461,24.419ZM21.123,33.711a3.88,3.88,0,0,1-4.1-3.621h8.191A3.88,3.88,0,0,1,21.123,33.711Zm15.017-6.034H6.106V25.746l3.687-3.259a1.043,1.043,0,0,0,.409-.844V15.608c0-5.332,4.89-9.655,10.921-9.655s10.921,4.323,10.921,9.655v6.034a1.043,1.043,0,0,0,.409.844l3.687,3.259Z"
                                transform="translate(-3.373 -1.125)"
                                fill="#f70"
                            />
                        </svg>
                    </div>

                    <p>1. STAGE</p>
                    <h3>Contacting Us</h3>
                    <p>
                        Call us for a pickup or drive straight up to our workshop and
                        leave the car under our care. We always exceed your expectations
                    </p>
                </section>
                <section>
                    <div class="elapse">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="35"
                            height="35"
                            viewBox="0 0 35 35"
                        >
                            <path
                                d="M23.646,8.006a3.087,3.087,0,0,1-2.017-.7,2.077,2.077,0,0,1-.851-1.651,2.542,2.542,0,0,1,.656-1.571A15.871,15.871,0,0,1,23.646,2a15.872,15.872,0,0,1,2.212,2.088,2.542,2.542,0,0,1,.656,1.571,2.077,2.077,0,0,1-.851,1.651A3.087,3.087,0,0,1,23.646,8.006Zm-10.257,0a3.087,3.087,0,0,1-2.017-.7,2.077,2.077,0,0,1-.851-1.651,2.542,2.542,0,0,1,.656-1.571A15.872,15.872,0,0,1,13.389,2,15.872,15.872,0,0,1,15.6,4.088a2.542,2.542,0,0,1,.656,1.571,2.077,2.077,0,0,1-.851,1.651A3.087,3.087,0,0,1,13.389,8.006Zm20.417,0a3.087,3.087,0,0,1-2.017-.7,2.077,2.077,0,0,1-.851-1.651,2.542,2.542,0,0,1,.656-1.571A15.871,15.871,0,0,1,33.806,2a15.872,15.872,0,0,1,2.212,2.088,2.542,2.542,0,0,1,.656,1.571,2.077,2.077,0,0,1-.851,1.651A3.087,3.087,0,0,1,33.806,8.006ZM9.889,33.659v2.148a1.059,1.059,0,0,1-.413.855A1.6,1.6,0,0,1,8.431,37H7.458a1.6,1.6,0,0,1-1.045-.338A1.059,1.059,0,0,1,6,35.807V22.92l4.132-10.182a1.378,1.378,0,0,1,.753-.875,2.838,2.838,0,0,1,1.337-.318H34.778a2.838,2.838,0,0,1,1.337.318,1.378,1.378,0,0,1,.753.875L41,22.92V35.807a1.059,1.059,0,0,1-.413.855A1.6,1.6,0,0,1,39.542,37H38.521a1.6,1.6,0,0,1-1.045-.338,1.059,1.059,0,0,1-.413-.855V33.659Zm.146-13.125H36.965l-2.674-6.6H12.708ZM8.917,22.92v0Zm5.153,6.364a2.858,2.858,0,0,0,1.872-.616,1.9,1.9,0,0,0,.753-1.531,2.016,2.016,0,0,0-.753-1.571,2.748,2.748,0,0,0-1.872-.656,2.936,2.936,0,0,0-1.92.656,1.972,1.972,0,0,0-.8,1.571,1.865,1.865,0,0,0,.8,1.531A3.058,3.058,0,0,0,14.069,29.284Zm18.91,0a3.058,3.058,0,0,0,1.92-.616,1.865,1.865,0,0,0,.8-1.531,1.972,1.972,0,0,0-.8-1.571,2.936,2.936,0,0,0-1.92-.656,2.748,2.748,0,0,0-1.872.656,2.016,2.016,0,0,0-.753,1.571,1.9,1.9,0,0,0,.753,1.531A2.858,2.858,0,0,0,32.979,29.284ZM8.917,31.273H38.083V22.92H8.917Z"
                                transform="translate(-6 -2)"
                                fill="#f70"
                            />
                        </svg>
                    </div>
                    <p>2. STAGE</p>
                    <h3>Car Care System-CCS</h3>
                    <p>
                        Using our state of the art CCS, we will service your car and
                        restore its pristine glory exactly the way it came out of the
                        showroom!
                    </p>
                </section>
                <section>
                    <div class="elapse">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="31.015"
                            height="25.031"
                            viewBox="0 0 31.015 25.031"
                        >
                            <path
                                d="M26.1,19.08a1.312,1.312,0,0,0,.987.395,1.459,1.459,0,0,0,.987-.395l4.51-4.212a1.2,1.2,0,0,0,0-1.843l-2.114-2.04A2.319,2.319,0,0,0,30.891,9.6a2.857,2.857,0,0,0-4.3-2.238L24.408,5.39a1.4,1.4,0,0,0-1.973,0L17.925,9.6a1.2,1.2,0,0,0,0,1.843l3.1,2.9L17.5,17.632,13.7,14.078a5.454,5.454,0,0,0,.987-3.159A6.143,6.143,0,0,0,8.342,4.995,1.365,1.365,0,0,0,6.933,6.311,1.365,1.365,0,0,0,8.342,7.627a3.413,3.413,0,0,1,3.523,3.291,3.413,3.413,0,0,1-3.523,3.291,3.413,3.413,0,0,1-3.523-3.291A1.365,1.365,0,0,0,3.409,9.6,1.365,1.365,0,0,0,2,10.918a6.143,6.143,0,0,0,6.342,5.924,6.45,6.45,0,0,0,3.382-.921l3.805,3.554L6.651,27.767a1.2,1.2,0,0,0,0,1.843,1.4,1.4,0,0,0,1.973,0L17.5,21.317l8.879,8.293a1.4,1.4,0,0,0,1.973,0,1.2,1.2,0,0,0,0-1.843l-8.879-8.293L23,16.184Zm-5.214-8.556,2.537-2.369,6.2,5.792-2.537,2.369Z"
                                transform="translate(-2 -4.985)"
                                fill="#f70"
                            />
                        </svg>
                    </div>
                    <p>3. STAGE</p>
                    <h3>Multiple Point Check</h3>
                    <p>
                        Based on your service requirements, we will attend to your car’s
                        needs and recommend our own template of CCS for management.
                    </p>
                </section>

                <section>
                    <div class="elapse">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="26.182"
                            height="38.788"
                            viewBox="0 0 26.182 38.788"
                        >
                            <path
                                d="M23.591,32.218a38.279,38.279,0,0,0,7.612-7.83,12.626,12.626,0,0,0,2.57-7.006,10.335,10.335,0,0,0-1.042-4.848,10.41,10.41,0,0,0-2.57-3.248,9.716,9.716,0,0,0-3.321-1.818,11.053,11.053,0,0,0-3.248-.558,11.053,11.053,0,0,0-3.248.558,9.716,9.716,0,0,0-3.321,1.818,10.41,10.41,0,0,0-2.57,3.248,10.335,10.335,0,0,0-1.042,4.848,12.626,12.626,0,0,0,2.57,7.006A38.279,38.279,0,0,0,23.591,32.218Zm0,3.685a45.487,45.487,0,0,1-9.867-9.551,15.531,15.531,0,0,1-3.224-8.97,13.345,13.345,0,0,1,1.188-5.794,13.136,13.136,0,0,1,3.079-4.194,12.868,12.868,0,0,1,4.218-2.545,12.926,12.926,0,0,1,9.212,0,12.868,12.868,0,0,1,4.218,2.545,13.136,13.136,0,0,1,3.079,4.194,13.345,13.345,0,0,1,1.188,5.794,15.531,15.531,0,0,1-3.224,8.97A45.487,45.487,0,0,1,23.591,35.9Zm0-15.418a3.393,3.393,0,0,0,3.394-3.394,3.394,3.394,0,0,0-5.794-2.4,3.395,3.395,0,0,0,0,4.8A3.27,3.27,0,0,0,23.591,20.485ZM10.5,42.788V39.879H36.682v2.909ZM23.591,17.382Z"
                                transform="translate(-10.5 -4)"
                                fill="#f70"
                            />
                        </svg>
                    </div>
                    <p>4. STAGE</p>
                    <h3>Contacting Us</h3>
                    <p>
                        Once the service is completed we would deliver your car to your
                        residence or office according to your choice in the shortest
                        possible time!
                    </p>
                </section>
            </div>
        </section>

        <section id="Packages" class="Packages">
            <h1>PA<span>CKAG</span>ES</h1>
            <p>
                We offer a full range of detailing services to vehicles, campers,
                Motorhomes, boats, and Fleet Owners.
            </p>
            <section class="cards">
                <section class="card shadow-lg pb-3 mb-2 bg-body rounded">
                    <div>PREMIUM</div>
                    <h3><span>&dollar;</span>139</h3>
                    <ul>
                        <li>Deep Vacuum</li>
                        <li>Garbage Disposal</li>
                        <li>Windows Streak Free</li>
                        <li>Leather Treatment</li>
                        <li>Vents Steamed (Upper/Lower)</li>
                        <li>All Panels Sanitized</li>
                        <li>Salt / Stain Removal</li>
                        <li>Trunk Cleaned</li>
                        <li>Doors Jambs</li>
                        <li>1 Set of Mats</li>
                        <li>Odor Removal</li>
                    </ul>
                    <a href="{{route("booking.index",["type" => "premium" ])}}" class="btn">BOOK NOW</a>
                </section>
                <section class="card pb-3 mb-2 bg-body shadow-lg rounded">
                    <span class="highlight red-bg ribbon">Popular</span>
                    <div>ELEGANCE</div>
                    <h3><span>&dollar;</span>200</h3>

                    <ul>
                        <li>Premium Package Services</li>
                        <li>Leather & Vinyl Protectant</li>
                        <li>Windows Streak Free</li>
                        <li>Headlight Restorationt</li>
                        <li>Hand Wash Exterior</li>
                        <li>Tire Restoration</li>
                        <li>UV Protectant</li>
                    </ul>
                    <a href="{{route("booking.index",["type" => "Elegance" ])}}" class="btn">BOOK NOW</a>
                </section>
                <section class="card pb-3 mb-2 bg-body shadow-lg rounded">
                    <div>FIVE DIAMOND</div>
                    <h3><span>&dollar;</span>599</h3>

                    <ul>
                        <li>Elegance Package Services</li>
                        <li>Engine Bay Restoration</li>
                        <li>Leather Restoration</li>
                        <li>Clay Bar Treatment</li>
                        <li>Wheels Detailed</li>
                        <li>Tires Conditioned</li>
                        <li>Tar Removal</li>
                        <li>Iron Decontamination</li>
                        <li>Brake Dust Removal</li>
                        <li>Paint Swirl Removal</li>
                    </ul>
                    <a href="{{route("booking.index",["type" => "five diamond" ])}}" class="btn">BOOK NOW</a>
                </section>
            </section>
            <a href="/service" class="btn btn-outline-danger">VIEW ALL SERVICES</a>
        </section>
        <section class="testmonial">
            <h1>WHAT OUR C<span>LIENT</span>S ARE SAYING</h1>
            <section class="tes-cards">
                <section class="tes-card shadow-lg">
                    <p>Rasmus Rydstrøm-Poulsen</p>
                    <p>26-04-2022</p>
                    <section class="stars"></section>
                    <p>
                        Jesse complete breathed life into the GROSS interior of my old
                        Chevy. Great communication and very flexible with my schedule 😊
                        thank you! Looking forward to having you work on my vehicles going
                        forward!
                    </p>
                </section>
                <section class="tes-card shadow-lg">
                    <p>Rasmus Rydstrøm-Poulsen</p>
                    <p>26-04-2022</p>
                    <section class="stars"></section>
                    <p>
                        Jesse complete breathed life into the GROSS interior of my old
                        Chevy. Great communication and very flexible with my schedule 😊
                        thank you! Looking forward to having you work on my vehicles going
                        forward!
                    </p>
                </section>
                <section class="tes-card shadow-lg">
                    <p>Rasmus Rydstrøm-Poulsen</p>
                    <p>26-04-2022</p>
                    <section class="stars"></section>
                    <p>
                        Jesse complete breathed life into the GROSS interior of my old
                        Chevy. Great communication and very flexible with my schedule 😊
                        thank you! Looking forward to having you work on my vehicles going
                        forward!
                    </p>
                </section>
            </section>
            <p style="font-size: 12px;">Google rating score: 5 of 5, based on 32 reviews.</p>
        </section>
    </main>

@endsection
