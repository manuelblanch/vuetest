<template>
  <div class="hellotest">
    <h1>{{ msg }}</h1>
    <h2>Links importants</h2>
    <ul>
      <li><a href="https://vuejs.org" target="_blank">Documents generals</a></li>
      <li><a href="https://forum.vuejs.org" target="_blank">Forum</a></li>
      <li><a href="https://gitter.im/vuejs/vue" target="_blank">Chat</a></li>
      <li><a href="https://twitter.com/vuejs" target="_blank">Twitter</a></li>
      <br>
      <li><a href="" target="_blank">Template</a></li>
    </ul>
    <h2>Ecosystem</h2>
    <ul>
      <li><a href="http://router.vuejs.org/" target="_blank">vue-router</a></li>
      <li><a href="http://vuex.vuejs.org/" target="_blank">vuex</a></li>
      <li><a href="http://vue-loader.vuejs.org/" target="_blank">vue-loader</a></li>
    </ul>
  </div>
</template>

<script>
Vue.component('movie-card', {
  props: ['image', 'title'],
  template: `
    <div>
      <img width="100" v-bind:src="image" v-bind:alt="title"/>
      <h2>{{ title }}</h2>
    </div>
  `,
})
</script>

<script>
export default {
  name: 'hello',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}
</style>
