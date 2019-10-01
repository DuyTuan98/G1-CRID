<?php
include_once("header.php");
include_once("nav.php");
include_once("../model/entity/learningHistory.php");

$rsMockData = LearningHistory::getList("16T1021194");
$rsFromFile = LearningHistory::getListFromFile("101");
// var_dump($rsFromFile);
// var_dump($rsMockData);
?>
<div class="container-fluid">
	<div class="table-responsive">
		<table class="table table-hover table-bordered">
			<div class="btn-add d-flex justify-content-end align-items-center pb-3">
				<a class="btn btn-outline-primary" href="createForm.php" ><i class="fas fa-plus-circle"></i> Thêm</a>
			</div>
			<thead class="thead-dark">
				<tr>
					<th scope="col">STT</th>
					<th scope="col">Từ năm</th>
					<th scope="col">Đến năm</th>
					<th scope="col">Lớp</th>
					<th scope="col">Nơi học</th>
					<th scope="col">Thao tác</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($rsFromFile as $key => $value) {
					$stt = $key + 1;
					echo "<tr>";
					echo "<th scope='row'>$stt</th>";
					echo "<td>$value->yearFrom</td>";
					echo "<td>$value->yearTo</td>";
					echo "<td>$value->schoolName</td>";
					echo "<td>$value->schoolAddress</td>";
					echo "<td class='d-flex'>";
					echo "<button class='btn btn-outline-success mr-3'><i class='far fa-edit'></i> Sửa</button>";
					echo "<button class='btn btn-outline-danger'><i class='fas fa-trash-alt'></i> Xóa</button>";
					// echo "button class='btn btn-outline-success mr-3' data-toggle='modal' data-target='#editBook'><i class='far fa-edit'></i> Sửa</button>";
					// echo "button class='btn btn-outline-danger' data-toggle='modal' data-target='#deleteBook'><i class='fas fa-trash-alt'></i> Xóa</button>";
					echo "</td>";
					echo "</tr>";
				}
				?>
		
			</tbody>
		</table>
	</div>
</div>

<?php
include_once("footer.php"); ?>
