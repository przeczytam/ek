<?php require_once("./layout/header.php"); ?>
<title>About Me</title>
<?php require_once("./layout/navigation.php"); ?>
<h1>Login</h1>
</header>
<section class="loginformular">
    <form method="post" target="_blank">
        <input name="email" type="email" placeholder="ihr email" required /><br /><br />
        <input name="password" type="password" placeholder="kennwort" required /><br /><br />
        <input name="senden_login" type="submit" value="senden" />
        <button type="reset">reset</button>
    </form>

    <?php require_once("./layout/footer.php"); ?>