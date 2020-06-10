<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeQrCodeResponse\data\elements;

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
     * @description qrCodesData
     *
     * @var array
     */
    public $qrCodesData;
    protected $_name = [
        'label'       => 'Label',
        'suggestion'  => 'Suggestion',
        'rate'        => 'Rate',
        'qrCodesData' => 'QrCodesData',
    ];

    public function validate()
    {
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('suggestion', $this->suggestion, true);
        Model::validateRequired('rate', $this->rate, true);
        Model::validateRequired('qrCodesData', $this->qrCodesData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->qrCodesData) {
            $res['QrCodesData'] = [];
            if (null !== $this->qrCodesData) {
                $res['QrCodesData'] = $this->qrCodesData;
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
        if (isset($map['QrCodesData'])) {
            if (!empty($map['QrCodesData'])) {
                $model->qrCodesData = [];
                $model->qrCodesData = $map['QrCodesData'];
            }
        }

        return $model;
    }
}
