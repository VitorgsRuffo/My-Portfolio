<?php require("../templates/header.php"); ?>

<?php 
    $about = array(
        'pt'=>array('Sobre mim',
                    'Ola! Aqui é o <i>Vitor</i> e eu sou um graduando segundanista em <i>Ciência da Computação</i> na <i>Universidade Estadual de Londrina</i>. Eu não tinha nenhuma experiência em ciência da computação quando eu iniciei meu curso e também não tinha certeza se aquela área era a certa pra mim. Acontece que era a minha área e eu vou adorar trabalhar com ela no futuro.',
                    'Eu venho explorando as terras do <i>desenvolvimento web full-stack</i> nos ultimos meses e tem sido muito interessante. Eu também vou aprender desenvolvimento mobile no futuro porque essa é outra subárea que eu me interesso bastante. A propósito, quase tudo na área de ciência da computação é interessante para mim. Eu simplesmente não consigo ver o tempo passar enquanto estou entendendo como toda a mágica por trás dos computadores funciona.',
                    'Essa é uma área bem desafiadora, ciência da computação é extremamente difícil porém é recompensadora na mesma intensidade. Hoje ela já é parte de cada um dos outros campos da ciência ajudando no crescimento dos diferentes tipos de conhecimento.'),
        'en'=>array('About me', 
                    'Hi! this is <i>Vitor</i> and I\'m a sophomore <i>Computer Science</i> undergraduate student at the <i>State University of Londrina</i>. I didn\'t have any computer science experience when starting my course and was not sure if that major was the right for me. It turns out that it was and I\'m going to love working with it in the future.', 
                    'I\'ve been exploring the lands of <i>full-stack web development</i> for the past few months and it\'s been really interesting for me. I\'m going to learn mobile development in the future too because that\'s another field I\'m very interested in. By the way, almost anything in the computer science field gets me interested. I just cannot see time passing while I\'m understanding how all the magic behind computers is supposed to work.',
                    'That is a very challenging major to get, computer science is extremely difficult but it is rewarding at the same intensity. Today it is part of every other field of science helping all the kinds of knowledge to grow.')    
    );
?>

<main>
    <section class="presentation">
        <div class="wrapper">
            <h2>
                <?php echo $about[$lang][0]; ?>
            </h2>
            <p>
                <?php echo $about[$lang][1]; ?>
            </p> 
            <img src="../images/UEL-sign.jpeg" alt="State University of Londrina sign">
            <p>
                <?php echo $about[$lang][2]; ?>    
            </p>
            <p>
                <?php echo $about[$lang][3]; ?>
            </p>
        </div>
    </section>
</main> 
<?php require("../templates/footer.php"); ?>