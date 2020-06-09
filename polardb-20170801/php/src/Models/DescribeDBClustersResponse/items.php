<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClustersResponse\items\DBCluster;

class items extends Model {
    protected $_name = [
        'DBCluster' => 'DBCluster',
    ];
    public function validate() {
        Model::validateRequired('DBCluster', $this->DBCluster, true);
    }
    public function toMap() {
        $res = [];
        $res['DBCluster'] = [];
        if(null !== $this->DBCluster && is_array($this->DBCluster)){
            $n = 0;
            foreach($this->DBCluster as $item){
                $res['DBCluster'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['DBCluster'])){
            if(!empty($map['DBCluster'])){
                $model->DBCluster = [];
                $n = 0;
                foreach($map['DBCluster'] as $item) {
                    $model->DBCluster[$n++] = null !== $item ? DBCluster::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description DBCluster
     * @var array
     */
    public $DBCluster;

}
