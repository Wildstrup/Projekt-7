<?php
  include 'header.php';
?>

<?php
  include 'sectionheader.php';
 ?>

 <section>
   <div>
     <img class="timelineImg" src="img/timeline3.jpg" alt="1887 i tidslinjen">
     <div class="calendar">
       <ul>
         <li class="prev"><a href="1900.php">&#10096;</a></li>
         <li class="next"><a href="1920.php">&#10097;</a></li>
         <li>
           <span onclick="show_hide()">1910&#8681;</span>
         </li>

<?php
  include 'calendar.php';
?>

<article>
  <h2>Et kæmpe triumf</h2>
  <img class="widePicture" src="img/1916.png" alt="Et gammelt billede fra OB">
  <div class="textBox">
    <p class="mainText">OB fejrede som klub 25 års jibilæum i 1912. Det var en stor
    milesten og ville fejre det med en fodboldkamp mod B93. Det var en glædelig
    oplevelse for de 1300 fans. Ob ender ud med at vinde 11-0.</p>
  </div>
</article>

<article>
  <h2>OB vinder provinsmesterskabet</h2>
  <div class="textBox">
    <p class="mainText">Efter en del år på bagen, lykkedes det endelig OB at vinde
    et mesterskab i 1916. Det var et af de mindre pokaler, men vigtighed er lige så stor.</p>
  </div>
  <div class="textBox2">
    <p class="mainText">Det samme år var der leveringsproblemer, pga. Første Verdenskrig, så
    OB måtte spille sæsonen med uvante trøjer. Stiberne på var blevet tværstriber i stedet for
    deres varemærke. </p>
  </div>
</article>

<article>
  <h2>Den anden titel, der næsten kom hjem</h2>
  <div class="textBox">
    <p class="mainText">Selvsamme år, som OB vandt deres provinsmesterskabet, fik de også
    muligheden for at spille om deltagelse danmarksmesterskabet. Holdet de stod over for var de samme
    modstandere fra deres 11-0 sejr. Nemlig B93. Denne gang gik det ikke som den gang. De endte med
    at tabe kampen og derved muligheden for for at spille danmarksmesterskabet. De tabte kampen 3-9.</p>
  </div>
</article>

<?php
  include 'notes.php';
 ?>

<?php
  include 'footer.php';
?>
