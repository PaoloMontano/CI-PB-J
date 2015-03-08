<?php

class AdminSleeps extends Application {

    function __construct()
    {
	parent::__construct();
        $this->load->helper('formfields');
        $this->load->library('upload');
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------
    function index()
    {
        $this->data['title'] = "Manage Sleeps";
        
        $this->data['sleeps'] = $this->Sleeps->all();
        
	$this->data['pagebody'] = 'admin_sleeps';
        $this->render();
    }
    
    function add()
    {
        $sleeps = $this->Sleeps->create();
        $this->present($sleeps);
    }
    
    function edit($id)
    {
        $this->present($this->Sleeps->get($id));
    }
    
    // Present hotel info for adding/editing
    function present($sleep)
    {
        // Format any errors
        $message = "";
        if (count($this->errors) > 0)
        {
            foreach ($this->errors as $booboo)
                $message .= $booboo . BR;
        }
        $config['upload_path'] = './assets/images/eat/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '200';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $config['overwrite'] = TRUE;
        $this->upload->initialize($config);

        $this->data['message'] = $message;
        
        $this->data['form_phoneId'] = makeTextField('Phone Number', 'phoneId', $sleep->phoneId, "", 11, 11);
        $this->data['form_title'] = makeTextField('Name', 'title', $sleep->title);
        // $this->data['form_image'] = makeTextField('Picture', 'image', $sleep->image);
        $this->data['form_image'] = makeFileUpload('Picture', 'image', $eat->image);
        $this->data['form_desc'] = makeTextArea('Description', 'desc', $sleep->desc);
        $this->data['form_value'] = makeTextField('Value', 'value', $sleep->value);
        $this->data['form_rating'] = makeTextField('Rating', 'rating', $sleep->rating);
        $this->data['form_link'] = makeTextField('Link', 'link', $sleep->link);
        
        $this->data['pagebody'] = 'edit_sleep';
        $this->data['submit'] = makeSubmitButton('Submit Sleep', "Click here to validate the hotel data", 'btn-success');
        if (!empty($sleep->id))
            $this->data['id'] = $sleep->id;
        else
            $this->data['id'] = "-1";
        
        $this->render();
    }
    
    // Validates and confirms the information placed into form
    function confirm($id)
    {
        $record = $this->Sleeps->create();
        
        // Extract submitted fields
        $record->phoneId = $this->input->post('phoneId');
        $record->title = $this->input->post('title');
        $record->image = $this->input->post('image');
        $record->desc = $this->input->post('desc');
        $record->value = $this->input->post('value');
        $record->rating = $this->input->post('rating');
        $record->link = $this->input->post('link');
        
        // Validation
        if (empty($record->phoneId))
            $this->errors[] = "The hotel must have a phone number to contact.";
        else if (!is_numeric($record->phoneId))
            $this->errors[] = "The phone number must contain only numbers.";
        if (empty($record->title))
            $this->errors[] = "The hotel must have a name.";
        if (strlen($record->desc) < 20)
            $this->errors[] = "The description must be at least 20 characters long.";
        if (!empty($record->value) && (!is_numeric($record->value) || $record->value < 1 || $record->value > 5))
            $this->errors[] = "The value can only be a number from 1-5";
        if (!empty($record->rating) && (!is_numeric($record->rating) || $record->rating < 1 || $record->rating > 5))
            $this->errors[] = "The rating can only be a number from 1-5";
        if (is_null($record->image)) {
            $record->image = "";
        }
        // Redissleep if any errors
        if (count($this->errors) > 0)
        {
            $record->id = $id;
            $this->present($record);
            return;
        }
        
        // Save stuff
        if ($id == -1)
        {
            $this->Sleeps->add($record);
        }
        else
        {
            $record->id = $id;
            $this->Sleeps->update($record);
        }
        
        $this->index();
    }
    
    function delete($id)
    {
        $this->Sleeps->delete($id);
        $this->index();
    }

}