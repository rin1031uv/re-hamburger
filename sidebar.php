  <!--ボタンー-->
  <input type="checkbox" id="drawer-checkbox" class="menu-checkbox">
    <label for="drawer-checkbox" class="drawer-icon"><span>Menu</span></label>
  <!--黒背景-->  
    <label for="drawer-checkbox" class="menu-background"></label>
  <!--スライドメニュー-->
  <?php wp_nav_menu( array('theme_location' => 'categorymenu')); ?>