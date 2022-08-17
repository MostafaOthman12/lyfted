@extends("layout")
@section("imports")
    <link rel="stylesheet" href="assets/css/dashboard.css">
@endsection
@section("main")
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Full Name</th>
            <th scope="col">Date/Time</th>
            <th scope="col">Address</th>
            <th scope="col">Main service</th>
            <th scope="col">Adds-Ons</th>
            <th scope="col">Phone</th>
            <th scope="col">Comment</th>
            <th scope="col">Acction</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td><a class="btn-primary btn" href="">Accept</a> <a class="btn btn-danger">Reject</a></td>

        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td><a class="btn-primary btn" href="">Accept</a> <a class="btn btn-danger">Reject</a></td>

        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td><a class="btn-primary btn" href="">Accept</a> <a class="btn btn-danger">Reject</a></td>
        </tr>

        </tbody>
    </table>
@endsection
