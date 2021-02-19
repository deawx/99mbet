<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\Folder;
use Cake\Utility\Hash;
use Cake\ORM\TableRegistry;
/**
 * Home Controller
 *
 *
 * @method \App\Model\Entity\Home[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomeController extends AppController {

    public $Articles = null;
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->loadComponent('Fixtures');

        $ex = $this->Fixtures->getContent();
        $webImages = $this->getWebSlider();
        $mobileImages = $this->getMobileSlider();
        
        $this->Articles = TableRegistry::get('Articles');
        $q = $this->Articles->find()
                ->contain(['ArticleTypes','Images'])
                ->where(['ArticleTypes.name'=>'trick'])
                ->order(['Articles.created'=>'DESC'])
                ->limit(4);
        
        $tricks = $q->toArray();
        

        $this->set(compact('ex','webImages','mobileImages','tricks'));
    }
    

    private function getWebSlider() {
        $dir = new Folder(WWW_ROOT . 'img/slider/web');
        $pngFiles = $dir->find('.*\.png');
        $jpgFiles = $dir->find('.*\.jpg');
        
        $fullFilePath = SITE_URL . 'img/slider/web/';



        $imageFiles = [];
        
        foreach ($jpgFiles as $f):
            $title = preg_split("/[_.]+/", $f);
            $arr = [
                'path' => $fullFilePath,
                'filename' => $f,
                'title' => $title[1]
                
            ];
            array_push($imageFiles, $arr);
        endforeach;
        
        foreach ($pngFiles as $f):
            $title = preg_split("/[_.]+/", $f);
            $arr = [
                'path' => $fullFilePath,
                'filename' => $f,
                'title' => $title[1]
                
            ];
            array_push($imageFiles, $arr);
        endforeach;

        $imageFiles = Hash::sort($imageFiles, '{n}.filename', 'ASC');
        return $imageFiles;
    }

    private function getMobileSlider() {
        $dir = new Folder(WWW_ROOT . 'img/slider/mobile');
        $pngFiles = $dir->find('.*\.png');
        $jpgFiles = $dir->find('.*\.jpg');
        
        $fullFilePath = SITE_URL . 'img/slider/mobile/';



        $imageFiles = [];
        
        foreach ($jpgFiles as $f):
            $title = preg_split("/[_.]+/", $f);
            $arr = [
                'path' => $fullFilePath,
                'filename' => $f,
                'title' => $title[1]
                
            ];
            array_push($imageFiles, $arr);
        endforeach;
        
        foreach ($pngFiles as $f):
            $title = preg_split("/[_.]+/", $f);
            $arr = [
                'path' => $fullFilePath,
                'filename' => $f,
                'title' => $title[1]
                
            ];
            array_push($imageFiles, $arr);
        endforeach;

        $imageFiles = Hash::sort($imageFiles, '{n}.filename', 'ASC');
        return $imageFiles;
    }

}
