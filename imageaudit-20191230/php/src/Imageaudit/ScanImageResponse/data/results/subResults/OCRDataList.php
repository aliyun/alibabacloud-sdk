<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit\ScanImageResponse\data\results\subResults;

use AlibabaCloud\Tea\Model;

class OCRDataList extends Model
{
    /**
     * @description OCRData
     *
     * @var string
     */
    public $OCRData;
    protected $_name = [
        'OCRData' => 'OCRData',
    ];

    public function validate()
    {
        Model::validateRequired('OCRData', $this->OCRData, true);
    }

    public function toMap()
    {
        $res            = [];
        $res['OCRData'] = $this->OCRData;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OCRDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OCRData'])) {
            $model->OCRData = $map['OCRData'];
        }

        return $model;
    }
}
