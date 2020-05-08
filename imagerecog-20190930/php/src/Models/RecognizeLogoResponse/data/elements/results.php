<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeLogoResponse\data\elements;

use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeLogoResponse\data\elements\results\logosData;
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
     * @description LogosData
     *
     * @var array
     */
    public $logosData;
    protected $_name = [
        'label'      => 'Label',
        'suggestion' => 'Suggestion',
        'rate'       => 'Rate',
        'logosData'  => 'LogosData',
    ];

    public function validate()
    {
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('suggestion', $this->suggestion, true);
        Model::validateRequired('rate', $this->rate, true);
        Model::validateRequired('logosData', $this->logosData, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['Label']      = $this->label;
        $res['Suggestion'] = $this->suggestion;
        $res['Rate']       = $this->rate;
        $res['LogosData']  = [];
        if (null !== $this->logosData && \is_array($this->logosData)) {
            $n = 0;
            foreach ($this->logosData as $item) {
                $res['LogosData'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['LogosData'])) {
            if (!empty($map['LogosData'])) {
                $model->logosData = [];
                $n                = 0;
                foreach ($map['LogosData'] as $item) {
                    $model->logosData[$n++] = null !== $item ? logosData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
