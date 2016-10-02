<?php

namespace App\Routes;

use flight as app;
use App\Controllers\BaseController as BaseController;



  app::route('POST /update', function(){

       BaseController::User();

   });


   /****************************
    * Init Routing *
    ****************************/

app::start();
