const init_temp_in = document.querySelector(".init-temp");
const init_time_in = document.querySelector(".init-time");
const end_time_in = document.querySelector(".end-time");
const calc_btn = document.querySelector(".calculate");
const end_temp_out = document.querySelector(".result");


calc_btn.addEventListener("click", calculate);

function calculate() {
    let init_temp = init_temp_in.value;
    let init_time = init_time_in.value;
    let end_time = end_time_in.value;
}