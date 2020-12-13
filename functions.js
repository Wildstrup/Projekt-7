const navSlide = () => {
  const burgerMenu = document.querySelector('.burgerMenu');
  const nav = document.querySelector('.navLinks')
  const navLinks = document.querySelectorAll('navLinks li')

  burgerMenu.addEventListener('click', () => {
    nav.classList.toggle('navActive');
    burgerMenu.classList.toggle('toggle');
  });

}

navSlide();
