<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class FtGatedLaunchPolicy4Response extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'isGatedLaunch' => 'IsGatedLaunch',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('isGatedLaunch', $this->isGatedLaunch, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['IsGatedLaunch'] = $this->isGatedLaunch;
        return $res;
    }
    /**
     * @param array $map
     * @return FtGatedLaunchPolicy4Response
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['IsGatedLaunch'])){
            $model->isGatedLaunch = $map['IsGatedLaunch'];
        }
        return $model;
    }
    /**
     * @description Params.requestId
     * @var string
     */
    public $requestId;

    /**
     * @description Params.isGatedLaunch
     * @var string
     */
    public $isGatedLaunch;

}
