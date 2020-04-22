<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\AddImageAdvanceRequest;
use AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\AddImageRequest;
use AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\AddImageResponse;
use AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\CreateImageDbRequest;
use AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\CreateImageDbResponse;
use AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\DeleteImageDbRequest;
use AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\DeleteImageDbResponse;
use AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\DeleteImageRequest;
use AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\DeleteImageResponse;
use AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\ListImageDbsRequest;
use AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\ListImageDbsResponse;
use AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\ListImagesRequest;
use AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\ListImagesResponse;
use AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\SearchImageAdvanceRequest;
use AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\SearchImageRequest;
use AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\SearchImageResponse;
use AlibabaCloud\SDK\OpenPlatform\V20191219\OpenPlatform;
use AlibabaCloud\SDK\OSS\OSS;
use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\RpcUtils\RpcUtils;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;

class Imgsearch
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
     * @return ListImageDbsResponse
     */
    public function listImageDbs(ListImageDbsRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListImageDbsResponse::fromMap($this->doRequest('ListImageDbs', 'HTTPS', 'POST', '2020-03-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return ListImagesResponse
     */
    public function listImages(ListImagesRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return ListImagesResponse::fromMap($this->doRequest('ListImages', 'HTTPS', 'POST', '2020-03-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SearchImageResponse
     */
    public function searchImage(SearchImageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return SearchImageResponse::fromMap($this->doRequest('SearchImage', 'HTTPS', 'POST', '2020-03-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return SearchImageResponse
     */
    public function searchImageAdvance(SearchImageAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'imgsearch',
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
            'content'     => $request->imageUrlObject,
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
        $searchImagereq = new SearchImageRequest([]);
        RpcUtils::convert($request, $searchImagereq);
        $searchImagereq->imageUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->searchImage($searchImagereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return AddImageResponse
     */
    public function addImage(AddImageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return AddImageResponse::fromMap($this->doRequest('AddImage', 'HTTPS', 'POST', '2020-03-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return AddImageResponse
     */
    public function addImageAdvance(AddImageAdvanceRequest $request, RuntimeOptions $runtime)
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
            'product'  => 'imgsearch',
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
            'content'     => $request->imageUrlObject,
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
        $addImagereq = new AddImageRequest([]);
        RpcUtils::convert($request, $addImagereq);
        $addImagereq->imageUrl = 'http://' . $authResponse->bucket . '.' . $authResponse->endpoint . '/' . $authResponse->objectKey . '';

        return $this->addImage($addImagereq, $runtime);
    }

    /**
     * @throws \Exception
     *
     * @return DeleteImageDbResponse
     */
    public function deleteImageDb(DeleteImageDbRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteImageDbResponse::fromMap($this->doRequest('DeleteImageDb', 'HTTPS', 'POST', '2020-03-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return CreateImageDbResponse
     */
    public function createImageDb(CreateImageDbRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return CreateImageDbResponse::fromMap($this->doRequest('CreateImageDb', 'HTTPS', 'POST', '2020-03-20', 'AK', null, $request, $runtime));
    }

    /**
     * @throws \Exception
     *
     * @return DeleteImageResponse
     */
    public function deleteImage(DeleteImageRequest $request, RuntimeOptions $runtime)
    {
        Utils::validateModel($request);

        return DeleteImageResponse::fromMap($this->doRequest('DeleteImage', 'HTTPS', 'POST', '2020-03-20', 'AK', null, $request, $runtime));
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
