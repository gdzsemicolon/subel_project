<?php
/**
 * SUBEL Business
 *
 * @package   SubelProject
 * @author    Semi Colon Team
 * @copyright Copyright (c) 2015, Semi Colon Team
 * @since     Version 1.0
 */
/*
 * Simple Form class.
 * @author Semi Colon Team.
 * Description : This class for open form for change personal informations of the users..
 * 
 */
?>
<?=form_open($action_url)?>
    <span class="error"><?=validation_errors() ?></span>
    <?=$table_form?>
<?=form_close()?>
