        <div class="main-block block-ct">
            <!-- COUNTDOWN -->
            <div class="count-down-wrapper">
                <div class="count-down-content">
                    <div class="count-down-date">
                        <div class="text-center">
                            <span class="lb-big">26</span>
                            <span class="icon-and"></span>
                            <span class="lb-big">27</span>
                        </div>
                        <div class="text-center septemper-label">
                            <span class="lb-3-line lb-medium">September 2015</span>
                        </div>

                        <div class="text-center soyer-label">
                            <span class="lb-header-special">
                                Soyez prêts pour le prochain départ
                            </span>
                        </div>

                        <div class="countdown-clock">
                            <div class="block-count-down date">
                                <span class="count-down-lb">Jours</span>
                                <div class="block-holder-countdown"><span>0</span></div>
                                <div class="block-holder-countdown"><span>0</span></div>
                                <div class="block-holder-countdown"><span>0</span></div>
                            </div>
                            <div class="block-count-down hour">
                                <span class="count-down-lb text-center">Heures</span>
                                <div class="block-holder-countdown"><span>0</span></div>
                                <div class="block-holder-countdown"><span>0</span></div>
                            </div>
                            <div class="block-count-down min">
                                <span class="count-down-lb text-center">Minutes</span>
                                <div class="block-holder-countdown"><span>0</span></div>
                                <div class="block-holder-countdown"><span>0</span></div>
                            </div>
                            <div class="block-count-down second">
                                <span class="count-down-lb text-center">Secondes</span>
                                <div class="block-holder-countdown"><span>0</span></div>
                                <div class="block-holder-countdown"><span>0</span></div>
                            </div>
                        </div>
                        <div class="text-center resultats">
                            <span class="lb-2-line lb-medium lb-resultals" >RÉSULTATS</span>
                        </div>
                    </div>



                </div>
            </div>
            <!-- END COUNTDOWN -->

            <!-- MAIN CONTENT -->
            <div class="main-home-content">
                <div id="featured">
                    <div class="block block-3">
                        <h2 class="lb-1-line"><span>Actualités</span></h2>
                        <div class="block-content-featured"> 

                            <ul class="slider-actualites">
                                <li>
                                    <h4 class="lb-regular blue-color">Your race pictures</h4>
                                    <span class="blue-color lb-date-feature-block">Date : 8/10/14</span>
                                    <div>
                                        <br>
                                        <p>Many of you ask us where and when to önd the photos that
                                        were taken during the race. We are announcing that the
                                        photos will be online Thursday, 9/10 at the site of our
                                        ww.atelierphoto-pontarlier.net technical partner </p>
                                    </div>
                                </li>
                                <li>
                                    <h4 class="lb-regular blue-color">Your race pictures</h4>
                                    <span class="blue-color lb-date-feature-block">Date : 8/10/14</span>
                                    <div>
                                        <br>
                                        <p>Many of you ask us where and when to önd the photos that
                                        were taken during the race. We are announcing that the
                                        photos will be online Thursday, 9/10 at the site of our
                                        ww.atelierphoto-pontarlier.net technical partner </p>
                                    </div>
                                </li>
                                <li>
                                    <h4 class="lb-regular blue-color">Your race pictures</h4>
                                    <span class="blue-color lb-date-feature-block">Date : 8/10/14</span>
                                    <div>
                                        <br>
                                        <p>Many of you ask us where and when to önd the photos that
                                        were taken during the race. We are announcing that the
                                        photos will be online Thursday, 9/10 at the site of our
                                        ww.atelierphoto-pontarlier.net technical partner </p>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="block block-3">
                        <h2 class="lb-1-line"><span>À propos</span></h2>
                        <div class="block-content-featured"> 
                            <h4 class="lb-regular blue-color">The 10th edition</h4>
                            <div>
                                <p>The 10th edition of Trail Boars (and the "trail of Marcassins") retains its traditional route on Larmont Massif with starting placs St-Besnigne and arrival at the stadium Robert Tempesta Pourny near the room.</p>
                                <br>
                                <p>We also keep the duo replay on the course boars (20km + 14km with replay Gounefay on the site).</p>
                            </div>
                        </div>
                    </div>
                    <div class="block block-3">
                        <h2 class="lb-1-line"><span>Découvrez</span></h2>
                        <div class="block-content-featured"> 
                            <span class="lb-regular blue-color bold lb-lesparcours" >
                                Les parcours. <br/>
                            </span>
                            <span class="blue-color">Découvrez tous les parcours sur la carte</span>
                            <a href="#" title="" class="block img-map-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/resources/imgs/3d-box.png"  alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="sponsor-wrapper">
                    <h2 class="lb-1-line"><span><?php echo __( 'SPONSORS', 'theme_sangiler' ) ?></span></h2>
                    <span id="sponsor-next" class="sponsor-next"><img src="<?php echo get_template_directory_uri(); ?>/resources/imgs/right.png"balt=""></span>
                    <span id="sponsor-prev" class="sponsor-prev"><img src="<?php echo get_template_directory_uri(); ?>/resources/imgs/left.png"balt=""></span>
                    <ul class="sponsor-slider">
                        <li>
                            <a href="#" title=""><img src="<?php echo get_template_directory_uri(); ?>/resources/sponsor/sp1.png" alt=""></a>
                        </li>
                        <?php
                            /*
                             * GET HEADER SLIDER
                             *
                             */
                            global $post;
                            $argsSponsor = array('numberposts' => 50,'post_type' => 'sponsor','orderby' => 'DESC');
                            $custom_postsponsor = get_posts($argsSponsor);
                            foreach ($custom_postsponsor as $post) : setup_postdata($post);
                        ?>
                            <li>
                                <a href="<?php echo get_post_meta(get_the_id(), 'sponsor_link_item', true) ?>" target="_blank" title="<?php echo get_the_title(get_the_ID()) ?>">
                                    <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
                                </a>
                               
                            </li>
                        <?php 
                            endforeach;
                            /*
                             * GET HEADER SLIDER
                             *
                             */
                        ?>
                    </ul>
                </div>

            </div>
            <!-- MAIN CONTENT -->
        </div>