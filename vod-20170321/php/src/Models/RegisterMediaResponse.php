<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\RegisterMediaResponse\registeredMediaList;
use AlibabaCloud\Tea\Model;

class RegisterMediaResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.registeredMediaList
     *
     * @var array
     */
    public $registeredMediaList;

    /**
     * @description data.failedFileURLs
     *
     * @var array
     */
    public $failedFileURLs;
    protected $_name = [
        'requestId'           => 'RequestId',
        'registeredMediaList' => 'RegisteredMediaList',
        'failedFileURLs'      => 'FailedFileURLs',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('registeredMediaList', $this->registeredMediaList, true);
        Model::validateRequired('failedFileURLs', $this->failedFileURLs, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->registeredMediaList) {
            $res['RegisteredMediaList'] = [];
            if (null !== $this->registeredMediaList && \is_array($this->registeredMediaList)) {
                $n = 0;
                foreach ($this->registeredMediaList as $item) {
                    $res['RegisteredMediaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->failedFileURLs) {
            $res['FailedFileURLs'] = [];
            if (null !== $this->failedFileURLs) {
                $res['FailedFileURLs'] = $this->failedFileURLs;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterMediaResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegisteredMediaList'])) {
            if (!empty($map['RegisteredMediaList'])) {
                $model->registeredMediaList = [];
                $n                          = 0;
                foreach ($map['RegisteredMediaList'] as $item) {
                    $model->registeredMediaList[$n++] = null !== $item ? registeredMediaList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FailedFileURLs'])) {
            if (!empty($map['FailedFileURLs'])) {
                $model->failedFileURLs = [];
                $model->failedFileURLs = $map['FailedFileURLs'];
            }
        }

        return $model;
    }
}
