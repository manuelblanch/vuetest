require('/bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router';

window.Vue.use(VueRouter);

import TestIndex from './components/test/TestIndex.vue';
import TestCreate from './components/test/TestCreate.vue';
import TestEdit from './components/test/TestEdit.vue';

const routes = [
	{
		path: '/',
		components: {
			testIndex: TestIndex
		}
	},

	{path: '/admin/test/create', component: TestCreate, name: 'createTest'},
	{path: '/admin/test/edit/:id', component: TestEdit, name: 'editTest'},
	
	]

	const router = new VueRouter({ routes })

	const app = new Vue({ router }).$mount('#app')