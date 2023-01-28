import './bootstrap';
import { createApp } from "vue";
import App from "./App.vue";
import router from "./router/index";

createApp(App)
    .use(router)
    .mount("#app");

import Header from "./component/Header.vue";

createApp(Header)
    .mount("#header");
