<?php

class Rate extends Controller
{
	public function index()
	{
		$picture = $this->model->getRandomPicture();

        require APP . 'view/_templates/header.php';
        require APP . 'view/rate/index.php';
        require APP . 'view/_templates/footer.php';
	}

	public function reet()
	{
		$uhm = array("Menno", "Dylan", "Maarten");

		echo json_encode($uhm);
	}

}