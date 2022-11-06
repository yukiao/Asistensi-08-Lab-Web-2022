function myFunction() {
	const person = prompt("Masukkan Nama Anda");
	if (true) {
		if (/\d/.test(person)) {
			console.log("inputan tidak boleh memuat angka");
		} else if (person === " " || !person) {
			console.log("Masukkan nama anda terlebih dahulu");
		} else {
			let choice = prompt(
				"Apakah anda telah mengerjakan tugas? YES atau N0"
			).toLowerCase();
			if (choice == "yes") {
				let choice = prompt("Ikut asistensi? YES atau NO").toLowerCase;
				if (choice == "yes" || choice == "YES") {
					let choice2 = prompt("Sudah berapa kali asistensi? 1 atau 2");
					if (choice2 == "1") {
						console.log("Asistensi sekali lagi yah " + person);
					} else if (choice2 == "2") {
						console.log("Hebat kamu " + person + ":)");
					} else {
						console.log("Masukkan input yang benar, 1 atau 2 ");
					}
				} else if (choice == "no") {
					console.log("Asistensi dulu yah " + person);
				} else {
					console.log("Masukkan input yang benar, yaitu YES atau NO ");
				}
			} else if (choice == "no") {
				console.log("Kerjakan dulu tugasmu " + person);
			} else {
				console.log("Masukkan input yang benar, yaitu YES atau NO ");
			}
		}
	}
}

function multipleFunction() {
	let total = 0;
	let a = prompt("Perkalian berapa?");
	if (isNaN(a)) {
		console.log("Input bukan angka");
	} else if (a == " " || !a) {
		console.log("Masukkan inputan yang benar");
	} else {
		let b = prompt("Ingin dikalikan sampai berapa?");
		if (isNaN(b)) {
			console.log("Input bukan angka");
		} else if (b == " " || !b) {
			console.log("Masukkan inputan yang benar");
		} else {
			for (let i = 1; i <= b; i++) {
				const result = i * a;
				total += result;
				console.log(i + " x " + a + " = " + result);
			}
			console.log("Hasil seluruh perkalian : " + total);
		}
	}
}

function countChar() {
	const str = prompt("Masukkan kalimat");
	const char = str.split("");
	let letters_count = {};

	for (let i = 0; i < char.length; i++) {
		if (char[i] === " ") {
			if (letters_count["spasi"] === undefined) {
				letters_count["spasi"] = 0;
			}
			letters_count["spasi"]++;
		} else {
			if (letters_count[char[i]] == undefined) {
				letters_count[char[i]] = 0;
			}
			letters_count[char[i]]++;
		}
	}
	for (const i in letters_count) {
		console.log(i + " = " + letters_count[i]);
	}
}
