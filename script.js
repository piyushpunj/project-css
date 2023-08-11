
/*=============== CHANGE BACKGROUND HEADER ===============*/
function scrollHeader(){
    const header = document.getElementById('header')
    // When the scroll is greater than 50 viewport height, add the scroll-header class to the header tag
    if(this.scrollY >= 50) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

document.addEventListener("DOMContentLoaded", function() {
  const openFormBtn = document.getElementById("openFormBtn");
  const closeFormBtn = document.getElementById("closeFormBtn");
  const popupForm = document.getElementById("popupForm");
  const contactForm = document.getElementById("contactForm");

  openFormBtn.addEventListener("click", function() {
    popupForm.style.display = "block";
  });

  closeFormBtn.addEventListener("click", function() {
    popupForm.style.display = "none";
  });

  contactForm.addEventListener("submit", function(event) {
    event.preventDefault();
    // Handle form submission here
    // You can send the data to a server or perform other actions
    popupForm.style.display = "none";
  });
});
