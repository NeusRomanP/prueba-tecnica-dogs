<template>
  <q-page class="main">
    <section class="header">
      <div class="flex-row space-between main-content__header">
        <div>
          <h1>
            Find the perfect employee in our database of more than 25,000 new
            multilingual candidates each month.
          </h1>
          <q-btn color="white" text-color="black" class="post-job__button">Post a job</q-btn>
        </div>
        <div class="header-right">
          <div class="flex-row vertical-center header-right__item">
            <q-icon class="header-icon users" name="fas fa-users"/>
            <span class="flex-column">
              <span class="first">+ 2,500</span>
              <span>companies posting in more than 48 countries</span>
            </span>
          </div>
          <div class="flex-row vertical-center header-right__item">
            <q-icon class="header-icon" name="fas fa-clock" />
            <span class="flex-column">
              <span class="first">Post with ease</span>
              <span>Publish a job advert in just 2 minutes</span>
            </span>
          </div>
          <div class="flex-row vertical-center header-right__item">
            <q-icon class="header-icon" name="fas fa-file" />
            <span class="flex-column">
              <span class="first">+ 50,000</span>
              <span>candidate applications per month</span>
            </span>
          </div>
        </div>
      </div>
      <div>
        <q-carousel
          animated
          v-model="slide"
          infinite
          :autoplay="autoplay"
          arrows
          transition-prev="slide-right"
          transition-next="slide-left"
          @mouseenter="autoplay = false"
          @mouseleave="autoplay = true"
          class="carousel"
        >
          <q-carousel-slide :name="1" class="vertical-center">
            <div class="row justify-around full-width items-center no-wrap vertical-center">
              <img class="col q-pa-sm text-center slide-logo" src="https://static.europelanguagejobs.com/contents/banners/airproducts-logo-612.svg"/>
              <img class="col q-pa-sm text-center slide-logo" src="https://static.europelanguagejobs.com/contents/banners/top-companies-posting-foundever-portugal-610-9042.svg"/>
              <img class="col q-pa-sm text-center slide-logo" src="https://static.europelanguagejobs.com/contents/banners/logo-agoda-607-4993.svg"/>
            </div>
          </q-carousel-slide>
          <q-carousel-slide :name="2" class="vertical-center">
            <div class="row justify-around full-width items-center no-wrap vertical-center">
              <img class="col text-center slide-logo" src="https://static.europelanguagejobs.com/contents/banners/logo-top-company-apple-609-1600.svg"/>
              <img class="col text-center slide-logo" src="https://static.europelanguagejobs.com/contents/banners/logo-ttec-611-874.svg"/>
            </div>
          </q-carousel-slide>
        </q-carousel>
      </div>
    </section>
    <SecondSection />
    <FormSection />
    <PartnersSection />
  </q-page>
</template>
<script setup>
import { ref } from 'vue'
import SecondSection from 'src/components/SecondSection.vue'
import FormSection from 'src/components/FormSection.vue'
import PartnersSection from 'src/components/PartnersSection.vue'

const slide = ref(1)
const autoplay = ref(true)

</script>
<style scoped>
h1{
  font-size: 1.25rem;
  text-wrap: pretty;
  font-weight: 400;
  line-height: 1;
  letter-spacing: 1.5px;
}

.main{
  padding-top: 50px;
}

.header{
  width: 100%;
  padding-top: 65px;
  background: url("src/assets/companies.png");
  background-size: cover;
  background-position: 50%;
  color: white;
}

.header-right{
  display: flex;
  flex-direction: column;
  gap: 40px;
}

.header-right__item{
  gap: 32px;
}

.header-right__item .first{
  font-size: 1.6rem;
  font-weight: bold;
}

h1 {
  margin: 0;
  margin-top: 20px;
}

.main-content__header{
  display: flex;
  flex-wrap: wrap;
  max-width: 1250px;
  padding-inline: 16px;
  padding-bottom: 80px;
  width: 90%;
  margin: auto;
  gap: 30px;
}

.main-content__header > div {
  width: 41.6667%;
}

.post-job__button{
  font-size: 1rem;
  font-weight: bold;
  padding: 10px 70px;
  margin-top: 40px;
  border-radius: 50px;
}

.carousel{
  background: transparent;
}

.q-carousel{
  margin-top: 30px;
  height: 200px;
}

.slide-logo{
  display: block;
  max-height: 80px;
}

.flex-row{
  display: flex;
  flex-direction: row;
}

.flex-column{
  display: flex;
  flex-direction: column;
}

.space-between{
  display: flex;
  justify-content: space-between;
}

.vertical-center{
  display: flex;
  align-items: center;
}

.header-icon{
  font-size: 3rem;
}

@media (max-width: 767px){
  .main-content__header > div {
    width: 100%;
  }
}
</style>
