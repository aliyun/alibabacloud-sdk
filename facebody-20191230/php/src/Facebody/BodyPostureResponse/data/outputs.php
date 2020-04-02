<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\BodyPostureResponse\data;

use AlibabaCloud\Tea\Model;

class outputs extends Model
{
    /**
     * @description humanCount
     *
     * @var int
     */
    public $humanCount;
    /**
     * @description results
     *
     * @var array
     */
    public $results;
    protected $_name = [
        'humanCount' => 'HumanCount',
        'results'    => 'Results',
    ];

    public function validate()
    {
        Model::validateRequired('humanCount', $this->humanCount, true);
        Model::validateRequired('results', $this->results, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['HumanCount'] = $this->humanCount;
        $res['Results']    = [];
        if (null !== $this->results && \is_array($this->results)) {
            $n = 0;
            foreach ($this->results as $item) {
                $res['Results'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HumanCount'])) {
            $model->humanCount = $map['HumanCount'];
        }
        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n              = 0;
                foreach ($map['Results'] as $item) {
                    $model->results[$n++] = null !== $item ? BodyPostureResponse\data\outputs\results::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
