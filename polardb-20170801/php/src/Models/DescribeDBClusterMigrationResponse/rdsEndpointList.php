<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterMigrationResponse\rdsEndpointList\addressItems;

class rdsEndpointList extends Model {
    protected $_name = [
        'DBEndpointId' => 'DBEndpointId',
        'endpointType' => 'EndpointType',
        'addressItems' => 'AddressItems',
    ];
    public function validate() {
        Model::validateRequired('DBEndpointId', $this->DBEndpointId, true);
        Model::validateRequired('endpointType', $this->endpointType, true);
        Model::validateRequired('addressItems', $this->addressItems, true);
    }
    public function toMap() {
        $res = [];
        $res['DBEndpointId'] = $this->DBEndpointId;
        $res['EndpointType'] = $this->endpointType;
        $res['AddressItems'] = [];
        if(null !== $this->addressItems && is_array($this->addressItems)){
            $n = 0;
            foreach($this->addressItems as $item){
                $res['AddressItems'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return rdsEndpointList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DBEndpointId'])){
            $model->DBEndpointId = $map['DBEndpointId'];
        }
        if(isset($map['EndpointType'])){
            $model->endpointType = $map['EndpointType'];
        }
        if(isset($map['AddressItems'])){
            if(!empty($map['AddressItems'])){
                $model->addressItems = [];
                $n = 0;
                foreach($map['AddressItems'] as $item) {
                    $model->addressItems[$n++] = null !== $item ? addressItems::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description endpointId
     * @var string
     */
    public $DBEndpointId;

    /**
     * @description endpointType
     * @var string
     */
    public $endpointType;

    /**
     * @description netInfoItems
     * @var array
     */
    public $addressItems;

}
