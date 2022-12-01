<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="main-container">
<div id="main-content" class="bbs-screen bbs-content"><div class="article-metaline"><span class="article-meta-tag">作者</span><span class="article-meta-value"><?php $this->author(); ?></span></div><div class="article-metaline-right"><span class="article-meta-tag">分類</span><span class="article-meta-value"><?php $this->category(); ?></span></div><div class="article-metaline"><span class="article-meta-tag">標題</span><span class="article-meta-value"><?php $this->title() ?></span></div><div class="article-metaline"><span class="article-meta-tag">時間</span><span class="article-meta-value"><?php $this->date('Y/m/d'); ?></span></div>

<?php $this->content(); ?>
<?php $this->need('comments.php'); ?>

</div>
</div>

<?php $this->need('footer.php'); ?>
