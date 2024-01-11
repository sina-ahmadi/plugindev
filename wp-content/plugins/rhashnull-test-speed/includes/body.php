<?php

defined("ABSPATH") || exit;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="bg-primary p-4 m-4 rounded text-center text-dark">
        <h1>Welcome to Customization app</h1>
    </div>

    <form action="" method="POST">

        <?php if($notice): ?>
        <div class="notice notice-<?php echo $notice['type']; ?> text-start mt-3 mb-3">
            <p>
                <?php echo $notice['message']; ?>
            </p>
        </div>
        <?php endif; ?>

        <div class="row mb-3 text-start">
            <div class="col">
                <label for="custom-style" class="mb-3"><strong>:Custom Style</strong></label>
                <textarea class="large-text code" name="custom-style" id="custom-style" cols="160" rows="10" placeholder="Enter your style code"><?php echo $customStyle; ?></textarea>
            </div>
        </div>

        <div class="row text-start">
            <div class="col">
                <label for="custom-script" class="mb-3"><strong>:Custom Script</strong></label>
                <textarea class="large-text code" name="custom-script" id="custom-script" cols="160" rows="10" placeholder="Enter your script code"><?php echo $customScript ?></textarea>
            </div>
        </div>
        <div class="text-start m-1 pt-2">
            <button type="submit" class="btn text-left btn-success">Save</button>
        </div>
    </form>

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>