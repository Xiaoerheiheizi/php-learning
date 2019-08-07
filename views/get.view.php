<html>
<body>
<header>
	<h1>
		<?php echo $greeting; ?>
	</h1>

	<ul>
		<?php
		foreach ($array as $item) {
			echo "<li>$item</li>";
		}
		?>

		<?php foreach ($array as $name): ?>
			<li>
				<?= $name ?>
			</li>
		<?php endforeach ?>


		<?php foreach ($person as $key => $feature): ?>
			<li>
				<strong>
					<?= $key ?>
				</strong>
				<?= $feature ?>
			</li>
		<?php endforeach ?>


		<?php foreach ($task as $key => $value): ?>
			<li>
				<strong>
					<?= $key ?>
				</strong>
				<?= $key == 'completed' ? ($value ? 'Completed' : 'Umcompleted') : $value ?>
			</li>
		<?php endforeach ?>

	</ul>
</header>
</body>
</html>
