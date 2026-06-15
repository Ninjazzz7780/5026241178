<!DOCTYPE html>
<html lang="en">

<head>
    <title>Landing Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            margin: 0;
            font-family: sans-serif;
        }

        /* IMAGE */
        .bg-image {
            position: absolute;
            top: 0;
            right: 0;
            width: 50%;
            max-height: 100vh;
            object-fit: contain;
            object-position: right top;
            z-index: -1;
        }

        /* NAVBAR */
        .nav-link-custom {
            color: #1f2a44;
            font-size: 14px;
            text-decoration: none;
        }

        .nav-link-custom:hover {
            text-decoration: underline;
        }

        .brand {
            font-weight: bold;
            color: #1f2a44;
        }

        /* HERO */
        .hero {
            min-height: 90vh;
            display: flex;
            align-items: center;
        }

        .judul {
            font-size: 42px;
            font-weight: bold;
            color: #1f2a44;
            line-height: 1.2;
        }

        .desc {
            font-size: 14px;
            color: #6c757d;
            line-height: 1.7;
        }

        /* BUTTON */
        .btn-dark-custom {
            background: #1f2a44;
            color: white;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
        }

        .btn-outline-custom {
            border: 2px solid #1f2a44;
            color: #1f2a44;
            padding: 10px 20px;
            border-radius: 4px;
            text-decoration: none;
        }

        .btn-dark-custom:hover {
            background: #2e3d5f;
            color: white;
        }

        .btn-outline-custom:hover {
            background: #1f2a44;
            color: white;
        }
    </style>
</head>

<body>

    <!-- IMAGE -->
    <img src="Images/designer_1.png" class="bg-image">

    <div class="container">

        <!-- NAVBAR -->
        <div class="row py-4 align-items-center">
            <div class="col-4">
                <a href="#" class="nav-link-custom">Home</a>
                <a href="#" class="nav-link-custom ml-3">About</a>
                <a href="#" class="nav-link-custom ml-3">Contact</a>
            </div>

            <div class="col-4 text-center">
                <span class="brand">Landing</span>
            </div>

            <div class="col-4 text-right">
                <a href="#" class="btn btn-dark btn-sm">Buy Now</a>
            </div>
        </div>

        <!-- HERO -->
        <div class="row hero">
            <div class="col-lg-6">

                <h1 class="judul">
                    Introduce Your Product <br>
                    Quickly & Effectively
                </h1>

                <p class="desc mt-4 mb-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor.
                    Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.
                </p>

                <p class="desc mb-4">
                    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu,
                    pretium quis, sem. Nulla consequat massa quis enim.
                </p>

                <div>
                    <a href="#" class="btn-dark-custom mr-3">Purchase UI Kit</a>
                    <a href="#" class="btn-outline-custom">Learn More</a>
                </div>

            </div>
        </div>

    </div>

</body>

</html>
