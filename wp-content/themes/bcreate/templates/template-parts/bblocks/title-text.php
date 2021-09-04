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
$className = 'bblock-title-text';

// Load values and assign defaults.
$title = get_field('title');
$text = get_field('text');

?>

<div class="<?php echo esc_attr($className); ?>">
    <?php if (strlen($title) > 0): ?>
        <div class="title">
            <h1><?=$title;?></h1>
        </div>
    <?php endif; ?>
    <div class="text">
        <?= $text ?>
    </div>
</div>