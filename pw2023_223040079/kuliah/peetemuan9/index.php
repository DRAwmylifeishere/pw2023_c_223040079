  <?php
  require('functions.php');
  $title = 'Home';
  $students = [
    [
      "nama" => "Muhammad Indra Krishna", "npm" => "223040079", "email" => "indrakrishna684@gmail.com"
    ],
    [
      "nama" => "Dony Laksmana", "npm" => "223040103", "email" => "Donylks111@gmail.com"
    ],
    [
      "nama" => "George Frederik Pingak", "npm" => "223040080", "email" => "georgetopglobal@gmail.com"
    ]
  ];
  // dd($_SERVER["REQUEST_URI"]); 

  require("views/index.view.php");


  ?>