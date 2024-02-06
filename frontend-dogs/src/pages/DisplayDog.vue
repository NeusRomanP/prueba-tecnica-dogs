<template>
  <q-page class="dog-page flex flex-center">
    <div v-if="dog?.breed">
      <h1>{{ dog.breed }}</h1>
      <div>
        <picture>
          <img :src="`${imgsUrl}/${dog.img}`" :alt="dog.breed">
        </picture>
        <div class="flex-row space-between">
          <div>
            <div>
              <span>Breed: </span> {{ dog.breed }}
            </div>
            <div>
              <span>Size: </span> {{ dog.size }}
            </div>
            <div>
              <span>Color: </span> {{ dog.color }}
            </div>
          </div>
          <div>
            <q-btn style="background: #AA0000; color: white" @click="deleteDog">
              Delete
            </q-btn>
          </div>
        </div>
      </div>
    </div>
    <div v-else>
      <p>This dog doesn't exist</p>
    </div>
  </q-page>
</template>
<script setup>
import { ref, onMounted } from 'vue'
import { useRouter } from 'vue-router'
import { getDog, deleteDogById } from 'src/services/DogsService'
import { imgsUrl } from 'src/config'

const router = useRouter()

const id = router.currentRoute.value.params.id

const dog = ref(null)

onMounted(async () => {
  dog.value = await getDog(id)
})

async function deleteDog () {
  const res = await deleteDogById(id)

  if (res) {
    router.push('/')
  }
}
</script>
<style scoped>
h1{
  font-size: 2rem;
}

.dog-page{
  max-width: 1000px;
  width: 90%;
  margin: auto;
}

picture{
  width: 90%;
  aspect-ratio: 1;
  margin: auto;
}

img{
  height: 100%;
  width: 100%;
  object-fit: cover;
}

.flex-row{
  display: flex;
  flex-direction: row;
}

.space-between{
  display: flex;
  justify-content: space-between;
}
</style>
