<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>       
        <div class="container">
            <?php echo form_open(''); ?>
            <div class="form-group">
                <?php
                echo form_label('Nombre','Name');
                $input = array(
                    'name'=>'Name',
                    'value'=>$Nombre,
                    'class'=>'form-control input-lg',
                );
                echo form_input($input);
                ?>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Correo Electronico','Correo');
                $input = array(
                    'name'=>'Correo',
                    'value'=>$Correo,
                    'class'=>'form-control input-lg',
                );
                echo form_input($input);
                ?>
            </div>
            <div class="form-group">
                <?php
                echo form_label('Telefono','telefono');
				$input = array(
                    'name'=>'telefono',
                    'value'=>$telefono,
                    'class'=>'form-control input-lg',
                );
                echo form_input($input);
                ?>
            </div>
            <?php
                echo form_submit('mysubmit','Enviar',"class='btn btn-primary'")
            ?>
            <?php echo form_close(''); ?>
        </div>
    </body>
</html>
