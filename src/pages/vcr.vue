<template>
  <div class="main-container flexCont">
    <Navbar NavbarStyle="NavbarStyle" />
    <section class="section-padding2 productBody">
      <div class="container">
        <h1 class="product-name">REGOS: VCR</h1>
        <div class="product-title">
          <div><img src="../assets/img/product/vcr.jpg" alt="" /></div>
          <div class="product-content">
            <p class="mb-5">
              <strong>
                Программное обеспечение виртуальной кассы REGOS: VCR (версия
                1.1.0.0)
              </strong>
              разработана в соответствии с ПКМ Республики Узбекистан
              <strong>№943</strong> от 23.11.2020.
            </p>

            <p>
              Программа обеспечивает гибкое взаимодействие между пользователем и
              фискальным модулем посредством HTTP запросов и визуального
              интерфейса (GUI), а также хранение и распечатку фискальных
              документов на бумажных носителях с помощью POS принтеров.
            </p>
          </div>
        </div>

        <div class="product-head">
          <h3 class="product-titleName">Возможности виртуальной кассы</h3>
          <ul class="push">
            <li>
              Полное соответствие ПКМ Республики Узбекистан
              <strong>№943</strong> от 23.11.2020;
            </li>
            <li>Быстрая и легкая установка;</li>
            <li>Управление Z-отчетами, регистрация продаж и возвратов;</li>
            <li>Печать дубликата чека;</li>
            <li>Управление ставками НДС;</li>
            <li>Разграничение доступа и защита паролем от несанкционированного доступа;</li>
            <li>
              Наличие <strong>API интерфейса</strong> для интеграции с внешним программным обеспечением;
            </li>
            <li>
              Гибкая настройка чеков с возможностью вывода дополнительной
              информации;
            </li>
            <li>
              Интеграция с программным обеспечением 
              <strong>EasyTrade</strong> и <strong>REGOS</strong>.
            </li>
          </ul>
        </div>

        <div>
          <h3 class="product-titleName">Скриншоты</h3>
          <carousel
            class="testimonial-active owl-dot-style"
            :items="1"
            :smartSpeed="1000"
            :nav="false"
          >
            <div v-for="(client, clients) in clients" :key="clients">
              <div>
                <img
                  :src="client.clientThumb"
                  style="padding: 0 10px"
                  alt="client thumb"
                />
              </div>
            </div>
          </carousel>
        </div>

        <div class="product-head mt-5">
          <h3 class="product-titleName">Документация</h3>
          <a href="https://docs.regos.uz/ru/regos-vcr"> REGOS: VCR</a> <span>- Руководство пользователя</span> 
        </div>

        <div class="product-head">
          <h3 class="product-titleName">Цены</h3>
          <p>
            По вопросам установки программного обеспечения виртуальной кассы
            обращайтесь по номерам клиентских отделов на
            <router-link to="/contacts">странице контактов.</router-link>
          </p>
        </div>

        <div class="product-head">
          <h3 class="product-titleName">Техническая поддержка</h3>
          <p>
            Поддержка продукта осуществляется по номерам технической поддержки
            на
            <router-link to="/contacts">странице контактов.</router-link>
          </p>
        </div>
      </div>
    </section>
    <Footer FooterStyle="footer-style-2" />
  </div>
</template>
<script>
import Navbar from "../components/Navbar";
import Footer from "../components/Footer";
import carousel from "vue-owl-carousel";

export default {
  name: "app",
  components: {
    Navbar,
    Footer,
    carousel,
  },
  metaInfo() {
    return {
      title: "REGOS: VCR - REGOS - Автоматизация оптовых и розничных продаж",
      meta: [
        {
          name: "description",
          content:
            "Современные технологии для автоматизации магазинов, бутиков, торговых сетей",
        },
        {
          property: "og:title",
          content:
            "REGOS: VCR - REGOS - Автоматизация оптовых и розничных продаж",
        },
        { property: "og:site_name", content: "REGOS: VCR" },
        {
          property: "og:image",
          content: "<%= BASE_URL %>android-chrome-512x512.png",
        },
      ],
    };
  },
  data() {
    return {
      bgImg: {
        backgroundImage: `url(${require("../assets/img/bg/clients2-bg.jpg")})`,
      },
      clients: [
        {
          clientThumb: require("../assets/img/vcr/1.png"),
        },
        {
          clientThumb: require("../assets/img/vcr/2.png"),
        },
        {
          clientThumb: require("../assets/img/vcr/3.png"),
        },
        {
          clientThumb: require("../assets/img/vcr/4.png"),
        },
        {
          clientThumb: require("../assets/img/vcr/5.png"),
        },
        {
          clientThumb: require("../assets/img/vcr/6.png"),
        },
      ],
    };
  },
};
</script>

<style lang="scss" scope>
.header {
  background-color: #2d3e50;
}
.flexCont {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  background-color: #f4f4f4;
  
}

.product-head p {
  color: #000;
}
.product-head a {
  color: #e2ac00;
  line-height: 1.6;
  font-size: 20px;
  margin-right: 10px;


  &:hover {
    color: darken($color: #e2ac00, $amount: 10);
  }
}
ul {
  color: #000;
}
.push {
  margin-top: 20px;
  list-style: none;
}
.push li {
  position: relative;
  padding: 14px 0 8px 30px;
  color: #3f474f;
  cursor: pointer;
}
.push li:before {
  position: absolute;
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: #6a7f94;
  content: "";
  left: 0;
  transition: 0.3s ease-in-out;
  top: 27px;
}
.push li:after {
  position: absolute;
  border-left: 1px dotted #6a7f94;
  width: 1px;
  bottom: -12px;
  content: "";
  left: 3px;
  top: 48px;
}
.push li:hover:before {
  box-shadow: 0 0 0 10px rgba(0, 0, 0, 0.2);
}
.push li:last-child:after {
  content: none;
}
.product-name {
  font-size: 40px;
  border-bottom: 1px solid #6a7f94;
  margin-bottom: 14px;
  padding-bottom: 16px;
}
.product-titleName {
  border-bottom: 1px solid #6a7f94;
  margin-bottom: 14px;
  padding-bottom: 16px;
  padding-top: 16px;
  margin-top: 36px;
}
.productBody {
  padding-top: 120px;
  span {
    color: #000;
  }
}
.product-title {
  color: #000;
  display: flex;
  justify-content: space-between;
  @media (max-width: 767px) {
    flex-wrap: wrap;
    .product-content {
      margin-top: 20px;
    }
  }
  img {
    margin-right: 30px;
    border-radius: 10px;
    max-width: 357px;
    height: auto;
    @media (max-width: 767px) {
      max-width: 100%;
      margin-right: 0px;
    }
  }
  .product-content {
    font-size: 18px;
    @media (max-width: 992px) {
      font-size: 16px;
    }
  }
}
.owl-dots {
  .owl-dot {
    &.active span {
      background-color: rgb(51, 50, 50) !important;
    }
  }
}
</style>