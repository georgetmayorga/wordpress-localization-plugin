<style >
	tr.form-field td.sm_sh {
		padding-top    : 3px;
		padding-bottom : 4px;
	}
</style >

<?php
use Smartling\Helpers\WordpressContentTypeHelper;
use Smartling\Settings\TargetLocale;
use Smartling\Submissions\SubmissionEntity;
use Smartling\WP\Controller\TaxonomyWidgetController;
use Smartling\WP\WPAbstract;

/**
 * @var WPAbstract $this
 * @var WPAbstract self
 */
$data = $this->getViewData();
?>

<div id = "smartling-post-widget" >
	<h2 >Smartling connector actions</h2 >

	<h3 ><?= __( vsprintf( 'Translate this %s into',
			array ( WordpressContentTypeHelper::getLocalizedContentType( $data['term']->taxonomy ) ) ) ); ?></h3 >
	<?= WPAbstract::checkUncheckBlock(); ?>
	<table class = "form-table" style = "width: 400px;" >
		<tbody >
		<?php
		$nameKey = TaxonomyWidgetController::WIDGET_DATA_NAME;

		/**
		 * @var TargetLocale[] $locales
		 */
		$locales = $data['profile']->getTargetLocales();

		foreach ( $locales as $locale ) {
			/**
			 * @var TargetLocale $locale
			 */
			if ( ! $locale->isEnabled() ) {
				continue;
			}

			$value = false;

			$status      = '';
			$submission  = null;
			$statusValue = null;
			$id          = null;
			if ( null !== $data['submissions'] ) {
				foreach ( $data['submissions'] as $item ) {
					/**
					 * @var SubmissionEntity $item
					 */
					if ( $item->getTargetBlogId() === $locale->getBlogId() ) {
						$value       = true;
						$statusValue = $item->getStatus();
						$id          = $item->getId();
						$percent     = $item->getCompletionPercentage();
						$status      = $item->getStatusColor();
						break;
					}
				}
			}
			?>
			<tr class = "form-field" >
				<td class = "sm_sh" width = "200px;" >
					<?= WPAbstract::localeSelectionCheckboxBlock(
						$nameKey,
						$locale->getBlogId(),
						$locale->getLabel(),
						$value
					); ?>
				</td >
				<td class = "sm_sh" style = "text-align: left;" >
					<?php if ( $value ) { ?>
						<?= WPAbstract::localeSelectionTranslationStatusBlock(
							__( $statusValue ),
							$status,
							$percent
						); ?>
						<?= WPAbstract::inputHidden(
							$id
						); ?>
					<?php } ?>
				</td >
			</tr >
		<?php } ?>
		</tbody >
	</table >
	<?= WPAbstract::submitBlock(); ?>
</div >