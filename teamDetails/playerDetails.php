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
    $player_id = $_GET['player_id'];
    $url = "http://localhost/evencricket/apitest/index.php?player_id=$player_id";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $result = json_decode($result, true);
    if ($result['result']) {
        $data = $result['data'];
        foreach ($result['data'] as $data) { ?>
            <!-- ========================= Player ========================= -->
            <div class="container">
                <h1 class="text-center"><?php echo $data['player_name']; ?></h1>
                <br><br><br>
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo $data['images'] != ''
                            ? $data['images']
                            : 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png'; ?>" alt="" style="width:350px; height:300px;">
                        <br><br>
                        <div class="general-detail">
                            <h3>General Stat</h3>
                            <table class="table table-borderless">
                                <tr>
                                    <th scope="row">Nation</th>
                                    <td><?php echo $data[
                                        'country_name'
                                    ]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Matches</th>
                                    <td><?php echo $data[
                                        'matches_played'
                                    ]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Player Type</th>
                                    <td><?php echo $data['player_type']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Debut</th>
                                    <td><?php echo $data['debut_year'] != null
                                        ? $data['debut_year']
                                        : '-'; ?></td>
                                </tr>

                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="batting-detail">
                            <br>
                            <h3>Batting Stat</h3>
                            <table class="table table-borderless">
                                <tr>
                                    <th scope="row">Runs</th>
                                    <td><?php echo $data['total_runs']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Half Century</th>
                                    <td><?php echo $data['50']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Century</th>
                                    <td><?php echo $data['100']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Highest Score</th>
                                    <td><?php echo $data[
                                        'highest_score'
                                    ]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Batting Average</th>
                                    <td><?php echo $data['average']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Strike Rate</th>
                                    <td><?php echo $data['strike_rate']; ?></td>
                                </tr>
                            </table>
                        </div>
                        <br><br>
                        <div class="bowling-stat">
                            <h3>Bowling Stat</h3>
                            <table class="table table-borderless">
                                <tr>
                                    <th scope="row">Wickets</th>
                                    <td><?php echo $data['wickets']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Best Figures</th>
                                    <td><?php echo $data[
                                        'best_figures'
                                    ]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Economy</th>
                                    <td><?php echo $data['economy']; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========================= Player ========================= -->

        <?php }
    } else {
         ?>
        <h1 class="text-center">404</h1>
    <?php
    }
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