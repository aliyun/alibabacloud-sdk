<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit\ScanImageResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description result
     *
     * @var array
     */
    public $results;
    protected $_name = [
        'results' => 'Results',
    ];

    public function validate()
    {
        Model::validateRequired('results', $this->results, true);
    }

    public function toMap()
    {
        $res            = [];
        $res['Results'] = [];
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n              = 0;
                foreach ($map['Results'] as $item) {
                    $model->results[$n++] = null !== $item ? ScanImageResponse\data\results::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
