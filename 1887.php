<?php
  include 'header.php';
?>

<main>
  <section>
    <div class="historyHeader">
      <h1>Historie</h1>
    </div>
    <div class="historyNav">
      <ul class="navLinks2">
        <li><a href="index.php">Historie</a></li>
        <li><a href="#">Miraklet i Madrid</a></li>
        <li><a href="1887.php">Tidslinje</a></li>
        <li><a href="#">Meritter</a></li>
        <li><a href="#">Spillerstatistikker</a></li>
        <li><a href="#">OB's trænere</a></li>
        <li><a href="#">Fanshop</a></li>
      </ul>
      </div>
    </div>
  </section>

  <article>
    <h2>Opstarten af klubben</h2>
    <img class="widePicture" src="img/oldtimes.jpg" alt="Et gammelt billede fra OB">
    <div class="textBox">
      <p class="mainText">OB blev stiftet i 1887 og  startede ud
        med at være en Cricket klub. Det er
        begyndelsen på OB's historie.</p>
    </div>
    <div class="textBox2">
      <img class="tallPicture" src="img/thefounder.jpg" alt="Et billede af Max Schmidt">
      <p class="mainText">Manden der var med til at starte det hele, var
        OB's første formand Max Schmidt</p>
    </div>
  </article>

  <article>
    <h2>Fodbolden i OB</h2>
    <img class="widePicture" src="img/oldtimes.jpg" alt="Et gammelt billede fra OB">
    <div class="textBox">
      <p class="mainText">OB var en af de første klubber, som
        implementerede fodbold ind i
        deres klub. Det var i 1889 Odenses
        fodboldeventyr startede.</p>
    </div>
  </article>

  <article>
    <h2>Større tider</h2>
    <img class="widePicture" src="img/munkemose.jpg" alt="Miraklet i Madrid">
    <div class="textBox">
      <div class="textBox">
        <p class="mainText">I 1894 blev der bygget videre på
          klubben og fik derfor også tildelt
          deres eget område i Munke Mose.</p>
    </div>
  </article>

  <section class="noteSection">
    <div class="noteContainer">
      <h3 class="noteContainerTitle">Dine notater</h3>
      <div class="notes">
        <div class="note flex itemsStart justifyStart">
          <div class="flex1">
            <h3 class="yourNote">Skriv din note her!</h3>
            <div class="noteBody">Dine notater vil blive noteret her</div>
          </div>
        </div>
      </div>

      <div class="note noteNew flex itemsStart justifyStart">
        <div class="flex1">
          <h3 class="yourComment">Din note</h3>
          <form class="noteForm" action="#">
            <textarea class="noteInput" placeholder="Angiv din note her!"></textarea>
            <input type="submit" class="noteSubmit" value="Lav note">
          </form>
        </div>
      </div>
    </div>
  </section>

<?php
  include 'footer.php';
?>
