<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User extends Controller {

    public function __construct(){
        parent::__construct();  
        $this->call->model('User_model');  
    }

    public function read(){
        $data['prod'] = $this->User_model->read();
        $data['name'] = "User Info";
        $this->call->view('User/display', $data);
    }

    public function create(){
        if($this->form_validation->submitted()){
            // Form validation rules
            $this->form_validation
                ->name('ltmd_last_name')
                    ->required()
                    ->alpha()
                ->name('ltmd_first_name')
                    ->required()
                    ->alpha()
                ->name('ltmd_email')
                    ->required()
                    ->valid_email()
                ->name('ltmd_gender')
                    ->required()
                    ->alpha()
                ->name('ltmd_address')
                    ->required();
                    // Use a callback for custom address validation
            
            if ($this->form_validation->run()){
                // Retrieving form data
                $ltmd_last_name = $this->io->post('ltmd_last_name');
                $ltmd_first_name = $this->io->post('ltmd_first_name');
                $ltmd_email = $this->io->post('ltmd_email');
                $ltmd_gender = $this->io->post('ltmd_gender');
                $ltmd_address = $this->io->post('ltmd_address');

                // Insert data into the database
                if($this->User_model->create($ltmd_last_name, $ltmd_first_name, $ltmd_email, $ltmd_gender, $ltmd_address)){
                    set_flash_alert('success', 'Added Successfully');
                    redirect('user/add');
                }
            } else {
                set_flash_alert('danger', $this->form_validation->errors());
                redirect('user/add');
            }
        }
        // Load the create view
        $this->call->view('User/create');
    }

    
        
        public function update($id){
            if($this->form_validation->submitted()){
                // Form validation rules
                $this->form_validation
                    ->name('ltmd_last_name')
                        ->required()
                        ->alpha()
                    ->name('ltmd_first_name')
                        ->required()
                        ->alpha()
                    ->name('ltmd_email')
                        ->required()
                        ->valid_email()
                    ->name('ltmd_gender')
                        ->required()
                        ->alpha()
                    ->name('ltmd_address')
                        ->required();
                        // Use a callback for custom address validation
                
                if ($this->form_validation->run()){
                    // Retrieving form data
                    $ltmd_last_name = $this->io->post('ltmd_last_name');
                    $ltmd_first_name = $this->io->post('ltmd_first_name');
                    $ltmd_email = $this->io->post('ltmd_email');
                    $ltmd_gender = $this->io->post('ltmd_gender');
                    $ltmd_address = $this->io->post('ltmd_address');
    
                    // Insert data into the database
                    if($this->User_model->update($ltmd_last_name, $ltmd_first_name, $ltmd_email, $ltmd_gender, $ltmd_address, $id)){
                        set_flash_alert('success', 'Updated Successfully');
                        redirect('user/display');
                    }
                } else {
                    set_flash_alert('danger', $this->form_validation->errors());
                    redirect('user/display');
                }
            }
        
            $data['p']=$this->User_model->get_one($id);
        //var_dump($data['u']);exit;
            $this->call->view('User/update', $data);
        }

    public function delete($id){
        if($this->User_model->delete($id)){
            set_flash_alert('success', 'Deleted Successfully');
            redirect('user/display');

        } else {
            set_flash_alert('danger', $this->form_validation->errors());
            redirect('user/display');
        }
        
    }

    
}
?>
