<?php require("../templates/header.php"); ?>
<main>
    <div class="wrapper">
        <h2>Contact</h2>
        <section class="contact-area">
            <?php if(isset($_GET['success']) && $_GET['success'] === 'emailsent'): ?>
                <p class="emailSent">Your email was sent.<br>Thank you for your time.</p>
            <?php elseif(isset($_GET['error']) && $_GET['error'] === 'emailnotsent'): ?>
                <p class="emailNotSent">It was not possible to send your email due to some error in the server. You can also contact me at vitor.gs.ruffo@gmail.com.</p>
            <?php else: ?>
                <p>Do you have something to ask me? Send me an e-mail! Here you can also report bugs or just give me some feedback.</p>
            <?php endif; ?>
            <form action="../scripts/contact-script.php" method="POST" class="form">
                <div class="inputs">
                    <input type="text" name="name" placeholder="Your name">
                    <input type="text" name="email" placeholder="Your e-mail address">
                    <input type="text" name="subject" placeholder="Subject">
                    <textarea name="message" placeholder="Enter your message.."></textarea>
                </div>
                <div class="sendButton">
                    <input type="submit" name="submit" value="Send">
                </div>
            </form> <!-- validate data in the client part with JS -->
            <div class="contact">
                <p>Contact me</p>
                <p>E-mail: vitor.gs.ruffo@gmail.com</p>
            </div>
        </section>
    </div>
</main>
<?php require("../templates/footer.php"); ?>