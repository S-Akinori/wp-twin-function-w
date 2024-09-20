const initialOption = {
  root: null,
  rootMargin: '-100px',
  threshold: 0,
  triggerOnce: true
}

export const fadeIn = (target = '.c-fade-in', option = {...initialOption}) => {
  const callback = (entries, observer) => {
    entries.forEach((entry, index) => {
      if(entry.isIntersecting) {
        $(entry.target).addClass('active')
      }
    })
  }

  const observer = new IntersectionObserver(callback, option)
  const elements = document.querySelectorAll(target)
  elements.forEach(element => {
    observer.observe(element)
  })
}