<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesResponse\globalAccelerationInstances\globalAccelerationInstance;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGlobalAccelerationInstancesResponse\globalAccelerationInstances\globalAccelerationInstance\backendServers\backendServer;
use AlibabaCloud\Tea\Model;

class backendServers extends Model
{
    /**
     * @var array
     */
    public $backendServer;
    protected $_name = [
        'backendServer' => 'BackendServer',
    ];

    public function validate()
    {
        Model::validateRequired('backendServer', $this->backendServer, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendServer) {
            $res['BackendServer'] = [];
            if (null !== $this->backendServer && \is_array($this->backendServer)) {
                $n = 0;
                foreach ($this->backendServer as $item) {
                    $res['BackendServer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backendServers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendServer'])) {
            if (!empty($map['BackendServer'])) {
                $model->backendServer = [];
                $n                    = 0;
                foreach ($map['BackendServer'] as $item) {
                    $model->backendServer[$n++] = null !== $item ? backendServer::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
