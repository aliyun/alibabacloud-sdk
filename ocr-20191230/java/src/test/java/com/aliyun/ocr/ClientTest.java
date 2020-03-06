// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ocr;

import com.aliyun.ocr.models.Config;

public class ClientTest {

    public static void main(String[] args) throws Exception {
        clientTest();
    }
    public static void clientTest() throws Exception {
        Config config = new Config();
        config.accessKeyId = System.getenv("AccessKeyID");
        config.accessKeySecret = System.getenv("AccessKeySecret");
        config.endpoint = "ocr.aliyuncs.com";
        config.type = "access_key";
        config.regionId = "cn-beijing";
        Client client = new Client(config);
//        MockProcessFileAdvanceRequest request = new MockProcessFileAdvanceRequest();
//        ByteArrayInputStream byteArrayInputStream = new ByteArrayInputStream("ocr test".getBytes("UTF-8"));
//        request.fileOssUrlObject = byteArrayInputStream;
//        request.fileSize = String.valueOf(byteArrayInputStream.available());
//        RuntimeObject runtimeObject =  new RuntimeObject();
//        MockProcessFileResponse response = client.mockProcessFileAdvance(request, runtimeObject);
//        Assert.assertNotNull(response.requestId);
    }

}
