<!-- show banner unless ACF option set to false -->
<?php
$var = get_option('options_show_banner');
if ($var === false || $var == 1) {
    ?>
    <div id="user-satisfaction-survey-container">
      <section id="user-satisfaction-survey" class="visible" aria-hidden="false">
        <div class="wrapper">
          <h1>Tell us what you think of GOV.UK</h1>
          <p class="right"><a href="#survey-no-thanks" id="survey-no-thanks">No thanks</a></p>
          <p><a href="https://www.surveymonkey.com/s/2MRDLTW?c=/government/consultations/retail-exits-reform-draft-regulations" id="take-survey" target="_blank">Take the 3 minute survey</a> This will open a short survey on another website</p>
        </div>
      </section>
    </div>
    <?php

}
?>

<header class="header" role="banner">
    <div class="row">

        <?php $logo_options = get_option('theme_logo_options'); ?>

        <div class="span8">
            <h1 class="blog-title">
                <span class="blog"><a href="<?php echo network_site_url(); ?>">Blog</a></span>
                <a href="<?php echo home_url() ?>"><?php bloginfo('name') ?></a>
            </h1>

            <?php if ($orgs = gds_organisations() ||  get_option('options_gds_location')) : ?>
                <div class="bottom blog-meta">
                    <table>
                        <?php if ($orgs = gds_organisations()) : ?>
                            <tr>
                                <th>Organisations:</th>
                                <td><?php echo $orgs # this is pre-escaped ?></td>
                            </tr>
                        <?php endif ?>
                        <?php if (get_option('options_gds_location')) : ?>
                            <tr>
                                <th>Location:</th>
                                <td><?php echo get_option('options_gds_location') ?></td>
                            </tr>
                        <?php endif ?>
                    </table>
                </div>
            <?php endif ?>
        </div>

        <div class="span4">
            <?php if ($logo_options['logo']): ?>
                <div class="logo-container hidden-mobile">
                    <img src="<?php echo $logo_options['logo']; ?>" alt="Logo for <?php bloginfo('name')?>" />
                </div>
            <?php endif ?>
            <div class="bottom search-container">
                <?php get_search_form() ?>
            </div>
        </div>

    </div>

    <div class="row">
        <?php
        if (function_exists('history_mode_notice') && (is_single() || is_page())) {
            history_mode_notice(get_the_ID(), 'blog post');
        }
        ?>
    </div>
</header>
