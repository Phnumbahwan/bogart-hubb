<template>
    <div>
        <button class="btn btn-sm btn-primary mx-3" @click="followUser">
            {{ followStatus }}
        </button>
    </div>
</template>

<script>
    export default {
        props: ['userid','follows'],
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                status: this.follows
            }
        },
        methods: {
            followUser() {
                axios.post('/follow/' + this.userid)
                .then(response => {
                    this.status = !this.status
                    console.log(response.data)
                })
                .catch(errors => {
                    if(errors.response.status == 401){
                        window.location = '/login';
                    }
                })
            }
        },
        computed: {
            followStatus() {
                return (this.status) ? 'Unfollow' : 'Follow';
            }
        }
    }
</script>
