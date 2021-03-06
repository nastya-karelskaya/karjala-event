<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package karjala-event
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="mkdf-post-content">
		<div class="mkdf-post-text">
			<div class="mkdf-post-text-inner">
			<?php
			

				if ( 'post' === get_post_type() ) :
					?>
					<div class="mkdf-post-info-top">
						<div class="mkdf-post-info-date entry-date published updated">
							<!-- <span aria-hidden="true" class="mkdf-icon-font-elegant icon_calendar "></span> <a href="">
								October 11, 2019 </a>
							<meta itemprop="interactionCount" content="UserComments: 3"> -->
							<!-- <span aria-hidden="true" class="mkdf-icon-font-elegant icon_calendar"></span> -->
							<?php
								// the_date();
								karjala_event_posted_on();
								karjala_event_posted_by();
							?>
						</div>
					</div>
			<?php endif; ?>
				
				<div class="mkdf-post-text-main">
					<?php the_content(); ?>
				</div>

				<?php
					$post_tags = get_the_tags();

					$post_categories = get_categories();
			

					if( $post_tags || $post_categories){
				?>

				<div class="mkdf-post-info-bottom clearfix">
					<div class="mkdf-post-info-bottom-left">
						<div class="mkdf-tags-holder">
							<div class="mkdf-tags">
								<?php
									if( $post_tags ):
										foreach( $post_tags as $post_tag ){
									
											$post_tag_link = get_tag_link($post_tag->term_id);
											$post_tag_name = $post_tag->name; 

								?>
								<!-- <a href="" rel="tag">Adventure</a>, 
								<a href="" rel="tag">Explore</a>, <a href="" rel="tag">Guides</a>  -->
								<a href="<?php echo $post_tag_link;?>">
									<?php echo $post_tag_name;?>
								</a>  

								<?php 
									
										}
									endif;
								?>

							<?php
									if( $post_categories ):
										foreach( $post_categories as $post_category ){
									
											$post_category_link = get_category_link($post_category->term_id);
											$post_category_name = $post_category->name; 

								?>
								<!-- <a href="" rel="tag">Adventure</a>, 
								<a href="" rel="tag">Explore</a>, <a href="" rel="tag">Guides</a>  -->
								<a href="<?php echo $post_category_link;?>">
									<?php echo $post_category_name;?>
								</a>  

								<?php 
									
										}
									endif;
								?>

								
							</div>
						</div>
					</div>
					<!-- TODO SHARE -->
					<div class="mkdf-post-info-bottom-right">
						<div class="mkdf-blog-share">
							<div class="mkdf-social-share-holder mkdf-list">
								
								<ul>
									<li class="">
										<a href="#" onclick="Share.vkontakte('<?php echo get_the_permalink(); ?>','<?php echo get_the_title(); ?>','<?php echo get_the_post_thumbnail_url(); ?>','<?php echo get_the_excerpt(); ?>')"> 
											<span class="mkdf-social-network-icon vk">
												<img src="<?php echo get_template_directory_uri() . '/img/vk.svg'; ?>" alt="Vk">
											</span>	
										</a>								
									</li>
									<li class="">
										<a onclick="Share.facebook('<?php echo get_the_permalink(); ?>')"> 
											<span class="mkdf-social-network-icon social_facebook"></span>
										</a>									
									</li>							
									<li class="">
										<a onclick="Share.twitter('<?php echo get_the_permalink(); ?>','<?php echo get_the_title(); ?>')"> 
											<span class="mkdf-social-network-icon vk">
												<img src="<?php echo get_template_directory_uri() . '/img/twitter.svg'; ?>" alt="Twitter">
											</span>
										</a>
									</li>
									<li class="">
										<a onclick="Share.pinterest('<?php echo get_the_permalink(); ?>','<?php echo get_the_title(); ?>','<?php echo get_the_post_thumbnail_url(); ?>','<?php echo get_the_excerpt(); ?>')">
											<span class="mkdf-social-network-icon social_pinterest"></span>
										</a>
									</li>
								</ul>

								<script>
									/*** SOCIAL MEDIA SHARING  */

									Share = {
										vkontakte: function(purl, ptitle, pimg, text) {
											url  = 'http://vkontakte.ru/share.php?';
											url += 'url='          + encodeURIComponent(purl);
											url += '&title='       + encodeURIComponent(ptitle);
											url += '&description=' + encodeURIComponent(text);
											url += '&image='       + encodeURIComponent(pimg);
											url += '&noparse=true';
											Share.popup(url);
										},
										
										facebook: function(purl) {
											url  = 'http://www.facebook.com/sharer.php?';
											url += 'u='       + encodeURIComponent(purl);
											Share.popup(url);
										},

										twitter: function(purl, ptitle) {
											url  = 'http://twitter.com/share?';
											url += 'text='      + encodeURIComponent(ptitle);
											url += '&url='      + encodeURIComponent(purl);
											url += '&counturl=' + encodeURIComponent(purl);
											Share.popup(url);
										},
										
										pinterest: function(purl, ptitle, pimg, text) {
											url  = 'https://pinterest.com/pin/create/button/?';
											url += 'url='          + encodeURIComponent(purl);
											url += '&title='       + encodeURIComponent(ptitle);
											url += '&description=' + encodeURIComponent(text);
											url += '&media='    + encodeURIComponent(pimg);
											Share.popup(url)
										},

										popup: function(url) {
											window.open(url,'','toolbar=0,status=0,width=626,height=436');
										}
									};

								</script>
								<!-- <p class="mkdf-social-title">Share</p> -->
							</div>
						</div>
					</div>
				</div>

				<?php 
						
					}
				?>

			</div>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->



