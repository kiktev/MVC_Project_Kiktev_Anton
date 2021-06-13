<?php if(isset($_SESSION['id'])):?>
<h3>Hello, <?php echo $this->get('user_name');?></h3>
<?php else: ?>
<h3>Hello, unauthorized user!</h3>
<?php endif; ?>
<?php echo "hello"; ?>


