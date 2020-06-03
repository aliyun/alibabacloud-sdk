<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ft\V20180713\Models\FtParamListRequest;

use AlibabaCloud\Tea\Model;

class disk extends Model {
    protected $_name = [
        'size' => 'Size',
        'type' => 'Type',
    ];
    public function validate() {
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('type', $this->type, true);
    }
    public function toMap() {
        $res = [];
        $res['Size'] = [];
        if(null !== $this->size){
            $res['Size'] = $this->size;
        }
        $res['Type'] = [];
        if(null !== $this->type){
            $res['Type'] = $this->type;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return disk
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Size'])){
            if(!empty($map['Size'])){
                $model->size = [];
                $model->size = $map['Size'];
            }
        }
        if(isset($map['Type'])){
            if(!empty($map['Type'])){
                $model->type = [];
                $model->type = $map['Type'];
            }
        }
        return $model;
    }
    /**
     * @description sizes
     * @var array
     */
    public $size;

    /**
     * @description types
     * @var array
     */
    public $type;

}
