class Modal{
    constructor({ open, close, modal }){
        this.open = open
        this.close = close
        this.modal = modal
        this.lisen()
    }
    lisen(){
        this.open.forEach(element => {
            element.addEventListener("click", (e)=>{
                e.preventDefault()
                this.modal.classList.add("show")
                document.body.style.overflow = "hidden"
            })
        })
        this.close.addEventListener("click", (e)=>{
            e.preventDefault()
            document.body.style.overflow = "visible"
            this.modal.classList.remove("show")
        })
    }
}
export default Modal