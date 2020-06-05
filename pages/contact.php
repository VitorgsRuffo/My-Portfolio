<?php require("../templates/header.php"); ?>
<main>
    <div class="wrapper">
        <h2>Contact</h2>
        <section class="contact-area">
            <p>Do you have something to ask me? Send me a massage! Here you can also report bugs or just give me some feedback.</p>
            <form action="../scripts/contact-script.php" method="POST" class="form">
                <div class="inputs">
                    <input type="text" name="name" placeholder="Enter your name">
                    <input type="text" name="email" placeholder="Enter your e-mail address">
                    <input type="text" name="subject" placeholder="Subject">
                    <textarea name="massage" placeholder="Enter your massage.."></textarea>
                </div>
                <div class="sendButton">
                    <input type="submit" name="submit" value="Send">
                </div>
            </form>
            <div class="contact">
                <p>Contact me</p>
                <p>E-mail: vitor.gs.ruffo@gmail.com</p>
            </div>
        </section>
    </div>
</main>
<?php require("../templates/footer.php"); ?>