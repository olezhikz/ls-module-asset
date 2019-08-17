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

namespace LS\Module\Asset;

use Assetic\Filter\FilterInterface;
use Assetic\FilterManager;

/**
 * Description of ModuleAsset
 *
 * @author oleg
 */
class AssetFactory {
    
    protected $filters;
    
    protected $aParams;
    
    protected $assets;


    public function __construct($aParams) {
        $this->aParams = $aParams;
        
    }
        
    public function setFilterManager(FilterManager $filters) {
        $this->filters = $filters;
    }
    
    public function getFilterManager() {
        return $this->filters;
    }
    
    public function setAssetManager(\Assetic\AssetManager $assets) {
        $this->assets = $assets;
    }
    
    public function buildHTML(string $sType) {
        if(!is_string($sType)){
            throw new \Assetic\Exception('You must set type to build assets');
        }
        
        
    }
    
    public function get($alias) {
        return $this->assets->get($alias);
    }
}
