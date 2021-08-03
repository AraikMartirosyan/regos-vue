<template>
  <div class="main-container flexCont">
    <Navbar NavbarStyle="NavbarStyle" />
    <section class="productBody">
      <div class="container">
        <div class="pages-intro-container">
          <h1 class="product-name">Контакты</h1>
          <div class="row">
            <div class="col-md-6 card-wrapper">
              <loader v-if="loader" />
              <iframe
                v-on:load="loading()"
                style="opacity: 0; transition: 0.3s"
                id="iframe_onload"
                src="https://yandex.ru/map-widget/v1/?um=constructor%3A4c0aaa0596bd5f4a6c77d4a582ad62307cc40a106089e21423ad0798b4cd3530&amp;source=constructor"
                width="100%"
                height="720"
                frameborder="0"
              ></iframe>
            </div>
            <div class="col-md-6 pages-intro pages-intro-content">
              <h4>КЛИЕНТСКИЕ ОТДЕЛЫ:</h4>
              <span>г. Ташкент, ул. Абдулла Каххора, 2а</span>
              <a href="tel:+998951778930"
                ><i class="fa fa-phone"></i>+998 95 177 89 30</a
              >
              <span>г. Самарканд, ул. Гагарина, 123</span>
              <a href="tel:+998933532008"
                ><i class="fa fa-phone"></i>+998 93 353 20 08</a
              >

              <h4>ТЕХНИЧЕСКАЯ ПОДДЕРЖКА:</h4>
              <div>
                <a href="tel:+998909258930"
                  ><i class="fa fa-phone"></i>+998 90 925 89 30
                </a>
                <a class="ml-2 tlgm" href="https://t.me/RegosSupport"
                  ><i class="fa fa-telegram"></i
                ></a>
              </div>

              <div>
                <a href="tel:+998998118930"
                  ><i class="fa fa-phone"></i>+998 99 811 89 30</a
                >
                <a class="ml-2 tlgm" href="https://t.me/RegosSupport2"
                  ><i class="fa fa-telegram"></i
                ></a>
              </div>

              <div>
                <a href="tel:+998996078930"
                  ><i class="fa fa-phone"></i>+998 99 607 89 30</a
                ><a class="ml-2 tlgm" href="https://t.me/RegosSupport3"
                  ><i class="fa fa-telegram"></i
                ></a>
              </div>

              <div class="icons">
                <a href="https://t.me/RegosSoftware"
                  ><i class="fa fa-telegram"></i
                ></a>
                <a href="https://facebook.com/RegosSoftware"
                  ><i class="fa fa-facebook"></i
                ></a>
                <a href="https://instagram.com/regossoftware"
                  ><i class="fa fa-instagram"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <Footer FooterStyle="footer-style-2" />
  </div>
</template>
<script>
import Navbar from "../components/Navbar";
import Footer from "../components/Footer";
import loader from "../components/loader";

export default {
  name: "app",
  data() {
    return {
      loader: true,
    };
  },
  components: {
    Navbar,
    Footer,
    loader,
  },
  methods: {
    loading() {
      this.loader = false;
      document.getElementById("iframe_onload").style.opacity = "1";
    },
  },

  metaInfo() {
    return {
      title: "Контакты - REGOS - Автоматизация оптовых и розничных продаж",
      meta: [
        {
          name: "description",
          content:
            "Современные технологии для автоматизации магазинов, бутиков, торговых сетей",
        },
        {
          property: "og:title",
          content:
            "Контакты - REGOS - Автоматизация оптовых и розничных продаж",
        },
        { property: "og:site_name", content: "Контакты" },
        {
          property: "og:image",
          content: "<%= BASE_URL %>android-chrome-512x512.png",
        },
      ],
    };
  },
};
</script>

<style lang="scss">

.header {
  background-color: #2d3e50;
}
.flexCont {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  background-color: #fff;
}

.pages-intro {
  &-container {
    padding: 6px 0 18px;
  }
  iframe {
    -ms-touch-action: auto !important;
    touch-action: auto !important;
  }

  &-content {
    background-color: #2d3e500c;
    padding: 20px 5px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    h4 {
      margin-bottom: 20px;
      color: #2d3e50;
    }
    span {
      color: #000;
      font-size: 18px;
      margin-bottom: 10px;
    }
    a {
      display: inline-block;
      color: #e2ac00;
      margin-bottom: 20px;
      font-size: 21px;
      i {
        margin-right: 6px;
      }

      &:hover .fa-telegram {
        color: #0088cc;
      }
      &:hover .fa-facebook {
        color: #3b5998;
      }
      &:hover .fa-instagram {
        color: #8134af;
      }
    }
    .icons i {
      font-size: 36px;
      margin-right: 12px;
      transition: 0.1s;
      color: #2d3e50;
    }
  }
  .header {
    background-color: #173d61;
  }
}

@media (max-width: 576px) {
  .pages-intro-container {
    iframe {
      height: 300px;
    }
    span {
      font-size: 12px !important;
    }
    h4 {
      font-size: 16px !important;
    }
    a {
      font-size: 18px !important;
    }
  }
}
</style>

