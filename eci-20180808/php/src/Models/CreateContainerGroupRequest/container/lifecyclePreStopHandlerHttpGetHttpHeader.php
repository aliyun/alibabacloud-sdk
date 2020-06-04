<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\container;

use AlibabaCloud\Tea\Model;

class lifecyclePreStopHandlerHttpGetHttpHeader extends Model {
    protected $_name = [
        'name' => 'Name',
        'value' => 'Value',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['Name'] = $this->name;
        $res['Value'] = $this->value;
        return $res;
    }
    /**
     * @param array $map
     * @return lifecyclePreStopHandlerHttpGetHttpHeader
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['Value'])){
            $model->value = $map['Value'];
        }
        return $model;
    }
    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description value
     * @var string
     */
    public $value;

}
