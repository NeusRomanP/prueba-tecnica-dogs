<template>
  <q-item
    clickable
    tag="a"
    :href="'./'"
    class="flex-column"
  >
    <picture>
      <img :src="`${imgsUrl}/${dog.img}`" :alt="dog.breed">
    </picture>
    <div>
      {{ dog.breed }} - {{ dog.size }} - {{ dog.color }}
    </div>
  </q-item>
</template>
<script setup>
import { imgsUrl } from 'src/config'
const { dog } = defineProps({
  dog: Object
})
</script>
<style scoped>
picture{
  width: 90%;
  aspect-ratio: 1;
  margin: auto;
}
img{
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.flex-column{
  display: flex;
  flex-direction: column;
}
</style>
