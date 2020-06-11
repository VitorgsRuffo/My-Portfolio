<?php require("../templates/header.php"); ?>

<?php 
    $contact = array(
        'pt'=>array('Contato', 
                    'Quer me perguntar algo? Me envie um e-mail! Aqui voc&ecirc; tambem pode relatar bugs ou s&oacute; me dar um feedback do site.',
                    'Seu e-mail foi enviado.<br>Obrigado pelo seu tempo.',
                    'Não foi possivel enviar o seu e-mail devido a um erro no servidor. Tente novamente mais tarde. Você tambem pode entrar em contato através do meu e-mail vitor.gs.ruffo@gmail.com',
                    'Seu nome', 'Seu endereço de e-mail', 'Assunto', 'Digite sua mensagem..', 'Enviar', 'Entre em contato'),
        'en'=>array('Contact', 
                    'Do you have something to ask me? Send me an e-mail! Here you can also report bugs or just give me some feedback.', 
                    'Your e-mail was sent.<br>Thank you for your time.',
                    'It was not possible to send your e-mail due to some error in the server. Try again later. You can also contact me at vitor.gs.ruffo@gmail.com.',
                    'Your name', 'Your e-mail address', 'Subject', "Enter your message..", 'Send', 'Contact me')    
    );
?>
<main>
    <div class="wrapper">
        <h2>
            <?php echo $contact[$lang][0]; ?>
        </h2>
        <section class="contact-area">
            <?php if(isset($_GET['success']) && $_GET['success'] === 'emailsent'): ?>
                <p class="emailSent">
                    <?php echo $contact[$lang][2]; ?>
                </p>
            <?php elseif(isset($_GET['error']) && $_GET['error'] === 'emailnotsent'): ?>
                <p class="emailNotSent">
                    <?php echo $contact[$lang][3]; ?>
                </p>
            <?php else: ?>
                <p>
                    <?php echo $contact[$lang][1]; ?>
                </p>
            <?php endif; ?>
            <form action="../scripts/contact-script.php" method="POST" class="form">
                <div class="inputs">
                    <input type="text" name="name" placeholder="<?php echo $contact[$lang][4]; ?>">
                    <input type="text" name="email" placeholder="<?php echo $contact[$lang][5]; ?>">
                    <input type="text" name="subject" placeholder="<?php echo $contact[$lang][6]; ?>">
                    <textarea name="message" placeholder="<?php echo $contact[$lang][7]; ?>"></textarea>
                    <input type="hidden" name="lang" value="<?php echo $lang; ?>">
                </div>
                <div class="sendButton">
                    <input type="submit" name="submit" value="<?php echo $contact[$lang][8]; ?>">
                </div>
            </form> <!-- validate data in the client part with JS -->
            <div class="contact">
                <p>
                    <?php echo $contact[$lang][9]; ?>
                </p>
                <p>E-mail: vitor.gs.ruffo@gmail.com</p>
            </div>
        </section>
    </div>
</main>
<?php require("../templates/footer.php"); ?>