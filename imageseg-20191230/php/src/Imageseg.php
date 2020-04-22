<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\GetAsyncJobResultRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\GetAsyncJobResultResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\ParseFaceAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\ParseFaceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\ParseFaceResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\RefineMaskAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\RefineMaskRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\RefineMaskResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentBodyAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentBodyRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentBodyResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentCommodityAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentCommodityRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentCommodityResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentCommonImageAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentCommonImageRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentCommonImageResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentFaceAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentFaceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentFaceResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentFurnitureAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentFurnitureRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentFurnitureResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentHairAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentHairRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentHairResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentHeadAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentHeadRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentHeadResponse;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentVehicleAdvanceRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentVehicleRequest;
use AlibabaCloud\SDK\Imageseg\V20191230\Imageseg\SegmentVehicleResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Imageseg
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'regional';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint($this->_productId, $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @throws \Exception
     *
     * @return GetAsyncJobResultResponse
     */
    public function getAsyncJobResult(GetAsyncJobResultRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return GetAsyncJobResultResponse::fromMap($this->doRequest('GetAsyncJobResult', 'HTTPS', 'GET', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SegmentFurnitureResponse
     */
    public function segmentFurniture(SegmentFurnitureRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SegmentFurnitureResponse::fromMap($this->doRequest('SegmentFurniture', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SegmentFurnitureResponse
     */
    public function segmentFurnitureAdvance(SegmentFurnitureAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\Tea\Rpc\Rpc\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'imageseg',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $segmentFurniturereq = new SegmentFurnitureRequest([]);
        RpcUtils::convert($request, $segmentFurniturereq);
        $segmentFurniturereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->segmentFurniture($segmentFurniturereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return RefineMaskResponse
     */
    public function refineMask(RefineMaskRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return RefineMaskResponse::fromMap($this->doRequest('RefineMask', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return RefineMaskResponse
     */
    public function refineMaskAdvance(RefineMaskAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\Tea\Rpc\Rpc\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'imageseg',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $refineMaskreq = new RefineMaskRequest([]);
        RpcUtils::convert($request, $refineMaskreq);
        $refineMaskreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->refineMask($refineMaskreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return ParseFaceResponse
     */
    public function parseFace(ParseFaceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ParseFaceResponse::fromMap($this->doRequest('ParseFace', 'HTTPS', 'GET', '2019-12-30', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ParseFaceResponse
     */
    public function parseFaceAdvance(ParseFaceAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\Tea\Rpc\Rpc\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'imageseg',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $parseFacereq = new ParseFaceRequest([]);
        RpcUtils::convert($request, $parseFacereq);
        $parseFacereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->parseFace($parseFacereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SegmentVehicleResponse
     */
    public function segmentVehicle(SegmentVehicleRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SegmentVehicleResponse::fromMap($this->doRequest('SegmentVehicle', 'HTTPS', 'POST', '2019-12-30', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SegmentVehicleResponse
     */
    public function segmentVehicleAdvance(SegmentVehicleAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\Tea\Rpc\Rpc\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'imageseg',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $segmentVehiclereq = new SegmentVehicleRequest([]);
        RpcUtils::convert($request, $segmentVehiclereq);
        $segmentVehiclereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->segmentVehicle($segmentVehiclereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SegmentHairResponse
     */
    public function segmentHair(SegmentHairRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SegmentHairResponse::fromMap($this->doRequest('SegmentHair', 'HTTPS', 'GET', '2019-12-30', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SegmentHairResponse
     */
    public function segmentHairAdvance(SegmentHairAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\Tea\Rpc\Rpc\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'imageseg',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $segmentHairreq = new SegmentHairRequest([]);
        RpcUtils::convert($request, $segmentHairreq);
        $segmentHairreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->segmentHair($segmentHairreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SegmentFaceResponse
     */
    public function segmentFace(SegmentFaceRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SegmentFaceResponse::fromMap($this->doRequest('SegmentFace', 'HTTPS', 'GET', '2019-12-30', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SegmentFaceResponse
     */
    public function segmentFaceAdvance(SegmentFaceAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\Tea\Rpc\Rpc\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'imageseg',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $segmentFacereq = new SegmentFaceRequest([]);
        RpcUtils::convert($request, $segmentFacereq);
        $segmentFacereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->segmentFace($segmentFacereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SegmentHeadResponse
     */
    public function segmentHead(SegmentHeadRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SegmentHeadResponse::fromMap($this->doRequest('SegmentHead', 'HTTPS', 'GET', '2019-12-30', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SegmentHeadResponse
     */
    public function segmentHeadAdvance(SegmentHeadAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\Tea\Rpc\Rpc\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'imageseg',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $segmentHeadreq = new SegmentHeadRequest([]);
        RpcUtils::convert($request, $segmentHeadreq);
        $segmentHeadreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->segmentHead($segmentHeadreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SegmentCommodityResponse
     */
    public function segmentCommodity(SegmentCommodityRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SegmentCommodityResponse::fromMap($this->doRequest('SegmentCommodity', 'HTTPS', 'GET', '2019-12-30', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SegmentCommodityResponse
     */
    public function segmentCommodityAdvance(SegmentCommodityAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\Tea\Rpc\Rpc\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'imageseg',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $segmentCommodityreq = new SegmentCommodityRequest([]);
        RpcUtils::convert($request, $segmentCommodityreq);
        $segmentCommodityreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->segmentCommodity($segmentCommodityreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SegmentBodyResponse
     */
    public function segmentBody(SegmentBodyRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SegmentBodyResponse::fromMap($this->doRequest('SegmentBody', 'HTTPS', 'GET', '2019-12-30', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SegmentBodyResponse
     */
    public function segmentBodyAdvance(SegmentBodyAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\Tea\Rpc\Rpc\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'imageseg',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $segmentBodyreq = new SegmentBodyRequest([]);
        RpcUtils::convert($request, $segmentBodyreq);
        $segmentBodyreq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->segmentBody($segmentBodyreq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return SegmentCommonImageResponse
     */
    public function segmentCommonImage(SegmentCommonImageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SegmentCommonImageResponse::fromMap($this->doRequest('SegmentCommonImage', 'HTTPS', 'GET', '2019-12-30', 'AK', $request, null, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SegmentCommonImageResponse
     */
    public function segmentCommonImageAdvance(SegmentCommonImageAdvanceRequest $request, RuntimeOptions $runtime)
    {
        // Step 0: init client
        $accessKeyId     = $this->_credential->getAccessKeyId();
        $accessKeySecret = $this->_credential->getAccessKeySecret();
        $authConfig      = new \AlibabaCloud\Tea\Rpc\Rpc\Config([
            'accessKeyId'     => $accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => 'openplatform.aliyuncs.com',
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $authClient  = new OpenPlatform($authConfig);
        $authRequest = new \AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform\AuthorizeFileUploadRequest([
            'product'  => 'imageseg',
            'regionId' => $this->_regionId,
        ]);
        $authResponse = $authClient->authorizeFileUpload($authRequest, $runtime);
        // Step 1: request OSS api to upload file
        $ossConfig = new \AlibabaCloud\SDK\OSS\OSS\Config([
            'accessKeyId'     => $authResponse->accessKeyId,
            'accessKeySecret' => $accessKeySecret,
            'type'            => 'access_key',
            'endpoint'        => RpcUtils::getEndpoint($authResponse->endpoint, $authResponse->useAccelerate, $this->_endpointType),
            'protocol'        => $this->_protocol,
            'regionId'        => $this->_regionId,
        ]);
        $ossClient = new OSS($ossConfig);
        $fileObj   = new \AlibabaCloud\Tea\FileForm\FileForm\FileField([
            'filename'    => $authResponse->objectKey,
            'content'     => $request->imageURLObject,
            'contentType' => '',
        ]);
        $ossHeader = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest\header([
            'accessKeyId'         => $authResponse->accessKeyId,
            'policy'              => $authResponse->encodedPolicy,
            'signature'           => $authResponse->signature,
            'key'                 => $authResponse->objectKey,
            'file'                => $fileObj,
            'successActionStatus' => '201',
        ]);
        $uploadRequest = new \AlibabaCloud\SDK\OSS\OSS\PostObjectRequest([
            'bucketName' => $authResponse->bucket,
            'header'     => $ossHeader,
        ]);
        $ossRuntime = new \AlibabaCloud\Tea\OSSUtils\OSSUtils\RuntimeOptions([]);
        RpcUtils::convert($runtime, $ossRuntime);
        $ossClient->postObject($uploadRequest, $ossRuntime);
        // Step 2: request final api
        $segmentCommonImagereq = new SegmentCommonImageRequest([]);
        RpcUtils::convert($request, $segmentCommonImagereq);
        $segmentCommonImagereq->imageURL = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->segmentCommonImage($segmentCommonImagereq, $runtime);
    }

    /**
     * @param string $productId
     * @param string $regionId
     * @param string $endpointRule
     * @param string $network
     * @param string $suffix
     * @param array  $endpointMap
     * @param string $endpoint
     *
     * @throws \Exception
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_($endpointMap['regionId'])) {
            return $endpointMap['regionId'];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }
}
