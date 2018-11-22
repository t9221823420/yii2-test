<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>
<?php if( $printTags ?? false ) : ?>
<script type='text/javascript'><?php endif; ?>
	
	<?php switch($section) : case 'one' : ?>
	<?php break; case 'two' : ?>
	<?php break; default: ?>

    $(function () {});
	
	<?php endswitch; ?>
	<?php if( $printTags ?? false ) : ?></script><?php endif; ?>
