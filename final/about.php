<?php
	session_start();
	error_reporting(E_ALL);
	
	if (++$_SESSION['lastRegeneration'] >= 10) {
		$_SESSION['last_regeneration'] = 0;
		session_regenerate_id(true);
	}
?>
<!DOCTYPE HTML><html>
    <head>
        <title>About Us</title>
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
            <h1 id="about">About The Townsville Music Centre</h1>
            <div class="content"><h2>Contact Details</h2>
                <table>
                    <tr><td class="left">Phone:</td><td class="right">07 4724 2086</td></tr>
                    <tr><td class="left">Mobile:</td><td class="right">04 0225 5182</td></tr>
                    <tr><td class="left">Email:</td><td class="right"><a href="mailto:admin@townsvillemusic.org.au">admin@townsvillemusic.org.au</a></td></tr>
                    <tr><td class="left">Postal Address:</td><td class="right">PO Box 1006, Townsville, QLD 4810</td></tr>
                    <tr><td class="left">Address:</td><td class="right">Townsville Civic Theatre, 41 Boundary Street, Townsville, QLD 4810</td></tr>
                </table>
            </div>
            <div class="content"><h2>Sponsors</h2>
                <p>The Music Centre receives vital support from the sponsors featured on this page. Our music concerts are well-publicised and well-attended and sponsors enjoy brand exposure throughout the Arts community. We welcome sponsorship or assistance in any form.</p>
                <h3>Townsville City Council</h3>
                <img class="sponsor" alt="Townsville City Council Logo" src="images/about/TCC.jpg">
                <p class="sponsor">The Council's Partnerships and Sponsorships scheme provides vital core funding which enables us to maintain the administrative base for all our other activities, and also provides the premises which house our office space.</p>
                <p class="sponsor">The Council also assists with the performance venues for our concerts and workshops.</p>
                <h3>Queensland Government</h3>
                <img class="sponsor" alt="Queensland Government Logo" src="images/about/QLDGov.jpg">
                <p class="sponsor">The Gambling Community Benefit Fund has assisted us to obtain office equipment and sound and lighting equipment for our productions.</p>
            </div>
            <div class="content"><h2>A Brief History</h2><h3>by Jean Dartnall</h3>
                <table>
                <tr><td>1983 </td><td>The Townsville Community Music Centre was established at a public meeting on May 24th. Then Deputy Mayor, Ken McElligott, opened the meeting and presented a cheque for $50 from the City Council to cover initial petty cash, the Centre's first funds. At the meeting an executive committee was formed. Over the next few weeks that committee drafted a constitution which was endorsed at another public meeting on June 15th. Fred Thompson was Chairman from September 1983, with Gordon Dean as his Deputy and Jan Eagleton as Secretary.</td></tr>
                <tr><td>1984 </td><td>Mira Henderson, who had extensive experience in community music work in England, was the first staff member. (Her position was Acting Director because she was only in Townsville for a brief spell.) She instigated a series of classes starting in 1984 using the skills of people living in Townsville to enhance and encourage music learners of all ages.</td></tr>
                <tr><td>1985 </td><td>Kirsty Veron was appointed as the first Director. Kirsty was very interested in teaching music to children and had worked with Mira in the 1983 classes. She held this position until 1988 leading the new organisation into a strong position in the Townsville arts community.</td></tr>
                <tr><td>1986 </td><td>The Music Centre produced Benjamin Britten's Noyes Fludde in St James Anglican Cathedral. This involved hundreds of children and some of Townsville's best known (and loved) musicians. It was produced by Rachel Berker (now Rachel Matthews) and involved Bernie Lannigan and Sandra Voss in the main parts rehearsed by Bill Williams; Donna McMahon and Jenny Carr rehearsing the strings and recorders and guest conductor Donald Hollier. This was by the no means the only major production mounted by the Music Centre but was probably the largest.</td></tr>
                <tr><td>1987 </td><td>This was the year of the first fund raising dinner. These dinners became a tradition as they were a wonderful mixture of good food, good wine and good music. The first ones were held at the home of Paul and June Tonnoir in North Ward. Later they moved to the Bishop's Lodge as guests of the Anglican Bishop. Attendees would often book their tickets for the next year's dinner as soon as they had attended this one. They ran until 2004.</td></tr>
                <tr><td>1988 </td><td>Mary Lou Schoenfeldt was appointed as Administrator. Although this was initially a small part time job with limited responsibilities, Mary Lou made the job, the Centre and indeed music in Townsville, her own. She was a wonderful asset to the Centre and to the cultural life of the City until she had to retire due to ill health in 2003.</td></tr>
                <tr><td>1990 </td><td>This year the first lunchtime concert was held at the PercTucker Gallery. The importance of providing performance opportunities for emerging musicians had become evident and from this time, for a number of years, one of the major activities of the Centre was the production and management of concerts.</td></tr>
                <tr><td>1999 </td><td>Arts Queensland had been a major funder of Music Centre activities for a number of years but in this year they agree to provide funding on a three year basis. This made it much easier for the Centre to plan ahead and reduced the time that had to be spent on repetitive grant applications. This arrangement ran until 2004.</td></tr>
                <tr><td>2003 </td><td>A spectacular variety concert was held at the Townsville Civic Theatre to celebrate twenty years of the Music Centre and as a tribute to May Lou.</td></tr>
                <tr><td>2005 </td><td>The Centre moved to offices in the Old Magistrate's Court.</td></tr>
                <tr><td colspan="2">More details of the period 1983 - 2008 can be found in the book, "Townsville Community Music Centre: some memories of the first 25 years" by Jean Dartnall. (Copies available from the Music Centre)</td></tr>
                <tr><td>2012 </td><td>The Centre moved to its present office in the Townsville Civic Theatre building.</td></tr>
                </table>
            </div>
            <footer>
                <a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534"><img src="images/facebook_like.png" alt="Like Us on Facebook" class="facebooklikefooter"></a>
                <img src="images/index/TCC83100.png" alt="" width="83" height="100" class="councilimgindex"/>
                <img src="images/index/GCBF15091.gif" alt="" width="150" height="92" class="qldgovindeximg"/>
                <br>Contact<br>
                Phone: 07 4724 2086 <br> Mobile: 04 0225 5182 <br>
                Email: <a href="mailto:admin@townsvillemusic.org.au">admin@townsvillemusic.org.au</a><br><br>
                &copy; Townsville Community Business Centre
            </footer>
        </div>
    </body>
</html>