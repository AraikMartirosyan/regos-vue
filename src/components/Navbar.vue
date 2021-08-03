<template>
  <header>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="menu-wrap">
            <header
              class="header"
              id="header"
              :class="{ fixHeader: headActive }"
            >
              <div class="container">
                <div class="header__main">
                  <router-link to="/"
                    ><img
                      src="../assets/img/logo/logo.svg"
                      alt="Regos"
                      class="header__logo"
                  /></router-link>
                  <nav class="header__nav">
                    <ul class="topmenu">
                      <li class="topmenu__link">
                        <a href="#">Продукты</a>
                        <ul class="submenu">
                          <div class="row">
                            <div class="col-6">
                              <li>
                                <img
                                  src="../assets/img/submenu/easytrade.svg"
                                  alt="EasyTrade"
                                />
                                <a target="_black" href="http://easytrade.uz"
                                  ><strong>EasyTrade</strong><br /><span>
                                    Легкий учет склада и продаж в одной
                                    программе</span
                                  ></a
                                >
                              </li>
                            </div>
                            <div
                              class="col-6"
                              v-for="(product, index) in products"
                              :key="index"
                            >
                              <li>
                                <img :src="product.img" :alt="product.name" />
                                <a :href="product.link" :target="product.target"
                                  ><strong>{{ product.name }}</strong
                                  ><br /><span>{{ product.span }}</span></a
                                >
                              </li>
                            </div>
                          </div>
                        </ul>
                      </li>
                      <li><router-link to="/prices">Цены</router-link></li>
                      <li class="topmenu__link">
                        <a href="#">Документация</a>
                        <ul class="submenu">
                          <div class="row">
                            <div class="col-6">
                              <li>
                                <img
                                  src="../assets/img/submenu/user.svg"
                                  alt="Документация Пользователям"
                                />
                                <a href="https://docs.regos.uz/ru"
                                  ><strong>Пользователям</strong> <br />
                                  <span
                                    >Обзор возможностей продуктов REGOS</span
                                  ></a
                                >
                              </li>
                            </div>
                            <div class="col-6">
                              <li>
                                <img
                                  src="../assets/img/submenu/developer.svg"
                                  alt="Документация Разработчикам"
                                />
                                <a href="https://docs.regos.uz/api/ru/login"
                                  ><strong>Разработчикам</strong> <br />
                                  <span
                                    >Возможности взаимодействия c API</span
                                  ></a
                                >
                              </li>
                            </div>
                          </div>
                        </ul>
                      </li>
                      <li>
                        <router-link to="/contacts">Контакты</router-link>
                      </li>
                    </ul>
                  </nav>

                  <div class="header__contact">
                    <a href="tel:+998951778930" class="header__phone"
                      >+998 95 177 89 30</a
                    >
                  </div>
                  <div class="header__contact">
                    <a
                      href="https://regos.online/account/login"
                      class="header__login"
                      >Вход в систему</a
                    >
                  </div>
                  <div
                    class="burgerMenu"
                    :class="{ burgerMenu__active: burgerActive }"
                  >
                    <div
                      class="burgerMenu__button"
                      @click="burgerActive = !burgerActive"
                    >
                      <span class="burgerMenu__lines"></span>
                    </div>

                    <nav class="burgerMenu__nav">
                      <div class="accordion" id="accordion">
                        <div class="accordion-item">
                          <a
                            class="accordion-item-head"
                            ref="product"
                            v-on:click="
                              $refs.product.classList.toggle('active')
                            "
                          >
                            Продукты
                          </a>
                          <div class="accordion-item-body">
                            <a target="_black" href="http://easytrade.uz"
                              >EasyTrade</a
                            >
                            <a
                              v-for="(product, i) in products"
                              :key="i"
                              :href="product.link"
                              >{{ product.name }}</a
                            >
                          </div>
                        </div>

                        <div class="accordion-item">
                          <router-link class="accordion-item-head" to="/prices">
                            Цены
                          </router-link>
                        </div>

                        <div class="accordion-item">
                          <a
                            class="accordion-item-head"
                            ref="doc"
                            v-on:click="$refs.doc.classList.toggle('active')"
                          >
                            Документация
                          </a>
                          <div class="accordion-item-body">
                            <a href="https://docs.regos.uz/ru/regos-sm"
                              >Пользователям</a
                            >
                            <a href="https://docs.regos.uz/api/ru/login"
                              >Разработчикам</a
                            >
                          </div>
                        </div>
                        <div class="accordion-item">
                          <router-link
                            class="accordion-item-head"
                            to="/contacts"
                            >Контакты</router-link
                          >
                        </div>
                      </div>
                      <a
                        class="accEnter"
                        href="https://regos.online/account/login"
                        >Вход в систему</a
                      >
                      <!-- <a class="accTel" href="tel:+998951778930"
                        >+998 95 177 89 30</a
                      > -->
                      <p class="mt-3">КЛИЕНТСКИЕ ОТДЕЛЫ:</p>
                      <span>г. Ташкент </span>
                      <a class="burger-num" href="tel:+998951778930"
                        >+998 95 177 89 30</a
                      >
                      <span>г. Самарканд </span>
                      <a class="burger-num" href="tel:+998933532008"
                        >+998 93 353 20 08</a
                      >
                      <p class="mt-2">ТЕХНИЧЕСКАЯ ПОДДЕРЖКА:</p>
                      <a class="burger-num" href="tel:+998909258930"
                        >+998 90 925 89 30</a
                      >
                    </nav>
                  </div>
                </div>
              </div>
            </header>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  data() {
    return {
      burgerActive: false,
      headActive: false,
      scrollPosition: null,
      accActive: false,
      products: [
        {
          name: "REGOS: STORE MANAGEMENT",
          link: "https://docs.regos.uz/ru/regos-sm",
          span: "Управление складом. финансы. отчеты",
          img: `${require("../assets/img/submenu/storman.svg")}`,
        },

        {
          name: "REGOS: POS",
          link: "https://docs.regos.uz/ru/regos-pos",
          span: "Регистрация продаж. Контроль кассы.Скидки",
          img: `${require("../assets/img/submenu/pos.svg")}`,
        },

        {
          name: "REGOS: CASH SERVER",
          link: "https://docs.regos.uz/ru/regos-cashserver",
          span: "Синхронизация данных между кассами и сервером",
          img: `${require("../assets/img/submenu/cashserver.svg")}`,
        },

        {
          name: "REGOS: VCR",
          link: "/vcr",
          span: "Виртуальная касса (соотвествует требованиям ПКМ РУЗ №943)",
          img: `${require("../assets/img/submenu/vcr.svg")}`,
        },

        {
          name: "REGOS: ONLINE",
          link: "https://docs.regos.uz/ru/regos-online",
          span: "Мониторинг бизнеса с любого устройства. Закупки. Продажи",
          img: `${require("../assets/img/submenu/web.svg")}`,
        },
      ],
    };
  },
  methods: {
    handleScroll() {
      this.scrollPosition = window.scrollY;
      this.scrollPosition >= 30
        ? (this.headActive = true)
        : (this.headActive = false);
    },
  },
  created() {
    window.addEventListener("scroll", this.handleScroll);
  },
  destroyed() {
    window.removeEventListener("scroll", this.handleScroll);
  },
};
</script>

<style lang='scss'>
.burger-num {
  color: #e2ac00;
  &:hover {
    color: #e2ac00;
  }
}
@import "../assets/scss/variables.scss";
@import "../assets/scss/components/header.scss";
</style>

