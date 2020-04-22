<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Imageseg;

use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentHairResponse\data;
use AlibabaCloud\Tea\Model;

class SegmentHairResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data
     *
     * @var SegmentHairResponse.data
     */
    public $data;
    protected $_name = [
        'requestId' => 'RequestId',
        'data'      => 'Data',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('data', $this->data, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['RequestId'] = $this->requestId;
        $res['Data']      = null !== $this->data ? $this->data->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SegmentHairResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Data'])) {
            $model->data = SegmentHairResponse\data::fromMap($map['Data']);
        }

        return $model;
    }
}
