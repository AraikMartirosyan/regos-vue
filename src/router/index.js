import Home_two from "../pages/Home_two";
import NotFound from "../pages/404";
import contacts from "../pages/contacts";
import prices from "../pages/prices";
import vcr from "../pages/vcr";

export const routes = [
  {
    path: "*",
    name: "NotFound",
    component: NotFound,
    meta: { title: "404" },
  },
  {
    path: "/",
    name: "Home_two",
    component: Home_two,
    meta: { title: "REGOS - Автоматизация оптовых и розничных продаж" },
  },
  {
    path: "/contacts",
    name: "contacts",
    component: contacts,
    meta: { title: "Контакты - REGOS - Автоматизация оптовых и розничных продаж" },
  },
  {
    path: "/prices",
    name: "prices",
    component: prices,
    meta: { title: "Цены - REGOS - Автоматизация оптовых и розничных продаж" },
  },
  {
    path: "/vcr",
    name: "vcr",
    component: vcr,
    meta: { title: "REGOS: VCR - REGOS - Автоматизация оптовых и розничных продаж" },
  },
];
