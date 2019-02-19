
<?php
    
    $error = '';
    $name = '';
    $skill = '';
    $level = '';

    if(isset($_POST["submit"]))
    {
    	if(empty($_POST["name"]))
    		$error .='<p><label class="text-danger">Please neter your name</label></p>';
    	else
    		$name = $_POST["name"];

    	if(empty($_POST["skill"]))
    		$error .='<p><label class="text-danger">please enter skill</label></p>';
    	else
    		$skill = $_POST["skill"];

    	$level = $_POST["level"];

    	if($error == '')
    	{
    		$file_open = fopen("feedback.csv","a");

    		$form_data = array(
    			'name' => $name,
    			'skill' => $skill,
    			'level' => $level);
    		fputcsv($file_open, $form_data);
    		error .= '<p><label class="text-danger">THANKS FOR WRITING FEEDBACK</label></p>';
    		$error = '';
    		$name = '';
    		$skill = '';
    		$level = '';
    	}
    }
?>
