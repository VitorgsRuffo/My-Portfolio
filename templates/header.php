<?php 
    //determining the selected language:
    $ptSelected = '';
    $enSelected = '';
    $lang = '';
    if( (isset($_GET['lang']) && $_GET['lang'] === 'pt') || 
        (!isset($_GET['lang'])) || 
        (isset($_GET['lang']) && ($_GET['lang'] !== 'pt' && $_GET['lang'] !== 'en') ) 
    ){
        $ptSelected = 'selected';
        $lang = 'pt';
    }else {
        $enSelected = 'selected';
        $lang = 'en';
    }

    //header languages:
    $navigation = array(
        'pt'=>array('Portifolio', 'Projetos', 'Contato', 'Idioma'),
        'en'=>array('Portfolio', 'Projects', 'Contact', 'Language')       
    );

    //footer languages:
    $footer = array(
        'pt'=>array('Início', 'Portifolio', 'Sobre mim', 'Contato', 'Top 3 projetos', 'Galaxy Defenders - jogo em C', 'Passwordbank - Website', 'Lista de Contatos - programa em C'),
        'en'=>array('Home', 'Portfolio', 'About me', 'Contact', 'Top 3 projects', 'Galaxy Defenders - C game', 'Passwordbank - Website', 'Contact List - C program')
    );

    //title languages:
    $titles = array(
        'pt'=>array('Início', 'Projetos', 'Portifolio', 'Sobre mim', 'Contato', 'Projeto'),
        'en'=>array('Home', 'Projects', 'Portfolio', 'About me', 'Contact', 'Project') 
    );

    //page title:
    $title = "";
    switch($_SERVER['PHP_SELF']){
        case "/index.php": $title = $titles[$lang][0]; break;
        case "/pages/projects.php": $title = $titles[$lang][1]; break;
        case "/pages/portfolio.php": $title = $titles[$lang][2]; break;
        case "/pages/about-me.php": $title = $titles[$lang][3]; break;
        case "/pages/contact.php": $title = $titles[$lang][4]; break;
        default: $title = $titles[$lang][5];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title;?> | VitorgsRuffo</title>
        <meta charset="utf-8">
        <!-- this meta tag tells the browser how to control the page's dimensions and scalling so that it can adapt in different viewports-->
        <!-- a viewport is the webpage visible area to the user. Different devices have different viewports, so the page needs to adapt itself to fit in the viewports.-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- width=device-width: sets the width of the page to be equal to the width of the device that the user is using to see the page.-->
        <!-- initial-scale=1.0: sets the zoom level of the page-->
        <link rel="icon" href="../images/favicon.ico">
        <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;600&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet">       
        <link href="https://fonts.googleapis.com/css2?family=Arapey:ital@0;1&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../styles/style.css">
        <link rel="stylesheet" href="../styles/header.css">
        <link rel="stylesheet" href="../styles/footer.css">
    </head>
    <body>
        <header> <!--container for introductory content or a set of navigational links.-->
            <a href="../index.php?lang=<?php echo $lang;?>" class="logo">VitorgsRuffo</a>
            <nav>  <!--section of a page whose purpose is to provide navigation links, either within the current document or to other documents-->
                <ul>
                    <li>
                        <a href="../pages/portfolio.php?lang=<?php echo $lang;?>">
                            <?php echo $navigation[$lang][0];?>
                        </a>
                    </li>
                    <li>
                        <a href="../pages/projects.php?lang=<?php echo $lang;?>">
                            <?php echo $navigation[$lang][1];?>
                        </a>
                    </li>
                    <li id="contact-menu">
                        <a href="../pages/contact.php?lang=<?php echo $lang;?>">
                            <?php echo $navigation[$lang][2];?>
                        </a>
                    </li>
                    <li id="lang-menu">
                        <label class="label" for="select-lang"><?php echo $navigation[$lang][3];?></label>
                        <select id="select-lang">
                            <option value="pt" <?php echo $ptSelected; ?>>PT</option>
                            <option value="en"  <?php echo $enSelected; ?>>EN</option>
                        </select>
                    </li>
                </ul>
            </nav>
            <hr>
        </header>