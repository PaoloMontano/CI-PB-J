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
        
        // Validation
        if (empty($record->phoneId))
            $this->errors[] = "The hotel must have a phone number to contact.";
        else if (!is_numeric($record->phoneId))
            $this->errors[] = "The phone number must contain only numbers.";
        
        if (empty($record->title))
            $this->errors[] = "The hotel must have a name.";
        
        if (strlen($record->desc) < 20)
            $this->errors[] = "The description must be at least 20 characters long.";
        
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