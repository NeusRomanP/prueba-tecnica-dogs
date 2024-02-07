<template>
  <q-layout view="lHh Lpr lFf">
    <q-header>
      <q-toolbar class="flex-row space-between inner-header">
        <q-toolbar-title>
          <img src="https://www.europelanguagejobs.com/statics/images/logo-elj-white.svg" alt="elj logo" class="logo">
        </q-toolbar-title>

        <div class="navbar">
          <nav class="hide-on-mid">
            <ul>
              <li>Jobs</li>
              <li>Candidates</li>
              <li>For Employers</li>
              <li>Career Advance</li>
              <li>Log in / Sign up</li>
            </ul>
          </nav>
          <q-btn
            class="hide-on-large"
            flat
            dense
            round
            icon="menu"
            aria-label="Menu"
            @click="toggleLeftDrawer"
          >
            <q-menu fit anchor="bottom left" self="top left">
              <q-item clickable>
                <q-item-section>Jobs</q-item-section>
              </q-item>
              <q-item clickable>
                <q-item-section>Candidates</q-item-section>
              </q-item>
              <q-item clickable>
                <q-item-section>For Employers</q-item-section>
              </q-item>
              <q-item clickable>
                <q-item-section>Career Advice</q-item-section>
              </q-item>
              <q-item clickable>
                <q-item-section>Log in/Sign up</q-item-section>
              </q-item>
            </q-menu>
          </q-btn>
        </div>
      </q-toolbar>
    </q-header>

    <q-page-container style="padding: 0px;">
      <router-view />
    </q-page-container>
    <EljFooter />
  </q-layout>
</template>

<script setup>
import { ref } from 'vue'
import EljFooter from 'src/components/EljFooter.vue'

const leftDrawerOpen = ref(false)

function toggleLeftDrawer () {
  leftDrawerOpen.value = !leftDrawerOpen.value
}

</script>
<style scoped>

.q-header{
  background-color: #0c3866;
  padding-inline: 16px;
}

.inner-header{
  max-width: 1250px;
  margin: auto;
}

.navbar{
  display: flex;
  flex-direction: row;
}

.q-toolbar__title{
  max-height: 50px;
  overflow: hidden;
}

nav ul {
  list-style: none;
  margin: 0;
  display: flex;
  flex-direction: row;
  gap: 8px;
}

nav ul li {
  padding-left: 0;
  padding: 8px;
  border-radius: 8px;
  cursor: pointer;
}

nav ul li:hover {
  background-color: #FFF2;
}

.main-contianer {
  padding: 0;
}

.flex-row {
  display: flex;
  flex-direction: row;
}

.space-between {
  display: flex;
  justify-content: space-between;
}

.logo{
  width: 60px;
  height: auto;
}

@media(max-width: 779px){
  .hide-on-mid {
    display: none;
  }
}

@media(min-width: 780px){
  .hide-on-large {
    display: none;
  }
}
</style>
