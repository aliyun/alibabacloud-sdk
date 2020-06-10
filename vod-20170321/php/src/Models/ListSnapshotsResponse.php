<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponse\mediaSnapshot;
use AlibabaCloud\Tea\Model;

class ListSnapshotsResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.mediaSnapshot
     *
     * @var mediaSnapshot
     */
    public $mediaSnapshot;
    protected $_name = [
        'requestId'     => 'RequestId',
        'mediaSnapshot' => 'MediaSnapshot',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('mediaSnapshot', $this->mediaSnapshot, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->mediaSnapshot) {
            $res['MediaSnapshot'] = null !== $this->mediaSnapshot ? $this->mediaSnapshot->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSnapshotsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MediaSnapshot'])) {
            $model->mediaSnapshot = mediaSnapshot::fromMap($map['MediaSnapshot']);
        }

        return $model;
    }
}
