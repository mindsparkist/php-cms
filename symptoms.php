<?php
    $page = 'symptoms';
    include 'partials/header.php';
?>  
<div class="container-fluid">
      <p class="mt-15 headine">most common Symptoms</p>
      <p class="mt-15 subtitle">
        COVID-19 affects different people in different ways
      </p>
      <!-- covid section -->
      <div class="flex">
        <!-- covid main paragraph -->
        <div class="flex-para">
          <p class="para">
            Coronavirus disease (COVID-19) is an infectious disease caused by
            the SARS-CoV-2 virus. Most people who fall sick with COVID-19 will
            experience mild to moderate symptoms and recover without special
            treatment. However, some will become seriously ill and require
            medical attention.
          </p>
          <!-- ol list -->
          <main>
            <ol class="gradient-list">
              <li>Fever is a possible symptom of COVID-19.</li>
              <li>Dry cough a symptom of COVID-19.</li>
              <li>Tiredness/Fatigue Is A Symptom Of Covid-19.</li>
              <li>People with COVID-19 lose their sensitivity to smells.</li>
              <li>
                Sore throat OR Congestion or runny nose OR Nausea or vomiting OR
                Diarrhea.
              </li>
            </ol>
            <!-- btn -->
            <button class="btn-primary">learn More</button>
          </main>
        </div>
        <img
          src="./images/symptoms-img.png"
          class="img-symp"
          alt="Women Having covid problems"
          srcset=""
        />
      </div>
    </div>
    <!-- least common section -->
    <div class="bg-gry">
      <div class="container-fluid">
        <p class="mt-15 headine txt-cen">least common Symptoms</p>
        <div class="flex">
          <img
            src="./images/main-symp-img.png"
            alt=""
            srcset=""
            class="least-symp1"
          />
          <img
            src="images/Least Common Symptoms.png"
            alt=""
            srcset=""
            class="least-symp"
          />
        </div>
      </div>
    </div>
    <!-- slider -->
    <div class="slider-container">
      <p class="headine txt-cen" style="margin-top: -50px">Serious Symptoms</p>
      <div class="slider owl-carousel">
        <!-- <div class="card-slider">
          <div class="img-slider">
            <img
              src="./images/towfiqu-barbhuiya--jthScuVWT0-unsplash.jpg"
              alt=""
            />
          </div>
          <div class="slider-content">
            <div class="slider-title">Breathing difficulties</div>
            <div class="slider-sub-title">lung damage</div>
            <p>
              Covid-19 Spikes Hold your Lungs For the oxygen and causing
              shortness of breath, cough and other symptoms And Other Things .
            </p>
            <div class="btn-slider">
              
              <button>Read more</button>
            </div>
          </div>
        </div> -->

        <div class="card-slider">
          <div class="img-slider">
            <img
            src="./images/towfiqu-barbhuiya--jthScuVWT0-unsplash.jpg"
              alt=""
            />
          </div>
          <div class="slider-content">
            <div class="slider-sub-title">Breathing difficulties</div>
            <div class="sub-title">lung damage</div>
            <p>
            Covid could trigger a spike in dementia cases, say Alzheimer’s
              experts And It could lead to some temporary loss which is very
              problematic.
            </p>
            <div class="btn-slider">
              
              <button>Read more</button>
            </div>
          </div>
        </div>
        <div class="card-slider">
          <div class="img-slider">
            <img
              src="./images/142525700-old-man-patient-of-alzheimer-disease-thinking-hand-vector-illustration.jpg"
              alt=""
            />
          </div>
          <div class="slider-content">
            <div class="slider-sub-title">Spike In Dementia</div>
            <div class="sub-title">Covid Tirgger</div>
            <p>
              Covid could trigger a spike in dementia cases, say Alzheimer’s
              experts And It could lead to some temporary loss which is very
              problematic.
            </p>
            <div class="btn-slider">
              
              <button>Read more</button>
            </div>
          </div>
        </div>
        
        <div class="card-slider">
          <div class="img-slider">
            <img src="./images/istockphoto-528432900-612x612.jpg" alt="" />
          </div>
          <div class="slider-content">
            <div class="slider-sub-title">Heart Problems</div>
            <div class="sub-title">After COVID-19</div>
            <p>
              COVID-19, the disease caused by the SARS-CoV-2 coronavirus, can
              damage heart muscle and affect heart functionThere are several
              reasons for this.
            </p>
            <div class="btn-slider">
              <!-- https://www.hopkinsmedicine.org/health/conditions-and-diseases/coronavirus/can-coronavirus-cause-heart-damage -->
              <button>Read more</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Accordian -->
    <!-- Common questions -->
    <div class="relative">
      <p class="headine txt-cen1">
        <i class="fas fa-exclamation-triangle"></i>
        Common questions
      </p>
      <div class="container-sm">
        <div class="wrapper-accordian">
          <button class="toggle-accordian">
            What are signs and symptoms of the coronavirus disease?
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="content-accordian">
            <p>
              Signs and symptoms include respiratory symptoms and include fever,
              cough and shortness of breath. In more severe cases, infection can
              cause pneumonia, severe acute respiratory syndrome and sometimes
              death.
            </p>
          </div>
        </div>
        <div class="wrapper-accordian">
          <button class="toggle-accordian">
            What are the primary symptoms of COVID-19?
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="content-accordian">
            <p>
              Some of the primary symptoms to look for in a Covid 19 infected
              person are fever, dizziness, breathlessness, headache, dry cough (
              eventually result in phlegm) and in a few cases loss in smell and
              taste. A few cases have also reported diarrhoea and fatigue.
            </p>
          </div>
        </div>
        <div class="wrapper-accordian">
          <button class="toggle-accordian">
            How long do COVID-19 antibodies last?
            <i class="fas fa-plus icon"></i>
          </button>
          <div class="content-accordian">
            <p>
              In a new study, which appears in the journal Nature
              Communications, researchers report that SARS-CoV-2 antibodies
              remain stable for at least 7 months following infection.
            </p>
          </div>
        </div>
      </div>
    </div>
<?php
     include 'partials/footer.php';
?>