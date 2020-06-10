<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyParameterLogResponse;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyParameterLogResponse\items\parameterChangeLog;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description ParameterChangeLog
     *
     * @var array
     */
    public $parameterChangeLog;
    protected $_name = [
        'parameterChangeLog' => 'ParameterChangeLog',
    ];

    public function validate()
    {
        Model::validateRequired('parameterChangeLog', $this->parameterChangeLog, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterChangeLog) {
            $res['ParameterChangeLog'] = [];
            if (null !== $this->parameterChangeLog && \is_array($this->parameterChangeLog)) {
                $n = 0;
                foreach ($this->parameterChangeLog as $item) {
                    $res['ParameterChangeLog'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ParameterChangeLog'])) {
            if (!empty($map['ParameterChangeLog'])) {
                $model->parameterChangeLog = [];
                $n                         = 0;
                foreach ($map['ParameterChangeLog'] as $item) {
                    $model->parameterChangeLog[$n++] = null !== $item ? parameterChangeLog::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
