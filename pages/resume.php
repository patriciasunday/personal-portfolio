<!--
Code written by Patricia Sunday
Purpose: this is the resume page for my portfolio
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Resume</title>
        <meta charset="UTF-8">
        <meta name="author" content="Patricia Sunday">
        <meta name="description" content="Resume page  for portfolio">
        <meta name="keywords" content="resume, cv, portfolio, programming">
        <link rel="stylesheet" href="../css/output.css">
    </head>
    <body>
        <header> <?php require "nav.php";?> </header>
        <main>
            <div id="resume-header">
                <p class="heading2">Patricia Sunday</p>
                <p>(226)-698-6622</p>
                <p>sund0058@algonquinlive.com</p>
            </div>
            <div class="resume-content">
                <!--career objective-->
                <p>I look forward to refining my administrative database skills while strengthening my ability to balance 
                    creativity and technicality in application development.</p>
                <div class="resume-main">
                    <!--education section-->
                    <div class="education">
                        <p class="heading3">Education</p>
                        <!--See reference [1]-->
                        <div class="education-basics">
                            <p><strong>Computer Programming and Analysis Advanced Diploma	2024 - Present</strong></p>
                            <ul>
                                <li>Algonquin College, Ottawa, Ontario</li>
                                <li>Dean's Honours List; GPA 3.93</li>
                                <li>Selected Courses: Database Systems (SQL, Access, Oracle), Object-Oriented Programming (Java), Web Programming 
                                    (HTML, CSS, JavaScript, PHP), Operating Systems (Unix/Linux), Technical Communication</li>
                            </ul>
                        </div>
                        <div id="courses-taken"> 
                            <p><strong>Current Course-Load</strong></p>
                            <ul>
                                <li>Object-Oriented Programming (Java II)</li>
                                <li>Database Systems (SQL II)</li>
                                <li>Web Programming</li>
                                <li>Operating Systems Fundamentals (Linux II)</li>
                                <li>Technical Communication for Engineering Technologies</li>
                                <li>Co-Op Education and Readiness</li>
                            </ul>
                        </div>
                    </div>
                    <!--skills section-->
                    <div class="skills">
                        <div class="tech-skills">
                            <!--See reference [2]-->
                            <p class="heading3">Technical Skills</p>
                            <ul>
                                <li><strong>Database Management & Digital Engines</strong>: Experience working with SQL Server, PostgreSQL (pgAdmin 4), MySQL Workbench 8.0, Microsoft Access, and Oracle
                                    <ul>
                                        <li>Created and implemented <span class="bold">SQL databases</span> with efficient interactive objects in Access</li>
                                    </ul>
                                </li>
                                <li><strong>Development & Digital Systems</strong>: Comfortable with Eclipse IDE for Java development and VS Code for web programming, with experience using XAMPP Control Panel for local server setups
                                    <ul>
                                        <li>Built <span class="bold">Java applications</span> which are original ideas or mimic existing concepts; Developed web projects</li>
                                    </ul>
                                </li>
                                <li><strong>Operating Systems</strong>: Confident with Windows; Experience operating VMware Workstation Pro to create virtual environments for Unix distributions
                                    <ul>
                                        <li>Performed <span class="bold">terminal navigation in Linux</span> to execute shell commands for system management</li>
                                    </ul>
                                </li>
                                <li><strong>Office Tools</strong>: Proficient with Microsoft Office (Excel, Word, PowerPoint, Outlook)
                                    <ul>
                                        <li>Leveraged <span class="bold">Microsoft Excel</span> for data analysis and conducted visually appealing easy-to-understand presentations using PowerPoint
                                    </ul>
                                </li>
                                <li>Applied programming knowledge in projects such as Ingredient-Recipe Generator, Mock GameStop Database, and user information form</li>
                            </ul>
                        </div>
                        <div class="soft-skills">                    <!--See reference [3]-->
                            <p class="heading3">Soft Skills</p>
                            <ul>
                                <li>Language: Fluent in English, Beginner French</li>
                                <li>Ability to exercise a systematic thinking approach, anticipating and solving problems</li>
                                <li>Accurate use of mathematical operations, accounting for precision loss as well</li>
                                <li>Communicate through written, oral, and visual forms to accessibly present information</li>
                                <li>Organizing and navigating document systems</li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php require "footer.php"; ?>
    </body>
</html>