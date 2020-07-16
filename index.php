<?php
require './lib/autoload.php';

$smarty = new Template();

$smarty->assign('NOME', 'Mauro Silvino das Neves Teixeira');

$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());

$smarty->assign('GET_HOME', Rotas::get_SiteHOME());

$smarty->assign('GET_CONTATO', Rotas::pag_Contato());

$smarty->assign('GET_PRODUTOS', Rotas::pag_Produtos());

$smarty->assign('GET_CARRINHO', Rotas::pag_Carrinho());

$smarty->assign('GET_COMPRAR', Rotas::pag_Comprar());

$smarty->assign('GET_BLOG', Rotas::pag_Blog());

$smarty->assign('TITULO_SITE', Config::SITE_NOME);


//$dados = new Conexao();
//$sql = "SELECT * FROM categorias";
//$dados->ExecuteSQL($sql);
//$lista = $dados->ListarDados();

//echo'<pre>';
//var_dump($lista);
//echo '</pre>';

//echo $dados->TotalDados();
//echo $dados->GetItens();
//echo Rotas::pag_Carrinho() . "<br>";

	$smarty->display('index.tpl');
	$smarty->display('footer.tpl');

?>