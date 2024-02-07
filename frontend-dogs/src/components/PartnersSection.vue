<template>
  <section class="partners">
    <h2><strong>ATS Partners & API Solutions</strong></h2>
    <div>
      <q-carousel animated v-model="slide" infinite :autoplay="autoplay" arrows transition-prev="slide-right"
        transition-next="slide-left" @mouseenter="autoplay = false" @mouseleave="autoplay = true" class="carousel">
        <q-carousel-slide :name="1" class="vertical-center carousel-slide">
          <div class="row justify-around full-width items-center no-wrap vertical-center">
            <img class="col q-pa-sm text-center slide-logo"
              src="https://www.europelanguagejobs.com/statics/images/broadbean.svg" />
            <img class="col q-pa-sm text-center slide-logo"
              src="https://www.europelanguagejobs.com/statics/images/hrlink.svg" />
            <img class="col q-pa-sm text-center slide-logo"
              src="https://www.europelanguagejobs.com/statics/images/logicmelon.svg" />
          </div>
        </q-carousel-slide>
        <q-carousel-slide :name="2" class="vertical-center carousel-slide">
          <div class="row justify-around full-width items-center no-wrap vertical-center second-carousel-slide">
            <img class="col text-center slide-logo"
              src="https://www.europelanguagejobs.com/statics/images/equest.png" />
            <img class="col text-center slide-logo"
              src="https://www.europelanguagejobs.com/statics/images/recruitly.png" />
            <img class="col text-center slide-logo"
              src="https://www.europelanguagejobs.com/statics/images/lever.png" />
          </div>
        </q-carousel-slide>
      </q-carousel>
    </div>
    <div class="text">
      Together, your hires, our goal!
    </div>
  </section>
</template>
<script setup>
import { ref } from 'vue'
const slide = ref(1)
const autoplay = ref(true)
</script>
<style scoped>
h2{
  font-size: 22px;
  text-align: center;
}

.q-carousel{
  margin-top: 30px;
  height: 200px;
}

.slide-logo{
  display: block;
  max-height: 70px;
  max-width: 200px;
}

.vertical-center{
  display: flex;
  align-items: center;
}

.carousel-slide{
  display: flex;
  justify-content: space-between;
}

.text{
  width: 100%;
  background-color: #007cc0;
  padding-block: 40px;
  font-size: 32px;
  text-align: center;
  color: white;
}
</style>

<style>
.partners .q-carousel__control button{
  background-color: #999fa6;
  color: black;
}
</style>
