<?php
include_once('connection.php');
include_once('register.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kathmandu BernHardt College</title>

    <link rel="stylesheet" href="./style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="icon" type="image/x-icon" href="images/fav.jpg">
</head>

<body>

    <section class="header">
        <nav>
            <a href="index.php"><img src="images/logo.jpg" alt="logo"></a>

            <div class="nav-links" id="navlinks">
                <i class="fa fa-times" onclick="hidemenu()"></i>
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="#about-section">ABOUT</a></li>
                    <li><a href="#course1">COURSE</a></li>
                    <li><a href="#blogid">BLOG</a></li>
                    <li><a href="#contactid">CONTACT</a></li>
                    <li><a href="login.php">Login/Signup</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showmenu()"></i>
        </nav>

        <div class="text-box">

            <h1>BernHardt College</h1>

            <p>We don’t just give students an education and experiences that set them up for success in a career.
                We help them succeed in their career<br>—to discover a field they’re passionate about and dare to lead it.</p>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSflE4bh96BuKa46dtbMhtBHYbu0cA36DsFFDfiU97HG8a6GTQ/viewform" class="submit-btn">Apply For Admission</a>

        </div>

    </section>


    <!-- --------course------- -->

    <section class="course" id="course1">

        <h1>Course We Offer</h1>
        <p>BernHardt aims at becoming one of the most preferred colleges in Nepal. </p>

        <div class="row">
            <div class="course-col">
                <h3>Intermediate</h3>
                <p>Nursery to grade X</p>
                <p>+2 Science</p>
                <p>+2 Management</p>
                <p>+2 Humanities</p>
            </div>
            <div class="course-col">
                <h3>Bachelor's Degree</h3>
                <ol>
                    <p>Bacelor of Science, Computer Science and Information Technology[BSc CSIT]</p>
                    <p>Bachelor of Computer Application[BCA]</p>
                    <p>Bachelor of Business Management[BBM]</p>
                    <p>Bachelor of Arts in Social Work [BASW]</p>
                    <p>Bachelors in Business Studies[BBS]</p>

                </ol>
            </div>
            <div class="course-col">
                <h3>Post Graduation</h3>
                <p>Master of Business Studies[MBS]</p>
            </div>
        </div>

    </section>

    <!-- ----------------- About Our College ------------------ -->

    <section class="college">

        <h1>Our Kathmandu BernHardt College</h1>
        <p>BernHardt College BernHardt is a unique institution designed to disseminate quality education to students. </p>

        <div class="row">

            <div class="college-col">

                <img src="images/bafal_college.jpg" alt="image">
                <div class="layer">
                    <h4>Bernhardt Bafal</h4>
                </div>

            </div>

            <div class="college-col">

                <img src="images/bg.jpg" alt="image">
                <div class="layer">
                    <h4>Bernhardt Balkhu</h4>
                </div>

            </div>

            <div class="college-col">

                <img src="images/colle.jpg" alt="image">
                <div class="layer">
                    <h4>Bernhardt</h4>
                </div>

            </div>

        </div>

    </section>

    <section class="facilities">


        <h1>Our facilities</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>

        <div class="row">

            <div class="facilities-col">
                <img src="images/library.png" alt="image">
                <h4>Information Technology</h4>
                <p>Improved Communication. The continuous advances in technology have led to the appearance of numerous new methods of electronic communication, such as social networking websites, emails, voicemails, and video conferences. ...</p>
            </div>

            <div class="facilities-col">
                <img src="images/winners.jpg" alt="image">
                <h4>Sporting events</h4>
                <p>Sport includes all forms of competitive physical activity or games which, through casual or organized participation, at least in part aim to use, maintain or improve physical ability and skills while providing enjoyment to participants, and in some cases, entertainment for spectators.</p>
            </div>

            <div class="facilities-col">
                <img src="images/cafeteria.png" alt="image">
                <h4>Healthy, tasty and hygenic food</h4>
                <p>Good personal hygiene can prevent food poisoning. Bacteria that cause food poisoning can be on everyone – even healthy people. You can spread bacteria from yourself to the food if you touch your nose, mouth, hair or your clothes, and then food. Good personal hygiene also makes good business s…</p>
            </div>

        </div>

    </section>

    <section class="blog" id="blogid">

        <h1>What Our Students Say</h1>
        <p>Kathmandu BernHardt College has been proved as the milestone of quality education in the Western part of Kathmandu valley since 2060 B.S. No any obstacles have detained it marching steps toward quality education up to now. It is possible with the proper coordination of all its stakeholders.
        </p>

        <div class="row">

            <div class="blog-col">
                <img src="images/student1.jpg" alt="image">
                <div>
                    <p>Learning with BernHardt:
                        Learning with BernHardt made me realise true meaning of learning.
                        Learning gets to the heart of what it means to be human. 
                        It is through learning that we continuously recreate ourselves and become 
                        able to do things we were never able to do before.
                        Learning enables us to perceive the world afresh and our relationship to it. 
                        As we learn so we further extend our capacity to create, to be part of the generative process of life itself.
                        I was able to enjoy the process of learning and were able to sharpen my communication skills and
                        were able to make many awesome friends in the process who helped me in my learning journey.
                    </p>
                    <h4>Kushal Rijal</h4>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
            </div>

            <div class="blog-col">
                <img src="images/student2.jpg" alt="image">
                <div>
                    <p>True Meaning of learning........
                        True Meaning of learning for life since its beginning BernHardt College has been in the choice of many
                        brilliant students and mine too. It was my first choice during the time of my admission and I feel proud to share
                        with others. It has bridged my school life to my adulthood in such a way that none others would possibly have done.
                        The well experienced and professional teaching faculty have the full credit for what I stand at present.
                        The well-rounded education in this college helped me to stand out as a responsible citizen in the society.
                    </p>
                    <h4>Ujwal Thapa</h4>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
            </div>

        </div>


    </section>

    <section class="contact" id="contactid">

        <h1>Enroll for Our Various Course</h1>
        <a href="" class="submit-btn">CONTACT US</a>

    </section>

    <!-- --------Footer------- -->

    <section class="footer">

        <div class="footer-image">
            <img src="images/logo-footer.png" alt="img">
            <p>Bafal, kathmandu</p>
            <a href="tel:+015237330 ">+015237330</a> /<a href="tel:+015237361"> +015237361</a>

            <a href="mailto:ktmbernhardt@kbc.edu.np">ktmbernhardt@kbc.edu.np</a>

        </div>
        <div class="footer-text">
            <h3 id="about-section">About Us</h3>
            <p>Kathmandu BernHardt College has been proved as the milestone of quality education in the Western part of Kathmandu valley
                since 2060 B.S. No any obstacles have detained it marching steps toward quality education up to now. It is possible with
                the proper coordination of all its stakeholders. As a result, the Ministry of Education Nepal has rewarded it with the
                prize of The First Private College of Nepal on the occasion> of 40th National Education Day 2076 and The International
                Literacy Day 2019. Moreover, New Business Age, has granted it the position of 2nd Best MBS College of Nepal in June 21, 2019.
                The most important and recent example of its accomplishment is: being selected at the national level by the University Grants
                Commission with the grant of the international accreditation. KBC, now, is able to achieve the position of the first QAA
                accredited private college among the Tribhuwan University affiliates.
            </p>


    </section>
    <div class="icons">
        <a href="https://www.facebook.com/profile.php?id=100044386269936"><i class="fa fa-facebook"></i> </a>
        <a href="https://twitter.com/Bishal_thapa007"><i class="fa fa-twitter"></i></a>
        <a href="https://www.linkedin.com/in/bishal-thapa-8734991a7/"><i class="fa fa-linkedin"></i></a>
        <a href="https://www.instagram.com/bishal_thapa007/"><i class="fa fa-instagram"></i></a>
    </div>

    </div>



    <script>
        var navlinks = document.getElementById("navlinks");

        function showmenu() {
            navlinks.style.right = "0";
        }

        function hidemenu() {
            navlinks.style.right = "-200px";
        }
    </script>
</body>

</html>