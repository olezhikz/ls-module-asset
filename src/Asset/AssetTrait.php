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

namespace LS\Module\Asset\Asset;

/**
 * Description of LoaderTrait
 *
 * @author oleg
 */
trait AssetTrait{
    
    protected $type;
    
    protected $aParams = [];
    
    public $loader;
    
    public function setType(string $type) {
        $this->type = $type;
    }
    
    public function getType() {
        return $this->type;
    }
    
    public function setParams(array $aParams) {
        $this->aParams = $aParams;
    }
    
    public function getParams() {
        return $this->aParams;
    }
    
    public function getParamsOne($key) {
        return isset($this->aParams[$key]) ? $this->aParams[$key] : null;
    }
}
