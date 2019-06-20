<div class="row">
       <!-- first column -->
      <div class="col-12 col-md-12 col-lg-4 col-sm-6">
            <!-- barcode -->
            <div class="form-group">
                  <label for="barcode">Código de barras</label>
                  <input type="text" class="form-control form-control-lg" id="barcode"
                        aria-describedby="barcode_info" placeholder="ej. 73859182401284734">
                  <small id="barcode_info"></small>
            </div>
             <!-- product -->
            <div class="form-group">
                  <label for="description">Descripción de producto</label>
                  <input type="text" class="form-control form-control-lg" id="description"
                        placeholder="ej. Pro Display XDR">
                  <small id="description_info"></small>
            </div>
            <!-- supplier -->
            <div class="form-group">
                  <label for="supplier">Distribuidor</label>
                  <select class="form-control form-control-lg" id="supplier">
                        <option selected value="choose" disabled>Escoger</option>
                        <option value="new">Nuevo distribuidor</option>
                        <?php
                        $suppliers = getTable("supplier");
                        while($supplier = $suppliers->fetch_assoc()): ?>
                        <option value="<?=$supplier["id"];?>"><?=$supplier["company"];?></option>
                        <?php endwhile; ?>
                  </select>
                  <div class="input-group mb-3" id="supplier_input" hidden>
                        <input type="text" class="form-control form-control-lg" id="" placeholder="ej. Apple">
                        <div class="input-group-append">
                              <button class="btn btn-outline-secondary" type="button" id="supplier_back">Volver</button>
                        </div>
                        
                  </div>
                  
                  <small id="supplier_info"></small>
            </div>
            <!-- storage -->
            <div class="form-group">
                  <label for="storage">Almacén</label>
                  <select class="form-control form-control-lg" id="storage">
                        <option selected value="choose" disabled>Escoger</option>
                        <option value="new">Nuevo almacén</option>
                        <?php
                        $storages = getTable("storage");
                        while($storage = $storages->fetch_assoc()): ?>
                        <option value="<?=$storage["id"];?>"><?=$storage["storage"];?></option>
                        <?php endwhile; ?>
                  </select>
                  <div class="input-group mb-3" id="storage_input" hidden>
                        <input type="text" class="form-control form-control-lg" id="" placeholder="ej. Cupertino">
                        <div class="input-group-append">
                              <button class="btn btn-outline-secondary" type="button" id="storage_back">Volver</button>
                        </div>
                        
                  </div>
                  
                  <small id="storage_info"></small>
            </div>

      </div>
      <!-- second column -->
      <div class="col-12 col-md-12 col-lg-4 col-sm-6"> 
            <!-- cost -->
            <div class="form-group">
                  <label for="cost">Precio de compra</label>
                  <div class="input-group mb-3">
                        <div class="input-group-prepend">
                              <button class="btn btn-outline-secondary" type="button" disabled>$</button>
                        </div>
                        <input type="text" class="form-control form-control-lg" id="cost"
                              placeholder="ej. 1999">
                        <div class="input-group-append">
                              <button class="btn btn-outline-secondary" type="button" disabled>MXN</button>
                        </div>
                  </div>
                  <small id="cost_info"></small>
            </div>
            <!-- sell -->
            <div class="form-group">
                  <label for="sell">Precio de venta</label>
                  <div class="input-group mb-3">
                        <div class="input-group-prepend">
                              <button class="btn btn-outline-secondary" type="button" disabled>$</button>
                        </div>
                        <input type="text" class="form-control form-control-lg" id="sell"
                              placeholder="ej. 3999">
                        <div class="input-group-append">
                              <button class="btn btn-outline-secondary" type="button" disabled>MXN</button>
                        </div>
                  </div>
                  <small id="sell_info"></small>
            </div>
            <!-- sell -->
            <div class="form-group">
                  <label for="reposition">Reposición</label>
                  <div class="input-group mb-3">
                        <div class="input-group-prepend">
                              <button class="btn btn-outline-dark" type="button" disabled>Reponer en... </button>
                        </div>
                        <input type="text" class="form-control form-control-lg" id="reposition"
                              placeholder="ej. 52">
                        <div class="input-group-append">
                              <button class="btn btn-outline-dark" type="button" disabled>días.</button>
                        </div>
                  </div>
                  <small id="reposition_info"></small>
            </div>
            <!-- expiration date -->
            <div class="form-group">
                  <label for="expiration">Fecha de caducidad</label>
                  <div class="input-group date mb-3">
                        <input type="text" class="form-control form-control-lg" id="expiration">
                        <div class="input-group-append">
                              <button class="btn  btn-outline-dark" type="button">Escoger fecha.</button>
                        </div>
                  </div>
                  <small id="expiration_info"></small>
            </div>
      </div>
      <!-- third column -->
      <div class="col-12 col-md-12 col-lg-4 col-sm-6">
            <!-- barcode -->
            <div class="form-group">
                  <label for="unit">Unidad</label>
                  <select class="form-control form-control-lg" id="unit">
                        <option selected value="choose" disabled>Escoger</option>
                        <option value="new">Nueva unidad</option>
                        <?php
                        $units = getTable("unit");
                        while($unit = $units->fetch_assoc()): ?>
                        <option value="<?=$unit["id"];?>"><?=$unit["unit"];?></option>
                        <?php endwhile; ?>
                  </select>
                  <div class="input-group mb-3" id="unit_input" hidden>
                        <input type="text" class="form-control form-control-lg" id="" placeholder="ej. kg">
                        <div class="input-group-append">
                              <button class="btn btn-outline-secondary" type="button" id="unit_back">Volver</button>
                        </div>
                  </div>
                  <small id="unit_info"></small>
            </div>

            <div class="form-group">
                  <label for="quantity">Cantidad</label>
                  <div class="input-group mb-3" id="">
                        <div class="input-group-prepend">
                              <button class="btn btn-outline-dark" type="button"> – </button>
                        </div>
                        <input type="text" class="form-control form-control-lg center" value="0" aria-label=""
                              aria-describedby="basic-addon1" id="quantity">
                        <div class="input-group-append">
                              <button class="btn btn-outline-dark" type="button"> + </button>
                        </div>
                  </div>
            </div>

            <div class="form-group">
                  <label for="image">Imagen</label>
                  <input id="image" name="image[]" type="file" accept="image/*">
                  <small id="image_info"></small>
            </div>
            <div class="transaction">
                  <label for=""></label>
                  <button type="submit" class="btn btn-dark btn-lg" id="submit_product">Añadir nuevo producto</button>
            </div>
            
      </div>

      
</div>