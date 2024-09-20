<?php
//トップページ設定追加
add_action( 'admin_menu', 'add_site_settings_menu' );
function add_site_settings_menu() {
	add_menu_page( 'トップページ設定', 'トップページ設定', 'manage_options', 'site_settings', 'site_settings_page', '' );
	add_action( 'admin_init', 'register_custom_setting' );
}
function site_settings_page() {
?>
<div class="wrap">
<h2>トップページ設定</h2>
<?php
  if (isset($_GET['settings-updated'])) :
    if (true == $_GET['settings-updated']) :
      echo '<div id="settings_updated" class="updated notice is-dismissible"><p><strong>設定を保存しました。</strong></p></div>';
    endif;
  endif;
  ?>
<form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
<?php
settings_fields('top-settings');
do_settings_sections('top-settings');
submit_button();
?>
<table class="form-table setting-table">
	<tr>
		<th><label for="top_fv_text">キャッチコピー</label></th>
		<td colspan="2"><input name="top_fv_text" type="text" id="top_fv_text" value="<?php form_option( 'top_fv_text' ); ?>" class="regular-text" /></td>
	</tr>
	<!-- 
	<tr>
		<th scope="row"><label for="theme_option_head_script">head内にスクリプトを挿入する</label></th>
		<td><p><label><input name="theme_option_head_script" type="checkbox" id="theme_option_head_script" value="1" <?php checked( 1, get_option( 'theme_option_head_script' ) ); ?> />する</label></p>
			<textarea name="theme_option_head_script_source" id="theme_option_head_script_source" class="large-text code" rows="12"><?php echo esc_textarea( get_option( 'theme_option_head_script_source' ) ); ?></textarea></td>
	</tr> -->
	<tr>
		<th scope="row"><label for="top_fv_image">トップ画像</label></th>
		<td><?php generate_upload_image_tag('top_fv_image', get_option('top_fv_image'));?></td>
	</tr>
  <tr>
		<th><label for="top_message_en">メッセージ英語</label></th>
		<td colspan="2"><input name="top_message_en" type="text" id="top_message_en" value="<?php form_option('top_message_en'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_message_title">メッセージタイトル</label></th>
		<td colspan="2"><input name="top_message_title" type="text" id="top_message_title" value="<?php form_option('top_message_title'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_message_text">メッセージテキスト</label></th>
		<td colspan="2">
    <?php            
      $content = get_option('top_message_text');
      $editor_id = 'top_message_text';
      $settings = array(
        'textarea_rows'	=> 5,
        'wpautop' => false
      );
      wp_editor( $content, $editor_id, $settings );
    ?> 
    </td>
	</tr>
  <tr>
		<th><label for="top_service_en">サービス英語</label></th>
		<td colspan="2"><input name="top_service_en" type="text" id="top_service_en" value="<?php form_option('top_service_en'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_service_title">サービスタイトル</label></th>
		<td colspan="2"><input name="top_service_title" type="text" id="top_service_title" value="<?php form_option('top_service_title'); ?>" class="regular-text" /></td>
	</tr>
  <?php for($i=0; $i < 3; $i++): ?>
  <tr>
    <th><label for="top_services[<?= $i;?>][title]">サービス<?= $i+1;?> タイトル</label></th>
    <td colspan="2"><input name="top_services[<?= $i;?>][title]" type="text" id="top_services[<?= $i;?>][title]" value="<?= get_option('top_services')[$i]['title']; ?>" class="regular-text" /></td>
  </tr>
  <tr>
    <th><label for="top_services<?= $i;?>_text">サービス<?= $i+1;?> テキスト</label></th>
    <td colspan="2">
      <?php            
        $content = get_option('top_services')[$i]['text'];
        $editor_id = 'top_services'.$i.'_text';
        $settings = array(
          'textarea_rows'	=> 5,
          'wpautop' => false,
          'textarea_name' => 'top_services['.$i.'][text]'
        );
        wp_editor( $content, $editor_id, $settings );
      ?> 
    </td>
  </tr>
  <tr>
    <th scope="row"><label for="top_services[<?= $i;?>][image]">サービス<?= $i+1;?> 画像</label></th>
    <td><?php generate_upload_image_tag('top_services['.$i.'][image]', get_option('top_services')[$i]['image']);?></td>
  </tr>
  <tr>
    <th><label for="top_services[<?= $i;?>][link]">サービス<?= $i+1;?> URL</label></th>
    <td colspan="2"><input name="top_services[<?= $i;?>][link]" type="text" id="top_services[<?= $i;?>][link]" value="<?= get_option('top_services')[$i]['link']; ?>" class="regular-text" /></td>
  </tr>
  <tr>
    <th><label for="top_services[<?= $i;?>][link_text]">サービス<?= $i+1;?> リンクテキスト</label></th>
    <td colspan="2"><input name="top_services[<?= $i;?>][link_text]" type="text" id="top_services[<?= $i;?>][link_text]" value="<?= get_option('top_services')[$i]['link_text']; ?>" class="regular-text" /></td>
  </tr>
  <?php endfor; ?>
  <tr>
		<th><label for="top_goods_en">日用雑貨英語</label></th>
		<td colspan="2"><input name="top_goods_en" type="text" id="top_goods_en" value="<?php form_option('top_goods_en'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_goods_title">日用雑貨タイトル</label></th>
		<td colspan="2"><input name="top_goods_title" type="text" id="top_goods_title" value="<?php form_option('top_goods_title'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_goods_text">日用雑貨テキスト</label></th>
		<td colspan="2">
      <?php            
        $content = get_option('top_goods_text');
        $editor_id = 'top_goods_text';
        $settings = array(
          'textarea_rows'	=> 5,
          'wpautop' => false,
          'textarea_name' => 'top_goods_text'
        );
        wp_editor( $content, $editor_id, $settings );
      ?> 
    </td>
	</tr>
  <tr>
		<th><label for="top_goods_link">日用雑貨リンク</label></th>
		<td colspan="2"><input name="top_goods_link" type="text" id="top_goods_link" value="<?php form_option('top_item_link'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_goods_linktext">日用雑貨リンクテキスト</label></th>
		<td colspan="2"><input name="top_goods_linktext" type="text" id="top_goods_linktext" value="<?php form_option('top_goods_linktext'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_beauty_en">エステ英語</label></th>
		<td colspan="2"><input name="top_beauty_en" type="text" id="top_beauty_en" value="<?php form_option('top_beauty_en'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_beauty_title">エステタイトル</label></th>
		<td colspan="2"><input name="top_beauty_title" type="text" id="top_beauty_title" value="<?php form_option('top_beauty_title'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_beauty_text">エステテキスト</label></th>
		<td colspan="2">
      <?php            
        $content = get_option('top_beauty_text');
        $editor_id = 'top_beauty_text';
        $settings = array(
          'textarea_rows'	=> 5,
          'wpautop' => false
        );
        wp_editor( $content, $editor_id, $settings );
      ?> 
    </td>
	</tr>
  <tr>
		<th><label for="top_beauty_link">エステリンク</label></th>
		<td colspan="2"><input name="top_beauty_link" type="text" id="top_beauty_link" value="<?php form_option('top_beauty_link'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_beauty_linktext">エステリンクテキスト</label></th>
		<td colspan="2"><input name="top_beauty_linktext" type="text" id="top_beauty_linktext" value="<?php form_option('top_beauty_linktext'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_news_en">ニュース英語</label></th>
		<td colspan="2"><input name="top_news_en" type="text" id="top_news_en" value="<?php form_option('top_news_en'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_news_title">ニュースタイトル</label></th>
		<td colspan="2"><input name="top_news_title" type="text" id="top_news_title" value="<?php form_option('top_news_title'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_company_en">会社情報英語</label></th>
		<td colspan="2"><input name="top_company_en" type="text" id="top_company_en" value="<?php form_option('top_company_en'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_company_title">会社情報タイトル</label></th>
		<td colspan="2"><input name="top_company_title" type="text" id="top_company_title" value="<?php form_option('top_company_title'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_contact_en">お問い合わせ英語</label></th>
		<td colspan="2"><input name="top_contact_en" type="text" id="top_contact_en" value="<?php form_option('top_contact_en'); ?>" class="regular-text" /></td>
	</tr>
  <tr>
		<th><label for="top_contact_title">お問い合わせタイトル</label></th>
		<td colspan="2"><input name="top_contact_title" type="text" id="top_contact_title" value="<?php form_option('top_contact_title'); ?>" class="regular-text" /></td>
	</tr>
</table>
<?php submit_button(); ?>
</form>
</div>
<?php
}
function register_custom_setting() {
	register_setting('top-settings', 'top_fv_text');
	register_setting('top-settings', 'top_fv_image');
	register_setting('top-settings', 'top_message_en');
	register_setting('top-settings', 'top_message_title');
	register_setting('top-settings', 'top_message_text');
	register_setting('top-settings', 'top_service_en');
	register_setting('top-settings', 'top_service_title');
	register_setting('top-settings', 'top_services');
  register_setting('top-settings', 'top_goods_en');
	register_setting('top-settings', 'top_goods_title');
	register_setting('top-settings', 'top_goods_text');
	register_setting('top-settings', 'top_goods_link');
	register_setting('top-settings', 'top_goods_linktext');
	register_setting('top-settings', 'top_beauty_en');
	register_setting('top-settings', 'top_beauty_title');
	register_setting('top-settings', 'top_beauty_text');
	register_setting('top-settings', 'top_beauty_link');
	register_setting('top-settings', 'top_beauty_linktext');
  register_setting('top-settings', 'top_news_en');
  register_setting('top-settings', 'top_news_title');
  register_setting('top-settings', 'top_company_en');
  register_setting('top-settings', 'top_company_title');
  register_setting('top-settings', 'top_contact_en');
  register_setting('top-settings', 'top_contact_title');
}
