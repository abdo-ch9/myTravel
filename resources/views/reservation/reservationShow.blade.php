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
    <section class="w3l-breadcrumb">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Reservation</li>
            </ul>
        </div>
        <h2 class="mb-4">Reservation Details</h2>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th>First Name</th>
                    <td>{{ $reservation->fname }}</td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td>{{ $reservation->lname }}</td>
                </tr>
                <tr>
                    <th>Country of Residence</th>
                    <td>{{ $reservation->countryOfResidence }}</td>
                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td>{{ $reservation->phoneNumber }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $reservation->email }}</td>
                </tr>
                <tr>
                    <th>Date of Reservation</th>
                    <td>{{ $reservation->dateReservation }}</td>
                </tr>
                <tr>
                    <th>Number of Nights</th>
                    <td>{{ $reservation->numberNight }}</td>
                </tr>
                <tr>
                    <th>Number of Adults</th>
                    <td>{{ $reservation->numberOfAdults }}</td>
                </tr>
                <tr>
                    <th>Number of Children</th>
                    <td>{{ $reservation->numberOfChilds }}</td>
                </tr>
                <tr>
                    <th>How Did You Know About Us?</th>
                    <td>{{ $reservation-> howdiduknowaboutus }}</td>
                </tr>
            </tbody>
        </table>
        </div>
    </section>

    @include('layout.footer')
    <script src="/assets/js/bootstrap.min.js"></script>

</body>

</html>