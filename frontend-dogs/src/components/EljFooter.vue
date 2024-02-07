<template>
  <footer>
    <div class="row footer">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="logo__container">
          <img src="https://www.europelanguagejobs.com/statics/images/logo-elj-no-bg.png" alt="elj logo" class="">
        </div>
        <p>
          <b class="text-blue">
            Europe Language Jobs - the job
            <br>
            board for expat jobs abroad
          </b>
        </p>
        <p class="text-black">
          We help expats find jobs in Europe using their
          native language and gain international experience
          by working in a foreign country.
        </p>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <p><b>FOR JOB SEEKERS</b></p>
        <p>
          <a href="https://www.europelanguagejobs.com/jobs">
            Find a job
          </a>
        </p>
        <p>
          <a href="https://www.europelanguagejobs.com/candidates">
            Create an account
          </a>
        </p>
        <p>
          <a href="https://www.europelanguagejobs.com/blog">
            Career advice
          </a>
        </p>

        <p>
          <b>
            STAY CONNECTED
          </b>
        </p>

        <div class="icons">
          <a target="v_blank" href="https://www.linkedin.com/company/europe-language-jobs/" class="icon__container">
            <q-icon class="footer-icon" name="fab fa-linkedin-in"/>
          </a>
          <a target="v_blank" href="https://www.facebook.com/EuropeLanguageJobs" class="icon__container">
            <q-icon class="footer-icon" name="fab fa-facebook-f"/>
          </a>
          <a target="v_blank" href="https://www.tiktok.com/@europelanguagejobs" class="icon__container">
            <img src="https://www.europelanguagejobs.com/statics/icons/tik-tok.png" alt="tik tok">
          </a>
          <a target="v_blank" href="https://www.youtube.com/c/Europelanguagejobs" class="icon__container">
            <q-icon class="footer-icon" name="fab fa-youtube"/>
          </a>
          <a target="v_blank" href="https://twitter.com/intent/follow?source=followbutton&variant=1.0&screen_name=europelangjobs" class="icon__container">
            <q-icon class="footer-icon" name="fab fa-twitter"/>
          </a>
          <a target="v_blank" href="https://discord.com/invite/UNKxY7rJNz" class="icon__container discord">
            <q-icon class="footer-icon" name="fab fa-discord"/>
          </a>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <p><b>FOR EMPLOYERS</b></p>
        <p>
          <a href="https://www.europelanguagejobs.com/companies">
            Post a job
          </a>
        </p>
        <p>
          <a href="https://www.europelanguagejobs.com/companies/registry">
            Create an account
          </a>
        </p>
        <p>
          <a href="https://www.europelanguagejobs.com/companies/our-services">
            Hiring solutions
          </a>
        </p>

        <p><b>DOWNLOAD THE APP</b></p>
        <div class="apps">
          <a target="v_blank" href="https://play.google.com/store/apps/details?id=com.europelanguagejobs.goplaces&referrer=utm_source%3DWebsite%26utm_medium%3DBanner%26utm_campaign%3Dfooter&pli=1">
            <img src="https://static.europelanguagejobs.com/contents/images/go-places-application/google-white-button.svg" alt="Google Play">
          </a>
          <a target="v_blank" href="https://apps.apple.com/us/app/goplaces-job-search-abroad/id1618894216">
            <img src="https://static.europelanguagejobs.com/contents/images/go-places-application/apple-white-button.svg" alt="App Store">
          </a>
        </div>
      </div>
      <div class="col-md-2 col-sm-6 col-xs-12">
        <p><b>EUROPE LANGUAGE JOBS</b></p>
        <p>
          <a href="https://www.europelanguagejobs.com/about-us">
            About us
          </a>
        </p>
        <p>
          <a href="https://www.europelanguagejobs.com/eulangjobs/faq">
            FAQ
          </a>
        </p>
        <p>
          <a href="https://www.europelanguagejobs.com/eulangjobs/legal-conditions">
            Legal conditions
          </a>
        </p>
        <p>
          <a href="https://www.europelanguagejobs.com/eulangjobs/cookies-policy">
            Cookies policy
          </a>
        </p>
        <p>
          <a href="https://www.europelanguagejobs.com/eulangjobs/contact">
            Contact us
          </a>
        </p>
      </div>
    </div>
    <p class="copyright">
      <i>Copyright</i> © 2023 - Europe Language Jobs. All rights reserved.
    </p>
  </footer>
</template>
<style scoped>
footer{
  background-color: #ebeff3;
  padding-block: 40px;
}

footer a{
  color: #858586;
  text-decoration: none;
}
footer a:hover{
  color: #007cc0;
  text-decoration: none;
}
.footer{
  max-width: 1200px;
  width: 90%;
  border-top: 2px solid black;
  border-bottom: 2px solid black;
  padding-block: 20px;
  margin: auto;
}
.logo__container{
  height: 100px;
  aspect-ratio: 1;
}

.logo__container img{
  width: 100%;
  height: 100%;
  object-fit: contain;
}

.icons{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  gap: 16px;
}

.icons a{
  text-decoration: none;
}
.icon__container{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 30px;
  width: 30px;
  background-color: #007cc0;
  border-radius: 50%;
}

.icon__container.discord{
  background-color: #4f5fa9;
}

.text-blue{
  color: #007cc0;
}
.text-black{
  color: #000;
}

.footer-icon{
  font-size: 16px;
  color: #fff;
}

.icon__container img{
  display: block;
  height: 16px;
}

.apps{
  display: flex;
  flex-wrap: wrap;
}

.copyright{
  max-width: 1200px;
  width: 90%;
  color: #858586;
  font-size: 12px;
  margin: auto;
  padding-block: 10px;
}
</style>
