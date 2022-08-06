@extends('layout')
@section('imports')
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/service.css">
@endsection
@section("main")
    <section class="container">
        <h1>Contact</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item" aria-current="page">Home</li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
        </nav>
    </section>
    <section class="contact">
        <h2>Get <span>in to</span>uch</h2>
        <form class="row g-1">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="JOHN DOE"
                />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                >Email address</label
                >
                <input
                    type="email"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="name@example.com"
                />
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">write your massage here..</label>
                <textarea
                    class="form-control"
                    id="exampleFormControlTextarea1"
                    rows="3"
                ></textarea>
            </div>
        </form>
        <a class="btn btn-danger btn-active">SEND MASSAGE</a>
    </section>
@endsection
