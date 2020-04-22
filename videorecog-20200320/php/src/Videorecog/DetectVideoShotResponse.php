<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Videorecog;

use AlibabaCloud\SDK\Videorecog\V20200320\Videorecog\DetectVideoShotResponse\data;
use AlibabaCloud\Tea\Model;

class DetectVideoShotResponse extends Model
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
     * @var DetectVideoShotResponse.data
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
     * @return DetectVideoShotResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Data'])) {
            $model->data = DetectVideoShotResponse\data::fromMap($map['Data']);
        }

        return $model;
    }
}
