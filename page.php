<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		
	</div>

	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h1 class="text-center">БЛОГ</h1>
		<h3>
			<?php 
				echo $_GET["from"] . " ";
				echo $_GET["text"] . " ";
			?>
		</h3>
		<hr>
		<div class="col-12 text-center" style=""> <!-- 2. выводите все элементы в этом диве -->
			 <?php 
				$database = [
					["tittle" => "Статья 1",
					"text" => "lorem",
					"img" => "img/1.jpg",
					"users" => "user34",
					"url" => "blog1.php"
					],

					["tittle" => "Статья 2",
					"text" => "lorem",
					"img" => "img/2.jpg",
					"users" => "user14",
					"url" => "blog2.php"
					],

					["tittle" => "Статья 3",
					"text" => "lorem",
					"img" => "img/3.jpg",
					"users" => "user55",
					"url" => "blog3.php"
					],

					["tittle" => "Статья 4",
					"text" => "lorem",
					"img" => "img/4.jpg",
					"users" => "user64",
					"url" => "blog4.php"
					],

					["tittle" => "Статья 5",
					"text" => "lorem",
					"img" => "img/5.jpg",
					"users" => "user79",
					"url" => "blog5.php"
					],

					["tittle" => "Статья 6",
					"text" => "lorem",
					"img" => "img/6.jpg",
					"users" => "user13",
					"url" => "blog6.php"
					],

					["tittle" => "Статья 7",
					"text" => "lorem",
					"img" => "img/7.jpg",
					"users" => "user99",
					"url" => "blog7.php"
					],

					["tittle" => "Статья 8",
					"text" => "lorem",
					"img" => "img/8.jpg",
					"users" => "user18",
					"url" => "blog8.php"
					],

					["tittle" => "Статья 9",
					"text" => "lorem",
					"img" => "img/9.jpg",
					"users" => "user91",
					"url" => "blog9.php"
					]

				];
				for ($i=0; $i < 9; $i++) { 
    					echo "<h1>" . $database[$i]["tittle"] . "</h1>";
    					echo "<p>" . $database[$i]["text"] . "</p>";
    					echo "<img class = 'col-12'src = '" . $database[$i]["img"] . "'>";
    					echo "<a href = ' " .$database[$i]["url"]. " '>Перейти</a>";
    				}
			 ?>
			 <?php 
			 	$connect = mysqli_connect("127.0.0.1","root","","urok14");
			 	if ($connect == true) {
			 		echo "все норм";
			 	}
			 	else{
			 		echo "ошибка";
			 	}
			 	$query = mysqli_query($connect,"SELECT * FROM posts");
			 	echo $query
			  ?>
		</div>
	</div>
</body>
</html>