<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class CreateFaceDbRequest extends Model {
    protected $_name = [
        'name' => 'Name',
    ];
    public function validate() {
        Model::validateRequired('name', $this->name, true);
    }
    public function toMap() {
        $res = [];
        $res['Name'] = $this->name;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateFaceDbRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        return $model;
    }
    /**
     * @description name
     * @var string
     */
    public $name;

}
