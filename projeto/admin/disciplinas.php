<?php
include("../include/config.php");
include("./function.php");
validaSessao();
include("./components/comun/header.php");
include("./menu.php");
?>
<div align="center">

	<h3>Disciplinas</h3>

	<?php
	$dbObj = new mysql();
	$sql = "";
	$sql .= " SELECT * FROM DISCIPLINA ORDER BY ID ";
	$result = $dbObj->query($sql);
	if ($result) {
		if (mysqli_num_rows($result) > 0) {
			?>

			<?php
			while ($row = mysqli_fetch_assoc($result)) {
				?>

				<div style="flex-direction: column">
					<div class="card-text">

						<h4>
							<?= $row["NOME_DA_DISCIPLINA"]; ?>
						</h4>

						<h4>
							<?= $row["TITULO"]; ?>
						</h4>

						<p>
							<?= $row["TEXTO"]; ?>
						</p>
					</div>

				<div class="hub">
					<div class="espacador">
						<a href="atualizar.php?id=<?= $row["ID"] ?>">
							<button>
								Atualizar
							</button>
						</a>
					</div>

					<div class="espacador">
						<a href="remover.php?id=<?= $row["ID"] ?>">
							<button>
								Remover
							</button>
						</a>
					</div>

					<div class="espacador">
						<a href="./disciplina.php">

							<button>
								Incluir
							</button>
					</a>
				</div>
					<?php
			}
			?>

				<?php
		} else {
			echo "<h3>Sem produtos!</h3>";
		}
	}
	?>
		</div>
	</div>
</div>
<?php include("./components/comun/footer.php"); ?>