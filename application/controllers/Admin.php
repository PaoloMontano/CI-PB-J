<?php

class Admin extends Application {

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
        $this->data['title'] = "Attraction Maintenance";
        //$this->data['quotes'] = $this->quotes->all();
        
	$this->data['pagebody'] = 'admin';
        $this->render();
    }
    
    function manageEats()
    {
        $this->data['title'] = "Attraction Maintenance";
        
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
        
        $this->data['submit'] = makeSubmitButton('Submit Eat', "Click here to validate the eat data", 'btn-success');
        
        $this->data['pagebody'] = 'edit_eat';
        $this->render();
    }
    
    // Process a quotation edit
    function confirm()
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
            return; // Make sure we don't try to save anything
        }
        
        // Save stuff
        if (empty($record->id)) $this->eats->add($record);
        else $this->eats->update($record);
        
        $this->manageEats();
    }
    
    function deleteEat($phoneId)
    {
        $this->eats->delete($phoneId);
        $this->manageEats();
    }

}

/* End of file Welcome.php */
/* Location: application/controllers/Welcome.php */