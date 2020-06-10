<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterEndpointsResponse;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterEndpointsResponse\items\addressItems;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description endpointId
     *
     * @var string
     */
    public $DBEndpointId;

    /**
     * @description endpointType
     *
     * @var string
     */
    public $endpointType;

    /**
     * @description nodes
     *
     * @var string
     */
    public $nodes;

    /**
     * @description readWriteMode
     *
     * @var string
     */
    public $readWriteMode;

    /**
     * @description autoAddNewNodes
     *
     * @var string
     */
    public $autoAddNewNodes;

    /**
     * @description endpointConfig
     *
     * @var string
     */
    public $endpointConfig;

    /**
     * @description netInfoItems
     *
     * @var array
     */
    public $addressItems;
    protected $_name = [
        'DBEndpointId'    => 'DBEndpointId',
        'endpointType'    => 'EndpointType',
        'nodes'           => 'Nodes',
        'readWriteMode'   => 'ReadWriteMode',
        'autoAddNewNodes' => 'AutoAddNewNodes',
        'endpointConfig'  => 'EndpointConfig',
        'addressItems'    => 'AddressItems',
    ];

    public function validate()
    {
        Model::validateRequired('DBEndpointId', $this->DBEndpointId, true);
        Model::validateRequired('endpointType', $this->endpointType, true);
        Model::validateRequired('nodes', $this->nodes, true);
        Model::validateRequired('readWriteMode', $this->readWriteMode, true);
        Model::validateRequired('autoAddNewNodes', $this->autoAddNewNodes, true);
        Model::validateRequired('endpointConfig', $this->endpointConfig, true);
        Model::validateRequired('addressItems', $this->addressItems, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBEndpointId) {
            $res['DBEndpointId'] = $this->DBEndpointId;
        }
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
        }
        if (null !== $this->readWriteMode) {
            $res['ReadWriteMode'] = $this->readWriteMode;
        }
        if (null !== $this->autoAddNewNodes) {
            $res['AutoAddNewNodes'] = $this->autoAddNewNodes;
        }
        if (null !== $this->endpointConfig) {
            $res['EndpointConfig'] = $this->endpointConfig;
        }
        if (null !== $this->addressItems) {
            $res['AddressItems'] = [];
            if (null !== $this->addressItems && \is_array($this->addressItems)) {
                $n = 0;
                foreach ($this->addressItems as $item) {
                    $res['AddressItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBEndpointId'])) {
            $model->DBEndpointId = $map['DBEndpointId'];
        }
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['Nodes'])) {
            $model->nodes = $map['Nodes'];
        }
        if (isset($map['ReadWriteMode'])) {
            $model->readWriteMode = $map['ReadWriteMode'];
        }
        if (isset($map['AutoAddNewNodes'])) {
            $model->autoAddNewNodes = $map['AutoAddNewNodes'];
        }
        if (isset($map['EndpointConfig'])) {
            $model->endpointConfig = $map['EndpointConfig'];
        }
        if (isset($map['AddressItems'])) {
            if (!empty($map['AddressItems'])) {
                $model->addressItems = [];
                $n                   = 0;
                foreach ($map['AddressItems'] as $item) {
                    $model->addressItems[$n++] = null !== $item ? addressItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
