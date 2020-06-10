<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsResponse\failedFcParameters\fcParameter;
use AlibabaCloud\Tea\Model;

class failedFcParameters extends Model
{
    /**
     * @description FcParameter
     *
     * @var array
     */
    public $fcParameter;
    protected $_name = [
        'fcParameter' => 'FcParameter',
    ];

    public function validate()
    {
        Model::validateRequired('fcParameter', $this->fcParameter, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fcParameter) {
            $res['FcParameter'] = [];
            if (null !== $this->fcParameter && \is_array($this->fcParameter)) {
                $n = 0;
                foreach ($this->fcParameter as $item) {
                    $res['FcParameter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failedFcParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FcParameter'])) {
            if (!empty($map['FcParameter'])) {
                $model->fcParameter = [];
                $n                  = 0;
                foreach ($map['FcParameter'] as $item) {
                    $model->fcParameter[$n++] = null !== $item ? fcParameter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
