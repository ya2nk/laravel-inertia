require('./bootstrap');

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import MainLayout from './Layout/MainLayout'

InertiaProgress.init();

createInertiaApp({
  resolve: async (name) => { 
	let {default: page} = await import(`./Pages/${name}`)
		page.layout = page.layout || MainLayout
		return page
	} ,
  setup({ el, App, props, plugin }) {
    const app = createApp({ render: () => h(App, props) })
	  app.config.globalProperties.$route = window.route
	  app.provide('$route',window.route)
      app.use(plugin)
      app.mount(el)
  },
});

