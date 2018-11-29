<?php
/*
Plugin Name: Github Page to WP
Plugin URI: https://mikecoder.cn
Description: Yet, just another plugin for wordpress to sync your blog with github.
Version: 1.0
Author: MikeCoder
Author URI: https://github.com/MikeCoder
 */
?>

<?php
/*  Copyright 2018 MikeCoder (mike@mikecoder.cn)
    Permission is hereby granted, free of charge, to any person obtaining
    a copy of this software and associated documentation files (the "Software"),
    to deal in the Software without restriction, including without limitation
    the rights to use, copy, modify, merge, publish, distribute, sublicense,
    and/or sell copies of the Software, and to permit persons to whom the
    Software is furnished to do so, subject to the following conditions:

    The above copyright notice and this permission notice shall be included
    in all copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
    EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
    OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
    IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
    DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
    TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE
    OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
?>

<?php

add_action('post_submitbox_misc_actions', 'sync_with_github_misc_actions');

function sync_with_github_misc_actions($post){
?>
<div class="misc-pub-section wp_github_sync">
<script src="<?php echo plugins_url('wp-github-sync/github-page-2-wp.js'); ?>"></script>
<label for="wp_github_url">Sync Github URL:</label><br/>
    <Input id="wp_github_url_txt" name="wp_github_url"/>
    <a id="wp_github_url_btn" onclick="wp_github_sync()" class="button button-primary button-large" value="Sync" name="sync"/>Sync</a>
</div>
<?php
}
?>

