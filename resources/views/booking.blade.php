@extends("layout")
@section('imports')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/service.css">
    <link rel="stylesheet" href="assets/css/booking.css">
@endsection
@section("main")
    <div class="container">
        <h1>GIFT CARD</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">Home</li>
                <li class="breadcrumb-item active" aria-current="page">Book</li>
            </ol>
        </nav>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container r">
        <div class="book">
            <h1>BOOK AN APPOINTMENT</h1>
            <div class="alert alert-danger type">{{$type}}</div>
            <form method="post" action="{{route("booking.store")}}">
                @csrf
                <div class="row">
                    <div class="col">
                        <label for="firstName">First Name</label>
                        <input name="firstName" type="text" class="form-control" aria-label="First name">
                    </div>
                    <div class="col">
                        <label for="surName">SurName</label>
                        <input id="surName" name="surName" type="text" class="form-control" aria-label="sur name">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="Email">Email</label>
                        <input name="Email" type="email" class="form-control" aria-label="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="address">Address</label>
                        <input name="address" type="text" class="form-control" aria-label="Address">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="date">Booking Date</label>
                        <input name="date" type="date" class="form-control" aria-label="Booking Date">
                    </div>
                    <div class="col">
                        <label for="time">Time</label>
                        <input name="time" type="time" class="form-control" aria-label="Time">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="phone">Phone</label>
                        <input name="phone" type="tel" class="form-control" aria-label="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="comment">Comment</label>
                        <textarea name="comment" type="tel" class="form-control" aria-label="email"></textarea>
                    </div>
                </div>
                <input name="type" value="{{$type}}" type="hidden" class="form-control" aria-label="email">

                <div class="row">
                    <div class="col">
                        <button class="btn btn-danger">BOOK NOW</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
