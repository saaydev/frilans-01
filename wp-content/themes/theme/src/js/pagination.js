import Api from "./api";

class Pagination{
    constructor({
        btn,
        wrapper,
        postsPerPage = 11,
    }){
        if(btn){
            this.btn = btn
            this.wrapper = wrapper
            this.postsPerPage = postsPerPage
            this.btnText = this.btn.innerHTML
            this.postType = this.btn.getAttribute("post-type")
            this.btnTextLoad = this.btn.getAttribute("text-load")
            this.taxId = this.btn.getAttribute("tax-id")
            this.taxonomy = this.btn.getAttribute("taxonomy")
            this.load = false
            this.paged = 2
            this.lisen()
        }
    }
    loadOn(){
        this.load = true
        this.btn.innerHTML = this.btnTextLoad
    }
    loadOff(){
        this.load = false
        this.btn.innerHTML = this.btnText
    }
    lisen(){
        this.btn.addEventListener("click", (e)=>{
            e.preventDefault()
            if(!this.load){
                this.loadOn()
                let form = new FormData();
                form.append("action", "pagination")
                form.append("post_type", this.postType)
                form.append("tax_id", this.taxId)
                form.append("taxonomy", this.taxonomy)
                form.append("posts_per_page", this.postsPerPage)
                form.append("paged", this.paged)
                
                Api.post(wp_variables.ajax, form)
                .then(res => {
                    this.paged++;
                    this.wrapper.insertAdjacentHTML("beforeend", res.posts)
                    if(res.count < this.postsPerPage){
                        this.btn.remove()
                    }
                    
                })
                .catch(err => {
                    alert("Error get pagination!");
                    console.log(err)
                })
                .finally(()=> this.loadOff())
            }
        })
    }
}
export default Pagination