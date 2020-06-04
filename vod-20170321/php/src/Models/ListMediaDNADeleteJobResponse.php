<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\ListMediaDNADeleteJobResponse\AIJobList;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListMediaDNADeleteJobResponse\nonExistAIJobIds;

class ListMediaDNADeleteJobResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'AIJobList' => 'AIJobList',
        'nonExistAIJobIds' => 'NonExistAIJobIds',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIJobList', $this->AIJobList, true);
        Model::validateRequired('nonExistAIJobIds', $this->nonExistAIJobIds, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AIJobList'] = null !== $this->AIJobList ? $this->AIJobList->toMap() : null;
        $res['NonExistAIJobIds'] = null !== $this->nonExistAIJobIds ? $this->nonExistAIJobIds->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListMediaDNADeleteJobResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AIJobList'])){
            $model->AIJobList = AIJobList::fromMap($map['AIJobList']);
        }
        if(isset($map['NonExistAIJobIds'])){
            $model->nonExistAIJobIds = nonExistAIJobIds::fromMap($map['NonExistAIJobIds']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.jobDTOs
     * @var AIJobList
     */
    public $AIJobList;

    /**
     * @description data.nonExistJobIds
     * @var nonExistAIJobIds
     */
    public $nonExistAIJobIds;

}
