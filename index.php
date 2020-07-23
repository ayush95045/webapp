<?php
$com  = array('stone','paper','sci');
$com1 = array_rand($com , 1);
$com2 = $com[$com1]; //computer select from stone,...
$you = 'sci';
$you = $_GET['rps'];
$result = "Lets start!";
if ($com2==$you) {
	$result="DRAW!";
}
elseif ($com2==sci && $you ==stone) {
	$result="YOU WIN!";
}
elseif ($you==sic && $com2==stone) {
	$result="YOU LOOSE!";
}
elseif ($com2==paper && $you==stone) {
	$result = "YOU LOOSE!";
}
elseif ($com2==stone && $you==paper) {
	$result = "YOU WIN!";
}
elseif ($com2==sci && $you ==paper) {
	$result = "YOU LOOSE!";
}
elseif ($com2==paper && $you ==sci) {
	$result="YOU WIN!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>game!</title>
	<meta name="viewport " content="width=device-width,initial-scale=1">
	<style type="text/css">
		* {
			padding: 0;
			margin: 0;
			border: 0;
		}
		html,body {
			height: 100%;
			width: 100%;
			background-color: black;

		}
		h1 {box-sizing: border-box;
			padding: 0% 0% 0% 5%;
			background-color: black;
			color: thistle;
			text-align: center;
			height: 10%;
			width: 100%
			padding: 50px;
			text-shadow: 3px 3px 3px #df32a8;
			font-size: 4.5em;
		}
		input {

			height: 75%;
			width: 10%;
			padding: 0 5% 0 5%;

		}
		form {
			box-sizing: border-box;
			text-align: center;
			width: 100%;
			height: 20%;
			padding: 1% 0% 1% 0%;
			background-color: lime;
		}
		#gif {
			box-sizing: border-box;
			width: 100%;
			height: 30%;
			background-color:  red;
			background-image: url(rps.gif);
			background-size: 100% 100% ;
	    }
      div {
        box-sizing: border-box;
        display: inline-block;
        height: 20%;
				width: 100%;
      }

	    #p1 {

	    	box-sizing: border-box;
				float: left;
	    	height: 100%;
	    	width: 25%;
	    	background-color: #d33838;
	    }
	    #p2 {

	    	box-sizing: border-box;
	    	height: 100%;
	    	width: 50%;
				float: left;
				background-color: #4aede2;


	    }
        #p3 {

        	box-sizing: border-box;
	    	height: 100%;
	    	width: 25%;
				float: left;
	    	background-color: #87dd37;
        }
				h2 {
					display:inline-block;
					margin: -2%;
					font-size:350%;
					text-shadow: .08em .08em silver;
				}
				span {
					text-align: center;
					font-size: 4em;
					padding-left: 40%;
					padding-top: 15%;
					display: inline-block;
					color:#f40b0b;
					text-shadow: 0.06em 0.05em #0b0b0b;
					font-weight: 800;

				}
                      #ins { text-align: center;color: white;font-size: 5em;}



    </style>
</head>
<body>
<h1>ROCK-PAPER-SCISSOR</h1>
<p id="gif">

</p>

	<div>
		<p  id="p1" >
<img src="<?= $com2?>.jpeg" alt="<?= $com2?>" width="100%" height="100%">
		</p>
		<p id="p2" style="text-align:centre;"><span><?=$result?></span></p>
		<p id="p3"><img src="<?= $you?>.jpeg" alt="<?= $you?>" width="100%" height="100%">
</p>
  </div>
<form>

	<label><input type="radio" value="stone" name="rps" ><h2>ROCK</h2></label>
	<label><input type="radio" value="paper" name="rps"><h2>PAPER</h2></label>
	<label><input type="radio" value="sci"  name="rps"><h2>SCISSOR</h2></label>
	<label><input type="submit" value="PLAY" name="submit" style="background-color:#dadd16;float:right;margin-right:2%;"></label>

</form>
<div id="ins">
 <h3>How to play?</h3>
 <h4>select one option<br>click on play!</h4>
</div>
</body>
</html>
