<?php
require 'includes/produtos.php';
include 'includes/functions.php';
require 'includes/header.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $produto = $produtos[$id];
} else {
    echo "<h1>Não foi possível localizar o produto desejado!</h1>";
    exit;
}
?>
<nav class="breadcrumb">
    <a href="index.php">Produtos</a>
    <p><?= $produto['nome']; ?></p>
</nav>
<section>
    <div class="det-foto">
        <img src="assets/<?= $produto['foto']; ?>" alt="">
    </div>
    <div class="det-desc">
        <h2><?= $produto['nome']; ?></h2>
        <p class="lead"><?= $produto['descricao']; ?></p>
        <div class="preco">
            <h1>R$ <?= $produto['preco']; ?></h1>
        <p class="parcela">Ou 10 x R$ <?=$produto['preco']/10;?></p>
        </div>
        <button>Comprar</button>
    </div>
</section>
<?php
require 'includes/footer.php';
?>