<?php

namespace Kanboard\Plugin\MittelTheme;
use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on('template:layout:css', array('template' => 'plugins/MittelTheme/Template/css/main.css'));
        # $this->template->hook->attach('template:layout:top', 'MittelTheme:layout/top');
        # $this->template->setTemplateOverride('header', 'mitteltheme:layout/header');
    }
}
