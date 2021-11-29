import Api from "./api"

class Form{
    constructor({
        form,
    }){
        this.form = form
        this.form.addEventListener("submit", (e) =>{
            e.preventDefault()
            let form = new FormData(e.target)
            Api.post(wp_variables.ajax, form)
            .then(res => {
                if(res){
                    alert("Send!")
                }
                else{
                    alert("Error send request")
                    console.log(err)
                }
            })
            .catch(err => {
                alert("Error send request")
                console.log(err)
            })
        })   
    }
}
export default Form