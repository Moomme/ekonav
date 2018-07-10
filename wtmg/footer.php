<?= get_component('templates/layout/footer'); ?>
<?php if($_GET['sent'] === 'sent'){
    ?>
    <div class="notice green">
        <div class="main-inner">
            Ditt meddelande har skickats
        </div>
    </div>
    <?php
}elseif($_GET['sent'] === 'not' && isset($_GET['sent'])){
    ?>
    <div class="notice red">
        <div class="main-inner">
            Ditt meddelande kunde inte skickas, försök igen senare 
        </div>
    </div>
    <?php
}
?>
<?php wp_footer(); ?>
</body>
</html>
