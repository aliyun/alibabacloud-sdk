<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizePublicFaceResponse\data\elements\results\subResults;

use AlibabaCloud\Tea\Model;

class faces extends Model {
    protected $_name = [
        'id' => 'Id',
        'name' => 'Name',
        'rate' => 'Rate',
    ];
    public function validate() {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('rate', $this->rate, true);
    }
    public function toMap() {
        $res = [];
        $res['Id'] = $this->id;
        $res['Name'] = $this->name;
        $res['Rate'] = $this->rate;
        return $res;
    }
    /**
     * @param array $map
     * @return faces
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Id'])){
            $model->id = $map['Id'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['Rate'])){
            $model->rate = $map['Rate'];
        }
        return $model;
    }
    /**
     * @description id
     * @var string
     */
    public $id;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description rate
     * @var float
     */
    public $rate;

}
