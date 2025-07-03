<!--
Code written by Patricia Sunday
Purpose: this is the homepage for my portfolio
-->

<!DOCTYPE html>
<html lang="en" class="h-[100%]">
    <head>
        <title>Patricia Sunday Portfolio</title>
        <meta charset="UTF-8">
        <meta name="author" content="Patricia Sunday">
        <meta name="description" content="Homepage for portfolio">
        <meta name="keywords" content="homepage, portfolio, programming, patricia sunday">
        <link rel="stylesheet" href="/styles/output.css">
        <script src="scripts/flip-card.js" defer></script>
    </head>
    <!--flex-col so main can grow to push footer to bottom of page-->
    <body class="flex flex-col h-[100%] bg-[var(--bg-color)] text-[var(--text-color)] font-[Francois One]">
        <header class="m-8 flex flex-col items-center gap-3">
            <?php require "pages/nav.php"; ?>
            <img src="media/headshot.png" alt="Circle-shaped picture of myself" class="max-w-[100px] rounded-full mt-[10%] border-3 border-[var(--primary-color)]">
            <h1 class="font-bold text-4xl">Patricia Sunday</h1>
            <p class=" mb-[10%] text-[var(--subtitle-color)] font-medium">3rd term Computer Programming and Analysis student in Ottawa, Ontario</p>
        </header>
        <main class="grow m-8">
            <!--flip cards for boards & corresponding text. grid layout for board pics-->
            <div class="flex flex-row justify-center gap-[30px]">
                <!-- personal info section -->
                <div>
                    <div class="grid grid-cols-4 grid-rows-2 w-[200px] h-[100px] md:w-[300px] md:h-[175px] lg:w-[500px] lg:h-[250px] rounded-4xl shadow-md transform hover:-translate-y-1 duration-250">
                        <ul class="text-card hidden rounded-l-4xl row-span-2 col-span-3 border-r-2 border-[var(--bg-color)] h-full w-full list-disc">
                            <li>I'm a computer programming student and aspiring full-stack developer</li>
                            <li>Currently, I'm interested in...</li> <!--to update-->
                            <li>
                                During my free time, I'm likely to be found snacking on candy or chips, partying or having a night in with friends, 
                                planning a trip with family, sewing, baking, or curled up and reading a book somewhere cozy
                            </li>
                        </ul>
                        <img src="media/me.jpeg" alt="Selfie of myself (Patricia)" class="image-card row-span-2 col-span-3 h-full w-full object-cover rounded-l-4xl border-r-2 border-[var(--bg-color)]">
                        <img src="media/greece.jpeg" alt="Sea horizon and trees on Greek island" class="h-full w-full object-cover rounded-tr-4xl border-b-2 border-[var(--bg-color)]">
                        <img src="media/cafe.png" alt="The hands of 3 friends and I, holding out drinks from a cafe" class="h-full w-full object-cover rounded-br-4xl ">
                    </div>
                    <h2>about me</h2>
                </div>

                <!-- college info section -->
                <div>
                    <div class="grid grid-cols-4 grid-rows-2 w-[200px] h-[100px] md:w-[300px] md:h-[175px] lg:w-[500px] lg:h-[250px] rounded-4xl shadow-md transform hover:-translate-y-1 duration-250">
                        <ul class="text-card hidden rounded-l-4xl row-span-2 col-span-3 border-r-2 border-border-[var(--bg-color)] h-full w-full list-disc">
                            <li>I am currently a level 02 student in Algonquin College's School of Advanced Technology. I started studying in September 2024</li>
                            <li>The certification I am studying for is the 3-year advanced diploma in
                                <a href="https://www.algonquincollege.com/sat/program/computer-programming-and-analysis/">Computer Programming and Analysis</a>
                            </li>
                            <li>For more information on the coursework I am taking, visit the
                                <a href="resume.html#courses-taken">Resume page</a></li>
                        </ul>
                        <img src="media/algonquin-b-building.jpg" class="image-card block col-span-3 row-span-2 w-full h-full object-cover rounded-l-4xl border-r-2 border-r-[var(--bg-color)]"> <!--todo: attribute in footer-->
                        <img src="media/algonquin-window.jpg" alt="Photograph of the view from an Algonquin classroom window, featuring parking lot, trees, buildings" class="w-full h-full object-cover rounded-tr-4xl border-b-2 border-b-[var(--bg-color)]">
                        <img src="media/algonquin-window2.jpg" alt="Photograph of the view from an Algonquin staircase window, featuring parking trees and buildings" class="w-full h-full object-cover rounded-br-4xl">
                    </div>
                    <h2>about my school</h2>
                </div>
            </div>
        </main>
        <?php require "pages/footer.php"; ?>
    </body>
</html>

<!--
todo: fix text-card layout
todo: fix responsive board sizing
todo: add boards for each page (3 more boards total)
todo: add image stack for display pic & background (like pinterest profile on ipad)
-->
