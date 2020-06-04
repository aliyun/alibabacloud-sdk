<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponse\domains;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponse\domains\pageData\sources;

class pageData extends Model {
    protected $_name = [
        'domainName' => 'DomainName',
        'cname' => 'Cname',
        'cdnType' => 'CdnType',
        'domainStatus' => 'DomainStatus',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'description' => 'Description',
        'sslProtocol' => 'SslProtocol',
        'weight' => 'Weight',
        'sandbox' => 'Sandbox',
        'sources' => 'Sources',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('cname', $this->cname, true);
        Model::validateRequired('cdnType', $this->cdnType, true);
        Model::validateRequired('domainStatus', $this->domainStatus, true);
        Model::validateRequired('gmtCreated', $this->gmtCreated, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('sslProtocol', $this->sslProtocol, true);
        Model::validateRequired('weight', $this->weight, true);
        Model::validateRequired('sandbox', $this->sandbox, true);
        Model::validateRequired('sources', $this->sources, true);
    }
    public function toMap() {
        $res = [];
        $res['DomainName'] = $this->domainName;
        $res['Cname'] = $this->cname;
        $res['CdnType'] = $this->cdnType;
        $res['DomainStatus'] = $this->domainStatus;
        $res['GmtCreated'] = $this->gmtCreated;
        $res['GmtModified'] = $this->gmtModified;
        $res['Description'] = $this->description;
        $res['SslProtocol'] = $this->sslProtocol;
        $res['Weight'] = $this->weight;
        $res['Sandbox'] = $this->sandbox;
        $res['Sources'] = null !== $this->sources ? $this->sources->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return pageData
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['Cname'])){
            $model->cname = $map['Cname'];
        }
        if(isset($map['CdnType'])){
            $model->cdnType = $map['CdnType'];
        }
        if(isset($map['DomainStatus'])){
            $model->domainStatus = $map['DomainStatus'];
        }
        if(isset($map['GmtCreated'])){
            $model->gmtCreated = $map['GmtCreated'];
        }
        if(isset($map['GmtModified'])){
            $model->gmtModified = $map['GmtModified'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
        }
        if(isset($map['SslProtocol'])){
            $model->sslProtocol = $map['SslProtocol'];
        }
        if(isset($map['Weight'])){
            $model->weight = $map['Weight'];
        }
        if(isset($map['Sandbox'])){
            $model->sandbox = $map['Sandbox'];
        }
        if(isset($map['Sources'])){
            $model->sources = sources::fromMap($map['Sources']);
        }
        return $model;
    }
    /**
     * @description model.domainNameReal
     * @var string
     */
    public $domainName;

    /**
     * @description model.cname
     * @var string
     */
    public $cname;

    /**
     * @description websiteTypeStr
     * @var string
     */
    public $cdnType;

    /**
     * @description domainStatusStr
     * @var string
     */
    public $domainStatus;

    /**
     * @description gmtCreatedStr
     * @var string
     */
    public $gmtCreated;

    /**
     * @description gmtModifiedStr
     * @var string
     */
    public $gmtModified;

    /**
     * @description model.remark
     * @var string
     */
    public $description;

    /**
     * @description sslProtocol
     * @var string
     */
    public $sslProtocol;

    /**
     * @description weight
     * @var string
     */
    public $weight;

    /**
     * @description model.sandbox
     * @var string
     */
    public $sandbox;

    /**
     * @description sources
     * @var sources
     */
    public $sources;

}
