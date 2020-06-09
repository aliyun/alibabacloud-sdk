<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeRegionsResponse\regions;

use AlibabaCloud\Tea\Model;

class region extends Model {
    protected $_name = [
        'regionId' => 'RegionId',
        'localName' => 'LocalName',
        'regionEndpoint' => 'RegionEndpoint',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('localName', $this->localName, true);
        Model::validateRequired('regionEndpoint', $this->regionEndpoint, true);
    }
    public function toMap() {
        $res = [];
        $res['RegionId'] = $this->regionId;
        $res['LocalName'] = $this->localName;
        $res['RegionEndpoint'] = $this->regionEndpoint;
        return $res;
    }
    /**
     * @param array $map
     * @return region
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['LocalName'])){
            $model->localName = $map['LocalName'];
        }
        if(isset($map['RegionEndpoint'])){
            $model->regionEndpoint = $map['RegionEndpoint'];
        }
        return $model;
    }
    /**
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description localName
     * @var string
     */
    public $localName;

    /**
     * @description regionEndpoint
     * @var string
     */
    public $regionEndpoint;

}
