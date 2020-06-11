<?php require("../templates/header.php"); ?>

<?php 
    $projects = array(
        'pt'=>array('Projetos', 'Lista de Contatos', 'ver mais', 'Entre em contato'),
        'en'=>array('Projects', 'Contact List', 'see more', 'Contact me')    
    );
?>

<main>
    <section class="projects-links">
        <div class="wrapper">
            <h2>
                <?php echo $projects[$lang][0]; ?>
            </h2>
            <div>
                <a href="galaxy-defenders.php?lang=<?php echo $lang; ?>">
                    <p>Galaxy Defenders</p>
                </a>
            </div>
            <div>
                <a href="passwordbank.php?lang=<?php echo $lang; ?>">
                    <p>PasswordBank</p>
                </a>
            </div>
            <div>
                <a href="contact-list.php?lang=<?php echo $lang; ?>">
                    <p>
                        <?php echo $projects[$lang][1]; ?>
                    </p>
                </a>
            </div>
            <a href="https://github.com/VitorgsRuffo" target="_blank">
                <div class="more-projects">
                    <p>
                        <?php echo $projects[$lang][2]; ?>
                    </p>
                </div>
            </a>
            <a href="contact.php?lang=<?php echo $lang; ?>">
                <div class="contact">
                    <p>
                        <?php echo $projects[$lang][3]; ?>
                    </p>
                    <p>E-mail: vitor.gs.ruffo@gmail.com</p>
                </div>
            </a>
        </div>
    </section>
</main>
<?php require("../templates/footer.php"); ?>