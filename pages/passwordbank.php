<?php require("../templates/header.php"); ?>

<?php 
    $pwdBank = array(
        'pt'=>array('Descrição',
                    'Este projeto ainda esta sendo desenvolvido, e como pode-se ver não possui nenhuma estilização. Estou desenvolvendo-o apenas com o intuito de praticar e portanto ele não será posto online. Eu comecei a trabalhar nesse website em Fevereiro de 2020 enquanto eu aprendia as tecnologias de desenvolvimento web.',
                    'Eu vou aplicar todas as tecnologias que eu aprender neste site já que ele é o lugar onde eu pratico. Eu já usei HTML5, PHP e MySQL nele. Tambem planejo usar CSS3, JavaScript, algum framework de JS e CSS, e um framework para ajudar no scripting dentro do servidor.',
                    'No site você pode se registrar, entrar, e ter uma lista pessoal de suas contas de diversos serviços de modo a controlar todas as suas senhas. Se você esquecer a sua senha você pode seguir as intruções na página \'Resete sua senha\'. Você pode adicionar quantas contas forem necessarias no seu passwordbank contanto que você siga as especificações para cada campo da conta. O que eu quero dizer é: no campo de e-mail, por exemplo, é necessário fornecer um endereço de e-mail válido. Também é possível editar ou deletar uma conta existente. Você vai ter uma página de perfil onde pode-se colocar uma foto de perfil e mudar sua senha, e-mail, ou nome de usuário (essa parte ainda não foi implementada). Um botão para mudar o idioma do site vai ser adicionado no futuro.',
                    'Eu ja trabalhei em alguns aspectos de segurança do site. Todo dado sensível é criptografado antes de ser depositado no banco de dados deixando-os protegidos caso hackers ganhem acesso a eles. O site também é protegido contra SQL injections com o uso de sentenças preparadas (prepared statements) ao acessar o banco de dados. PasswordBank pode ter muitas vulnerabilidades que eu não sei ainda, porém vou concerta-las assim que eu aprender sobre elas.',
                    'Este site é um projeto de código aberto e seu código pode ser encontrado na minha página do <a href="https://github.com/VitorgsRuffo/PasswordBank" target="_blank">Github</a>.',
                    'Entre em contato'),
        'en'=>array('Description',
                    'This project is being developed yet, as you can see it doesn\'t have any styling. I\'m building this website only for training purposes thus it is not going to be deployed. I started to work on it back in February 2020 while I was learning the web development technologies.',
                    'I\'m going to apply all technologies that I\'ll be learning on this website as it is my practice space. I have already used HTML5, PHP, and MySQL on it. I also plan to use CSS3, JavaScript, some JS and CSS frameworks, and a framework to help on the server-side scripting.',
                    'In the site you can sign up, sign in, and have a personal list of services accounts so that you can keep track of all your passwords. If you forget your password you can reset it by following the instructions on the \'Reset your password\' page. You can add as many accounts as you want into your passwordbank as long as you follow the specifications for each type of field. I mean, in the email field you have to enter a valid email address. You\'re also able to edit or delete an existing account. You will have a profile page where you can upload a profile picture and change your password, email, or username, but that part is not implemented yet. I\'m going to implement a language changing button in the future.',
                    'I have already worked on some aspects of the website security. All sensitive data are going to be encrypted on the database so that hackers cannot steal passwords in case they get access to it. The site is also protected against SQL injections with the use of prepared statements when accessing the database. PasswordBank might have a lot of security vulnerabilities that I\'m not aware of yet, but I\'m gonna fix those issues as soon as I learn about them.',
                    'This website is an open source project and you can check its code <a href="https://github.com/VitorgsRuffo/PasswordBank" target="_blank">here</a> on my Github page.',
                    'Contact me')    
    );
?>

<main>
    <div class="wrapper">
        <h2>PasswordBank</h2>
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
                        <img src="../images/projects/pb/1.png" alt="passwordbank screenshot">
                    </div>
                    <div class="slide s2">
                        <img src="../images/projects/pb/2.png" alt="passwordbank screenshot">
                    </div>
                    <div class="slide s3">
                        <img src="../images/projects/pb/3.png" alt="passwordbank screenshot">
                    </div>
                    <div class="slide s4">
                        <img src="../images/projects/pb/4.png" alt="passwordbank screenshot">
                    </div>
                    <div class="slide s5">
                        <img src="../images/projects/pb/5.png" alt="passwordbank screenshot">
                    </div>
                    <div class="slide s6">
                        <img src="../images/projects/pb/6.png" alt="passwordbank screenshot">
                    </div>
                    <div class="slide s7">
                        <img src="../images/projects/pb/7.png" alt="passwordbank screenshot">
                    </div>
                    <div class="slide s8">
                        <img src="../images/projects/pb/8.png" alt="passwordbank screenshot">
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
                    <?php echo $pwdBank[$lang][0]; ?>
                </h3>
                <p> <?php echo $pwdBank[$lang][1]; ?></p> 
                <p> <?php echo $pwdBank[$lang][2]; ?></p>
                <p> <?php echo $pwdBank[$lang][3]; ?></p>
                <p> <?php echo $pwdBank[$lang][4]; ?></p>
                <p> <?php echo $pwdBank[$lang][5]; ?></p>
            </article>
            <a href="contact.php">
                <div class="contact">
                    <p> <?php echo $pwdBank[$lang][6]; ?></p>
                    <p>E-mail: vitor.gs.ruffo@gmail.com</p>
                </div>
            </a>
        </section>
    </div>
</main>
<?php require("../templates/footer.php"); ?>