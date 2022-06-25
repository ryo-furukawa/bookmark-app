import { createApp } from "vue";
import App from "./components/App.vue";
import ExampleComponent from "./components/ExampleComponent.vue";

const app = createApp(App);
app.component('example-component', ExampleComponent)
app.mount("#app");
