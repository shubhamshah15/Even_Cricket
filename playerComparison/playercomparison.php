<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Even Cricket</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/ec1-removebg-preview.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Place favicon.ico in the root directory -->

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="../assets/css/bootstrap-5.0.0-beta1.min.css" />
    <link rel="stylesheet" href="../assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="../assets/css/animate.css" />
    <link rel="stylesheet" href="../assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="../assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/news.css">
    <link rel="stylesheet" href="../assets/css/faq.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>

<body>
    <!-- Preloader Naavbar -->
    <div id="navbar"></div>

    <!-- ========================= Spacer ========================= -->
    <div style="height:150px;"></div>
    <!-- ========================= Spacer ========================= -->

    <!-- ========================= Main start ========================= -->
    <section>
        <div class="container">
            <?php
            if (isset($_GET['playerone'])) {
                $player_id1 = $_GET['playerone'];
                $url1 = "http://localhost/evencricket/apitest/index.php?player_id=$player_id1";
                $ch1 = curl_init();
                curl_setopt($ch1, CURLOPT_URL, $url1);
                curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
                $result1 = curl_exec($ch1);
                curl_close($ch1);
                $result1 = json_decode($result1, true);
                $result1 = $result1['data'];
                $result1 = $result1[0];
            }

            if (isset($_GET['playertwo'])) {
                $player_id2 = $_GET['playertwo'];
                $url2 = "http://localhost/evencricket/apitest/index.php?player_id=$player_id2";
                $ch2 = curl_init();
                curl_setopt($ch2, CURLOPT_URL, $url2);
                curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
                $result2 = curl_exec($ch2);
                curl_close($ch2);
                $result2 = json_decode($result2, true);
                $result2 = $result2['data'];
                $result2 = $result2[0];
            }
            ?>
            <table class="table text-center">
                <tr>
                    <td title="Player One"><?php echo isset($result1['images'])
                        ? '<img src="' .
                            $result1['images'] .
                            '" style = "height:200px;width:auto;border-radius:50%;margin:auto;">'
                        : '<img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png" style="height:200px;width:auto;border-radius:50%;margin:auto;">'; ?></td>
                    <!-- <td> -->
                    <td title="Country 1">
                        <?php
/*echo isset($result1['flag'])
                            ? '<img src="' .
                                $result1['flag'] .
                                '"style="height:9rem;width:14rem;display:block;margin:auto;">'
                            : '-';*/
?>
                    </td>
                    <td style="color: black; font-weight:bold; font-size:8vh; padding-top:40px"><span>VS</span></td>
                    <td title="Country 2">
                        <?php
/*echo isset($result2['flag'])
                            ? '<img src="' .
                                $result2['flag'] .
                                '"style="height:9rem;width:14rem;display:block;margin:auto;">'
                            : '-';*/
?>
                    </td>
                    <!-- </td> -->
                    <td title="Player Two"><?php echo isset($result2['images'])
                        ? '<img src="' .
                            $result2['images'] .
                            '" style = "height:200px;width:auto;border-radius:50%;margin:auto;">'
                        : '<img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png" style="height:200px;width:auto;border-radius:50%;margin:auto;">'; ?></td>
                </tr>
                <tr>
                    <!-- <td></td> -->
                    <td title="Country 1">
                        <?php echo isset($result1['flag'])
                            ? '<img src="' .
                                $result1['flag'] .
                                '"style="height:4rem;width:5rem;display:block;margin:auto;">'
                            : '-'; ?>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td title="Country 2">
                        <?php echo isset($result2['flag'])
                            ? '<img src="' .
                                $result2['flag'] .
                                '"style="height:4rem;width:5rem;display:block;margin:auto;">'
                            : '-'; ?>
                    </td>
                </tr>
                <tr>
                    <!-- Accent-colored raised button with ripple -->
                    <style>
                        .mdl-button--accent.mdl-button--accent.mdl-button--raised,
                        .mdl-button--accent.mdl-button--accent.mdl-button--fab {
                            color: rgb(255, 255, 255);
                            background-color: #3399ff;
                        }
                    </style>
                    <a style="color: white; background-color:grey" href="http://localhost/evencricket/playerComparison/playercomparison.php">
                        <button class="btn" style="background-color:grey;width: 100px; height:40px;color:white">
                            Reset
                        </button>
                    </a>
                    <!-- <button type="button" class="btn btn-secondary"><a style="color: white;" href="http://localhost/evencricket/player%20comparison/playercomparison.php"> Reset </a></button> -->
                    <td>
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@playerone" title="Player One">Search</button>
                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@playerone" title="Player One"><i class="fa fa-search">&nbsp;&nbsp;Search</i></button> -->
                    </td>
                    <td colspan="3"></td>
                    <td>
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@playertwo" title="Player Two">Search</button>
                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@playertwo" title="Player Two"><i class="fa fa-search">&nbsp;&nbsp;Search</i></button> -->
                    </td>
                </tr>
                <tr>
                    <td><?php echo isset($result1['player_name'])
                        ? $result1['player_name']
                        : '-'; ?></td>
                    <td colspan="3"> <b>Name</b> </td>
                    <td><?php echo isset($result2['player_name'])
                        ? $result2['player_name']
                        : '-'; ?></td>
                </tr>
                <tr>
                    <td><?php echo isset($result1['country_name'])
                        ? $result1['country_name']
                        : '-'; ?></td>
                    <td colspan="3"><b>Country</b></td>
                    <td><?php echo isset($result2['country_name'])
                        ? $result2['country_name']
                        : '-'; ?></td>
                </tr>
                <tr>
                    <td><?php echo isset($result1['player_age'])
                        ? $result1['player_age']
                        : '-'; ?></td>
                    <td colspan="3"><b>Age</b></td>
                    <td><?php echo isset($result2['player_age'])
                        ? $result2['player_age']
                        : '-'; ?></td>
                </tr>
                <tr>
                    <td><?php echo isset($result1['player_type'])
                        ? $result1['player_type']
                        : '-'; ?></td>
                    <td colspan="3"><b>Type</b></td>
                    <td><?php echo isset($result2['player_type'])
                        ? $result2['player_type']
                        : '-'; ?></td>
                </tr>
                <tr>
                    <td><?php echo isset($result1['debut_year']) &&
                    $result1['debut_year'] != null
                        ? $result1['debut_year']
                        : '-'; ?></td>
                    <td colspan="3"><b>Debut</b></td>
                    <td><?php echo isset($result2['debut_year']) &&
                    $result2['debut_year'] != null
                        ? $result2['debut_year']
                        : '-'; ?></td>
                </tr>
                <tr>
                    <td><?php echo isset($result1['matches_played'])
                        ? $result1['matches_played']
                        : '-'; ?></td>
                    <td colspan="3"><b>Matches</b></td>
                    <td><?php echo isset($result2['matches_played'])
                        ? $result2['matches_played']
                        : '-'; ?></td>
                </tr>
                <tr>
                    <td><?php echo isset($result1['total_runs'])
                        ? $result1['total_runs']
                        : '-'; ?></td>
                    <td colspan="3"><b>Runs</b></td>
                    <td><?php echo isset($result2['total_runs'])
                        ? $result2['total_runs']
                        : '-'; ?></td>
                </tr>
                <tr>
                    <td><?php echo isset($result1['50'])
                        ? $result1['50']
                        : '-'; ?></td>
                    <td colspan="3"><b>50s</b></td>
                    <td><?php echo isset($result2['50'])
                        ? $result2['50']
                        : '-'; ?></td>
                </tr>
                <tr>
                    <td><?php echo isset($result1['100'])
                        ? $result1['100']
                        : '-'; ?></td>
                    <td colspan="3"><b>100s</b></td>
                    <td><?php echo isset($result2['100'])
                        ? $result2['100']
                        : '-'; ?></td>
                </tr>
                <tr>
                    <td><?php echo isset($result1['highest_score'])
                        ? $result1['highest_score']
                        : '-'; ?></td>
                    <td colspan="3"><b>Highest Score</b></td>
                    <td><?php echo isset($result2['highest_score'])
                        ? $result2['highest_score']
                        : '-'; ?></td>
                </tr>
                <tr>
                    <td><?php echo isset($result1['average'])
                        ? $result1['average']
                        : '-'; ?></td>
                    <td colspan="3"><b>Average</b></td>
                    <td><?php echo isset($result2['average'])
                        ? $result2['average']
                        : '-'; ?></td>
                </tr>
                <tr>
                    <td><?php echo isset($result1['strike_rate'])
                        ? $result1['strike_rate']
                        : '-'; ?></td>
                    <td colspan="3"><b>Strike Rate</b></td>
                    <td><?php echo isset($result2['strike_rate'])
                        ? $result2['strike_rate']
                        : '-'; ?></td>
                </tr>
                <tr>
                    <td><?php echo isset($result1['wickets'])
                        ? $result1['wickets']
                        : '-'; ?></td>
                    <td colspan="3"><b>Wickets</b></td>
                    <td><?php echo isset($result2['wickets'])
                        ? $result2['wickets']
                        : '-'; ?></td>
                </tr>
                <tr>
                    <td><?php echo isset($result1['best_figures'])
                        ? $result1['best_figures']
                        : '-'; ?></td>
                    <td colspan="3"><b>Best Figures</b></td>
                    <td><?php echo isset($result2['best_figures'])
                        ? $result2['best_figures']
                        : '-'; ?></td>
                </tr>
                <tr>
                    <td><?php echo isset($result1['economy'])
                        ? $result1['economy']
                        : '-'; ?></td>
                    <td colspan="3"><b>Economy</b></td>
                    <td><?php echo isset($result2['economy'])
                        ? $result2['economy']
                        : '-'; ?></td>
                </tr>
            </table>
        </div>
    </section>
    <!-- Modal Team One -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search Player</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formone">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label"><b>Player Name:</b></label>
                            <input type="text" class="form-control" name="query" id="recipient-name">
                            <input type="hidden" name="link" value="<?php echo 'http://' .
                                $_SERVER['HTTP_HOST'] .
                                $_SERVER['REQUEST_URI']; ?>">
                            <input type="hidden" name="player" value='1'>
                        </div>
                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Search</button>
                    </form>
                </div>
                <div id="list-of-players1"></div>
            </div>
        </div>
    </div>

    <!-- Modal Team Two -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search Player</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formtwo">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Player Name:</label>
                            <input type="text" class="form-control" name="query" id="recipient-name">
                            <input type="hidden" name="link" value="<?php echo 'http://' .
                                $_SERVER['HTTP_HOST'] .
                                $_SERVER['REQUEST_URI']; ?>">
                            <input type="hidden" name="player" value='2'>
                        </div>
                        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Search</button>
                    </form>
                </div>
                <div id="list-of-players2"></div>
            </div>
        </div>
    </div>
    <!-- ========================= Main end ========================= -->
    <!-- Footer -->
    <div id="footer"></div>
    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-arrow-up"></i>
    </a>

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
        $(document).ready(function() {
            $("#navbar").load("../navbar.html");
            $("#footer").load("../footer.html");
        });
    </script>
    <script>
        $(document).ready(function(e) {
            $("#formone").on('submit', (function(e) {
                e.preventDefault();
                $.ajax({
                    url: "search.php",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $("#list-of-players1").html(data);
                    }
                });
            }));
            $("#formtwo").on('submit', (function(e) {
                e.preventDefault();
                $.ajax({
                    url: "search.php",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $("#list-of-players2").html(data);
                    }
                });
            }));
        });
    </script>
</body>

</html>