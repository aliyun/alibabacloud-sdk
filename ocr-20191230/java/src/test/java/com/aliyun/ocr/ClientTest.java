// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.ocr;

import com.aliyun.ocr20191230.Client;
import com.aliyun.ocr20191230.models.TrimDocumentRequest;
import com.aliyun.ocr20191230.models.TrimDocumentResponse;
import com.aliyun.tearpc.models.Config;
import com.aliyun.teautil.models.RuntimeOptions;

public class ClientTest {

    public static void main(String[] args) throws Exception {
        clientTest();
    }
    public static void clientTest() throws Exception {
        Config config = new Config();
        config.accessKeyId = "test";
        config.accessKeySecret = "test";
        config.type = "access_key";
        config.regionId = "cn-shanghai";
        config.endpoint = "ocr.aliyuncs.com";
        Client client = new Client(config);
        RuntimeOptions runtimeObject = new RuntimeOptions();
        runtimeObject.ignoreSSL = true;
        TrimDocumentRequest request = new TrimDocumentRequest();
        request.fileURL = "test";
        request.outputType = "html";
        request.fileType = "pdf";
        TrimDocumentResponse response = client.trimDocument(request, runtimeObject);
    }

}
