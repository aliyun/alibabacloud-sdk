<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesRequest\rules;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesRequest\rules\escalations\critical;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesRequest\rules\escalations\info;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutResourceMetricRulesRequest\rules\escalations\warn;
use AlibabaCloud\Tea\Model;

class escalations extends Model
{
    /**
     * @description Critical
     *
     * @var critical
     */
    public $critical;

    /**
     * @description Warn
     *
     * @var warn
     */
    public $warn;

    /**
     * @description Info
     *
     * @var info
     */
    public $info;
    protected $_name = [
        'critical' => 'Critical',
        'warn'     => 'Warn',
        'info'     => 'Info',
    ];

    public function validate()
    {
        Model::validateRequired('critical', $this->critical, true);
        Model::validateRequired('warn', $this->warn, true);
        Model::validateRequired('info', $this->info, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->critical) {
            $res['Critical'] = null !== $this->critical ? $this->critical->toMap() : null;
        }
        if (null !== $this->warn) {
            $res['Warn'] = null !== $this->warn ? $this->warn->toMap() : null;
        }
        if (null !== $this->info) {
            $res['Info'] = null !== $this->info ? $this->info->toMap() : null;
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
        if (isset($map['Critical'])) {
            $model->critical = critical::fromMap($map['Critical']);
        }
        if (isset($map['Warn'])) {
            $model->warn = warn::fromMap($map['Warn']);
        }
        if (isset($map['Info'])) {
            $model->info = info::fromMap($map['Info']);
        }

        return $model;
    }
}
