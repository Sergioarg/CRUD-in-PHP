<!-- Esta es la vista prinvipal donde se encuentran los usuarios -->
<body>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Lista de <b>Usuarios</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar Usuario</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th> 
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Cédula</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Fecha de Registro</th>
                            <th>Fecha de Modificacíon</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Utilizo PHP para mostrar los usuarios en la vista -->
                        <?php $inc = 0; foreach($this->model->all() as $user): ?>
                            <tr>
                                <td class="v<?php echo $inc; ?>"><?php echo $user->ID ?></td>
                                <td class="v<?php echo $inc; ?>"><?php echo $user->nombres ?></td>
                                <td class="v<?php echo $inc; ?>"><?php echo $user->apellidos ?></td>
                                <td class="v<?php echo $inc; ?>"><?php echo $user->cedula ?></td>
                                <td class="v<?php echo $inc; ?>"><?php echo $user->correo ?></td>
                                <td class="v<?php echo $inc; ?>"><?php echo $user->telefono ?></td>
                                <td><?php echo $user->f_registro ?></td>
                                <td><?php echo $user->f_modificacion ?></td>
                                <td>
                                    <a href="#editModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar" id="v<?php echo $inc; ?>"  onclick="editar(this.id)" >&#xE254;</i></a>
                                    <a href="#delete" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip"  id="<?php echo $user->ID ?>" onclick="obtenerId(this.id)" title="Eliminar">&#xE872;</i></a>
                                </td>
                            </tr>						
                        <?php $inc++; endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>        
    </div>
</body>

