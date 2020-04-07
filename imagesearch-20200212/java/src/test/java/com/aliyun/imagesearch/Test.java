package com.aliyun.imagesearch;

import com.aliyun.imagesearch.models.AddImageAdvanceRequest;
import com.aliyun.imagesearch.models.AddImageResponse;
import com.aliyun.imagesearch.models.Config;

import java.io.ByteArrayInputStream;
import java.io.InputStream;

public class Test {
    @org.junit.Test
    public void ssss() throws Exception{
        AddImageAdvanceRequest request = new AddImageAdvanceRequest();
        request.picName = "xusong.jpg";
        request.productId = "1001";
        request.instanceName = "图搜实例名";

        Config config = new Config();
        config.accessKeyId = System.getenv("RAMAccessKeyID");
        config.accessKeySecret = System.getenv("RAMAccessKeySecret");
        config.endpoint = "imagesearch.cn-shanghai.aliyuncs.com";
        config.regionId = "cn-shanghai";

        com.aliyun.imagesearch.Client client = new com.aliyun.imagesearch.Client(config);

        InputStream fs = new ByteArrayInputStream("hello world!".getBytes("UTF-8"));
        request.picContentObject = fs;

        config.type= "access_key";
        com.aliyun.teautil.models.RuntimeOptions runtimeObject = new com.aliyun.teautil.models.RuntimeOptions();
        AddImageResponse response = client.addImageAdvance(request, runtimeObject);
    }
}
