<?php
  include 'header.php';
?>

<?php
  include 'sectionheader.php';
 ?>

 <section>
   <div>
     <img class="timelineImg" src="img/timeline4.jpg" alt="1887 i tidslinjen">
     <div class="calendar">
       <ul>
         <li class="prev"><a href="1910.php">&#10096;</a></li>
         <li class="next"><a href="1930.php">&#10097;</a></li>
         <li>
           <span onclick="show_hide()">1920&#8681;</span>
         </li>

<?php
  include 'calendar.php';
?>

<article>
  <h2>Nye højder</h2>
  <img class="widePicture" src="img/oldtimes.jpg" alt="Et gammelt billede fra OB">
  <div class="textBox">
    <p class="mainText">OB gjorde det de længe havde ledt efter. De kvalificerede sig til
    danmarksmesterskabet. Det der gjorde det muligt var kvalifikationskampen mod B1909.
    Det vandt kampen og kvalificerede sig. Det var en lang rejse om danmarksmesterskabet, men
    i sidste ende vandt de guldet og var danmarksmestre for første gang.</p>
  </div>
</article>

<?php
  include 'notes.php';
 ?>

<?php
  include 'footer.php';
?>
