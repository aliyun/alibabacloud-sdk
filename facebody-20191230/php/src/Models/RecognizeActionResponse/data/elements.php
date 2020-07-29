<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeActionResponse\data;

use AlibabaCloud\SDK\Facebody\V20191230\Models\RecognizeActionResponse\data\elements\boxes;
use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var array
     */
    public $boxes;

    /**
     * @var array
     */
    public $scores;

    /**
     * @var array
     */
    public $labels;
    protected $_name = [
        'timestamp' => 'Timestamp',
        'boxes'     => 'Boxes',
        'scores'    => 'Scores',
        'labels'    => 'Labels',
    ];

    public function validate()
    {
        Model::validateRequired('timestamp', $this->timestamp, true);
        Model::validateRequired('boxes', $this->boxes, true);
        Model::validateRequired('scores', $this->scores, true);
        Model::validateRequired('labels', $this->labels, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->boxes) {
            $res['Boxes'] = [];
            if (null !== $this->boxes && \is_array($this->boxes)) {
                $n = 0;
                foreach ($this->boxes as $item) {
                    $res['Boxes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scores) {
            $res['Scores'] = [];
            if (null !== $this->scores) {
                $res['Scores'] = $this->scores;
            }
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels) {
                $res['Labels'] = $this->labels;
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
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = [];
                $n            = 0;
                foreach ($map['Boxes'] as $item) {
                    $model->boxes[$n++] = null !== $item ? boxes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Scores'])) {
            if (!empty($map['Scores'])) {
                $model->scores = [];
                $model->scores = $map['Scores'];
            }
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $model->labels = $map['Labels'];
            }
        }

        return $model;
    }
}
