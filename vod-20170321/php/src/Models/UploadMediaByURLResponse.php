<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\UploadMediaByURLResponse\uploadJobs;
use AlibabaCloud\Tea\Model;

class UploadMediaByURLResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.uploadJobs
     *
     * @var array
     */
    public $uploadJobs;
    protected $_name = [
        'requestId'  => 'RequestId',
        'uploadJobs' => 'UploadJobs',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('uploadJobs', $this->uploadJobs, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->uploadJobs) {
            $res['UploadJobs'] = [];
            if (null !== $this->uploadJobs && \is_array($this->uploadJobs)) {
                $n = 0;
                foreach ($this->uploadJobs as $item) {
                    $res['UploadJobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadMediaByURLResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UploadJobs'])) {
            if (!empty($map['UploadJobs'])) {
                $model->uploadJobs = [];
                $n                 = 0;
                foreach ($map['UploadJobs'] as $item) {
                    $model->uploadJobs[$n++] = null !== $item ? uploadJobs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
