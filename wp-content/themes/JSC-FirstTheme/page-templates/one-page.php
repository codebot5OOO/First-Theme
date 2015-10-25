<?php
/* 
	Template Name: One-Page Display
*/

get_header();
// define how pages will display
$args = array(
	'sort_order' => 'ASC',
	'sort_column' => 'menu_order', //post_title
	'hierarchical' => 1,
	'exclude' => '',
	'child_of' => 0,
	'parent' => -1,
	'exclude_tree' => '',
	'number' => '',
	'offset' => 0,
	'post_type' => 'page',
	'post_status' => 'publish'
);
$pages = get_pages($args);

$classes = array(

'home'      => 'one dark cover',
'portfolio' => 'two',
'about-me'  => 'three',
'contact'  =>  'four',

);

//start loop
foreach ($pages as $page_data) {
    $content = apply_filters('the_content', $page_data->post_content);
    $title = $page_data->post_title;
    $slug = $page_data->post_name;
?>

	<!-- Main -->
	<div id="main">
		<section class="<?php echo $classes[$slug] ?>">
			<div class="container">

				<header>
						<h2 class="alt"><?php echo "$title" ?></h2>
						<p><?php echo "$content" ?></p>
				</header>

			</div>
		</section>
	</div>


<?php
}
get_footer();
?>

