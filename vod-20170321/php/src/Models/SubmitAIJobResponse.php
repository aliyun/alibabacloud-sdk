<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\SubmitAIJobResponse\AIJobList;

class SubmitAIJobResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'AIJobList' => 'AIJobList',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('AIJobList', $this->AIJobList, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['AIJobList'] = null !== $this->AIJobList ? $this->AIJobList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return SubmitAIJobResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['AIJobList'])){
            $model->AIJobList = AIJobList::fromMap($map['AIJobList']);
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

}
