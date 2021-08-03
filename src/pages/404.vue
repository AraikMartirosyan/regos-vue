<template>
  <div class="error-not-found">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="error-inner text-center">
            <div class="e404">
              404
            </div>
            <h1 class="heading-h3">Страница не найдена.</h1>
            <div class="error-text">
              <p>
                К сожалению, такой страницы не существует.
              </p>
              <div class="error-button-group">
                <router-link class="btn-submit" to="/">
                  Вернуться на главную
                </router-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "NotFound",
};
</script>

<style lang="scss" scoped>
@import "../assets/scss/variables.scss";
@import "../assets/scss/components/404.scss";
</style>