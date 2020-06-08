<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\CalculateDBInstanceWeightResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\CalculateDBInstanceWeightResponse\items\DBInstanceWeight;

class items extends Model {
    protected $_name = [
        'DBInstanceWeight' => 'DBInstanceWeight',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceWeight', $this->DBInstanceWeight, true);
    }
    public function toMap() {
        $res = [];
        $res['DBInstanceWeight'] = [];
        if(null !== $this->DBInstanceWeight && is_array($this->DBInstanceWeight)){
            $n = 0;
            foreach($this->DBInstanceWeight as $item){
                $res['DBInstanceWeight'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return items
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DBInstanceWeight'])){
            if(!empty($map['DBInstanceWeight'])){
                $model->DBInstanceWeight = [];
                $n = 0;
                foreach($map['DBInstanceWeight'] as $item) {
                    $model->DBInstanceWeight[$n++] = null !== $item ? DBInstanceWeight::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description DBInstanceWeight
     * @var array
     */
    public $DBInstanceWeight;

}
