<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DescribeMountedClientsRequest extends Model {
    protected $_name = [
        'regionId' => 'RegionId',
        'pageSize' => 'PageSize',
        'fileSystemId' => 'FileSystemId',
        'clientIP' => 'ClientIP',
        'mountTargetDomain' => 'MountTargetDomain',
        'pageNumber' => 'PageNumber',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
        Model::validateRequired('mountTargetDomain', $this->mountTargetDomain, true);
    }
    public function toMap() {
        $res = [];
        $res['RegionId'] = $this->regionId;
        $res['PageSize'] = $this->pageSize;
        $res['FileSystemId'] = $this->fileSystemId;
        $res['ClientIP'] = $this->clientIP;
        $res['MountTargetDomain'] = $this->mountTargetDomain;
        $res['PageNumber'] = $this->pageNumber;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeMountedClientsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['FileSystemId'])){
            $model->fileSystemId = $map['FileSystemId'];
        }
        if(isset($map['ClientIP'])){
            $model->clientIP = $map['ClientIP'];
        }
        if(isset($map['MountTargetDomain'])){
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        return $model;
    }
    /**
     * @description region
     * @var string
     */
    public $regionId;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description volume
     * @var string
     */
    public $fileSystemId;

    /**
     * @description clientip
     * @var string
     */
    public $clientIP;

    /**
     * @description domainName
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @description pageNumber
     * @var integer
     */
    public $pageNumber;

}
