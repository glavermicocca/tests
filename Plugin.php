<?php

namespace Kanboard\Plugin\MittelTheme;
use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->template->hook->attach('template:layout:head', 'MittelTheme:layout/head');
        # $this->template->hook->attach('template:layout:top', 'MittelTheme:layout/top');
        # $this->template->setTemplateOverride('header', 'mitteltheme:layout/header');
    }
}
