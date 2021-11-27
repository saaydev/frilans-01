<?php 
    /*
    *  Template name: Gallery
    */
    get_header();
?>

<div class="gallery">
  <h2 class="gallery__title">Gallery</h2>
  <ul class="gallery__row">
  <li class="gallery__up">
    <div>
      <img src="<?php echo IMG . "Rectangle8.png"?>" alt="">
      <img src="<?php echo IMG . "Rectangle8.png"?>" alt="">
    </div>
    <div>
      <img src="<?php echo IMG . "Rectangle9.png"?>" alt="">
    </div>
    <div>
      <img src="<?php echo IMG . "Rectangle9.png"?>" alt="">
    </div>
  </li>
  <li class="gallery__middlle">
    <img src="<?php echo IMG . "Rectangle10.png"?>" alt="">
    <img src="<?php echo IMG . "Rectangle10.png"?>" alt="">
    <img src="<?php echo IMG . "Rectangle10.png"?>" alt="">
  </li>
  <li class="gallery__bottom">
    <img src="<?php echo IMG . "Rectangle17.png"?>" alt="">
    <img src="<?php echo IMG . "Rectangle17.png"?>" alt="">
    <img src="<?php echo IMG . "Rectangle17.png"?>" alt="">
  </li>
  <button class="gallery__btn"></button>
  </ul>
</div>

<?php 
    get_footer(); 
?>