<html>

    <head>
        <title>Cebu Instagram Follow</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/all.css">
        <script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
        <script src="scripts/home.js"></script>
    </head>

    <body>

        <?php if (!isset($_GET['access_token'])) { ?>
            <div class="middle-vertical-center">
                <a class="btn btn-default btn-lg" href="https://api.instagram.com/oauth/authorize/?client_id=01234a10ef604b0db841b1deb0d1b6d0&redirect_uri=http://instagram_follow.iamcebu.com/process_access_token.php&response_type=token"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Login Instagram</a>
            </div>
        <?php } else { ?>

            <div id="top-banner">
                <div id="top-banner-profile-image"></div>
                <h3 id="top-banner-name"></h3>
            </div>

        <?php } ?>

    </body>

</html>