function clickHamburgerMenu() {

  const menu = document.querySelector('.main-nav');
  const hamButton = document.querySelector('.hamburger')

  menu.classList.toggle("menu-open");
  menu.classList.toggle("menu-closed");

  hamButton.classList.toggle("is-active");

}

document.onkeydown = function(evt) {
    evt = evt || window.event;
    var isEscape = false;
    if ("key" in evt) {
        isEscape = (evt.key === "Escape" || evt.key === "Esc");
    } else {
        isEscape = (evt.keyCode === 27);
    }
    if (isEscape) {
        closeNav();
    }
};

function closeNav(){
  const hamButton = document.querySelector('.hamburger')
  if(hamButton.classList.contains('is-active')){
    hamButton.classList.remove("is-active");
    const menu = document.querySelector('.main-nav');
    menu.classList.toggle("menu-open");
    menu.classList.toggle("menu-closed");
  }
}


  const mq = window.matchMedia("(min-width: 1100px)");
  mq.addListener(WidthChange);
  WidthChange(mq);

// media query change
function WidthChange(mq) {
  if (mq.matches) {
    closeNav();
  } else {
    // window width is less than 500px
  }

}
