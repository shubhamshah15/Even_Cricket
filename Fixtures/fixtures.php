<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Fixtures | EC</title>
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

    <!-- fixture -->
    <link rel="stylesheet" href="fixture_css/animate.css">
    <link rel="stylesheet" href="fixture_css/cricket_style.css">
    <link rel="stylesheet" href="fixture_css/customScrollbar.css">
    <link rel="stylesheet" href="fixture_css/flaticon.css">
    <link rel="stylesheet" href="fixture_css/font-awesome.css">
    <link rel="stylesheet" href="fixture_css/fonts.css">
    <link rel="stylesheet" href="fixture_css/magnific-popup.css">
    <link rel="stylesheet" href="fixture_css/owl.carousel.css">
    <link rel="stylesheet" href="fixture_css/owl.theme.default.css">
    <link rel="stylesheet" href="fixture_css/select2.min.css">
    <script>
        document.getElementsByTagName("html")[0].className += " js";
    </script>
    <link rel="stylesheet" href="fixture_css/style.css">

</head>

<body>
	<style>
		
/* basic styles for black background and crosshair cursor */
body {	
	margin: 0;
}

canvas {
	cursor: crosshair;
	display: block;
}
	</style>
    <!-- ========================= Preloader Navbar start ========================= -->
    <style>
        .navbar-area a {
            font-family: "Poppins", sans-serif;
        }

        .navbar-brand img{
            cursor: pointer;
        }

        #fixtures-navbar {
            border-bottom: 2px solid blue;
        }
    </style>
    <div id="navbar"></div>
    <script>
        $(document).ready(function() {
            $("#navbar").load("../navbar.html");
        });
    </script>
    <!-- ========================= Preloader Navbar End ========================= -->

    <!-- ========================= feature-section start ========================= -->







    <style>
        .img {
            vertical-align: middle;
            border-style: none;
            height: 70px;


            width: 100px;
        }

        ul.no-bullets {
            list-style-type: none;
        }

        a {
            text-decoration: none;
        }

        .js .cd-h-timeline__date--selected::after {
            background-color: hsl(209, 100%, 50.6%);
            border-color: hsl(225.3, 81.8%, 56.9%);
        }

        .js .cd-h-timeline__navigation:hover {
            border-color: black;
        }
    </style>

    <br><br>

    <section class="cd-h-timeline js-cd-h-timeline margin-bottom-md">
        <p class="text-center margin-top-md timeline margin-bottom-xl">
            <a class="text--inherit" href="https://codyhouse.co/gem/horizontal-timeline/"></a>
        </p>

        <div class="cd-h-timeline__container container">
            <div class="cd-h-timeline__dates">
                <div class="cd-h-timeline__line">
                    <ol><b>
                            <?php
/*$begin = new DateTime('2021-10-17');
                            $end = new DateTime('2021-11-08');

                            $interval = DateInterval::createFromDateString(
                                '1 day'
                            );
                            $period = new DatePeriod($begin, $interval, $end);

                            foreach ($period as $dt) {
                                echo '<li><a href="#0" data-date="18/10/2021" class="cd-h-timeline__date ' .
                                    (date('now') == $dt
                                        ? 'cd-h-timeline__date--selected">'
                                        : '') .
                                    $dt->format('j M') .
                                    '</a></li>';
                            }*/
?>
                            <?php
                            $conn = mysqli_connect(
                                'localhost',
                                'root',
                                '',
                                'evencricket'
                            );
                            if ($conn == false) {
                                die('Error: Cannot connect');
                            }
                            $sqldate =
                                'SELECT distinct day, date FROM schedule';
                            $querydate = mysqli_query($conn, $sqldate);
                            $timezone = new DateTimeZone('Asia/Kolkata');
                            $date = new DateTime();
                            $date->setTimezone($timezone);
                            $dtobj = $date->format('Y-m-d');
                            $selected = false;
                            $total = mysqli_num_rows($querydate);
                            for (
                                $i = 1;
                                ($rowdate = mysqli_fetch_row($querydate));
                                $i++
                            ) {
                                $date = strtotime($rowdate[1]);
                                if ($date == strtotime($dtobj)) {
                                    echo '<br><li><a href="#0" data-date="' .
                                    date('Y/m/d'),
                                        '" class="cd-h-timeline__date cd-h-timeline__date--selected">' .
                                            $rowdate[0],
                                        '</a></li>';
                                    $selected = true;
                                } else {
                                    if ($i == $total && !$selected) {
                                        echo '<br><li><a href="#0" data-date="' .
                                        date('Y/m/d'),
                                            '" class="cd-h-timeline__date cd-h-timeline__date--selected">' .
                                                $rowdate[0],
                                            '</a></li>';
                                    } else {
                                        echo '<br><li><a href="#0" data-date="' .
                                        date('Y/m/d'),
                                            '" class="cd-h-timeline__date">' .
                                                $rowdate[0],
                                            '</a></li>';
                                    }
                                }
                            }
                            ?>
                        </b>
                    </ol>
                    <span class="cd-h-timeline__filling-line" aria-hidden="true"></span>
                </div> <!-- .cd-h-timeline__line -->
            </div> <!-- .cd-h-timeline__dates -->

            <ul>
                <li style="color: black;"><a href="#0" class="previous cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive">
                        <h1 class="arrow" style="font-size:35px;margin-top:-5px;margin-left:8px;color: hsl(209, 100%, 50.6%);">
                            < </h1>
                    </a>
                </li>
                <li style="color: black;"><a href="#0" class="next cd-h-timeline__navigation cd-h-timeline__navigation--next">
                        <h1 class="arrow" style="font-size:35px;margin-top:-5px;margin-left:8px;color: hsl(209, 100%, 50.6%);">></h1>
                    </a>
                </li>
                <!-- <li><a href="#" class="previous round" class="previous round text-replace cd-h-timeline__navigation cd-h-timeline__navigation--prev cd-h-timeline__navigation--inactive">&#8249;</a></li> -->
                <!-- <li> <a href="#" class="next round" class="next round text-replace cd-h-timeline__navigation cd-h-timeline__navigation--next">&#8250;</a></li> -->
            </ul>
        </div> <!-- .cd-h-timeline__container -->

        <div class="cd-h-timeline__events">
            <ol>

                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'evencricket');
                if ($conn == false) {
                    die('Error: Cannot connect');
                }
                $sqldate =
                    'SELECT distinct date FROM schedule ORDER BY date ASC';
                $querydate = mysqli_query($conn, $sqldate);
                while ($rowdate = mysqli_fetch_row($querydate)) {

                    $sqlmatch =
                        "SELECT team_1, team_2, venue, time, status, result
                    FROM schedule 
                    WHERE date = '" .
                        $rowdate[0] .
                        "'";
                    $querymatch = mysqli_query($conn, $sqlmatch);
                    ?>
                    <li class="cd-h-timeline__event text-component">
                        <div class="cd-h-timeline__event-content container">
                            <h2 class="cd-h-timeline__event-title" style="padding-left: 60px;">Matchday ~</h2>
                            <em class="cd-h-timeline__event-date" style="padding-left: 60px;">
                                <?php echo date(
                                    'F j, Y',
                                    strtotime($rowdate[0])
                                ); ?>
                            </em>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">

                                    </div>

                                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                                        <div class="tg-upcomingmatch">


                                            <?php while (
                                                $rowmatch = mysqli_fetch_row(
                                                    $querymatch
                                                )
                                            ) {

                                                $sqlteam1 =
                                                    'SELECT country_name, flag FROM teams WHERE id = ' .
                                                    $rowmatch[0];
                                                $sqlteam2 =
                                                    'SELECT country_name, flag FROM teams WHERE id = ' .
                                                    $rowmatch[1];
                                                $queryteam1 = mysqli_query(
                                                    $conn,
                                                    $sqlteam1
                                                );
                                                $queryteam2 = mysqli_query(
                                                    $conn,
                                                    $sqlteam2
                                                );
                                                $rowteam1 = mysqli_fetch_row(
                                                    $queryteam1
                                                );
                                                $rowteam2 = mysqli_fetch_row(
                                                    $queryteam2
                                                );
                                                ?>
                                                <div class="tg-match my-3">
                                                    <div class="tg-matchdetail row text-center">
                                                        <div class="col-sm-5" style="padding:10px;">
                                                            <div class="tg-teamlogo" style="display: flex; justify-content: center;">
                                                                <img src="<?php echo $rowteam1[1]; ?>" alt="image description" class="img">
                                                            </div>
                                                            <h3 style="font-size: 1.2rem;font-weight:bold">
                                                                <?php echo $rowteam1[0]; ?>
                                                            </h3>
                                                        </div>
                                                        <div class="vs-box col-sm-2">
                                                            <h4 style="margin-top:25px;">vs</h4>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="tg-teamlogo2" style="display: flex; justify-content: center;">
                                                                <img src="<?php echo $rowteam2[1]; ?>" alt="image description" class="img">
                                                            </div>
                                                            <h3 style="font-size: 1.2rem;font-weight:bold;margin-top:30px;">
                                                                <?php echo $rowteam2[0]; ?>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="tg-matchhover text-center" style="height: 100%;padding:15px;">
                                                        <div>
                                                            <?php if (
                                                                $rowmatch[4] ==
                                                                'pending'
                                                            ) {
                                                                echo '<p style="font-weight:bold;font-size:20px;color:black;">Date : ' .
                                                                date(
                                                                    'M d, Y ',
                                                                    strtotime(
                                                                        $rowdate[0]
                                                                    )
                                                                ) .
                                                                '</p><p style="font-weight:bold;font-size:20px;color:black;">Time : ' .
                                                                date(
                                                                    'H:i A',
                                                                    strtotime(
                                                                        $rowmatch[3]
                                                                    )
                                                                ) .
                                                                '</p><p style="font-weight:bold;font-size:20px;color:black;">Venue : ' .
                                                                $rowmatch[2],
                                                                    '</p>';
                                                            } else {
                                                                echo '<p style="font-weight:bold;font-size:20px;color:black;">Date : ' .
                                                                date(
                                                                    'M d, Y ',
                                                                    strtotime(
                                                                        $rowdate[0]
                                                                    )
                                                                ) .
                                                                '  ;  Time : ' .
                                                                date(
                                                                    'H:i A',
                                                                    strtotime(
                                                                        $rowmatch[3]
                                                                    )
                                                                ) .
                                                                '</p><p style="font-weight:bold;font-size:20px;color:black;">Venue : ' .
                                                                $rowmatch[2],
                                                                    '</p><p style="font-weight:bold;font-size:20px;color:red;">' .
                                                                        $rowmatch[5],
                                                                    '</p>';
                                                            } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ol>
        </div> <!-- .cd-h-timeline__events -->
    </section>
	
           <!-- setup our canvas element -->
<canvas id="canvas">Canvas is not supported in your browser.</canvas>
<style>
    .preloader{
        display: none;
    }

canvas {
	cursor: crosshair;
	display: block;
    position: absolute;
    top: 100px;
}
</style>

    <style>
        .vs-box h4 {
            display: inline-block;
            width: 50px;
            height: 50px;
            margin: 12px 0px;
            position: relative;
            text-align: center;
            line-height: 50px;
            background: #ffef2b;
            font-size: 24px;
            color: #002398;
            border-radius: 100px;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }

        .vs-box h4 {
            width: 35px;
            height: 35px;
            margin-top: 0;
            line-height: 35px;
            font-size: 18px;
        }
    </style>


    <div id="footer"></div>
    <style>
        .footer {
            font-family: "Poppins", sans-serif;
        }
    </style>



    <script src="fixture_css/util.js"></script> <!-- util functions included in the CodyHouse framework -->
    <script src="fixture_css/swipe-content.js"></script>
    <!-- A Vanilla JavaScript plugin to detect touch interactions -->
    <script src="fixture_css/main.js"></script>




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
				// when animating on canvas, it is best to use requestAnimationFrame instead of setTimeout or setInterval
// not supported in all browsers though and sometimes needs a prefix, so we need a shim
window.requestAnimFrame = ( function() {
	return window.requestAnimationFrame ||
				window.webkitRequestAnimationFrame ||
				window.mozRequestAnimationFrame ||
				function( callback ) {
					window.setTimeout( callback, 1000 / 60 );
				};
})();

// now we will setup our basic variables for the demo
var canvas = document.getElementById( 'canvas' ),
		ctx = canvas.getContext( '2d' ),
		// full screen dimensions
		cw = window.innerWidth,
		ch = window.innerHeight,
		// firework collection
		fireworks = [],
		// particle collection
		particles = [],
		// starting hue
		hue = 120,
		// when launching fireworks with a click, too many get launched at once without a limiter, one launch per 5 loop ticks
		limiterTotal = 5,
		limiterTick = 0,
		// this will time the auto launches of fireworks, one launch per 80 loop ticks
		timerTotal = 80,
		timerTick = 0,
		mousedown = false,
		// mouse x coordinate,
		mx,
		// mouse y coordinate
		my;
		
// set canvas dimensions
canvas.width = cw;
canvas.height = ch;

// now we are going to setup our function placeholders for the entire demo

// get a random number within a range
function random( min, max ) {
	return Math.random() * ( max - min ) + min;
}

// calculate the distance between two points
function calculateDistance( p1x, p1y, p2x, p2y ) {
	var xDistance = p1x - p2x,
			yDistance = p1y - p2y;
	return Math.sqrt( Math.pow( xDistance, 2 ) + Math.pow( yDistance, 2 ) );
}

// create firework
function Firework( sx, sy, tx, ty ) {
	// actual coordinates
	this.x = sx;
	this.y = sy;
	// starting coordinates
	this.sx = sx;
	this.sy = sy;
	// target coordinates
	this.tx = tx;
	this.ty = ty;
	// distance from starting point to target
	this.distanceToTarget = calculateDistance( sx, sy, tx, ty );
	this.distanceTraveled = 0;
	// track the past coordinates of each firework to create a trail effect, increase the coordinate count to create more prominent trails
	this.coordinates = [];
	this.coordinateCount = 3;
	// populate initial coordinate collection with the current coordinates
	while( this.coordinateCount-- ) {
		this.coordinates.push( [ this.x, this.y ] );
	}
	this.angle = Math.atan2( ty - sy, tx - sx );
	this.speed = 2;
	this.acceleration = 1.05;
	this.brightness = random( 50, 70 );
	// circle target indicator radius
	this.targetRadius = 1;
}

// update firework
Firework.prototype.update = function( index ) {
	// remove last item in coordinates array
	this.coordinates.pop();
	// add current coordinates to the start of the array
	this.coordinates.unshift( [ this.x, this.y ] );
	
	// cycle the circle target indicator radius
	if( this.targetRadius < 8 ) {
		this.targetRadius += 0.3;
	} else {
		this.targetRadius = 1;
	}
	
	// speed up the firework
	this.speed *= this.acceleration;
	
	// get the current velocities based on angle and speed
	var vx = Math.cos( this.angle ) * this.speed,
			vy = Math.sin( this.angle ) * this.speed;
	// how far will the firework have traveled with velocities applied?
	this.distanceTraveled = calculateDistance( this.sx, this.sy, this.x + vx, this.y + vy );
	
	// if the distance traveled, including velocities, is greater than the initial distance to the target, then the target has been reached
	if( this.distanceTraveled >= this.distanceToTarget ) {
		createParticles( this.tx, this.ty );
		// remove the firework, use the index passed into the update function to determine which to remove
		fireworks.splice( index, 1 );
	} else {
		// target not reached, keep traveling
		this.x += vx;
		this.y += vy;
	}
}

// draw firework
Firework.prototype.draw = function() {
	ctx.beginPath();
	// move to the last tracked coordinate in the set, then draw a line to the current x and y
	ctx.moveTo( this.coordinates[ this.coordinates.length - 1][ 0 ], this.coordinates[ this.coordinates.length - 1][ 1 ] );
	ctx.lineTo( this.x, this.y );
	ctx.strokeStyle = 'hsl(' + hue + ', 100%, ' + this.brightness + '%)';
	ctx.stroke();
	
	ctx.beginPath();
	// draw the target for this firework with a pulsing circle
	ctx.arc( this.tx, this.ty, this.targetRadius, 0, Math.PI * 2 );
	ctx.stroke();
}

// create particle
function Particle( x, y ) {
	this.x = x;
	this.y = y;
	// track the past coordinates of each particle to create a trail effect, increase the coordinate count to create more prominent trails
	this.coordinates = [];
	this.coordinateCount = 5;
	while( this.coordinateCount-- ) {
		this.coordinates.push( [ this.x, this.y ] );
	}
	// set a random angle in all possible directions, in radians
	this.angle = random( 0, Math.PI * 2 );
	this.speed = random( 1, 10 );
	// friction will slow the particle down
	this.friction = 0.95;
	// gravity will be applied and pull the particle down
	this.gravity = 1;
	// set the hue to a random number +-20 of the overall hue variable
	this.hue = random( hue - 20, hue + 20 );
	this.brightness = random( 50, 80 );
	this.alpha = 1;
	// set how fast the particle fades out
	this.decay = random( 0.015, 0.03 );
}

// update particle
Particle.prototype.update = function( index ) {
	// remove last item in coordinates array
	this.coordinates.pop();
	// add current coordinates to the start of the array
	this.coordinates.unshift( [ this.x, this.y ] );
	// slow down the particle
	this.speed *= this.friction;
	// apply velocity
	this.x += Math.cos( this.angle ) * this.speed;
	this.y += Math.sin( this.angle ) * this.speed + this.gravity;
	// fade out the particle
	this.alpha -= this.decay;
	
	// remove the particle once the alpha is low enough, based on the passed in index
	if( this.alpha <= this.decay ) {
		particles.splice( index, 1 );
	}
}

// draw particle
Particle.prototype.draw = function() {
	ctx. beginPath();
	// move to the last tracked coordinates in the set, then draw a line to the current x and y
	ctx.moveTo( this.coordinates[ this.coordinates.length - 1 ][ 0 ], this.coordinates[ this.coordinates.length - 1 ][ 1 ] );
	ctx.lineTo( this.x, this.y );
	ctx.strokeStyle = 'hsla(' + this.hue + ', 100%, ' + this.brightness + '%, ' + this.alpha + ')';
	ctx.stroke();
}

// create particle group/explosion
function createParticles( x, y ) {
	// increase the particle count for a bigger explosion, beware of the canvas performance hit with the increased particles though
	var particleCount = 30;
	while( particleCount-- ) {
		particles.push( new Particle( x, y ) );
	}
}

// main demo loop
function loop() {
	// this function will run endlessly with requestAnimationFrame
	requestAnimFrame( loop );
	
	// increase the hue to get different colored fireworks over time
	hue += 0.5;
	
	// normally, clearRect() would be used to clear the canvas
	// we want to create a trailing effect though
	// setting the composite operation to destination-out will allow us to clear the canvas at a specific opacity, rather than wiping it entirely
	ctx.globalCompositeOperation = 'destination-out';
	// decrease the alpha property to create more prominent trails
	ctx.fillStyle = 'rgba(0, 0, 0, 0.5)';
	ctx.fillRect( 0, 0, cw, ch );
	// change the composite operation back to our main mode
	// lighter creates bright highlight points as the fireworks and particles overlap each other
	ctx.globalCompositeOperation = 'lighter';
	
	// loop over each firework, draw it, update it
	var i = fireworks.length;
	while( i-- ) {
		fireworks[ i ].draw();
		fireworks[ i ].update( i );
	}
	
	// loop over each particle, draw it, update it
	var i = particles.length;
	while( i-- ) {
		particles[ i ].draw();
		particles[ i ].update( i );
	}
	
	// launch fireworks automatically to random coordinates, when the mouse isn't down
	if( timerTick >= timerTotal ) {
		if( !mousedown ) {
			// start the firework at the bottom middle of the screen, then set the random target coordinates, the random y coordinates will be set within the range of the top half of the screen
			fireworks.push( new Firework( cw / 2, ch, random( 0, cw ), random( 0, ch / 2 ) ) );
			timerTick = 0;
		}
	} else {
		timerTick++;
	}
	
	// limit the rate at which fireworks get launched when mouse is down
	if( limiterTick >= limiterTotal ) {
		if( mousedown ) {
			// start the firework at the bottom middle of the screen, then set the current mouse coordinates as the target
			fireworks.push( new Firework( cw / 2, ch, mx, my ) );
			limiterTick = 0;
		}
	} else {
		limiterTick++;
	}
}

// mouse event bindings
// update the mouse coordinates on mousemove
canvas.addEventListener( 'mousemove', function( e ) {
	mx = e.pageX - canvas.offsetLeft;
	my = e.pageY - canvas.offsetTop;
});

// toggle mousedown state and prevent canvas from being selected
canvas.addEventListener( 'mousedown', function( e ) {
	e.preventDefault();
	mousedown = true;
});

canvas.addEventListener( 'mouseup', function( e ) {
	e.preventDefault();
	mousedown = false;
});

// once the window loads, we are ready for some fireworks!
window.onload = loop;

	</script>
</body>

</html>