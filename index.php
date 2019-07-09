<!DOCTYPE html>
<html lang="en">
<head>
    <title>Portfolio | Thomas George</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Karla|Roboto" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="apple-touch-icon-152x152.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="img/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="img/favicon-196x196.png" sizes="196x196" />
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/mobile.css">
    <meta name="theme-color" content="#222">
    <link rel="icon" type="image/png" href="img/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link rel="icon" type="image/png" href="img/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <meta name="msapplication-TileImage" content="img/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="img/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="img/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="img/mstile-310x150.png" />
    <meta name="msapplication-square70x70logo" content="img/mstile-70x70.png" />
</head>

<body>
<div id="container">
    <div id="paypal-coffee" class="hidden">
        <div class="center-div center">
        <i class="fas fa-times timesExit" onclick="hideCoffee()"></i>
        <div id="left-paypal-coffee">
            <i class="fas fa-coffee"></i>
        </div>
        <div id="right-paypal-coffee">
            <div id="right-top-paypal-coffee">
                Like the site?  Donate some coffee!
            </div>
            <div id="right-bottom-paypal-coffee">
                <div>
                       <input type="radio"  onclick="submitPaypal()" name="coffeePrice" value="5"> Starbucks Coffee <input type="radio"  onclick="submitPaypal()" name="coffeePrice" id="twofifty" value="2.50">  <label for="twofifty">Regular Coffee</label> <input type="radio" name="coffeePrice"  onclick="submitPaypal()" id="onefifty"> <label for="onefifty">Gas Station Coffee</label>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div id="head-banner">
        <div class="overlay">
            <div class="center-div">
				<span id="head-logo">
					<img src="img/mstile-310x310.png" alt="Thomas George Portfolio">
				</span>
                <div id="head-ul-span" class="right non-mobile">
					<ul >
						<li><a href="#about">About</a></li>
						<li><a href="http://blog.thethomasgeorge.com/" target="_blank">Blog</a></li>
						<li><a href="#jobs">Experience</a></li>
						<li><a href="#work">Projects</a></li>
						<li><a href="#social">Social</a></li>
					</ul>
				</div>
                <div id="mobile-ul-span" class="right mobile">
					<i class="fas fa-bars" id="bars"></i>
					<ul class="hidden" id="mobile-ul">
						<i class="fas fa-times" id="hide-mobile-menu"></i>
						<li><a class="hide-mobile-menu" href="#about">About</a></li>
						<li><a class="hide-mobile-menu" href="#jobs">Experience</a></li>
						<li><a class="hide-mobile-menu" href="#work">Projects</a></li>
						<li><a class="hide-mobile-menu" href="#social">Social</a></li>
					</ul>
				</div>
                <div class="center-div center" id="profile">
                    <img src="img/myProfile.jpg" id="my-image" alt="Thomas George Profile">
                    <h1>Thomas George</h1>
                    <h2>Full-Stack Web Developer</h2>
                </div>
            </div>

        </div>
    </div>
    <div id="hidden-info" class="hidden">
        <div class="hidden project-display" id="ergo-box">
            <div style="background-image:url('img/ergo.png')" class="left-div">
            </div>
            <div class="right-div">
                <h2>Ergo</h2>
                <h3>Google Keep Re-design</h3>
                <p></p>
                <a href="" class="disabled">View Website</a>
            </div>
        </div>
        <div class="hidden project-display" id="topnotch-box">
            <div style="background-image:url('img/New Project(1).png')" class="left-div">

            </div>
            <div class="right-div">
                <h2>Top Notch</h2>
                <h3>In-class Educational Resource Software</h3>
                <p></p>
            </div>
        </div>
    </div>
    <div class="center-div" style="overflow:hidden;">
        <div class="hidden">
            <i class="far fa-moon background-icons hideOnMobile" id="moon-hover" onclick="darkMode()"></i>
            <i class="fas fa-coffee background-icons hideOnMobile" id="coffee-hover" onclick="displayPaypalCoffee()"></i>
            <i class="fas fa-compact-disc background-icons hideOnMobile" id="vinyl-hover" onclick="displayRecordPlayer()"></i>
            <i class="fas fa-donate background-icons hideOnMobile" id="donate-hover" onclick="displayCodeOfVets()"></i>
        </div>
        <div class="center">
            <h2 class="head-title">About Me</h2>
        </div>
        <div class="center-div center">
            <p>
                My Name is Thomas George, i'm a Full Stack Web Developer with over 8 years experience brainstorming, building, and maintaining business-level software.  I believe in websites and software should each have a unique brand that expresses its unique talent just like people have personalities.  My passion is bringing ideas never thought possible to life with the use of code and a little ingenuity.
            </p>
        </div>
        <div class="center">
            <h2 class="head-title">Professional Experience</h2>
        </div>
        <div id="jobs">
        	<div class="job-row">
        		<h3 class="center">BPO USA LLC | <i>Full-Stack Developer</i></h3>
        		<div class="center">
        			<small class="center">May 2019 - Present</small>
        		</div>
                <div class="center">
                    <b>Tools Used:</b> Visual Studio Code, Github, HTML5, PHP7, CSS, Javascript, jQuery
                </div>
                <ul>
                    <li>Work with an established team of developers and interact with product managers, marketing teams and designers</li>
                    <li>Makes recommendations towards the development of new code or reuse of existing code</li>
                    <li>Oversee a group of developers to make sure projects and tasks get completed in a timely manner</li>
                </ul>
        	</div>
            <div class="job-row">
                <h3 class="center">Mossy Oak Properties, West Point, MS | <i>Junior Software Engineer</i></h3>
                <div class="center">
                    <small class="center">August 2018 - May 2019</small>
                </div>
                <div class="center">
                    <b>Tools Used:</b> Visual Studio, WordPress, Javascript, C#, ASP.NET, HTML5, REST APIs, MySQL
                </div>
                <ul>
                    <li>Integrated data from various back-end services to better connect tools and services.</li>
                    <li>Writing well-designed, testable, and efficient code by using best programming practices.</li>
                </ul>
            </div>

            <div class="job-row">
                <h3 class="center">Mabus Agency, Tupelo, MS | <i>Full-Stack Web Developer</i></h3>
            </div>
            <div class="center">
                <small class="center">January 2018 - April 2018</small>
            </div>
            <div class="center">
                <b>Tools Used:</b> WordPress, Github, PHP Storm, Java, C++, HTML5, CSS3, PHP7, Javascript
            </div>
            <ul>
                <li>Work with other departments, stakeholders, and customers on software development improvements, and implementation issues</li>
                <li>Participate in specification, design implementation, and support of the product as well as improved on existing features</li>
            </ul>

            <div class="job-row">
                <h3 class="center">Mississippi State University, MS | <i>Front-end Web Developer</i></h3>
                <div class="center">
                    <small class="center">January 2015 - December 2017</small>
                </div>
                <div class="center">
                    <b>Tools Used:</b> Java, HTML5, CSS3, Postgres SQL Server, Python, PHP, Sublime Text Editor, REST APIs, PHP Storm
                </div>
                <ul>
                    <li>Implement responsible web design principles to ensure that our company website renders well across multiple devices.</li>
                    <li>Monitor website performance, watch for traffic drops related to site usability problems and rectify the issues.</li>
                </ul>
            </div>
            <div class="job-row">
                <h3 class="center">Mississippi State University, MS | <i>Computer Technician</i></h3>
                <div class="center">
                    <small class="center">January 2014 - August 2015</small>
                </div>
                <div class="center">
                    <b>Tools Used:</b> CCleaner, Sophos Antivirus, Malwarebytes, Windows Installer
                </div>
                <ul>
                    <li>Setting up hardware and installing while also configuring software and drivers.</li>
                    <li>Maintaining and repairing technological equipment (e.g. routers) or peripheral devices.</li>
                </ul>
            </div>

            <div class="job-row">
                <h3 class="center">SociallyIn, Starkville, MS | <i>Full-Stack Web Developer</i></h3>
                <div style="text-align:center">
                    <small class="center">February 2013 - February 2014</small>
                </div>
                <div class="center">
                    <b>Tools Used:</b> Hubspot, PHP, REST APIs, Sublime Text Editor
                </div>
                <ul>
                    <li>Designed and built email templates for WordPress and Hubspot</li>
                    <li>Conducted research on product themes and templates</li>
                </ul>
            </div>

            <div class="job-row">
                <h3 class="center">Wood Industries, Belmont, MS | <i>Back-end Web Developer</i></h3>
                <div class="center">
                    <small class="center">February 2012 - February 2013</small>
                </div>
                <div class="center">
                    <b>Tools Used:</b> WordPress, PHP, HTML, CSS, Joomla, MySQL, C++
                </div>
                <ul>
                    <li>Develop and insert data into databases that support web applications and websites.</li>
                    <li>Develop and document style guidelines for website content.</li>
                </ul>
            </div>
        </div>
        <div class="center">
            <h2 class="head-title">Education</h2>
        </div>
        <div id="education">
            <div class="education-row">
                <h3>Mississippi State Unversity</h3>
                <ul>
                    <li>Planned Graduation: 2019</li>
                    <li>Major: Computer Engineering</li>
                    <li>Minors: Business, German, and Entrepreneurship</li>
                </ul>
            </div>
            <div class="education-row">
                <h3>Itawamba Community College</h3>
                <ul>
                    <li>Graduation: 2014</li>
                    <li>Major: Computer Science</li>
                </ul>
            </div>
            <div class="education-row">
                <h3>Hatley Hight School</h3>
                <ul>
                    <li>Graduation: 2012</li>
                    <li>Received High School Diploma</li>
                </ul>
            </div>
        </div>

        <div class="center">
            <h2 class="head-title">Current Projects</h2>
        </div>
        <div id="current" class="center center-div">
            <a href="#ergo-div" title="More Information">
                <div class="project-box" id="ergo" style="background-image: url('img/ergo.png')">
                    <i class="fab fa-github-alt onGitHub light" style="position: absolute;bottom: 0;right: 0;font-size: 35px;box-sizing: border-box;margin: 6px 9px;/*! float: right; */"></i>
                </div>
            </a><a href="#glory-div" title="More Information">
                <div class="project-box" id="glory" style="background-image: url('img/New Project (1).png')">
                </div>
            </a><a href="#moolah-div" title="More Information">
                <div class="project-box" id="moolah" style="background-image: url('img/moolah.png')">
                </div>
            </a>
        </div>

        <div class="center">
            <h2 class="head-title">Previous Projects</h2>
        </div>
        <div id="work"><!--
			<a href="#cruise-div" title="More Information">
				<div class="project-box" id="cruise" style="background-image: url('img/cruise2.png')">
				</div>
			</a>-->
            <a href="#topnotch-div" title="More Information">
                <div class="project-box" id="topnotch" style="background-image: url('img/New Project(1).png')">

                </div>
            </a>
            <a href="#ttl-div" title="More Information">
                <div class="project-box" id="ttl" style="background-image: url('img/17854922_1251982241521936_8519234958610297504_o.jpg');">

                </div>
            </a>
            <a href="#reach-div" title="More Information">
                <div class="project-box" id="reach" style="background-image: url('img/reach.png')">

                </div>
            </a>
            <a href="#merge-div" title="More Information">
                <div class="project-box" id="merge" style="background-image: url('img/New Project (2).png')">

                </div>
            </a>
            <a href="#rotg-div" title="More Information">
                <div class="project-box" id="rotg" style="background-image: url('img/rotg.jpg')">

                </div>
            </a><!--
			<a href="#mla-div" title="More Information">
				<div class="project-box" id="mla" style="background-image: url('img/New Project (3).png')">

				</div>
			</a>
			<a href="#kreadiv-div" title="More Information">
				<div class="project-box" id="kreadiv" style="background-image: url('img/New Project (5).png')">

				</div>
			</a>-->
            <a href="#bibliotaf-div" title="More Information">
                <div class="project-box" id="bibliotaf" style="background-image: url('img/New Project (4).png')">

                </div>
            </a>
            <a href="#validate-div" title="More Information">
                <div class="project-box" id="validate" style="background-image: url('img/New Project (7).png')">

                    <i class="fab fa-github-alt onGitHub light" style="position: absolute;bottom: 0;right: 0;font-size: 35px;box-sizing: border-box;margin: 6px 9px;/*! float: right; */"></i>
                </div>
            </a>
            <a href="#urge-div" title="More Information">
                <div class="project-box" id="urge" style="background-image: url('img/New Project (6).png')">

                </div>
            </a>
            <div class="project-box" id="heap" style="background-image: url('img/heap2.png')">

            </div>
            <!--
<div class="project-box" id="wishful" style="background-image: url('New Project (8).png')">

</div>-->
        </div>
    </div>
    <div id="hidden-projects">
        <div id="urge-div" class="hidden project-info">
            <div class="center-div">
                <div style="background-image:url('img/New Project (6).png')" class="logo-info">

                </div>
                <div class="logo-text">
                    <h3>Automated Marketing Software</h3>
                    <p></p>
                </div>

            </div>
        </div>
        <div id="validate-div" class="hidden project-info">
            <div class="center-div">
                <div style="background-image:url('img/New Project (7).png')" class="logo-info">

                </div>
                <div class="logo-text">
                    <h3>Web Analytics Software</h3>
                    <p>The purpose of this project came to me when I was having trouble with Google Analytics and getting it to show me relevant and detailed steps that I can take to improve my traffic based on what my traffic was currently made up of.</p>
                    <a href="#" title="Link Coming Soon" class="visit-a">Link Coming Soon..</a>
                </div>

            </div>
        </div>
        <div id="bibliotaf-div" class="hidden project-info">
            <div class="center-div">
                <div style="background-image:url('img/New Project (4).png')" class="logo-info">

                </div>
                <div class="logo-text">
                    <h3>Book Lending Website</h3>
                    <p>I thought of this idea one day when I was reading, and thought about how it would be neat to share your books with others once you have read them for a small fee (+shipping).</p>
                    <a href="#" title="Link Coming Soon" class="visit-a">Link Coming Soon..</a>
                </div>

            </div>
        </div>
        <div id="kreadiv-div" class="hidden project-info">
            <div class="center-div">
                <div style="background-image:url('img/New Project (5).png')" class="logo-info">

                </div>
                <div class="logo-text">
                    <h3>Website Designs & Themes</h3>
                    <p></p>
                </div>

            </div>
        </div>
        <div id="mla-div" class="hidden project-info">
            <div class="center-div">
                <div style="background-image:url('img/New Project (3).png')" class="logo-info">

                </div>
                <div class="logo-text">
                    <h3>Online Tactical Store</h3>
                    <p></p>
                </div>

            </div>
        </div>
        <div id="rotg-div" class="hidden project-info">
            <div class="center-div">
                <div style="background-image:url('img/rotg.jpg')" class="logo-info">

                </div>
                <div class="logo-text">
                    <h3>Remote Job Listing Board</h3>
                    <p>Remote On The Go gives people the ability to find them a dream job that enables work while traveling the world.</p>
                    <a href="https://www.remoteonthego.com/?portfolio" target="_blank" id="rotg-button" title="Visit Remote On The Go" class="visit-a">Visit Site</a>
                </div>

            </div>
        </div>
        <div id="merge-div" class="hidden project-info">
            <div class="center-div">
                <div style="background-image:url('img/New Project (2).png')" class="logo-info">

                </div>
                <div class="logo-text">
                    <h3>Social Media Automation Platform</h3>
                    <p></p>
                </div>

            </div>
        </div>
        <div id="reach-div" class="hidden project-info">
            <div class="center-div">
                <div style="background-image:url('img/reach.png')" class="logo-info">

                </div>
                <div class="logo-text">
                    <h3>Text-based Marketing Platform</h3>
                    <p>I was contracted by a company in Minnesota to build this online software.  The goal was to create a text-based marketing application that revolved around subscription-based pricing plan.</p>
                    <a href="#" title="Link Coming Soon" class="visit-a">Link Coming Soon..</a>
                </div>
            </div>
        </div>
        <div id="ttl-div" class="hidden project-info">
            <div class="center-div">
                <div style="background-image:url('img/17854922_1251982241521936_8519234958610297504_o.jpg')" class="logo-info">

                </div>
                <div class="logo-text">
                    <h3>Teacher Lesson Plan Marketplace</h3>
                    <p>The thought to have a Lesson Plan marketplace was seeing my friends that were teachers build these amazing projects and activties for their kids while having to throw them all away or put them in storage until next year.  All those activites.  Just lying in the garbage or storage.  So I thought of a way to put them all to good use.  Create a database of goods for the teachers to buy and sell. </p>
                    <a href="#" class="visit-a" title="Link Coming Soon">Link Coming Soon..</a>
                </div>

            </div>
        </div>
        <div id="topnotch-div" class="hidden project-info">
            <div class="center-div">
                <div style="background-image:url('img/New%20Project(1).png')" class="logo-info">

                </div>
                <div class="logo-text">
                    <h3>University-based Education Software</h3>
                    <p>They say <i>Innovation comes from struggle</i>, and well... I built this one specifically because the current education platform my University was using was sub-par and I wanted to design my own platform for the Student and the Teacher to come together in one place to grow, learn, and understand each topic.</p>
                    <a href="http://www.thethomasgeorge.com/topnotch" target="_blank" id="topnotch-button" title="Visit Top Notch University" class="visit-a	">Visit Site</a>

                </div>

            </div>
        </div>
        <div id="cruise-div" class="hidden project-info">
            <div class="center-div">
                <div style="background-image:url('img/cruise2.png')" class="logo-info">

                </div>
                <div class="logo-text">
                    <h3>Car Dealership Landing Page Software</h3>
                    <p></p>
                </div>

            </div>
        </div>
        <div id="moolah-div" class="hidden project-info">
            <div class="center-div">
                <div style="background-image:url('img/moolah.png')" class="logo-info">

                </div>
                <div class="logo-text">
                    <h3>Shopify/WordPress Rewards App</h3>
                    <p></p>
                </div>

            </div>
        </div>
        <div id="glory-div" class="hidden project-info">
            <div class="center-div">
                <div style="background-image:url('img/New%20Project%20(1).png')" class="logo-info">

                </div>
                <div class="logo-text">
                    <h3>Church Event Organizer</h3>
                    <p></p>
                </div>

            </div>
        </div>
        <div id="ergo-div" class="hidden project-info">
            <div class="center-div">
                <div style="background-image:url('img/ergo.png')" class="logo-info">

                </div>
                <div class="logo-text">
                    <h3>Google Keep Re-design</h3>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <div id="social">
        <div class="center center-div">
            <!-- Facebook -->
            <a href="cv.pdf" target="_blank" title="CV">
                <i class="far fa-file"></i>
            </a>
            <a href="https://www.facebook.com/thethomasgeorge" target="_blank" title="Facebook">
                <i class="fab fa-facebook-square"></i>
            </a>
            <a href="https://m.me/thethomasgeorge" target="_blank" title="Facebook Messenger">
                <i class="fab fa-facebook-messenger"></i>
            </a>
            <a href="https://www.twitter.com/thetwgeorge" target="_blank" title="Twitter">
                <i class="fab fa-twitter-square"></i>
            </a>
            <a href="https://codepen.io/thethomaswgeorge/" target="_blank" title="CodePen">
                <i class="fab fa-codepen"></i>
            </a>
            <a href="https://github.com/thethomaswgeorge" target="_blank" title="Github">
                <i class="fab fa-github-square"></i>
            </a>
            <a href="https://www.instagram.com/thethomasgeorge/" target="_blank" title="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/in/twgeorge1994/" target="_blank" title="Linkedin">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://www.youtube.com/channel/UCneRLXtAzwXOc_1mx-0iQlg" target="_blank" title="Youtube">
                <i class="fab fa-youtube-square"></i>
            </a>
            <a href="http://t.me/thethomasgeorge" target="_blank" title="Telegram">
                <i class="fab fa-telegram"></i>
            </a>

        </div>
    </div><!--
	<div id="contact">
		<div class="center-div">
			<form action="" method="post">
				<input type="text" name="Name" required="required" placeholder="First & Last Name" class="form-input">
				<input type="email" name="Email" placeholder="E-mail Address" class="form-input" required="required">
				<select name="reason" required="required" class="form-input">
					<option value="">Reason for contacting</option>
					<option value="jobOffer">Job Offer</option>
					<option value="projectCreate">Create a New Project Proposal</option>
					<option value="other">Other</option>
				</select>
				<textarea placeholder="Enter Message.." required="required" name="Message" style="height: 150px;" class="form-input"></textarea>
				<input type="submit" value="Send Message">
			</form>
		</div>
	</div>-->
    <div id="footer">
        <div class="center-div center">
            <small>Copyright &copy; <?php echo date("Y"); ?> | Created and Owned by Thomas George | Fonts by <a href="fonts.google.com" target="_blank" title="Google Fonts">Google Fonts</a> | Icons by <a href="https://fontawesome.com/" target="_blank" title="FontAwesome">FontAwesome</a> | Stock Image by <a href="https://www.pexels.com/photo/close-up-of-computer-keyboard-248515/" target="_blank" title="Pexels">Pexels</a></small>
        </div>
    </div>
</div>
</body>
<footer>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>
    <script>

    </script>
</footer>
</html>