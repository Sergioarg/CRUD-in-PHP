
<!-- En este archivo se encuentran todos los modales a utilizar en las vistas.-->

<!-- Modal de Agregar Usuario  -->

<div id="addModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="post" action="?c=user&m=save" class="needs-validation" novalidate>
				<div class="modal-header">						
					<h4 class="modal-title">Agregar Usuario </h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">	
					<div class="form-group">
						<label>Nombres</label>
						<input type="text"onKeyPress="return solo_letras(event)" name="nombres"class="form-control" required>
						<div class="valid-feedback">Completo.</div>
						<div class="invalid-feedback">Por favor, completa este campo.</div>
					</div>
					<div class="form-group">
						<label>Apellidos</label>
						<input type="text" onKeyPress="return solo_letras(event)" name="apellidos"class="form-control" required>
						<div class="valid-feedback">Completo.</div>
						<div class="invalid-feedback">Por favor, completa este campo.</div>
					</div>
					<div class="form-group">
						<label>Cédula</label>
						<input type="tel" onKeyPress="return solo_numeros(event)"  name="cedula"class="form-control" required>
						<div class="valid-feedback">Completo.</div>
						<div class="invalid-feedback">Por favor, completa este campo.</div>
					</div>
					<div class="form-group">
						<label>Correo</label>
						<input type="email" name="correo" class="form-control" required>
						<div class="valid-feedback">Completo.</div>
						<div class="invalid-feedback">Este campo debe tener @.</div>
					</div>
					<div class="form-group">
						<label>Teléfono</label>
						<input type="tel" name="telefono" onKeyPress="return solo_numeros(event)" class="form-control" required>
						<div class="valid-feedback">Completo.</div>
						<div class="invalid-feedback">Por favor, completa este campo.</div>
					</div>
					<div class="form-group">
						<!-- <label style="visibility: hidden">Fecha de Registro </label> -->
						<?php  $fecha_actual = date("y-m-d H:i:s ");?>
						<input type="hidden" readonly name="f_modificacion" class="form-control" value="<?php echo $fecha_final = date("y-m-d H:i:s"  , strtotime($fecha_actual. " -7 hours"));?> " required >
					</div>
					<div class="form-group">
						<!-- <label style="visibility: hidden">Fecha de modificación</label> -->
						<input type="hidden" readonly value="<?php echo $fecha_final ;?>" name="f_registro" class="form-control" required >
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-success" value="Agregar">
				</div>
			</form>
		</div>
	</div>
</div>

<!--  Modal Para Editar El Usuario HTML -->
<div id="editModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="post" action="?c=user&m=update" class="needs-validation" novalidate>
				<div class="modal-header">						
					<h4 class="modal-title">Editar Usuario </h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Nombres</label>
						<input type="text" name="nombres"  onKeyPress="return solo_letras(event)" id="nombres" class="form-control" required>
						<div class="valid-feedback">Completo.</div>
						<div class="invalid-feedback">Por favor, completa este campo.</div>
					</div>
					<div class="form-group">
						<label>Apellidos</label>
						<input type="text" name="apellidos"  onKeyPress="return solo_letras(event)" id="apellidos" class="form-control" required>
						<div class="valid-feedback">Completo.</div>
						<div class="invalid-feedback">Por favor, completa este campo.</div>
					</div>
					<div class="form-group">
						<label>Cédula</label>
						<input readonly type="tel" name="cedula" onKeyPress="return solo_numeros(event)" id="cedula" class="form-control" required>
						<div class="valid-feedback">Completo.</div>
						<div class="invalid-feedback">Por favor, completa este campo.</div>
					</div>
					<div class="form-group">
						<label>Correo</label>
						<input type="email" name="correo" id="correo" class="form-control" required>
						<div class="valid-feedback">Completo.</div>
						<div class="invalid-feedback">Este campo debe tener @.</div>
					</div>
					<div class="form-group">
						<label>Teléfono</label>
						<input type="tel" name="telefono" id="telefono"  onKeyPress="return solo_numeros(event)"class="form-control" required>
						<div class="valid-feedback">Completo.</div>
						<div class="invalid-feedback">Por favor, completa este campo.</div>
					</div>
					<div class="form-group">
						<!-- <label>Fecha de Modificación</label> -->
						<?php  $fecha_actual = date("y-m-d H:i:s ");?>
						<input readonly type="hidden"  class="form-control" name="f_modificacion" id="f_modificacion" value="<?php echo $fecha_final = date("y-m-d H:i:s"  , strtotime($fecha_actual. " -7 hours")) ; ?> ">
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-info" value="Guardar">
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Delete Modal HTML -->
<div id="delete" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="?c=user&m=deleteU" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Eliminar Usuario</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>¿Estas seguro de elimar al usuario?</p>
					</div>
				<div class="modal-footer">
					<label style="visibility: hidden" id="idEliminar"></label>
					<input type="hidden" name="id" id="id" class="form-control" >
					<button  type="submit" class="btn btn-danger">Eliminar</button>
					<button type="button"  class="btn btn-success" data-dismiss="modal">Cerrar</button>
				</div>
			</form>
		</div>
	</div>
</div>
