<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\DetectFruitsResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description score
     *
     * @var string
     */
    public $score;

    /**
     * @description box
     *
     * @var array
     */
    public $box;
    protected $_name = [
        'name'  => 'Name',
        'score' => 'Score',
        'box'   => 'Box',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('box', $this->box, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->box) {
            $res['Box'] = [];
            if (null !== $this->box) {
                $res['Box'] = $this->box;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Box'])) {
            if (!empty($map['Box'])) {
                $model->box = [];
                $model->box = $map['Box'];
            }
        }

        return $model;
    }
}
