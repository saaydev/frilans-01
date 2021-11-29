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

const formModal = new Modal({
    open: document.querySelectorAll(".modal_form_open"),
    modal: document.querySelector("#modal_form"),
    close: document.querySelector("#modal_form .close")
})

const form = new Form({
    form: document.getElementById("formhome")
})
const formfooter = new Form({
    form: document.getElementById("formfooter")
})
const formmodal = new Form({
    form: document.getElementById("formmodal")
})