const { createApp } = Vue;

createApp({
    data() {
    return {
        message: 'Todo List',
        message2: 'New todo',
        todo: [],
        current: ''
    }
    },
    methods: {
        getIndex(i){
            console.log(i);
            axios.get('server.php', {
                params: {
                    i
                }
            }).then((response) => {
                console.log(response);
                this.current= response.data
            })
        }
    },
    created(){
        axios.get('server.php').then((response) => {
            this.todo= response.data;
        })
    }
}).mount('#app')