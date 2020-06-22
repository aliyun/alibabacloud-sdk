<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponse\data;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponse\data\evaluateList\evaluate;
use AlibabaCloud\Tea\Model;

class evaluateList extends Model
{
    /**
     * @description Evaluate
     *
     * @var array
     */
    public $evaluate;
    protected $_name = [
        'evaluate' => 'Evaluate',
    ];

    public function validate()
    {
        Model::validateRequired('evaluate', $this->evaluate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->evaluate) {
            $res['Evaluate'] = [];
            if (null !== $this->evaluate && \is_array($this->evaluate)) {
                $n = 0;
                foreach ($this->evaluate as $item) {
                    $res['Evaluate'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return evaluateList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Evaluate'])) {
            if (!empty($map['Evaluate'])) {
                $model->evaluate = [];
                $n               = 0;
                foreach ($map['Evaluate'] as $item) {
                    $model->evaluate[$n++] = null !== $item ? evaluate::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
