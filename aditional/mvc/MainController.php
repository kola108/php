<?php

class MainController extends AbstractController
{
	public function index()
	{
		$model = $this->getModel(Model::class);
		$data = $model->getData();
		$this->render('view/index.php', $data);
	}

	public function aboutUs()
	{
		$model = $this->getModel(Model::class);
		$data = $model->getData2();
		$this->render('view/aboutUs.php', $data);
	}

	public function pageNotFound()
	{
		http_response_code(404);
		$this->render('view/404.php');
	}
}