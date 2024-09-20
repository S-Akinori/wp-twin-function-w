<?php
  //会社情報追加
  add_action( 'admin_menu', 'add_company_settings_menu' );
  function add_company_settings_menu() {
    add_menu_page( '会社情報', '会社情報', 'manage_options', 'company_settings', 'company_settings_page', '' );
    add_action( 'admin_init', 'register_company_setting' );
  }
  function company_settings_page() {
?>
<div class="wrap">
  <?php
  if (isset($_GET['settings-updated'])) :
    if (true == $_GET['settings-updated']) :
      echo '<div id="settings_updated" class="updated notice is-dismissible"><p><strong>設定を保存しました。</strong></p></div>';
    endif;
  endif;
  ?>
  <form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
    <?php
      settings_fields('company_settings_group');
      do_settings_sections('company_settings_group');
      submit_button();
    ?>
    <?php for($i=0; $i<1; $i++) : ?>
    <h2>会社情報<?= $i+1 ?></h2>
    <table class="form-table setting-table">
      <tr>
        <th><label for="company<?= $i?>_name">会社名</label></th>
        <td colspan="2"><input name="company<?= $i?>_name" type="text" id="company<?= $i?>_name" value="<?php form_option("company{$i}_name" ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="company<?= $i?>_logo">ロゴ</label></th>
        <td><?php generate_upload_image_tag("company{$i}_logo", get_option("company{$i}_logo"));?></td>
      </tr>
      <tr>
        <th scope="row"><label for="company<?= $i?>_logo">代表写真</label></th>
        <td><?php generate_upload_image_tag("company{$i}_CEO_image", get_option("company{$i}_CEO_image"));?></td>
      </tr>
      <tr>
        <th scope="row"><label for="company<?= $i?>_map">Google Map(埋め込みコードを入力)</label></th>
        <td><textarea name="company<?= $i?>_map" type="text" id="company<?= $i?>_map" class="regular-text"><?php form_option( "company{$i}_map" ); ?></textarea></td>
      </tr>
      <tr>
        <th><label for="company<?= $i?>_CEO_title">代表ラベル</label></th>
        <td colspan="2"><input name="company<?= $i?>_CEO_title" type="text" id="company<?= $i?>_CEO_title" value="<?php form_option( "company{$i}_CEO_title" ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="company<?= $i?>_CEO">代表</label></th>
        <td><input name="company<?= $i?>_CEO" type="text" id="company<?= $i?>_CEO" value="<?php form_option( "company{$i}_CEO" ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th><label for="company<?= $i?>_tel_title">電話番号ラベル</label></th>
        <td colspan="2"><input name="company<?= $i?>_tel_title" type="text" id="company<?= $i?>_tel_title" value="<?php form_option( "company{$i}_tel_title" ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="company<?= $i?>_tel">電話番号</label></th>
        <td><input name="company<?= $i?>_tel" type="text" id="company<?= $i?>_tel" value="<?php form_option( "company{$i}_tel" ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th><label for="company<?= $i?>_email_title">メールアドレスラベル</label></th>
        <td colspan="2"><input name="company<?= $i?>_email_title" type="text" id="company<?= $i?>_email_title" value="<?php form_option( "company{$i}_email_title" ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="company<?= $i?>_email">メールアドレス</label></th>
        <td><input name="company<?= $i?>_email" type="text" id="company<?= $i?>_email" value="<?php form_option( "company{$i}_email" ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th><label for="company<?= $i?>_hp_title">ホームページラベル</label></th>
        <td colspan="2"><input name="company<?= $i?>_hp_title" type="text" id="company<?= $i?>_hp_title" value="<?php form_option( "company{$i}_hp_title" ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="company<?= $i?>_hp">ホームページ</label></th>
        <td><input name="company<?= $i?>_hp" type="text" id="company<?= $i?>_hp" value="<?php form_option( "company{$i}_hp" ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th><label for="company<?= $i?>_tel_title">営業時間ラベル</label></th>
        <td colspan="2"><input name="company<?= $i?>_hours_title" type="text" id="company<?= $i?>_hours_title" value="<?php form_option( "company{$i}_hours_title" ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="company<?= $i?>_hours">営業時間</label></th>
        <td><textarea name="company<?= $i?>_hours" id="company<?= $i?>_hours" class="regular-text"><?php form_option( "company{$i}_hours" ); ?></textarea></td>
      </tr>
      <tr>
        <th><label for="company<?= $i?>_tel_title">住所ラベル</label></th>
        <td colspan="2"><input name="company<?= $i?>_address_title" type="text" id="company<?= $i?>_address_title" value="<?php form_option("company{$i}_address_title"); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="company<?= $i?>_address">住所</label></th>
        <td><textarea name="company<?= $i?>_address" id="company<?= $i?>_address" class="regular-text"><?php form_option("company{$i}_address"); ?></textarea></td>
      </tr>
      <tr>
        <th><label for="company<?= $i?>_tel_title">定休日ラベル</label></th>
        <td colspan="2"><input name="company<?= $i?>_dayoff_title" type="text" id="company<?= $i?>_dayoff_title" value="<?php form_option( "company{$i}_dayoff_title" ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th scope="row"><label for="company<?= $i?>_dayoff">定休日</label></th>
        <td><input name="company<?= $i?>_dayoff" type="text" id="company<?= $i?>_dayoff" value="<?php form_option( "company{$i}_dayoff" ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th><label for="company<?= $i?>_info_sub">備考</label></th>
        <td colspan="2">
        <?php            
          $content = get_option("company{$i}_info_sub");
          $editor_id = "company{$i}_info_sub";
          $settings = array(
            'textarea_rows'	=> 5,
            'wpautop' => false,
            'textarea_name' => "company{$i}_info_sub"
          );
          wp_editor($content, $editor_id, $settings);
        ?> 
        </td>
      </tr>
    </table>
    <?php endfor; ?>
    <?php submit_button(); ?>
  </form>
</div>
<?php
  }
  function register_company_setting() {
    for($i=0; $i<1; $i++) {
      register_setting("company_settings_group", "company{$i}_name");
      register_setting("company_settings_group", "company{$i}_logo");
      register_setting("company_settings_group", "company{$i}_CEO_image");
      register_setting("company_settings_group", "company{$i}_tel_title");
      register_setting("company_settings_group", "company{$i}_tel");
      register_setting("company_settings_group", "company{$i}_CEO_title");
      register_setting("company_settings_group", "company{$i}_CEO");
      register_setting("company_settings_group", "company{$i}_email_title");
      register_setting("company_settings_group", "company{$i}_email");
      register_setting("company_settings_group", "company{$i}_hp_title");
      register_setting("company_settings_group", "company{$i}_hp");
      register_setting("company_settings_group", "company{$i}_hours_title");
      register_setting("company_settings_group", "company{$i}_hours");
      register_setting("company_settings_group", "company{$i}_address_title");
      register_setting("company_settings_group", "company{$i}_address");
      register_setting("company_settings_group", "company{$i}_dayoff_title");
      register_setting("company_settings_group", "company{$i}_dayoff");
      register_setting("company_settings_group", "company{$i}_map");
      register_setting("company_settings_group", "company{$i}_info_sub");
    }
  }
?>