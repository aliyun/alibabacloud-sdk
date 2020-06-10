<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponse\processes\process;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeGroupMonitoringAgentProcessResponse\processes\process\matchExpress\matchExpress;
use AlibabaCloud\Tea\Model;

class matchExpress extends Model
{
    /**
     * @description MatchExpress
     *
     * @var array
     */
    public $matchExpress;
    protected $_name = [
        'matchExpress' => 'MatchExpress',
    ];

    public function validate()
    {
        Model::validateRequired('matchExpress', $this->matchExpress, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->matchExpress) {
            $res['MatchExpress'] = [];
            if (null !== $this->matchExpress && \is_array($this->matchExpress)) {
                $n = 0;
                foreach ($this->matchExpress as $item) {
                    $res['MatchExpress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matchExpress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MatchExpress'])) {
            if (!empty($map['MatchExpress'])) {
                $model->matchExpress = [];
                $n                   = 0;
                foreach ($map['MatchExpress'] as $item) {
                    $model->matchExpress[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
