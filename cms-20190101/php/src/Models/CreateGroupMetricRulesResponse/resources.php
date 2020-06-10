<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMetricRulesResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMetricRulesResponse\resources\alertResult;
use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description AlertResult
     *
     * @var array
     */
    public $alertResult;
    protected $_name = [
        'alertResult' => 'AlertResult',
    ];

    public function validate()
    {
        Model::validateRequired('alertResult', $this->alertResult, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertResult) {
            $res['AlertResult'] = [];
            if (null !== $this->alertResult && \is_array($this->alertResult)) {
                $n = 0;
                foreach ($this->alertResult as $item) {
                    $res['AlertResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertResult'])) {
            if (!empty($map['AlertResult'])) {
                $model->alertResult = [];
                $n                  = 0;
                foreach ($map['AlertResult'] as $item) {
                    $model->alertResult[$n++] = null !== $item ? alertResult::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
