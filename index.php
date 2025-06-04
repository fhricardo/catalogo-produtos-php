<?php
include 'includes/produtos-full.php';  // 1 produtos.php
include 'includes/functions.php'; // 2 functions.php
include 'includes/header.php';    // 3 header.php
$c = isset($_GET['c']) ? $_GET['c'] : ''; //Pega a categoria da URL
foreach($produtos as $id => $produto){ // $id cria um ID para cara prod
    if($c == '' || $produto['cat'] == $c){ //mostra tudo ou um cat espec.
?>
    <a href="detalhe.php?prod=<?=$id;?>"> <!-- Link com o ID do prod. -->
        <div class="card">
            <h2><?=$produto['nome'];?></h2>
            <div class="foto">
                <img src="assets/<?=$produto['foto'];?>" alt="">
            </div>
            <p><?=$produto['descricao'];?></p>
            <p class="preco"><?=moeda($produto['preco']);?></p>
        </div>
    </a> <!-- Fechamento da tag do link -->
<?php
}
}
include 'includes/footer.php';