<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogsResponse;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogsResponse\items\SQLSlowLog;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description SQLSlowLog
     *
     * @var array
     */
    public $SQLSlowLog;
    protected $_name = [
        'SQLSlowLog' => 'SQLSlowLog',
    ];

    public function validate()
    {
        Model::validateRequired('SQLSlowLog', $this->SQLSlowLog, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SQLSlowLog) {
            $res['SQLSlowLog'] = [];
            if (null !== $this->SQLSlowLog && \is_array($this->SQLSlowLog)) {
                $n = 0;
                foreach ($this->SQLSlowLog as $item) {
                    $res['SQLSlowLog'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['SQLSlowLog'])) {
            if (!empty($map['SQLSlowLog'])) {
                $model->SQLSlowLog = [];
                $n                 = 0;
                foreach ($map['SQLSlowLog'] as $item) {
                    $model->SQLSlowLog[$n++] = null !== $item ? SQLSlowLog::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
