<?php
include("../include/config.php");
include("./function.php");
validaSessao();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$dbObj = new mysql();
	$sql = "";
	$sql .= " INSERT INTO DISCIPLINA ";
	$sql .= " (NOME_DA_DISCIPLINA, TITULO, TEXTO) ";
	$sql .= " VALUES ";
	$sql .= " ('" . $_POST["nome"] . "', '" . $_POST["titulo"] . "', '" . $_POST["texto"] . "') ";
	$result = $dbObj->query($sql);
	header("Location: ./disciplinas.php");
	exit;
}

include("./components/comun/header.php");
include("./menu.php");
?>

MATERIA

<form method="POST">
	<table>
		<tr>
			<td>
				Nome:
			</td>
			<td>
				<input type="text" name="nome">
			</td>
		</tr>
		<tr>
			<td>
				Titulo:
			</td>
			<td>
				<input type="text" name="titulo">
			</td>
		</tr>
		<tr>
			<td>
				Texto:
			</td>
			<td>
				<input type="text" name="texto">
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td>
				<input type="submit">
			</td>
		</tr>
	</table>
</form>

<?php include("./footer.php"); ?>