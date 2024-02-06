<template>
  <q-page class="flex flex-center">
    <div v-if="dogs">
      <div class="row">
        <div v-for="dog in dogs" :key="dog.id" class="col-12 col-sm-6 col-md-4 col-lg-3">
          <DogComponent :dog="dog" />
        </div>
      </div>
      <div class="flex-row space-between">
        <span><span v-if="data?.prev_page_url" @click="prevPage">Previous page</span></span>
        <span><span v-if="data?.next_page_url" @click="nextPage">Next page</span></span>
      </div>
    </div>
    <div v-else>
      <p>No dogs available</p>
      <a href="./add-dog">Add dog</a>
    </div>
  </q-page>
</template>

<script setup>
import { ref, onMounted, watch } from 'vue'
import DogComponent from 'src/components/DogComponent.vue'
import { getDogs } from 'src/services/DogsService'
import { backendUrl } from 'src/config'

const dogs = ref([])
const data = ref(null)
const url = ref(`${backendUrl}/dogs`)

onMounted(async () => {
  data.value = await getDogs(url.value)
  dogs.value = await data.value.data
})

function prevPage () {
  url.value = data.value.prev_page_url
}

function nextPage () {
  url.value = data.value.next_page_url
}

watch(url, async (newUrl) => {
  data.value = await getDogs(newUrl)
  dogs.value = await data.value.data
})

</script>
<style scoped>
.flex-row{
  display: flex;
  flex-direction: row;
}

.space-between{
  display: flex;
  justify-content: space-between;
}
</style>
