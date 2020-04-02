<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\DetectLivingFaceResponse\data\elements;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description label
     *
     * @var string
     */
    public $label;
    /**
     * @description suggestion
     *
     * @var string
     */
    public $suggestion;
    /**
     * @description rate
     *
     * @var float
     */
    public $rate;
    /**
     * @description frames
     *
     * @var array
     */
    public $frames;
    protected $_name = [
        'label'      => 'Label',
        'suggestion' => 'Suggestion',
        'rate'       => 'Rate',
        'frames'     => 'Frames',
    ];

    public function validate()
    {
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('suggestion', $this->suggestion, true);
        Model::validateRequired('rate', $this->rate, true);
        Model::validateRequired('frames', $this->frames, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['Label']      = $this->label;
        $res['Suggestion'] = $this->suggestion;
        $res['Rate']       = $this->rate;
        $res['Frames']     = [];
        if (null !== $this->frames && \is_array($this->frames)) {
            $n = 0;
            foreach ($this->frames as $item) {
                $res['Frames'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['Frames'])) {
            if (!empty($map['Frames'])) {
                $model->frames = [];
                $n             = 0;
                foreach ($map['Frames'] as $item) {
                    $model->frames[$n++] = null !== $item ? DetectLivingFaceResponse\data\elements\results\frames::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
