let playerMoney = 5000;
let cards = [];
let sum = 0;
let hasBlackJack = false;
let isAlive = false;
let message = "";
let message2 = "";
let messageEl = document.getElementById("message-el");
let messageEl2 = document.getElementById("message-el-2");
let sumEl = document.getElementById("sum-el");
let cardsEl = document.getElementById("cards-el");
let playerEl = document.getElementById("player-el");
let money = document.getElementById("player-el");
let betEl = document.getElementById("bet-el");
let currentBet = 0;
let btnStart = document.getElementById("startButton");
btnStart.addEventListener("click", function () {
	btnStart.innerText = "play again";
});

function start() {
	if (betEl.value > 0) {
		if (betEl.value <= playerMoney) {
			currentBet = Number(betEl.value);
			isAlive = true;
			hasBlackJack = false;
			playerMoney -= betEl.value;
			money.innerHTML = playerMoney;
			document.getElementById("bet-el").value = "";
			messageEl2.textContent = "";

			startGame();
		} else if (playerMoney === 0) {
			alert("Your money = 0 Please Reset Your Money ");
		} else {
			alert("your money is less than your bet");
		}
	} else {
		alert("set your bet before start");
		if (betEl.value === 0 && betEl.value === "") {
			btnStart.addEventListener("click", function () {
				btnStart.innerText = "start game";
			});
		}
		document.getElementById("bet-el").value = "";
	}
}

function getRandomCard() {
	return Math.floor(Math.random() * 11) + 1;
}

function startGame() {
	let firstCard = getRandomCard();
	let secondCard = getRandomCard();
	cards = [firstCard, secondCard];
	sum = firstCard + secondCard;
	renderGame();
}
function renderGame() {
	cardsEl.textContent = "Cards : ";
	for (let i = 0; i < cards.length; i++) {
		cardsEl.textContent += cards[i] + " ";
	}
	sumEl.textContent = "Sum : " + sum;
	if (sum <= 20) {
		message = "Draw New Card?";
	} else if (sum === 21) {
		message = "yeyy, You got a BlackJack";
		playerMoney += currentBet * 5;
		money.innerHTML = playerMoney;
		hasBlackJack = true;
		isAlive = false;
	} else {
		message = "You Lose!";
		hasBlackJack = false;
		isAlive = false;
	}

	messageEl.textContent = message;
}
function takeCard() {
	if (isAlive === true && hasBlackJack === false) {
		let card = getRandomCard();
		sum += card;
		cards.push(card);
		renderGame();
	} else {
		if (hasBlackJack === true) {
			message2 = "You Already Got BlackJack";
		} else if (sum > 21) {
			message2 = "Game is Over, You Can't Take New Card";
		} else {
			alert("Please Start Game");
		}
		messageEl2.textContent = message2;
	}
}

function resetMoney() {
	document.getElementById("bet-el").value = "";
	location.reload();
}
