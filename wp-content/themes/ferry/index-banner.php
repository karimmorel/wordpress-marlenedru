<div class="ferry-breadcrumb-section" style='background: url("<?php echo( has_header_image() ? get_header_image() : get_theme_support( 'custom-header', 'default-image' ) ); ?>") repeat fixed center 0 #143745;'>  
  <div class="overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="ferry-breadcrumb-title">
            <h1>
              <?php the_title(); ?>
            </h1>
          </div>
        </div>
        <div class="col-md-12">
          <ul class="ferry-page-breadcrumb">
            <?php if (function_exists('ferry_custom_breadcrumbs')) ferry_custom_breadcrumbs();?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="clearfix"></div>
