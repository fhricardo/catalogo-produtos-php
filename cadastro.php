<?php
include 'includes/produtos.php';
include 'includes/functions.php';
include 'includes/header.php';

?>
    <form action="">
        <input type="text" name="prodNome" id="prodNome" placeholder="Nome do Produto">
        <input type="text" name="prodCat" id="prodCat" placeholder="Categoria">
        <textarea name="prodDesc" id="prodDesc" placeholder="Descrição"></textarea>
        <input type="number" name="prodPreco" id="prodPreco" placeholder="Preço">
        <input type="file" name="prodFoto" id="prodFoto" placeholder="Foto">
        <input type="submit" value="Cadastrar">
    </form>
<?php

include 'includes/footer.php';