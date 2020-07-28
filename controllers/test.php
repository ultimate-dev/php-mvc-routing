<?php

class Test extends Controller
{
    public function index()
    {

        $testModel = $this->model('test_model');
        $tests = $testModel->getAll();


        $this->view('test', [
            'tests' => $tests
        ]);
    }
}