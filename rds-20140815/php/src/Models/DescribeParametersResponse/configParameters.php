<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParametersResponse\configParameters\DBInstanceParameter;

class configParameters extends Model {
    protected $_name = [
        'DBInstanceParameter' => 'DBInstanceParameter',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceParameter', $this->DBInstanceParameter, true);
    }
    public function toMap() {
        $res = [];
        $res['DBInstanceParameter'] = [];
        if(null !== $this->DBInstanceParameter && is_array($this->DBInstanceParameter)){
            $n = 0;
            foreach($this->DBInstanceParameter as $item){
                $res['DBInstanceParameter'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return configParameters
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DBInstanceParameter'])){
            if(!empty($map['DBInstanceParameter'])){
                $model->DBInstanceParameter = [];
                $n = 0;
                foreach($map['DBInstanceParameter'] as $item) {
                    $model->DBInstanceParameter[$n++] = null !== $item ? DBInstanceParameter::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description DBInstanceParameter
     * @var array
     */
    public $DBInstanceParameter;

}
