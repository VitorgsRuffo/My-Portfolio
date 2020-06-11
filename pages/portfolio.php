<?php require("../templates/header.php"); ?>

<?php 
    $portfolio = array(
        'pt'=>array('Portifolio', 'Curriculo', 'Experiência com tecnologias de programação:',
                    'Iniciante', 'Intermediário', 'Avançado', 'Idiomas:',
                    'Português brasileiro (Nativo)', 'Inglês (Avançado)',
                    'Formação Acadêmica:',
                    'Bacharel em Ciência da Computação - conclusão em 2023<br>Universidade Estadual de Londrina, Brasil',
                    'Experiências extracurriculares:',
                    'Projeto de resolução de problemas usando o website <a href="https://www.urionlinejudge.com.br/" target="_blank">URI</a>.',
                    'Primeira fase da Maratona SBC de Programação 2019',
                    'Apresentação de Ciência da Computação na Feira das Profissões 2019 da UEL.',
                    'Projetos:',
                    'Eu desenvolvi alguns projetos desde que iniciei meu curso de ciência da computação. Os mais importantes podem ser encontrados na página de', 'Projetos</a>. Para ver mais projetos você pode checar minha página no <a href="https://github.com/VitorgsRuffo" target="_blank">Github</a>.'),
        'en'=>array('Portfolio', 'Resume:', 'Experience with programming technologies:',
                    'Beginner', 'Intermediate', 'Advanced', 'Languages:',
                    'Brazillian Portuguese (Native)', 'English (Advanced)',
                    'Educational background:',
                    'Bachelor of Computer Science - conclusion in 2023<br>State University of Londrina, Brazil',
                    'Extracurricular experiences:',
                    'Problem-solving project using <a href="https://www.urionlinejudge.com.br/" target="_blank">URI</a> website.',
                    '2019 ICPC South America/Brazil First Phase.',
                    'Computer Science presentation at the State University of Londrina\'s 2019 professions exhibition.',
                    'Projects:',
                    'I have developed some projects since I started my Computer Science course. The more important ones can be found on the', 'Projects</a> page. To see more projects you can check my <a href="https://github.com/VitorgsRuffo" target="_blank">Github page</a>.')    
    );
?>

<main>
    <div class="wrapper">
        <section class="portfolio">
            <h2> 
                <?php echo $portfolio[$lang][0]; ?>
            </h2>
            <div class="portfolio-box">
                <article id="resume">
                    <h3>
                        <?php echo $portfolio[$lang][1]; ?>
                    </h3>
                    <h4>
                        <?php echo $portfolio[$lang][2]; ?>
                    </h4>
                    <ul>
                        <li>HTML5 - <?php echo $portfolio[$lang][3]; ?></li>
                        <li>CSS3 - <?php echo $portfolio[$lang][3]; ?></li>
                        <li>JavaScript - <?php echo $portfolio[$lang][4]; ?></li>
                        <li>PHP - <?php echo $portfolio[$lang][4]; ?></li>
                        <li>MySQL - <?php echo $portfolio[$lang][3]; ?></li>
                        <li>C - <?php echo $portfolio[$lang][5]; ?></li>
                    </ul>
                    <h4>
                        <?php echo $portfolio[$lang][6]; ?>
                    </h4>
                    <ul>
                        <li><?php echo $portfolio[$lang][7]; ?></li>
                        <li><?php echo $portfolio[$lang][8]; ?></li>
                    </ul>
                    <h4><?php echo $portfolio[$lang][9]; ?></h4>
                    <p>
                        <?php echo $portfolio[$lang][10]; ?>
                    </p>
                    <h4>
                        <?php echo $portfolio[$lang][11]; ?>
                    </h4>
                    <ul>
                        <li><?php echo $portfolio[$lang][12]; ?></li>
                        <li><?php echo $portfolio[$lang][13]; ?></li>
                        <li><?php echo $portfolio[$lang][14]; ?></li>
                    </ul>
                </article>
            </div>
            <div class="portfolio-box">
                <article id="projects">
                    <h3><?php echo $portfolio[$lang][15]; ?></h3>
                    <p>
                        <?php echo $portfolio[$lang][16]; ?> <a href="projects.php?lang=<?php echo $lang; ?>"> <?php echo $portfolio[$lang][17]; ?> 
                    </p>
                </article>
            </div>
        </section>
    </div>         
</main>
<?php require("../templates/footer.php"); ?>