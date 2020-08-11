<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageFromFamilyResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageFromFamilyResponse\image\diskDeviceMappings;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageFromFamilyResponse\image\tags;
use AlibabaCloud\Tea\Model;

class image extends Model
{
    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $imageFamily;

    /**
     * @var string
     */
    public $imageVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var bool
     */
    public $isSupportIoOptimized;

    /**
     * @var bool
     */
    public $isSupportCloudinit;

    /**
     * @var string
     */
    public $OSName;

    /**
     * @var string
     */
    public $architecture;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var bool
     */
    public $isSubscribed;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $isSelfShared;

    /**
     * @var string
     */
    public $OSType;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $usage;

    /**
     * @var bool
     */
    public $isCopied;

    /**
     * @var diskDeviceMappings
     */
    public $diskDeviceMappings;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'progress'             => 'Progress',
        'imageId'              => 'ImageId',
        'imageName'            => 'ImageName',
        'imageFamily'          => 'ImageFamily',
        'imageVersion'         => 'ImageVersion',
        'description'          => 'Description',
        'size'                 => 'Size',
        'imageOwnerAlias'      => 'ImageOwnerAlias',
        'isSupportIoOptimized' => 'IsSupportIoOptimized',
        'isSupportCloudinit'   => 'IsSupportCloudinit',
        'OSName'               => 'OSName',
        'architecture'         => 'Architecture',
        'status'               => 'Status',
        'productCode'          => 'ProductCode',
        'isSubscribed'         => 'IsSubscribed',
        'creationTime'         => 'CreationTime',
        'isSelfShared'         => 'IsSelfShared',
        'OSType'               => 'OSType',
        'platform'             => 'Platform',
        'usage'                => 'Usage',
        'isCopied'             => 'IsCopied',
        'diskDeviceMappings'   => 'DiskDeviceMappings',
        'tags'                 => 'Tags',
    ];

    public function validate()
    {
        Model::validateRequired('progress', $this->progress, true);
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('imageName', $this->imageName, true);
        Model::validateRequired('imageFamily', $this->imageFamily, true);
        Model::validateRequired('imageVersion', $this->imageVersion, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('imageOwnerAlias', $this->imageOwnerAlias, true);
        Model::validateRequired('isSupportIoOptimized', $this->isSupportIoOptimized, true);
        Model::validateRequired('isSupportCloudinit', $this->isSupportCloudinit, true);
        Model::validateRequired('OSName', $this->OSName, true);
        Model::validateRequired('architecture', $this->architecture, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('isSubscribed', $this->isSubscribed, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('isSelfShared', $this->isSelfShared, true);
        Model::validateRequired('OSType', $this->OSType, true);
        Model::validateRequired('platform', $this->platform, true);
        Model::validateRequired('usage', $this->usage, true);
        Model::validateRequired('isCopied', $this->isCopied, true);
        Model::validateRequired('diskDeviceMappings', $this->diskDeviceMappings, true);
        Model::validateRequired('tags', $this->tags, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }
        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->isSupportIoOptimized) {
            $res['IsSupportIoOptimized'] = $this->isSupportIoOptimized;
        }
        if (null !== $this->isSupportCloudinit) {
            $res['IsSupportCloudinit'] = $this->isSupportCloudinit;
        }
        if (null !== $this->OSName) {
            $res['OSName'] = $this->OSName;
        }
        if (null !== $this->architecture) {
            $res['Architecture'] = $this->architecture;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->isSubscribed) {
            $res['IsSubscribed'] = $this->isSubscribed;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->isSelfShared) {
            $res['IsSelfShared'] = $this->isSelfShared;
        }
        if (null !== $this->OSType) {
            $res['OSType'] = $this->OSType;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->isCopied) {
            $res['IsCopied'] = $this->isCopied;
        }
        if (null !== $this->diskDeviceMappings) {
            $res['DiskDeviceMappings'] = null !== $this->diskDeviceMappings ? $this->diskDeviceMappings->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return image
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }
        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['IsSupportIoOptimized'])) {
            $model->isSupportIoOptimized = $map['IsSupportIoOptimized'];
        }
        if (isset($map['IsSupportCloudinit'])) {
            $model->isSupportCloudinit = $map['IsSupportCloudinit'];
        }
        if (isset($map['OSName'])) {
            $model->OSName = $map['OSName'];
        }
        if (isset($map['Architecture'])) {
            $model->architecture = $map['Architecture'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['IsSubscribed'])) {
            $model->isSubscribed = $map['IsSubscribed'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['IsSelfShared'])) {
            $model->isSelfShared = $map['IsSelfShared'];
        }
        if (isset($map['OSType'])) {
            $model->OSType = $map['OSType'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['IsCopied'])) {
            $model->isCopied = $map['IsCopied'];
        }
        if (isset($map['DiskDeviceMappings'])) {
            $model->diskDeviceMappings = diskDeviceMappings::fromMap($map['DiskDeviceMappings']);
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
