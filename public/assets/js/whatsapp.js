//whatsapp button
window.addEventListener("scroll", function(){
   let whatsapp = document.getElementById("whatsapp");
   
   whatsapp.classList.add("whatsapp--active", window.scrollY > 0);
});