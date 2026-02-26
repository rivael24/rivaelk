<?php

namespace App\Http\Controllers;

class PostController extends Controller
	{
		public function show()
		{
			$name = 'Vladimir';
			$surname = 'Alexeevich';
			return view('post.show', [
			'name' => $name,	
			'surname' => $surname,
			]);
		}
	}
?>
