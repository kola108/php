<?php

class Model
{

	private $articles = [
			1 => ['title'   => 'First Article',
			      'content' => 'First Article Content.'
			],
			2 => ['title'   => 'Second Article',
			 	  'content' => 'Second Article Content.'
			],
		];

	public function getArticles()
	{
		return $this->articles;
	}

	public function getArticle($id)
	{
		if (isset($this->articles[$id])) {
			return $this->articles[$id];
		}
	}

	public function getData()
	{
		return ['title' => 'Index page Title.',
			'content' => 'Index page Content.'];
	}

	public function getData2()
	{
		return ['title' => 'About Us page data.',
			'content' => 'About Us page data.'];
	}
}