@extends("layout")
@section('imports')
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/service.css">
    <link rel="stylesheet" href="assets/css/portfolio.css">
@endsection
@section("main")
    <section class="container">
        <h1>Portfolio</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">Home</li>
                <li class="breadcrumb-item active" aria-current="page">portfolio</li>
            </ol>
        </nav>
    </section>
    <h1>Nothing is <span>ever</span> permanent</h1>
    <section class="work-sec">
        <section class="rows">
            <section class="img a1">
                <div class="area1"><img src="assets/img/12.jpg"></div>
                <div class="area2"><img src="assets/img/11.jpg"></div>
            </section>
            <section class="img a2">
                <div class="area1"><img src="assets/img/10.jpg"></div>
                <div class="area2"><img src="assets/img/9.jpg"></div>
            </section>
        </section>

        <section class="rows">
            <section class="img a1">
                <div class="area1"><img src="assets/img/8.jpg"></div>
                <div class="area2"><img src="assets/img/7.jpg"></div>
            </section>
            <section class="img a2">
                <div class="area1"><img src="assets/img/6.jpg"></div>
                <div class="area2"><img src="assets/img/5.jpg"></div>
            </section>
        </section>

        <section class="rows">
            <section class="img a1">
                <div class="area1"><img src="assets/img/4.jpg"></div>
                <div class="area2"><img src="assets/img/3.jpg"></div>
            </section>
            <section class="img a2">
                <div class="area1"><img src="assets/img/2.jpg"></div>
                <div class="area2"><img src="assets/img/1.jpg"></div>
            </section>
        </section>
    </section>
<section class="port-more">
    <h3>See more of our work on </h3>
    <a href="https://instagram.com/lyftedautodetailing?igshid=YmMyMTA2M2Y=">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24.078"
            height="24.078"
            viewBox="0 0 24.078 24.078"
        >
            <path
                d="M12.039,0C8.768,0,8.36.015,7.076.072a8.886,8.886,0,0,0-2.922.56A5.891,5.891,0,0,0,2.021,2.021,5.886,5.886,0,0,0,.632,4.153a8.868,8.868,0,0,0-.56,2.922C.012,8.36,0,8.768,0,12.039S.015,15.718.072,17a8.889,8.889,0,0,0,.56,2.922,5.9,5.9,0,0,0,1.389,2.133,5.887,5.887,0,0,0,2.133,1.389,8.9,8.9,0,0,0,2.922.56c1.285.06,1.693.072,4.963.072s3.679-.015,4.963-.072a8.907,8.907,0,0,0,2.922-.56,6.153,6.153,0,0,0,3.521-3.521A8.889,8.889,0,0,0,24.006,17c.06-1.284.072-1.692.072-4.963s-.015-3.679-.072-4.963a8.9,8.9,0,0,0-.56-2.922,5.909,5.909,0,0,0-1.389-2.133A5.866,5.866,0,0,0,19.925.632,8.855,8.855,0,0,0,17,.072C15.718.012,15.31,0,12.039,0Zm0,2.167c3.213,0,3.6.016,4.866.071a6.637,6.637,0,0,1,2.234.416,3.963,3.963,0,0,1,2.285,2.284,6.638,6.638,0,0,1,.414,2.234c.058,1.27.07,1.651.07,4.866s-.015,3.6-.074,4.866a6.771,6.771,0,0,1-.422,2.234,3.822,3.822,0,0,1-.9,1.386,3.756,3.756,0,0,1-1.384.9,6.688,6.688,0,0,1-2.243.414c-1.278.058-1.655.07-4.874.07s-3.6-.015-4.874-.074a6.831,6.831,0,0,1-2.243-.422,3.728,3.728,0,0,1-1.384-.9,3.656,3.656,0,0,1-.9-1.384,6.849,6.849,0,0,1-.421-2.243c-.045-1.264-.061-1.655-.061-4.86s.016-3.6.061-4.876A6.825,6.825,0,0,1,2.6,4.9a3.561,3.561,0,0,1,.9-1.385,3.565,3.565,0,0,1,1.384-.9A6.664,6.664,0,0,1,7.119,2.2c1.279-.045,1.655-.06,4.874-.06l.045.03Zm0,3.69a6.182,6.182,0,1,0,6.182,6.182A6.182,6.182,0,0,0,12.039,5.857Zm0,10.2a4.013,4.013,0,1,1,4.013-4.013A4.012,4.012,0,0,1,12.039,16.052ZM19.911,5.614a1.446,1.446,0,0,1-2.889,0,1.445,1.445,0,1,1,2.889,0Z"
                fill="#2A2550"
            />
        </svg>
        Instagram
    </a>
</section>

@endsection
