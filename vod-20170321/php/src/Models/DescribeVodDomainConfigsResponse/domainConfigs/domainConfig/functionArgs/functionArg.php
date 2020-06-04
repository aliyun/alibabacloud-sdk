<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainConfigsResponse\domainConfigs\domainConfig\functionArgs;

use AlibabaCloud\Tea\Model;

class functionArg extends Model {
    protected $_name = [
        'argName' => 'ArgName',
        'argValue' => 'ArgValue',
    ];
    public function validate() {
        Model::validateRequired('argName', $this->argName, true);
        Model::validateRequired('argValue', $this->argValue, true);
    }
    public function toMap() {
        $res = [];
        $res['ArgName'] = $this->argName;
        $res['ArgValue'] = $this->argValue;
        return $res;
    }
    /**
     * @param array $map
     * @return functionArg
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ArgName'])){
            $model->argName = $map['ArgName'];
        }
        if(isset($map['ArgValue'])){
            $model->argValue = $map['ArgValue'];
        }
        return $model;
    }
    /**
     * @description argName
     * @var string
     */
    public $argName;

    /**
     * @description argValue
     * @var string
     */
    public $argValue;

}
