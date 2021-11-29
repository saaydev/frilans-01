class Api{
    static async post(url, body){
        let res = await fetch(url, {
            method: "post",
            body,
        })
        return await res.json()
    }
}
export default Api