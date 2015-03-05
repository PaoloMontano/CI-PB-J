<?php

class AdminPlays extends Application {

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
        $this->data['title'] = "Manage Plays";
        
        $this->data['plays'] = $this->plays->all();
        
	$this->data['pagebody'] = 'admin_plays';
        $this->render();
    }
    
    function add()
    {
        $plays = $this->plays->create();
        $this->present($plays);
    }
    
    function edit($id)
    {
        $this->present($this->plays->get($id));
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
        $this->data['message'] = $message;
        
        $this->data['phoneId'] = makeTextField('Phone Number', 'phoneId', $play->phoneId, "", 11, 11);
        $this->data['title'] = makeTextField('Name', 'title', $play->title);
        $this->data['image'] = makeTextField('Picture', 'image', $play->image);
        $this->data['desc'] = makeTextArea('Description', 'desc', $play->desc);
        
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
        $record = $this->plays->create();
        
        // Extract submitted fields
        $record->phoneId = $this->input->post('phoneId');
        $record->title = $this->input->post('title');
        $record->image = $this->input->post('image');
        $record->desc = $this->input->post('desc');
        
        // Validation
        if (empty($record->phoneId))
            $this->errors[] = "The attraction must have a phone number to contact.";
        else if (!is_numeric($record->phoneId))
            $this->errors[] = "The phone number must contain only numbers.";
        
        if (empty($record->title))
            $this->errors[] = "The attraction must have a name.";
        
        if (strlen($record->desc) < 20)
            $this->errors[] = "The description must be at least 20 characters long.";
        
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
            $this->plays->add($record);
        }
        else
        {
            $record->id = $id;
            $this->plays->update($record);
        }
        
        $this->index();
    }
    
    function delete($id)
    {
        $this->plays->delete($id);
        $this->index();
    }

}