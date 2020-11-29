<?php get_header(); ?>
<style media="screen">
  @media (max-width:768px){

    .woocommerce div.product{
      margin-top: -150px;
    }
    .woocommerce-error, .woocommerce-info, .woocommerce-message {
        margin-bottom: 180px!important;
        margin-top: -80px!important;
    }
  }
  @media (max-width: 575px){
    .woocommerce span.onsale{
      top: -2px;
      right: -2px;
      left: auto;
      border-radius: 0 50%;
      margin: -.5em -.5em 0 0;
    }
  }
  @media(min-width: 769px){
    .woocomerce span .onsale{
      top:-.5em;
      left:-.5em;
      border-radius: 0!important;
    }
    .woocommerce-notices-wrapper{
      display: none;
    }
  }
  .woo-page-margin{
    margin-top: 100px!important;
    margin-bottom:200px!important;
  }
  nav.woocommerce-pagination {
    order: 4;
  }
  div#reviews {
    padding-top: 100px;
    margin-top: -100px;
  }
  img.attachment-woocommerce_thumbnail.size-woocommerce_thumbnail {
    height: 215px;
  }
  li.product.type-product {
    height: 350px;
  }
</style>
<div class="container-fluid py-5"></div>
<article class="container my-5 p-2 p-md-4 content-background content-color woo-page-margin" style="">
  <?php get_product_search_form(); ?>
  <?php woocommerce_content();?>
</article>
<?php get_footer(); ?>
