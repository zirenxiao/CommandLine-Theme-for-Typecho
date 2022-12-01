<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('bbs-common.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('bbs-base.css'); ?>" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('bbs-custom.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('pushstream.css'); ?>" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('bbs-print.css'); ?>" media="print">

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>

<div id="topbar-container">
	<div id="topbar" class="bbs-content">
		<a id="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a><?php if ($this->is('post')): ?> <span>&rsaquo;</span> <?php $this->category(); ?> <span>&rsaquo;</span> <a href="#"><?php $this->title();?></a><?php endif?> 
		<a class="right small" href="/about.html">關於我們</a>
		<a class="right small" href="/contact.html">聯絡資訊</a>
	</div>
</div>

    
    
