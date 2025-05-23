<!--
Code written by Patricia Sunday
Purpose: this is the homepage for my portfolio
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Patricia Sunday Portfolio</title>
        <meta charset="UTF-8">
        <meta name="author" content="Patricia Sunday">
        <meta name="description" content="Homepage for portfolio">
        <meta name="keywords" content="homepage, portfolio, programming, patricia sunday">
        <link rel="stylesheet" href="../css/output.css">
    </head>
    <body>
        <header>
            <?php require "nav.php"; ?>
             <img src="../images/headshot.png" alt="Circle-shaped headshot picture of myself">
             <h1>Patricia Sunday</h1>
        </header>
        <main>
            <div class="self-intro">
                <!-- personal info section -->
                <div class="personal-info">
                    <div class="personal-info-box">
                        <h2>About Me</h2>
                        <ul>
                            <li>I'm a computer programming student and aspiring full-stack developer</li>
                            <li>Currently, I'm interested in the regulation of AI in professional workplaces</li>
                            <li>
                                During my free time, I'm likely to be found snacking on candy or chips, partying or at a cafe with friends, 
                                planning a trip with family, sewing, baking, or curled up and reading a book somewhere cozy
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- college info section -->
                <div class="college-info">
                    <img src="../images/algonquingrounds.jpg" alt="Outdoor photograph of Algonquin College grounds">
                    <div class="college-info-box">
                        <h2>About My School</h2>
                        <ul>
                            <li>I am currently a level 02 student in Algonquin College's School of Advanced Technology. I started studying in September 2024</li>
                            <li>The certification I am studying for is the 3-year advanced diploma in
                                <a href="https://www.algonquincollege.com/sat/program/computer-programming-and-analysis/">Computer Programming and Analysis</a>
                            </li>
                            <li>For more information on the coursework I am taking, visit the
                                <a href="resume.html#courses-taken">Resume page</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
        <?php require "footer.php"; ?>
    </body>
</html>