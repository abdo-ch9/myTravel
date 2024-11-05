<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wildlive Animals Category Bootstrap Responsive Web Template | Contact :: W3Layouts </title>
    <link href="//fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style-starter.css">
</head>

<body>
    @include("layout.navbar")
    <div class="inner-banner">
    </div>
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

    <section class="w3l-breadcrumb">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{route('dashboardUser')}}">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Reservation</li>
            </ul>
        </div>
        <h2 class="mb-4">Reservation Details</h2>
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th scope="row">
                        <h4>First Name</h4>
                    </th>
                    <td>
                        <h5>{{ $reservation->fname }}</h5>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <h4>Last Name</h4>
                    </th>
                    <td>
                        <h5>{{ $reservation->lname }}</h5>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <h4>Country of Residence</h4>
                    </th>
                    <td>
                        <h5>{{ $reservation->countryOfResidence }}</h5>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <h4>Phone Number</h4>
                    </th>
                    <td>
                        <h5>{{ $reservation->phoneNumber }}</h5>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <h4>Email</h4>
                    </th>
                    <td>
                        <h5>{{ $reservation->email }}</h5>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <h4>Date of Reservation</h4>
                    </th>
                    <td>
                        <h5>{{ $reservation->dateReservation }}</h5>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <h4>Number of Nights</h4>
                    </th>
                    <td>
                        <h5>{{ $reservation->numberNight }}</h5>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <h4>Number of Adults</h4>
                    </th>
                    <td>
                        <h5>{{ $reservation->numberOfAdults }}</h5>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <h4>Number of Children</h4>
                    </th>
                    <td>
                        <h5>{{ $reservation->numberOfChilds }}</h5>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <h4>How Did You Know About Us?</h4>
                    </th>
                    <td>
                        <h5>{{ $reservation->howdiduknowaboutus }}</h5>
                    </td>
                </tr>
            </tbody>


        </table>

        @if(Auth::check()){
        <p style="text-align: center;">
            <button type="submit" class="btn btn-danger" style=" margin-bottom: 20px; margin-left: 10px;"> <a href="#" onclick="event.preventDefault(); document.getElementById('delete-reservation-form').submit();" style="color: white;">
                    Delete Reservation
                </a></button>
            <button type="submit" class="btn btn-danger" style=" margin-bottom: 20px; margin-left: 10px;"><a href="{{ route('editreservationUser', $reservation->id) }}" style="color: white; ">Update Reservation</a></button>
        <form id="delete-reservation-form" action="{{ route('deletereservationUser', $reservation->id) }}" method="POST" style="display: none;">
            @csrf
            @method('delete')
        </form>
        </p>
        }

        @endif
        <!-- Hidden form for the DELETE request -->


        </div>
    </section>

    @include('layout.footer')
    <script src="/assets/js/bootstrap.min.js"></script>

</body>

</html>