<?php require_once("./layout/header.php"); ?>
<title>Landing Page</title>
<?php require_once("./layout/navigation.php"); ?>
<h1>Willkommen auf meiner persönlichen Website!</h1>
</header>
<section class="willkommen">
  <p>Kurs: Web Programmierung by Ali Khorsandfard</p>
  <p>FISI Sommer 2024</p>
  <p>Name: Piotr Balcerzak</p>
  <p>Standort: Hamm</p>
</section>
<section class="kontaktformular">
  <form method="post" target="_blank">
    <input name="email" type="email" placeholder="ihr email" required /><br /><br />
    <textarea name="message" cols="25" rows="3" placeholder="schreib etwas ..." required></textarea>
    <br /><br />
    <input name="senden_login" type="submit" value="senden" />
    <button type="reset">reset</button>
  </form>
  <?php require_once("./layout/footer.php"); ?>