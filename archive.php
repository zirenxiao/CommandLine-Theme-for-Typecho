<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="r-list-container action-bar-margin bbs-screen">
<span class="btn wide"><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ''); ?></span>
<div class="r-ent">
	<div class="nrec"><span class="hl f3"><?php $this->commentsNum('0', '1', '%d'); ?></span></div>
	<div class="title">
            <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
        </div>
<div class="meta">
<div class="author"><a href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></div>
<div class="date"><?php $this->date(); ?></div>
</div>
<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div>

<?php $this->need('footer.php'); ?>
