const cards = document.querySelectorAll(".memory-card");

let hasFlippedCard = false;
let firstCard, secondCard;

function flipCard() {
    this.classList.toggle("flip");

    if (!hasFlippedCard) {
        // first click
        hasFlippedCard = true;
        firstCard = this;
    } else {
        // second click
        hasFlippedCard = false;
        secondCard = this;

        // do cards match?
        if (firstCard.dataset.framework === secondCard.dataset.framework) {
            //  it's match
            firstCard.removeEventListener("click", flipCard);
            secondCard.removeEventListener("click", flipCard);
        } else {
            // not a match
            setTimeout(() => {
                firstCard.classList.remove("flip");
                secondCard.classList.remove("flip");
            }, 400);
        }
    }
}

function resetBoard() {
    [hasFlippedCard, lockBoard] = [false, false];
    [firstCard, secondCard] = [null, null];
}

(function shuffle() {
    cards.forEach((card) => {
        let randomPos = Math.floor(Math.random() * 12);
        card.style.order = randomPos;
    });
})();

cards.forEach((card) => card.addEventListener("click", flipCard));
