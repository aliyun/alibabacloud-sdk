<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

class DescribeContainerLogResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'containerName' => 'ContainerName',
        'content' => 'Content',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('containerName', $this->containerName, true);
        Model::validateRequired('content', $this->content, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['ContainerName'] = $this->containerName;
        $res['Content'] = $this->content;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeContainerLogResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['ContainerName'])){
            $model->containerName = $map['ContainerName'];
        }
        if(isset($map['Content'])){
            $model->content = $map['Content'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.containerName
     * @var string
     */
    public $containerName;

    /**
     * @description data.log
     * @var string
     */
    public $content;

}
