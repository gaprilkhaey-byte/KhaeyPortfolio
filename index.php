
<?php

// personal information ni diri hagooa sir oy gabalik ko ba pero sige g0
// why mo gamit ta aning  ngani na sign $ para dita mag tagsa2 og type ana sa atong code, ato na sya ibutang sa variables para ma reuse ra 

$name = "April Khaey Guibone";
$aboutme = "Hi! You can call me Khaey. I am 20 years old and from Mandaue City, Cebu. I am currently studying at Mater Dei College, taking up Information Technology. I consider myself a curious and adventurous person who enjoys cooking, traveling, and discovering new things. I may still be learning and improving my programming skills, but I am always willing to challenge myself, learn from my mistakes, and grow both personally and academically.";

// educ. background

$elemeduc = "Tabok Elementary School 2012-2018";
$hseduc = "Tabok National High School 2018-2022";
$shseduc = "Southwestern University PHINMA 2022-2024";
$collegeeduc = "Mater Dei College (Current)";


// eme eme na skills 

$skill1 = "Communication Skills";
$skill2 = "Adaptability";
$skill3 = "Willingness to Learn";
$skill4 = "Basic HTML and CSS";
$skill5 = "Attention to Detail";


// fr fr jud ni nako na hobbies sir ha

$hobby1 = "Cooking";
$hobby2 = "Learning New Skills";
$hobby3 = "Traveling";
$hobby4 = "Listening to Music";
$hobby5 = "Designing and Creating";


// contact info.

$email = "gaprilkhaey@gmail.com";
$phone = "09268261476";

?>

<!-- diri nata mag sugod ang bukog -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khaey | Personal Portfolio</title>

    <!-- Connect CSS file of course e connect jud na nato sa css para dili ra bukog -->
    <link rel="stylesheet" href="kaye.css">

</head>

<body>

    <!-- navigation but dijud na sya mo navigate sir ha eme2 ragud adto ni sya mo display sa pinaka babaw -->

    <header class="navbar">
        <h2>KHAEY</h2>
        <span>PERSONAL PORTFOLIO / 2026</span>
    </header>

<!-- mao ni nagunit sa tanan -->
    <main class="container">


        <!-- introduction section -->

        <section class="hero"> <!-- main introduction section -->

            <div class="hero-text"> <!-- maoni mag group sa text together -->

                <p class="eyebrow">HELLO, WELCOME TO MY SPACE</p>
                <h1>I'm <span><?php echo htmlspecialchars($name); ?></span></h1>
                <p class="description"><?php echo htmlspecialchars($aboutme); ?></p>
<!-- kani sya diri mao ni ang welxome message, diri nato gigamit ang mga variables na gi creat nato ganina -->
            </div>


            <!-- profile ni di akong pic ako gamit sir kay murag makaguba syas website and IDK jud unssaon pag resize mo dako jud sya ay baw lang jud please consider nlang na -->

            <div class="hero-decoration">

                <div class="profile-frame">

                    <img
                        src="kaye.jpg"
                        alt="Profile picture of April Khaey Guibone"
                        class="profile-photo"
                    >

                </div>

                <div class="initials">
                    AKG
                </div>

                <p>
                    Curious mind.<br>
                    Creative soul.
                </p>

                <span>BASED IN THE PHILIPPINES</span>

            </div>

        </section>



        <!-- education background ni madam  -->

        <section class="section">

            <div class="section-heading">

                <span>01 / BACKGROUND</span>

                <h2>Education</h2>

            </div>

            <div class="card-grid">


                <!-- ELEMENTARY -->

                <div class="info-card">

                    <span class="number">01</span>

                    <h3>Elementary</h3>

                    <p>
                        <?php echo htmlspecialchars($elemeduc); ?>
                    </p>

                </div>

                <!-- high school -->

                <div class="info-card">

                    <span class="number">02</span>

                    <h3>High School</h3>

                    <p>
                        <?php echo htmlspecialchars($hseduc); ?>
                    </p>

                </div>


                <!-- SENIOR HIGH SCHOOL -->

                <div class="info-card">

                    <span class="number">03</span>

                    <h3>Senior High School</h3>

                    <p>
                        <?php echo htmlspecialchars($shseduc); ?>
                    </p>

                </div>


                <!-- COLLEGE -->

                <div class="info-card">

                    <span class="number">04</span>

                    <h3>College</h3>

                    <p>
                        <?php echo htmlspecialchars($collegeeduc); ?>
                    </p>

                    <span class="status">
                        Currently Studying
                    </span>

                </div>

            </div>

        </section>



        <!-- skills and interest ni madam -->

        <section class="section two-columns">


            <!-- SKILLS BOX -->

            <div class="content-panel">

                <div class="section-heading">

                    <span>02 / WHAT I CAN DO</span>

                    <h2>Skills</h2>

                </div>


                <ul class="item-list">

                    <li><?php echo htmlspecialchars($skill1); ?></li>

                    <li><?php echo htmlspecialchars($skill2); ?></li>

                    <li><?php echo htmlspecialchars($skill3); ?></li>

                    <li><?php echo htmlspecialchars($skill4); ?></li>

                    <li><?php echo htmlspecialchars($skill5); ?></li>

                </ul>

            </div>



            <!-- HOBBIES AND INTERESTS BOX -->

            <div class="content-panel hobby-panel">

                <div class="section-heading">

                    <span>03 / BEYOND THE SCREEN</span>

                    <h2>My Interests</h2>

                </div>


                <ul class="item-list">

                    <li><?php echo htmlspecialchars($hobby1); ?></li>

                    <li><?php echo htmlspecialchars($hobby2); ?></li>

                    <li><?php echo htmlspecialchars($hobby3); ?></li>

                    <li><?php echo htmlspecialchars($hobby4); ?></li>

                    <li><?php echo htmlspecialchars($hobby5); ?></li>

                </ul>

            </div>


        </section>



        <!-- contact me -->

        <section class="contact-section">

            <p class="eyebrow">
                04 / LET'S CONNECT
            </p>

            <h2>Have something in mind?</h2>

            <p>
                Feel free to reach out. I'd love to connect!
            </p>

<!-- kanang div ang gamit ana niya mura na syag box or container sya nag mag group sa elements together for easy designing like ma desigra sya into one section -->
            <div class="contact-details">

                <a href="mailto:<?php echo htmlspecialchars($email); ?>">

                    <?php echo htmlspecialchars($email); ?>

                </a>


                <a href="tel:<?php echo htmlspecialchars($phone); ?>">

                    <?php echo htmlspecialchars($phone); ?>

                </a>

            </div>

        </section>


    </main>



    <!-- tiil char footer sa last part yan sya  -->

    <footer>

        <p>
            © 2026 Khaey's Portfolio. Designed with curiosity.
        </p>

    </footer>


</body>

</html>
