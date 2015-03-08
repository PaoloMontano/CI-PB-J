<?php

class AdminPlays extends Application {

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
        $this->data['title'] = "Manage Plays";
        
        $this->data['plays'] = $this->Plays->all();
        
	$this->data['pagebody'] = 'admin_plays';
        $this->render();
    }
    
    function add()
    {
        $plays = $this->Plays->create();
        $this->present($plays);
    }
    
    function edit($id)
    {
        $this->present($this->Plays->get($id));
    }
    
    // Present attraction info for adding/editing
    function present($play)
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
        
        $this->data['form_phoneId'] = makeTextField('Phone Number', 'phoneId', $play->phoneId, "", 11, 11);
        $this->data['form_title'] = makeTextField('Name', 'title', $play->title);
        // $this->data['form_image'] = makeTextField('Picture', 'image', $play->image);
        $this->data['form_image'] = makeFileUpload('Picture', 'image', $eat->image);
        $this->data['form_desc'] = makeTextArea('Description', 'desc', $play->desc);
        $this->data['form_value'] = makeTextField('Value', 'value', $play->value);
        $this->data['form_rating'] = makeTextField('Rating', 'rating', $play->rating);
        $this->data['form_link'] = makeTextField('Link', 'link', $play->link);
        
        $this->data['pagebody'] = 'edit_play';
        $this->data['submit'] = makeSubmitButton('Submit Play', "Click here to validate the attraction data", 'btn-success');
        if (!empty($play->id))
            $this->data['id'] = $play->id;
        else
            $this->data['id'] = "-1";
        
        $this->render();
    }
    
    // Validates and confirms the information placed into form
    function confirm($id)
    {
        $record = $this->Plays->create();
        
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
            $this->errors[] = "The attraction must have a phone number to contact.";
        else if (!is_numeric($record->phoneId))
            $this->errors[] = "The phone number must contain only numbers.";
        if (empty($record->title))
            $this->errors[] = "The attraction must have a name.";
        if (strlen($record->desc) < 20)
            $this->errors[] = "The description must be at least 20 characters long.";
        if (!empty($record->value) && (!is_numeric($record->value) || $record->value < 1 || $record->value > 5))
            $this->errors[] = "The value can only be a number from 1-5";
        if (!empty($record->rating) && (!is_numeric($record->rating) || $record->rating < 1 || $record->rating > 5))
            $this->errors[] = "The rating can only be a number from 1-5";
        if (is_null($record->image)) {
            $record->image = "";
        }

        // Redisplay if any errors
        if (count($this->errors) > 0)
        {
            $record->id = $id;
            $this->present($record);
            return;
        }
        
        // Save stuff
        if ($id == -1)
        {
            $this->Plays->add($record);
        }
        else
        {
            $record->id = $id;
            $this->Plays->update($record);
        }
        
        $this->index();
    }
    
    function delete($id)
    {
        $this->Plays->delete($id);
        $this->index();
    }

}