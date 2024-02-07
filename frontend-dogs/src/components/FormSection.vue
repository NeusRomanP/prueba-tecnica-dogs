<template>
  <section>
    <h2><strong>Tell us about</strong> your needs</h2>
    <q-form autocomplete="off">
      <div class="row flex-center flex-start">
        <div class="col-md-6 col-xs-12 form-col inputs">
          <div class="input-item">
            <q-icon class="header-icon users" name="fas fa-user"/>
            <q-input
              dense
              v-model="name"
              label="Your name"
              lazy-rules
              no-error-icon
              :rules="[ val => val && val.length > 0 || 'Please fill your name']"
            ></q-input>
          </div>
          <div class="input-item">
            <q-icon class="header-icon users" name="fas fa-building"/>
            <q-input
              dense
              v-model="company"
              label="Company name"
              lazy-rules
              no-error-icon
              :rules="[ val => val && val.length > 0 || 'Please fill the company name']"
            ></q-input>
          </div>
          <div class="input-item">
            <q-icon class="header-icon users" name="fas fa-envelope"/>
            <q-input
              dense
              type="email"
              v-model="email"
              label="Your email"
              lazy-rules
              no-error-icon
              :rules="[ val => val && val.length > 0 && isEmailValid(val) || 'We need a valid email']"
            ></q-input>
          </div>
        </div>
        <div class="col-md-6 col-xs-12 form-col">
          <q-input
            dense
            v-model="message"
            type="textarea"
            label="Your message"
            lazy-rules
            no-error-icon
            no-resize
            :rules="[ val => val && val.length > 0 || '']"
          ></q-input>
          <q-checkbox v-model="isChecked"></q-checkbox>
          <span>
            I accept the Legal
            <a href="https://www.europelanguagejobs.com/eulangjobs/legal-conditions" target="v_blank">Conditions</a>
          </span>
          <q-btn :class="enabled ? 'enabled-button': 'disabled-button'" class="post-job__button">Send Message</q-btn>
          <div>
            <a href="https://www.europelanguagejobs.com/companies/registry">or post a job</a>
          </div>
        </div>
      </div>
    </q-form>
  </section>
</template>
<script setup>
import { ref, watchEffect } from 'vue'

const name = ref('')
const company = ref('')
const email = ref('')
const message = ref('')
const isChecked = ref(false)
const enabled = ref(false)

function isEmailValid (email) {
  const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
  return regex.test(email)
}

watchEffect(() => {
  if (name.value?.length > 0 && company.value?.length > 0 && isEmailValid(email.value) && message.value?.length > 0 && isChecked.value) {
    enabled.value = true
  } else {
    enabled.value = false
  }
})
</script>
<style scoped>

h2{
  font-size: 22px;
  text-align: center;
  padding: 30px;
}

.q-form{
  width: 50%;
  background-color: #f4f4f4;
  margin: auto;
  padding: 30px;
  margin-bottom: 40px;
}

.flex-center{
  display: flex;
  justify-content: center;
}

.input-item{
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 16px;
}

.input-item .q-icon{
  font-size: 28px;
  color: #979797;
}

.inputs{
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.form-col{
  padding: 30px;
}

.flex-start{
  align-items: flex-start;
}

.q-btn{
  margin-top: 28px;
  border-radius: 30px;
}

.disabled-button{
  background-color: #517090;
  color: white;
  cursor: not-allowed;
}

.enabled-button{
  background-color: #0c3866;
  color: white;
  cursor: pointer;
}
</style>
<style>
textarea {
  resize: none!important;
  padding-top: 20px;
}
</style>
