let firstCard 
let secondCard 
let cards 
let sum 
let hasBlackJack 
let isAlive 
let message = ""
let messageEl = document.getElementById("message-el")
let sumEl = document.getElementById("sum-el")
let cardsEl = document.getElementById("cards-el")
let startGameEl = document.getElementById("startGame")
var moneyEl = document.getElementById('money-el')
player = {
    money: 5000
};

document.querySelector("#takeCard").disabled = true
moneyEl.innerHTML = "Your Money: Rp." + player.money;

function getRandomCard() {
    let randomNumber = Math.floor(Math.random() * 11) + 1
        return randomNumber
    }

function renderGame() {
    startGameEl.innerText = 'Play again?'
    cardsEl.textContent = 'Cards: '
    var bet = document.getElementById('bet').value
        for (let i = 0; i < cards.length; i++) {
            cardsEl.textContent += cards[i] + ' '
        }

    sumEl.textContent = "Sum: " + sum

        if (sum < 21) {
            message = "Want another card?"

        } else if (sum == 21) {
            message = "Yuhuu!! You've got BlackJack"
            document.querySelector("#takeCard").disabled = true
            document.querySelector("#startGame").disabled = false
            player.money = player.money + (bet * 5);
            moneyEl.innerText = "Your Money: Rp." + player.money;
            hasBlackJack = true
        } else {
            message = "Game Over"
            document.querySelector("#takeCard").disabled = true
            document.querySelector("#startGame").disabled = false
            isAlive = false
        }
            messageEl.textContent = message
} 

function startGame() {
    var bet = document.getElementById('bet').value
    console.log('test');
    if (bet > 0 & bet <= player.money) {
         firstCard = getRandomCard()
         secondCard = getRandomCard()
         cards = [firstCard, secondCard]
         sum = firstCard + secondCard
         hasBlackJack = false
         isAlive = true
        player.money -= bet
        moneyEl.innerText = "Your Money: Rp." + player.money
        document.querySelector("#startGame").disabled = true
        renderGame()
    } else if (bet > player.money) {
        alert('Uang Anda tidak cukup')
    } else {
        alert('Masukkan bet')
    }
    document.querySelector("#takeCard").disabled = false
}

function takeCard() {
    if (hasBlackJack === false && isAlive === true) {
        let card = getRandomCard(2)
        cards.push(card)
        sum += card
        renderGame()
    } else {
        document.querySelector("#takeCard").disabled = true
    }
}

function reset() {
    location.reload()
}
