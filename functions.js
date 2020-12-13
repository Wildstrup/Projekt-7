let navSlide = () => {
  let burgerMenu = document.querySelector('.burgerMenu');
  let nav = document.querySelector('.navLinks')
  let navLinks = document.querySelectorAll('navLinks li')

  burgerMenu.addEventListener('click', () => {
    nav.classList.toggle('navActive');
    burgerMenu.classList.toggle('toggle');
  });

}

navSlide();
