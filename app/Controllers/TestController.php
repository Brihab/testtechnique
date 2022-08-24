<?php
namespace App\Controllers;

use App\Models\TestModel;

class TestController extends BaseController
{

    public function index()
    {
        $testModel = new TestModel();

        $data['tests'] = $testModel->findAll();
        return view('test/index.php', $data);


    }

    function add()
	{
		return view('test/index.php');
	}

	/**
	 * @throws \ReflectionException
	 */
	function add_validation()
	{
			$testModel = new TestModel();

			$testModel->save([
				'Cvl' => $this->request->getVar('Cvl'),
				'nom' => $this->request->getVar('nom'),
				'prenom' => $this->request->getVar('prenom'),
				'tranch_age' => $this->request->getVar('tranch_age'),


			]);

			$session = \Config\Services::session();

			$session->setFlashdata('success', 'User Data Added');
			return redirect()->route('/');



	}
}

?>

