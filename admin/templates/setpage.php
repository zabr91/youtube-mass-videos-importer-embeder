<div class="wrap">
	<h2><?php echo get_admin_page_title() ?></h2>

	<form action="options.php" method="POST">
			<?php
				settings_fields( 'YMIE' );  
				do_settings_sections( 'YMIE' );
				submit_button();
			?>
		</form>
	<hr />
    <h3>Таблица поиска видео</h3>
	 <a href="?page=<?= $_GET['page'] ?>&action=create"  class="button button-primary">Создать новую задачу</a>
	
	<?php
	echo '<form action="" method="POST">';
	if($GLOBALS['Example_List_Table']) $GLOBALS['Example_List_Table']->display();
	echo '</form>';
	?>
</div>