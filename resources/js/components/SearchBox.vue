<template>
  <form @submit.prevent="Search" class="medium-view input-group p-0 m-0">
    <input v-model="search" type="text" class="form-control" placeholder="Search">
    <div class="input-group-append">
      <button class="search-button btn" type="submit">Go</button>
    </div>
  </form>
</template>

<script>
  export default {
    data () {
      return {
        search: '',
        show: true
      }
    },
    methods : {
      Search () {
        window.location.href = '/users/' + this.search;
      }
    }
  }
</script>

<style scoped>
  .search-button {
    color: rgba(255, 255, 255, 0.863);
    background-color: rgb(0, 0, 0)
  }
  .search-button:hover {
    color: white;
    background-color: rgba(0, 0, 0, 0.589)
  }
</style>
