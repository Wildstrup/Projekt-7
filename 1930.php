<?php
  include 'header.php';
?>

<?php
  include 'sectionheader.php';
 ?>

 <section>
   <div>
     <img class="timelineImg" src="img/timeline5.jpg" alt="1887 i tidslinjen">
     <div class="calendar">
       <ul>
         <li class="prev"><a href="1920.php">&#10096;</a></li>
         <li class="next"><a href="#">&#10097;</a></li>
         <li>
           <span onclick="show_hide()">1930&#8681;</span>
         </li>

<?php
  include 'calendar.php';
?>

<article>
  <h2>Stabile tider</h2>
  <img class="widePicture" src="img/oldtimes.jpg" alt="Et gammelt billede fra OB">
  <div class="textBox">
    <p class="mainText">Der sker ikke så meget i denne tid, som er nævneværdigt.
    Der er står ikke skrevet noget i denne tid.</p>
  </div>

  </div>
</article>

<?php
  include 'notes.php';
 ?>

<?php
  include 'footer.php';
?>
