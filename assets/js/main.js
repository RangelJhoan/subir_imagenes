let fileInput = document.getElementById("custom-file-input")
let fileStatus = document.querySelector(".file-status")

fileInput.addEventListener("change", function(){
    fileStatus.textContent = this.files[0].name;
})