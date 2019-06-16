<?php
$query = "SELECT t.id, i.descript AS item, CONCAT(u.name, ' ', u.lastname) AS user, tt.type, t.date_transaction, t.quantity 
            FROM transaction AS t 
            INNER JOIN inventory AS i ON t.item = i.id
            INNER JOIN transaction_type AS tt ON t.id = tt.id
            INNER JOIN user AS u ON t.user = u.id WHERE t.type = 0";
$result = simpleQuery($query);
?>
<div class="row">
      <div class="col pois-col col-md-8 col-lg-6">
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
      </div>
</div>

<h2 class="light">Últimas entradas</h2>
<hr>
<div class="row">
      <div class="col">
      <?php while($transaction = $result->fetch_assoc()): ?>
            <p>
                  <?= $transaction["id"]; ?> <br>
                  <?= $transaction["item"]; ?> <br>
                  <?= $transaction["user"]; ?> <br>
                  <?= $transaction["type"]; ?> <br>
                  <?= $transaction["date_transaction"]; ?> <br>
                  <?= $transaction["quantity"]; ?>
            </p>
      <?php endwhile; ?>
      </div>
</div>