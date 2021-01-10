const heartButtons = document.querySelectorAll(".fa-heart");


function giveHeart() {
    const heart = this;
    const container = heart.parentElement.parentElement;
    const id = container.getAttribute("id");


    fetch(`/heart/${id}`)
        .then(function (response) {
            return response.json();
        }).then(function (resp) {
            toggleHeart(heart, resp);
    })
}

function toggleHeart(heart, resp) {
    if (resp) {
        heart.style.color = "red";
        heart.innerHTML = parseInt(heart.innerHTML) + 1;
    }
    else {
        heart.style.color = "black";
        heart.innerHTML = parseInt(heart.innerHTML) - 1;
    }
}

heartButtons.forEach(button => button.addEventListener("click", giveHeart));