<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetTranscodeTemplateGroupResponse\transcodeTemplateGroup;

class GetTranscodeTemplateGroupResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'transcodeTemplateGroup' => 'TranscodeTemplateGroup',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('transcodeTemplateGroup', $this->transcodeTemplateGroup, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TranscodeTemplateGroup'] = null !== $this->transcodeTemplateGroup ? $this->transcodeTemplateGroup->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetTranscodeTemplateGroupResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['TranscodeTemplateGroup'])){
            $model->transcodeTemplateGroup = transcodeTemplateGroup::fromMap($map['TranscodeTemplateGroup']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.transcodeTemplateGroup
     * @var transcodeTemplateGroup
     */
    public $transcodeTemplateGroup;

}
