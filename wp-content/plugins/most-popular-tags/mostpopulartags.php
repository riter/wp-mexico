<?php

/*

Plugin name: Most Popular Tags
Plugin URI: http://www.maxpagels.com/projects/mptags
Description: A configurable widget that displays your blog's most popular tags or categories
Version: 3.2.0
Author: Max Pagels
Author URI: http://www.maxpagels.com

Copyright 2009  Max Pagels  (email : max.pagels1@gmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

class Most_Popular_Tags extends WP_Widget {
  
/**
*
*/
function Most_Popular_Tags() {
  $widget_ops = array('classname' => 'widget_most_popular_tags',
                      'description' => 'Your most popular tags');
  $this->WP_Widget('mostpopulartags', 'Most Popular Tags', $widget_ops);
}

/**
*
*/
function widget($args, $instance) {
  extract($args);
  
  $title = apply_filters('widget_title', empty($instance['title']) ? ' ' : $instance['title']);
  $tagcount = empty($instance['tagcount']) ? 0 : $instance['tagcount'];
  $smallest = empty($instance['smallest']) ? 12 : $instance['smallest'];
  $largest = empty($instance['largest']) ? 12 : $instance['largest'];
  $unit = empty($instance['unit']) ? 'px' : $instance['unit'];
  $format = empty($instance['format']) ? 'flat' : $instance['format'];
  $orderby = empty($instance['orderby']) ? 'count' : $instance['orderby'];
  $order = empty($instance['order']) ? 'DESC' : $instance['order'];
  $taxonomy = empty($instance['taxonomy']) ? 'post_tag' : $instance['taxonomy'];
  $separator = empty($instance['separator']) ? ' ' : $instance['separator'];
   
  echo $before_widget;
  
  if($title) {
    echo $before_title . $title . $after_title;
  }

  wp_tag_cloud("smallest=$smallest".
               "&largest=$largest".
               "&number=$tagcount".
               "&orderby=$orderby".
               "&order=$order".
               "&unit=$unit".
               "&format=$format".
               "&taxonomy=$taxonomy".
               "&separator=$separator");
  
  echo $after_widget;
}

/**
*
*/
function update($new_instance, $old_instance) {
  $instance = $old_instance;
  $instance['title'] = $new_instance['title'];
  $instance['tagcount'] = intval($new_instance['tagcount']);
  $instance['smallest'] = floatval($new_instance['smallest']);
  $instance['largest'] = floatval($new_instance['largest']);
  $instance['unit'] = $new_instance['unit'];
  $instance['format'] = $new_instance['format'];
  $instance['orderby'] = $new_instance['orderby'];
  $instance['order'] = $new_instance['order'];
  $instance['taxonomy'] = $new_instance['taxonomy'];
  $instance['separator'] = $new_instance['separator'];
  
  return $instance;
}

/**
*
*/
function form($instance) {
  $instance = wp_parse_args((array)$instance, array('title' => 'Most Popular Tags',
                                                    'tagcount' => 0,
                                                    'smallest' => 12,
                                                    'largest' => 12,
                                                    'unit' => 'px',
                                                    'format' => 'flat',
                                                    'orderby' => 'count',
                                                    'order' => 'DESC',
                                                    'taxonomy' => 'post_tag',
                                                    'separator' => ''));
  
  $title = esc_html($instance['title']);
  $unit = $instance['unit'];
  $format = $instance['format'];
  $orderby = $instance['orderby'];
  $order = $instance['order'];
  $taxonomy = $instance['taxonomy'];
  $separator = esc_html($instance['separator']);
  
  $selected = "selected";
    switch($instance['unit']) {
        case "px":
            $s1 = $selected;
            break;
        case "pt":
            $s2 = $selected;
            break;      
        case "%":
            $s3 = $selected;
            break;  
        case "em":
            $s4 = $selected;
            break;
        case "rem":
            $s5 = $selected;
            break;  
        case "pc":
            $s6 = $selected;
            break;
        case "mm":
            $s7 = $selected;
            break;
        case "cm":
            $s8 = $selected;
            break;
        case "in":
            $s9 = $selected;
            break;
        case "ex":
            $s10 = $selected;
            break;           
    }
    
  if($instance['format'] == "flat") {
    $f1 = $selected;
    $sepcss = "";
  }
  else {
    $f2 = $selected;
    $sepcss = "display:none";
  }
    
  if($instance['orderby'] == "count")
    $ob1 = $selected;
  else
    $ob2 = $selected;

  if($instance['order'] == "ASC")
    $o1 = $selected;
  elseif($instance['order'] == "DESC")
    $o2 = $selected;
  else
    $o3 = $selected;

  if($instance['taxonomy'] == "post_tag")
    $t1 = $selected;
  elseif($instance['taxonomy'] == "category")
    $t2 = $selected;
  else
    $t3 = $selected;
  
  echo '<p>
          <label for="'.$this->get_field_name('title').'">Title: </label><br />
          <input type="text" id="'.$this->get_field_id('title').'" name="'.$this->get_field_name('title').'" value="'.$title.'"/>
        </p>
        <p>
        <p>
          <label for="'.$this->get_field_name('taxonomy').'">Show: </label><br />
          <select id="'.$this->get_field_id('taxonomy').'" name="'.$this->get_field_name('taxonomy').'">
            <option value="post_tag" '.$t1.'>Tags</option>
            <option value="category" '.$t2.'>Categories</option>
            <option value="link_category" '.$t3.'>Link categories</option>
          </select>
        </p>
        <p>
          <label for="'.$this->get_field_name('tagcount').'">Number of items to show: </label><br />
          <input type="text" id="'.$this->get_field_id('tagcount').'" name="'.$this->get_field_name('tagcount').'" value="'.$instance['tagcount'].'"/>
        </p>
        <p><small>0 shows all available items.</small></p>
        <p>
          <label for="'.$this->get_field_name('smallest').'">Smallest font size: </label><br />
          <input type="text" id="'.$this->get_field_id('smallest').'" name="'.$this->get_field_name('smallest').'" value="'.$instance['smallest'].'"/>
        </p>
        <p>
          <label for="'.$this->get_field_name('largest').'">Largest font size: </label><br />
          <input type="text" id="'.$this->get_field_id('largest').'" name="'.$this->get_field_name('largest').'" value="'.$instance['largest'].'"/>
        </p>
        <p>
          <label for="'.$this->get_field_name('unit').'">Unit: </label><br />
          <select id="'.$this->get_field_id('unit').'" name="'.$this->get_field_name('unit').'">
            <option value="px" '.$s1.'>Pixels (px)</option>
            <option value="pt" '.$s2.'>Points (pt)</option>
            <option value="%" '.$s3.'>Percent (%)</option>
            <option value="em" '.$s4.'>Ems (em)</option>
            <option value="rem" '.$s5.'>Root em (rem)</option>
            <option value="pc" '.$s6.'>Picas (pc)</option>
            <option value="mm" '.$s7.'>Millimeters (mm)</option>
            <option value="cm" '.$s8.'>Centimeters (cm)</option>
            <option value="in" '.$s9.'>Inches (in)</option>
            <option value="ex" '.$s10.'>x-height (ex)</option>
          </select>
        </p>
        <p><small>You can read more about CSS font units at <a href="http://www.w3schools.com/css/css_units.asp">W3Schools</a>.</small></p>
        <p>
          <label for="'.$this->get_field_name('format').'">Format: </label><br />
          <select id="'.$this->get_field_id('format').'" name="'.$this->get_field_name('format').'" onChange="if(document.getElementById(\''.$this->get_field_id('format').'\').selectedIndex == 0) {document.getElementById(\''.$this->get_field_id('separator').'mptags\').style.display = \'\';} else {document.getElementById(\''.$this->get_field_id('separator').'mptags\').style.display = \'none\';}">
            <option value="flat" '.$f1.'>Flat</option>
            <option value="list" '.$f2.'>List</option>
          </select>
        </p>
        <div id="'.$this->get_field_id('separator').'mptags" style="'.$sepcss.'">
        <p>
          <label for="'.$this->get_field_name('separator').'">Separator: </label><br />
          <input type="text" id="'.$this->get_field_id('separator').'" name="'.$this->get_field_name('separator').'" value="'.$separator.'"/>
        </p>
        <p><small>Leave this field empty for the default value (space).</small></p>
        </div>
        <p>
          <label for="'.$this->get_field_name('orderby').'">Order by: </label><br />
          <select id="'.$this->get_field_id('orderby').'" name="'.$this->get_field_name('orderby').'">
            <option value="count" '.$ob1.'>Number of posts</option>
            <option value="name" '.$ob2.'>Tag name</option>
          </select>
        </p>
        <p>
          <label for="'.$this->get_field_name('order').'">Order: </label><br />
          <select id="'.$this->get_field_id('order').'" name="'.$this->get_field_name('order').'">
            <option value="ASC" '.$o1.'>Ascending</option>
            <option value="DESC" '.$o2.'>Descending</option>
            <option value="RAND" '.$o3.'>Random</option>
          </select>
        </p>';
}

}

/**
*
*/
function Most_Popular_Tags_Init() {
  register_widget('Most_Popular_Tags');
}

add_action('widgets_init', 'Most_Popular_Tags_Init');

/**
* Add a shortcode for embedding a tag cloud in a post or page
*/

function tagcloud($atts) {
  $s = shortcode_atts( array('smallest'                  => 8, 
                             'largest'                   => 22,
                             'unit'                      => 'pt', 
                             'number'                    => 45,  
                             'format'                    => 'flat',
                             'separator'                 => "",
                             'orderby'                   => 'name', 
                             'order'                     => 'ASC',
                             'exclude'                   => null, 
                             'include'                   => null, 
                             'link'                      => 'view',
                             'echo'                      => false,
                             'taxonomy'                  => 'post_tag'), $atts );
  return wp_tag_cloud($s);
}


add_shortcode('tagcloud', 'tagcloud');

?>
