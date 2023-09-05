
const { createApp } = Vue

createApp({
    data() {
        return {
            dataProducts : [],
        }
    },
    created(){
        axios.get('http://localhost/php-oop-2//exportJSON.php')
            .then(result=>{
                console.log(result.data);
                this.dataProducts = result.data;
                console.log(this.dataProducts);
            })
        
    }
}).mount('#app')