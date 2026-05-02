<!DOCTYPE html>
<html lang="en">

<head>
    <title>Linktree Kopi Kenangan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function showme() {
            Swal.fire({
                title: "Hallo!",
                text: "Wleowleo",
                icon: "success"
            });
        }
        function changeText() {
            const element = document.getElementById("judul");
            element.innerHTML = "Kopi kenangan wleowleo";
        }

        function changeStyle() {
            const element = document.getElementById("tombol");
            element.style.color = "yellow";
            element.style.background = "red";
        }

    </script>

    <style>
        body {
            background: #f1f1f1;
        }

        .box {
            width: 100%;
            max-width: 420px;
            margin: 40px auto;
            background: #e5e5e5;
            padding: 30px 20px;
            border-radius: 25px;
            text-align: center;
        }

        .foto {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .judul {
            font-weight: bold;
            margin-bottom: 20px;
        }

        .link-box {
            background: #f7f7f7;
            padding: 15px;
            border-radius: 12px;
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .link-box a {
            color: black;
            text-decoration: none;
        }

        .link-box:hover {
            background: #dcdcdc;
        }

        .tombol {
            display: inline-block;
            background: white;
            padding: 12px 20px;
            border-radius: 25px;
            margin-top: 20px;
            text-decoration: none;
            color: black;
        }

        .footer {
            font-size: 12px;
            color: gray;
            margin-top: 15px;
        }

        .fade-bawah {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 120px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.3), transparent);
        }

        .dots {
            color: #888;
        }
    </style>

</head>

<body>

    <div class="container">

        <!-- BOX UTAMA -->
        <div class="row">
            <div class="col">

                <div class="box shadow">

                    <!-- PROFILE -->
                    <div class="row">
                        <div class="col">
                            <img src="https://ugc.production.linktr.ee/yVDZp3L2QT2FJId6ejGI_vY629qu6S0EB24BX?io=true&size=avatar-v3_0"
                                class="foto">
                            <h1 id="judul">Kopi Kenangan</h1>
                        </div>
                    </div>

                    <button class="btn btn-primary" onclick="showme();">Change alert</button>
                    <button class="btn btn-primary" onclick="changeText();">Change Text</button>
                    <button class="btn btn-primary" onclick="changeStyle();">Change Style</button>

                    <!-- LINK -->
                    <div class="row">
                        <div class="col link-box">
                            <a href="#">Barista Part Time (Pekanbaru): 5 Posisi</a>
                            <i class="fa-solid fa-ellipsis-vertical dots"></i>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col link-box">
                            <a href="#">Barista Part Time (Bali): 5 Posisi</a>
                            <i class="fa-solid fa-ellipsis-vertical dots"></i>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col link-box">
                            <a href="#">Barista Part Time (Medan): 5 Posisi</a>
                            <i class="fa-solid fa-ellipsis-vertical dots"></i>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col link-box">
                            <a href="#">Barista Part Time (Padang): 5 Posisi</a>
                            <i class="fa-solid fa-ellipsis-vertical dots"></i>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col link-box">
                            <a href="#">Barista Part Time (Batam): 5 Posisi</a>
                            <i class="fa-solid fa-ellipsis-vertical dots"></i>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col link-box">
                            <a href="#">Supervisor Outlet (Bali): 1 Posisi</a>
                            <i class="fa-solid fa-ellipsis-vertical dots"></i>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col link-box">
                            <a href="#">Store Manager (Bali): 1 Posisi</a>
                            <i class="fa-solid fa-ellipsis-vertical dots"></i>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col link-box">
                            <a href="#">Barista Part Time (Jakarta): 6 Posisi</a>
                            <i class="fa-solid fa-ellipsis-vertical dots"></i>
                        </div>
                    </div>

                    <!-- BUTTON -->
                    <div class="row">
                        <div class="col link-box">
                            <a href="#" id="tombol">
                                Bergabung dengan KopiKenanganAtma di Linktree
                            </a>
                            <i class="fa-solid fa-ellipsis-vertical dots"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>

    </div>

    <!-- GRADIENT -->
    <div class="fade-bawah"></div>

</body>

</html>
