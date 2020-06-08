<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponse\items\DBInstanceAttribute;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceAttributeResponse\items\DBInstanceAttribute\slaveZones\slaveZone;

class slaveZones extends Model {
    protected $_name = [
        'slaveZone' => 'SlaveZone',
    ];
    public function validate() {
        Model::validateRequired('slaveZone', $this->slaveZone, true);
    }
    public function toMap() {
        $res = [];
        $res['SlaveZone'] = [];
        if(null !== $this->slaveZone && is_array($this->slaveZone)){
            $n = 0;
            foreach($this->slaveZone as $item){
                $res['SlaveZone'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return slaveZones
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SlaveZone'])){
            if(!empty($map['SlaveZone'])){
                $model->slaveZone = [];
                $n = 0;
                foreach($map['SlaveZone'] as $item) {
                    $model->slaveZone[$n++] = null !== $item ? slaveZone::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description SlaveZone
     * @var array
     */
    public $slaveZone;

}
