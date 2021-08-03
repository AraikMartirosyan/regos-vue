<template>
  <section class="slider-section hero-style-2 section" id="home" :style="bgImg">
    <div class="hero-slider-item">
      <div class="container">
        <h1 class="slider-title">Профессиональное решение</h1>
        <p class="slider-desc">
          Современные технологии для автоматизации магазинов, бутиков, торговых
          сетей
        </p>

        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 order-2 order-md-1">
            <div class="slider-content slider-content__style-2">
              <div class="checklist">
                <div class="checklist__item" v-for="(checklistItem, checklistIndex) in checklist" :key="checklistIndex">
                  <img
                    :src="iconCheck"
                    :alt="checklistItem.text"
                  />
                  <p>
                    {{checklistItem.text}}
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 order-1 order-md-2">
            <div class="slider-banner-thumb slide-animate">
              <img src="../assets/img/clipart.png" alt="slider thumb" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "HeroBanner",
  data() {
    return {
      bgImg: {
        backgroundImage: `url(${require("../assets/img/home2-bg.jpg")})`,
      },
      iconCheck:
        "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAEIklEQVRoge2ZX2hbVRzHv7+b3NZaBSl6m5TVoSgI1amUJPvzooNadHVJGhcdVqQwnD6IvvgkyEDBJ5H5FmbZ2JTR2DQpbmMq6oTpzG67ybCi6MNGW3uTwtbpWDuTe38+WOXk5CZtkpumaj9v93vP7/x+X85Jzu9wgXXW+X9DpV5Mxrua2tTWFwgYAHA/gFYnEnrCZ0vmrAa3nTg3tq0jb+WOEfCwk8nqgSILk/Gupn9L8YCNgaVts2aK51i3yvuK6/yboi20tOdF4bjb5dp7+5NnZupQX1k4vstlqBePkhZY4C9bBunRU3l5jJ2zLvEhb9KLDSmeQVn10hCBIgAPZOavj/x84p5meZydgVvEhw2R9HTdqixDJuXfz8DzghS8dbFtvzyu5N5qJEbK/xaAlyV5ymL32/LYNWfASAZeAeN1Sc6aitXTEfnmkjze9hxoFLOpwCCY35XkeQXc6wmO/2QXs2ZWIDPqe5aY30dhd/AbW/yYFta/KxW3JgwYY5t3MtFBFNazwMw7vRFdLxfbcAPGqH872BoGoApyji3s8vbrXy0X31ADRmpzAIQxMG4SZBPEz3kjZ4+vZI6GGTBSWx4AWydQeO4wmF/yhPThlc7TEAPZkcC9gPkpgDZRJ/Brnn79QCVzVW0gk/KHjZTv6Urjfk1s3Wi5+HMwPKJO4Dfaw/o7lc5XlYHZhH8HM46C6cNM0jewfMRfGKNbNcVlngTQWfCC6L32sP5mNbVUfJDNJvw7SEECQDMAMOhQJulDe1j/oFzcleRDty0if5IY94k6gQ5pwfSrpeKMpJ/FZ/lGV/kKuKgFgEtUlkyUXAnjk02tN6i56JLE4ISWu3MPEbhU7HJUbMAbSo8w0W4AYm9e0sRUfEsLrjcfA/M26dXHnqy1m6IfmZXWIFLVb2ClJjjWraqqGQfoEWmKLxbmb47S3olcNflFqv4XWs4E74OSaVcOA+iTQtMuRQ3dNXhqsdrcIjWdA95QegTEAyg2cTDzoP8zMD1TEMC4cENtevyO4Ne/15JXpOaDzBPSh21Wwg1guzT0FyXPvRv7Tl+pNaeIIydxie30DwRMM5QeLaobTuQTcayVKGNizjTNHm/424tO5RJxtBeyMXFVUazejqcmfnQyj4jjzZxg4qrC1KcFx887nUOkLt2oN5QeyeVcd2v96dP1mF+kbu10Z/TM5XrNLdLwK2WtrBtoNHYGCo756URgwyrVUsRMytcpSUUtiJ2BH8QHt8KxRpiYSfk63azEJPl7eVzRjYyZjhBxQJCecCs8ZST9TtdYHgZYuucQ47A8rGgFLuevHSDwuTqWVi26NmcOyWKRga7o5B+KZfURMLE6da2IcZdlBu0uQCU/eXKsW81qyh4GDQDYBOnDxypwDcAFYhzR5swhJ25v66zzX+RPEjp2t7MgfHwAAAAASUVORK5CYII=",
      checklist: [
        {
          text:
            "Помощь в  подборе подходящего программного обеспечения и оборудования",
        },
        { text: "Быстрое и качественное внедрение и обучение персонала" },
        { text: "Техническая поддержка и сопровождение программных продуктов" },
      ],
    };
  },
};
</script>