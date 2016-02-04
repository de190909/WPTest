<?php
/**
 * The template for displaying the footer.
 *
 * @package FlatBook
 */
?>

<?php if( ! is_page_template('page-builder.php')  && ! is_404() ) : ?> 

		</div><!--/.row-->

	</div><!--/.container-->	

</section><!--/#content-->

<?php endif; ?>


</div><!--/#site-content-->


<?php if( ! is_404() ) : 

	get_template_part('partials/site-footer'); 

endif; ?>

<?php wp_footer(); ?>

</body>
</html>