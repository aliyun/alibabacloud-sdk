<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\RecognizePublicFaceResponse\data\elements;

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
     * @description subResults
     *
     * @var array
     */
    public $subResults;
    protected $_name = [
        'label'      => 'Label',
        'suggestion' => 'Suggestion',
        'rate'       => 'Rate',
        'subResults' => 'SubResults',
    ];

    public function validate()
    {
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('suggestion', $this->suggestion, true);
        Model::validateRequired('rate', $this->rate, true);
        Model::validateRequired('subResults', $this->subResults, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['Label']      = $this->label;
        $res['Suggestion'] = $this->suggestion;
        $res['Rate']       = $this->rate;
        $res['SubResults'] = [];
        if (null !== $this->subResults && \is_array($this->subResults)) {
            $n = 0;
            foreach ($this->subResults as $item) {
                $res['SubResults'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['SubResults'])) {
            if (!empty($map['SubResults'])) {
                $model->subResults = [];
                $n                 = 0;
                foreach ($map['SubResults'] as $item) {
                    $model->subResults[$n++] = null !== $item ? RecognizePublicFaceResponse\data\elements\results\subResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
