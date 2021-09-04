<?php
/**
 * Testimonial Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create class attribute allowing for custom "className" and "align" values.
$className = 'bblocks-usps';

$style = get_field("style");

$usps = get_field("usps");
?>

<div class="<?php echo esc_attr( $className ); ?> row">
	<?php foreach ( $usps as $usp ): $title = $usp['title'];
		$text = $usp['text']; ?>
			<div class="usp col-lg-<?= 12 / sizeof( $usps ) ?>">
				<div class="title">
					<?= $title ?>
				</div>
				<div class="text">
					<?= $text ?>
				</div>
			</div>
	<?php endforeach; ?>
</div>
<style>
	.<?= esc_attr( $className ); ?> {
	<?= get_style_from_bblock($style, "block", "max-width", "px") ?? "" ?>
	}

	.<?= esc_attr( $className ); ?> .title {
		<?= get_style_from_bblock($style, "title", "font-size", "px") ?? "" ?>
		<?= get_style_from_bblock($style, "title", "font-weight") ?? "" ?>
	}

	.<?= esc_attr( $className ); ?> .text {
	<?= get_style_from_bblock($style, "text", "font-size", "px") ?? "" ?>
	<?= get_style_from_bblock($style, "text", "font-weight") ?? "" ?>
	}
</style>
