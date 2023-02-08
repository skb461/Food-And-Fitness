window.onload = () => {
  let button = document.querySelector("#btn");

  let button_sgr = document.querySelector("#btn_sgr");

  let button_psr = document.querySelector("#btn_psr");

  button.addEventListener("click", calculateBMI);

  button_sgr.addEventListener("click", update_sgr);

  button_psr.addEventListener("click", update_psr);

};

function calculateBMI() {

  let height = parseInt(document
      .querySelector("#bodyHeight").value);

  let weight = parseInt(document
      .querySelector("#bodyWeight").value);

  let result = document.querySelector("#result");

  if (height === "" || isNaN(height))
    result.innerHTML = "Provide a valid Height!";

  else if (weight === "" || isNaN(weight))
    result.innerHTML = "Provide a valid Weight!";

  else {

    let bmi = (weight / ((height * height) / 10000)).toFixed(2);

    if (bmi < 18.6) 
      result.innerHTML =
      `<span>${bmi}</span> (Under Weight)`;

    else if (bmi >= 18.6 && bmi < 24.9)
      result.innerHTML =
        `<span>${bmi}</span> (Normal)`;

    else result.innerHTML =
      `<span>${bmi}</span> (Over Weight)`;
  }


  let updateHeight = parseFloat(document
      .querySelector("#bodyHeight").value);

  let resultHeight = document.querySelector("#Height");

  let disHeight = updateHeight.toFixed(2);

  resultHeight.innerHTML = `<span>${disHeight}</span> cm`;

  let updateWeight = parseFloat(document
      .querySelector("#bodyWeight").value);

  let resultWeight = document.querySelector("#Weight");

  let disWeight = updateWeight.toFixed(2);

  resultWeight.innerHTML = `<span>${disWeight}</span> kg`;

}


function update_sgr() {

  let sugerLevel = parseFloat(document
      .querySelector("#bloodSuger").value);

  let resultSuger = document.querySelector("#resultSuger");

  let suger = sugerLevel.toFixed(2);

  resultSuger.innerHTML = `<span>${suger}</span> mmol/L`;

}


function update_psr() {

  let pressureHiLevel = parseInt(document
      .querySelector("#SYSTOLICbloodPressure").value);

  let pressureLowLevel = parseInt(document
      .querySelector("#DIASTOLICbloodPressure").value);

  let resultPressure = document.querySelector("#resultPressure");

  if (pressureHiLevel === "" || isNaN(pressureHiLevel))
    resultPressure.innerHTML = "Provide a valid!";

  else if (pressureLowLevel === "" || isNaN(pressureLowLevel))
    resultPressure.innerHTML = "Provide a valid!";

  else {

    if (pressureHiLevel < 90 && pressureLowLevel < 60) 
      resultPressure.innerHTML =
      `<span>${pressureHiLevel} / ${pressureLowLevel}</span>`;

    else if (pressureHiLevel < 125 && pressureLowLevel < 80)
      resultPressure.innerHTML =
        `<span>${pressureHiLevel} / ${pressureLowLevel}</span>`;

    else if (pressureHiLevel >= 125 && pressureLowLevel >= 80)
      resultPressure.innerHTML =
        `<span>${pressureHiLevel} / ${pressureLowLevel}</span>`;
  }

  resultPressure.innerHTML = `<span>${pressureHiLevel} / ${pressureLowLevel}</span>`;

}

// const xmlhttp = new XMLHttpRequest();
//     xmlhttp.onload = function() {
//       document.getElementById("txtHint").innerHTML = this.responseText;
//     }
//   xmlhttp.open("GET", "gethint.php?q=" + result);
//   xmlhttp.send();

$.post("profile.php", {
    result_2:result
  });


// pressureHiLevel
// pressureLowLevel
// resultSuger
// resultHeight
// resultWeight
// result