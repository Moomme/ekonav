<div class="main-inner">
    <h3>Kontakta oss</h3>
    <form action="<?= get_template_directory_uri(); ?>/mailer.php" method="post">
        <div class="form-item">
            <input name="name" type="text" placeholder="Namn" required> 
        </div>
        <div class="form-item">
            <input name="email" type="text" placeholder="Email" required> 
        </div>
        <div class="form-item">
            <input name="phone" type="text" placeholder="Telefonnummer" required> 
        </div>
        <div class="form-item">
        <input type="checkbox" name="policy"
               value="accept" required/><label>Jag samtycker till inegritetspolicyn</label>
        </div>

    <input type="submit" value="Skicka">

    </form>
</div>