<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponse\DBProxyConnectStringItems\DBProxyConnectStringItems;

class DBProxyConnectStringItems extends Model {
    protected $_name = [
        'DBProxyConnectStringItems' => 'DBProxyConnectStringItems',
    ];
    public function validate() {
        Model::validateRequired('DBProxyConnectStringItems', $this->DBProxyConnectStringItems, true);
    }
    public function toMap() {
        $res = [];
        $res['DBProxyConnectStringItems'] = [];
        if(null !== $this->DBProxyConnectStringItems && is_array($this->DBProxyConnectStringItems)){
            $n = 0;
            foreach($this->DBProxyConnectStringItems as $item){
                $res['DBProxyConnectStringItems'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DBProxyConnectStringItems
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DBProxyConnectStringItems'])){
            if(!empty($map['DBProxyConnectStringItems'])){
                $model->DBProxyConnectStringItems = [];
                $n = 0;
                foreach($map['DBProxyConnectStringItems'] as $item) {
                    $model->DBProxyConnectStringItems[$n++] = null !== $item ? DBProxyConnectStringItems::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description DBProxyConnectStringItems
     * @var array
     */
    public $DBProxyConnectStringItems;

}
