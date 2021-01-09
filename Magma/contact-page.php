<?php 

/* 

Template Name: Contact Page 
Author Name: Mohammad Azaz
Email: mohammadazaz966@gmail.com

*/

?>

<?php get_header(); ?>

<!-- Add Hero Carousel -->
<section id="hero">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="splide splide-carousel">
                                    <div class="my_arrows">
                                        <div class="my_arrow my_arrow_prev"></div>
                                        <div class="my_arrow my_arrow_next"></div>
                                    </div>
                                    <div class="splide__track">
                                        <ul class="splide__list">

                                            <?php global $post;?>
                                            <?php $the_query=
                                            array(
                                                'post_type' => 'slider_feature',
                                                'order'=>'ASC',
                                                'tax_query' => array(
                                                  array(
                                                    'taxonomy' => 'slider_cat',
                                                    'field' => 'slug',
                                                    'terms' => get_theme_mod('contactuspageslider')
                                                  )
                                                  ),
                                                'posts_per_page'=>-1
                                              );?>

                                            <?php $posts = get_posts($the_query);?>

                                            <?php foreach ($posts as $post):setup_postdata($posts)?>

                                            <li class="splide__slide">
                                                <?php $largeimage=wp_get_attachment_image_src(get_post_thumbnail_id($posts->ID),'slider_feature'); ?>
                                                <div class="carousel-item active" style="background-image: url('<?php echo $largeimage[0]; ?>');">
                                                        <div class="carousel-container">
                                                            <div class="carousel-content">
                                                                <h2><?php the_title(); ?></h2>
                                                                <p><?php echo get_the_excerpt(); ?></p>
                                                            </div>
                                                        </div>
                                                </div>
                                            </li>

                                            <?php endforeach;?>
                                            <?php wp_reset_query();?> 

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</section>

<section id="headerblogpost6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading-block">
                        <h4 class="title f-20">Contact Us</h4>
                    </div>
                </div>
            </div>
                    <!-- ======= Contact Us Section ======= -->
                    <section id="contact" class="contact">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 d-flex align-items-stretch">
                                    <div class="info-box">
                                        <i class="fa fa-map"></i>
                                        <h3>Our Address</h3>
                                        <p><?php echo get_theme_mod('address'); ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex align-items-stretch"
                                    data-aos-delay="100">
                                    <div class="info-box">
                                        <i class="fa fa-envelope"></i>
                                        <h3>Email Us</h3>
                                        <p><?php echo get_theme_mod('email'); ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex align-items-stretch"
                                    data-aos-delay="200">
                                    <div class="info-box ">
                                        <i class="fa fa-phone-alt"></i>
                                        <h3>Call Us</h3>
                                        <p><?php echo get_theme_mod('call'); ?></p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                        <div class="row">
                                            <div class="col-lg-6 form-group">
                                                <input type="text" name="name" class="form-control" id="name"
                                                    placeholder="Your Name" data-rule="minlen:4"
                                                    data-msg="Please enter at least 4 chars" />
                                                <div class="validate"></div>
                                            </div>
                                            <div class="col-lg-6 form-group">
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Your Email" data-rule="email"
                                                    data-msg="Please enter a valid email" />
                                                <div class="validate"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject"
                                                placeholder="Subject" data-rule="minlen:4"
                                                data-msg="Please enter at least 8 chars of subject" />
                                            <div class="validate"></div>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                                data-msg="Please write something for us"
                                                placeholder="Message"></textarea>
                                            <div class="validate"></div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="loading">Loading</div>
                                            <div class="error-message"></div>
                                            <div class="sent-message">Your message has been sent. Thank you!</div>
                                        </div>
                                        <div class="text-center"><button type="submit">Send Message</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section><!-- End Contact Us Section -->
        </div>
</section>

<?php get_footer(); ?>