<?php

/**
 * @copyright Copyright (c) 2017
 * @version  Beta 1.0
 * @author kevin
 */

namespace admin\modules\site;

use Yii;

/**
 * Class Module
 * @package app\modules
 */
class SiteModule extends \admin\base\BaseModule
{
    public function init()
    {
        parent::init();

        $this->viewPath = '@admin/views/site';
    }

}
