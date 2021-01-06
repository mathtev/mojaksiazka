const heartButtons = document.querySelectorAll(".fa-heart");


function giveHeart() {
    const hearts = this;
    const container = hearts.parentElement.parentElement;
    const id = container.getAttribute("id");

    fetch(`/heart/${id}`)
        .then(function () {
            hearts.innerHTML = parseInt(hearts.innerHTML) + 1;
        })
}


heartButtons.forEach(button => button.addEventListener("click", giveHeart));