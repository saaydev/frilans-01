import Modal from "./modal"

if(document.querySelector(".gallery-show")){
    document.querySelector(".gallery-show").addEventListener("click", (e)=>{
        document.querySelectorAll(".gallery-item").forEach(element => {
            element.style.display = "block"
        })
        e.target.parentElement.remove()
    })
}

const form = new Modal({
    open: document.querySelectorAll(".modal_form_open"),
    modal: document.querySelector("#modal_form"),
    close: document.querySelector("#modal_form .close")
})