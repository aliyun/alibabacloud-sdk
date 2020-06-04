<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ProduceEditingProjectVideoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'mediaId' => 'MediaId',
        'projectId' => 'ProjectId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('mediaId', $this->mediaId, true);
        Model::validateRequired('projectId', $this->projectId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['MediaId'] = $this->mediaId;
        $res['ProjectId'] = $this->projectId;
        return $res;
    }
    /**
     * @param array $map
     * @return ProduceEditingProjectVideoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['MediaId'])){
            $model->mediaId = $map['MediaId'];
        }
        if(isset($map['ProjectId'])){
            $model->projectId = $map['ProjectId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.mediaId
     * @var string
     */
    public $mediaId;

    /**
     * @description data.projectId
     * @var string
     */
    public $projectId;

}
