<?php

class Products extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url'));
        $this->load->model('Product');
    }

    public function index(){
        $products = $this->Product->get();
        $this->load->view('_partials/header');
        $this->load->view('products/index',array('products'=>$products));
        $this->load->view('_partials/footer');
    }

    public function show($id){
        $product = $this->Product->find($id);
        $this->load->view('_partials/header');
        $this->load->view('products/show',array('product'=>$product));
        $this->load->view('_partials/footer');
    }

    public function new(){
        $this->load->view('_partials/header');
        $this->load->view('products/new');
        $this->load->view('_partials/footer');
    }



    public function create(){
        $this->form_validation->set_rules($this->rules());
       

        if($this->form_validation->run() === FALSE){
            $errors =  $this->form_validation->error_array();
            foreach($errors as $key=>$value){
                $this->session->set_flashdata($key.'_error',$value);
            }
            redirect(base_url().'products/new');
        }else{
            $this->Product->create($_POST);
            redirect(base_url().'products');
        }
    }

    public function destroy(){
        $this->Product->delete($this->input->post('id'));
        redirect(base_url().'products');
    }

    public function edit($id){
        $product = $this->Product->find($id);
        $this->load->view('_partials/header');
        $this->load->view('products/edit',array('product'=>$product));
        $this->load->view('_partials/footer');
    }

    public function update(){

        $this->form_validation->set_rules($this->rules());
       

        if($this->form_validation->run() === FALSE){
            $errors =  $this->form_validation->error_array();
            foreach($errors as $key=>$value){
                $this->session->set_flashdata($key.'_error',$value);
            }
            redirect(base_url().'products/new');
        }else{
            $this->Product->update($_POST);
            redirect(base_url().'products');
        }
    }

    function numeric_wcomma($str)
    {
        return preg_match('/^[0-9,]+$/', $str);
    }



    public function rules(){
        return array(
            array(
                'field'=>'name',
                'label'=>'Product Name',
                'rules'=>'required'
            ),
            array(
                'field'=>'price',
                'label'=>'Product Price',
                'rules'=>'required|numeric'
            )
        );
    }

}