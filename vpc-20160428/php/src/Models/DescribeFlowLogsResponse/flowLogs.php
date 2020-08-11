<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFlowLogsResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeFlowLogsResponse\flowLogs\flowLog;
use AlibabaCloud\Tea\Model;

class flowLogs extends Model
{
    /**
     * @var array
     */
    public $flowLog;
    protected $_name = [
        'flowLog' => 'FlowLog',
    ];

    public function validate()
    {
        Model::validateRequired('flowLog', $this->flowLog, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowLog) {
            $res['FlowLog'] = [];
            if (null !== $this->flowLog && \is_array($this->flowLog)) {
                $n = 0;
                foreach ($this->flowLog as $item) {
                    $res['FlowLog'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowLog'])) {
            if (!empty($map['FlowLog'])) {
                $model->flowLog = [];
                $n              = 0;
                foreach ($map['FlowLog'] as $item) {
                    $model->flowLog[$n++] = null !== $item ? flowLog::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
