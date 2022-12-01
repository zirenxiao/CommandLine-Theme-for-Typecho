<?php
/**
 * CommandLine theme for Typecho
 *
 * @package CommandLine Theme
 * @author Ziren
 * @version 1.0
 * @link https://ziren.live
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

<div class="r-list-container action-bar-margin bbs-screen">
    <div class="main-container">
        <div class="r-ent">
            <?php while($this->next()): ?>
            
            <div class="meta">
                [<?php $this->category(','); ?>]
                <div class="title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></div>
                <div class="date"><?php $this->date('Y/m/j'); ?></div>
            </div>
            <?php endwhile; ?>
        </div>
        <br>
        <?php $this->pageNav('上一页', '下一页', 5, '...'); ?>
        <br>
    </div>
</div>

<?php $this->need('footer.php'); ?>
