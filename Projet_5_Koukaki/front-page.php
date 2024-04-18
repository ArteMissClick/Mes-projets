<?php get_header(); ?>

    <main id="primary" class="site-main">
        <section class="banner">
            <video class="back-video" loop muted autoplay poster="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?> ">
                <source src="<?php echo get_stylesheet_directory_uri() . '/assets/videos/koukaki_video_header.mp4'; ?> " type="video/mp4">
            </video>
            <img id="mobile-ban" class="mobile-banner" src="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?> " alt="Bannière mobile">
            <div class="pre-logo">
                <img id="logo-kou" class="logo-koukaki logo-scroll" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            </div>
        </section>
        <section id="#story" class="story">
            <article id="story1" class="story-article section-gen">
                <h2 class="title-bg rotate-1">
                    <div class="titles-page">L'histoire</div>
                </h2>
                <article id="" class="story__article rotate-1">
                    <p><?php echo get_theme_mod('story'); ?></p>
                </article>
            </article>
            <article id="characters" class="section-gen">
                        <h3 class="title-bg">
                            <div class="titles-page">Les personnages</div>
                        </h3>
                    <?php get_template_part( 'template-parts/slider' ); ?>
            </article>
            <article id="place" class="section-gen">
                <div>
                    <h3 class="title-bg">
                        <div class="titles-page">Le Lieu</div>
                    </h3>
                    <div class="clouds">
                        <img class="cloud big-cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png'; ?> " alt="Gros nuages"
                        data-bottom-top="transform:translate(30vw, -220px)" data-top-bottom="transform:translate(60vw, -215px)">
                        <img class="cloud little-cloud" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png'; ?> " alt="Petits nuages"
                        data-bottom-top="transform:translate(-5vw, -120px)" data-top-bottom="transform:translate(25vw, -80px)">
                    </div>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
            </article>
        </section>


        <section id="studio" class="section-gen rotate-1">
            <h2 class="title-bg rotate-2">
                <div class="titles-page">Studio Koukaki</div>
            </h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

    </main><!-- #main -->

<?php get_footer(); ?>
