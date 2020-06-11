<?php require("../templates/header.php"); ?>

<?php 
    $cList = array(
        'pt'=>array('Lista de Contatos',
                    'Descrição',
                    'Este projeto é um programa de lista de contatos que roda no terminal, feito por <a href="https://github.com/OlavoNascimento" target="_blank">Olavo Nascimento</a>, Vitor G. S. Ruffo e <a href="https://github.com/wellintonpiassa" target="_blank">Wellinton Piassa</a> usando a linguagem C. Ele foi feito como um trabalho para a disciplina de programação do primeiro ano do curso de Ciência da Computação da Universidade Estadual de Londrina.',
                    'O programa te permite adicionar novos contatos, editar ou deletar um contato existente, listar todos os contatos, e procurar por um contato específico, basta fornecer o nome. Os contatos são salvos em um arquivo, no mesmo diretório do programa, para que você não perca os dados quando finaliza-lo. Nos levou mais ou menos um mês para terminar esse trabalho.',
                    'Este é um projeto de código aberto e você pode dar uma olhada no código na minha página do <a href="https://github.com/VitorgsRuffo/Contact_List_Software" target="_blank">Github</a>.',
                    'Entre em contato'),
        'en'=>array('Contact List',
                    'Description',
                    'This project is a terminal-based contact list program built by <a href="https://github.com/OlavoNascimento" target="_blank">Olavo Nascimento</a>, Vitor G. S. Ruffo, and  <a href="https://github.com/wellintonpiassa" target="_blank">Wellinton Piassa</a> in C language. It was made as an assignment for the first-year programming discipline of the State University of Londrina\'s Computer Science course.',
                    'It allows you to add new contacts, edit or delete an existing contact, list all contacts, and search for a specific one by providing its name. The contacts are saved on a file, on the same directory as the program, so that you don\'t lose data when finishing the program. It took us more or less one month to finish that assignment.',
                    'This is an open source project and you can check its code <a href="https://github.com/VitorgsRuffo/Contact_List_Software" target="_blank">here</a> on my Github page.',
                    'Contact me')    
    );
?>

<main>
    <div class="wrapper">
        <h2>
            <?php echo $cList[$lang][0]; ?>
        </h2>
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
                        <img src="../images/projects/cl/1.png" alt="contact list screenshot">
                    </div>
                    <div class="slide s2">
                        <img src="../images/projects/cl/2.png" alt="contact list screenshot">
                    </div>
                    <div class="slide s3">
                        <img src="../images/projects/cl/3.png" alt="contact list screenshot">
                    </div>
                    <div class="slide s4">
                        <img src="../images/projects/cl/4.png" alt="contact list screenshot">
                    </div>
                    <div class="slide s5">
                        <img src="../images/projects/cl/5.png" alt="contact list screenshot">
                    </div>
                    <div class="slide s6">
                        <img src="../images/projects/cl/6.png" alt="contact list screenshot">
                    </div>
                    <div class="slide s7">
                        <img src="../images/projects/cl/7.png" alt="contact list screenshot">
                    </div>
                    <div class="slide s8">
                        <img src="../images/projects/cl/8.png" alt="contact list screenshot">
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
                    <?php echo $cList[$lang][1]; ?>
                </h3>
                <p><?php echo $cList[$lang][2]; ?></p>
                <p><?php echo $cList[$lang][3]; ?></p>
                <p><?php echo $cList[$lang][4]; ?></p>
            </article>
            <a href="contact.php">
                <div class="contact">
                    <p> <?php echo $cList[$lang][5]; ?></p>
                    <p>E-mail: vitor.gs.ruffo@gmail.com</p>
                </div>
            </a>
        </section>
    </div>
</main>
<?php require("../templates/footer.php"); ?>