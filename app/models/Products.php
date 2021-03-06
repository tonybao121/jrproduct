<?php

use \Phalcon\Mvc\Model\Validator as Validator;

class Products extends BaseModel
{
    public function getSource()
    {
        return 'products';
    }

    public function initialize()
    {
        parent::initialize();

        $this->HasManyToMany("id", "Customers", "edit_user","id","Customers","author");
        $this->belongsTo('author','Users','id')
        $this->belongsTo('place_id','Places','id');
    }

    public static function getCollection ($page =1 ,$order,$direction, $limit =5)
    {
        return static::getPaginate(array(
            "is_delete='0'",
            "order" => $order." ".$direction
        ),$page,$limit);
    }
    /* CODE FIX */
    public function getPostCollection($limit=5,$page=1) {
        $paginator   = new \Phalcon\Paginator\Adapter\Model(
            array(
                "data"  => Posts::find(array(
                    "user_id = {$this->id}",
                    "order"  => "created_time DESC"
                )),
                "limit" => $limit,
                "page"  => $page,
            )
        );
        return $paginator->getPaginate();
    }
    /* CODE LOM */

    public function getImageUploadUrl()
    {
        return 'content/user/' . $this->avatar_path;
    }
}
