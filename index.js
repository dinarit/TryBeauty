const pictures = {
  pic1: "url(./images/bamboo.jpg)",
  pic2: "url(./images/cave.jpg)",
  pic3: "url(./images/iceland.jpg)",
  pic4: "url(./images/liriver.jpg)",
  pic5: "url(./images/venice.jpg)",
  pic6: "url(./images/waterfall.jpg)",
};

let current_tab = 1;

let pic = document.getElementById("pic");

let next_button = document.getElementById("next_button");
let prev_button = document.getElementById("prev_button");

function changingTabs(e) {
  if (e == "next") {
    current_tab++;
  }
  if (e == "prev") {
    current_tab--;
  }
  if (current_tab > 6) {
    current_tab = 1;
  }
  if (current_tab < 1) {
    current_tab = 6;
  }
  switch (current_tab) {
    case 1:
      pic.style.backgroundImage = pictures.pic1;
      break;
    case 2:
      pic.style.backgroundImage = pictures.pic2;
      break;
    case 3:
      pic.style.backgroundImage = pictures.pic3;
      break;
    case 4:
      pic.style.backgroundImage = pictures.pic4;
      break;
    case 5:
      pic.style.backgroundImage = pictures.pic5;
      break;
    case 6:
      pic.style.backgroundImage = pictures.pic6;
      break;
  }
  console.log(current_tab);
}

next_button.addEventListener("click", () => {
  changingTabs("next");
});

prev_button.addEventListener("click", () => {
  changingTabs("prev");
});

const info = {
  interesting: false,
  country: "france",
};

const radio = {
  yes: document.getElementById("radio_yes"),
  no: document.getElementById("radio_no"),
};

function selectInteresting(e) {
  if (e == "yes") {
    radio.yes.checked = true;
    radio.no.checked = false;
    info.interesting = true;
  }
  if (e == "no") {
    radio.no.checked = true;
    radio.yes.checked = false;
    info.interesting = false;
  }
}

radio.yes.addEventListener("click", () => {
  selectInteresting("yes");
});

radio.no.addEventListener("click", () => {
  selectInteresting("no");
});

let select_country = document.getElementById("select_country");

select_country.addEventListener("change", () => {
  info.country = select_country.value;
  console.log(select_country.value);
});

let send_button = document.getElementById("send_button");
let reset_button = document.getElementById("reset_button");

send_button.addEventListener("click", () => {
  console.log(info);
});

reset_button.addEventListener("click", () => {
  radio.yes.checked = false;
  radio.no.checked = false;
  select_country.value = "france";
  info.country = "france";
  info.interesting = false;

  console.log(info);
});
