//reverse function
let reverse = [
];

for($i = 0; $i < 8; $i++) {
  reverse.push([]);
}

const wrap = document.querySelector("#wrap");

for ($i = 0; $i < 5; $i++) {
  const divline = document.createElement("div");
  divline.classList.add("divline");
  divline.style.opacity = 0.5 - $i * 0.06;
  wrap.appendChild(divline);

  for ($j = 0; $j < 10; $j++) {
    const divcard = document.createElement("div");
    divcard.classList.add("card");
    divline.appendChild(divcard);

    $sum = $i + $j;
    for ($k = 0; $k < reverse.length; $k++) {
      if ($sum === $k * 2 + 1) {
        reverse[$k].push(divcard);
      }
    }
  }
}

function rotation(reverse) {
  for (let i = 0; i < reverse.length; i++) {
    setTimeout(function () {
      reverse[i].forEach((card) => {
        card.classList.add("rotate");
        card.style.opacity = 1 - i * 0.15;
      });
    }, 300 * i);
  }
}

function openLogo(str) {
  const arrayLogo = str.split('');
  let number = 10;
  for (let i = 0; i < arrayLogo.length; i++) {
    let targetCard = document.querySelectorAll(".card")[number];
    targetCard.textContent = arrayLogo[i];
    if (i % 2 === 0) {
      number += 11;
    } else {
      number -= 9;
    }
  }
};

window.addEventListener("load", () => {
  rotation(reverse);
  openLogo('TiER1');
});
