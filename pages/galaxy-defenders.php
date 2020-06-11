<?php require("../templates/header.php"); ?>

<?php
    
    $galaxyD = array(
        'pt'=>array('Descrição',
        'Este projeto é um jogo escrito em C baseado em Space Invaders, feito por <a href="https://github.com/OlavoNascimento" target="_blank">Olavo Nascimento</a>, Vitor G. S. Ruffo e <a href="https://github.com/wellintonpiassa" target="_blank">Wellinton Piassa</a>. Ele foi feito como um trabalho para a disciplina de programação do primeiro ano do curso de Ciência da Computação da Universidade Estadual de Londrina.',
        'Esse foi o meu primeiro grande projeto e levou três meses para ficar pronto. Tivemos que trabalhar duro para deixa-lo pronto antes do prazo. Na época que nós começamos eu não tinha muita experiência com programação e, por isso, além de ajudar meu amigos a fazer o jogo eu tive que aprender a linguagem C. Usamos uma biblioteca chamada Allegro 5 que nos ajudou muito no proceso, você pode encontrar a documentação neste <a href="https://liballeg.org/api.html" target="_blank">link</a>.',
        'Toda a mágica por trás do jogo depende de movimentar imagens na tela em momentos bem específicos. Qualquer ponto na tela do jogo tem coordenadas X e Y que o localizam. Por exemplo, a imagem da nave do jogador esta localizada em uma parte específica da tela quando o jogo inicia, se pressionarmos a flecha direita (->) do teclado adicionaremos 10 unidades a coordenada X da imagem da nave movendo-a para a direita. O que acontece é, nós checamos se a localização de qualquer imagem na tela precisa mudar porque algum evento aconteceu e então redesenhamos todas as imagens nas suas posições atuais. Isso acontece 60 vezes por segundo, é por isso que o nosso jogo (programa que redesenha imagens na tela rapidamente) parece ser tão fluido. Exemplos de evento podem ser o ato de pressionar uma tecla (barra de espaço, por exemplo) ou simplesmente o passar do tempo.',
        'Este é um projeto de código aberto e você pode dar uma olhada no código na minha página do <a href="https://github.com/VitorgsRuffo/Galaxy-Defenders" target="_blank">Github</a>.',
        'Baixe o jogo', 'Versão do Windows', 'Versão do Ubuntu',
        '*Ainda não disponível', 'Entre em contato'),
        'en'=>array('Description',
        'This project is a C game based on Space Invaders built by <a href="https://github.com/OlavoNascimento" target="_blank">Olavo Nascimento</a>, Vitor G. S. Ruffo, and  <a href="https://github.com/wellintonpiassa" target="_blank">Wellinton Piassa</a>. It was made as an assignment for the first-year programming discipline of the State University of Londrina\'s Computer Science course.',
        'That was my first big project and it took me and my college fellows three months to finish it. We had to work hard to get it working before the deadline. At the time we started it I didn\'t have much programming experience thus besides helping my friends build the game I had to learn the C language. We used a library called Allegro 5 that helped us a lot in the process, you can check its documentation on this <a href="https://liballeg.org/api.html" target="_blank">link</a>.',
        'All the magic behind this game relies on moving images on the screen at very specific moments. Any point on the game screen has an X and Y coordinates that locate it. For instance, the player ship image is located at a specific part of the screen when the game starts, if we press the right arrow (->) of the keyboard we\'re going to add 10 units to the ship image X coordinate moving it to the right. The thing is, we check if the location of any image on the screen needs to change because some event just happened then we redraw all images on the screen at their current location. That happens 60 times per second, that\'s why our game (a program that redraws images on the screen very quickly) seems to be very fluid. Examples of events can be the act of pressing a key (space bar, for example), or just time passing.',
        'This is an open source project and you can check its code <a href="https://github.com/VitorgsRuffo/Galaxy-Defenders" target="_blank">here</a> on my Github page.',
        'Download the game', 'Windows version', 'Ubuntu version', '*Not available yet', 'Contact me')    
    );
?>

<main>
    <div class="wrapper">
        <h2>Galaxy Defenders</h2>
        <section class="gallery">
            <div class="slidesShow">
                <div class="slides">
                    <input type="radio" name="r" id="r1">
                    <input type="radio" name="r" id="r2">
                    <input type="radio" name="r" id="r3">
                    <input type="radio" name="r" id="r4">
                    <input type="radio" name="r" id="r5">
                    <input type="radio" name="r" id="r6">
                    <input type="radio" name="r" id="r7">
                    <input type="radio" name="r" id="r8">
                    <div class="slide s1">
                        <img src="../images/projects/gd/1.jpeg" alt="Galaxy Defenders screenshot">
                    </div>
                    <div class="slide s2">
                        <img src="../images/projects/gd/2.jpeg" alt="Galaxy Defenders screenshot">
                    </div>
                    <div class="slide s3">
                        <img src="../images/projects/gd/3.jpeg" alt="Galaxy Defenders screenshot">
                    </div>
                    <div class="slide s4">
                        <img src="../images/projects/gd/4.jpeg" alt="Galaxy Defenders screenshot">
                    </div>
                    <div class="slide s5">
                        <img src="../images/projects/gd/5.jpeg" alt="Galaxy Defenders screenshot">
                    </div>
                    <div class="slide s6">
                        <img src="../images/projects/gd/6.jpeg" alt="Galaxy Defenders screenshot">
                    </div>
                    <div class="slide s7">
                        <img src="../images/projects/gd/7.jpeg" alt="Galaxy Defenders screenshot">
                    </div>
                    <div class="slide s8">
                        <img src="../images/projects/gd/8.jpeg" alt="Galaxy Defenders screenshot">
                    </div>
                </div>
                <div class="navigation">
                    <label for="r1" class="bar"></label>
                    <label for="r2" class="bar"></label>
                    <label for="r3" class="bar"></label>
                    <label for="r4" class="bar"></label>
                    <label for="r5" class="bar"></label>
                    <label for="r6" class="bar"></label>
                    <label for="r7" class="bar"></label>
                    <label for="r8" class="bar"></label>
                </div>
            </div>
        </section>
        <section class="info">
            <article class="description">  
                <h3>
                    <?php echo $galaxyD[$lang][0]; ?>
                </h3>
                <p><?php echo $galaxyD[$lang][1]; ?></p>
                <p><?php echo $galaxyD[$lang][2]; ?></p>
                <p><?php echo $galaxyD[$lang][3]; ?></p>
                <p><?php echo $galaxyD[$lang][4]; ?></p>
                <h3>
                    <?php echo $galaxyD[$lang][5]; ?>
                </h3>
                <ul>
                    <a href="../download/galaxy-defenders.rar" download>
                        <div class="downloadButton">
                            <li>
                                <?php echo $galaxyD[$lang][6]; ?>
                            </li>
                        </div>
                    </a>
                    <div class="downloadButton">
                        <li>
                            <?php echo $galaxyD[$lang][7]; ?>
                        </li>
                    </div>
                    <p id="not"><?php echo $galaxyD[$lang][8]; ?></p>
                </ul>
            </article>
            <a href="contact.php">
                <div class="contact">
                    <p><?php echo $galaxyD[$lang][9]; ?></p>
                    <p>E-mail: vitor.gs.ruffo@gmail.com</p>
                </div>
            </a>
        </section>
    </div>
</main>
<?php require("../templates/footer.php"); ?>