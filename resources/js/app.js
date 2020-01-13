/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('chat-messages', require('./components/ChatMessages.vue').default);
Vue.component('chat-form', require('./components/ChatForm.vue').default);
Vue.component('qnas', require('./components/Qnas.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

var session = document.getElementById('session').innerHTML;

const app = new Vue({
    el: '#app',
    data: {
        messages: [],
        qnas: [],
        stream_id: 0
    },
    created() {
        this.fetchMessages();
        this.fetchQnas();

        setInterval(() => this.fetchMessages(), 5000);

        Echo.private('chat')
            .listen('MessageSent', (e) => {
                this.messages.push({
                    message: e.message.message,
                    session: e.session,
                    user: e.user
                });
            });
    },
    methods: {
        fetchMessages() {
            var url = '/chat/messages/' + session;
            axios.get(url).then(response => {
                this.messages = response.data;
            });
        },
        fetchQnas() {
            var url = '/qna/' + session;
            axios.get(url).then(response => {
                this.qnas = response.data;
            })
        },
        addMessage(message) {
            this.messages.push(message);

            axios.post('/chat/messages', message).then(response => {
                console.log(response.data);
            });
        },
        submitStreamKey() {
            var url = '/session/' + session + '/stream-id';
            var data = {
                'stream_id' : this.stream_id
            };

            axios.post(url, data).then(response => {
                swal({
                    title: "Successfully Sent Stream ID!!",
                    icon: "success",
                    dangerMode: false
                });
            });
        }
    }
});
