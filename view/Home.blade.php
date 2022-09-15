<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/fec6180dbb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/Home.css">
    <title>Home</title>
</head>
<body>
    <header>
        <nav>
            <?php 
            if ( !$login ) {
            ?>
            <a href="/login" class="header-button float-right">Login</a>
            <a href="/sign-up" class="header-button float-right">Sign up</a>
            <?php
            } else {
            ?>
            <a href="/user-account">
                <img class="user-account" src="/assets/img/logo/user-account.svg" alt="user cacount image">
            </a>
            <?php
            }
            ?>
            <span class="welcome-text">welcome to shahram page</span>
        </nav>
        <div class="menu">
            <ul class="left-menu">
                <li>
                    <a href="/user-account">
                        <i class="fa-solid fa-house-user"></i>
                    </a>
                </li>
                <li>
                    <a href="/blog">blog</a>
                    <ul class="dropdown">
                        <li><a href="/dropDown">DROPDOWN1</a></li>
                        <li><a href="/dropDown">DROPDOWN2</a></li>
                        <li><a href="/dropDown">DROPDOWN3</a></li>
                        <li><a href="/dropDown">DROPDOWN4</a></li>
                        <li><a href="/dropDown">DROPDOWN5</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/our-team">our team</a>
                    <ul class="dropdown">
                        <li><a href="/dropDown">DROPDOWN1</a></li>
                        <li><a href="/dropDown">DROPDOWN2</a></li>
                        <li><a href="/dropDown">DROPDOWN3</a></li>
                        <li><a href="/dropDown">DROPDOWN4</a></li>
                        <li><a href="/dropDown">DROPDOWN5</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/about-us">about us</a>
                    <ul class="dropdown">
                        <li><a href="/dropDown">DROPDOWN1</a></li>
                        <li><a href="/dropDown">DROPDOWN2</a></li>
                        <li><a href="/dropDown">DROPDOWN3</a></li>
                        <li><a href="/dropDown">DROPDOWN4</a></li>
                        <li><a href="/dropDown">DROPDOWN5</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/projects">projects</a>
                    <ul class="dropdown">
                        <li><a href="/dropDown">DROPDOWN1</a></li>
                        <li><a href="/dropDown">DROPDOWN2</a></li>
                        <li><a href="/dropDown">DROPDOWN3</a></li>
                        <li><a href="/dropDown">DROPDOWN4</a></li>
                        <li><a href="/dropDown">DROPDOWN5</a></li>
                    </ul>
                </li>
                <li>
                    <a href="/our-customers">our customers</a>
                    <ul class="dropdown">
                        <li><a href="/dropDown">DROPDOWN1</a></li>
                        <li><a href="/dropDown">DROPDOWN2</a></li>
                        <li><a href="/dropDown">DROPDOWN3</a></li>
                        <li><a href="/dropDown">DROPDOWN4</a></li>
                        <li><a href="/dropDown">DROPDOWN5</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="right-menu">
                <li>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </li>
                <li>
                    <i class="fa-solid fa-earth-asia"></i>
                </li>
                <li>
                    <i class="fa-solid fa-circle-half-stroke"></i>
                </li>
            </ul>
        </div>
    </header>
    <div class="body">

    </div>
    <footer>
        <img class="enamad" src="/assets/img/enamad.png" alt="image of enamad">
        <div class="social-networks">
            <a href="https://example.com">
                <img class="fa-email" src="/assets/img/logo/email.svg" alt="logo of the email">
            </a>
            <a href="https://example.com">
                <img class="fa-github" src="/assets/img/logo/github.svg" alt="logo of the github">
            </a>
            <a href="https://example.com">
                <img class="fa-telegram" src="/assets/img/logo/telegram.svg" alt="logo of the telegram">
            </a>
            <a href="https://example.com">
                <img class="fa-instagram" src="/assets/img/logo/instagram.svg" alt="logo of the instagram">
            </a>
        </div>
        <fieldset class="useful-links">
            <legend>Useful links</legend>
            <a href="/blog">blog</a>
            <a href="/our-team">our team</a>
            <a href="/our-costumers">our costumers</a>
        </fieldset>
        <div class="inform">
            <label for="email" style="margin: 15px 0;display: block;width: 100%;">We can inform you :</label> 
            <input type="email" name="email" id="email" autocomplete="off" placeholder="your email address...">
            <input type="submit" value="Go" name="submit">
        </div>
        <div class="copy-right">
            <span class="copy-right-text">© 2022 <a href="/">Shahram-Page</a> All rights reserved.</span>
        </div>
    </footer>
</body>
</html>