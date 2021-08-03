<template>
  <footer class="footer">
    <div class="container">
      <div class="footer-middle">
        <div class="row text-center justify-content-between">
          <div class="mb-3 col-xl-3 col-md-4 col-sm-6">
            <span class="footer-middle__title">Продукты</span>
            <a href="http://easytrade.uz" target="_blank">easytrade</a>
            <a
              v-for="(product, products) in products"
              :key="products"
              :href="product.link"
              :target="product.target"
              >{{ product.name }}</a
            >
          </div>

          <div class="mb-3 col-xl-2 col-md-4 col-sm-6">
            <span class="footer-middle__title">Компания</span>
            <router-link
              v-for="(comItem, company) in company"
              :key="company"
              :to="comItem.link"
              >{{ comItem.name }}</router-link
            >
          </div>

          <div class="mb-3 col-xl-3 col-md-4 col-sm-6">
            <span>Документация</span>
            <a
              v-for="(docItem, documentation) in documentation"
              :key="documentation"
              :href="docItem.link"
              >{{ docItem.name }}</a
            >
          </div>

          <div class="mb-3 col-xl-3 col-md-6 col-sm-6">
            <span class="mb-2">Клиентские отделы:</span>
            <span class="footer-address"
              >г. Ташкент, ул. Абдулла Каххора, 2а</span
            >
            <a href="tel:+998951778930" class="footer-number"
              ><i class="fa fa-phone"></i><span>+998 95 177 89 30</span></a
            >
            <span class="footer-address">г. Самарканд, ул. Гагарина, 123</span>
            <a href="tel:+998933532008" class="footer-number mb-3"
              ><i class="fa fa-phone"></i><span>+998 93 353 20 08</span>
            </a>
            <span>Техническая поддержка:</span>
            <a href="tel:998909258930" class="mb-2 footer-number"
              ><i class="fa fa-phone"></i><span>+998 90 925 89 30</span>
            </a>
            <div class="icons">
              <a
                v-for="(social, socials) in socials"
                :key="socials"
                :href="social.link"
              >
                <i :class="social.icon"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container-fluid">
        <div class="row align-items-center text-center">
          <div class="col">
            <div>
              <div class="pb-2">{{ copyright }}</div>
              <div style="color: #555; font-size: 12px">
                <small
                  >This site is protected by reCAPTCHA and the Google
                  <a
                    style="color: #555"
                    href="https://policies.google.com/privacy"
                    >Privacy Policy</a
                  >
                  and
                  <a
                    style="color: #555"
                    href="https://policies.google.com/terms"
                    >Terms of Service</a
                  >
                  apply.
                </small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "Footer",
  props: ["FooterStyle"],
  data() {
    return {
      socials: [
        { icon: "fa fa-telegram", link: "https://t.me/RegosSoftware" },
        { icon: "fa fa-facebook", link: "https://facebook.com/RegosSoftware" },
        {
          icon: "fa fa-instagram",
          link: "https://instagram.com/regossoftware",
        },
      ],
      documentation: [
        { name: "EasyTrade", link: "https://easytrade.uz/docs" },
        {
          name: "REGOS: STORE MANAGEMENT",
          link: "https://docs.regos.uz/ru/regos-sm",
        },
        { name: "REGOS: POS", link: "https://docs.regos.uz/ru/regos-pos" },
        {
          name: "REGOS: CASH SERVER",
          link: "https://docs.regos.uz/ru/regos-cashserver",
        },
        { name: "REGOS: VCR", link: "https://docs.regos.uz/regos-vcr" },
        {
          name: "REGOS: ONLINE",
          link: "https://docs.regos.uz/ru/regos-online",
        },
        { name: "Разработчикам", link: "https://docs.regos.uz/api/ru/login" },
      ],
      company: [
        { name: "Новости", link: "" },
        { name: "Цены", link: "/prices" },
        { name: "Вакансии", link: "" },
        { name: "Контакты", link: "/contacts" },
      ],
      products: [
        { name: "REGOS: STORE MANAGEMENT", link: "https://docs.regos.uz/ru/regos-sm" },
        { name: "REGOS: POS", link: "https://docs.regos.uz/ru/regos-pos" },
        { name: "REGOS: CASH SERVER", link: "https://docs.regos.uz/ru/regos-cashserver" },
        { name: "REGOS: VCR", link: "/vcr" },
        { name: "REGOS: ONLINE", link: "https://docs.regos.uz/ru/regos-online" },
      ],
      copyright: '© 2020 OOO "Regos Software". Все права защищены.',
    };
  },
};
</script>

<style lang='scss'>
@import "../assets/scss/variables.scss";
@import "../assets/scss/components/footer.scss";
</style>

