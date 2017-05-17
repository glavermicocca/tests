<?php

namespace Kanboard\Plugin\MittelTheme;
use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on('template:layout:css', array('template' => 'plugins/MittelTheme/Template/css/main.css'));
        # $this->template->setTemplateOverride('header', 'mitteltheme:layout/header');
        $this->template->hook->attach('template:auth:login-form:before', 'MittelTheme:layout/login-before');
        $this->template->setTemplateOverride('header/title', 'MittelTheme:layout/title', array(
            'project' => isset($project) ? $project : null,
            'task' => isset($task) ? $task : null,
            'description' => isset($description) ? $description : null,
            'title' => isset($title) ? $title : null,
        ));
    }
}
