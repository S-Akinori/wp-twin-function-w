export const toggleMenu = () => {
  $('.js-menu-button').on('click', () => {
    $('#jsNav').fadeToggle();
  })
}