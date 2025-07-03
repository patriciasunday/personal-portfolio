<!--
Code written by Patricia Sunday
Purpose: this is the contact form page for my portfolio
Last Edited: June 24th, 2025
-->
<!DOCTYPE html>
<html lang="en" class="h-[100%]">
    <head>
        <title>Contact Me</title>
        <meta charset="UTF-8">
        <meta name="author" content="Patricia Sunday">
        <meta name="description" content="Contact form for portfolio">
        <meta name="keywords" content="connect, portfolio, contact, contact me, message, email, form">
        <link rel="stylesheet" href="/styles/output.css">
    </head>
    <body class="flex flex-col h-[100%] font-[Francois One] text-[var(--text-color)]">
        <header class="m-8 flex flex-col gap-3">
            <div class="self-center"><?php require "nav.php"; ?></div>
            <div class="flex flex-row justify-between mt-5">
                <h1 class="text-xl font-bold">Pin Your Message!</h1>
                <input type="submit" form="contact" class="bg-[var(--primary-contrast)] text-[var(--bg-color)] font-bold px-10 rounded-xl active:bg-[var(--text-color)]">
            </div>
            <hr>
        </header>
        <main class="grow m-8 mt-0">
            <!--contact form (name, email, message)-->
            <form id="contact" method="GET" class="flex flex-row gap-6" ><!--todo change method once JS is configured-->
                <div id="file-upload" class="bg-[var(--primary-color)] rounded-4xl min-w-[45%] input-group-flex justify-center items-center">
                    <label for="file"> 
                        <img src="../media/fileupload.png" alt="File upload symbol" class="w-[5rem] m-auto">
                        Choose a file to upload
                    </label>
                    <input type="file" id="file" form="contact" class="hidden">
                </div>
                <div class="input-group-flex min-w-[50%] gap-5">
                    <div class="input-group-flex">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" class="input-border" required>
                    </div>
                    <div class="input-group-flex">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email address" class="input-border" required>
                    </div>
                    <div class="input-group-flex">
                        <label for="subject">Subject</label>
                        <select id="subject" name="subject" class="input-border" required>
                           <div class="inline"><img src="../images/algonquin-b-building.jpg"> <option>Inquiry</option></div>
                            <option>Feedback</option>
                            <option>Offer</option>
                            <option>Freelancing</option>
                        </select>
                    </div>
                    <div class="input-group-flex">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Enter your message" class="input-border min-h-[200px]" required></textarea>
                    </div>
                </div>
            </form>
        </main>
        <?php require "footer.php"; ?>
    </body>
</html>
<!--
todo: remove required attrib from inputs & use js or php
todo: use universal variable for font for all pages
todo: fix file upload so that clicking on any part of the div prompts upload
todo: fix file upload so that the label changes to their filename when they put in file
todo: replace arbitrary custom values
-->