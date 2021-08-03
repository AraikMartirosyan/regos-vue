<template>
  <section class="best-app-area section-padding2 pb-0 fix" :style="bgImg">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6">
          <div class="bestapp-content-inner bestappTwo">
            <div class="section-title title-style-2 shape">
              <h2 class="title text-white">Regos: Online</h2>
              <p>Веб-версия программного обеспечения REGOS</p>
            </div>
            <div class="bestapp-content-text">
              <p>
                REGOS: ONLINE сочетает в себе функции программ REGOS: STORE MANAGEMENT и
                REGOS: POS и позволяет вести список номенклатуры совершать закупки,
                продажи и возвраты в режиме онлайн с любого устройства с помощью
                браузера.
              </p>
              <p>Бесплатная регистрация и тестовый период на один месяц. Попробуйте прямо сейчас</p>
              <a href="https://sb.regos.uz/register" class="read-more active"
                > Регистрация</a>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="bestapp-thumb">
            <img src="../assets/img/bestapp.png" alt="bestapp thumb" />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "Bestapp",
  data() {
    return {
      bgImg: {
        backgroundImage: `url(${require("../assets/img/bestapp-bg.jpg")})`,
      },
    };
  },
};
</script>

<style lang='scss'>
@import "../assets/scss/variables.scss";
@import "../assets/scss/components/best-app.scss";
</style>
