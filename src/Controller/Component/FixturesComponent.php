<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller\Component;

use Cake\Controller\Component;

/**
 * Description of Utils
 *
 * @author sakorn.s
 */
class FixturesComponent extends Component {
    
    public function getContent(){
        $url = "https://connect-th.beinsports.com/th";
        $homepage = $this->urlOpener($url);
        
        $ex1 = explode('<div class="container">', $homepage);
        
        
        
        
        
        return $homepage;
    }

    private function urlOpener($url) {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

}
