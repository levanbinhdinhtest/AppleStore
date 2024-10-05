import { createApp } from 'vue'
import { createPinia } from 'pinia'
import router from './router/index.js'
import axios from 'axios'
window.axios = axios;
import App from './App.vue';
import 'ant-design-vue/dist/reset.css';
import 'bootstrap/dist/css/bootstrap-grid.min.css'
import 'bootstrap/dist/css/bootstrap-utilities.min.css'
import {Menu,List,Drawer,Button, message,Card,Table ,Avatar,Select,Input,Checkbox,Modal,Carousel,} from 'ant-design-vue';

const app = createApp(App);
app.use(createPinia());
app.use(router);
app.use(Menu);
app.use(Drawer);
app.use(Button);
app.use(Carousel);
app.use(Modal);
app.mount('#app');

app.config.globalProperties.$message = message;
