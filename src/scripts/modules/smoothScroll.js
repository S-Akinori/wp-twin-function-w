export const smoothScroll = (selector = '.js-anchorLink') => {
  $(selector).on('click', (e) => {
    e.preventDefault()
    const link = $(e.currentTarget).attr('href')
    const el = $(link)
    const posY = $(el).offset().top
    const offset = 100
    window.scrollTo({
      top: posY - offset,
      behavior: 'smooth'
    })
  })
}