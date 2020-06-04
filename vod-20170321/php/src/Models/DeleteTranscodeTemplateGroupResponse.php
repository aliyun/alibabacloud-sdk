<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteTranscodeTemplateGroupResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'nonExistTranscodeTemplateIds' => 'NonExistTranscodeTemplateIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nonExistTranscodeTemplateIds', $this->nonExistTranscodeTemplateIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['NonExistTranscodeTemplateIds'] = [];
        if(null !== $this->nonExistTranscodeTemplateIds){
            $res['NonExistTranscodeTemplateIds'] = $this->nonExistTranscodeTemplateIds;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteTranscodeTemplateGroupResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['NonExistTranscodeTemplateIds'])){
            if(!empty($map['NonExistTranscodeTemplateIds'])){
                $model->nonExistTranscodeTemplateIds = [];
                $model->nonExistTranscodeTemplateIds = $map['NonExistTranscodeTemplateIds'];
            }
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.nonExistTranscodeTemplateIds
     * @var array
     */
    public $nonExistTranscodeTemplateIds;

}
