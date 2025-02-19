import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import route from '../../vendor/tightenco/ziggy/src/js'
import { Ziggy } from './ziggy'

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup ({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mixin({
        methods: {
          $route: (name, params, absolute) => route(name, params, absolute, {
            ...Ziggy,
            url: `${window.location.protocol}//${window.location.host}`,
          })
        },
      })
      .mount(el)
  },
}).catch(err => console.error(err))

InertiaProgress.init()
