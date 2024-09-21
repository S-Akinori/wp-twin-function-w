export const toggleMenu = () => {
  $('.js-menu-toggler').on('click', function() {
    $('.sp-menu-container').toggleClass('active');
  })
}