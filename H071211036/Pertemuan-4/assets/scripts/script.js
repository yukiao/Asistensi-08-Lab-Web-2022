// nomor 1
    function number1() {

    alert(" 𖥻  Welcome Potterhead! ˒ 🦡🦅🦁🐍 ♥︎✧");
      //  yes or no
    var Choice = prompt("Are you a Hogwarts student? YES or NO").toUpperCase();
    while (Choice == false) {
      if (confirm("You have to confirm first")) {
      var Choice = prompt("Please confirm, are you a Hogwarts student? YES or NO");
      }
      else {
        text = "Please confirm first";
      }
    }
  
    if (Choice == "YES") {
      // name
      alert(" You have to insert your name if you want to log in!");
  
      var Name = prompt("Please insert your name");
      if (isNaN(Name)) {
      }
        else{ 
        alert("You can only input letters");
        var Name = prompt("You have to insert your name first");
      }
      while (Name == false) {
      Name = confirm("Please insert you name first");
      var Name = prompt("You have to insert your name first");
      }
      alert("𝗛𝗶 " + Name + "! ⚡🧙");
  
  
      // question
      var Think = true;
      var Think = prompt("Which Hogwarts house you belong to?");
      if (Think == false) {
      alert("Insert your house");
      }
      while (Think == false) {
      var Think = prompt("Insert which house do you belong to?");
      }
      alert("Welcome to Hogwarts, " + Think + " fella ! 🏰🧙‍♂️⚡🦌");
    }
  
    else if (Choice == "NO") {
      alert("Sorry, only Hogwarts students can access this website");
    }
    }
  

// nomor 2
    function number2() {
    const a = prompt("Perkalian Berapa?");
    if (!isNaN(a)) {
    }
        else{ 
        alert("Masukkan angka");
        var angka = prompt("Perkalian Berapa?");
    }

    let b = prompt("Ingin dikalikan hingga berapa?");
    while (isNaN(b)) {
    alert("Masukkan hanya angka")
    b = prompt("Ingin dikalikan hingga berapa?");
    }
    let total = 0;
    if (!isNaN(b)) {
        for (let i = 1; i <= b; i++) {
        const c = i * a;
        console.log(i + "x" + a + "=" + c);

        total += i*a;
        }  
        alert("Hasil keseluruhan = " + total);
    }
        else {
        alert("Masukkan angka pada keduanya!")
    }
    }


// nomor 3
    function number3() {
    var textspasi = prompt("Input text").toUpperCase();
    var spacecount = textspasi.split(" ").length - 1;
    alert("spasi = " + spacecount);
    textspasi = textspasi.replace(/\s/g,"");

    var text = textspasi.split("");
    var chara = {};

    for (var i = 0; i < text.length; i++) {
        if(chara [text[i]] == undefined) {
            chara [text[i]] = 0
        }
            chara [text[i]] += 1
    }
    for (var i in chara) {
        alert(i + " = " + chara[i]);
    }
    }