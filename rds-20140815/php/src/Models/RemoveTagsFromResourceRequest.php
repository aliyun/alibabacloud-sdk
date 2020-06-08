<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\RemoveTagsFromResourceRequest\tag;

class RemoveTagsFromResourceRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'clientToken' => 'ClientToken',
        'proxyId' => 'proxyId',
        'regionId' => 'RegionId',
        'DBInstanceId' => 'DBInstanceId',
        'tags' => 'Tags',
        'tag' => 'Tag',
        'ownerAccount' => 'OwnerAccount',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('tag', $this->tag, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ClientToken'] = $this->clientToken;
        $res['proxyId'] = $this->proxyId;
        $res['RegionId'] = $this->regionId;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['Tags'] = $this->tags;
        $res['Tag'] = [];
        if(null !== $this->tag && is_array($this->tag)){
            $n = 0;
            foreach($this->tag as $item){
                $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['OwnerAccount'] = $this->ownerAccount;
        return $res;
    }
    /**
     * @param array $map
     * @return RemoveTagsFromResourceRequest
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
        if(isset($map['ClientToken'])){
            $model->clientToken = $map['ClientToken'];
        }
        if(isset($map['proxyId'])){
            $model->proxyId = $map['proxyId'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['Tags'])){
            $model->tags = $map['Tags'];
        }
        if(isset($map['Tag'])){
            if(!empty($map['Tag'])){
                $model->tag = [];
                $n = 0;
                foreach($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        return $model;
    }
    /**
     * @description description: 阿里云颁发给用户的访问服务所用的密钥ID。; 
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
     * @description description: 用于保证请求的幂等性，防止重复提交请求。由客户端生成该参数值，要保证在不同请求间唯一，最大值不超过64个ASCII字符，且该参数值中不能包含非ASCII字符。; 
     * @var string
     */
    public $clientToken;

    /**
     * @description description: 代理模式ID。; 
     * @var string
     */
    public $proxyId;

    /**
     * @description description: 地域ID，可以通过接口[DescribeRegions](~~26243~~)查看可用的地域ID。; 
     * @var string
     */
    public $regionId;

    /**
     * @description description: 实例ID。; 
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description description: 需要解绑的一组标签，包括TagKey和TagValue。格式：{"key1":"value1"}。>TagKey不能为空，TagValue可以为空。; 
     * @var string
     */
    public $tags;

    /**
     * @description Tag
     * @var array
     */
    public $tag;

    /**
     * @description description: ; 
     * @var string
     */
    public $ownerAccount;

}
