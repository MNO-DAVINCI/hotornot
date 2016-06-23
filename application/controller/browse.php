<?php

class Browse extends Controller 
{
	public function index()
	{
		$tekst = $this->model->getText(20);

		require APP . 'view/_templates/header.php';
        require APP . 'view/browse/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function rate()
    {
    	require APP . 'view/_templates/header.php';
        require APP . 'view/browse/rate.php';
        require APP . 'view/_templates/footer.php';
    }
}