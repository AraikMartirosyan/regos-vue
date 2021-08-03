<template>
  <section
    class="testimonial-area testimonial-style-2 section-padding fix section"
    id="review"
    :style="bgImg"
  >
    <div class="container">
      <div class="row">
        <div class="col-12 borderS">
          <carousel
            class="testimonial-active owl-dot-style"
            :items="1"
            :nav ="false"
            :smartSpeed="1000"
          >
            <!-- testimonial item start -->
            <div v-for="(client, clients) in clients" :key="clients">
              <div>
                <img
                  :src="client.clientThumb"
                  style="padding: 0 10px"
                  alt="client thumb"
                />
              </div>
            </div>
            <!-- testimonial item end -->
          </carousel>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import carousel from "vue-owl-carousel";
export default {
  name: "screenShots",
  components: {
    carousel,
  },
  data() {
    return {
      bgImg: {
        backgroundImage: `url(${require("../assets/img/bg/clients2-bg.jpg")})`,
      },
      clients: [
        {
          clientThumb: require("../assets/img/slides/1.png"),
        },
        {
          clientThumb: require("../assets/img/slides/2.png"),
        },
        {
          clientThumb: require("../assets/img/slides/3.png"),
        },
        {
          clientThumb: require("../assets/img/slides/4.png"),
        },
        {
          clientThumb: require("../assets/img/slides/5.png"),
        },
        {
          clientThumb: require("../assets/img/slides/6.png"),
        },
        {
          clientThumb: require("../assets/img/slides/7.png"),
        },
      ],
    };
  },
};
</script>

<style lang='scss'>
@import "../assets/scss/variables.scss";
.borderS {
  border: 2px solid #74747448;
  background-color: #d0d0d012;
  padding: 14px;
}
section {
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
