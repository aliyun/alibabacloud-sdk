<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\records;
use AlibabaCloud\Tea\Model;

class monitorDatas extends Model
{
    /**
     * @description containerGroupId
     *
     * @var string
     */
    public $containerGroupId;

    /**
     * @description podStats
     *
     * @var array
     */
    public $records;

    /**
     * @description containerInfos
     *
     * @var array
     */
    public $containerInfos;
    protected $_name = [
        'containerGroupId' => 'ContainerGroupId',
        'records'          => 'Records',
        'containerInfos'   => 'ContainerInfos',
    ];

    public function validate()
    {
        Model::validateRequired('containerGroupId', $this->containerGroupId, true);
        Model::validateRequired('records', $this->records, true);
        Model::validateRequired('containerInfos', $this->containerInfos, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerGroupId) {
            $res['ContainerGroupId'] = $this->containerGroupId;
        }
        if (null !== $this->records) {
            $res['Records'] = [];
            if (null !== $this->records && \is_array($this->records)) {
                $n = 0;
                foreach ($this->records as $item) {
                    $res['Records'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->containerInfos) {
            $res['ContainerInfos'] = [];
            if (null !== $this->containerInfos && \is_array($this->containerInfos)) {
                $n = 0;
                foreach ($this->containerInfos as $item) {
                    $res['ContainerInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }
        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = [];
                $n              = 0;
                foreach ($map['Records'] as $item) {
                    $model->records[$n++] = null !== $item ? records::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ContainerInfos'])) {
            if (!empty($map['ContainerInfos'])) {
                $model->containerInfos = [];
                $n                     = 0;
                foreach ($map['ContainerInfos'] as $item) {
                    $model->containerInfos[$n++] = null !== $item ? containerInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
