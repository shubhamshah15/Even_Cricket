<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Even Cricket</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/ec1-removebg-preview.png" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Place favicon.ico in the root directory -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VKQ6R0CHBH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VKQ6R0CHBH');
</script>
    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="assets/css/bootstrap-5.0.0-beta1.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/news.css">
    <link rel="stylesheet" href="assets/css/faq.css">
    <link rel="stylesheet" href="assets/css/venues.css">
    <link rel="stylesheet" href="assets/css/points.css">

</head>

<body>
    <!-- ========================= Preloader Navbar start ========================= -->
    <style>
        #home-navbar {
            border-bottom: 2px solid blue;
        }
    </style>
    <div id="navbar"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#navbar").load("navbar.html");
        });
    </script>
    <!-- ========================= Preloader Navbar start ========================= -->



    <!-- ========================= Spacer ========================= -->
    <div style="height:150px;"></div>
    <!-- ========================= Spacer ========================= -->

    <!-- ========================= Main start ========================= -->
    <style>
        .carousel-inner {
            padding: 0;
            transition: transform 2s ease;
            overflow: hidden;
        }

        .news-text {
            z-index: 5;
        }

        .carousel-inner:hover img {
            transform: scale(1.01);
        }

        .carousel-inner:hover h5 {
            text-decoration: underline;
        }

        .news-text {
            background-color: #3763eb;
            display: flex;
            align-items: center;
        }

        .news-text p,
        .news-text h5 {
            color: white;
            padding: 5px;
        }
        @media only screen and (min-width: 992px) {
            .live-score {
                display: none;
            }
        }
        
    </style>

    <div class="container" style="text-align:right;margin-bottom:20px;">
        <a class="btn btn-primary live-score" href="#score">
            Live score
        </a>
    </div>


    <section>
        <div class="row">
            <!-- ===================== Left Side Start ========================== -->
            <div class="col-xl-9 col-lg-8" style="border-right:1px solid grey;padding:0px;">
			
                <!-- ===================== News Start ========================== -->
                
                <section id="news">
                    <!-- <div class="section-title text-center mb-55">
                        <span class="wow fadeInDown" data-wow-delay=".2s" style="font-size: 40px;">News</span>
                    </div> -->
                    <div class="container">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" style="height:400px;">
                                    <a target="__blank" href="https://sports.ndtv.com/icc-t20-world-cup-2021/watch-matthew-wade-marcus-stoinis-drink-from-a-shoe-after-t20-world-cup-triumph-2611342">
                                        <div class="row">
                                            <div class="col-lg-8 news-image">
                                                <img class="d-block w-100" style="height:25em;" src="https://hashdotsports.com/wp-content/uploads/2021/11/20211115_150905.jpg" alt="First slide">
                                            </div>
                                            <div class="col-lg-4 news-text">
                                                <div>
                                                    <h5>Matthew Wade, Marcus Stoinis' 'Shoey' Celebration Will Make Your Stomach Turn</h5>
                                                    <p>Australia's Formula One star Daniel Ricciardo introduced the F1 world to the 'shoey' celebration -- drinking the celebratory champagne from his shoe - 2016 at the German Grand Prix. It has now become a sort of tradition for the current McLaren driver and even the great Lewis Hamilton has given it shot.</p>
                                                    <p style="color: black;">14 Nov 2021</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item" style="height:400px;">
                                    <a href="https://www.timesnownews.com/sports/cricket/article/when-will-india-pakistan-bilateral-cricket-ties-resume-bcci-president-sourav-ganguly-responds-to-million-dollar-question/832100" target="__blank">
                                        <div class="row">
                                            <div class="col-lg-8 news-image">
                                                <img class="d-block w-100" style="height:25em;" src="https://resize.indiatvnews.com/en/resize/newbucket/1200_-/2019/10/ganguly-akhtar-1571151427.jpg" alt="First slide">
                                            </div>
                                            <div class="col-lg-4 news-text">
                                                <div>
                                                    <h5> When will India-Pakistan bilateral cricket ties resume? BCCI president Sourav Ganguly responds to million-dollar question</h5>
                                                    <p style="font-size: 15px;">After a long break of 28 months, India and Pakistan resumed their on-field rivalry when they squared off in the group stage fixture of the T20 World Cup 2021. The two teams locked horns in the 16th match of the ICC event in Dubai. The fixture was played in front of a packed crowd and shattered the viewership records. </p>
                                                    <p style="color: black;">14 Nov 2021</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item" style="height:400px;">
                                    <a href="https://sports.ndtv.com/icc-t20-world-cup-2021/t20-world-cup-2021-shoaib-akhtar-feels-babar-azam-deserved-to-become-man-of-the-tournament-2611237" target="__blank">
                                        <div class="row">
                                            <div class="col-lg-8 news-image">
                                                <img class="d-block w-100" style="height:25em;" src="https://c.ndtvimg.com/2021-11/l6tfavmk_babar-azam_625x300_15_November_21.jpg?output-quality=80&downsize=1278:*" alt="First slide">
                                            </div>
                                            <div class="col-lg-4 news-text">
                                                <div>
                                                    <h5>"Unfair Decision": Shoaib Akhtar Feels Babar Azam Deserved To Become "Man Of The Tournament" In T20 World Cup 2021</h5>
                                                    <p>Former Pakistan pacer Shoaib Akhtar made his feelings pretty clear about Babar Azam getting snubbed for the Player Of The Tournament award despite ending as the highest run-getter in the recently concluded T20 World Cup 2021. </p>
                                                    <p style="color: black;">14 Nov 2021</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="z-index: 100;">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="z-index: 100;">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <br><br><br>
                </section>
                <!-- ===================== News End ========================== -->


                <!-- Points table start -->

                <div class="section-title text-center mb-55">
                    <span class="wow fadeInDown" data-wow-delay=".2s" style="font-size: 40px;margin-top: 80px;">Points
                        Table</span>
                </div>

                

                <?php for ($i = 1; $i < 3; $i++) { ?>
                <section class="wrapper" style="margin-top: 50px;background: rgba(0, 0, 0, 0.9);font-family: 'Open Sans', sans-serif;">
                    <!-- Row title -->
                    <h1 class = "text-center" style="color:white">Group <?php echo $i; ?></h1>
                    <main class="point-row title">
                        <ul style="text-align:center;">
                            <li><b>Team</b></li>
                            <li><b>Matches</b></li>
                            <li><b>Won</b></li>
                            <li><b>Lost</b></li>
                            <li><b>NRR</b></li>
                            <li><b>Points</b></li>
                        </ul>
                    </main>
                    <!-- Row 1 - fadeIn -->

                    <!-- Row 3 -->


                    <?php
                    $team = '';
                    $keyword = '';
                    $matches = '';
                    $won = '';
                    $lost = '';
                    $nrr = '';
                    $points = '';
                    $content = '';
                    $flag = '';

                    $conn = mysqli_connect(
                        'localhost',
                        'root',
                        '',
                        'evencricket'
                    );
                    if ($conn == false) {
                        die('Error: Cannot connect');
                    }

                    $sql =
                        'SELECT * FROM `points_table` WHERE group_no = ' .
                        $i .
                        ' ORDER BY points DESC, nrr  DESC';
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        $count = ($i - 1) * 6 + 1;
                        for ($j = 1; ($row = $result->fetch_assoc()); $j++) {

                            $team = $row['team'];
                            $keyword = $row['keyword'];
                            $matches = $row['matches'];
                            $won = $row['won'];
                            $lost = $row['lost'];
                            $nrr = $row['nrr'];
                            $points = $row['points'];
                            $content = $row['content'];

                            $sql2 = "SELECT * FROM `teams` WHERE country_name = '$team'";
                            $result2 = $conn->query($sql2);
                            if ($result2) {
                                // output data of each row
                                while ($row2 = $result2->fetch_assoc()) {
                                    $flag = $row2['flag'];
                                }
                            }
                            ?>
                            <article class="point-row"  <?php if ($j < 3) {
                                echo "style='background: #1E90FF;'";
                            } ?> id='<?php echo $count; ?>'>
                                <ul style="text-align:center;">
                                    <li style="text-align:left;font-size:15px"><span style="color:white;"><img style="height:20px;width:30px;display:inline;margin-right:10px;margin-left:2px;" src="<?php echo $flag; ?>" alt="">
                                            <em><?php echo $team; ?></em>
                                        </span></li>
                                    <li>
                                        <?php echo $matches; ?>
                                    </li>
                                    <li>
                                        <?php echo $won; ?>
                                    </li>
                                    <li>
                                        <?php echo $lost; ?>
                                    </li>
                                    <li>
                                        <?php echo $nrr; ?>
                                    </li>
                                    <li>
                                        <?php echo $points; ?>
                                    </li>
                                </ul>
                                <ul class="more-content" id='team<?php echo $count; ?>' style='display: none;'>
                                    <li>
                                        <?php echo $content; ?>
                                    </li>
                                </ul>
                            </article>
                    <?php $count++;
                        }
                    }
                    ?>

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('.point-row').on({
                                mouseenter: function() {
                                    var id = $(this).attr("id");
                                    $("#team" + id).show();
                                },
                                mouseleave: function() {
                                    console.log("your mouse leaves from here");
                                    var id = $(this).attr("id");
                                    $("#team" + id).hide();
                                },
                            });
                        });
                    </script>

                </section>
                <?php } ?>

                <!-- Points table end -->


                <!-- venues start -->


                <style>
                    .sharjah .pricing-price {
                        background-color: #a637ec;
                        -webkit-box-shadow: 0px 0px 0px 10px rgba(166, 55, 236, 0.31);
                        -moz-box-shadow: 0px 0px 0px 10px rgba(166, 55, 236, 0.31);
                        box-shadow: 0px 0px 0px 10px rgba(166, 55, 236, 0.31);
                    }

                    .strike {
                        text-decoration: line-through;
                        color: #99a9b5;
                    }

                    .sharjah .pricing_row_title {
                        color: #a637ec;
                    }

                    .oman .pricing_row_title {
                        color: #ee417c;
                    }

                    .oman .pricing-price {
                        background-color: #ee417c;
                        -webkit-box-shadow: 0px 0px 0px 10px rgba(238, 65, 124, 0.31);
                        -moz-box-shadow: 0px 0px 0px 10px rgba(238, 65, 124, 0.31);
                        box-shadow: 0px 0px 0px 10px rgba(238, 65, 124, 0.31);
                    }

                    .sheikh .pricing_row_title {
                        color: #ff994e;
                    }

                    .sheikh .pricing-price {
                        background-color: #ff994e;
                        -webkit-box-shadow: 0px 0px 0px 10px rgba(255, 153, 78, 0.31);
                        -moz-box-shadow: 0px 0px 0px 10px rgba(255, 153, 78, 0.31);
                        box-shadow: 0px 0px 0px 10px rgba(255, 153, 78, 0.31);
                    }

                    .sharjah .pricing-row:before {
                        color: #a637ec;
                    }

                    .oman .pricing-row:before {
                        color: #ee417c;
                    }

                    .sheikh .pricing-row:before {
                        color: #ff994e;
                    }




                    .dubai:hover .pricing-price-wrapper {
                        box-shadow: 0px 35px 80px rgba(4, 255, 236, 0.25), 0px 0px 0px rgba(10, 197, 173, 0.33);
                        -webkit-transition: all 0.3s ease-in-out 0s;
                        -moz-transition: all 0.3s ease-in-out 0s;
                        -ms-transition: all 0.3s ease-in-out 0s;
                        -o-transition: all 0.3s ease-in-out 0s;
                        transition: all 0.3s ease-in-out 0s;
                    }

                    .pricing-column:hover {
                        overflow: hidden;
                    }

                    .sharjah:hover .pricing-price-wrapper {
                        box-shadow: 0px 35px 80px rgba(230, 2, 241, 0.34), 0px 0px 0px rgba(21, 21, 20, 0.79);
                        -webkit-transition: all 0.3s ease-in-out 0s;
                        -moz-transition: all 0.3s ease-in-out 0s;
                        -ms-transition: all 0.3s ease-in-out 0s;
                        -o-transition: all 0.3s ease-in-out 0s;
                        transition: all 0.3s ease-in-out 0s;
                    }

                    .oman:hover .pricing-price-wrapper {
                        box-shadow: 0px 35px 80px rgba(255, 4, 166, 0.25), 0px 0px 0px rgba(222, 6, 84, 0.33);
                        -webkit-transition: all 0.3s ease-in-out 0s;
                        -moz-transition: all 0.3s ease-in-out 0s;
                        -ms-transition: all 0.3s ease-in-out 0s;
                        -o-transition: all 0.3s ease-in-out 0s;
                        transition: all 0.3s ease-in-out 0s;
                    }

                    .sheikh:hover .pricing-price-wrapper {
                        box-shadow: 0px 35px 80px rgba(241, 139, 2, 0.34), 0px 0px 0px rgba(21, 21, 20, 0.79);
                        -webkit-transition: all 0.3s ease-in-out 0s;
                        -moz-transition: all 0.3s ease-in-out 0s;
                        -ms-transition: all 0.3s ease-in-out 0s;
                        -o-transition: all 0.3s ease-in-out 0s;
                        transition: all 0.3s ease-in-out 0s;
                    }
                </style>


                <div style="overflow: hidden;">
                    <div id="mainCoantiner">
                        <!--dust particel-->
                        <div class="margin-body">

                            <div style="height: 100px;">

                                <div class="starsec"></div>
                                <div class="starthird"></div>
                                <div class="starfourth"></div>
                                <div class="starfifth"></div>

                            </div>
                            <!--Dust particle end--->

                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <div class="title-h1 text-center"><span><span class="light">t20 worldcup
                                                        2021 </span> venues</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="pricing-column-wrapper dubai" style="width: 320px;margin: auto;">
                                        <div class="pricing-column">
                                            <div class="pricing-price-row">
                                                <div class="pricing-price-wrapper">
                                                    <div class="pricing-price">
                                                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://resources.pulse.icc-cricket.com/photo-resources/2021/07/26/74f5adc9-bb13-4ab5-954d-751cafd0753a/Dubai-International-Stadium.jpeg?width=576&height=576" alt="blog" style="  border-radius: 50%;height: 220px;width: 220px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pricing-row-title">
                                                <div class="pricing_row_title">Dubai International Stadium</div>
                                            </div>
                                            <figure>
                                                The Dubai Cricket Stadium is the crown jewel of Dubai Sports City, with a capacity of 25,000 seats. It is considered one of the largest and most spectacular cricket stadiums in the city.
                                            </figure>

                                            <div class="pricing-footer">
                                                <div class="gem-button-container gem-button-position-center"><a href="https://www.t20worldcup.com/venues/37/dubai-international-stadium/city" target="_blank" class="gem-button gem-green">Read Article</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="pricing-column-wrapper sharjah" style="width: 320px;margin: auto;">
                                        <div class="pricing-column">
                                            <div class="pricing-price-row">
                                                <div class="pricing-price-wrapper">
                                                    <div class="pricing-price">
                                                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://resources.pulse.icc-cricket.com/photo-resources/2021/07/26/136021b0-3393-4b1e-a838-bd6c92e3c9df/Sharjah-Cricket-Stadium-.jpeg?width=576&height=576" alt="blog" style="  border-radius: 50%;height: 220px;width: 220px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pricing-row-title">
                                                <div class="pricing_row_title" style="margin-top:10px;padding-bottom: 25px;">Sharjah Stadium</div>
                                            </div>
                                            <figure>

                                                The Sharjah Cricket Stadium is a world-class venue, boasting a capacity of 27,000 people.It holds the record for the most ODIs hosted in a venue with 236 ODIs up to 19 February 2018.
                                            </figure>
                                            <div class="pricing-footer">
                                                <div class="gem-button-container gem-button-position-center"><a href="https://www.t20worldcup.com/venues/104/sharjah-stadium/city" target="_blank" class="gem-button gem-purpel">Read Article</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="pricing-column-wrapper oman" style="width: 320px;margin: auto;">
                                        <div class="pricing-column">
                                            <div class="pricing-price-row">
                                                <div class="pricing-price-wrapper">
                                                    <div class="pricing-price">
                                                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://resources.pulse.icc-cricket.com/photo-resources/2021/07/26/f4b35fe0-732b-472f-977b-6b2a32f697f5/OCA-building.jpeg?width=576&height=576" alt="blog" style="  border-radius: 50%;height: 220px;width: 220px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pricing-row-title">
                                                <div class="pricing_row_title">Oman Cricket Academy Ground</div>
                                            </div>
                                            <figure>Opened in 2012,the Oman Cricket Academy Ground is the jewel in the crown of Omani Cricket.

                                                Holding official ICC Test accreditation, the ground has so far hosted 30 T20Is, as well as four ODIs as part of Cricket World Cup League 2. </figure>
                                            <div class="pricing-footer">
                                                <div class="gem-button-container gem-button-position-center">
                                                    <a href="https://www.t20worldcup.com/venues/588/oman-cricket-academy-ground/venue" target="_blank" class="gem-button gem-orange">Read Article</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="pricing-column-wrapper sheikh" style="width: 320px;margin: auto;">
                                        <div class="pricing-column">
                                            <div class="pricing-price-row">
                                                <div class="pricing-price-wrapper">
                                                    <div class="pricing-price">
                                                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://resources.pulse.icc-cricket.com/photo-resources/2019/10/18/07b27157-54f9-4542-aece-716b0ad6a97e/IMG_20191018_173053__01.jpg?width=576&height=576" alt="blog" style="  border-radius: 50%;height: 220px;width: 220px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pricing-row-title">
                                                <div class="pricing_row_title" style="margin-top:10px;padding-bottom: 25px;">Sheikh Zayed Stadium</div>
                                            </div>
                                            <figure>The ground is picturesque with grass covered mounds on either side of the wicket, the open topped North End Stand and the Members Pavilion. It can hold 20,000 people.The stadium has floodlights facilities and is a newer venue in Sharjah.</figure>
                                            <div class="pricing-footer">
                                                <div class="gem-button-container gem-button-position-center"><a href="https://www.t20worldcup.com/venues/102/sheikh-zayed-stadium/city" target="_blank" class="gem-button gem-yellow">Read Article</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>


                </div>
                <!-- Venues end -->










                <style>
                    h2 {
                        margin: 20px auto 80px;
                        font-size: 38px;
                        font-weight: 300;
                        text-align: center;
                        letter-spacing: 2px;
                        line-height: 1.5;
                    }

                    details {
                        width: 75%;
                        min-height: 5px;
                        max-width: 700px;
                        padding: 45px 70px 45px 45px;
                        margin: 0 auto;
                        position: relative;
                        font-size: 22px;
                        border: 1px solid rgba(0, 0, 0, 0.1);
                        border-radius: 15px;
                        box-sizing: border-box;
                        transition: all 0.3s;
                    }

                    details+details {
                        margin-top: 20px;
                    }

                    details[open] {
                        min-height: 50px;
                        background-color: #f6f7f8;
                        box-shadow: 2px 2px 20px rgba(0, 0, 0, 0.2);
                    }

                    details p {
                        color: #96999d;
                        font-weight: 300;
                    }

                    summary {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        font-weight: 500;
                        cursor: pointer;
                    }

                    summary:focus {
                        outline: none;
                    }

                    summary:focus::after {
                        content: "";
                        height: 100%;
                        width: 100%;
                        display: block;
                        position: absolute;
                        top: 0;
                        left: 0;
                        box-shadow: 0 0 0 5px #3763eb;

                    }

                    summary::-webkit-details-marker {
                        display: none;
                    }

                    .control-icon {
                        fill: black;
                        transition: 0.3s ease;
                        pointer-events: none;
                    }

                    .control-icon-close {
                        display: none;
                    }

                    details[open] .control-icon-close {
                        display: initial;
                        transition: 0.3s ease;
                    }

                    details[open] .control-icon-expand {
                        display: none;
                    }
                </style>



                <!-- ===================== FAQ Start ========================== -->
                <br><br>
                <h2 style="font-weight:bold">Frequently Asked Questions</h2>

                <div style="visibility: hidden; position: absolute; width: 0px; height: 0px;">
                    <svg xmlns="http://www.w3.org/2000/svg">
                        <symbol viewBox="0 0 24 24" id="expand-more">
                            <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z" />
                            <path d="M0 0h24v24H0z" fill="none" />
                        </symbol>
                        <symbol viewBox="0 0 24 24" id="close">
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
                            <path d="M0 0h24v24H0z" fill="none" />
                        </symbol>
                    </svg>
                </div>

                <details>
                    <summary style="font-weight: bold;">
                        Who are we?
                        <svg class="control-icon control-icon-expand" width="24" height="18" role="presentation">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
                        </svg>
                        <svg class="control-icon control-icon-close" width="24" height="18" role="presentation">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
                        </svg>
                    </summary>
                    <p>We are a group of 4 friends, making this website just purely out of love for this beautiful game.</p>
                </details>

                <details>

                    <summary style="font-weight: bold;">
                        What do we do?
                        <svg class="control-icon control-icon-expand" width="24" height="18" role="presentation">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
                        </svg>
                        <svg class="control-icon control-icon-close" width="24" height="18" role="presentation">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
                        </svg>
                    </summary>
                    <p>We are a page that keeps you updated with the latest news, scores, and updates from the ongoing T20 Cricket World Cup.</p>
                </details>

                <details>
                    <summary style="font-weight: bold;">
                        Which social media platforms are we on?
                        <svg class="control-icon control-icon-expand" width="24" height="18" role="presentation">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
                        </svg>
                        <svg class="control-icon control-icon-close" width="24" height="18" role="presentation">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
                        </svg>
                    </summary>
                    <p>Currently we are only on Instagram and Twitter but we do plan to expand. By that time do follow these pages!</p>
                </details>

                <details style="margin-bottom: 20px;">

                    <summary style="font-weight: bold;">
                        What if we want to ask/suggest anything related to the website?
                        <svg class="control-icon control-icon-expand" width="24" height="18" role="presentation">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#expand-more" />
                        </svg>
                        <svg class="control-icon control-icon-close" width="24" height="18" role="presentation">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close" />
                        </svg>
                    </summary>
                    <p>You can definitely contact any of us through mail id : evencricket@gmail.com. We are always open to doubts and suggestions.</p>
                </details>
                <!-- ===================== FAQ End ========================== -->
                <br><br>
            </div>

            <!-- ===================== Left Side End ========================== -->

            <!-- ===================== Right Side Start ========================== -->
            <div class="col-xl-3 col-lg-4" style="padding:0px;">
                <div class="container" id="score">
                    <iframe src="https://widget.crictimes.org/" style="width:100%;min-height: 450px;" frameborder="0" scrolling="yes"></iframe>
                </div>
                <br>
                <div class="container">
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr">Hello Everyone! We are a page that keeps you updated with the latest news
                            from the upcoming
                            <a href="https://twitter.com/hashtag/T20WorldCup?src=hash&amp;ref_src=twsrc%5Etfw">#T20WorldCup</a>.
                            We are
                            young cricket enthusiasts with a blazing desire for the game. We are delighted to present
                            our page in front of
                            you all. <br>Do follow and spread the word.<a href="https://twitter.com/hashtag/CricketTwitter?src=hash&amp;ref_src=twsrc%5Etfw">#CricketTwitter</a>
                            <a href="https://t.co/QQiybgr3nW">pic.twitter.com/QQiybgr3nW</a>
                        </p>&mdash; Even Cricket (@CricketEven) <a href="https://twitter.com/CricketEven/status/1438431907121823745?ref_src=twsrc%5Etfw">September
                            16, 2021</a>
                    </blockquote>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <blockquote class="twitter-tweet">
                        <p lang="en" dir="ltr">BREAKING NEWS: <br>Virat Kohli to step down as the T20I captain of the
                            Indian Cricket Team
                            after the <a href="https://twitter.com/hashtag/T20WorldCup?src=hash&amp;ref_src=twsrc%5Etfw">#T20WorldCup</a>.
                            Most probably Rohit Sharma to be named as the captain after the <a href="https://twitter.com/hashtag/T20WorldCup?src=hash&amp;ref_src=twsrc%5Etfw">#T20WorldCup</a>.
                            <a href="https://twitter.com/hashtag/ViratKohli?src=hash&amp;ref_src=twsrc%5Etfw">#ViratKohli</a>
                            <a href="https://twitter.com/hashtag/Cricket?src=hash&amp;ref_src=twsrc%5Etfw">#Cricket</a>
                            <a href="https://twitter.com/hashtag/RohitSharma?src=hash&amp;ref_src=twsrc%5Etfw">#RohitSharma</a>
                            <a href="https://twitter.com/hashtag/BCCI?src=hash&amp;ref_src=twsrc%5Etfw">#BCCI</a> <a href="https://twitter.com/hashtag/CricketTwitter?src=hash&amp;ref_src=twsrc%5Etfw">#CricketTwitter</a>
                            <a href="https://t.co/15auPKdKH1">pic.twitter.com/15auPKdKH1</a>
                        </p>&mdash; Even Cricket
                        (@CricketEven) <a href="https://twitter.com/CricketEven/status/1438496050453508103?ref_src=twsrc%5Etfw">September
                            16, 2021</a>
                    </blockquote>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
            <!-- ===================== Right Side End ========================== -->
    </section>
    <!-- ========================= Main end ========================= -->

    <!-- ========================= Spacer ========================= -->
    <div style="height:90px;"></div>
    <!-- ========================= Spacer ========================= -->


    <div id="messagesubscribe"></div>
    <!-- ========================= subscribe-section start ========================= -->
    <section class=" subscribe-section pt-70 pb-70 img-bg" style="background-color: #000000;background-image: linear-gradient(147deg, #000000 0%, #2c3e50 74%);">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6" style="height: 150px;">
                    <div class="section-title mb-30">
                        <span class="text-white wow fadeInDown" data-wow-delay=".2s"></span>
                        <h2 class="text-white mb-40 wow fadeInUp" data-wow-delay=".4s">
                            Subscribe to our Newsletter
                        </h2>
                    </div>
                </div>
                <div class=" col-xl-6 col-lg-6">
                    <form class="subscribe-form wow fadeInRight" data-wow-delay=".4s">
                        <input type="email" name="subs-email" id="subs-email" placeholder="Your Email" />
                        <button type="submit">
                            <i class="lni lni-telegram-original"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= subscribe-section end ========================= -->

    <!-- ========================= footer start ========================= -->
    <footer class="footer pt-100" style="background-color: #000000;background-image: linear-gradient(147deg, #000000 0%, #2c3e50 60%);">

        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="footer-widget mb-60 wow fadeInLeft" data-wow-delay=".2s">
                        <a href="index.html" class="logo mb-30"><img src="assets/img/ec1-removebg-preview.png" /></a>
                        <p>Copyright 2021 by Even Cricket. All Rights Reserved.</p>

                    </div>
                </div>
                <div class="col-xl-2 offset-xl-1 col-lg-2 col-md-6">
                    <div class="footer-widget mb-60 wow fadeInUp" data-wow-delay=".4s">
                        <h4 style="color: white;">Quick Links</h4>
                        <ul class="footer-links">
                            <li>
                                <a href="http://localhost/evencricket/index.php">Home</a>
                            </li>
                            <li>
                                <a href="http://localhost/evencricket/About%20EC/aboutEC.html">About Us</a>
                            </li>
                            <li>
                                <a href="http://localhost/evencricket/SocialMedia/social.html">Social Media</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer-widget mb-60 wow fadeInRight" data-wow-delay=".8s">
                        <h4 style="color: white;padding-left:10px">Key Points</h4>
                        <ul class="footer-contact">
                            <li>
                                <p>Live updates</p>
                            </li>

                            <li>
                                <p>Latest News</p>
                            </li>
                            <li>
                                <p>Use of own API</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="footer-widget mb-60 wow fadeInRight" data-wow-delay=".8s">
                        <h4 style="color: white;padding-left:10px">Contact</h4>
                        <ul class="footer-contact">
                            <li>
                                <a class="mail" href="mailto: abc@example.com">
                                    <p>evencricket@gmail.com</p>
                                </a>

                            </li>
                            <li>
                                <p>Mumbai, India.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="copyright-area">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="footer-social-links">
                            <ul class="d-flex">
                                <!-- <li>
                                    <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                                </li> -->
                                <li>
                                    <a href="https://twitter.com/CricketEven" target="__blank"><i class="lni lni-twitter-filled"></i></a>
                                </li>
                                <!-- <li>
                                    <a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
                                </li> -->
                                <li>
                                    <a href="https://www.instagram.com/evencricket/" target="__blank"><i class="lni lni-instagram-filled"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <p style="color: white;" class="wow fadeInUp" data-wow-delay="0.2s">

                            <a href="" rel="nofollow">Even Cricket</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ========================= footer end ========================= -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-arrow-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.bundle-5.0.0-beta1.min.js"></script>
    <script src="assets/js/contact-form.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function(e) {
            $("form").on('submit', (function(e) {
                e.preventDefault();
                $.ajax({
                    url: "emailtodb.php",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $("#messagesubscribe").html(data);
                    }
                });
            }));
        });
    </script>
    <script>
        // Master DOManipulator v2 ------------------------------------------------------------
        const items = document.querySelectorAll('.item'),
            controls = document.querySelectorAll('.control'),
            headerItems = document.querySelectorAll('.item-header'),
            descriptionItems = document.querySelectorAll('.item-description'),
            activeDelay = .76,
            interval = 5000;

        let current = 0;

        const slider = {
            init: () => {
                controls.forEach(control => control.addEventListener('click', (e) => {
                    slider.clickedControl(e)
                }));
                controls[current].classList.add('active');
                items[current].classList.add('active');
            },
            nextSlide: () => { // Increment current slide and add active class
                slider.reset();
                if (current === items.length - 1) current = -1; // Check if current slide is last in array
                current++;
                controls[current].classList.add('active');
                items[current].classList.add('active');
                slider.transitionDelay(headerItems);
                slider.transitionDelay(descriptionItems);
            },
            clickedControl: (e) => { // Add active class to clicked control and corresponding slide
                slider.reset();
                clearInterval(intervalF);

                const control = e.target,
                    dataIndex = Number(control.dataset.index);

                control.classList.add('active');
                items.forEach((item, index) => {
                    if (index === dataIndex) { // Add active class to corresponding slide
                        item.classList.add('active');
                    }
                })
                current = dataIndex; // Update current slide
                slider.transitionDelay(headerItems);
                slider.transitionDelay(descriptionItems);
                intervalF = setInterval(slider.nextSlide, interval); // Fire that bad boi back up
            },
            reset: () => { // Remove active classes
                items.forEach(item => item.classList.remove('active'));
                controls.forEach(control => control.classList.remove('active'));
            },
            transitionDelay: (items) => { // Set incrementing css transition-delay for .item-header & .item-description, .vertical-part, b elements
                let seconds;

                items.forEach(item => {
                    const children = item.childNodes; // .vertical-part(s)
                    let count = 1,
                        delay;

                    item.classList.value === 'item-header' ? seconds = .015 : seconds = .007;

                    children.forEach(child => { // iterate through .vertical-part(s) and style b element
                        if (child.classList) {
                            item.parentNode.classList.contains('active') ? delay = count * seconds + activeDelay : delay = count * seconds;
                            child.firstElementChild.style.transitionDelay = `${delay}s`; // b element
                            count++;
                        }
                    })
                })
            },
        }

        let intervalF = setInterval(slider.nextSlide, interval);
        slider.init();
    </script>
		<script>
        alert("Thank you for visiting our website! We hope you have a great experience and do not forget to go through all the functionalities! Only 2 days to go until we switch this off !");
    </script>
</body>

</html>