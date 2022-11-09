<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css"
        integrity="sha512-3M00D/rn8n+2ZVXBO9Hib0GKNpkm8MSUU/e2VNthDyBYxKWG+BftNYYcuEjXlyrSO637tidzMBXfE7sQm0INUg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        body {
            font-family: "GT-Regular";
        }

        header.main-header {
            padding: 2rem 1.8rem 1.2rem 1.8rem;
        }

        header.main-header a,
        .form-wraper a {
            color: #1f2027;
            display: inline-block;
            padding-right: 0.5rem;
            padding-left: 0.5rem;
            text-decoration: none;
            transition: all 300ms;

        }

        header.main-header a.link:hover,
        .form-wraper a:hover {
            color: #FBB3C1;
        }

        header.main-header a.bordered {
            border: 1px solid #1f2027;
            border-radius: 7px;
            padding: 5px 10px
        }

        header.main-header a.bordered:hover {
            background-color: #FBB3C1;
            border-color: #FBB3C1;
            color: #fff;
        }

        .col-12.flex {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .grey-bg {
            border-radius: 24px 0px 0px 24px;
            background-color: #F7F7FA;
            overflow: hidden;
            position: relative;
        }

        .grey-bg img {
            border-radius: 24px;
            max-width: 100%;
        }

        img.img-1 {
            max-width: 100%;
            margin-left: 20px;
            margin-top: 110px;

        }

        img.img-2 {
            margin-top: 90px;
        }

        img.img-3 {
            margin-top: 150px;
            max-width: 180px;
        }

        .form-control {
            padding: 0.5rem 1rem;
            border-radius: 12px;
            height: 48px;
            color: #1f2027;
            font-size: 16px;
        }

        button.btn.btn-custom {
            border-radius: 12px;
            border-color: #FBB3C1;
            background-color: #FBB3C1;
            height: 48px;
            color: #1f2027;
            width: 100%;
            transition: all 300ms;
            margin-bottom: 20px
        }

        button.btn.btn-custom:hover {
            background-color: #f88399;
            border-color: #FBB3C1;
            color: #1f2027;
        }

        .form-wraper h2 {
            margin-top: 80px;
            font-size: 24px;
            margin: 3em 0;

        }

        .register .form-wraper h2 {
            font-size: 32px;
            margin-bottom: 1.5em;
        }

        .register .icon-wraper {
            background-color: #E3E4ED;
            border-radius: 50%;
            height: 75px;
            width: 75px;
            text-align: center;
            /* vertical-align: middle; */
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            overflow: hidden;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .register .icon-wraper i {
            font-size: 69px !important;
            font-weight: 100;
        }

        .register .flex-box {
            display: flex;
        }

        .register .grey-bg {
            overflow: visible;
            position: relative;
            height: 650px;
        }

        .register img.img-1 {
            max-width: 400px;
            margin-left: -50px;
            margin-top: 110px;
        }

        .register img.img-2 {
            position: absolute;
            top: 0p;
            right: -80px;
            margin-top: 40px;
        }

        .register img.img-3 {
            position: absolute;
            top: 150px;
            right: -80px;
        }

        .register .vue-country-select {
            border-bottom-left-radius: 12px;
            border-top-left-radius: 12px;
        }
    </style>
</head>

<body>
    <header class="main-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 flex">
                    <div class="nav-section">
                        <div class="links-wraper">
                            <a href="#" class="link">Group trips</a><a href="#" class="link">Private
                                trips</a><a href="#" class="link">Past trips & reviews</a>
                        </div>
                    </div>
                    <div class="nav-section text-center">
                        <h2 class="title"><a href="/login">Luxe Tribes</a></h2>
                    </div>
                    <div class="nav-section">
                        <div class="links-wraper text-right">
                            <a href="#" class="link">About us</a><a href="#" class="link">FAQs</a><a
                                href="#" class="link">Blog</a> <a href="#" class="link">Contact us</a>
                            <a href="#" class="bordered"><i class="fa fa-search"></i></a>
                            <a href="#" class="bordered"><i class="far fa-user"></i> &nbsp;Login</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <div class="body" id="app">
        {{ $slot }}
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>

</html>
