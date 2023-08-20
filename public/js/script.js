let switchMode = document.getElementById("flexSwitchCheckDefault");
let switchLabel = document.getElementById("SwitchLabel");
switchMode.addEventListener("click", ()=>{
    if(switchLabel.innerText=="Dark"){
        switchLabel.innerText = "Light";
        document.getElementsByTagName("body")[0].setAttribute("data-bs-theme", "light");
        document.getElementById("label-checkbox").classList.remove("text-light");
        document.getElementById("label-checkbox").classList.add("text-dark");
        document.getElementById("description").classList.remove("text-light");
        document.getElementById("description").classList.add("text-dark");
        document.getElementById("line-break").classList.remove("text-light");
        document.getElementById("line-break").classList.add("text-dark");
    } else {
        switchLabel.innerText = "Dark";
        document.getElementsByTagName("body")[0].setAttribute("data-bs-theme", "dark");
        document.getElementById("label-checkbox").classList.remove("text-dark");
        document.getElementById("label-checkbox").classList.add("text-light");
        document.getElementById("description").classList.remove("text-dark");
        document.getElementById("description").classList.add("text-light");
        document.getElementById("line-break").classList.remove("text-dark");
        document.getElementById("line-break").classList.add("text-light");
    }
});
