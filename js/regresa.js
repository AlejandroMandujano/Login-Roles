let docTitle = document.title;
window.addEventListener("blur", () =>{
    document.title = "Regresa :(";

})

window.addEventListener("focus", () => {
    document.title = docTitle;
})