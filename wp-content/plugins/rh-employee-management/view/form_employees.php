<?php
defined("ABSPATH") || exit;
global $title;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="bg-primary p-4 mt-2 mb-5 rounded text-center text-dark">
        <h1>Welcome to <?php echo $title; ?> app</h1>
    </div>

    <form action="" method="POST">

        <!--First name-->
        <div class="row mb-3 text-start">
            <div class="col">
                <label for="first_name" class="mb-3"><strong>First name</strong></label>
                <input type="text" name="first_name" id="first_name" value="">
            </div>
        </div>

        <!--Last name-->
        <div class="row mb-3  text-start">
            <div class="col">
                <label for="last_name" class="mb-3"><strong>Last name</strong></label>
                <input type="text" name="last_name" id="last_name" value="">
            </div>
        </div>

        <!--Number of mission-->
        <div class="row mb-3  text-start">
            <div class="col">
                <label for="mission" class="mb-3"><strong>Number of mission</strong></label>
                <input type="number" name="mission" id="mission" value="">
            </div>
        </div>

        <!--Weight-->
        <div class="row mb-3  text-start">
            <div class="col">
                <label for="weight" class="mb-3"><strong>Weight</strong></label>
                <input type="number" step="any" name="weight" id="weight" value="">
            </div>
        </div>

        <!--Birthdate-->
        <div class="row mb-3  text-start">
            <div class="col">
                <label for="birthdate" class="mb-3"><strong>Birthdate</strong></label>
                <input type="date" name="birthdate" id="birthdate" value="">
            </div>
        </div>

        <!--avatar-->
        <div class="row mb-5  text-start">
            <div class="col">
                <input type="url"  name="avatar" id="avatar" value="">
                <button type="button" class="btn btn-sm btn-dark" id="employee_avatar_select">Select</button>
            </div>
        </div>



        <div class="text-start ">
            <button type="submit" name="save_employee" class="btn text-left btn-success">Save</button>
        </div>

    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>
</html>

