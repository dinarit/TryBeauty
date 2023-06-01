let arr = [];
let arr1 = [];
for (let i = 0; i < 10; i++) {
  if (Math.random() > 0.5) {
    arr.push(Math.round(Math.random() * 10));
    arr1.push(Math.round(Math.random() * 10));
  } else {
    arr.push(-Math.round(Math.random() * 10));
    arr1.push(-Math.round(Math.random() * 10));
  }
}

function showArrays() {
  document.getElementById("arr_main").innerHTML = `Массив: ${arr.join(", ")}`;
}
showArrays();

function arrMin() {
  document.getElementById(
    "arr_min"
  ).innerHTML = `Минимальный элемент: ${Math.min(...arr)}`;
}
arrMin();

let arr_sorted_min = arr.sort((a, b) => a - b);

function arrSecondMin() {
  document.getElementById(
    "arr_min_second"
  ).innerHTML = `Второй по величине в массиве: ${arr_sorted_min[1]}`;
}
arrSecondMin();
