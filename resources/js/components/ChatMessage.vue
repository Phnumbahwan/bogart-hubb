<template>
  <div>
    <div class="border">
        <h3 class="my-auto ml-2 py-2">John Miles</h3>
    </div>
    <div style="height: 300px; overflow-y: scroll;">
      <div class="receive d-flex mt-1">
        <div class="p-1 chat-image">
          <img class="rounded-circle w-100 h-100" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fneappleseed.org%2Fwp-content%2Fuploads%2F2013%2F01%2Fprofile-placeholder.png&f=1&nofb=1" alt="Profile Photo">
        </div>
        <p>dwkahjlhdsfdsdwsfdsfdsfdsfdsfdsfdsfsdfdsfdsfddwadwadwadawdwadwadawdwadwadwadwadwadafdshgfdshgfdhrghrghrfaewfewfewfewahsjkfhdsj</p>
      </div>
      <div class="send d-flex mt-1">
        <div class="p-1 chat-image">
          <img class="rounded-circle w-100 h-100" src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fneappleseed.org%2Fwp-content%2Fuploads%2F2013%2F01%2Fprofile-placeholder.png&f=1&nofb=1" alt="Profile Photo">
        </div>
        <p>dwkahjlhfsdjhsjkfhdsj</p>
      </div>
    </div>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Enter message here..." aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Send</button>
        </div>
    </div>
  </div>
</template>

<script>
    export default {
      props : ['userid']
    }
</script>

<style scoped>
  .receive p, .send p {
    padding: 10px;
    margin: 0;
    word-wrap: break-word;
    max-width: 400px;
  }
  .chat-image {
    max-width: 50px;
    max-height: 50px;
  }
  .receive p {
    color: black;
    background-color: white;
    border: 1px solid black;
    border-radius: 10px;
  }
  .send {
    flex-direction: row-reverse;
  }
  .send p {
    color: white;
    background-color: black;
    border: 1px solid white;
    border-radius: 10px;
  }
</style>
