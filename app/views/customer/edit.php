<?php $this->get('user'); ?>
<section class="edit_customer_section">

	<form class="edit_customer_form" method="post">
	
		<span>Редагування профілю</span>
		<input type="text" name="first_name" value="<?php echo $user['first_name']?>" placeholder="Ім'я"/>
		<input type="text" name="last_name" value="<?php echo $user['last_name']?>" placeholder="Прізвище"/>
		<input type="text" name="telephone" value="<?php echo $user['telephone']?>" placeholder="Телефон"/>
		<input type="text" name="email" value="<?php echo $user['email']?>"  placeholder="Email"/>
		<input type="text" name="city" value="<?php echo $user['city']?>"  placeholder="Місце проживання"/>
		<input type="text" name="password" placeholder="Пароль"/>
		<input type="text" name="new_password" placeholder="Введіть новий пароль або залишіть це поле пустим"/>
		<h4>Результат: <?php echo $this->get('message'); ?></h4>
		<div>
		<button type="submit" name="action" value="edit">Редагувати профіль</button>
		<button type="submit" name="action" value="delete">Видалити профіль</button>
		</div>
		
	</form>
	
</section>