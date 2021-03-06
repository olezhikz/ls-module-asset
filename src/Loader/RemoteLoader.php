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
use LS\Module\Asset\Loader\LoaderInterface;

/**
 * Description of FileLoader
 *
 * @author oleg
 */
class RemoteLoader implements LoaderInterface{
    
    use LoaderTrait;

    public function __construct(string $sPath) {
        $this->sSourcePath = $sPath;
    }

    public function load(\LS\Module\Asset\Asset\Asset $asset) {
        $asset->setTargetPath($this->sSourcePath);
        
        return null;
    }

    public function getLastModified() {
        return null;
    }

     public function getResultPath(string $sDir, string $sTargetPath) {
        return $this->sSourcePath;
    }

    public function prepareParams(array &$aParams) {
        $aParams['merge'] = false;
        $aParams['public'] = false;
    }

}
