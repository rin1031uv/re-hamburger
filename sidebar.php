  <!--ボタンー-->
  <input type="checkbox" id="drawer-checkbox" class="menu-checkbox">
    <label for="drawer-checkbox" class="drawer-icon"><span>Menu</span></label>
  <!--黒背景-->  
    <label for="drawer-checkbox" class="menu-background"></label>
  <!--スライドメニュー-->
  <?php
    wp_nav_menu( array( 
      'container' => 'nav',
      'container_class' => 'p-sidebar__drawer-menu',
      'theme_location' => 'category_nav',
      'add_li_class' => 'p-sidebar__title'
    ));
  ?>