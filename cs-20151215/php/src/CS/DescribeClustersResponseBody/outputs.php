<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\CS\DescribeClustersResponseBody;

use AlibabaCloud\Tea\Model;

class outputs extends Model
{
    /**
     * @description Description
     *
     * @var string
     */
    public $description;
    /**
     * @description OutputKey
     *
     * @var string
     */
    public $outputKey;
    /**
     * @description OutputValue
     *
     * @var string
     */
    public $outputValue;
    protected $_name = [
        'description' => 'Description',
        'outputKey'   => 'OutputKey',
        'outputValue' => 'OutputValue',
    ];

    public function validate()
    {
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('outputKey', $this->outputKey, true);
        Model::validateRequired('outputValue', $this->outputValue, true);
    }

    public function toMap()
    {
        $res                = [];
        $res['Description'] = $this->description;
        $res['OutputKey']   = $this->outputKey;
        $res['OutputValue'] = $this->outputValue;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['OutputKey'])) {
            $model->outputKey = $map['OutputKey'];
        }
        if (isset($map['OutputValue'])) {
            $model->outputValue = $map['OutputValue'];
        }

        return $model;
    }
}
