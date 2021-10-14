<template>
  <ul class="list-group">
    <li class="d-flex list-group-item list-group-item-action">
      <div class="profile-image mr-4">
        <img class="w-100 h-100" :src="userimage">
      </div>
      <div class="my-auto">
        <h3>{{ username }}</h3>
        <div>{{ userurl }}</div>
        <div>{{ userdescription }}</div>
      </div>
    </li>
  </ul>
</template>

<script>
  export default {
    props: ['userimage','username','userurl','userdescription']
  }
</script>

<style scoped>
  .profile-image {
    width: 100px;
    height: 100px;
  }
</style>
