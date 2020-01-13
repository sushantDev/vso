<template>
    <div class="messages">
        <div v-for="message in messages">
            <div class="message">
                <h5>{{ message.user.name }}</h5>
                <p class="info">
                    {{ message.message }}
                    <br>
                    <span>{{ differenceInTime(message.created_at) }}</span>
                </p>
            </div>
        </div>
    </div>
</template>

<script>
  import moment from "moment";
  moment.locale();
  export default {
    props: [
      'messages'
    ],
    methods: {
      differenceInTime(time) {
        return moment(time).utc().fromNow();
      }
    }
  };
</script>
