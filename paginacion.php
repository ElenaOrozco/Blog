<?php $numero_paginas = numero_paginas($blog_config['post_por_pagina'], $conexion); ?>

<section class="paginacion">
	<ul>
		<!-- si estamos en pagina 1 -->
		<?php if (pagina_actual() === 1): ?>
			<li class="disabled">&laquo;</li>
		<?php else: ?>
			<!-- si estamos en otra pagina el boton nos mandara a pagina anterioir -->
			<li><a href="index.php?p=<?php echo pagina_actual() - 1 ; ?>">&laquo;</a></li>
		<?php endif; ?>
		
		<!-- ciclo para mostrar el total de paginas -->
		<?php for($i = 1; $i <= $numero_paginas; $i++): ?>
			<?php if (pagina_actual() === $i): ?>
				<li class="active">
					<?php echo $i; ?>
				</li>
			<?php else: ?>
				<li><a href="index.php?p=<?php  echo $i;?>"> <?php echo $i; ?> </a></li>
			<?php endif ?>
			
		<?php endfor; ?>

		<!-- boton adelante.- si estamos en la ultima pagina -->
		<?php if (pagina_actual() == $numero_paginas): ?>
			<li class="disabled">&raquo;</li>
		<?php else: ?>
			<li><a href="index.php?p= <?php echo pagina_actual() + 1; ?> ">&raquo;</a></li>
		<?php endif ?>

		
		
	</ul>
</section>