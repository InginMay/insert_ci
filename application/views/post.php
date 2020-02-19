<h2>Post Page</h2>

<ul>
	<?php foreach($todos as $row): ?>
	<li>
		<?php if($row->completed): ?>
			<strike><?= $row->description ?> </strike>
		<?php else : ?>
			<?= $row->description ?>
		<?php endif; ?>
	</li>
	<?php endforeach; ?>
</ul>