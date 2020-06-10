<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeErrorLogsResponse;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeErrorLogsResponse\items\errorLog;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description ErrorLog
     *
     * @var array
     */
    public $errorLog;
    protected $_name = [
        'errorLog' => 'ErrorLog',
    ];

    public function validate()
    {
        Model::validateRequired('errorLog', $this->errorLog, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorLog) {
            $res['ErrorLog'] = [];
            if (null !== $this->errorLog && \is_array($this->errorLog)) {
                $n = 0;
                foreach ($this->errorLog as $item) {
                    $res['ErrorLog'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ErrorLog'])) {
            if (!empty($map['ErrorLog'])) {
                $model->errorLog = [];
                $n               = 0;
                foreach ($map['ErrorLog'] as $item) {
                    $model->errorLog[$n++] = null !== $item ? errorLog::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
