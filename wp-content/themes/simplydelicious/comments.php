<div id="comments">

<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>

<!-- You can start editing here. -->



<?php if ($comments) : ?>

    <div id="commentary">
          <h2><?php comments_number(' ', '1 Comment', '% Comments' );?>:</h2>


          	<?php foreach ($comments as $comment) : ?>

          		<div class="comment" id="comment-<?php comment_ID() ?>">
          				<div class="comment-text"><?php comment_text() ?></div>
                        <div class="comment-author"><?php comment_author_link() ?></div>
                        <div class="comment-date"><a href="#comment-<?php comment_ID() ?>"><?php comment_date('j M, Y') ?></a></div>
          		</div><!-- /.comment -->

          	<?php endforeach; /* end for each comment */ ?>

    </div><!-- /#commentary -->

<?php else : // this is displayed if there are no comments so far ?>

      	<?php if ('open' == $post->comment_status) : ?>
      		<!-- If comments are open, but there are no comments. -->

      	 <?php else : // comments are closed ?>
      		<!-- If comments are closed. -->
      		<div id="leave-comment">
      				<h2>Comments are closed</h2>
      		</div><!-- /#leave-comment -->
      	<?php endif; ?>
      <?php endif; ?>




<?php if ('open' == $post->comment_status) : ?>

<div id="leave-comment">

		<h2>Leave a comment:</h2>


          	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

              	<div class="comment-field">
              			<input type="text" name="author" id="author" value="Your Name<?php echo $comment_author; ?>" tabindex="1" onblur="if(this.value == '') { this.value='Your Name'}" onfocus="if (this.value == 'Your Name') {this.value=''}" />
              	</div><!-- comment-field -->

              	<div class="comment-field">
              			<input type="text" name="email" id="email" value="Email Address<?php echo $comment_author_email; ?>" tabindex="2"  onblur="if(this.value == '') { this.value='Email Address'}" onfocus="if (this.value == 'Email Address') {this.value=''}" />
              	</div><!-- comment-field -->

              	<div class="comment-field website">
              			<input type="text" name="url" id="url" value="Website<?php echo $comment_author_url; ?>" tabindex="3" onblur="if(this.value == '') { this.value=''}" onfocus="if (this.value == 'Website') {this.value=''}"  />
              	</div><!-- comment-field -->

                <div class="clear"></div>

              	<div class="comment-field-message">
              			<textarea name="comment" id="comment" tabindex="4" cols="10" rows="5" onblur="if(this.value == '') { this.value='Add Your Comment'}" onfocus="if (this.value == 'Add Your Comment') {this.value=''}" >Add Your Comment</textarea>
              	</div><!-- /.comment-field-message -->

                <div class="comment-button"><input name="submit" type="image" id="submit" tabindex="5" value=" " class="submit" src="<?php bloginfo('template_directory'); ?>/img/submit.gif" /></div>
                <div class="clear"></div>
              	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />

              	<?php do_action('comment_form', $post->ID); ?>

          	</form>

</div><!-- /#leave comment -->

<?php endif; // if you delete this the sky will fall on your head ?>



</div> <!-- /#comments -->