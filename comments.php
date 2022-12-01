<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php function threadedComments($comments, $options) {?>
<div class="push"><span class="hl push-tag">推</span><span class="f3 hl push-userid"><?php $comments->author(); ?></span><span class="f3 push-content">: <?php $comments->content(); ?></span><span class="push-ipdatetime"> <?php $comments->date('H:i d/m/Y'); ?>
</span></div><span class="comment-reply"><?php $comments->reply(); ?></span>
<?php if ($comments->children) { ?>
    <?php $comments->threadedComments($options); ?>
<?php } ?>

<?php } ?>
<?php $this->comments()->to($comments); ?>
---------------------------------
<?php if ($comments->have()): ?>
    <?php $comments->listComments(); ?>
    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
<?php endif; ?>

<div class="r-list-container action-bar-margin bbs-screen">
<div class="search-bar">
    <?php if ($this->allow('comment')): ?>
        <div id="<?php $this->respondId(); ?>" class="respond">
            <div class="cancel-comment-reply">
                <?php $comments->cancelReply(); ?>
            </div>
            <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
                <?php if ($this->user->hasLogin()): ?>
                    <?php _e('登录身份: '); ?><a
                            href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a
                            href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a>

                <?php else: ?>

                    <input class="query" type="text" name="author" id="author" class="text" placeholder="称呼" value="<?php $this->remember('author'); ?>" required/>

                <?php endif; ?>

                    <textarea rows="8" cols="50" name="text" id="textarea" class="query" placeholder="评论内容"
                              required><?php $this->remember('text'); ?></textarea>

                    <button class="query" type="submit" class="submit"><?php _e('提交评论'); ?></button>

            </form>
        </div>
    <?php else: ?>
        <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>
</div>
</div>
