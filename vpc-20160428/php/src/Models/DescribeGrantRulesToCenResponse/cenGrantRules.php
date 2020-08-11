<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGrantRulesToCenResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGrantRulesToCenResponse\cenGrantRules\cbnGrantRule;
use AlibabaCloud\Tea\Model;

class cenGrantRules extends Model
{
    /**
     * @var array
     */
    public $cbnGrantRule;
    protected $_name = [
        'cbnGrantRule' => 'CbnGrantRule',
    ];

    public function validate()
    {
        Model::validateRequired('cbnGrantRule', $this->cbnGrantRule, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cbnGrantRule) {
            $res['CbnGrantRule'] = [];
            if (null !== $this->cbnGrantRule && \is_array($this->cbnGrantRule)) {
                $n = 0;
                foreach ($this->cbnGrantRule as $item) {
                    $res['CbnGrantRule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cenGrantRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CbnGrantRule'])) {
            if (!empty($map['CbnGrantRule'])) {
                $model->cbnGrantRule = [];
                $n                   = 0;
                foreach ($map['CbnGrantRule'] as $item) {
                    $model->cbnGrantRule[$n++] = null !== $item ? cbnGrantRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
