<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribePlayVideoStatisResponse\videoPlayStatisDetails;

class DescribePlayVideoStatisResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'videoPlayStatisDetails' => 'VideoPlayStatisDetails',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('videoPlayStatisDetails', $this->videoPlayStatisDetails, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['VideoPlayStatisDetails'] = null !== $this->videoPlayStatisDetails ? $this->videoPlayStatisDetails->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribePlayVideoStatisResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['VideoPlayStatisDetails'])){
            $model->videoPlayStatisDetails = videoPlayStatisDetails::fromMap($map['VideoPlayStatisDetails']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.content.list
     * @var videoPlayStatisDetails
     */
    public $videoPlayStatisDetails;

}
