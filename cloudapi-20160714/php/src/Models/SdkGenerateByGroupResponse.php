<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SdkGenerateByGroupResponse extends Model
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
     * @var string
     */
    public $downloadLink;
    protected $_name = [
        'requestId'    => 'RequestId',
        'downloadLink' => 'DownloadLink',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('downloadLink', $this->downloadLink, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->downloadLink) {
            $res['DownloadLink'] = $this->downloadLink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SdkGenerateByGroupResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DownloadLink'])) {
            $model->downloadLink = $map['DownloadLink'];
        }

        return $model;
    }
}
