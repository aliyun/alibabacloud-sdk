<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponse\DNAResult;
use AlibabaCloud\Tea\Model;

class GetMediaDNAResultResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.resultDTO
     *
     * @var DNAResult
     */
    public $DNAResult;
    protected $_name = [
        'requestId' => 'RequestId',
        'DNAResult' => 'DNAResult',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DNAResult', $this->DNAResult, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DNAResult) {
            $res['DNAResult'] = null !== $this->DNAResult ? $this->DNAResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaDNAResultResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DNAResult'])) {
            $model->DNAResult = DNAResult::fromMap($map['DNAResult']);
        }

        return $model;
    }
}
