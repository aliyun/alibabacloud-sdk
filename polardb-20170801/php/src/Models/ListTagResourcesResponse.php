<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\ListTagResourcesResponse\tagResources;

class ListTagResourcesResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'nextToken' => 'NextToken',
        'tagResources' => 'TagResources',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('tagResources', $this->tagResources, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['NextToken'] = $this->nextToken;
        $res['TagResources'] = null !== $this->tagResources ? $this->tagResources->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return ListTagResourcesResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['NextToken'])){
            $model->nextToken = $map['NextToken'];
        }
        if(isset($map['TagResources'])){
            $model->tagResources = tagResources::fromMap($map['TagResources']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.nextToken
     * @var string
     */
    public $nextToken;

    /**
     * @description data.resources
     * @var tagResources
     */
    public $tagResources;

}
