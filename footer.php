<footer>
    <hr>
    <div class="contenuFootMain">
        <div class="image">
            <?php the_custom_logo(); ?>
            <a class="site__titre"href="<?= bloginfo('url') ?>"><h1><?= bloginfo('name') ?> </h1></a>
        </div>

        <div class="colonne1">
            <h2>Liens de l'école</h2>
            <figure>
                <a href="https://www.cmaisonneuve.qc.ca/">
                    <img src="https://th.bing.com/th?id=ODLS.71b841f4-6ddf-431d-bce1-8acd53215db3&w=32&h=32&o=6&pid=13.1" alt="logo M9">
                    <figcaption>Site Web du College de Maisonneuve</figcaption>
                </a>
            </figure>
            <figure>
                <a href="https://tim.cmaisonneuve.qc.ca/">
                    <img src="https://yt3.ggpht.com/a/AATXAJwIIQUqNEVUdldAu6Brp9BXTwq7UsAom5-MEQ=s900-c-k-c0xffffffff-no-rj-mo" alt="logo Tim" width="32px">
                    <figcaption>Site du programme de TIM</figcaption>
                </a>
            </figure>
            <figure>
                <a href="https://www.facebook.com/maisonneuvetim/">
                    <svg width="32px" height="32px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000">
                        <path d="M17 2h-3a5 5 0 00-5 5v3H6v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3V2z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <figcaption>Facebook du College de Maisonneuve</figcaption>
                </a>
            </figure>
        </div>
        <div class="colonne2">
            <h2>Mes liens</h2>
            <figure>
                <a href="https://github.com/tattegrainDrey">
                    <svg width="32px" height="32px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000">
                        <path d="M16 22.027v-2.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7a5.44 5.44 0 00-1.5-3.75 5.07 5.07 0 00-.09-3.77s-1.18-.35-3.91 1.48a13.38 13.38 0 00-7 0c-2.73-1.83-3.91-1.48-3.91-1.48A5.07 5.07 0 005 5.797a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7a3.37 3.37 0 00-.94 2.58v2.87M9 20.027c-3 .973-5.5 0-7-3" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <figcaption>Mon Github</figcaption>
                </a>
            </figure>
            <figure>
                <a href="https://www.linkedin.com/in/audrey-tattegrain-80b1321b7/">
                    <svg width="32px" height="32px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000">
                        <path d="M21 8v8a5 5 0 01-5 5H8a5 5 0 01-5-5V8a5 5 0 015-5h8a5 5 0 015 5zM7 17v-7" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M11 17v-3.25M11 10v3.75m0 0c0-3.75 6-3.75 6 0V17M7 7.01l.01-.011" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <figcaption>Mon LinkedIn</figcaption>
                </a>
            </figure>
            <figure>
                <a href="https://www.facebook.com/d.a.tatte">
                    <svg width="32px" height="32px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000">
                        <path d="M17 2h-3a5 5 0 00-5 5v3H6v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3V2z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <figcaption>Mon Facebook</figcaption>
                </a>
            </figure>
        </div>
    </div>
    <div class="contenuFootSec">
        Propriété de Djenah A. Tattegrain. © Tous droits réservés.
    </div>
    <section> 
        <div class="sidebar">
            <?php dynamic_sidebar( 'footer_1' ); ?>
        </div>
    </section>   
    <section> 
        <div class="sidebar">
            <?php dynamic_sidebar( 'footer_2' ); ?>
        </div>
    </section>   
    <section> 
        <div class="sidebar">
            <?php dynamic_sidebar( 'footer_3' ); ?>
        </div>
    </section>   
</footer>
<?php wp_footer(); ?>