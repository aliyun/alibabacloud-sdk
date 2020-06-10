<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailResponse;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainDetailResponse\domainDetail\sources;
use AlibabaCloud\Tea\Model;

class domainDetail extends Model
{
    /**
     * @description gmtCreated
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description gmtModified
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description domainStatus
     *
     * @var string
     */
    public $domainStatus;

    /**
     * @description cname
     *
     * @var string
     */
    public $cname;

    /**
     * @description domainName
     *
     * @var string
     */
    public $domainName;

    /**
     * @description remark
     *
     * @var string
     */
    public $description;

    /**
     * @description sslProtocol
     *
     * @var string
     */
    public $SSLProtocol;

    /**
     * @description sslPub
     *
     * @var string
     */
    public $SSLPub;

    /**
     * @description scope
     *
     * @var string
     */
    public $scope;

    /**
     * @description certName
     *
     * @var string
     */
    public $certName;

    /**
     * @description weight
     *
     * @var string
     */
    public $weight;

    /**
     * @description sources
     *
     * @var sources
     */
    public $sources;
    protected $_name = [
        'gmtCreated'   => 'GmtCreated',
        'gmtModified'  => 'GmtModified',
        'domainStatus' => 'DomainStatus',
        'cname'        => 'Cname',
        'domainName'   => 'DomainName',
        'description'  => 'Description',
        'SSLProtocol'  => 'SSLProtocol',
        'SSLPub'       => 'SSLPub',
        'scope'        => 'Scope',
        'certName'     => 'CertName',
        'weight'       => 'Weight',
        'sources'      => 'Sources',
    ];

    public function validate()
    {
        Model::validateRequired('gmtCreated', $this->gmtCreated, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
        Model::validateRequired('domainStatus', $this->domainStatus, true);
        Model::validateRequired('cname', $this->cname, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('SSLProtocol', $this->SSLProtocol, true);
        Model::validateRequired('SSLPub', $this->SSLPub, true);
        Model::validateRequired('scope', $this->scope, true);
        Model::validateRequired('certName', $this->certName, true);
        Model::validateRequired('weight', $this->weight, true);
        Model::validateRequired('sources', $this->sources, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->domainStatus) {
            $res['DomainStatus'] = $this->domainStatus;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->SSLProtocol) {
            $res['SSLProtocol'] = $this->SSLProtocol;
        }
        if (null !== $this->SSLPub) {
            $res['SSLPub'] = $this->SSLPub;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }
        if (null !== $this->sources) {
            $res['Sources'] = null !== $this->sources ? $this->sources->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['DomainStatus'])) {
            $model->domainStatus = $map['DomainStatus'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SSLProtocol'])) {
            $model->SSLProtocol = $map['SSLProtocol'];
        }
        if (isset($map['SSLPub'])) {
            $model->SSLPub = $map['SSLPub'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['Sources'])) {
            $model->sources = sources::fromMap($map['Sources']);
        }

        return $model;
    }
}
