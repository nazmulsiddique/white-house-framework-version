<?php
$slider_data = $myOptions['slider-area'];
if (!empty($slider_data)): ?>
<header class="home-slider">
    <div id="demo" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <?php foreach ($slider_data as $index => $slide): ?>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="<?php echo $index; ?>" 
                    class="<?php echo $index === 0 ? 'active' : ''; ?>" 
                    aria-current="<?php echo $index === 0 ? 'true' : 'false'; ?>" 
                    aria-label="Slide <?php echo $index + 1; ?>"></button>
            <?php endforeach; ?>
        </div>
        <div class="carousel-inner">
            <?php foreach ($slider_data as $index => $slide): ?>
                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>" data-bs-interval="2000">
                    <img src="<?php echo esc_url($slide['slider-bg']['url'] ?? ''); ?>" alt="Slider Image <?php echo $index + 1; ?>" class="d-block w-100">
                    <div class="carousel-caption">
                        <div class="home-slider-subheading d-none d-lg-block" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                            <p class="mb-0 mb-md-2"><?php echo esc_html($slide['slider-subtitle'] ?? ''); ?></p>
                        </div>
                        <div class="home-slider-heading text-uppercase" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                            <h2><?php echo esc_html($slide['slider-title'] ?? ''); ?></h2>
                        </div>
                        <div class="home-slider-text" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                            <p><?php echo esc_html($slide['slider-description'] ?? ''); ?></p>
                        </div>
                        <?php if (!empty($slide['slider-button-text']) && !empty($slide['slider-button-link'])): ?>
                            <div class="home-slider-button mt-md-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
                                <a href="<?php echo esc_url($slide['slider-button-link']); ?>">
                                    <button type="button" class="btn btn-outline-warning btn-md-lg btn-sm">
                                        <?php echo esc_html($slide['slider-button-text']); ?>
                                    </button>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</header>
<?php endif; ?>
