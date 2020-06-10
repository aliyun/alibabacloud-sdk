<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeSupportLinesResponse\recordLines;

use AlibabaCloud\Tea\Model;

class recordLine extends Model
{
    /**
     * @description lineCode
     *
     * @var string
     */
    public $lineCode;

    /**
     * @description fatherCode
     *
     * @var string
     */
    public $fatherCode;

    /**
     * @description lineName
     *
     * @var string
     */
    public $lineName;

    /**
     * @description lineDisplayName
     *
     * @var string
     */
    public $lineDisplayName;
    protected $_name = [
        'lineCode'        => 'LineCode',
        'fatherCode'      => 'FatherCode',
        'lineName'        => 'LineName',
        'lineDisplayName' => 'LineDisplayName',
    ];

    public function validate()
    {
        Model::validateRequired('lineCode', $this->lineCode, true);
        Model::validateRequired('fatherCode', $this->fatherCode, true);
        Model::validateRequired('lineName', $this->lineName, true);
        Model::validateRequired('lineDisplayName', $this->lineDisplayName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lineCode) {
            $res['LineCode'] = $this->lineCode;
        }
        if (null !== $this->fatherCode) {
            $res['FatherCode'] = $this->fatherCode;
        }
        if (null !== $this->lineName) {
            $res['LineName'] = $this->lineName;
        }
        if (null !== $this->lineDisplayName) {
            $res['LineDisplayName'] = $this->lineDisplayName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordLine
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LineCode'])) {
            $model->lineCode = $map['LineCode'];
        }
        if (isset($map['FatherCode'])) {
            $model->fatherCode = $map['FatherCode'];
        }
        if (isset($map['LineName'])) {
            $model->lineName = $map['LineName'];
        }
        if (isset($map['LineDisplayName'])) {
            $model->lineDisplayName = $map['LineDisplayName'];
        }

        return $model;
    }
}
