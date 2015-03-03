<h1 role="heading"
    aria-level="1">
    Identifiez-vous.
</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>"
      method="post">
    <div>
        <label for="login">Votre adresse email</label>
        <input type="email"
               name="login"
               id="login"
               placeholder="jon.snow@nightwatch.net">
    </div>
    <div>
        <label for="password">Votre mot de passe</label>
        <input type="password"
               name="password"
               id="password">
    </div>
    <div>
        <input name="a"
               type="hidden"
               value="check">
        <input name="e"
               type="hidden"
               value="user">
    </div>
    <div>
        <input type="submit"
               value="Vous identifier">
    </div>
</form>