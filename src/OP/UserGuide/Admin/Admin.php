<?php

namespace OP\UserGuide\Admin;

use SilverStripe\Admin\LeftAndMain;
use SilverStripe\ORM\FieldType\DBField;

class UserGuideAdmin extends LeftAndMain
{
    private static $url_segment = 'user-guide';

    private static $menu_title = 'User Guide';

    private static $menu_icon_class = 'font-icon-book';

    private static $embed = null;

    public function getEmbedCode()
    {
        return DBField::create_field('HTMLText', $this->config()->embed);
    }
}
