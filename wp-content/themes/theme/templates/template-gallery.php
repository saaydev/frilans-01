<?php 
    /*
    *  Template name: Gallery
    */
    get_header();
?>

<div class="gallery">

  <div class="gallery__container">

    <h2 class="gallery__title">Gallery</h2>

    <ul class="gallery__row">

    <li class="gallery__up">
      <div class="gallery__column">
        <div>
          <img src="<?php echo IMG . "Rectangle8.png"?>" alt="">
        </div>
        <div>
          <img src="<?php echo IMG . "Rectangle8.png"?>" alt="">
        </div>
      </div>
      <div>
        <img src="<?php echo IMG . "Rectangle9.png"?>" alt="">
      </div>
      <div>
        <img src="<?php echo IMG . "Rectangle9.png"?>" alt="">
      </div>
    </li>
    
    <li class="gallery__middlle">
      <div>
        <img src="<?php echo IMG . "Rectangle10.png"?>" alt="">
      </div>
      <div>
        <img src="<?php echo IMG . "Rectangle10.png"?>" alt="">
      </div>
      <div>
        <img src="<?php echo IMG . "Rectangle10.png"?>" alt="">
      </div>
    </li>

    <li class="gallery__bottom">
      <div>
        <img src="<?php echo IMG . "Rectangle17.png"?>" alt="">
      </div>
      <div>
        <img src="<?php echo IMG . "Rectangle17.png"?>" alt="">
      </div>
      <div>
        <img src="<?php echo IMG . "Rectangle17.png"?>" alt="">
      </div>
    </li>
    </ul>
    <button class="gallery__btn">Trololo</button>

  </div>

</div>

<?php 
    get_footer(); 
?>