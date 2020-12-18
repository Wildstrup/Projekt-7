<?php
  include 'header.php';
?>

<?php
  include 'sectionheader.php';
 ?>

<section>
  <div>
    <img class="timelineImg" src="img/timeline1.jpg" alt="1887 i tidslinjen">
    <div class="calendar">
      <ul>
        <li class="prev"><a href="index.php">&#10096;</a></li>
        <li class="next"><a href="1900.php">&#10097;</a></li>
        <li>
          <span onclick="show_hide()">1887&#8681;</span>
        </li>

<?php
  include 'calendar.php';
?>

<article>
  <h2>Opstarten af klubben</h2>
  <img class="widePicture" src="img/fball.png" alt="Et gammelt billede fra OB">
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

<?php
  include 'notes.php';
 ?>

<?php
  include 'footer.php';
?>
