<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeSubDomainRecordsRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'lang' => 'Lang',
        'userClientIp' => 'UserClientIp',
        'subDomain' => 'SubDomain',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'type' => 'Type',
        'line' => 'Line',
        'domainName' => 'DomainName',
    ];
    public function validate() {
        Model::validateRequired('subDomain', $this->subDomain, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['Lang'] = $this->lang;
        $res['UserClientIp'] = $this->userClientIp;
        $res['SubDomain'] = $this->subDomain;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize'] = $this->pageSize;
        $res['Type'] = $this->type;
        $res['Line'] = $this->line;
        $res['DomainName'] = $this->domainName;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeSubDomainRecordsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['Lang'])){
            $model->lang = $map['Lang'];
        }
        if(isset($map['UserClientIp'])){
            $model->userClientIp = $map['UserClientIp'];
        }
        if(isset($map['SubDomain'])){
            $model->subDomain = $map['SubDomain'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['Line'])){
            $model->line = $map['Line'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        return $model;
    }
    /**
     * @description accessKeyId
     * @var string
     */
    public $accessKeyId;

    /**
     * @description lang
     * @var string
     */
    public $lang;

    /**
     * @description userClientIp
     * @var string
     */
    public $userClientIp;

    /**
     * @description subDomain
     * @var string
     */
    public $subDomain;

    /**
     * @description pageNumber
     * @var integer
     */
    public $pageNumber;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description line
     * @var string
     */
    public $line;

    /**
     * @description domainName
     * @var string
     */
    public $domainName;

}
