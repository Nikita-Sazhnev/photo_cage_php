$(function () {
  $(".lazy").Lazy();
});

$(".lazy").Lazy({
  // your configuration goes here
  scrollDirection: "vertical",
  effect: "fadeIn",
  visibleOnly: true,
  threshold: 50,

  onError: function (e) {
    console.log("error loading " + element.data("src"));
  },
});

menu.onclick = function myFunction() {
  let x = document.getElementById("myTopnav");

  if (x.className == "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
};

let fields = document.querySelectorAll(".field__file");
Array.prototype.forEach.call(fields, function (input) {
  let label = input.nextElementSibling,
    labelVal = label.querySelector(".field__file-fake").innerText;

  input.addEventListener("change", function (e) {
    let countFiles = "";
    if (this.files && this.files.length >= 1) countFiles = this.files.length;

    if (countFiles)
      label.querySelector(
        ".field__file-fake"
      ).innerText = `Выбрано файлов: ${countFiles}`;
    else label.querySelector(".field__file-fake").innerText = labelVal;
  });
});
