<?php
//this is the controller for the index page.
//You are going to need to create / use a accounts controller that deals with login and registration you should not submit the post for the to the index controller
//POST index.php?page=accounts?action=create for adding a user
//POST index.php?page=accounts?action=login for logging a  user in and get the userID out of the session
//POST index.php?page=accounts?action=logout  this would destroy the session and return the user to the homepage
//GET  index.php?page=accounts?action=show  this would be to show the user profile and you get the userID out of session
class homepageController extends http\controller
{
    public static function show()
    {
// for site name display
        $templateData['site_name'] = 'mysite';
//template data contains what will show up in the $data variable in the homepage template
//the name of the template 'homepage' becomes 'homepage.php' in the pages directory
        self::getTemplate('homepage', $templateData);
    }
    public static function create()
    {
//I just put a $_POST here but this is where you would put the code to add a record
        print_r($_POST);
    }
}
?>