<?php
    get_header();
?>





<button class="top-nav__switcher" data-hamburger-color="black" aria-controls="main-nav" aria-expanded="false">
    <span class="sr-only">Menu</span>
</button>

<nav class="top-nav flex-row flex-between w-100">
    <img class="top-nav__logo" src="<?php echo get_template_directory_uri(); ?>/src/images/logo-green.png" alt="fumoco logo" width="400">

    <ul role="list" id="main-nav" class="top-nav__list flex-row color-black" aria-expanded="false">
        <a href="#"><li class="top-nav__li green-underline underline-hover">O nas</li></a>
        <a href="#"><li class="top-nav__li green-underline underline-hover">Oferta</li></a>
        <a href="#"><li class="top-nav__li green-underline underline-hover">Praca</li></a>
        <a href="#"><li class="top-nav__li green-underline underline-hover">Kontakt</li></a>
    </ul>
</nav>

<section class="hero-section flex-row w-100">

    <div class="hero-section__left-block flex-col p-4 w-50 bg-green">
        <span class="hero-section__note">Outsourcing company</span>
        <h1>Fumoco</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima officiis tenetur similique alias sed sequi laborum, eligendi fuga repellat eum inventore deleniti atque exercitationem odit quos adipisci perferendis. Reiciendis, aspernatur?</p>
        <button class="button">Zobacz więcej</button>
    </div>

    <div class="hero-section__block flex-row flex-center w-50 ">
        <img class="hero-section__img" src="<?php echo get_template_directory_uri(); ?>/src/images/fumoco-gif.svg" alt="fumoco gif animation">
    </div>

</section>
 


<section class="about-section">
    <div class="about-section__grey-h flex-col bg-black-100 w-100 text-align-center">
        <h2>O nas</h2>

        <div class="about-section__advantage-h flex-row flex-center">

            <div class="about-section__advantage-box flex-col text-align-left bg-green p-2 color-all-white">
                <span>01.</span>
                <h4>Oszczędność</h4>
                <p>lorem ispum sid dolor qui amed</p>
                <img class="advantage-box__check-icon" width="100" src="<?php echo get_template_directory_uri();?>/src/images/check.png" alt="check icon">
            </div>
            <div class="about-section__advantage-box flex-col text-align-left bg-black-200 p-2 color-all-white">
                <span>02.</span>
                <h4>Profesjonalizm</h4>
                <p>lorem ispum sid dolor qui amed</p>
                <img class="advantage-box__check-icon" width="100" src="<?php echo get_template_directory_uri();?>/src/images/check.png" alt="check icon">
            </div>
            <div class="about-section__advantage-box flex-col text-align-left bg-black-300 p-2 color-all-white">
                <span>03.</span>
                <h4>Jakość usług</h4>
                <p>lorem ispum sid dolor qui amed</p>
                <img class="advantage-box__check-icon" width="100" src="<?php echo get_template_directory_uri();?>/src/images/check.png" alt="check icon">
            </div>
            <div class="about-section__advantage-box flex-col text-align-left bg-black-400 p-2 color-all-white">
                <span>04.</span>
                <h4>Elastyczność</h4>
                <p>lorem ispum sid dolor qui amed</p>
                <img class="advantage-box__check-icon" width="100" src="<?php echo get_template_directory_uri();?>/src/images/check.png" alt="check icon">
            </div>
        </div>
    </div>

    <p class="about-section__long-text text-align-center p-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nobis illo ipsum sit blanditiis modi est error ad ratione, inventore maxime ullam. Eligendi excepturi nesciunt impedit ipsum reiciendis, quod laboriosam?</p>

    
</section>


<?php
    wp_footer();
    get_footer();
?>

