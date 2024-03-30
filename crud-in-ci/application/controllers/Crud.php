
<?php
class Crud extends CI_Controller
{
    public function index()
    {
        $this->load->model('crud_model');

        $data['product_details'] = $this->crud_model->getAllProducts();

        $this->load->view('crud_view', $data);
    }

    public function addProduct()
    {
        // For testing purposes
        //echo "Hey, addProduct method called!";
        
        $this->form_validation->set_rules('name', 'Product Name', 'trim|required');
        $this->form_validation->set_rules('quantity', 'Product Quantity', 'trim|required');
        $this->form_validation->set_rules('price', 'Product Price', 'trim|required');

        if($this->form_validation->run() == false)
        {
            //one way to display the message
            $data_error = [   
                'error' => validation_errors()
            ];
            $this->session->set_flashdata($data_error);

        }
        else
        {
           $result =  $this->crud_model->insertProduct([
                'name'=>$this->input->post('name'),
                'price'=>$this->input->post('price'),
                'quantity'=>$this->input->post('quantity')

            ]);

            if($result)
            {
                //second way to display the message
                $this->session->set_flashdata('inserted', 'Your data has been successfully added');
            }
        }
        redirect('crud');
    }

    public function deleteProduct($id)
    {
        // echo $id;
        $result = $this->crud_model->deleteItem($id);

        if($result == true)
        {
            $this->session->set_flashdata('deleted', 'Your data has been successfully deleted');
        }
        redirect('crud');
    }

    public function updateProduct($id)
    {
        // echo $id;
        $data['singleProduct'] = $this->crud_model->getSingleProduct($id);

        $this->load->view('update_view', $data);
    }


    public function update($id)
    {
        // echo $id;
        $this->form_validation->set_rules('name', 'Product Name', 'trim|required');
        $this->form_validation->set_rules('quantity', 'Product Quantity', 'trim|required');
        $this->form_validation->set_rules('price', 'Product Price', 'trim|required');

        if($this->form_validation->run() == false)
        {
            //one way to display the message
            $data_error = [   
                'error' => validation_errors()
            ];
            $this->session->set_flashdata($data_error);

        }
        else
        {
           $result =  $this->crud_model->updateProduct([
                'name'=>$this->input->post('name'),
                'price'=>$this->input->post('price'),
                'quantity'=>$this->input->post('quantity')

            ], $id);

            if($result)
            {
                //second way to display the message
                $this->session->set_flashdata('updated', 'Your data has been successfully updated');
            }
        }
        redirect('crud');

    }
}
?>
