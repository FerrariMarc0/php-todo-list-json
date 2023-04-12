const { createApp } = Vue;

createApp({
    data() {
    return {
        message: 'Todo List',
        message2: 'New todo',
        todo: [],
        current: '',
        newTodo: ''
    }
    },
    methods: {
        getIndex(index){
            console.log(index);
            axios.get('server.php', {
                params: {
                    index
                }
            }).then((response) => {
                console.log(response);
                this.current= response.data
            })
        },
        addTodo(){
            console.log('added');
            const data= {
                newTodo: this.newTodo
            };
            axios.post('server.php', data, {
                headers: {'Content-Type': 'multipart/form-data'}
            }).then((response) => {
                console.log(response);
                this.todo= response.data;
            })
        },
    created(){
        axios.get('server.php').then((response) => {
            this.todo= response.data;
        })
    }
}
}).mount('#app')