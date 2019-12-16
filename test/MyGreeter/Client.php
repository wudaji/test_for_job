<?php
namespace MyGreeter;
class Client
{
    public function getGreeting()
    {   
        $result = "";
        $hour = date("G");
        switch ($hour) 
        {
            case 0 < $hour && $hour < 12 :
                $result = "Good morning";
                break;
            case 12 <= $hour && $hour < 18 :
                $result = "Good afternoon";
                break;
            case 18 <= $hour :
                $result = "Good evening";
                break;            
            default:
                break;
        }
        return $result;
    }

}