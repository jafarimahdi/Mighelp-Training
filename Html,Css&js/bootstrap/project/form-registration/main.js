function registerFun(e) {
  e.preventDefault();

  var showAlert = document.getElementById("msg"); // show Message

  var register = document.getElementById("register").value;
  var name = document.getElementById("name").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;

  // target radio
  var radios = undefined;
  if (document.querySelector('input[type="radio"]:checked')) {
    radios = document.querySelector('input[type="radio"]:checked').value;
  }

  // target dropdownf
  var dropdown = document.getElementById("select");
  var myValue = dropdown.options[dropdown.selectedIndex].value;

  // target checkbox
  var checkBox = undefined;
  if (document.querySelector('input[type="checkbox"]:checked')) {
    checkBox = document.querySelector('input[type="checkbox"]:checked').value;
  }

  // ********************* check the input values are correct

  if (
    register === "" ||
    name === "" ||
    phone === "" ||
    email === "" ||
    radios == undefined ||
    myValue === "choose" ||
    checkBox == undefined
  ) {
    showAlert.classList = "alert alert-danger";
    showAlert.innerHTML = " please fill all the inputs in form";
  } else {
    if (register.length < 3) {
      showAlert.classList = "alert alert-danger";
      showAlert.innerHTML = "register number must be at least 3 number";
    } else {
      if (name.length < 2) {
        showAlert.classList = "alert alert-danger";
        showAlert.innerHTML = "your Name must be more then 2 character";
      } else {
        if (phone.length <= 6) {
          showAlert.classList = "alert alert-danger";
          showAlert.innerHTML =
            "please add the correct phone number, it must be at least 6 numbers";
        } else {
          var atPos = email.indexOf("@");
          var dotPos = email.lastIndexOf(".");

          if (atPos < 1 || dotPos < atPos + 2 || dotPos + 2 >= email.length) {
            showAlert.classList = "alert alert-danger";
            showAlert.innerHTML = "please add the valid Email";
          } else {
            showAlert.classList = "alert alert-success";
            showAlert.innerHTML = " Thanks for submitted, your data are :";
            // just for test
            showAlert.innerHTML +=
              "<br>ID: " +
              register +
              ", Name: " +
              name +
              ", Phone: " +
              phone +
              ", Email: " +
              email +
              ", Gender: " +
              radios +
              ", Course: " +
              myValue +
              ", Category: " +
              checkBox;
          }
        }
      }
    }
  }
}

document
  .getElementById("register-form")
  .addEventListener("submit", registerFun, false);
