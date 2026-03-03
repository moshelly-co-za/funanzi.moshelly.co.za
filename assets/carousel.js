/* Lightweight vanilla carousel: initialize any .simple-carousel on the page */
(function(){
  function initCarousel(carousel){
    const slides = Array.from(carousel.querySelectorAll('.slide'));
    const prev = carousel.querySelector('.carousel-btn.prev');
    const next = carousel.querySelector('.carousel-btn.next');
    const dotsContainer = carousel.querySelector('.carousel-dots');
    if(!slides.length) return;
    let idx = 0; let timer = null;

    function show(i){
      slides.forEach((s,n)=> s.classList.toggle('active', n===i));
      Array.from(dotsContainer.children).forEach((b,n)=> b.classList.toggle('active', n===i));
      idx = i;
    }

    slides.forEach(()=>{
      const b = document.createElement('button'); b.type='button';
      b.addEventListener('click', ()=>{ stop(); show(Array.from(dotsContainer.children).indexOf(b)); start(); });
      dotsContainer.appendChild(b);
    });
    show(0);

    if(prev) prev.addEventListener('click', ()=>{ stop(); show((idx-1+slides.length)%slides.length); start(); });
    if(next) next.addEventListener('click', ()=>{ stop(); show((idx+1)%slides.length); start(); });

    function start(){ timer = setInterval(()=> show((idx+1)%slides.length), 4000); }
    function stop(){ if(timer){ clearInterval(timer); timer=null; } }

    carousel.addEventListener('mouseenter', stop);
    carousel.addEventListener('mouseleave', start);
    start();
  }

  document.addEventListener('DOMContentLoaded', function(){
    document.querySelectorAll('.simple-carousel').forEach(initCarousel);
  });
})();
