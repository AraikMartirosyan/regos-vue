<template>
  <section
    class="feature-style-2 bg-cover section-padding2 section"
    id="feature"
    :style="bgImg"
  >
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title title-style-2">
            <h2 class="title">Комплекс программного обеспечения REGOS</h2>
            <p class="paragraph">
              Позволяет расширить базовый функционал REGOS: ONLINE
              <br />
              и пользоваться дополнительными возмоностями
            </p>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-8">
          <div class="feture-thumb">
            <img src="../assets/img/feature.png" alt="feature thumb" />
          </div>
        </div>
        <div class="col-lg-4">
          <div class="feature-wrapper">
            <div
              v-for="sinFeature in sinFeatures"
              :key="sinFeature.id"
              class="sin-feature fix"
            >
              <div class="icon">
                <i :class="sinFeature.icon"></i>
              </div>
              <div class="content">
                <h6 class="feature-title">{{ sinFeature.title }}</h6>
                <p>{{ sinFeature.desc }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "FeatureTwo",
  data() {
    return {
      bgImg: {
        backgroundImage: `url(${require("../assets/img/feature-bg.jpg")})`,
      },
      sinFeatures: [
        {
          title: "API интерфейс",
          desc:
            "Подключайте сторонние системы для полной автоматизации вашего бизнеса",
          icon: "fa fa-cogs",
        },
        {
          title: "Автоматическая синхронизация",
          desc:
            "REGOS: POS умеет работать без наличия подключения к сети Интернет",
          icon: "fa fa-undo",
        },
        {
          title: "Виртуальная касса",
          desc:
            " Интеграция с виртуальной кассой REGOS: VCR. Соответствие ПКМ 943",
          icon: "fa fa-arrows-alt",
        },

        {
          title: "Системы лояльности",
          desc: "Бонусные и скидочные системы, акции и карты покупателя.",
          icon: "fa fa-gift",
        },

        {
          title: "Управление заказами",
          desc:
            "Возможность принимать заказы через Telegram-бот и обрабатывать их на кассе",
          icon: "fa fa-calendar-check-o",
        },
      ],
    };
  },
};
</script>

<style lang='scss'>
@import "../assets/scss/variables.scss";
@import "../assets/scss/components/feature.scss";
</style>
