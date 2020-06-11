        <footer>  <!-- typically contains information about the author of the section, copyright data or links to related documents. -->
            <ul class="footer-links">
                <li>
                    <a href="../index.php?lang=<?php echo $lang;?>">
                        <?php echo $footer[$lang][0]; ?>
                    </a>
                </li>
                <li>
                    <a href="../pages/portfolio.php?lang=<?php echo $lang;?>">
                    <?php echo $footer[$lang][1]; ?>
                    </a>
                </li>
                <li>
                    <a href="../pages/about-me.php?lang=<?php echo $lang;?>">
                    <?php echo $footer[$lang][2]; ?>
                    </a>
                </li>
                <li>
                    <a href="../pages/contact.php?lang=<?php echo $lang;?>">
                    <?php echo $footer[$lang][3]; ?>
                    </a>
                </li>
            </ul>
            <ul class="footer-top-projects">
                <li>
                    <p>
                        <?php echo $footer[$lang][4]; ?>
                    </p>
                </li>
                <li>
                    <a href="../pages/galaxy-defenders.php?lang=<?php echo $lang;?>">
                        <?php echo $footer[$lang][5]; ?>
                    </a>
                </li>
                <li>
                    <a href="../pages/passwordbank.php?lang=<?php echo $lang;?>">
                        <?php echo $footer[$lang][6]; ?>
                    </a>
                </li>
                <li>
                    <a href="../pages/contact-list.php?lang=<?php echo $lang;?>">
                        <?php echo $footer[$lang][7]; ?>
                    </a>
                </li>
            </ul>
            <div class="socialMedia">
                <a href="https://github.com/VitorgsRuffo" target="_blank">
                    <img src="../images/gh-logo.png" alt="github page link">
                </a>
                <a href="https://www.youtube.com/channel/UCBVNcZwlLqROnVzAiPeE1lg" target="_blank">
                    <img src="../images/yt-logo.png" alt="youtube channel link">
                </a>
            </div>
        </footer>
        <script src="../scripts/select-lang.js"></script>
    </body>
</html>