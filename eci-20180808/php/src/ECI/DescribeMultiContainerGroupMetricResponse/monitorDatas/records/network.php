<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas\records;

use AlibabaCloud\Tea\Model;

class network extends Model
{
    /**
     * @description interfaces
     *
     * @var array
     */
    public $interfaces;
    protected $_name = [
        'interfaces' => 'Interfaces',
    ];

    public function validate()
    {
        Model::validateRequired('interfaces', $this->interfaces, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['Interfaces'] = [];
        if (null !== $this->interfaces && \is_array($this->interfaces)) {
            $n = 0;
            foreach ($this->interfaces as $item) {
                $res['Interfaces'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return network
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Interfaces'])) {
            if (!empty($map['Interfaces'])) {
                $model->interfaces = [];
                $n                 = 0;
                foreach ($map['Interfaces'] as $item) {
                    $model->interfaces[$n++] = null !== $item ? DescribeMultiContainerGroupMetricResponse\monitorDatas\records\network\interfaces::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
