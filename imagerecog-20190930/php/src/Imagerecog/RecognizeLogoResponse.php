<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Imagerecog;

use AlibabaCloud\SDK\Imagerecog\V20190930\Imagerecog\RecognizeLogoResponse\data;
use AlibabaCloud\Tea\Model;

class RecognizeLogoResponse extends Model
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
     * @var RecognizeLogoResponse.data
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
     * @return RecognizeLogoResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Data'])) {
            $model->data = RecognizeLogoResponse\data::fromMap($map['Data']);
        }

        return $model;
    }
}
