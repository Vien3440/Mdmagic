PAGE = 1;
COMPTEUR = 0;
function seachAllCards() {
    $.ajax({
        url: "https://api.magicthegathering.io/v1/cards?contains=foreignNames&page=" + PAGE
    }).done(function (result) {
        var cards = result.cards;
        for (var i = 0; i < cards.length; i++) {
            cards[i];
            for (var j = 0; j < cards[i].foreignNames.length; j++) {
                console.log(cards[i]);
                if (cards[i].foreignNames[j].language === "French") {
                    COMPTEUR++;
                }
            }
        }
    });
        if (PAGE < 40) {
            console.log(PAGE);
            console.log("nbr de carte: " + COMPTEUR);
            PAGE++;
            seachAllCards();
            COMPTEUR = 0;
        }
}

seachAllCards();