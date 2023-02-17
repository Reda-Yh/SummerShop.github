
    document.querySelectorAll('.list-group a').forEach(function(element) {
        element.addEventListener('click', function(event) {
            event.preventDefault();
            const targetId = event.target.getAttribute('href');
            document.querySelectorAll('.row.col-md-9').forEach(function(element) {
                element.classList.add('d-none');
            });
            document.querySelector(targetId).classList.remove('d-none');
        });
    });

// Pulls functions
function changeImage() {
  document.getElementById("a").src = "../pulls/vertt_lor.jpg";
}

function changeImageBack() {
  document.getElementById("a").src = "../pulls/vertt.jpg";
}

// 2
function changeImage1() {
  document.getElementById("b").src = "../pulls/bleuu_lor.jpg";
}

function changeImageBack1() {
  document.getElementById("b").src = "../pulls/bleuu.jpg";
}

// 3

function changeImage2() {
  document.getElementById("c").src = "../pulls/noir_lor.jpg";
}

function changeImageBack2() {
  document.getElementById("c").src = "../pulls/noirr.jpg";
}

// 4

function changeImage3() {
  document.getElementById("d").src = "../pulls/dino_lor.jpg";
}

function changeImageBack3() {
  document.getElementById("d").src = "../pulls/dino.jpg";
}

// 5

function changeImage4() {
  document.getElementById("e").src = "../pulls/pizza_lor.jpg";
}

function changeImageBack4() {
  document.getElementById("e").src = "../pulls/pizza.jpg";
}

// 6

function changeImage5() {
  document.getElementById("f").src = "../pulls/red_lor.jpg";
}

function changeImageBack5() {
  document.getElementById("f").src = "../pulls/red.jpg";
}

// Shirts

function changeImage6() {
  document.getElementById("g").src = "../shirts/shirts1_lor.jpg";
}

function changeImageBack6() {
  document.getElementById("g").src = "../shirts/shirts1.jpg";
}

// 2 

function changeImage7() {
  document.getElementById("h").src = "../shirts/shirts2_lor.jpg";
}

function changeImageBack7() {
  document.getElementById("h").src = "../shirts/shirts2.jpg";
}

// 3 

function changeImage8() {
  document.getElementById("j").src = "../shirts/shirts3_lor.jpg";
}

function changeImageBack8() {
  document.getElementById("j").src = "../shirts/shirts3.jpg";
}

// chemises

// 1

function changeImage9() {
  document.getElementById("k").src = "../chemises/ch1_lor.jpg";
}

function changeImageBack9() {
  document.getElementById("k").src = "../chemises/ch1.jpg";
}

// 2

function changeImage10() {
  document.getElementById("l").src = "../chemises/ch2_lor.jpg";
}

function changeImageBack10() {
  document.getElementById("l").src = "../chemises/ch2.jpg";
}

// 3

function changeImage11() {
  document.getElementById("m").src = "../chemises/ch3_lor.jpg";
}

function changeImageBack11() {
  document.getElementById("m").src = "../chemises/ch3.jpg";
}

// 4

function changeImage12() {
  document.getElementById("n").src = "../chemises/ch4_lor.jpg";
}

function changeImageBack12() {
  document.getElementById("n").src = "../chemises/ch4.jpg";
}

// 5

function changeImage13() {
  document.getElementById("o").src = "../chemises/ch5_lor.jpg";
}

function changeImageBack13() {
  document.getElementById("o").src = "../chemises/ch5.jpg";
}




