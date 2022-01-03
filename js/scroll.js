const titles = document.querySelectorAll('.section__title');
const contents = document.querySelectorAll('.section__content');


const cb = function(entries, observer) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('inview');
      observer.unobserve(entry.target);
    } else {
    }
  });
}

const options = {
  root: null,
  rootMargin: "-150px 0px",
}
const io = new IntersectionObserver(cb, options);


titles.forEach(title => io.observe(title));
contents.forEach(content => io.observe(content));