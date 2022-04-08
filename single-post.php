<?php get_header() ?>
<?php global $withcomments; $withcomments = true; ?>

<div class="article-page">	
	<div class="article-banner">
		<div class="article-info">
			<div class="article-info__title"><?php echo get_the_title(); ?></div>
		</div>
		<?php 
		$post_id = get_the_ID();
		$post_thumbnail_id = get_post_thumbnail_id( $post_id );
		$attachment_url = wp_get_attachment_url($post_thumbnail_id);
		?>
		<img src="<?php echo $attachment_url ?>" alt="" class="article-banner__img">
	</div>

	<?php get_template_part('/template-parts/content', 'search-nav'); ?>	

	<div class="article-main">
		<div class="article-content">
			<div style="text-align: center;">
				<?php the_content(); ?>
			</div>

			<div class="article-comments">
				<h2 class="article-comments__title">Comentarios</h2>
				<div id="article-comments-container">
					<?php

				function printCommentsInitial() {
					$args = array(
						'post_id' => $post_id,
						'status' => 'approve',
				    	'parent' => 0, // 0 is for comments that aren't replys
					);

					printComments($args);
				}

				function printComments($args, $depth = 0) {
					$comments = get_comments($args);
					if ($comments) {
					    foreach ($comments as $comment) {
					    	$comment_id = $comment->comment_ID;
					        $template_args = array(
					        	'allow_reply' => ($args['parent'] == 0) ? true : false, 
					        	'post_id' => $args['post_id'],
					        	'comment_id' => $comment_id,
					        	'name' => $comment->comment_author,
					        	'date' => my_format_date($comment->comment_date),
					        	'content' => $comment->comment_content,
					        	'depth' => $depth,
					        );
							get_template_part('/template-parts/content', 'comment', $template_args);

							if ( has_comment_replys($comment_id) ) {
								$new_args = array(
									'post_id' => $args['post_id'],
									'status' => 'approve',
							    	'parent' => $comment_id,
								);
								printComments($new_args, ($depth+1));
							}
					    }   
					}
				}

				printCommentsInitial();
				//comments_template();
				?>
				</div>
			</div>		

			<div class="article-leave-comment">
				<h3 class="article-leave-comment__title">Deja un comentario</h3>
				<input 
					type="text" 
					id="article_leave_comment_name"
					class="article-leave-comment__input" 
					placeholder="Nombre*">
				<input 
					type="email" 
					id="article_leave_comment_email"
					class="article-leave-comment__input" 
					placeholder="Correo Electr&oacute;nico*">
				<textarea 
					id="article_leave_comment_msg"
					class="article-leave-comment__input" 
					cols="30" rows="10" 
					placeholder="Mensaje*"></textarea>
				<p id="error-msg" class="comment-error-msg"></p>
				<button id="article_leave_comment_publish" class="article-leave-comment__publish">Publicar</button>
			</div>
		</div>

		<div class="article-sidebar">
			<?php get_template_part('/template-parts/content', 'follow-us'); ?>	
			<?php get_template_part('/template-parts/content', 'popular-posts'); ?>	
		</div>
	</div>
</div>

<script>

jQuery(document).ready(function($) {

    $('#article_leave_comment_publish').click(function() {
    	//console.log('hola');
		let post_id = '<?php echo $args['post_id']; ?>';
		let leave_comment_name = document.getElementById('article_leave_comment_name').value;
		let leave_comment_email = document.getElementById('article_leave_comment_email').value;
		let leave_comment_msg = document.getElementById('article_leave_comment_msg').value;

		let error_msg = '';
		error_msg += (leave_comment_name.length == 0) ? 'Has olvidado escibir tu nombre.<br>' : '';
		error_msg += (leave_comment_email.length == 0) ? 'Has olvidado escibir tu correo electr&oacute;nico.<br>' : '';
		error_msg += (leave_comment_msg.length == 0) ? 'El mensaje está vacio.<br>' : '';

		if (error_msg.length > 0) {
			let p_error_msg = document.getElementById('error-msg');
			p_error_msg.innerHTML = error_msg;
			p_error_msg.style.display = 'block';
			p_error_msg.style.visibility = 'visible';
		} else {
			jQuery.ajax({
	            url: cart_ajax2.ajaxurl,
	            method: 'POST',
	            data: {
	            	'action': 'send_comment_by_ajax',
	            	'post_id': post_id,
	            	'parent': 0,
	            	'author': leave_comment_name,
	            	'email': leave_comment_email,
	            	'content': leave_comment_msg,
	            },
	            success: function(data) {
	            	//console.log('Success');
	            	//console.log(data);
	            	let article_comments_container = document.getElementById('article_leave_comment_name');
	            	location.reload();
	            },
	            error: function(error) {
	            	//console.log(error);
	            },
	        });	
		}
		//reset_reply_form(comment_id);
    });
});

function show_reply_form(object) {
	console.log('hola');
	let split_id = object.id.split('_');
	let id = split_id['1'];
	let reply_form = document.getElementById('reply_form_'+id);
	reply_form.style.display = 'block';
	reply_form.style.visibility = 'visible';
}

function cancel_reply_form(object) {
	let split_id = object.id.split('_');
	let comment_id = split_id['2'];

	reset_reply_form(comment_id);
}

function send_reply_form(object) {	
	let split_id = object.id.split('_');
	let id = split_id['2'];
	let reply_autor = document.getElementById('reply_author_'+id);
	let reply_email = document.getElementById('reply_email_'+id);
	let reply_content = document.getElementById('reply_content_'+id);
	let author = reply_autor.value;
	let email = reply_email.value;
	let content = reply_content.value; 
	//console.log(author);
	//console.log(email);
	//console.log(content);
}

function reset_reply_form(comment_id) {
	let reply_form = document.getElementById('reply_form_'+comment_id);
	reply_form.style.display = 'none';
	reply_form.style.visibility = 'hidden';

	let reply_author = document.getElementById('reply_author_'+comment_id);
	reply_author.value = '';
	let reply_email = document.getElementById('reply_email_'+comment_id);
	reply_email.value = '';
	let reply_content = document.getElementById('reply_content_'+comment_id);
	reply_content.value = '';
}

</script>

<?php get_footer() ?>

