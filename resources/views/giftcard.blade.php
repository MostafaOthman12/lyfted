@extends("layout")
@section('imports')
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/service.css">
    <link rel="stylesheet" href="assets/css/giftcard.css">
@endsection
@section("main")
    <section class="container">
        <h1>GIFT CARD</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">Home</li>
                <li class="breadcrumb-item active" aria-current="page">gift card</li>
            </ol>
        </nav>

        <section class="giftcard">
            <section class="sec1">
                <img class="shadow" src="assets/img/gift.jpg">
            </section>
            <section class="sec2">
<p>Explore our gift cards and enjoy discount vouchers <br> 10%, 20%, 30%, 40% off the service, those Tickets that <br> are available to purchase at a price below <br>
    the card in the directed site.</p>
                <a class="btn-danger btn"> BOOK NOW</a>
            </section>
        </section>
    </section>
@endsection
