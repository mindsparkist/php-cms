<?php
    include 'partials/header.php';
?>
<style>
.main{
  max-width: 1200px;
  margin: 0 auto;
  margin-top: 20px;
}
img {
    height: 21vw;
    width: 100%;
    object-fit: cover;
    vertical-align: middle;
}


.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards_item {
  display: flex;
  padding: 1rem;
}

@media (min-width: 40rem) {
  .cards_item {
    width: 50%;
  }
}

@media (min-width: 56rem) {
  .cards_item {
    width: 33.3333%;
  }
}

.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card_content {
  padding: 1rem;
  background: linear-gradient(to bottom left, #ea5353 40%, #FFC39E 100%);
}

.card_title {
  color: #ffffff;
  font-size: 1.1rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin: 0px;
}

.card_text {
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;    
  font-weight: 400;
}
.centre101{
    margin: 100px;
    text-align: center;
}
p{
    padding: 10px;
}
</style>
<div class="container">
<h1 class="centre101"> About Us </h1>

<p> We are a team created as part of Mr. Devargha Chakraborty`s Web Design class at Murshidabad College Of Engg And Technology Our team was originally created as part of a Minor Project in 5th semester project in which we were supposed to create a Content Management System In HTML5,CSS3, PHP,MYSQL web design application Scratch. </p>
<p> Since the Scratch project, we have taken on many more endeavors, such as learning HTML and CSS in order to create web pages of our own instead of relying on other applications to see our creative visions through.
    Some Of Our Team Members Are Shuvradip Chakraborty|Mainak Podder|Abhijit Mondal|Sibendu Gosh|Sushmita Sarkar|Antara Kangsabanik
</p>
<!-- card -->
<div class="main">
  <ul class="cards">
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="https://picsum.photos/500/300/?image=5"></div>
        <div class="card_content">
          <h2 class="card_title">Shuvradip Chakraborty</h2>
          <p class="card_text">Shuvradip Chakraborty co-lead the Minnor Project team, with Mainak predominantly overseeing and managing the UI/UX and design aspects of The  projects.</p>
    
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="./images/mainak.jpeg"></div>
        <div class="card_content">
          <h2 class="card_title">Mainak Podder</h2>
          <p class="card_text">Mainak, along with Shuvradip, co-leads the Minnor Project team. Mainak predominantly oversees and manages all aspects pertaining to development across The projects.</p>

        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="./images/abhi.jpeg"></div>
        <div class="card_content">
          <h2 class="card_title">Abhijit Mondal</h2>
          <p class="card_text">Partner, Head of Documentation & Analyst writting . Extensive history and product knoledge
Partner, Head of Documentation & Analyst writting . Extensive history and product knoledge
          </p>
          
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="https://picsum.photos/500/300/?image=14"></div>
        <div class="card_content">
          <h2 class="card_title">Sibendu Gosh</h2>
          <p class="card_text">Head of  Service. Long history of HTML  and CSS devopment. Project management .</p>
          
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="./images/sus.jpeg"></div>
        <div class="card_content">
          <h2 class="card_title">Sushmita Sarkar</h2>
          <p class="card_text">Head of Design. Current Designed The precaution page </p>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="./images/antara.jpeg"></div>
        <div class="card_content">
          <h2 class="card_title">Antara Kangsabanik</h2>
          <p class="card_text">Devoloped The Footer And proficent In html Devolopment</p>
          
        </div>
      </div>
    </li>
  </ul>
</div>

</div>

<?php
     include 'partials/footer.php';
?>