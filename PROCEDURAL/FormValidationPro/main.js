const GTInput = document.querySelectorAll(".gt-input");
for (let i = 0; i < GTInput.length; i++) {
  let currentLable = GTInput[i].parentElement.firstElementChild;

  if (GTInput[i].value !== "") {
    currentLable.classList.add("move-up");
  }

  GTInput[i].addEventListener("focus", function () {
    currentLable.classList.add("move-up");
  });

  GTInput[i].addEventListener("blur", function () {
    if (GTInput[i].value === "") {
      currentLable.classList.remove("move-up");
    }
  });
}
