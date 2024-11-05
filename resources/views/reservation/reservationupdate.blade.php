<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wildlive Animals Category Bootstrap Responsive Web Template | Contact :: W3Layouts </title>
    <link href="//fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style-starter.css">
</head>

<body>
    <!--header-->
    @extends("layout.navbar")
    <!--/inner-page-->

    <div class="inner-banner">
    </div>
    <section class="w3l-breadcrumb">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Reservation</li>
            </ul>
        </div>
    </section>
    <div class="container my-5">
        <h2 class="mb-4">Reservation Form</h2>

        <form action="{{ route('updatereservationUser', $reservation->id) }}" method="post">
    @csrf
    @method("put")
    
    <!-- First Name -->
    <div class="mb-3">
        <label for="fname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="fname" name="fname" value="{{ $reservation->fname }}">
    </div>

    <!-- Last Name -->
    <div class="mb-3">
        <label for="lname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lname" name="lname" value="{{ $reservation->lname }}">
    </div>

    <!-- Country of Residence -->
    <div class="mb-3">
        <label for="countryOfResidence" class="form-label">Country of Residence</label>
        <input type="text" class="form-control" id="countryOfResidence" name="countryOfResidence" value="{{ $reservation->countryOfResidence }}">
    </div>

    <!-- Phone Number -->
    <div class="mb-3">
        <label for="phoneNumber" class="form-label">Phone Number</label>
        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" value="{{ $reservation->phoneNumber }}">
    </div>

    <!-- Email -->
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $reservation->email }}">
    </div>

    <!-- Date of Reservation -->
    <div class="mb-3">
        <label for="dateReservation" class="form-label">Date of Reservation</label>
        <input type="date" class="form-control" id="dateReservation" name="dateReservation" value="{{ $reservation->dateReservation }}">
    </div>

    <!-- Number of Nights -->
    <div class="mb-3">
        <label for="numberNight" class="form-label">Number of Nights</label>
        <select class="form-select" id="numberNight" name="numberNight" style="padding:5px 70px; border-radius: 5px; display: block;">
            <option selected disabled>Number of Nights</option>
            @for ($i = 5; $i <= 10; $i++)
                <option value="{{ $i }}" {{ $reservation->numberNight == $i ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
        </select>
    </div>

    <!-- Number of Adults -->
    <div class="mb-3">
        <label for="numberOfAdults" class="form-label">Number of Adults</label>
        <select class="form-select" id="numberOfAdults" name="numberOfAdults" style="padding:5px 70px; border-radius: 5px; display: block;">
            <option selected disabled>Number of Adults (over 18)</option>
            @for ($i = 1; $i <= 9; $i++)
                <option value="{{ $i }}" {{ $reservation->numberOfAdults == $i ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
        </select>
    </div>

    <!-- Number of Children -->
    <div class="mb-3">
        <label for="numberOfChilds" class="form-label">Number of Children</label>
        <select class="form-select" id="numberOfChilds" name="numberOfChilds" style="padding:5px 70px; border-radius: 5px; display: block;">
            <option selected disabled>Number of Children (under 18)</option>
            @for ($i = 0; $i <= 8; $i++)
                <option value="{{ $i }}" {{ $reservation->numberOfChilds == $i ? 'selected' : '' }}>{{ $i }}</option>
            @endfor
        </select>
    </div>

    <!-- How Did You Know About Us -->
    <div class="mb-3">
        <label for="howdiduknowaboutus" class="form-label">How Did You Know About Us?</label>
        <input type="text" class="form-control" id="howdiduknowaboutus" name="howdiduknowaboutus" value="{{ $reservation->howdiduknowaboutus }}">
    </div>

    <!-- Submit Button -->
    <p style="text-align: center;">
        <button type="submit" class="btn btn-primary">Submit Reservation</button>
    </p>
</form>

    </div>
    <!--//inner-page-->






    <button onclick="topFunction()" id="movetop" title="Go to top">
        &#10548;
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    @extends("layout.footer")


</body>

</html>