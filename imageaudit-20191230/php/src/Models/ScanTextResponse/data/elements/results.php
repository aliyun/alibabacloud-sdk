<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanTextResponse\data\elements;

use AlibabaCloud\SDK\Imageaudit\V20191230\Models\ScanTextResponse\data\elements\results\details;
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
     * @description details
     *
     * @var array
     */
    public $details;
    protected $_name = [
        'label'      => 'Label',
        'suggestion' => 'Suggestion',
        'rate'       => 'Rate',
        'details'    => 'Details',
    ];

    public function validate()
    {
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('suggestion', $this->suggestion, true);
        Model::validateRequired('rate', $this->rate, true);
        Model::validateRequired('details', $this->details, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['Label']      = $this->label;
        $res['Suggestion'] = $this->suggestion;
        $res['Rate']       = $this->rate;
        $res['Details']    = [];
        if (null !== $this->details && \is_array($this->details)) {
            $n = 0;
            foreach ($this->details as $item) {
                $res['Details'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n              = 0;
                foreach ($map['Details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
