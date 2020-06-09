<?php require("../templates/header.php"); ?>
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
                <h3>Description</h3>
                <p>This project is a C game based on Space Invaders built by <a href="https://github.com/OlavoNascimento" target="_blank">Olavo Nascimento</a>, Vitor G. S. Ruffo, and  <a href="https://github.com/wellintonpiassa" target="_blank">Wellinton Piassa</a>. It was made as an assignment for the programming first-year discipline of the State University of Londrina's Computer Science course.</p>
                <p>That was my first big project and it took me and my college fellows three months to finish it. We had to work hard to get it working before the deadline. At the time we started it I didn't have much programming experience thus besides helping my friends build the game I had to learn the C language. We used a library called Allegro 5 that helped us a lot in the process, you can check its documentation on this <a href="https://liballeg.org/api.html" target="_blank">link</a>.</p>
                <p>All the magic behind this game relies on moving images on the screen at very specific moments. Be aware that any point on the game screen has an X and Y coordinates that locate it. For instance, the player ship image is located at a specific part of the screen when the game starts, if we press the right arrow (->) of the keyboard we're going to add 10 to the ship image X coordinate moving it to the right. The thing is, we check if the location of any image on the screen needs to change because some event just happened then we redraw all images on the screen at its current location. That happens 60 times per second, that's why the game seems to be very fluid. Examples of events can be the act of pressing a specific key (space bar, for example), or just time passing.</p>
                <p>This is an open source project and you can check its code   <a href="https://github.com/VitorgsRuffo/Galaxy-Defenders" target="_blank">here</a> on my Github page.</p>

                <h3>Download the game</h3>
                <ul>
                    <a href="../download/galaxy-defenders.rar" download>
                        <div class="downloadButton">
                            <li>Windows Version</li>
                        </div>
                    </a>
                    <div class="downloadButton">
                        <li>Ubuntu Version</li>
                        <p>*Not available yet</p>
                    </div>
                </ul>
            </article>
            <div class="contact">
                <p>Contact me</p>
                <p>E-mail: vitor.gs.ruffo@gmail.com</p>
            </div>
        </section>
    </div>
</main>
<?php require("../templates/footer.php"); ?>