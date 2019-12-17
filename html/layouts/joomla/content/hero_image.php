<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;
$params = $displayData->params;
?>

<?php $images = json_decode($displayData->images); ?>
<?php if (!empty($images->image_fulltext)) : ?>
<?php
	$imgfloat = empty($images->float_fulltext) ? $params->get('float_fulltext') : $images->float_fulltext;
	$imageFulltext = preg_replace('/.[^.]*$/', '', $images->image_fulltext);
?>
	<div class="hero-image <?php echo htmlspecialchars($imgfloat); ?>">
		<img
			<?php if ($images->image_fulltext_caption) :
				echo 'class="caption"' . ' title="' . htmlspecialchars($images->image_fulltext_caption) . '"';
			endif; ?>
			src="<?php echo htmlspecialchars($images->image_fulltext); ?>" alt="<?php echo htmlspecialchars($images->image_fulltext_alt); ?>" itemprop="image"
			srcset="<?php echo htmlspecialchars($imageFulltext) . '-lg.jpg'; ?> 2400w,
							<?php echo htmlspecialchars($imageFulltext) . '-md.jpg'; ?> 1984w,
							<?php echo htmlspecialchars($imageFulltext) . '-sm.jpg'; ?> 1536w,
							<?php echo htmlspecialchars($imageFulltext) . '-xs.jpg'; ?> 1152w"
			sizes="100vw"
		/>
	</div>
<?php endif; ?>
