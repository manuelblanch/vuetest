<template>
  <div id="app">
    <div class="heading">
      <h1>Cruds</h1>
    </div>
    <crud-component
      v-for="crud in cruds"
      v-bind="crud"
      :key="crud.id"
      @update="update"
      @delete="del"
    ></crud-component>
    <div>
      <button @click="create()">Add</button>
    </div>
  </div>
</template>

<script>
  function Crud({ id, color, name}) {
    this.id = id;
    this.color = color;
    this.name = name;
  }

  import CrudComponent from './CrudComponent.vue';

  export default {
    data() {
      return {
        cruds: []
      }
    },
    methods: {
      create() {
        windows.axios.get('/api/cruds/create').then(( {data} )) => {
          this.cruds.push(new Crud(data));
        }),
      },
      read() {
      window.axios.get('/api/cruds').then(({ data }) => {
        data.forEach(crud => {
          this.cruds.push(new Crud(crud));
        });
      });
    },
  },
  ...
  created() {
    this.read();

      },
      update(id, color) {
        window.axios.put(`/api/cruds/${id}`, { color }).then(() => {
        this.cruds.find(crud => crud.id === id).color = color;
    });
  },
  ...
      del(id) {

        window.axios.delete(`/api/cruds/${id}`).then(() => {
        let index = this.cruds.findIndex(crud => crud.id === id);
        this.cruds.splice(index, 1);
    });

      }
    },
    components: {
      CrudComponent
    }
  }
</script>

<template>
  <div class="container">
    <div>
      <transition name="fade">
        <router-view></router-view>
      </transition>
    </div>
  </div>
</template>

<style>
.logo {
  width: 80px;
  float: left;
  margin-right: 30px;
}

.form-group {
  max-width: 1000px;
}

  .actions {
    padding: 15px 0;
  }

  .glyphicon-euro {
    font-size: 18px;
  }

.fade-enter-active, .fade-leave-active {
  transition: opacity .10s
}

.fade-enter, .fade-leave-active {
  opacity: 0
}

</style>

<script>
export default {
  mounted() {
    console.log('Component mounted.')
  }
}
</script>
