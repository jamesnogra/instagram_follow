<html>

    <head>
        <title>Cebu Instagram Follow</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/all.css">
    </head>

    <body>

        <?php if (!isset($_GET['access_token'])) { ?>
            <div class="middle-vertical-center">
                <a class="btn btn-default btn-lg" href="https://api.instagram.com/oauth/authorize/?client_id=01234a10ef604b0db841b1deb0d1b6d0&redirect_uri=http://instagram_follow.iamcebu.com&response_type=token"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Login Instagram</a>
            </div>
        <?php } else { ?>
            <h1>Access Token: <?php echo $_GET['access_token']; ?></h1>
        <?php } ?>

    </body>

</html>