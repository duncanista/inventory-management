<?php
$query = "SELECT * FROM transaction WHERE type = 0";
$result = simpleQuery($query);
?>
<div class="row">
      <div class="col">
            Aquí ingresaría el ID
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
                  <?= $transaction["date_transaction"]; ?>
            </p>
      <?php endwhile; ?>
      </div>
</div>