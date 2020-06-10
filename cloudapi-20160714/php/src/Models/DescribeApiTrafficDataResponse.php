<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficDataResponse\callDownloads;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficDataResponse\callUploads;
use AlibabaCloud\Tea\Model;

class DescribeApiTrafficDataResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.uploadList
     *
     * @var callUploads
     */
    public $callUploads;

    /**
     * @description data.downloadList
     *
     * @var callDownloads
     */
    public $callDownloads;
    protected $_name = [
        'requestId'     => 'RequestId',
        'callUploads'   => 'CallUploads',
        'callDownloads' => 'CallDownloads',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('callUploads', $this->callUploads, true);
        Model::validateRequired('callDownloads', $this->callDownloads, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->callUploads) {
            $res['CallUploads'] = null !== $this->callUploads ? $this->callUploads->toMap() : null;
        }
        if (null !== $this->callDownloads) {
            $res['CallDownloads'] = null !== $this->callDownloads ? $this->callDownloads->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiTrafficDataResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CallUploads'])) {
            $model->callUploads = callUploads::fromMap($map['CallUploads']);
        }
        if (isset($map['CallDownloads'])) {
            $model->callDownloads = callDownloads::fromMap($map['CallDownloads']);
        }

        return $model;
    }
}
