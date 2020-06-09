<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterAccessWhitelistResponse\items\DBClusterIPArray;

class items extends Model {
    protected $_name = [
        'DBClusterIPArray' => 'DBClusterIPArray',
    ];
    public function validate() {
        Model::validateRequired('DBClusterIPArray', $this->DBClusterIPArray, true);
    }
    public function toMap() {
        $res = [];
        $res['DBClusterIPArray'] = [];
        if(null !== $this->DBClusterIPArray && is_array($this->DBClusterIPArray)){
            $n = 0;
            foreach($this->DBClusterIPArray as $item){
                $res['DBClusterIPArray'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['DBClusterIPArray'])){
            if(!empty($map['DBClusterIPArray'])){
                $model->DBClusterIPArray = [];
                $n = 0;
                foreach($map['DBClusterIPArray'] as $item) {
                    $model->DBClusterIPArray[$n++] = null !== $item ? DBClusterIPArray::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description DBClusterIPArray
     * @var array
     */
    public $DBClusterIPArray;

}
