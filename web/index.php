<?php

/**
 * Attempt to reproduce setup-php issue with displaying error.
 */

#ini_set('display_errors', 1);
#ini_set('display_startup_errors', 1);
#error_reporting(-1);

?>
<h1><?php echo 'Start'; ?></h1>
<?php include __DIR__ . '/classes.php'; ?>
<?php $dummy = new MyDummy(); ?>
<?php $dummy->hello('World'); ?>
<div id="success">Nothing happen. The page rendered successfully.</div>
