<?php
include("../include/config.php");
include("./function.php");
validaSessao();

if (isset($_GET["id"]) || isset($_POST["id"])) {
	if (isset($_GET["id"]))
		$id = $_GET["id"];
	else
		$id = $_POST["id"];
	$dbObj = new mysql();
	$sql = "";
	$sql .= " SELECT * FROM DISCIPLINA WHERE ID = " . $id . " ";
	$result = $dbObj->query($sql);
	if ($result) {
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
		} else {
			header("Location: disciplinas.php");
			exit;
		}
	}
} else {
	header("Location: disciplinas.php");
	exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$dbObj = new mysql();
	$sql = "";
	$sql .= " UPDATE DISCIPLINA SET ";
	$sql .= " NOME_DA_DISCIPLINA = '" . $_POST["nome"] . "', ";
	$sql .= " TITULO = '" . $_POST["titulo"] . "', ";
	$sql .= " TEXTO = '" . $_POST["texto"] . "' ";
	$sql .= " WHERE id = '" . $_POST["id"] . "' ";
	$result = $dbObj->query($sql);
	header("Location: disciplinas.php");
	exit;
}

include("./components/comun/header.php");
include("./menu.php");
?>
<div align="center">

	<h3>Disciplinas</h3>

	<div class="card-input">
		<div class="card__content">
			<div style="padding: 90px">
				<form method="POST">
					<div style="display: flex; flex-direction: column; display: flex; justify-content: center; align-items: center; align-content: center">

						<input type="hidden" name="id" value="<?= $row["ID"]; ?>" />

						<input type="text" name="nome" class="input" value="<?= $row["NOME_DA_DISCIPLINA"]; ?>" />

						<input type="text" name="titulo" class="input" value="<?= $row["TITULO"]; ?>" />

						<textarea type="text" name="texto" class="input" rows="10"
							value="<?= $row["TEXTO"]; ?>"><?= $row["TEXTO"]; ?></textarea>

						<input type="submit">

					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include("./components/comun/footer.php"); ?>