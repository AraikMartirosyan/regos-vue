<template>
  <section class="section-padding">
    <div class="container text-center block-6">
      <h2>
        Хотите узнать больше? Оставьте ваши контакты и наши специалисты свяжутся
        с вами.
      </h2>
      <form method="POST" class="callForm">
        <input type="hidden" name="form_subject" value="Заказ звонка" />
        <input type="hidden" id="token" name="token" />
        <input type="text" placeholder="Имя" name="name" id="nInp" required />
        <input placeholder="Телефон" type="tel" name="tel" id="tInp" required />
        <button @click.prevent="recall()">Отправить заявку</button>
      </form>
      <div class="alert" id="alert"></div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {};
  },
  methods: {
    recall(event) {
      var name = document.querySelector("#nInp");
      var tel = document.querySelector("#tInp");
      var div = document.getElementById("alert");
      if (String(tel.value) != "" && String(name.value) != "") {
        let tk = "";
        grecaptcha.ready(function () {
          grecaptcha
            .execute("6LfrkusZAAAAAPpTcR-fVuoI4cduTxi6-sCt68OR", {
              action: "homepage",
            })
            .then(function (token) {
              tk = token;
              document.getElementById("token").value = token;

              const data = new URLSearchParams();
              for (const pair of new FormData(
                document.querySelector(".callForm")
              )) {
                data.append(pair[0], pair[1]);
              }
              fetch("send.php", {
                method: "post",
                body: data,
              })
                .then((response) => response.json())
                .then((result) => {
                  if (result["om_score"] >= 0.5) {
                    tel.value = "";
                    name.value = "";
                    div.textContent = "Заявка принята!";
                    div.style.visibility = "visible";
                    div.style.backgroundColor = "#40722c";
                    div.style.borderColor = "#40722c";
                  } else {
                    div.textContent = "Заявка отклонена!";
                    div.style.visibility = "visible";
                    div.style.color = "#fff";
                    div.style.backgroundColor = "#b84a4a";
                    div.style.borderColor = "#b84a4a";
                  }
                  setTimeout(() => {
                    div.style.visibility = "hidden";
                  }, 1300);
                });
            });
        });
      } else {
        tel.style.borderColor = "red";
        name.style.borderColor = "red";
        div.style.visibility = "visible";
        div.textContent = "Введите данные";
        div.style.backgroundColor = "#b84a4a";
        div.style.color = "#fff";
        div.style.borderColor = "#b84a4a";

        setTimeout(() => {
          div.style.visibility = "hidden";
          tel.style.borderColor = "#000";
          name.style.borderColor = "#000";
        }, 1300);
      }
    },
  },
};
</script>


<style lang="scss">
.alert {
  visibility: hidden;
  -webkit-transition: 0.2s;
  transition: 0.2s;
  z-index: 1000;
  position: fixed;
  top: 12%;
  left: 50%;
  -webkit-transform: translate(-50%);
  transform: translate(-50%);
  padding: 12px 14px;
  border-radius: 8px;
  color: #9ebf9f;
}
@import "../assets/scss/variables.scss";
@import "../assets/scss/components/block6.scss";
</style>