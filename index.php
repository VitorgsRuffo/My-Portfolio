<?php require("templates/header.php"); ?>

<?php 
    $banner = array(
        'pt'=>array('EU SOU <br> UM ESTUDANTE DE <br> CIÊNCIA DA COMPUTAÇÃO', 'atualmente trabalhando com <br> desenvolvimento web full-stack.'),
        'en'=>array('I\'M A <br> COMPUTER SCIENCE <br> MAJOR', 'currently working with full-stack <br> web development.')
    );

    $links = array(
        'pt'=>array('Projetos', 'Portifolio', 'Github', 'Canal do Youtube', 'Sobre mim', 'Contato'),
        'en'=>array('Projects', 'Portfolio', 'Github', 'Youtube Channel', 'About me', 'Contact')    
    );
?>

        <main>  <!-- represents the main content of the body of a document or application-->
            <section class="banner">  <!-- represents a standalone section — which doesn't have a more specific semantic element to represent it. It usually have a heading-->
                <div class="center-banner-text">
                    <h2>
                        <?php echo $banner[$lang][0]; ?> 
                    </h2>
                    <h1>
                        <?php echo $banner[$lang][1];  ?>
                    </h1>
                </div>
            </section>
            <div class="wrapper">
                <section class="links">
                    <div class="squared-box">
                        <a href="pages/projects.php?lang=<?php echo $lang; ?>">
                            <h3><?php echo $links[$lang][0]; ?></h3>
                        </a>
                    </div>
                    <div class="rectangular-box">
                        <a href="pages/portfolio.php?lang=<?php echo $lang; ?>">
                            <h3><?php echo $links[$lang][1]; ?></h3>
                        </a>
                    </div>
                    <div class="squared-box">
                        <a href="https://github.com/VitorgsRuffo" target="_blank">
                            <h3><?php echo $links[$lang][2]; ?></h3>
                        </a>
                    </div>
                    <div class="rectangular-box">
                        <a href="https://www.youtube.com/channel/UCBVNcZwlLqROnVzAiPeE1lg" target="_blank">
                            <h3><?php echo $links[$lang][3]; ?></h3>
                        </a>
                    </div>
                    <div class="squared-box">
                        <a href="pages/about-me.php?lang=<?php echo $lang; ?>">
                            <h3><?php echo $links[$lang][4]; ?></h3>
                        </a>
                    </div>
                    <div class="squared-box">
                        <a href="pages/contact.php?lang=<?php echo $lang; ?>">
                            <h3><?php echo $links[$lang][5]; ?></h3>
                        </a>
                    </div>
                </section>
            </div>
        </main>   
<?php require("templates/footer.php"); ?>
