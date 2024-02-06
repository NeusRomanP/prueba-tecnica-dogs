<template>
  <q-page class="flex flex-center">
    <form @submit.prevent="submitForm">
      <q-uploader
        :url="`${backendUrl}/store-dog`"
        label="Image"
        v-model="image"
        :use-chips="true"
        :clearable="true"
        name="image"
        accept="image/*"
        id="image"
        ref="uploaderRef"
        @uploaded="handleUpload"
        @failed="handleFailedUpload"
        @added="handleFileAdded"
      />
      <q-input filled v-model="breed" label="Breed" name="breed" id="breed"></q-input>
      <q-select filled v-model="size" :options="options" label="size" name="size" id="size"></q-select>
      <q-input filled v-model="color" label="Color" name="color" id="color"></q-input>

      <q-btn label="Submit" type="submit" color="primary"/>
    </form>
  </q-page>
</template>

<script setup>
import { ref } from 'vue'
import { backendUrl } from '../config'

const options = [
  'Small',
  'Medium',
  'Big'
]

const breed = ref(null)
const size = ref(null)
const color = ref(null)
const image = ref(null)

const uploaderRef = ref(null)

const handleFileAdded = (file) => {
  image.value = file
}

const handleUpload = (files) => {
  console.log('Files uploaded successfully:', files)
}

const handleFailedUpload = (err) => {
  console.error('Error uploading files:', err)
}

const submitForm = async () => {
  const formData = new FormData()
  formData.append('breed', breed.value)
  formData.append('size', size.value)
  formData.append('color', color.value)
  if (image.value && image.value.length > 0) {
    formData.append('image', image.value[0])
  }

  try {
    const response = await fetch(`${backendUrl}/store-dog`, {
      method: 'POST',
      body: formData
    })
    if (!response.ok) {
      throw new Error('Error')
    } else {
      breed.value = null
      size.value = null
      color.value = null
      if (uploaderRef.value) {
        uploaderRef.value.reset()
      }
      image.value = null
    }
  } catch (error) {
    console.error('Error:', error.message)
  }
}
</script>
