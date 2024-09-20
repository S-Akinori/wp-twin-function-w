export const slideShow = (selector = '.p-top-fv__image') => {
  let index = 0;
  const $slides = $(selector)
  setInterval(() => {
    $($slides[index]).removeClass('active')
    if(index !== $slides.length - 1) {
      $($slides[index + 1]).addClass('active')
      index++
    } else {
      $($slides[0]).addClass('active')
      index = 0
    }
    
  }, 3000)
}