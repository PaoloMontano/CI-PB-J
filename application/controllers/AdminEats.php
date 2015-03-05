<?php

class AdminEats extends Application {

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
        $this->data['title'] = "Manage Eats";
        
        $this->data['eats'] = $this->eats->all();
        
	$this->data['pagebody'] = 'admin_eats';
        $this->render();
    }
    
    function addEat()
    {
        $eats = $this->eats->create();
        $this->present($eats);
    }
    
    function editEat($id)
    {
        $this->present($this->eats->get($id));
    }
    
    // Present a quotation for adding/editing
    function present($attraction)
    {
        // Format any errors
        $message = "";
        if (count($this->errors) > 0)
        {
            foreach ($this->errors as $booboo)
                $message .= $booboo . BR;
        }
        $this->data['message'] = $message;
        
        $this->data['phoneId'] = makeTextField('Phone Number', 'phoneId', $attraction->phoneId, "", 11, 11);
        $this->data['title'] = makeTextField('Name', 'title', $attraction->title);
        $this->data['image'] = makeTextField('Picture', 'image', $attraction->image);
        $this->data['desc'] = makeTextArea('Description', 'desc', $attraction->desc);
        
        $this->data['pagebody'] = 'edit_eat';
        $this->data['submit'] = makeSubmitButton('Submit Eat', "Click here to validate the eat data", 'btn-success');
        if ($attraction->id)
            $this->data['id'] = $attraction->id;
        else
            $this->data['id'] = "-1";
        
        $this->render();
    }
    
    function confirm($id)
    {
        $record = $this->eats->create();
        
        // Extract submitted fields
        $record->phoneId = $this->input->post('phoneId');
        $record->title = $this->input->post('title');
        $record->image = $this->input->post('image');
        $record->desc = $this->input->post('desc');
        
        // Validation
        if (empty($record->phoneId))
            $this->errors[] = "The attraction must have a phone number to contact.";
        if (empty($record->title))
            $this->errors[] = "You must have a name for the attraction.";
        if (strlen($record->desc) < 20)
            $this->errors[] = "A description must be at least 20 characters long.";
        
        // Redisplay if any errors
        if (count($this->errors) > 0)
        {
            $this->present($record);
            return;
        }
        
        // Save stuff
        if ($id == -1)
            $this->eats->add($record);
        else
        {
            $record->id = $id;
            $this->eats->update($record);
        }
        
        $this->index();
    }
    
    function deleteEat($id)
    {
        $this->eats->delete($id);
        $this->index();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */