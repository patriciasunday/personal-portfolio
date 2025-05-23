<!--
Code written by Patricia Sunday
Purpose: this is the contact page for my portfolio
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Me</title>
        <meta charset="UTF-8">
        <meta name="author" content="Patricia Sunday">
        <meta name="description" content="Contact form for portfolio">
        <meta name="keywords" content="connect, portfolio, contact, contact me, message, email, form">
        <link rel="stylesheet" href="../css/output.css">
    </head>

    <body>
        <header>
            <?php require "nav.php"; ?>
        </header>
        <main>
            <!--contact form, for name, email and message-->
            <form>
                <div class="input-row">
                    <div class="input-combo">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="input-combo">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>
                <div class="message-combo">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <div class="end-bar">
                    <input type="submit">
                    <input type="reset">
                </div>
            </form>
        </main>

        <?php require "footer.php"; ?>
    </body>
</html>