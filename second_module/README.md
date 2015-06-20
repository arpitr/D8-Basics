

Menus are divided into
COnfiguration
 - Routing Info in yml file
 - Callback fucntion as defined in COntroller.

 1. File <my_module_name>.routing.yml will contain routing info, which basically is 

 //<module_name>.<machine_name_for_menu>
 second_module.my_first_page:
 // Menu Path for the custom page
  path: '/my-first-page'
 // Default section to register Callback function for page output
 // Here we define Controller name and callback function to return page content.
  defaults:
    // Drupal autoloads the controller file with help of PSRO-4 stds, all we say to do Drupal is there is a controller under namspace \Drupal\second_module\Controller\.
    _controller: '\Drupal\second_module\Controller\FirstController::FrstCallBack'
    _title: 'My First Custom Page'
  requirements:
    // Permission for Menu item.
    _permission: 'access content'

 2. Setup controller at the right place.
   under <my_mdoule> create src/controller Create FirstController.php class.

