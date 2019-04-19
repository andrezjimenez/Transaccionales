<div class="container">
    <div  align="center"  > 
    <img src="<?php echo base_url();?>assets/login/img/logo.png" height="150" width="230">

        <h4 style="padding: 1% 1% 0%;"> Registro</h4> <br>
        
    </div>
    <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombres</label>
      <input type="text" class="form-control form-control-sm" id="Nombres" placeholder="Nombres" required>
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Apellidos</label>
      <input type="text" class="form-control form-control-sm" id="Apellidos" placeholder="Apellidos" required>
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Correo Electronico (Sera el usuario de ingreso)</label>
      <input type="email" class="form-control form-control-sm" id="email" placeholder="Correo Electronico" required>
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Ciudad</label>
      <select id="Ciudad" class="form-control form-control-sm" required>
        <option selected>Seleccione...</option>
        <option>...</option>
      </select>
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Contraseña</label>
      <input type="Password" class="form-control form-control-sm" id="Contraseña" placeholder="Contraseña" required>
    </div>

    <div class="form-group col-md-6">
      <label for="inputEmail4">Repetir Contraseña</label>
      <input type="Password" class="form-control form-control-sm" id="Contraseña2" placeholder="Contraseña" required>
    </div>
  </div>
  <button type="submit" class="btn btn-success btn-lg btn-block btn-sm">Registrarse </button>
</form>
 
</div>
