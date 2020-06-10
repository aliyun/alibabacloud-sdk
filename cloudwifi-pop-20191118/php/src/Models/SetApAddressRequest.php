<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Tea\Model;

class SetApAddressRequest extends Model
{
    /**
     * @description appKey
     *
     * @var string
     */
    public $appName;

    /**
     * @description appSecret
     *
     * @var string
     */
    public $appCode;

    /**
     * @description apCityName
     *
     * @var string
     */
    public $apCityName;

    /**
     * @description lng
     *
     * @var string
     */
    public $lng;

    /**
     * @description apCampusName
     *
     * @var string
     */
    public $apCampusName;

    /**
     * @description apGroup
     *
     * @var string
     */
    public $apGroup;

    /**
     * @description language
     *
     * @var string
     */
    public $language;

    /**
     * @description apAreaName
     *
     * @var string
     */
    public $apAreaName;

    /**
     * @description apProvinceName
     *
     * @var string
     */
    public $apProvinceName;

    /**
     * @description mac
     *
     * @var string
     */
    public $mac;

    /**
     * @description apName
     *
     * @var string
     */
    public $apName;

    /**
     * @description apUnitName
     *
     * @var string
     */
    public $apUnitName;

    /**
     * @description apFloor
     *
     * @var string
     */
    public $apFloor;

    /**
     * @description apBuildingName
     *
     * @var string
     */
    public $apBuildingName;

    /**
     * @description apUnitId
     *
     * @var int
     */
    public $apUnitId;

    /**
     * @description apNationName
     *
     * @var string
     */
    public $apNationName;

    /**
     * @description lat
     *
     * @var string
     */
    public $lat;

    /**
     * @description direction
     *
     * @var string
     */
    public $direction;
    protected $_name = [
        'appName'        => 'AppName',
        'appCode'        => 'AppCode',
        'apCityName'     => 'ApCityName',
        'lng'            => 'Lng',
        'apCampusName'   => 'ApCampusName',
        'apGroup'        => 'ApGroup',
        'language'       => 'Language',
        'apAreaName'     => 'ApAreaName',
        'apProvinceName' => 'ApProvinceName',
        'mac'            => 'Mac',
        'apName'         => 'ApName',
        'apUnitName'     => 'ApUnitName',
        'apFloor'        => 'ApFloor',
        'apBuildingName' => 'ApBuildingName',
        'apUnitId'       => 'ApUnitId',
        'apNationName'   => 'ApNationName',
        'lat'            => 'Lat',
        'direction'      => 'Direction',
    ];

    public function validate()
    {
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('appCode', $this->appCode, true);
        Model::validateRequired('language', $this->language, true);
        Model::validateRequired('mac', $this->mac, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->apCityName) {
            $res['ApCityName'] = $this->apCityName;
        }
        if (null !== $this->lng) {
            $res['Lng'] = $this->lng;
        }
        if (null !== $this->apCampusName) {
            $res['ApCampusName'] = $this->apCampusName;
        }
        if (null !== $this->apGroup) {
            $res['ApGroup'] = $this->apGroup;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->apAreaName) {
            $res['ApAreaName'] = $this->apAreaName;
        }
        if (null !== $this->apProvinceName) {
            $res['ApProvinceName'] = $this->apProvinceName;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->apName) {
            $res['ApName'] = $this->apName;
        }
        if (null !== $this->apUnitName) {
            $res['ApUnitName'] = $this->apUnitName;
        }
        if (null !== $this->apFloor) {
            $res['ApFloor'] = $this->apFloor;
        }
        if (null !== $this->apBuildingName) {
            $res['ApBuildingName'] = $this->apBuildingName;
        }
        if (null !== $this->apUnitId) {
            $res['ApUnitId'] = $this->apUnitId;
        }
        if (null !== $this->apNationName) {
            $res['ApNationName'] = $this->apNationName;
        }
        if (null !== $this->lat) {
            $res['Lat'] = $this->lat;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetApAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['ApCityName'])) {
            $model->apCityName = $map['ApCityName'];
        }
        if (isset($map['Lng'])) {
            $model->lng = $map['Lng'];
        }
        if (isset($map['ApCampusName'])) {
            $model->apCampusName = $map['ApCampusName'];
        }
        if (isset($map['ApGroup'])) {
            $model->apGroup = $map['ApGroup'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['ApAreaName'])) {
            $model->apAreaName = $map['ApAreaName'];
        }
        if (isset($map['ApProvinceName'])) {
            $model->apProvinceName = $map['ApProvinceName'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['ApName'])) {
            $model->apName = $map['ApName'];
        }
        if (isset($map['ApUnitName'])) {
            $model->apUnitName = $map['ApUnitName'];
        }
        if (isset($map['ApFloor'])) {
            $model->apFloor = $map['ApFloor'];
        }
        if (isset($map['ApBuildingName'])) {
            $model->apBuildingName = $map['ApBuildingName'];
        }
        if (isset($map['ApUnitId'])) {
            $model->apUnitId = $map['ApUnitId'];
        }
        if (isset($map['ApNationName'])) {
            $model->apNationName = $map['ApNationName'];
        }
        if (isset($map['Lat'])) {
            $model->lat = $map['Lat'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }

        return $model;
    }
}
