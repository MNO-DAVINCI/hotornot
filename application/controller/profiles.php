<?php

class Profiles extends Controller
{
	public function index()
	{
		$profiles = $this->model->getAllProfiles();

		require APP . 'view/_templates/header.php';
        require APP . 'view/profiles/index.php';
        require APP . 'view/_templates/footer.php';
	}

	public function addProfile()
	{
        if (isset($_POST["submit_add_profile"])) {
            $this->model->addProfile($_POST["name"], $_POST["age"],  $_POST["gender"], $_POST["picture"]);
        }

        header('location: ' . URL . 'profiles/index');
	}
}