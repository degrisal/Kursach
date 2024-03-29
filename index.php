<?php

require_once('config/connect.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body> 
        <header class="header">
            <div class="container">
                <div class="sign__in-form">
                    <h5 class="sign__in-title">
                        Sigh In
                    </h5>
                    <input class="sign__in-login" type="text" placeholder="Type your login">
                    <input class="sign__in-login" type="password" placeholder="Type your password">
                        <a href="#" class="sign__in-link">
                            Accept
                        </a>
                </div>
                <div class="sign__up-form">
                    <h5 class="sign__up-title">
                        Sigh Up
                    </h5>
                    <input class="sign__up-login" type="text" placeholder="Create your login">
                    <input class="sign__up-login sign__up-password-1" type="password" placeholder="Create your password">
                    <input class="sign__up-login sign__up-password-2" type="password" placeholder="Repeat your password">
                        <a href="#" class="sign__up-link">
                            Accept
                        </a>
                </div>
                <div class="sign__in-block">
                </div>
                <div class="sign__up-block">

                </div>
                <nav class="nav">
                    <a class="header__logo" href="#!" >
                        <img src="images/icons/logo.svg" alt="logo" class="header__logo-img">
                    </a>
                    <ul class="header__items">
                        <li class="header__item">
                            <a href="#" class="header__link">
                                Home
                            </a>
                        </li>
                        <li class="header__item">
                            <a href="#" class="header__link">Services</a>
                            <img class="header__arrow" src="images/icons/down-arrow.svg" alt="">
                            <ul class="header__items-inside">
                                <li><a href="#">HTML</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">JS</a></li>
                            </ul>
                        </li>
                        <li class="header__item">
                             <a href="#" class="header__link">Solutions</a>
                             <img class="header__arrow" src="images/icons/down-arrow.svg" alt="">
                             <ul class="header__items-inside">
                                <li><a href="#">HTML</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">JS</a></li>
                            </ul>
                        </li>
                        <li class="header__item">
                             <a href="#" class="header__link">Resources</a>
                             <img class="header__arrow" src="images/icons/down-arrow.svg" alt="">
                            <ul class="header__items-inside">
                                <li><a href="#">HTML</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">JS</a></li>
                            </ul>
                        </li>
                        <li class="header__item">
                            <a href="#" class="header__link">Contact us</a>
                        </li>
                    </ul>
                    <div class="header__buttons">
                        <button class="header__signIn">
                            <a href="#" class="header__signIn-link">
                                Sign in
                            </a>
                        </button>
                        <button class="header__signUp">
                            <a href="#" class="header__signUp-link">
                                Sign up
                            </a>
                        </button>
                    </div>
                    <div class="burger">
                        <span></span>
                    </div>
                </nav>
                <div class="header__content">
                    <div class="header__infoblock">
                        <h1 class="header__title">
                            Scratch removal on glass
                        </h1>
                        <p class="header__text">
                            Lorem ipsum dolor sit amet. Est quis accusantium in dolore obcaecatised iste tenetur ut delectus quia est facilis magni.
                        </p>
                        <div class="header__btns df">
                            <button class="header__content-button header__content-button-1">
                                <a href="#" class="header__content-link header__content-link-1">
                                    Get Started
                                </a>
                            </button>
                            <button class="header__content-button header__content-button-2">
                                <a href="#" class="header__content-link header__content-link-2">
                                    How it works
                                </a>
                            </button>
                        </div>
                    </div>
                    <img class="header__img" src="images/header/worker.png" alt="">
                </div>
            </div>
        </header>
        <section class="make__order">
            <div class="container">

            </div>
        </section>
        <section class="partners">
            <div class="container">
                <h2 class="partners__title">
                    Our Partners
                </h2>
                <div class="partners__imgBlock">
                    <img src="images/partners/logo-part-1.png" alt="" class="partners__logo">
                    <img src="images/partners/logo-part-2.png" alt="" class="partners__logo">
                    <img src="images/partners/logo-part-3.png" alt="" class="partners__logo">
                    <img src="images/partners/logo-part-4.png" alt="" class="partners__logo">
                    <img src="images/partners/logo-part-5.png" alt="" class="partners__logo">
                    <img src="images/partners/logo-part-6.png" alt="" class="partners__logo">
                </div>
            </div>
        </section>
        <main class="main">
            <div class="container">
                <h2 class="main__title">
                    3 Reasons Why Choose Us
                </h2>
                <p class="main__text">
                    Lorem ipsum dolor sit amet. Est quis accusantium in dolore obcaecatised iste tenetur ut delectus quia est facilis magni.
                </p>
                <div class="main__inner">
                    <div class="main__item">
                        <div class="main__logoBlock main__logoBlock-1">
                            <img src="images/icons/runner.svg" alt="" class="main__logo">
                        </div>
                        <h3 class="main__item-title">
                            Fast process
                        </h3>
                        <p class="main__item-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <div class="df">
                            <a href="#!" class="main__item-link">Read More</a>
                            <img src="images/icons/arrow_right_line.svg" alt="">
                        </div>
                    </div>
                    <div class="main__item">
                        <div class="main__logoBlock main__logoBlock-2">
                            <img src="images/icons/clean.svg" alt="" class="main__logo">
                        </div>
                        <h3 class="main__item-title">
                            Work clean
                        </h3>
                        <p class="main__item-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <div class="df">
                            <a href="#!" class="main__item-link">Read More</a>
                            <img src="images/icons/arrow_right_line.svg" alt="">
                        </div>
                    </div>
                    <div class="main__item">
                        <div class="main__logoBlock main__logoBlock-3">
                            <img src="images/icons/money.svg" alt="" class="main__logo">
                        </div>
                        <h3 class="main__item-title">
                            Money saver
                        </h3>
                        <p class="main__item-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <div class="df">
                            <a href="#!" class="main__item-link">Read More</a>
                            <img src="images/icons/arrow_right_line.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <section class="works">
            <div class="container">
                <div class="works__inner df element-animation">
                    <div class="works__secondInner">
                        <h3 class="works__title">
                            John Redmor
                        </h3>
                        <p class="works__text">
                        Lorem ipsum dolor sit amet. Est quis accusantium in dolore obcaecatised iste tenetur ut delectus quia est facilis magni.
                                            </p>
                        <div class="works__btns">
                            <button class="works__btn">
                                <a href="#!" class="works__btn-link">
                                    Get Started
                                </a>
                            </button>
                            <button class="works__btnChange">
                                <a href="#!" class="works__btn-linkChange">
                                    <img class="works__imgChange" src="images/works/pen.png" alt="Change">
                                </a>
                            </button>
                            <button class="works__btnDel">
                                <a href="#!" class="works__btn-linkDel">
                                    <img class="works__imgDel" src="images/works/trash.png" alt="trash">
                                </a>
                            </button>
                        </div>
                    </div>
                    <img class="works__img" src="images/works/works__crash.png" alt="works-crash">
                </div>
                <div class="works__inner works__inner-second df element-animation">
                    <img class="works__img" src="images/works/works__clean.png" alt="works-clean">
                    <div class="works__secondInner">
                        <h3 class="works__title">
                            Jess Nets
                        </h3>
                        <p class="works__text">
                            Lorem ipsum dolor sit amet. Est quis accusantium in dolore obcaecatised iste tenetur ut delectus quia est facilis magni.
                        </p>
                        <div class="works__btns">
                            <button class="works__btn">
                                <a href="#!" class="works__btn-link">
                                    Get Started
                                </a>
                            </button>
                            <button class="works__btnChange">
                                <a href="update.php?id=<?= $id[0]?>" class="works__btn-linkChange">
                                    <img class="works__imgChange" src="images/works/pen.png" alt="Change">
                                </a>
                            </button>
                            <button class="works__btnDel">
                                <a href="#!" class="works__btn-linkDel">
                                    <img class="works__imgDel" src="images/works/trash.png" alt="trash">
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php 
    
    

 
$query = "SELECT `Description of the problem`.*, `prices`.price AS price, `executors`.names AS names
FROM `Description of the problem`
JOIN `prices`
ON `Description of the problem`.`pricelist`=`prices`.`id`
JOIN `executors`
ON `Description of the problem`.`executor`=`executors`.`id`";;
$result = mysqli_query($connect, $query);

if ($result) {
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if (empty($data)) {
        echo 'Нет данных для отображения.';
    } else {
        foreach ($data as $row) {
            echo '<div class="works__inner works__inner-second df element-animation">';
            echo '<img class="works__img" src="' . $row['photo'] . '" alt="works-clean">';
            echo '<div class="works__secondInner">';
            echo '<h3 class="works__title">' . $row['name'] . ' ' . $row['secondname'] . '</h3>';
            echo '<p class="works__text">' . $row['description'] . '</p>';
            echo '<p class="works__text">  Price: ' . $row['price'] . '</p>';
            echo '<p class="works__text">  Executor: ' . $row['names'] . '</p>';
            echo '<div class="works__btns">';
            echo '<button class="works__btn">';
            echo '<a href="#!" class="works__btn-link">Get Started</a>';
            echo '</button>';
            echo '<button class="works__btnChange">';
            echo '<a href="update.php?id=' . $row['id'] . '" class="works__btn-linkChange">';
            echo '<img class="works__imgChange" src="images/works/pen.png" alt="Change">';
            echo '</a>';
            echo '</button>';
            echo '<button class="works__btnDel">';
            echo '<a href="delete.php?id=' . $row['id'] . '" class="works__btn-linkDel">';
            echo '<img class="works__imgDel" src="images/works/trash.png" alt="trash">';
            echo '</a>';
            echo '</button>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }

    mysqli_free_result($result);
} else {
    echo "Ошибка запроса: " . mysqli_error($connect);
}

        ?>

        <section class="crUsluga">
            <div class="container">
                <div class="crUsluga__buttonPlace">
                </div>
                <button class="crUsluga__btn">
                    <a href="#!" class="crUsluga__btn-link">
                        Create Your Service!
                    </a>
                </button>
               
                <div class="crUsluga-form">
                    <h1 class="crUsluga__titleProblem">
                        Order Form(Explain your service)
                    </h1>
        <div class="df">
            <div class="crUsluga__half" style="margin-right: 20px;">
                <p class="crUsluga__name">
                    Name 
                </p>
                <form action="create.php" method="post">
                <input class="crUsluga__input-name" type="text" placeholder="Type Your Name" name="name">
            </div>
            <div class="crUsluga__half">
                <p class="crUsluga__name">
                    SecondName
                </p>
                <input class="crUsluga__input-name" type="text" placeholder="Type Your SecondName" name="secondname">
            </div>
        </div>
<div class="df">
    <div class="crUsluga__half" style="margin-right: 20px;">
        <p class="crUsluga__name">
            Telephone
        </p>
        <input class="crUsluga__input-name" type="number" placeholder="Type Your Telephone" name="telephone">
    </div>
    <div class="crUsluga__half">
        <p class="crUsluga__name">
            EMail
        </p>
        <input class="crUsluga__input-name" type="text" placeholder="Type Your EMail" name="email">
    </div>
</div>
<div class="crUsluga__dg">
    <div class="crUsluga__half" style="margin: 0px auto;">
        <p class="crUsluga__name">
            Your Photo
        </p>
            <label class="input-file">
                <input type="text" name="photo">
            
            </label>
    </div>

    <?php
$prices = mysqli_query($connect, "SELECT * FROM `prices`");
$prices = mysqli_fetch_all($prices);
?>
<form method="post" action="create.php">
    <div class="crUsluga__half" style="margin: 0px auto;">
        <p class="crUsluga__name">
            Your Prices
        </p>
        <select class="crUsluga__box" name="pricelist">
            <?php foreach ($prices as $price): ?>
                <option value="<?=$price[0]?>"><?=$price[1]?></option>
            <?php endforeach; ?>
        </select>
    </div>


<?php
$executors = mysqli_query($connect, "SELECT * FROM `executors`");
$executors = mysqli_fetch_all($executors);
?>
<form method="post" action="create.php">
 <div class="crUsluga__half" style="margin: 0px auto;">
        <p class="crUsluga__name">
            Your Executors
        </p>
        <select class="crUsluga__box" name="executor">
            <?php foreach ($executors as $executor): ?>
                <option value="<?=$executor[0]?>"><?=$executor[1]?></option>
            <?php endforeach; ?>
        </select>
    </div>
  

    <div class="crUsluga__half crUsluga__half-decr">
        <p class="crUsluga__textarea-name">
            Your Description
        </p>
        <textarea class="crUsluga__textarea" placeholder="Type Your Description..." name="description"></textarea>
    <button type="submit" style="display:block;margin:0 auto;cursor:pointer;">Accept</button>
</form>
            </section>
        <section class="services">
            <div class="container">
                <h3 class="services__title">
                    Our Services
                </h3>
                <p class="services__text">
                    Lorem ipsum dolor sit amet. Est quis accusantium in dolore obcaecatised iste tenetur ut delectus quia est facilis magni.
                </p>
                <div class="services__inner df">
                    <div class="services__item">
                        <img class="services__logo" src="images/services/logo-1.svg" alt="logo">
                        <h4 class="services__item-title">
                            Impact on glass
                        </h4>
                        <p class="services__item-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <div class="df">
                            <a href="#!" class="main__item-link">Read More</a>
                            <img src="images/icons/arrow_right_line.svg" alt="">
                        </div>
                    </div>
                    <div class="services__item ">
                        <img class="services__logo" src="images/services/logo-2.svg" alt="logo">
                        <h4 class="services__item-title">
                            Acid tag
                        </h4>
                        <p class="services__item-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <div class="df">
                            <a href="#!" class="services__item-link">Read More</a>
                            <img src="images/icons/arrow_right_line.svg" alt="">
                        </div>
                    </div>
                    <div class="services__item">
                        <img class="services__logo" src="images/services/logo-3.svg" alt="logo">
                        <h4 class="services__item-title services__item-title-glass">
                            Decontamination glass
                        </h4>
                        <p class="services__item-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <div class="df">
                            <a href="#!" class="services__item-link">Read More</a>
                            <img src="images/icons/arrow_right_line.svg" alt="">
                        </div>
                    </div>
                    <div class="services__item">
                        <img class="services__logo" src="images/services/logo-4.svg" alt="logo">
                        <h4 class="services__item-title services__item-title-steel">
                            Treatment of scratches on stainless steel
                        </h4>
                        <p class="services__item-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        </p>
                        <div class="df">
                            <a href="#!" class="services__item-link">Read More</a>
                            <img src="images/icons/arrow_right_line.svg" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="request">
            <div class="container">
                <h3 class="request__title">
                    Request A Quote
                </h3>
                <p class="request__text">
                    Lorem ipsum dolor sit amet. Est quis accusantium in dolore obcaecatised iste tenetur ut delectus quia est facilis magni.
                </p>    
                <div class="request__block">
                    <p class="request__name">
                        Name
                    </p>
                    <input class="request__input-name" type="text" placeholder="Type Your Name">
                    <div class="request__inner df">
                        <div class="request__innerSecond">
                            <p class="request__email">
                                Email
                            </p>
                            <input class="request__input-email" type="email" placeholder="Type Your Email">
                        </div>
                        <div class="request__innerSecond">
                            <p class="request__phone">
                                Phone
                            </p>
                            <input class="request__input-phone" type="text" placeholder="Type your Phone">
                        </div>
                    </div>
                    <div class="request__inner df">
                        <div class="request__innerSecond">
                            <p class="request__projectType">
                                Project Type
                            </p>
                            <div class="request__box">
                                <span class="request__arrow"></span>
                                <select>
                                  <option>Back</option>
                                  <option>Front</option>
                                  <option>Full</option>
                                  <option selected></option>
                                </select>
                            </div>
                        </div>
                        <div class="request__innerSecond">
                            <p class="request__Country">
                                Country
                            </p>
                            <div class="request__box">
                                <span class="request__arrow"></span>
                                <select>
                                  <option>Russia</option>
                                  <option>Germany</option>
                                  <option>English</option>
                                  <option selected></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <p class="request__message">
                        Message
                    </p>
                    <textarea class="request__textarea" placeholder="Type Your Message..."></textarea>
                    <button class="request__btn">
                        <a class="request__link" href="#!">
                            Submit Now
                        </a>
                    </button>
                </div>
            </div>
        </section>
        <section class="customer"> 
            <div class="container">
                <h3 class="customer__title">
                    What our customers say about us
                </h3>
                <div class="customer__inner df">
                    <img class="customer__img" src="images/customer/customer__img.png" alt="customer-img">
                    <div class="customer__innerSecond">
                        <div class="customer__line">

                        </div>
                        <p class="customer__name">
                            Mikel Morle Diko
                        </p>
                        <div class="customer__innerThird df">
                            <img class="customer__star" src="images/icons/customer__star.svg" alt="">
                            <img class="customer__star" src="images/icons/customer__star.svg" alt="">
                            <img class="customer__star" src="images/icons/customer__star.svg" alt="">
                            <img class="customer__star" src="images/icons/customer__star.svg" alt="">
                            <img class="customer__star" src="images/icons/customer__star.svg" alt="">
                        </div>
                        <div class="customer__innerFour df">
                            <img class="customer__marks" src="images/icons/customer__marks.svg" alt="">
                            <div class="container-fluid">
                                <div class="customer__slider">
                                    <div class="customer__item">
                                        <p class="customer__text">
                                            Lorem ipsum dolor sit amet. Est quis accusantium in dolore obcaecatised iste tenetur ut delectus quia est facilis magni. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        </p>
                                    </div>
                                    <div class="customer__item">
                                        <p class="customer__text">
                                            Lorem ipsum dolor sit amet. Est quis accusantium in dolore obcaecatised iste tenetur ut delectus quia est facilis magni. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        </p>
                                    </div>
                                    <div class="customer__item">
                                        <p class="customer__text">
                                            Lorem ipsum dolor sit amet. Est quis accusantium in dolore obcaecatised iste tenetur ut delectus quia est facilis magni. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        </p>
                                    </div>
                                    <div class="customer__item">
                                        <p class="customer__text">
                                            Lorem ipsum dolor sit amet. Est quis accusantium in dolore obcaecatised iste tenetur ut delectus quia est facilis magni. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="customer__noSlider">
                            <p class="customer__text">
                                Lorem ipsum dolor sit amet. Est quis accusantium in dolore obcaecatised iste tenetur ut delectus quia est facilis magni. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="footer__inner df">
                    <div class="footer__info">
                        <img class="footer__logo" src="images/icons/footer__logo.svg" alt="">
                        <p class="footer__text">
                            Lorem ipsum dolor sit amet. Est quis accusantium in dolore obcaecatised iste tenetur ut delectus quia est facilis magni.
                        </p>
                        <h5 class="footer__title">
                            Subscribe to our newsletter
                        </h5>
                        <form class="footer__form">
                            <input class="footer__input" type="text" placeholder="Enter your email address">
                            <button class="footer__btn">Subscribe</button>
                        </form>
                    </div>
                    <div class="footer__innerSecond df">
                        <ul class="footer__list">
                            <li class="footer__item">
                                <h5 class="footer__list-title">
                                    Resources
                                </h5>
                            </li>
                            <li class="footer__item">
                                <a href="#!" class="footer__link">
                                    News
                                </a>
                            </li>
                            <li class="footer__item">
                                <a href="#!" class="footer__link">
                                    Blog
                                </a>
                            </li>
                            <li class="footer__item">
                                <a href="#!" class="footer__link">
                                    Help Center
                                </a>
                            </li>
                            <li class="footer__item">
                                <a href="#!" class="footer__link">
                                    Tutorials
                                </a>
                            </li>
                        </ul>
                        <ul class="footer__list">
                            <li class="footer__item">
                                <h5 class="footer__list-title">
                                    Quick Links
                                </h5>
                            </li>
                            <li class="footer__item">
                                <a href="#!" class="footer__link">
                                    Home
                                </a>
                            </li>
                            <li class="footer__item">
                                <a href="#!" class="footer__link">
                                    Services
                                </a>
                            </li>
                            <li class="footer__item">
                                <a href="#!" class="footer__link">
                                    Solutions
                                </a>
                            </li>
                            <li class="footer__item">
                                <a href="#!" class="footer__link">
                                    Resources
                                </a>
                            </li>
                            <li class="footer__item">
                                <a href="#!" class="footer__link">
                                    Contact us
                                </a>
                            </li>
                        </ul>
                        <ul class="footer__list">
                            <li class="footer__item">
                                <h5 class="footer__list-title">
                                    Company
                                </h5>
                            </li>
                            <li class="footer__item">
                                <a href="#!" class="footer__link">
                                    About us
                                </a>
                            </li>
                            <li class="footer__item">
                                <a href="#!" class="footer__link">
                                    Pricing
                                </a>
                            </li>
                            <li class="footer__item">
                                <a href="#!" class="footer__link">
                                    Careers
                                </a>
                            </li>
                            <li class="footer__item">
                                <a href="#!" class="footer__link">
                                    Tutorials
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer__line df">
                    <div class="footer__leftPath">
                        <a href="#!" class="footer__subtext">
                            Terms of Service                        
                        </a>
                        <a href="#!" class="footer__subtext">
                            Privacy Policy
                        </a>
                        <a href="#!" class="footer__subtext">
                            Cookies Policy
                        </a>
                    </div>
                    <div class="footer__rigthPath">
                        <p class="footer__subtext">
                            All Rights Reserved 2022
                        </p>
                    </div>
                </div>
            </div>
        </footer>

    <script src="js/main.min.js"></script>
</body>
</html>