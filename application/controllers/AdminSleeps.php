<?php

class AdminSleeps extends Application {

    function __construct()
    {
	parent::__construct();
        $this->load->helper('formfields');
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------
    function index()
    {
        $this->data['title'] = "Manage Sleeps";
        
        $this->data['sleeps'] = $this->sleeps->all();
        
	$this->data['pagebody'] = 'admin_sleeps';
        $this->render();
    }
    
    function add()
    {
        $sleeps = $this->sleeps->create();
        $this->present($sleeps);
    }
    
    function edit($id)
    {
        $this->present($this->sleeps->get($id));
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
        $this->data['message'] = $message;
        
        $this->data['phoneId'] = makeTextField('Phone Number', 'phoneId', $sleep->phoneId, "", 11, 11);
        $this->data['title'] = makeTextField('Name', 'title', $sleep->title);
        $this->data['image'] = makeTextField('Picture', 'image', $sleep->image);
        $this->data['desc'] = makeTextArea('Description', 'desc', $sleep->desc);
        $this->data['value'] = makeTextField('Value', 'value', $sleep->value);
        $this->data['rating'] = makeTextField('Rating', 'rating', $sleep->rating);
        $this->data['link'] = makeTextField('Link', 'link', $sleep->link);
        
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
        $record = $this->sleeps->create();
        
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
            $this->sleeps->add($record);
        }
        else
        {
            $record->id = $id;
            $this->sleeps->update($record);
        }
        
        $this->index();
    }
    
    function delete($id)
    {
        $this->sleeps->delete($id);
        $this->index();
    }

}