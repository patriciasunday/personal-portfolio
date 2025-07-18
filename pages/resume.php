<!--
Code written by Patricia Sunday
Purpose: this is the resume page for my portfolio
-->

<!DOCTYPE html>
<html lang="en" class="h-full">
    <head>
        <title>Resume</title>
        <meta charset="UTF-8">
        <meta name="author" content="Patricia Sunday">
        <meta name="description" content="Resume page  for portfolio">
        <meta name="keywords" content="resume, cv, portfolio, programming">
        <link rel="stylesheet" href="/styles/output.css">
    </head>
    <body class="h-full flex flex-col font-[Francois One]">
        <header class="mt-8 flex flex-col items-center"> 
            <?php require "nav.php";?> 
            <p class="mt-5 italic">Click my name to download my full resume</p>
        </header>
        <main class="grow m-8 p-8 flex flex-col border-2 border-[var(--text-color)] rounded-xl shadow-xl">
            <div class="self-center flex flex-col">
                <a href="../media/resume.pdf" download class="self-center hover:text-[var(--primary-contrast)]">
                    <p class="text-2xl font-extrabold underline">Patricia Sunday</p>
                </a>    
                <p class="self-center">(226)-698-6622</p>
                <p class="self-center">patriciasnsunday@outlook.com</p>
            </div>
            <p class="mt-4">
                I'm a 3rd-term student with a strong interest in application and web development.
                I am available for a  4-8 month co-op starting September 2025, and looking forward to 
                growing my technical and soft skills in a professional setting!
            </p> <!--todo:edit resume summary statement-->
            <div class="md:flex md:gap-10"> <!--for responsive layout-->
                <div class="mt-4">
                    <p class="font-bold">Computer Programming and Analysis</p>
                    <p>Advanced Diploma &nbsp; 2024 - Present (3 years)</p>
                    <ul class="ml-5 list-disc">
                        <li>Algonquin College, Ottawa,Ontario</li>
                        <li>Dean's Honours List; 3.8/4.0</li>
                    </ul>
                </div>
                <div class="mt-4"> 
                    <p class="font-bold">Current Course-Load</p>
                    <ul class="ml-5 list-disc">
                        <li>Object-Oriented Programming with Design Patterns (Java/SQL III)</li>
                        <li>Mobile GUI Programming</li>
                        <li>Business Intelligence and Data Analytics</li>
                        <li>Network Programming</li>
                        <li>Systems Analysis and Design (Agile)</li>
                    </ul>
                </div>
            </div>
        </main>
        <?php require "footer.php"; ?>
    </body>
</html>

<!--todo: rename images folder to resources or media since it now has resume pdf too-->
<!--todo: change header to mt-8 instead of m-8 in other pages as well-->
<!--todo: change h-[100%] to h-full in other pages as well-->
<!--todo: change hyperlink for email icon in footer to use my non-school email-->