require('./bootstrap');

import { createApp } from 'vue'
import Welcome from './components/Welcome'
import '../sass/app.scss'

const app = createApp({})

app.component('welcome', Welcome)

app.mount('#app')
