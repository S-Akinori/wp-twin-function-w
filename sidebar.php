<?php 
$categories = get_categories();
?>
<aside>
  <h4 class="p-post__title">カテゴリー</h4>
  <ul class="c-list">
    <?php foreach($categories as $category): ?>
    <li class="c-list__item"><a href="<?= home_url('category/'.$category->slug); ?>"><?= $category->name ; ?></a></li>
    <?php endforeach; ?>
  </ul>
</aside>