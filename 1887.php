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
</main>

<?php
  include 'footer.php';
?>
