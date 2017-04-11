<?php

/**
* Tree Class
*/
class Tree
{

   private $conection;
   protected $items = [];
   protected $url;

   function __construct()
   {
      try {
        $this->conection = new PDO('mysql:host=localhost;dbname=pruebas', 'root', '');
        $this->conection->exec('SET CHARACTER SET utf8');
        $this->conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      } catch (Exception $e) {
         echo 'Error establishing conection with data base ' . $e->getMessage();
      }
   }

   public function getDirectories()
   {
        $query = $this->conection->prepare('SELECT * from tree');
        $query->execute();
        $this->items['masters'] = [];
        $this->items['childrens'] = [];

        if ($query->rowCount() > 0) {
            foreach ($query->fetchAll() as $directorie) {
                if ($directorie['parent_id'] == 0) {
                    array_push($this->items['masters'], $directorie);
                }else {
                    array_push($this->items['childrens'], $directorie);
                }
            }
        }

        return $this->items;
   }

   public function nested($childrens = [] , $parentId)
   {
        if ($childrens) {
            $html = "<ul>";
            foreach ($childrens as $children) {
                if ($children['parent_id'] == $parentId) {
                    $html .= '<li style="padding-left: .75rem">'.$children['label'].'</li>';
                    $html .= $this->nested($childrens, $children['id']);
                }
            }
            $html .= "</ul>";
            return $html;
        }
   }
}
