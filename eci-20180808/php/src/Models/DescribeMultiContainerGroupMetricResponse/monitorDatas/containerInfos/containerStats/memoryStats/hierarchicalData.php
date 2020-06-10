<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\memoryStats;

use AlibabaCloud\Tea\Model;

class hierarchicalData extends Model
{
    /**
     * @description pgFault
     *
     * @var int
     */
    public $pgFault;

    /**
     * @description pgmajFault
     *
     * @var int
     */
    public $pgmajFault;
    protected $_name = [
        'pgFault'    => 'PgFault',
        'pgmajFault' => 'PgmajFault',
    ];

    public function validate()
    {
        Model::validateRequired('pgFault', $this->pgFault, true);
        Model::validateRequired('pgmajFault', $this->pgmajFault, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pgFault) {
            $res['PgFault'] = $this->pgFault;
        }
        if (null !== $this->pgmajFault) {
            $res['PgmajFault'] = $this->pgmajFault;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hierarchicalData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PgFault'])) {
            $model->pgFault = $map['PgFault'];
        }
        if (isset($map['PgmajFault'])) {
            $model->pgmajFault = $map['PgmajFault'];
        }

        return $model;
    }
}
