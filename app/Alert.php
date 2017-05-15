<?php
/**
 * Created by PhpStorm.
 * User: gabriel
 * Date: 15/05/17
 * Time: 09:02 AM
 */

namespace App;


use Illuminate\Session\SessionManager as Session;
use Illuminate\View\Factory as View;

class Alert
{

    /**
     * @var Session
     */
    private $session;
    /**
     * @var View
     */
    private $view;

    public function __construct(Session $session, View $view)
    {
        $this->session = $session;
        $this->view = $view;
    }

    public function message($message, $type)
    {
        $this->session->flash('alert', compact('message', 'type'));
    }

    public function render()
    {
        return $this->view->make('components.alert', session('alert'));
    }
}