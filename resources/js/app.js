document.addEventListener("DOMContentLoaded", function() {
  const cards = document.getElementsByClassName("card");
  for (let card of cards) {
    card.children[1].addEventListener('click', function (e) {
      this.parentElement.classList.toggle("keep");
    });
  }
});
