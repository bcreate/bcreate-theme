<h1>bCreate Styling Options</h1>
<form action="" method="post">
    <?php
    settings_fields('bcreate_settings_group');
    do_settings_sections('bcreate_theme_options_styling');
    submit_button();
    ?>
</form>
