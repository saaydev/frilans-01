import Form from "./form"
import Modal from "./modal"

if(document.querySelector(".gallery-show")){
    document.querySelector(".gallery-show").addEventListener("click", (e)=>{
        if(window.innerWidth > 768){
            document.querySelectorAll(".gallery .gallery-item").forEach(element => {
                element.style.display = "block"
            })
        }
        else{
            document.querySelectorAll(".gallery-mobile .gallery-mobile-item").forEach(element => {
                element.style.display = "block"
            })
        }
     
        e.target.parentElement.remove()
    })
}

new Modal({
    open: document.querySelectorAll(".modal_form_open"),
    modal: document.getElementById("modal_form")
})
new Modal({
    open: document.querySelectorAll(".open_menu"),
    modal: document.getElementById("modal_menu")
})
new Form({
    form: document.getElementById("formhome")
})
new Form({
    form: document.getElementById("formfooter")
})
new Form({
    form: document.getElementById("formmodal")
})

// Open sub menu by click
document.querySelectorAll(".menu-item-has-children").forEach(element => {
    element.addEventListener("click", () => {
        element.querySelector("ul.sub-menu").classList.toggle("open")
        element.classList.toggle("current")
    })
})