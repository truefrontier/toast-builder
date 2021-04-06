<?php

namespace Truefrontier\ToastBuilder\Classes;

/**
 * Class ToastBuilder
 * @package Truefrontier\ToastBuilder\Classes
 */
class ToastBuilder
{
    private string $type = '';
    private string $title = '';
    private string $body = '';
    private bool $show = true;
    private bool $permanent = false;
    private int $autohide = 5000;
    private int $delay = 0;
    private array $action = [];
    private $onAutohideComplete = null;

	/**
	 * ToastBuilder constructor.
	 * @param array $predefinedData
	 */
    public function __construct(array $predefinedData = [])
    {
    	// Prefill properties on construct
	    foreach ($predefinedData as $key => $value) {
		    $this->$key = $value;
	    }
    }

	/**
	 * Build a Toast Instance for session flashing
	 *
	 * @param array $values
	 * @return array
	 */
    public function toast(array $values = []): array {
        return [
            'type' => $values['type'] ?? $this->type,
            'title' => $values['title'] ?? $this->title,
            'body' => $values['body'] ?? $this->body,
            'show' => $values['show'] ?? $this->show,
            'permanent' => $values['permanent'] ?? $this->permanent,
            'autohide' => ($values['permanent'] ?? $this->permanent) ? false : ($values['autohide'] ?? $this->autohide),
            'delay' => $values['delay'] ?? $this->delay,
            'timestamp' => new \Carbon\Carbon('now'),
            'action' => $values['action'] ?? $this->action,
            'onAutohideComplete' => $values['onAutohideComplete'] ?? $this->onAutohideComplete
        ];
    }
}
