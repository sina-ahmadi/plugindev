<?php
defined("ABSPATH") || exit;
global $custom_style_notice;
$col_color      = isset($rh_custom_login_login_option['column_color']) ? $rh_custom_login_login_option['column_color'] : '';
$background     = isset($rh_custom_login_login_option['background']) ? $rh_custom_login_login_option['background'] : '';
$css            = isset($rh_custom_login_login_option['css_code']) ? $rh_custom_login_login_option['css_code'] : '';
$logo           = isset($rh_custom_login_login_option['$logo']) ? $rh_custom_login_login_option['$logo'] : '';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADD</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

    <style>
        .CodeMirror {
            height: 200px;
            width: auto;
            border: 1px solid #0d6efd;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="bg-primary p-5 mt-5 mb-5 rounded text-center text-dark">
        <?php global $title ?>
        <h1><?php echo $title;?></h1>
    </div>

    <form action="" method="POST">

        <hr>

        <!--background_color-->
        <div class="row">
            <div class="col mt-2 mb-2">
                <label for="col-color" ><strong></strong></label>
                <br>
                <input type="text" name="column_color" id="col-color" value="<?php echo esc_attr($col_color)?>">
            </div>
        </div>

        <hr>

        <!--backgroun_image-->
        <div class="row mb-3">
            <div class="col mt-2 mb-2">
                <label for="background" ><strong></strong></label>
                <input type="url" name="background" id="background" value="<?php echo esc_url($background)?>">
                <button type="button" class="btn btn-sm text-left btn-success" id="background-selector">select background</button>
            </div>
        </div>

        <hr>

        <!--textarea-->
        <div class="row mb-3">
            <div class="col mt-2 mb-2">
                <label for="css_code" ><strong></strong></label>
                <textarea class="CodeMirror" name="css_code" id="css_code" cols="30" rows="10"><?php echo esc_textarea( $css )?></textarea>
            </div>
        </div>

        <hr>

        <!--logo-->
        <div class="row mb-3">
            <div class="col mt-2 mb-2">
                <label for="logo" ><strong></strong></label>
                <input type="url" name="logo" id="logo" value="<?php echo esc_url($logo)?>">
                <a href="media-upload.php?type=image&TB_iframe=true&width=800&height=600" class="btn btn-sm text-left btn-success thickbox" id="logo-selector">select logo</a>
            </div>
        </div>


        <hr>

        <div class="text-start pt-2">
            <button type="submit" class="btn text-left btn-success">Save</button>
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

