<?php
  if (post_password_required()) {
      return;
  }

 if (have_comments()) : ?>
  <section id="comments" class="comments">
    <h3><?php printf(_n('1 comment', '%1$s comments', get_comments_number(), 'roots'), number_format_i18n(get_comments_number())) ?></h3>

    <ol class="media-list">
      <?php wp_list_comments(['walker' => new Roots_Walker_Comment]) ?>
    </ol>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
    <nav>
      <ul class="pager">
        <?php if (get_previous_comments_link()) : ?>
          <li class="previous"><?php previous_comments_link(__('&larr; Older comments', 'roots')) ?></li>
        <?php endif ?>
        <?php if (get_next_comments_link()) : ?>
          <li class="next"><?php next_comments_link(__('Newer comments &rarr;', 'roots')) ?></li>
        <?php endif ?>
      </ul>
    </nav>
    <?php endif ?>

  </section><!-- /#comments -->
<?php endif ?>

<?php if (comments_open()) : ?>
  <section id="respond" class="leave-a-comment">
    <header class="group">
      <h3><?php comment_form_title(__('Leave a comment', 'roots'), __('Leave a reply to %s', 'roots'), __(false, 'roots')); ?></h3>
      <p class="cancel-comment-reply"><?php cancel_comment_reply_link('Cancel reply') ?></p>
    </header>

    <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
      <p><?php printf(__('You must be <a href="%s">logged in</a> to post a comment.', 'roots'), wp_login_url(get_permalink())) ?></p>
    <?php else : ?>

      <form action="<?php echo get_option('siteurl') ?>/wp-comments-post.php" method="post" id="commentform" class="group">
        <div class="form-group">
          <a name="comment_field"></a>
          <label for="comment" class="visuallyhidden"><?php _e('Comment', 'roots') ?></label>
          <textarea name="comment" id="comment" class="required" cols="50" rows="10" required aria-required="true"></textarea>
        </div>
        <div class="js-comment-extra">
          <?php if (is_user_logged_in()) : ?>
            <p>
              <?php printf(__('You are logged in as <strong>%s</strong>.', 'roots'), $user_identity) ?>
              <a href="<?php echo wp_logout_url(get_permalink()) ?>"><?php _e('Log out', 'roots') ?></a>
            </p>
          <?php else : ?>
            <div class="form-group">
              <a name="name_field"></a>
              <label for="author"><?php _e('Name', 'roots'); ?></label>
              <input type="text" class="text<?php echo $req ? ' required' : '' ?>" name="author" id="author" value="<?php echo esc_attr($comment_author) ?>" <?php echo $req ? 'required aria-required="true"' : '' ?> autocomplete="name">
            </div>
            <div class="form-group">
              <a name="email_field"></a>
              <label for="email"><?php _e('Email', 'roots'); ?></label>
              <span class="form-hint">We only ask for your email address so we know you're a real person</span>
              <input type="email" class="text<?php echo $req ? ' required' : '' ?>" name="email" id="email" value="<?php echo esc_attr($comment_author_email) ?>" <?php echo $req ? 'required aria-required="true"' : '' ?> autocomplete="email">
            </div>
          <?php endif ?>
          <?php do_action('comment_form', $post->ID) ?>
          <p><input name="submit" class="button" type="submit" id="submit" value="<?php _e('Submit comment', 'roots') ?>"></p>
        </div>
        <?php comment_id_fields() ?>
        <div class="comment-privacy-notice dxw-subscription">
            <p class="inset-text">By submitting a comment you understand it may be published on this public website. Please read our <a href="https://www.gov.uk/government/publications/govuk-blogging-platform-privacy-notice">privacy notice</a> to see how the GOV.UK blogging platform handles your information.</p>
        </div>
      </form>
    <?php endif ?>
  </section><!-- /#respond -->
<?php endif ?>
