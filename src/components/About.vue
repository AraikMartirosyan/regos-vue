<template>
    <section class="about-area section-padding section" id="about" :class="AboutStyle">
        <div class="container">
            <div class="row mtn-30">
                <!-- single item start -->
                <div v-for="(about, abouts) in abouts" :key="abouts" class="col-lg-3 col-md-6">
                    <div class="about-item">
                        <div class="about-icon">
                            <i :class="about.icon"></i>
                        </div>
                        <div class="about-content">
                            <h6>{{ about.title }}</h6>
                        </div>
                    </div>
                </div>
                <!-- single item end -->
            </div>
        </div>
    </section>
</template>

<script>

export default {
    name: 'About',
    props: ["AboutStyle"],
    data (){
        return {
             abouts:[
                { 
                    title: "Более 7 лет работы с успешными IT проектами", 
                    icon: "fa fa-rocket"
                },
                {
                    title: "Надежность и безопасность в обращении с данными", 
                    icon: "fa fa-shield"
                },
                {
                    title: "2000+ пользователей у наших сервисов", 
                    icon: "fa fa-users"
                },
                {
                    title: "100% клиентов облегчили себе учет", 
                    icon: "fa fa-thumbs-up"
                }
            ]
        }
    }
}
</script>

<style lang="scss">
    @import '../assets/scss/variables.scss';
    @import '../assets/scss/components/about.scss';
</style>
