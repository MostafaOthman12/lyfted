@extends('layout')
@section('imports')
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/service.css">
@endsection
@section('main')
    <section class="container">
        <h1>Services</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">Home</li>
                <li class="breadcrumb-item active" aria-current="page">Service</li>
            </ol>
        </nav>
    </section>

    <section class="contact">
        <h2>LYFTED AUTO<span>DETAILIN</span>G - PAKAGES</h2>
        <p>
            We offer a full range of detailing services to vehicles, campers,
            Motorhomes, boats, and Fleet Owners.
        </p>

        <section class="Packages">
            <section class="cards C">
                <section class="card shadow-lg pb-3 mb-2 bg-body rounded">
                    <div>BASIC INTERIOR</div>
                    <h3><span>&dollar;</span>89</h3>
                    <ul>
                        <li>Deep Vacuum</li>
                        <li>Garbage Disposal</li>
                        <li>Windows Streak Free</li>
                        <li>Trunk Vacuumed</li>
                        <li>Tire Trunk Vacuumed</li>
                        <li>Refreshing Odor Neutralizer</li>
                    </ul>
                    <a href="{{route("booking.index",["type" => "Basic interior" ])}}" class="btn">BOOK NOW</a>
                </section>

                <section class="card pb-3 mb-2 bg-body shadow-lg rounded">
                    <div>EXTERIOR</div>
                    <h3><span>&dollar;</span>89</h3>

                    <ul>
                        <li>Exterior Wash & Wax</li>
                        <li>Hand Wash</li>
                        <li>Tire Restoration / Shine</li>
                        <li>UV Protectant</li>
                    </ul>
                    <a href="{{route("booking.index",["type" => "Exterior" ])}}" class="btn">BOOK NOW</a>
                </section>
            </section>
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
                    <a href="{{route("booking.index",["type" => "elegance" ])}}" class="btn">BOOK NOW</a>
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
        </section>
    </section>
    <hr>
    <section class="container additional">
        <section class="row">
            <section class="h">
                <h2> Additional Service </h2>
            </section>
            <section class="polising shadow-lg">
                <section class="heading ">
                    <h4>POLISHING</h4>
                    <h4><span>&dollar;</span>139</h4>
                </section>
                <section class="pol-body">
                    <section class="pol-ul">
                        <ul>
                            <li>Full Exterior Detail</li>
                            <li>Single Stage Polish</li>
                            <li>Break Dust Removal</li>
                        </ul>
                        <ul>
                            <li>Swirl Removal</li>
                            <li>Clay Bar</li>
                        </ul>
                    </section>

                    <a href="{{route("booking.index",["type" => "polishing" ])}}" class="btn btn-danger">Book now</a>
                </section>


            </section>
        </section>
        <section class="row">
            <section class="container .ceramic polising">
                <section class="row">
                    <section class="ceramic shadow-lg">
                        <section class="heading ">
                            <h4>CERAMIC CAOTING</h4>
                        </section>
                        <section class="pol-body">
                            <section class="co-ul">
                                <div>
                                    <ul>
                                        <li>Compact</li>
                                        <li>$799.00</li>
                                        <li><a href="{{route("booking.index",["type" => "ceramic coating|compact" ])}}"
                                               class="btn btn-danger">Book now</a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <ul>
                                        <li>Mid-Size</li>
                                        <li>$899.00</li>
                                        <li><a href="{{route("booking.index",["type" => "ceramic coating|mid-size" ])}}"
                                               class="btn btn-danger">Book now</a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <ul>
                                        <li>Full-Size</li>
                                        <li>$999.00</li>
                                        <li>
                                            <a href="{{route("booking.index",["type" => "ceramic coating|full-size" ])}}"
                                               class="btn btn-danger">Book now</a>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                        </section>
                    </section>
                </section>
            </section>

        </section>
        <section class="adds shadow-lg row">
            <section class="heder">
                <h4>All Add-ons are available at booking page</h4>
            </section>
            <section class="body">
                <ul>
                    <li>Car Seat Shampoo</li>
                    <li>Ceiling Shampoo</li>
                    <li>Engine Bay Restoration</li>
                    <li>Windshield Water Repellent</li>

                </ul>
                <ul>
                    <li>Headlight Restoration</li>
                    <li>Polish & Wax</li>
                    <li>Odour Removal with Ozone Generator</li>

                </ul>
            </section>
        </section>
    </section>

@endsection
