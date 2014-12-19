<?php

function share_icons($id) {
  $url = get_permalink($id);
  $title = get_the_title($id);
  $thumbnail_id = get_post_thumbnail_id($id);

  $twitter_url = add_query_arg([
    'url' => $url,
    'text' => $title,
  ], 'https://twitter.com/intent/tweet?original_referer=');

  $facebook_url = add_query_arg([
    'u' => $url,
  ], 'https://www.facebook.com/sharer/sharer.php');

  if ($thumbnail_id) {
    $attachment_url = wp_get_attachment_url($thumbnail_id);
    $pinterest_url = add_query_arg([
      'url' => $url,
      'media' => $attachment_url,
      'description' => $title,
    ], 'https://www.pinterest.com/pin/create/button/');
  }

  ?>

  <div class="icons-buttons">
    <h3>Share this page</h3>
    <ul>
      <li>
        <a target="_blank" href="<?php echo esc_attr($twitter_url) ?>" class="twitter">Twitter</a>
      </li>
      <li>
        <a target="_blank" href="<?php echo esc_attr($facebook_url) ?>" class="facebook">Facebook</a>
      </li>
      <?php if ($thumbnail_id) : ?>
        <li>
          <a target="_blank" href="<?php echo esc_attr($pinterest_url) ?>" class="pinterest">Pinterest</a>
        </li>
      <?php endif ?>
    </ul>
    <div class="clearfix"></div>
  </div>

  <?php
}
