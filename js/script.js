const passwordinput = document.querySelector("#showpassword")

function checkpassword() {
  if(passwordinput.type == "password") {
    passwordinput.type = "text";
    $(".buttonshowpass").removeClass("fas fa-eye")
    $(".buttonshowpass").addClass("fas fa-eye-slash")
  } else {
    passwordinput.type = "password";
    $(".buttonshowpass").removeClass("fas fa-eye-slash")
    $(".buttonshowpass").addClass("fas fa-eye")
  }
}

const passwordinputconfirm = document.querySelector("#showpasswordconfirm")

function checkpasswordconfirm() {
  if(passwordinputconfirm.type == "password") {
    passwordinputconfirm.type = "text";
    $(".buttonshowpassconfirm").removeClass("fas fa-eye")
    $(".buttonshowpassconfirm").addClass("fas fa-eye-slash")
  } else {
    passwordinputconfirm.type = "password";
    $(".buttonshowpassconfirm").removeClass("fas fa-eye-slash")
    $(".buttonshowpassconfirm").addClass("fas fa-eye")
  }
}