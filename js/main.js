const { createApp } = Vue

createApp({
    data() {
        return {
            disks: [],
            currentDiskIndex: '',
            currentDiskData: '',
        }
    },

    methods: {
        getDiskData(index) {
            this.currentDiskIndex = index;
            axios.get(`./server.php?currentDiskIndex=${this.currentDiskIndex}`).then(res => {
                // console.log(res.data);
                this.currentDiskData = res.data;
            }).catch(err => {
                // handle error
                console.log(err);
            })
        },
    },

    mounted() {
        axios.get('./server.php').then(res => {
            // console.log(res.data);
            this.disks = res.data;
            console.log(this.disks)
        })
    }
}).mount('#app')