<?php
    get_header();
?>



<div class="full-page">
    
    <nav class="top-nav flex-row flex-between w-100">
        <img class="top-nav__logo" src="<?php echo get_template_directory_uri(); ?>/src/images/logo-green.png" alt="fumoco logo" width="400">

        <ul role="list" class="top-nav__list flow-row color-black">
            <a href="#"><li class="top-nav__li green-underline">O nas</li></a>
            <a href="#"><li class="top-nav__li green-underline">Oferta</li></a>
            <a href="#"><li class="top-nav__li green-underline">Praca</li></a>
            <a href="#"><li class="top-nav__li green-underline">Kontakt</li></a>
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

</div>
 


<section class="about-section">

</section>


<?php
    wp_footer();
    get_footer();
?>

