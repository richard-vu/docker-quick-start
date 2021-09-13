<?php
/**
 * @package ftravel-holiday-lite
 */
?>
<div class="container">
	<div class="row">
		<form role="search" method="get" class="form-inline"  action="<?php echo esc_url( home_url( '/','ftravel-holiday-lite' ) ); ?>">
			<div class="form-group">
				<input type="search" class="form-control" placeholder="<?php echo esc_attr_x('Search here...', 'placeholder', 'ftravel-holiday-lite' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
			</div><!--form-group-->
			<input type="submit" class="btn btn-default" value="<?php echo esc_attr_x('Search', 'submit button','ftravel-holiday-lite' ); ?>">
		</form>
	</div><!--row-->
</div><!--container-->