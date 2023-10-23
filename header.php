<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>  
  <meta charset="utf-8">
  <!--viewportの設定-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="raisetech課題">
  <?php wp_head(); ?>
  <?php if(is_user_logged_in()): ?>
    <style type="text/css">
        @media screen and (max-width: 600px) {
          #wpadminbar {
            position: fixed;
          }
          .logged-in > .p-whole__container > .drawer-icon {
          position: fixed;
          top: 54px;
          }
        }
    </style>
    <?php endif; ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open() ?>
  <div class="p-whole__container" <?php post_class(); ?>>
    <div class="p-main__container">
    <!--header-->
      <header class="l-header p-header">
        <h1 class="p-header__title">
          <a href="<?php echo esc_url( home_url('/'));?>"><?php bloginfo('name');?></a>
        </h1>
        <!--
        <p class="header__description"><?php bloginfo('description'); ?></p>
        -->
    <!--検索-->
        <?php get_search_form(); ?>
      </header>