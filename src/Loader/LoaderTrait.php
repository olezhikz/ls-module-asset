<?php

/*
 * LiveStreet CMS
 * Copyright © 2013 OOO "ЛС-СОФТ"
 *
 * ------------------------------------------------------
 *
 * Official site: www.livestreetcms.com
 * Contact e-mail: end-fin@yandex.ru
 *
 * GNU General Public License, version 2:
 * http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 *
 * ------------------------------------------------------
 *
 * @link https://vk.com/u_demidova
 * @copyright 2013 OOO "ЛС-СОФТ"
 * @author Oleg Demidov <end-fin@yandex.ru>
 *
 */

namespace LS\Module\Asset\Loader;

/**
 * Description of LoaderTrait
 *
 * @author oleg
 */
trait LoaderTrait{
    
    protected $sSourcePath;
    
    public function setSourcePath(string $sSourcePath) {
        $this->sSourcePath = $sSourcePath;
    }
    
    public function getSourcePath() {
        return $this->sSourcePath;
    }

}
