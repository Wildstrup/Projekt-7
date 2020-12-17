<?php
  include 'header.php';
?>

<?php
  include 'sectionheader.php';
 ?>

 <section>
   <div>
     <img class="timelineImg" src="img/timeline2.jpg" alt="1887 i tidslinjen">
     <div class="calendar">
       <ul>
         <li class="prev"><a href="1887.php">&#10096;</a></li>
         <li class="next"><a href="1910.php">&#10097;</a></li>
         <li>
           <span onclick="show_hide()">1900&#8681;</span>
         </li>

<?php
  include 'calendar.php';
?>

<article>
  <h2>Nye græsgange</h2>
  <img class="widePicture" src="img/oldtimes.jpg" alt="Et gammelt billede fra OB">
  <div class="textBox">
    <p class="mainText">OB spillede i mange år på en bane, som de har fået i Munke Mose,
      men uden at have et baneanlæg. Det blev ændret i  1904 og der fik de indviet
      baneanlægget med gode manere.</p>
  </div>
  <div class="textBox2">
    <p class="mainText">Formanden Max Schmidt, fik endnu en stor rolle. Samme år
    blev han også den første formand for FBU, som var nystiftet.</p>
  </div>
</article>


<?php
  include 'notes.php';
 ?>

<?php
  include 'footer.php';
?>
