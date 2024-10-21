let menu=document.querySelector('#menu-btn');
let navbar=document.querySelector('.navbar');

menu.onclick= () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove ('active');
}


// count


document.addEventListener("DOMContentLoaded", () => {
    function counter(id, start, end, duration) {
     let obj = document.getElementById(id),
      current = start,
      range = end - start,
      increment = end > start ? 1 : -1,
      step = Math.abs(Math.floor(duration / range)),
      timer = setInterval(() => {
       current += increment;
       obj.textContent = current;
       if (current == end) {
        clearInterval(timer);
       }
      }, step);
    }
    counter("count1", 0, 210, 3000);
    counter("count2", 0, 1040, 3000);
    counter("count3", 0, 500, 3000);
    counter("count4", 0, 80, 3000);
    
   });
   