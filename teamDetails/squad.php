<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Even Cricket</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/ec1-removebg-preview.png" />

    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="../assets/css/bootstrap-5.0.0-beta1.min.css" />
    <link rel="stylesheet" href="../assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="../assets/css/animate.css" />
    <link rel="stylesheet" href="../assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="../assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>
    <!-- ========================= Preloader Navbar start ========================= -->
    <div id="navbar"></div>
    <!-- ========================= Preloader Navbar End ========================= -->

    <!-- ========================= Spacer ========================= -->
    <div style="height:150px;"></div>
    <!-- ========================= Spacer ========================= -->

    <?php
    $team_id = $_GET['team_id'];
    $url = "http://localhost/evencricket/apitest/index.php?team_id=$team_id";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $result = json_decode($result, true);
    if ($result['result']) { ?>
        <div class="container">
            <h2><?php echo $result['country']; ?> Players</h2>
            <hr>
            <div class="row">
                <?php foreach ($result['data'] as $data) { ?>
                    <br><br><br><br><br><br><br><br><br>
                    <div class="col-md-6">
                        <a href="./playerDetails.php?player_id=<?php echo $data[
                            'player_id'
                        ]; ?>">
                            <div style="display:inline-block;">
                                <img src="<?php echo $data['images'] != ''
                                    ? $data['images']
                                    : 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png'; ?>" class="img img" style="height: 100px; width: 100px;border-radius: 50%;">
                            </div>
                            <div style="display:inline-block;">
                                <h3><?php echo $data['player_name']; ?></h3>
                                <p><?php echo $data['player_name']; ?></p>
                                <p>Age: <?php echo $data['player_age']; ?></p>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } else { ?>
        <h1 class="text-center">404</h1>
    <?php }
    ?>

    <!-- Footer -->
    <div id="footer"></div>
    <!-- Footer -->

    <!-- ========================= JS here ========================= -->
    <script src="../assets/js/bootstrap.bundle-5.0.0-beta1.min.js"></script>
    <script src="../assets/js/contact-form.js"></script>
    <script src="../assets/js/count-up.min.js"></script>
    <script src="../assets/js/tiny-slider.js"></script>
    <script src="../assets/js/isotope.min.js"></script>
    <script src="../assets/js/glightbox.min.js"></script>
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/imagesloaded.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#navbar").load("../navbar.html");
            $("#footer").load("../footer.html");
        });
    </script>
</body>

</html>