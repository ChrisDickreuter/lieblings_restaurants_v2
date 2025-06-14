import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
// Vuetify
import 'vuetify/styles'
import { createVuetify } from 'vuetify'
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import CustomTheme from './Theme/CustomTheme';

const vuetify = createVuetify({
  components,
  directives,
  theme: {
        defaultTheme: "CustomTheme",
        themes: {
            CustomTheme,
        },
    },
})

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(vuetify)
      .mount(el)
  },
})