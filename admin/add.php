<div class="row">
      <div class="col-12 col-md-6 col-lg-4 col-sm-6">
            <div class="form-group">
                  <label for="barcode">Código de barras</label>
                  <input type="text" class="form-control form-control-lg" id="barcode"
                        aria-describedby="barcode_info" placeholder="ej. 73859182401284734">
                  <small id="barcode_info"></small>
            </div>
            <div class="form-group">
                  <label for="description">Descripción de producto</label>
                  <input type="text" class="form-control form-control-lg" id="description"
                        placeholder="ej. Pro Display XDR">
                  <small id="description_info"></small>
            </div>
            <div class="form-group">
                  <label for="supplier">Distribuidor</label>
                  <select class="form-control form-control-lg" id="supplier">
                        <option selected disabled>Escoger</option>
                        <?php
                        $suppliers = getSuppliers();
                        while($supplier = $suppliers->fetch_assoc()): ?>
                        <option value="<?=$supplier["id"];?>"><?=$supplier["company"];?></option>
                        <?php endwhile; ?>
                  </select>
                  <small id="supplier_info"></small>
            </div>
            <button type="submit" class="btn btn-dark btn-lg" id="submit_login">Iniciar Sesión</button>
      </div>
</div>