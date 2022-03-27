require('./bootstrap');

import {createApp} from 'vue';
import BlogComponent from './components/BlogComponent'


const app = createApp({})
app.component('blog-component', BlogComponent)
app.mount('#app')