class Modal{
    constructor({ open, close = ".close", modal }){
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
            })
        })
        this.close = this.modal.querySelector(this.close)
        if(this.close){
            this.close.addEventListener("click", (e)=>{
                e.preventDefault()
                this.modal.classList.remove("show")
            })
        }
    }
}
export default Modal