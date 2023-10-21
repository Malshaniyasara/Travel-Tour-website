
document.addEventListener('DOMContentLoaded', function () {
    let menu = document.querySelector('#menu-btn');
    let navbar = document.querySelector('.header .navbar');
    
    menu.addEventListener('click', function () {
      menu.classList.toggle('fa-times');
      navbar.classList.toggle('active');
    });
  });
  window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};
document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper(".home-slider", {
      loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  });
  
  
  
  let loadMoreBtn = document.querySelector('.packages .load-more .btn');
  let boxes = document.querySelectorAll('.packages .box-container .box');
  let currentItem = 3;
  
  loadMoreBtn.onclick = () => {
    for (let i = currentItem; i < currentItem + 3; i++) {
      if (boxes[i]) {
        boxes[i].style.display = 'inline-block';
      }
    }
    currentItem += 3;
    if (currentItem >= boxes.length) {
      loadMoreBtn.style.display = 'none';
    }
  };
  

