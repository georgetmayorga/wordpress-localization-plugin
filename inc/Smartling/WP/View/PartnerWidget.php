<?php

use Smartling\WP\WPAbstract;

/**
 * @var WPAbstract $this
 * @var WPAbstract self
 */

$this->setWidgetHeader(__('Translate this partner into:'));
$this->renderViewScript('post-based-content-type.php');
