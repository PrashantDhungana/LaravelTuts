<!DOCTYPE html>
<html lang="en">

<head>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramro Form</title>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        .send-button {
            background: #54C7C3;
            width: 100%;
            font-weight: 600;
            color: #fff;
            padding: 8px 25px;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .g-button {
            color: #fff !important;
            border: 1px solid #EA4335;
            background: #ea4335 !important;
            width: 100%;
            font-weight: 600;
            color: #fff;
            padding: 8px 25px;
        }

        .my-input {
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            cursor: text;
            padding: 8px 10px;
            transition: border .1s linear;
        }

        .header-title {
            margin: 5rem 0;
        }

        h1 {
            font-size: 31px;
            line-height: 40px;
            font-weight: 600;
            color: #4c5357;
        }

        h2 {
            color: #5e8396;
            font-size: 21px;
            line-height: 32px;
            font-weight: 400;
        }

        .login-or {
            position: relative;
            color: #aaa;
            margin-top: 10px;
            margin-bottom: 10px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .span-or {
            display: block;
            position: absolute;
            left: 50%;
            top: -2px;
            margin-left: -25px;
            background-color: #fff;
            width: 50px;
            text-align: center;
        }

        .hr-or {
            height: 1px;
            margin-top: 0px !important;
            margin-bottom: 0px !important;
        }

        @media screen and (max-width:480px) {
            h1 {
                font-size: 26px;
            }

            h2 {
                font-size: 20px;
            }
        }
    </style>
</head>

<body>
    {{-- @dd($student) --}}
    <div class="container mt-5">
        <div class="row justify-content-center" >
            <div class="card">
                <div class="card-header bg-info text-white " style="font-size: 20px; font-weight:700">
                  Show for Student
                </div>
                <div class="card-body" style="border: 2px solid #737380; background-color: #109cab; color:white;">
                  <h5 class="card-title">Hello there, {{ $student->name }} </h5>
                  <p class="card-text">Name: {{ $student->name }}</p>
                  <p class="card-text">Address: {{ $student->address }}</p>
                  <p class="card-text">Phone Number: {{ $student->phone_no }}</p>
                  
                 
                </div>
              </div>
        </div>
     
    </div>
</body>

</html>
