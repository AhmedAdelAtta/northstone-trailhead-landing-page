<?php
/*
Template Name: Homepage
*/

// Your custom layout code starts here
get_header();
?>



<main class="northstone-page">

    <!-- Banner -->
    <section class="promo_banner" style="background-image: url('<?php echo esc_url(get_field('hero_image')); ?>')">
        <h1>Built for the long way round</h1>
        <p>The Trailhead daypack, 30L, 890g</p>
        <a href="#" class="hero_btn">Pre-order now</a>
        <div class="overlay"></div>
    </section>

    <!-- Feature Strip -->
    <?php
    $features = [
        get_field('feature_1'),
        get_field('feature_2'),
        get_field('feature_3'),
    ];
    ?>

    <section class="feature-strip">

        <?php foreach ($features as $feature) : ?>

            <?php if ($feature) : ?>

                <div class="feature-card">

                    <?php if (!empty($feature['icon'])) : ?>
                        <div class="feature-icon">
                            <img
                                src="<?php echo esc_url($feature['icon']['url']); ?>"
                                alt="<?php echo esc_attr($feature['icon']['alt']); ?>">
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($feature['title'])) : ?>
                        <h3>
                            <?php echo esc_html($feature['title']); ?>
                        </h3>
                    <?php endif; ?>

                    <?php if (!empty($feature['description'])) : ?>
                        <p>
                            <?php echo esc_html($feature['description']); ?>
                        </p>
                    <?php endif; ?>

                </div>

            <?php endif; ?>

        <?php endforeach; ?>

    </section>

    <?php
    $image_1 = get_field('image_1');
    $image_2 = get_field('image_2');
    $image_3 = get_field('image_3');
    $image_4 = get_field('image_4');

    $images = array_filter([
        $image_1,
        $image_2,
        $image_3,
        $image_4
    ]);
    ?>

    <!-- Product Gallery -->
    <section class="product-gallery">
        <div class="gallery-main">
            <button class="gallery-prev">&#10094;</button>

            <img
                id="active-image"
                src="<?php echo esc_url($images[0]); ?>"
                alt="Trailhead Daypack">

            <button class="gallery-next">&#10095;</button>
        </div>
        <div class="gallery-thumbnails">

            <?php foreach ($images as $index => $image) : ?>

                <button
                    class="thumb <?php echo $index === 0 ? 'active' : ''; ?>"
                    data-image="<?php echo esc_url($image); ?>">

                    <img
                        src="<?php echo esc_url($image); ?>"
                        alt="Gallery Image <?php echo $index + 1; ?>">

                </button>

            <?php endforeach; ?>

        </div>

    </section>

    <!-- Social Proof -->

    <section class="testimonials-section">

        <div class="section-header">
            <h2>Trusted on Every Trail</h2>
            <p>Real feedback from hikers, travellers and outdoor enthusiasts.</p>
        </div>

        <?php
        $testimonials = get_field('testimonials_list');
        ?>

        <div class="testimonial-slider">

            <?php if ($testimonials) : ?>

                <?php foreach ($testimonials as $index => $testimonial) : ?>

                    <?php

                    $rating = get_field('rating', $testimonial->ID);

                    $image = get_the_post_thumbnail_url(
                        $testimonial->ID,
                        'medium'
                    );

                    ?>

                    <article class="testimonial-slide <?php echo $index === 0 ? 'active' : ''; ?>">

                        <div class="testimonial-avatar">

                            <img
                                src="<?php echo esc_url($image); ?>"
                                alt="<?php echo esc_attr($testimonial->post_title); ?>">

                        </div>

                        <div class="testimonial-stars">

                            <?php
                            for ($i = 1; $i <= 5; $i++) {
                                echo $i <= $rating ? '★' : '☆';
                            }
                            ?>

                        </div>

                        <blockquote>
                            "<?php echo wp_strip_all_tags($testimonial->post_content); ?>"
                        </blockquote>

                        <h4>
                            <?php echo esc_html($testimonial->post_title); ?>
                        </h4>

                    </article>

                <?php endforeach; ?>

            <?php endif; ?>

            <div class="slider-dots"></div>

        </div>

    </section>
</main>

<?php
get_footer();
?>