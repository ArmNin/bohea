<?php 
	$comment_id = $args['comment_id'];
?>
	
<div class="article-comment" id="comment_<?php echo $comment_id; ?>">
	<img class="article-comment__avatar" src="<?php echo get_template_directory_uri().'/assets/images/user.png'; ?>">
	<div class="article-comment-info">
		<span class="article-comment-info__name"><?php echo $args['name']; ?></span>
		<?php if ($args['allow_reply']) : ?>
		<button 
			id="reply_<?php echo $comment_id; ?>"
			class="article-comment-info__reply"  
			onclick="show_reply_form(this)">
			Responder
		</button>
		<?php endif; ?>
		<span class="article-comment-info__date"><?php echo $args['date']; ?></span>
		<p class="article-comment-info__content"><?php echo $args['content']; ?></p>	
	</div>
</div>

<div class="article-reply" id="reply_form_<?php echo $comment_id; ?>">
	<span class="article-reply__title">Escribe tu respuesta.</span>
	<input 
		type="text"
		id="reply_author_<?php echo $comment_id; ?>" 
		class="article-reply__input" 
		placeholder="Nombre*">
	<input 
		type="email"
		id="reply_email_<?php echo $comment_id; ?>" 
		class="article-reply__input" 
		placeholder="Correo Electrónico*">
	<textarea 
		id="reply_content_<?php echo $comment_id; ?>"
		class="article-reply__content" 
		cols="30" rows="10" 
		placeholder="Respuesta*"></textarea>
	<p id="reply_error_msg_<?php echo $comment_id; ?>" class="comment-error-msg"></p>
	<div style="float: right; margin-top: 16px; margin-bottom: 32px;">
		<button 
			id="cancel_reply_<?php echo $comment_id; ?>"
			class="article-reply__cancel" 
			onclick="cancel_reply_form(this)">
			Cancelar
		</button>
		<button 
			id="send_reply_<?php echo $comment_id; ?>"
			class="article-reply__send"
			onclick="send_reply_form(this)">
			Responder
		</button>
	</div>
</div>

<script>

var extra_margin = parseInt('<?php echo $args['depth']; ?>') * 16;
var comment_id = '<?php echo $args['comment_id']; ?>';
var article_comment = document.getElementById('comment_'+comment_id);
article_comment.style.marginLeft = extra_margin+'px';
article_comment.style.marginTop = '8px';

jQuery(document).ready(function($) {

	let post_id = '<?php echo $args['post_id']; ?>';
	let parent_id = '<?php echo $args['parent_id']; ?>';
	let comment_id = '<?php echo $args['comment_id']; ?>';

    $('#send_reply_'+comment_id).click(function() {

		let reply_author = document.getElementById('reply_author_'+comment_id).value;
		let reply_email = document.getElementById('reply_email_'+comment_id).value;
		let reply_content = document.getElementById('reply_content_'+comment_id).value;

		let error_msg = '';
		error_msg += (reply_author.length == 0) ? 'Has olvidado escibir tu nombre.<br>' : '';
		error_msg += (reply_email.length == 0) ? 'Has olvidado escibir tu correo electr&oacute;nico.<br>' : '';
		error_msg += (reply_content.length == 0) ? 'El mensaje de respuesta está vacio.<br>' : '';

		if (error_msg.length > 0) {
			let reply_error_msg = document.getElementById('reply_error_msg_'+comment_id);
			reply_error_msg.innerHTML = error_msg;
			reply_error_msg.style.display = 'block';
			reply_error_msg.style.visibility = 'visible';
		} else {
			jQuery.ajax({
	            url: cart_ajax2.ajaxurl,
	            method: 'POST',
	            data: {
	            	'action': 'send_comment_by_ajax',
	            	'post_id': post_id,
	            	'parent': comment_id,
	            	'author': reply_author,
	            	'email': reply_email,
	            	'content': reply_content,
	            },
	            success: function(data) {
	            	//console.log('Success');
	            	//console.log(data);
	            	location.reload();
	            },
	            error: function(error) {
	            	//console.log(error);
	            },
	        });

	        reset_reply_form(comment_id);
		}
    });
});

</script>