<?php
	session_start();
	error_reporting(E_ALL);
	
	if (++$_SESSION['lastRegeneration'] >= 10) {
		$_SESSION['last_regeneration'] = 0;
		session_regenerate_id(true);
	}
	
    include("dbconnect.php");
    //All php on this page written/repurposed by Christian Thorpe
?>
<html>
	<head>
		<title>Instruments</title>
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link href="mainstyles.css" rel="stylesheet" type="text/css">
		<link href="musicians.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="container">
			<header>
				<img src="images/title_heading4_750px.png" alt="TOWNSVILLE MUSIC CENTRE" width="750" height="70" class="titleimg"/>
				<img src="images/index/TCMCtrans10067.gif" alt="townsville music centre logo" width="100" height="67" class="logotitle"/>
			</header>
			<a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534"><img src="images/facebook_like_110px.png" alt="Facebook Page
			" width="110" height="32" class="headerfblike"/></a>
			<nav>
				<ul>
					<li><a href="index.php" class="linkhome">Home</a></li>
					<li><a href="events.php" class="linkevents">Events</a></li>
					<li><a href="bulletinBoard.php" class="linkbulliten">Bulletin Board</a></li>
					<li><a href="musicians.php" class="linkmusician">Musicians</a></li>
					<li><a href="membership.php" class="linkbecommbr">Become A Member</a></li>
					<li><a href="about.php" class="linkaboutus">About Us</a></li>
					<li><a href="instruments.php" class="linkinstrument">Instruments We Use</a></li>
				</ul>
			</nav>
			</header>

			<h1>About Our Instruments</h1>
			<div class="content">
				<br>
                <div class="instumentImg"><img src="images/instruments/bass.png"  width="210" height="200"/></div>
				<p>The <b>double bass</b> is a stringed musical instrument, the lowest-pitched member of the violin family, sounding an octave lower than the cello.It has two basic designs—one shaped like a viol (or viola da gamba) and the other like a violin—but there are other designs, such as that of a guitar. It varies considerably in size, the largest normally being under 6 feet (1.8 metres) in total length. The body itself, without the neck, may be up to 4.5 feet (1.4 metres) for a full-size instrument, about 3.8 feet (1.2 metres) for a three-quarter size, and only slightly larger than a cello for the small chamber bass, or bassetto.<br><br>
				A double bass is usually strung with four heavy strings pitched E1–A1–D–G; a fifth string is occasionally added—in jazz band basses, at the top of the register to allow high notes to be played more easily; in symphony orchestra basses, below the E string, tuned to C. Many basses, rather than having a fifth string, have a mechanical device with levers that increases the length of the fourth string. With this device the pitch of the E string may be lowered to E♭, D, D♭, or C, or clamped to sound E when the lower notes are not needed.<br><br>
				Two styles of bass bow are currently used: the short and narrow French bow (like a violin bow), held palm downward, and the broader German bow (like a violbow), held palm upward. The double bass also can be played pizzicato (by plucking with the fingers)—occasionally in symphonic orchestras and almost always in jazz and dance bands.</p>
				<br>
			</div>

			<div class="content">
				<br>
                <div class="instumentImg"><img src="images/instruments/cello.png"  width="210" height="200"/></div>
				<p>The <b>cello</b> is a bass musical instrument of the violin group, with four strings, pitched C–G–D–A upward from two octaves below middle C. The cello, about 27.5 inches (70 cm) long (47 inches [119 cm] with the neck), has proportionally deeper ribs and a shorter neck than the violin.<br><br>
				The cello looks like the violin and viola but is much larger (around 4 feet long), and has thicker strings than either the violin or viola. Of all the string instruments, the cello sounds most like a human voice, and it can make a wide variety of tones, from warm low pitches to bright higher notes. There are usually 8 to 12 cellos in an orchestra and they play both harmony and melody.<br><br>
				Since the cello is too large to put under your chin, you play it sitting down with the body of the cello between your knees, and the neck on your left shoulder. The body of the cello rests on the ground and is supported by a metal peg. You play the cello in a similar manner to the violin and viola, using your left hand to press down on the strings, and your right hand to move the bow or pluck the strings.</p>
				<br>
			</div>

			<div id="drum" class="content">
				<br>
                <div class="instumentImg"><img src="images/instruments/drums01.png"  width="210" height="200"/></div>
				<p>The <b>drum kit</b>, or <b>drum set</b>, is a collection of drums and other percussion instruments set up to be played/struck by a single player.<br><br>
				The traditional drum kit consists of a mix of drums (classified as classically as membranophones) and idiophones (most significantly cymbals but also including the woodblock and cowbell for example). More recently kits have also included electronic instruments, with both hybrid and entirely electronic kits now in common use.<br><br>
				A standard modern kit (for a right-handed player), as used in popular music and taught in many music schools, contains:</p>
				<ul>
					<li>A snare drum, mounted on a stand, placed between the player's knees and played with drum sticks (which may include rutes or brushes)</li>
					<li>A bass drum, played by a pedal operated by the right foot</li>
					<li>One or more cymbals, played with the sticks</li>
				</ul>
                <p>Many drummers extend their kits from this basic pattern, adding more drums, more cymbals, and many other instruments including pitched percussion. In some styles of music particular extensions are normal, for example double bass drums in heavy metal music. On the other extreme but more rarely, some performers omit elements from even the basic setup, also dependent on the style of music and individual preferences.</p>
				<br>
			</div>

			<div class="content">
				<div class="instumentImg"><img src="images/instruments/electric.png"  width="210" height="200"/></div>
                <p>The <b>electric guitar</b>, is a guitar that uses a pickup to convert the vibration of its strings into electrical impulses. The most common guitar pickup uses the principle of direct electromagnetic induction. The signal generated by an electric guitar is too weak to drive a loudspeaker, so it is amplified before sending it to a loudspeaker. Since the output of an electric guitar is an electric signal, the signal may easily be altered using electronic circuits to add "color" to the sound. Often the signal is modified using effects such as reverb and distortion.<br><br>
				Electric guitar design and construction varies greatly as to the shape of the body, and configuration of the neck, bridge, and pickups. Guitars have a fixed bridge or a spring-loaded hinged bridge that lets players bend notes or chords up or down in pitch, or perform a vibrato. The sound of a guitar can be modified by new playing techniques such as string bending, tapping, hammering on, using audio feedback, or slide guitar playing. There are several types of electric guitar, including the solid body guitar, various types of hollow body guitars, the seven-string guitar, which typically adds a low "B" string below the low "E", and the twelve string electric guitar, which has six pairs of strings.<br><br>
				Popular music and rock groups often use the electric guitar in two roles: as a rhythm guitar which provides the chord sequence or "progression" and sets out the "beat" (as part of a rhythm section), and a lead guitar, which is used to perform melody lines, melodic instrumental fill passages, and guitar solos.</p>
			</div>

			<div class="content">
				<br>
                <div class="instumentImg"><img src="images/instruments/flamenco.png"  width="210" height="200"/></div>
				<p>At first glance, most people will not be able to tell the difference between a classical guitar and a <b>flamenco guitar</b>, and in fact there actually is very little physical difference between the modern versions of the instruments.<br><br>
				The historic difference between the two instruments came down to what the buyer could afford and what materials the guitars were made from. If the guitar was made from white cypress wood, it was much less expensive and was bought by everyday people, who for the most part played popular folk music, also called flamenco music. The cheaper guitar was thus referred to as a flamenco guitar.<br><br>
				While both flamenco and classical guitars use the same type of strings, the string’s action (height of strings above the fingerboard) is set lower on flamenco guitars, which allows for faster play.</p>
				<br>
			</div>

			<div class="content">
				<br>
                <div class="instumentImg"><img src="images/instruments/violin.png" width="210" height="200"/></div>
				<p>The <b>violin</b> is a beautifully crafted wooden stringed instrument. It typically has four strings, which are tuned one fifth apart from each other (that means that each string is five notes from the one next to it: D, e, f, g, A as an example.<br><br>
				The violin is both the smallest and the highest-sounding member of the string family, which includes the violin, the viola, the cello, and the bass. Often, because of its carrying sound, violins are used to convey the melody in orchestra. It is the most well-known of the stringed instrument family, which also includes the viola (which looks like a large violin), the cello, and the bass.<br><br>
				The violin is often referred to as a fiddle. Some folks might argue that they are two entirely different instruments, but truly the difference is related to how the violin itself is adjusted, the style in which it is played, and the kind of music played.</p>
				<br>
			</div>
		
			<footer>
				<a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534"><img src="images/facebook_like.png" alt="Like Us on Facebook" class="facebooklikefooter"></a>
				<img src="images/index/TCC83100.png" alt="" width="83" height="100" class="councilimgindex"/>
				<img src="images/index/GCBF15091.gif" alt="" width="150" height="92" class="qldgovindeximg"/>
				<br>Contact<br>
				Phone: 07 4724 2086 <br> Mobile: 04 0225 5182<br>
				Email: <a href="mailto:admin@townsvillemusic.org.au">admin@townsvillemusic.org.au</a><br><br>
				&copy; Townsville Community Business Centre
			</footer>
		</div>
	</body>
</html>