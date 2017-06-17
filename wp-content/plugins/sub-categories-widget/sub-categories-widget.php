<?php
/*
Plugin Name: Sub Categories Widget
Description: This Widget lists the sub-categories for a given category.
Author: BrokenCrust
Version: 1.5
Author URI: https://brokencrust.com/
Plugin URI: https://brokencrust.com/plugins/sub-categories-widget/
License: GPLv2 or later
Text Domain: sub-categories-widget
*/

/*  Copyright 2010-16 BrokenCrust

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class sub_categories_widget extends WP_Widget {

	function __construct() {
		parent::__construct('sub_categories_widget', __('Sub-categories', 'sub-categories-widget'), array('classname' => 'widget_sub_categories', 'description' => __('Lists the sub-categories for a given category.', 'sub-categories-widget')));
	}

	function widget($args, $instance) {

		extract($args, EXTR_SKIP);

		$category_id = empty($instance['category_id']) ? 1 : $instance['category_id'];
		$use_cat_title = empty($instance['use_cat_title']) ? 0 : $instance['use_cat_title'];
		$hide_empty_cats = empty($instance['hide_empty_cats']) ? 0 : $instance['hide_empty_cats'];
		$show_post_count = empty($instance['show_post_count']) ? 0 : $instance['show_post_count'];
		$title_link = empty($instance['title_link']) ? 0 : $instance['title_link'];
		$excluded = empty($instance['excluded']) ? '' : $instance['excluded'];
		$sub_subs = empty($instance['sub_subs']) ? 0 : $instance['sub_subs'];
		$dropdown = empty($instance['dropdown']) ? 0 : $instance['dropdown'];
		$post_is_parent = empty($instance['post_is_parent']) ? 0 : $instance['post_is_parent'];
		$dropdown_text = empty($instance['dropdown_text']) ? __('Select Sub-category', 'sub-categories-widget') : $instance['dropdown_text'];
		$list_order = empty($instance['list_order']) ? 0 : $instance['list_order'];

		if ($post_is_parent) {
			$category = get_the_category();
			$category_id = $category ? $category[0]->cat_ID : 1;
		}

		if ($use_cat_title) {
			$title = apply_filters('widget_title', get_cat_name($category_id), $instance, $this->id_base);
		} else {
			$title = apply_filters('widget_title', empty($instance['title'] ) ? __('Sub Categories', 'sub-categories-widget') : $instance['title'], $instance, $this->id_base);
		}

		$parent = $sub_subs == 1 ? 'child_of' : 'parent';

		$order = $list_order == 1 ? 'DESC' : 'ASC';

		$no_sub_text = '<p>'.__('No sub-categories', 'sub-categories-widget').'</p>';

		$subs = wp_list_categories(array($parent => $category_id, 'hide_empty' => $hide_empty_cats, 'show_count' => $show_post_count, 'exclude' => $excluded, 'title_li' => null, 'show_option_none' => '', 'echo' => 0, 'order' => $order));

		if (($post_is_parent == 0) || (($post_is_parent == 1) && (!empty($subs)))) {

			echo $before_widget;

			if ($title_link) {
				echo $before_title.'<a href="'.get_category_link($category_id).'">'.$title.'</a>'.$after_title;
			} else {
				echo $before_title.$title.$after_title;
			}

			if ($dropdown == 0)  {
				if (!empty($subs)) {
					echo '<ul>'.$subs.'</ul>';
				} else {
					echo $no_sub_text;
				}
			} else {
				$subs = wp_dropdown_categories(array('id' => 'sub-cat-'.$this->number, 'show_option_none' => $dropdown_text, $parent => $category_id, 'hide_empty' => $hide_empty_cats, 'show_count' => $show_post_count, 'exclude' => $excluded, 'hide_if_empty' => true, 'echo' => false, 'orderby' => 'NAME', 'order' => $order));
				if (!empty($subs)) {
					echo $subs;
					echo '<script type="text/javascript">
						/* <![CDATA[ */
						var dropdown'.$this->number.' = document.getElementById("sub-cat-'.$this->number.'");
						function onSubCatChange() {
						if (dropdown'.$this->number.'.options[dropdown'.$this->number.'.selectedIndex].value > 0) { location.href = "'.get_option('home').'?cat="+dropdown'.$this->number.'.options[dropdown'.$this->number.'.selectedIndex].value; }
						}
						dropdown'.$this->number.'.onchange = onSubCatChange;
						/* ]]> */
						</script>';
				} else {
					echo $no_sub_text;
				}
			}
			echo $after_widget;
		}
	}

	function update($new_instance, $old_instance) {

		$instance = $old_instance;

		$instance['title'] = sanitize_text_field($new_instance['title']);
		$instance['category_id'] = (int) $new_instance['category_id'];
		$instance['use_cat_title'] = (int) $new_instance['use_cat_title'];
		$instance['hide_empty_cats'] = (int) $new_instance['hide_empty_cats'];
		$instance['show_post_count'] = (int) $new_instance['show_post_count'];
		$instance['title_link'] = (int) $new_instance['title_link'];
		$instance['excluded'] = implode(',', (array) $new_instance['excluded']);
		$instance['sub_subs'] = (int) $new_instance['sub_subs'];
		$instance['dropdown'] = (int) $new_instance['dropdown'];
		$instance['post_is_parent'] = (int) $new_instance['post_is_parent'];
		$instance['dropdown_text'] = $new_instance['dropdown_text'];
		$instance['list_order'] = (int) $new_instance['list_order'];

		return $instance;
	}

	function form($instance) {

		$instance = wp_parse_args((array) $instance, array('title' => __('Sub Categories', 'sub-categories-widget'), 'category_id' => 1, 'use_cat_title' => 0, 'hide_empty_cats' => 0, 'show_post_count' => 1, 'title_link' => 0, 'excluded' => '', 'sub_subs' => 0, 'dropdown' => 0, 'post_is_parent' => 0, 'dropdown_text' => __('Select Sub-category', 'sub-categories-widget') ,'list_order' => 0 ));

		?>
			<p>
				<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'sub-categories-widget'); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($instance['title']) ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('category_id'); ?>"><?php _e('Parent category:', 'sub-categories-widget'); ?></label>
				<select class="widefat" id="<?php echo $this->get_field_id('category_id'); ?>" name="<?php echo $this->get_field_name('category_id'); ?>">
					<?php
						$categories = get_categories(array('hide_empty' => 0));
						foreach ($categories as $cat) {
							$selected = $cat->cat_ID == $instance['category_id'] ? ' selected="selected"' : '';
							echo '<option'.$selected.' value="'.$cat->cat_ID.'">'.$cat->cat_name.'</option>';
						}
					?>
				</select>
			</p>
				<input id="<?php echo $this->get_field_id('use_cat_title'); ?>" name="<?php echo $this->get_field_name('use_cat_title'); ?>" type="checkbox" value="1" <?php if ($instance['use_cat_title']) echo 'checked="checked"'; ?>/>
				<label for="<?php echo $this->get_field_id('use_cat_title'); ?>"><?php _e('Title is parent category', 'sub-categories-widget'); ?></label>
				<br>
				<input id="<?php echo $this->get_field_id('show_post_count'); ?>" name="<?php echo $this->get_field_name('show_post_count'); ?>" type="checkbox" value="1" <?php if ($instance['show_post_count']) echo 'checked="checked"'; ?>/>
				<label for="<?php echo $this->get_field_id('show_post_count'); ?>"><?php _e('Show post counts', 'sub-categories-widget'); ?></label>
				<br>
				<input id="<?php echo $this->get_field_id('hide_empty_cats'); ?>" name="<?php echo $this->get_field_name('hide_empty_cats'); ?>" type="checkbox" value="1" <?php if ($instance['hide_empty_cats']) echo 'checked="checked"'; ?>/>
				<label for="<?php echo $this->get_field_id('hide_empty_cats'); ?>"><?php _e('Hide empty sub-categories', 'sub-categories-widget'); ?></label>
				<br>
				<input id="<?php echo $this->get_field_id('title_link'); ?>" name="<?php echo $this->get_field_name('title_link'); ?>" type="checkbox" value="1" <?php if ($instance['title_link']) echo 'checked="checked"'; ?>/>
				<label for="<?php echo $this->get_field_id('title_link'); ?>"><?php _e('Add parent link to title', 'sub-categories-widget'); ?></label>
				<br>
				<input id="<?php echo $this->get_field_id('sub_subs'); ?>" name="<?php echo $this->get_field_name('sub_subs'); ?>" type="checkbox" value="1" <?php if ($instance['sub_subs']) echo 'checked="checked"'; ?>/>
				<label for="<?php echo $this->get_field_id('sub_subs'); ?>"><?php _e('Show full sub-category tree', 'sub-categories-widget'); ?></label>
				<br>
				<input id="<?php echo $this->get_field_id('list_order'); ?>" name="<?php echo $this->get_field_name('list_order'); ?>" type="checkbox" value="1" <?php if ($instance['list_order']) echo 'checked="checked"'; ?>/>
				<label for="<?php echo $this->get_field_id('list_order'); ?>"><?php _e('Display categories in reverse order', 'sub-categories-widget'); ?></label>
				<br>
				<input id="<?php echo $this->get_field_id('post_is_parent'); ?>" name="<?php echo $this->get_field_name('post_is_parent'); ?>" type="checkbox" value="1" <?php if ($instance['post_is_parent']) echo 'checked="checked"'; ?>/>
				<label for="<?php echo $this->get_field_id('post_is_parent'); ?>"><?php _e('Use first category of post as parent', 'sub-categories-widget'); ?></label>
			</p>
			<p>
				<input id="<?php echo $this->get_field_id('dropdown'); ?>" name="<?php echo $this->get_field_name('dropdown'); ?>" type="checkbox" value="1" <?php if ($instance['dropdown']) echo 'checked="checked"'; ?>/>
				<label for="<?php echo $this->get_field_id('dropdown'); ?>"><?php _e('Display as dropdown', 'sub-categories-widget'); ?></label>
				<br>
				<label for="<?php echo $this->get_field_id('dropdown_text'); ?>"><?php _e('Dropdown label:', 'sub-categories-widget'); ?></label>
				<input class="widefat" id="<?php echo $this->get_field_id('dropdown_text'); ?>" name="<?php echo $this->get_field_name('dropdown_text'); ?>" type="text" value="<?php echo esc_attr($instance['dropdown_text']) ?>" />
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('excluded'); ?>"> <?php _e('Categories to exclude:', 'sub-categories-widget') ?></label>
				<select class="widefat" multiple="multiple" id="<?php echo $this->get_field_id('excluded'); ?>" name="<?php echo $this->get_field_name('excluded'); ?>[]">
					<?php
						$categories = get_categories(array('hide_empty' => 0));
						$excluded = explode(',', esc_attr($instance['excluded']));
						foreach ($categories as $cat) {
							$selected = in_array($cat->cat_ID, $excluded) ? ' selected="selected"' : '';
							echo '<option'.$selected.' value="'.$cat->cat_ID.'">'.$cat->cat_name.'</option>';
						}
					?>
				</select>
			</p>
		<?php
	}
}

add_action('widgets_init', create_function('', 'return register_widget("sub_categories_widget");'));

load_plugin_textdomain('sub-categories-widget', false, basename(dirname(__FILE__)).'/languages');

?>