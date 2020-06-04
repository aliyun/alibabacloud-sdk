<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\IvrCallRequest\menuKeyMap;

class IvrCallRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'calledShowNumber' => 'CalledShowNumber',
        'calledNumber' => 'CalledNumber',
        'startCode' => 'StartCode',
        'startTtsParams' => 'StartTtsParams',
        'menuKeyMap' => 'MenuKeyMap',
        'playTimes' => 'PlayTimes',
        'byeCode' => 'ByeCode',
        'byeTtsParams' => 'ByeTtsParams',
        'timeout' => 'Timeout',
        'outId' => 'OutId',
    ];
    public function validate() {
        Model::validateRequired('calledShowNumber', $this->calledShowNumber, true);
        Model::validateRequired('calledNumber', $this->calledNumber, true);
        Model::validateRequired('startCode', $this->startCode, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['CalledShowNumber'] = $this->calledShowNumber;
        $res['CalledNumber'] = $this->calledNumber;
        $res['StartCode'] = $this->startCode;
        $res['StartTtsParams'] = $this->startTtsParams;
        $res['MenuKeyMap'] = [];
        if(null !== $this->menuKeyMap && is_array($this->menuKeyMap)){
            $n = 0;
            foreach($this->menuKeyMap as $item){
                $res['MenuKeyMap'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['PlayTimes'] = $this->playTimes;
        $res['ByeCode'] = $this->byeCode;
        $res['ByeTtsParams'] = $this->byeTtsParams;
        $res['Timeout'] = $this->timeout;
        $res['OutId'] = $this->outId;
        return $res;
    }
    /**
     * @param array $map
     * @return IvrCallRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['CalledShowNumber'])){
            $model->calledShowNumber = $map['CalledShowNumber'];
        }
        if(isset($map['CalledNumber'])){
            $model->calledNumber = $map['CalledNumber'];
        }
        if(isset($map['StartCode'])){
            $model->startCode = $map['StartCode'];
        }
        if(isset($map['StartTtsParams'])){
            $model->startTtsParams = $map['StartTtsParams'];
        }
        if(isset($map['MenuKeyMap'])){
            if(!empty($map['MenuKeyMap'])){
                $model->menuKeyMap = [];
                $n = 0;
                foreach($map['MenuKeyMap'] as $item) {
                    $model->menuKeyMap[$n++] = null !== $item ? menuKeyMap::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['PlayTimes'])){
            $model->playTimes = $map['PlayTimes'];
        }
        if(isset($map['ByeCode'])){
            $model->byeCode = $map['ByeCode'];
        }
        if(isset($map['ByeTtsParams'])){
            $model->byeTtsParams = $map['ByeTtsParams'];
        }
        if(isset($map['Timeout'])){
            $model->timeout = $map['Timeout'];
        }
        if(isset($map['OutId'])){
            $model->outId = $map['OutId'];
        }
        return $model;
    }
    /**
     * @description appKey
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description calledShowNumber
     * @var string
     */
    public $calledShowNumber;

    /**
     * @description calledNumber
     * @var string
     */
    public $calledNumber;

    /**
     * @description startCode
     * @var string
     */
    public $startCode;

    /**
     * @description startTtsParams
     * @var string
     */
    public $startTtsParams;

    /**
     * @description menuKeyMapList
     * @var array
     */
    public $menuKeyMap;

    /**
     * @description playTimes
     * @var integer
     */
    public $playTimes;

    /**
     * @description byeCode
     * @var string
     */
    public $byeCode;

    /**
     * @description byeTtsParams
     * @var string
     */
    public $byeTtsParams;

    /**
     * @description timeout
     * @var integer
     */
    public $timeout;

    /**
     * @description outId
     * @var string
     */
    public $outId;

}
