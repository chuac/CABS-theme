<?php
/**
 * Template Name: Home
 *
 * @link
 *
 * @package CABS-theme
 */

get_header(); ?>

<!-- start image slider -->
<div class="wrap">
  <div id="arrow-left" class="arrow"></div>
  <div id="slider">
    <div class="slide slide1">
      <div class="slide-content">
        <span></span>
      </div>
    </div>
    <div class="slide slide2">
      <div class="slide-content">
        <span></span>
      </div>
    </div>
    <div class="slide slide3">
      <div class="slide-content">
        <span></span>
      </div>
    </div>
  </div>
  <div id="arrow-right" class="arrow"></div>
</div>


<script>
  let sliderImages = document.querySelectorAll('.slide'),
    arrowLeft = document.querySelector('#arrow-left'),
    arrowRight = document.querySelector('#arrow-right'),
    current = 0;

  //clear all images
  function reset() {
    for (let i = 0; i < sliderImages.length; i++) {
      sliderImages[i].style.display = "none";
    }
  }

  //initialise slider
  function startSlide() {
    reset();
    sliderImages[0].style.display = "block";
  }

  //show previous
  function slideLeft() {
    reset();
    sliderImages[current - 1].style.display = "block";
    current--;
  }

  //left arrow click
  arrowLeft.addEventListener('click', function() {
    if (current === 0) {
      current = sliderImages.length;
    }
    slideLeft();
  } );

  //show next
  function slideRight() {
    reset();
    sliderImages[current + 1].style.display = 'block';
    current++;
  }

  //right arrow click
  arrowRight.addEventListener('click', function() {
    if (current === sliderImages.length - 1) {
      current = -1;
    }
    slideRight();
  } );

  startSlide();
</script>



<?php
get_sidebar();
get_footer();
