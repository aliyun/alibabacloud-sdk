<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponse\mediaSnapshot;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListSnapshotsResponse\mediaSnapshot\snapshots;

class ListSnapshotsResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'mediaSnapshot' => 'MediaSnapshot',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('mediaSnapshot', $this->mediaSnapshot, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['MediaSnapshot'] = null !== $this->mediaSnapshot ? $this->mediaSnapshot->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListSnapshotsResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['MediaSnapshot'])){
            $model->mediaSnapshot = mediaSnapshot::fromMap($map['MediaSnapshot']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.mediaSnapshot
     * @var mediaSnapshot
     */
    public $mediaSnapshot;

}
