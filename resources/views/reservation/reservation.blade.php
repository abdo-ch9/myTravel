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
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form action="{{route('storereservationUser')}}" method="post">
            @csrf
            <!-- First Name -->
            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" required>
            </div>

            <!-- Last Name -->
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" required>
            </div>

            <!-- Country of Residence -->
            <div class="mb-3">
                <label for="countryOfResidence" class="form-label">Country of Residence</label>
                <input type="text" class="form-control" id="countryOfResidence" name="countryOfResidence" required>
            </div>

            <!-- Phone Number -->
            <div class="mb-3">
                <label for="phoneNumber" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <!-- Date of Reservation -->
            <div class="mb-3">
                <label for="dateReservation" class="form-label">Date of Reservation</label>
                <input type="date" class="form-control" id="dateReservation" name="dateReservation" required>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <p style="color: black;">{{ $error }}</p>
                @endforeach
            </div>
            @endif

            <!-- Number of Nights -->
            <div class="mb-3">
                <label for="numberNight" class="form-label">Number of Nights</label>
                <select class="form-select" id="numberNight" name="numberNight" required style="padding:5px 70px; border-radius: 5px; display: block;">
                    <option selected disabled>Number of Nights</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>

            <!-- Number of Adults -->
            <div class="mb-3">
                <label for="numberOfAdults" class="form-label">Number of Adults</label>
                <select class="form-select" id="numberOfAdults" name="numberOfAdults" required style="padding:5px 70px; border-radius: 5px; display: block;">
                    <option selected disabled>Number of Adults(over 18)</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>

                </select>
            </div>

            <!-- Number of Children -->
            <div class="mb-3">
                <label for="numberOfChilds" class="form-label">Number of Children</label>
                <select class="form-select" id="numberOfChilds" name="numberOfChilds" required style="padding:5px 70px; border-radius: 5px; display: block;">
                    <option selected disabled>Number of Children (under 18)</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>

            <!-- How Did You Know About Us -->
            <div class="mb-3">
                <label for="howdiduknowaboutus" class="form-label">How Did You Know About Us?</label>
                <input type="text" class="form-control" id="howdiduknowaboutus" name="howdiduknowaboutus">
            </div>
            <!-- Submit Button -->
            <p style="text-align: center;"><button type="submit" class="btn btn-primary">Submit Reservation</button>
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