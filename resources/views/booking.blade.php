@extends("layout")
@section('imports')
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
    <div class="container r">
        <div class="book">
        <h1>BOOK AN APPOINTMENT</h1>
        <div class="alert alert-danger"> Booking type</div>
        <form>
            <div class="row">
                <div class="col">
                    <label>First Name</label>
                    <input type="text" class="form-control" aria-label="First name">
                </div>
                <div class="col">
                    <label>SurName</label>
                    <input type="text" class="form-control" aria-label="sur name">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Email</label>
                    <input type="email" class="form-control" aria-label="email">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Address</label>
                    <input type="text" class="form-control" aria-label="Address">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Booking Date</label>
                    <input type="date" class="form-control" aria-label="Booking Date">
                </div>
                <div class="col">
                    <label>Time</label>
                    <input type="time" class="form-control" aria-label="Time">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Phone</label>
                    <input type="tel" class="form-control" aria-label="email">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Comment</label>
                    <textarea type="tel" class="form-control" aria-label="email"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <a   class="btn btn-danger" >BOOK NOW</a>
                </div>
            </div>
        </form>
        </div>
    </div>

@endsection
