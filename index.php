<?php
require ('view/includes/head.php');
require ('view/includes/header.php');
if (isset($_POST['page'])) {
  if ($_POST['page'] == 'contact') {
    require ('controler/contact.php');
  } elseif ($_POST['page'] == 'cv') {
    require ('controler/cv.php');
  }else {
    require ('controler/portfolio.php');
  }
} else {
  require ('controler/portfolio.php');
}
require ('view/includes/foot.php');
require ('view/includes/footer.php');

 ?>
