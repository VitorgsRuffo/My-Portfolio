<?php require("../templates/header.php"); ?>
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
                <h3>Description</h3>
                <p>This project is being developed yet, as you can see it doesn't have any styling. I'm building this website only for training purposes thus it is not going to be deployed. I started to work on it back in February 2020 and was developing it while I was learning the web development technologies.</p> 
                <p>I'm going to apply all technologies that I'll be learning on this website as it is my practice space. I have already used HTML5, PHP, and MySQL on it. I also plan to use CSS3, JavaScript, some JS and CSS frameworks, and a framework to help on the server-side scripting.</p>
                <p>In the site you can sign up, sign in, and have a personal list of services accounts so that you can keep track of all your passwords. If you forget your password you can reset it by following the instructions on the 'Reset your password' page. You can add as many accounts as you want into your passwordbank as long as you follow the specifications for each type of field. I mean, in the email field you have to enter a valid email address. You're also able to edit or delete an existing account. You will have a profile page where you can upload a profile picture and change your password, email, or username, but that part is not implemented yet. I'm going to implement a language changing button in the future.</p>
                <p>When it comes to security I have already worked on some aspects of it. All sensitive data are going to be encrypted on the database so that hackers cannot steal passwords in case they get access to it. The site is also protected against SQL injections with the use of prepared statements when accessing the database. PasswordBank might have a lot of security vulnerabilities that I'm not aware of yet, but I'm gonna fix those issues when I learn about them. </p>
                <p>This website is an open source project and you can check its code <a href="https://github.com/VitorgsRuffo/PasswordBank" target="_blank">here</a> on my Github page.</p>
            </article>
            <div class="contact">
                <p>Contact me</p>
                <p>E-mail: vitor.gs.ruffo@gmail.com</p>
            </div>
        </section>
    </div>
</main>
<?php require("../templates/footer.php"); ?>