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
$className = 'bblocks-hero';

$style = get_field( "style" );

$hero  = get_field( "hero" );
$image = $hero['image'];
$ctas  = $hero['ctas'];
?>

<div class="<?php echo esc_attr( $className ); ?>" style="background-image: url('<?= $image ?>')">
	<div class="text">
	<span>
		Copy
Lorem ipsum dolor dsfsdfdfdfLorem ipsum dolor dsfsdfdfdfLorem ipsum dolor dsfsdfdfdf
	</span>
	</div>
	<div class="ctas">
	  <?php foreach ( $ctas as $cta ): ?>
				<a href="<?= $cta["cta"] ?>"><?= $cta["cta_text"] ?></a>
	  <?php endforeach; ?>
	</div>
</div>
