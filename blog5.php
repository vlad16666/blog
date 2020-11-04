<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="col-8 text-center mx-auto" style=""> <!-- 2. выводите все элементы в этом диве -->
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
					"url" => "blog5.php",
					"txt" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
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
    					echo "<h1>" . $database[4]["tittle"] . "</h1>";
    					echo "<p>" . $database[4]["text"] . "</p>";
    					echo "<img class = 'col-12'src = '" . $database[4]["img"] . "'>";
    					echo "<p>" .$database[4]["txt"]. "</p>";
    					echo "<p> Автор:" .$database[4]["users"]. "</p>";
			 ?>
	</div>