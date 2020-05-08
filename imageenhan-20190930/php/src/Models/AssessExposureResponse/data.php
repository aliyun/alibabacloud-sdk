<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\AssessExposureResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description exposure
     *
     * @var float
     */
    public $exposure;
    protected $_name = [
        'exposure' => 'Exposure',
    ];

    public function validate()
    {
        Model::validateRequired('exposure', $this->exposure, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['Exposure'] = $this->exposure;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Exposure'])) {
            $model->exposure = $map['Exposure'];
        }

        return $model;
    }
}
