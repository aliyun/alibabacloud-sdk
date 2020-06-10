<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessCompositionResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description score
     *
     * @var float
     */
    public $score;
    protected $_name = [
        'score' => 'Score',
    ];

    public function validate()
    {
        Model::validateRequired('score', $this->score, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->score) {
            $res['Score'] = $this->score;
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
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
