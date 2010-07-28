<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/main.css" />
<title><?php echo $this->pageTitle; ?></title>

<?php if($this->language == 'he' || $this->language == 'ar'): ?>
<!-- Load another CSS file to display the document in an RTL form -->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/rtl.css" />
<?php endif; ?>
</head>

<body class="page">

<div id="container">

  <?php echo $content; ?>

  <br class="clearfloat" />

  <div id="footer">
    <p>Copyright 2008—2010 &copy <a href="http://www.yiisoft.com">Yii Software LLC</a>
    All Rights Reserved |
    <a href="http://www.yiiframework.com/doc/terms/">Terms of Use</a><br/>
    <?php echo Yii::powered(); ?></p>
  </div><!-- footer -->
</div><!-- container -->
</body>

</html>