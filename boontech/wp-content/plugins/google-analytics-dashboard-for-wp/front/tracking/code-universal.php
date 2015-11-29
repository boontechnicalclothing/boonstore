<?php
/**
 * Author: Alin Marcu
 * Author URI: https://deconf.com
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

// Exit if accessed directly
if (! defined('ABSPATH'))
    exit();

$profile = GADWP_Tools::get_selected_profile($this->gadwp->config->options['ga_dash_profile_list'], $this->gadwp->config->options['ga_dash_tableid_jail']);
?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
<?php
$create_options = '{';
if ($this->gadwp->config->options['ga_speed_samplerate'] != 1) {
    $create_options .= "'siteSpeedSampleRate' : " . (int) $this->gadwp->config->options['ga_speed_samplerate'];
}
if ($this->gadwp->config->options['ga_crossdomain_tracking'] && $this->gadwp->config->options['ga_crossdomain_list'] != '') {
    if ($create_options != '{') {
        $create_options .= ', ';
    }
    $create_options .= "'allowLinker' : true";
}
$create_options .= '}';
?>
  ga('create', '<?php echo esc_html($profile[2]); ?>', 'auto'<?php	if ($create_options != '{}') {?>, <?php echo $create_options; }?>);
<?php if ($this->gadwp->config->options ['ga_crossdomain_tracking'] && $this->gadwp->config->options ['ga_crossdomain_list']!='') {?>
  ga('require', 'linker');
<?php
    $crossdomain_list = explode(',', $this->gadwp->config->options['ga_crossdomain_list']);
    $crossdomain_list = array_map('trim', $crossdomain_list);
    $crossdomain_list = strip_tags(implode("','", $crossdomain_list));
    ?>
  ga('linker:autoLink', ['<?php echo ($crossdomain_list)?>'] );
<?php
}
if ($this->gadwp->config->options['ga_dash_remarketing']) {
    ?>
  ga('require', 'displayfeatures');
<?php
}
if ($this->gadwp->config->options['ga_enhanced_links']) {
    ?>
  ga('require', 'linkid', 'linkid.js');
<?php
}
if ($this->gadwp->config->options['ga_author_dimindex'] && (is_single() || is_page())) {
    global $post;
    $author_id = $post->post_author;
    $author_name = get_the_author_meta('display_name', $author_id);
    ?>
  ga('set', 'dimension<?php echo (int)$this->gadwp->config->options ['ga_author_dimindex']; ?>', '<?php echo $author_name; ?>');
<?php
}
if ($this->gadwp->config->options['ga_pubyear_dimindex'] && is_single()) {
    global $post;
    $date = get_the_date('Y', $post->ID);
    ?>
  ga('set', 'dimension<?php echo (int)$this->gadwp->config->options ['ga_pubyear_dimindex']; ?>', '<?php echo $date; ?>');
<?php
}
if ($this->gadwp->config->options['ga_category_dimindex'] && is_category()) {
    ?>
  ga('set', 'dimension<?php echo (int)$this->gadwp->config->options ['ga_category_dimindex']; ?>', '<?php echo single_tag_title(); ?>');
<?php
}
if ($this->gadwp->config->options['ga_category_dimindex'] && is_single()) {
    global $post;
    $categories = get_the_category($post->ID);
    foreach ($categories as $category) {
        ?>
  ga('set', 'dimension<?php echo (int)$this->gadwp->config->options ['ga_category_dimindex']; ?>', '<?php echo $category->name; ?>');
<?php
        break;
    }
}
if ($this->gadwp->config->options['ga_user_dimindex']) {
    ?>
  ga('set', 'dimension<?php echo (int)$this->gadwp->config->options ['ga_user_dimindex']; ?>', '<?php echo is_user_logged_in()?'registered':'guest'; ?>');
<?php
}
do_action('ga_dash_addtrackingcode');
if ($this->gadwp->config->options['ga_dash_anonim']) {
    ?>  ga('send', 'pageview', {'anonymizeIp': true});<?php } else {?>  ga('send', 'pageview');
<?php
}
if ($this->gadwp->config->options['ga_dash_adsense']) {
    ?>

  window.google_analytics_uacct = "<?php echo esc_html($profile[2]); ?>";
<?php }?>
</script>