<?php
include("../include/config.php");
include("./function.php");
validaSessao();

if (isset($_GET["id"])) {
	$dbObj = new mysql();
	$sql = "";
	$sql .= " SELECT * FROM DISCIPLINA WHERE ID = ".$_GET["id"]." ";
	$result = $dbObj->query($sql);
	if ($result) {
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			if (isset($_GET["opcao"]) && $_GET["opcao"] == "sim") {
				$dbObj = new mysql();
				$sql = "";
				$sql .= " DELETE FROM DISCIPLINA WHERE ID = ".$_GET["id"]." ";
				$result = $dbObj->query($sql);
				header("Location: disciplinas.php");
				exit;
			}
		} else {
			header("Location: disciplinas.php");
			exit;
		}
	}
} else {
	header("Location: disciplinas.php");
	exit;
}

include("./components/comun/header.php");
include("./menu.php");
?>

	<h3>Disciplinas</h3>

	<h3>Deseja remover a publicação "<?=$row["TITULO"];?>"?</h3>

<br><br>

<a href="remover.php?id=<?=$row["id"]?>&opcao=sim">SIM</a>

<a href="materia.php">NAO</a>

<?php include("./footer.php"); ?>
<?php include("./components/comun/footer.php"); ?>