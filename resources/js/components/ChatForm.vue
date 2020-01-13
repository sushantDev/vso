<template>
    <div class="input-group">
        <input type="text" name="message" placeholder="Type your message here..." v-model="newMessage" @keyup.enter="sendMessage">

        <button class="btn btn-primary" type="button" @click="sendMessage">
            <i class="fa fa-lg fa-fw fa-paper-plane"></i>
        </button>
    </div>
</template>

<script>
  export default {
    props: [
      'user',
      'session'
    ],

    data() {
      return {
        newMessage: ''
      }
    },

    methods: {
      sendMessage() {
        console.log(this.session);
        this.$emit('messagesent', {
          user: this.user,
          session: this.session,
          message: this.newMessage
        });

        this.newMessage = ''
      }
    }
  }
</script>
