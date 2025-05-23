<!--
Code written by Patricia Sunday
Purpose: this is the projects page for my portfolio
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Projects</title>
        <meta charset="UTF-8">
        <meta name="author" content="Patricia Sunday">
        <meta name="description" content="Resume page  for portfolio">
        <meta name="keywords" content="resume, cv, portfolio, programming">
        <link rel="stylesheet" href="../css/output.css">
        <script src="../scripts/projects.js" defer></script>
    </head>
    <body>
       <header>
            <?php require "nav.php"; ?>
            <p>Click project to see or close details</p>
        </header>

        <main>
            <button id="back">&lt;</button>
            <div class="project">
                <!--project 1-->
                <p class="project-title"><span class="heading2">Technical Recommendation Report</span> (Jan 2025 – Present)</p>
                <div class="project-details">
                    <ul>
                        <li class="unlist">Technical Communication-Engineering Technology (ENL2019T), Ottawa, ON</li>
                        <li>Compiled a 10+ page report on Visible Infrared Imaging Radiometer Suite (VIIRS) as a solution for wildfire prevention in California</li>
                        <li>Conducted thorough research using credible sources to support and generate key report statements</li>
                        <li>Utilized Word features, such as Citations & Bibliography, Table of Contents, and Captions for efficient document navigation</li>
                        <li>Concluded on a well-supported recommendation using step-by-step analysis based on crucial criteria for VIIRS</li>
                    </ul>
                    <img src="images/techreport.png" alt="Screenshot of the letter of intent for my report">
                </div>
            </div>
            <!--project 2-->
            <div class="project">
                <p class="project-title"><span class="heading2">Fitness Tracker Application</span>  (Feb 2025 – Feb 2025)</p>
                <div class="project-details">
                    <ul>
                        <li class="unlist">Object-Oriented Programming (CST8284), Ottawa, ON</li>
                        <li>Developed a fitness tracker model using Eclipse IDE for Java Developers</li>
                        <li>Applied encapsulation to ensure data integrity and access control</li>
                        <li>Tested program functionality by designing and executing one test class and three Junit test cases</li>
                        <li>Simulated a real fitness tracker by processing user input and generating relevant personalized information</li>
                    </ul>
                    <img src="images/fitnesstracker.png" alt="Screenshot of my code for the Fitness Tracker model">
                </div>
            </div>
            <!--project 3-->
            <div class="project">
                <p class=project-title><span class="heading2">Sewing Shop Management System</span>  (Feb 2025 – Feb 2025)</p>
                <div class="project-details">
                    <ul>
                        <li class="unlist">Database Systems (CST2355), Ottawa, ON</li>
                        <li>Led a team of three to create a sewing shop management system using SQL Server Management Studio and Microsoft Access</li>
                        <li>Integrated linked database tables into a user-friendly Access application</li>
                        <li>Created user-friendly interfaces through queries, forms, and reports for easier data manipulation</li>
                        <li>Improved database efficiency by establishing entity relationships</li>
                    </ul>
                    <img src="images/sewingshopmanagement.png" alt="Screenshot of our application for the Sewing Shop Management system">
                </div>
            </div>
            <button id="forward">&gt;</button>
        </main>

        <?php require "footer.php"; ?>
    </body>
</html>