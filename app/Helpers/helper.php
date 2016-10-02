<?php
/**
 * Author Sooraj Narayan.
 *  Copyright (c) 2016 Sooraj Narayan.
 *  Mail: surajnarayann@gmail.com.
 *  Github: https://github.com/sooraj007
 *  Permission is hereby granted, free of charge, to any person obtaining a copy of this software.
 *  Software and associated documentation files (the "Software"), to deal in the Software without restriction.
 *  Which includes the right to use without limitation .
 */

namespace App\Helpers;

use flight as app;


class Helper
{

    public static $var =  ['from','to'];

 public  function __construct()
{


}

public static function run()
{


return new self;

}


public  function mail($from,$to)
    {
    self::$var['from'] = $from;
    self::$var['to'] = $to;
echo "Mail from {$from} mail to {$to}";
    //return new self;

    }




}







