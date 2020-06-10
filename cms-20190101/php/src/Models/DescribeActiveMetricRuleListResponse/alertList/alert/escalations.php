<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponse\alertList\alert;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponse\alertList\alert\escalations\critical;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponse\alertList\alert\escalations\info;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeActiveMetricRuleListResponse\alertList\alert\escalations\warn;
use AlibabaCloud\Tea\Model;

class escalations extends Model
{
    /**
     * @description info
     *
     * @var info
     */
    public $info;

    /**
     * @description warn
     *
     * @var warn
     */
    public $warn;

    /**
     * @description critical
     *
     * @var critical
     */
    public $critical;
    protected $_name = [
        'info'     => 'Info',
        'warn'     => 'Warn',
        'critical' => 'Critical',
    ];

    public function validate()
    {
        Model::validateRequired('info', $this->info, true);
        Model::validateRequired('warn', $this->warn, true);
        Model::validateRequired('critical', $this->critical, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->info) {
            $res['Info'] = null !== $this->info ? $this->info->toMap() : null;
        }
        if (null !== $this->warn) {
            $res['Warn'] = null !== $this->warn ? $this->warn->toMap() : null;
        }
        if (null !== $this->critical) {
            $res['Critical'] = null !== $this->critical ? $this->critical->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return escalations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Info'])) {
            $model->info = info::fromMap($map['Info']);
        }
        if (isset($map['Warn'])) {
            $model->warn = warn::fromMap($map['Warn']);
        }
        if (isset($map['Critical'])) {
            $model->critical = critical::fromMap($map['Critical']);
        }

        return $model;
    }
}
