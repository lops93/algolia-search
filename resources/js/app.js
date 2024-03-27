import "./bootstrap";

import { createApp } from "vue";
import InstantSearch from "vue-instantsearch/vue3/es";
import IndexView from "./components/Index/IndexView.vue";
import router from "./router";

const app = createApp().use(router);
app.use(InstantSearch);
app.component("index-view", IndexView);

app.mount("#app");
