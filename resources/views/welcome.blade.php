<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel + Bootstrap 5 + Font Awesome + Jquery</title>

    <link rel="stylesheet" href="{{ asset('vendor/plugins/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/plugins/fontawesome-free/css/all.min.css') }}">

</head>

<body>

    <div class="container">
        <div class="col-md-12">

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">

                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>

                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                        aria-selected="false">Profile</button>

                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                        aria-selected="false">Contact</button>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">Home
                    <i class="fa fa-home" aria-hidden="true"></i>
                </div>

                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Profile
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>

                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">Contact
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                </div>
            </div>

        </div>
    </div>

    <script src="{{ asset('vendor/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
