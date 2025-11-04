<?php

namespace Fastkit\libs;



class Http
{

    /**
     * method get http request
     * @var string $name action name
     * @param string $name
     * @param callable $function
     * @return void
     */
    public static function get(string $name, callable $function)
    {



        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


        if ($_SERVER['REQUEST_METHOD'] === 'GET' && $name === $uri) {

            $function();
            return;

        }


    }

    /**
     * Summary of post
     * @param string $name
     * @param callable $function
     * @return void
     */
    public static function post(string $name, callable $function)
    {


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


            $request = $_POST;
            $action = $request['action'] ?? '';
            $request['action'] = null;
            $request = array_filter($request);


            if ($action === $name) {

                $function($request);
            }

            return;


        }
    }


    /**
     * Summary of redirect
     * @param string $name
     * @param array $output_message
     * @return never
     */
    public static function redirect(string $name, array $output_message = [])
    {

        header("location: {$name}");
        exit;

    }


    public static function view(string $name)
    {

        $host = $_SERVER;
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        return $host;

    }

    public static function action(string $name)
    {

        return <<<HTML

            <input type='hidden' name='action' value='{$name}'> 

        HTML;

    }




}