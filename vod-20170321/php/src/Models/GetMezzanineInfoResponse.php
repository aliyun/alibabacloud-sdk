<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMezzanineInfoResponse\mezzanine;

class GetMezzanineInfoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'mezzanine' => 'Mezzanine',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('mezzanine', $this->mezzanine, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Mezzanine'] = null !== $this->mezzanine ? $this->mezzanine->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetMezzanineInfoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Mezzanine'])){
            $model->mezzanine = mezzanine::fromMap($map['Mezzanine']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.fileInfo
     * @var mezzanine
     */
    public $mezzanine;

}
