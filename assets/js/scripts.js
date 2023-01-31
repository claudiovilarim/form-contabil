// show messages in screen, one after another
function showQuestion(currentItem, nextItem, elementName) {
  var radios = document.getElementsByName(elementName);
  for (var i = 0; i < radios.length; i++) {
    if (radios[i].checked && radios[i].value != "") {
      document.getElementById("question" + currentItem).style.display = "none";
      document.getElementById("question" + nextItem).style.display = "block";
      return;
    }
  }
}

function showQuestionP2(currentItem, nextItem) {
  var radios1 = document.getElementsByName("p2q1quest1");
  var radios2 = document.getElementsByName("p2q1quest2");
  var radios3 = document.getElementsByName("p2q1quest3");
  var radios4 = document.getElementsByName("p2q1quest4");

  if (verifyAllInput(radios1) && verifyAllInput(radios2) && verifyAllInput(radios3) && verifyAllInput(radios4)) {
    document.getElementById("question" + currentItem).style.display = "none";
    document.getElementById("question" + nextItem).style.display = "block";
  }
}

function verifyAllInput(radios) {
  for (var i = 0; i < radios.length; i++) {
    if (radios[i].checked && radios[i].value != "") {
      return true;
    }
  }
}

function showQuestionP2Q2(currentItem, nextItem) {
  var radios1 = document.getElementsByName("p2q2quest1");
  var radios2 = document.getElementsByName("p2q2quest2");
  var radios3 = document.getElementsByName("p2q2quest3");
  var radios4 = document.getElementsByName("p2q2quest4");
  var radios5 = document.getElementsByName("p2q2quest5");
  var radios6 = document.getElementsByName("p2q2quest6");
  var radios7 = document.getElementsByName("p2q2quest7");
  var radios8 = document.getElementsByName("p2q2quest8");

  if (verifyAllInput(radios1) && verifyAllInput(radios2) && verifyAllInput(radios3) && verifyAllInput(radios4) && verifyAllInput(radios5) && verifyAllInput(radios6) && verifyAllInput(radios7) && verifyAllInput(radios8)) {
    document.getElementById("question" + currentItem).style.display = "none";
    document.getElementById("question" + nextItem).style.display = "block";
  }
}

function showQuestionP2Q3(currentItem, nextItem) {
  var radios0 = document.getElementsByName("p2q3quest0");
  var radios1 = document.getElementsByName("p2q3quest1");
  var radios2 = document.getElementsByName("p2q3quest2");
  var radios3 = document.getElementsByName("p2q3quest3");
  var radios4 = document.getElementsByName("p2q3quest4");
  var radios5 = document.getElementsByName("p2q3quest5");
  var radios6 = document.getElementsByName("p2q3quest6");
  var radios7 = document.getElementsByName("p2q3quest7");
  var radios8 = document.getElementsByName("p2q3quest8");
  var radios9 = document.getElementsByName("p2q3quest9");
  var radios10 = document.getElementsByName("p2q3quest10");
  var radios11 = document.getElementsByName("p2q3quest11");
  var radios12 = document.getElementsByName("p2q3quest12");

  if (verifyAllInput(radios0) && verifyAllInput(radios1) && verifyAllInput(radios2) && verifyAllInput(radios3) && verifyAllInput(radios4) && verifyAllInput(radios5) && verifyAllInput(radios6) && verifyAllInput(radios7) && verifyAllInput(radios8) && verifyAllInput(radios9) && verifyAllInput(radios10) && verifyAllInput(radios11) && verifyAllInput(radios12)
    && document.getElementsByName("p2q3quest13item1").length != 0
    && document.getElementsByName("p2q3quest14item1").length != 0
    && document.getElementsByName("p2q3quest15item1").length != 0
    && document.getElementsByName("p2q3quest16item1").length != 0) {

    document.getElementById("question" + currentItem).style.display = "none";
    document.getElementById("question" + nextItem).style.display = "block";
  }
}

function validateFormP2() {
  var radios0 = document.getElementsByName("p2q4quest0");
  var radios1 = document.getElementsByName("p2q4quest1");
  var radios2 = document.getElementsByName("p2q4quest2");
  var radios3 = document.getElementsByName("p2q4quest3");
  var radios4 = document.getElementsByName("p2q4quest4");
  var radios5 = document.getElementsByName("p2q4quest5");
  var radios6 = document.getElementsByName("p2q4quest6");
  var radios7 = document.getElementsByName("p2q4quest7");
  var radios8 = document.getElementsByName("p2q4quest8");
  var radios9 = document.getElementsByName("p2q4quest9");
  var radios10 = document.getElementsByName("p2q4quest10");
  var radios11 = document.getElementsByName("p2q4quest11");
  var radios12 = document.getElementsByName("p2q4quest12");

  if (!verifyAllInput(radios0) || !verifyAllInput(radios1) || !verifyAllInput(radios2) || !verifyAllInput(radios3) || !verifyAllInput(radios4) || !verifyAllInput(radios5) || !verifyAllInput(radios6) || !verifyAllInput(radios7) || !verifyAllInput(radios8) || !verifyAllInput(radios9) || !verifyAllInput(radios10) || !verifyAllInput(radios11) || !verifyAllInput(radios12)
    || document.getElementsByName("p2q4quest14item1").length == 0
    || document.getElementsByName("p2q4quest14item1").length == 0
    || document.getElementsByName("p2q4quest15item1").length == 0
    || document.getElementsByName("p2q4quest16item1").length == 0) {

    alert("Por favor, preencha todos os campos");
    return false;
  }
}

function verifyAllInput(radios) {
  for (var i = 0; i < radios.length; i++) {
    if (radios[i].checked && radios[i].value != "") {
      return true;
    }
  }
}

// change form button after submit
$('#formDados').submit(function (e) {
  document.getElementById('btnEnviar').innerHTML = '<i class="fa fa-spinner fa-spin"></i>';
  setTimeout(() => {
    document.getElementById('btnEnviar').setAttribute('disabled', 'disabled');
  }, 0500);
  setTimeout(() => {
    document.getElementById('btnEnviar').textContent = 'ENVIAR';
    document.getElementById('btnEnviar').removeAttribute('disabled')
  }, 17000);
});
