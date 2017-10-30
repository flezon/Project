<?php echo form_open('admin'); ?>
<?php echo form_label('Titulo :'); ?> <?php echo form_error('Titulo'); ?><br />
<?php echo form_input(array('id' => 'Titulo', 'name' => 'Titulo')); ?><br />

<?php echo form_label('Titulo original :'); ?> <?php echo form_error('Titulo_original'); ?><br />
<?php echo form_input(array('id' => 'Titulo_original', 'name' => 'Titulo_original')); ?><br />

<?php echo form_label('Anio. :'); ?> <?php echo form_error('dmobile'); ?><br />
<?php echo form_input(array('id' => 'Anio', 'name' => 'Anio', 'placeholder' => '4 Digit Mobile No.')); ?><br />

<?php echo form_label('Genero :'); ?> <?php echo form_error('Genero'); ?><br />
<?php echo form_input(array('id' => 'Genero', 'name' => 'Genero')); ?><br />

<?php echo form_label('Pais :'); ?> <?php echo form_error('Pais'); ?><br />
<?php echo form_input(array('id' => 'Pais', 'name' => 'Pais')); ?><br />

<?php echo form_label('Descripcion :'); ?> <?php echo form_error('Descripcion'); ?><br />
<?php echo form_input(array('id' => 'Descripcion', 'name' => 'Descripcion')); ?><br />

<?php echo form_label('Imagen :'); ?> <?php echo form_error('Imagen'); ?><br />
<?php echo form_input(array('id' => 'Imagen', 'name' => 'Imagen')); ?><br />

<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?><br/>