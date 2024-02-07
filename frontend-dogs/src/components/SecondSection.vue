<template>
  <section>
    <h2>ELJ's <strong>hiring solutions</strong></h2>
    <div class="solutions">
      <div class="solution">
        <div class="img__container">
          <img src="https://www.europelanguagejobs.com/statics/images/job-posting.svg" alt="job posting">
        </div>
        <div class="text__solution">
          JOB POSTING
        </div>
      </div>
      <div class="solution">
        <div class="img__container">
          <img src="https://www.europelanguagejobs.com/statics/images/cv-search.svg" alt="cv search">
        </div>
        <div class="text__solution">
          CV SEARCH
        </div>
      </div>
      <div class="solution">
        <div class="img__container">
          <img src="https://www.europelanguagejobs.com/statics/images/exposure-features.svg" alt="website visibility">
        </div>
        <div class="text__solution">
          WEBSITE VISIBILITY
        </div>
      </div>
      <div class="solution">
        <div class="img__container">
          <img src="https://www.europelanguagejobs.com/statics/images/outreach-features.svg" alt="outreach features">
        </div>
        <div class="text__solution">
          OUTREACH FEATURES
        </div>
      </div>
    </div>
    <div class="find-more">
      <span>Find more about our basic and personalized hiring solutions</span>
      <q-btn color="white" text-color="black" class="post-job__button">Learn more</q-btn>
    </div>
  </section>
</template>
<style scoped>
.find-more{
  background-color: #007cc0;
  padding: 40px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  gap: 16px;
  color: white;
}

.find-more span{
  font-size: 22px;
}

.q-btn{
  border-radius: 30px;
  font-size: 16px;
  padding-inline: 48px;
}

h2{
  font-size: 1.4rem;
  text-align: center;
}

.solutions{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 75px;
  padding-bottom: 40px;
}

.solution{
  width: 116px;
  display: flex;
  flex-direction: column;
  gap: 16px;
}

.text__solution{
  text-align: center;
  font-size: 18px;
  font-weight: bold;
}

.img__container{
  display: flex;
  justify-content: center;
}
</style>
