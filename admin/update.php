<form class="transaction">
      <div class="form-group">
            <label for="barcode">Código de barras</label>
            <input type="text" class="form-control form-control-lg" id="barcode"
                  aria-describedby="barcode_info" placeholder="ej. 73859182401284734">
            <small id="barcode_info"></small>
      </div>
      <div class="input-group mb-3">
            <div class="input-group-prepend">
                  <button class="btn btn-outline-dark" type="button"> – </button>
            </div>
            <input type="text" class="form-control form-control-lg" placeholder="0" aria-label="" aria-describedby="basic-addon1">
            <div class="input-group-append">
                  <button class="btn btn-outline-dark" type="button"> + </button>
            </div>
      </div>
      <small id="login_info"></small>
      <button type="submit" class="btn btn-dark btn-lg" id="submit_login">Añadir inventario</button>
</form>