<template>
    <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">{{ username }}</a>
</template>

<script>
    export default {
      props: ['username']
    }
</script>
