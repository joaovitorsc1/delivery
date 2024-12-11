<?php

namespace Project\Delivery\Http;

class Response
{
    public static function json(array $data)
    {
        header("Content-Type: application/json");
        echo json_encode($data);
    }

    public static function redirect(string $to, array $getParams = [])
    {
        $paramCount = 0;
        $queryString = "";
        $url = $to;

        foreach($getParams as $key => $value)
        {
            $paramCount++;
            if($paramCount > 1)
            {
                $queryString .= "&";
            }
            $queryString .= $key . "=" . $value;
            if(!empty($queryString))
            {
                $url = $to . "?" . $queryString;
            } else 
            {
                $url = $to;
            }
        }
        header("Location: " . $url);
        die();
    }
}
?>