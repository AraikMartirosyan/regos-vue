<template>
  <div class="main-container flexCont">
    <Navbar NavbarStyle="NavbarStyle" />
    <section class="productBody">
      <div class="container prices">
        <h1 class="product-name">Цены</h1>
        <h3>Тарифные планы REGOS</h3>
        <table>
          <thead>
            <tr>
              <th>Наименование</th>
              <th>Допустимая нагрузка, RP*</th>
              <th>Стоимость (сум / уч. период)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="Наименование">Тариф 600</td>
              <td data-label="нагрузка, RP*">600</td>
              <td data-label="Стоимость, сум">212 000</td>
            </tr>
            <tr>
              <td data-label="Наименование">Тариф 800</td>
              <td data-label="нагрузка, RP*">800</td>
              <td data-label="Стоимость, сум">400 000</td>
            </tr>
            <tr>
              <td data-label="Наименование">Тариф 1200</td>
              <td data-label="нагрузка, RP*">1200</td>
              <td data-label="Стоимость, сум">420 000</td>
            </tr>
            <tr>
              <td data-label="Наименование">Тариф 1800</td>
              <td data-label="нагрузка, RP*">1800</td>
              <td data-label="Стоимость, сум">700 000</td>
            </tr>
            <tr>
              <td data-label="Наименование">Тариф 2500</td>
              <td data-label="нагрузка, RP*">2500</td>
              <td data-label="Стоимость, сум">1 200 000</td>
            </tr>
            <tr>
              <td data-label="Наименование">Тариф 4000</td>
              <td data-label="нагрузка, RP*">4000</td>
              <td data-label="Стоимость, сум">2 000 000</td>
            </tr>
            <tr>
              <td data-label="Наименование">Тариф 5000</td>
              <td data-label="нагрузка, RP*">5000</td>
              <td data-label="Стоимость, сум">2 800 000</td>
            </tr>
          </tbody>
        </table>
        <span class="italic"
          >*RP - “Regos Power” - единица измерения нагрузки производимых
          действий и операций Заказчика на систему Regos.
        </span>
        <h3 class="product-titleName">Виртуальная касса REGOS: VCR</h3>
        <table>
          <thead>
            <tr>
              <th>Наименование услуг</th>
              <th>Цена за ед., сум</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-label="Наименование услуги">
                Запись и установка виртуальной кассы
              </td>
              <td data-label="Цена за ед., сум">1 200 000</td>
            </tr>
            <tr>
              <td data-label="Наименование услуги">
                Абонентская плата за ежемесячное удаленное техническое
                обслуживание виртуальной кассы (ежемесячная)
              </td>
              <td data-label="Цена за ед., сум">50 000</td>
            </tr>
            <tr>
              <td data-label="Наименование услуги">
                Консультации по вопросам эксплуатации виртуальной кассы
                (почасовая)
              </td>
              <td data-label="Цена за ед., сум">150 000</td>
            </tr>
            <tr>
              <td data-label="Наименование услуги">
                Выезд специалиста для диагностики и настройки виртуальной кассы
                (почасовая)
              </td>
              <td data-label="Цена за ед., сум">120 000</td>
            </tr>
            <tr>
              <td data-label="Наименование услуги">
                Дистанционная диагностика и настройка (при наличии технической
                возможности) (почасовая)
              </td>
              <td data-label="Цена за ед., сум">80 000</td>
            </tr>
            <tr>
              <td data-label="Наименование услуги">
                Работы по замене и активации ПОФМ
              </td>
              <td data-label="Цена за ед., сум">150 000</td>
            </tr>
            <tr>
              <td data-label="Наименование услуги">
                Обязательное ежегодное техническое обслуживание виртуальной
                кассы
              </td>
              <td data-label="Цена за ед., сум">50 000</td>
            </tr>
          </tbody>
        </table>
        <h3 class="product-titleName">
          Дополнительные услуги по поддержке и сопровождению программных
          продуктов EasyTrade и REGOS
        </h3>
        <table>
          <thead>
            <tr>
              <th>Наименование услуг</th>
              <th>Цена</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="2">
                <strong>Программное обеспечение EasyTrade</strong>
              </td>
            </tr>
            <tr>
              <td data-label="Наименование услуги">
                Дополнительные технические консультации по программе
              </td>
              <td data-label="Цена">150 000 сум/час</td>
            </tr>
            <tr>
              <td data-label="Наименование услуги">Настройка программы</td>
              <td data-label="Цена">120 000 сум/час</td>
            </tr>
            <tr>
              <td data-label="Наименование услуги">
                Настройка POS оборудования
              </td>
              <td data-label="Цена">120 000 сум/час</td>
            </tr>
            <tr>
              <td data-label="Наименование услуги">
                <span style="display: inline-block"
                  >Восстановление базы данных <sup>1</sup></span
                >
              </td>
              <td data-label="Цена">180 000 сум/час</td>
            </tr>
            <tr>
              <td data-label="Наименование услуги">
                Перенос базы данных на другой компьютер
              </td>
              <td data-label="Цена">180 000 сум/час</td>
            </tr>
            <tr>
              <td data-label="Наименование услуги">
                <span style="display: inline-block">
                Удаленная техническая поддержка<sup>2</sup></span>
              </td>
              <td data-label="Цена">280 000 сум/час</td>
            </tr>
            <tr>
              <td colspan="2">
                <strong>Программное обеспечение REGOS</strong>
              </td>
            </tr>
            <tr>
              <td data-label="Наименование услуги">
                Дополнительные технические консультации по программе
              </td>
              <td data-label="Цена">180 000 сум/час</td>
            </tr>

            <tr>
              <td data-label="Наименование услуги">Настройка программы</td>
              <td data-label="Цена">150 000 сум/час</td>
            </tr>
            <tr>
              <td data-label="Наименование услуги">
                Настройка POS оборудования
              </td>
              <td data-label="Цена">150 000 сум/час</td>
            </tr>
            <tr>
              <td colspan="2">
                <strong>Дополнительные услуги</strong>
              </td>
            </tr>
            <tr>
              <td data-label="Наименование услуги">
                <span style="display: inline-block"
                  >Переустановка и настройка OS Windows <sup>3</sup></span
                >
              </td>
              <td data-label="Цена">120 000 сум/час</td>
            </tr>

            <tr>
              <td data-label="Наименование услуги">
                <span style="display: inline-block"
                  >Установка и настройка прочего программного обеспечения
                  <sup>3</sup></span
                >
              </td>
              <td data-label="Цена">120 000 сум/час</td>
            </tr>
            <tr>
              <td data-label="Наименование услуги">
                <span style="display: inline-block"
                  >Настройка сетевого и периферийного оборудования
                  <sup>3</sup></span
                >
              </td>
              <td data-label="Цена">120 000 сум/час</td>
            </tr>
          </tbody>
        </table>
        <span class="italic mt-4"
          ><sup>1</sup> Восстановление базы данных производится только при
          наличии технической возможности.</span
        >
        <span class="italic"
          ><sup>2</sup> Удаленная техническая поддержка осуществляется с
          Понедельника по Пятницу с 10:00 до 18:00 ТШК. Максимальное время
          телефонного разговора 20 минут.</span
        >
        <span class="italic"
          ><sup>3</sup> Услуга предоставляется при наличии технической
          возможности.</span
        >
        <span class="mt-4"
          >Выезд технического специалиста осуществляется только по г. Ташкенту в
          течение 3 (трех) рабочих дней после поступления заявки.
        </span>

        <span class="mt-3">
          <strong>Срочный выезд</strong> технического специалиста в
          <strong>рабочее время</strong> осуществляется только по г. Ташкенту в
          течение 3 (трех) часов после поступления заявки. Стоимость
          рассчитывается с повышающим коэффициентом 1,2.
        </span>
        <span class="mt-3 mb-4">
          <strong>Срочный выезд</strong> технического специалиста в
          <strong>нерабочее время</strong> осуществляется только по г. Ташкенту
          в течение 3 (трех) часов после поступления заявки. Стоимость
          рассчитывается с повышающим коэффициентом 1,5.
        </span>
      </div>
    </section>
    <Footer FooterStyle="footer-style-2" />
  </div>
</template>
<script>
import Navbar from "../components/Navbar";
import Footer from "../components/Footer";

export default {
  name: "app",
  components: {
    Navbar,
    Footer,
  },
  metaInfo() {
    return {
      title: "Цены - REGOS - Автоматизация оптовых и розничных продаж",
      meta: [
        {
          name: "description",
          content:
            "Современные технологии для автоматизации магазинов, бутиков, торговых сетей",
        },
        {
          property: "og:title",
          content: "Цены - REGOS - Автоматизация оптовых и розничных продаж",
        },
        { property: "og:site_name", content: "Цены" },
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

.prices {
  h3 {
    color: #2d3e50;
  }
  span {
    display: block;
    margin-bottom: 4px;
    font-size: 16px;
    color: #2d3e50;
  }
  span.italic {
    font-style: italic;
  }
  table {
    text-align: center;
    margin: 20px 0;
    width: 100%;
    color: #2d3e50 !important;
    word-wrap: break-word;
    background-color: #fff;
    border-radius: 6px;
  }
  td,
  th {
    padding: 10px;
    border: 1px solid #2d3e502f;
  }

  table tr {
    text-align: center;
  }

  table th,
  table td {
    padding: 12px;
    width: 33.333333%;
  }
  table th {
    text-transform: uppercase;
    font-size: 16px;
    letter-spacing: 1px;
  }

  @media screen and (max-width: 767px) {
    table {
      border: 0;
      font-size: 12px !important;
      span {
        font-size: 12px !important;
      }
    }
    table thead {
      display: none;
    }
    table tr {
      text-align: right !important;
      margin-bottom: 10px;
      display: block;
      border-bottom: 2px solid #2d3e50;
      &:last-child {
        border-bottom: none;
      }
    }
    table td {
      justify-content: space-between;
      font-size: 12px;
      display: flex;
      text-align: right !important;
      border: 0;
      width: 100%;
    }
    table td:last-child {
      border-bottom: 0;
    }
    table td:before {
      content: attr(data-label);
      text-align: left;
      text-transform: uppercase;
      font-weight: bold;
      display: block;
      padding: 0 4px;
    }
  }
}
</style>