<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        p {
            font-size: 40px;
            text-decoration-line: underline;
        }

        input[type=text] {
            width: 100%;
            padding: 12px 15px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 2px solid rgb(143, 19, 19);
            border-radius: 2px;
        }

        input[type=text]:focus {
            background-color: lightblue;
        }
    </style>

    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>

<body>
    <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf
        <p style="text-align:center"><strong>Application Form</strong></p>
        &nbsp; &nbsp;`
        <div class="container">
            <div class="row">
                <label for="name"> Name </label>
                <input type="text" name="name" class="form form-control" placeholder="Enter your name">
            </div>

            <div class="row">
                <label for="email"> Email </label>
                <input type="email" name="email" class="form form-control" placeholder="Enter your Email">
            </div>
            <div class="row">
                <label for="contact">contact</label>
                <input type="tel" name="contact" class="form form-control"
                    placeholder="Enter your contact number">
            </div>
            &nbsp;

            <div class="row">
                <label for="gender">Gender</label>
                &nbsp;&nbsp;
                <input type="radio" name="gender" value="male"> Male <input type="radio" name="gender"
                    value="female"> Female
            </div>

            <div class="row">
                <label for="address"> Address</label>
                <input type="text" name="address" class="form form-control" placeholder="Enter your Address">
            </div>

            &nbsp;
            <div class="row">

                <button type="submit" class="btn btn-success">Submit</button>
                &nbsp; &nbsp;
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>


        </div>

    </form>
</body>
<script src=" {{ asset('assets/js/bootstrap.min.js') }}"></script>

</html>
