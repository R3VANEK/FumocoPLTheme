<?php
    get_header();
?>
 

<main id="index-main">




    <div class="title-holder">
        <span class="page-title"><?php echo get_the_title();?></span>
    </div>



    <section id="articles-holder">
    

    <?php
       echo do_shortcode("[postx_template id='20']");
    ?>

    <?php

        // if( have_posts()){

        //     while(have_posts()){
        //         the_post();
        //         the_content();
                
        //     }
        // }

        // <Link to={`/artykul/${articleCard.id}#article-meta`} className="article-details-link">
        //         <article style={{backgroundImage : `url(http://www.torun.kik.opoka.org.pl/Projekt_strony2020/img/articleMain/${articleCard.banner})`}}>
        //             <div className="card-hover-holder">
        //                 <p className="card-hover-title">{articleCard.title}</p>
        //                 <p className="card-hover-description">{articleCard.short_description}</p>
        //             </div>
        //         </article>
        //     </Link> 

        // $posts = $wpdb->get_results("SELECT * FROM wp_posts WHERE wp_posts.post_type = 'wp_articles' and wp_posts.post_title <> 'Automatycznie zapisany szkic' order by post_modified desc");
        // // print_r($posts);
        // foreach($posts as $article){


        //    $image_url = get_the_post_thumbnail_url($article->ID);
        //    $short_description = wp_strip_all_tags(substr($article->post_content, 0, 47) . '...');
        //     echo "
        //         <a href='$article->post_name' class='article-details-link'>
        //             <article style='background-image: url($image_url)'>
        //                 <div class='card-hover-holder'>
        //                     <p class='card-hover-title'>$article->post_title</p>
        //                     <p className='card-hover-description'>$short_description</p>
        //                 </div>
        //             </article>
        //         </a>
                
        //     ";
        // }
    
    ?>
    </section>

<!-- <?php echo do_shortcode("[post_grid id='42']"); ?> -->


</main>




<?php
    wp_footer();
    get_footer();
?>

