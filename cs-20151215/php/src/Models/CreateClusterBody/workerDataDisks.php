<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterBody;

use AlibabaCloud\Tea\Model;

class workerDataDisks extends Model {
    protected $_name = [
        'category' => 'category',
        'size' => 'size',
        'encrypted' => 'encrypted',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['category'] = $this->category;
        $res['size'] = $this->size;
        $res['encrypted'] = $this->encrypted;
        return $res;
    }
    /**
     * @param array $map
     * @return workerDataDisks
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['category'])){
            $model->category = $map['category'];
        }
        if(isset($map['size'])){
            $model->size = $map['size'];
        }
        if(isset($map['encrypted'])){
            $model->encrypted = $map['encrypted'];
        }
        return $model;
    }
    /**
     * @description category
     * @var string
     */
    public $category;

    /**
     * @description size
     * @var string
     */
    public $size;

    /**
     * @description encrypted
     * @var string
     */
    public $encrypted;

}
