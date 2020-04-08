// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class FaceBeautyResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public FaceBeautyResponseData data;

    public static FaceBeautyResponse build(java.util.Map<String, ?> map) throws Exception {
        FaceBeautyResponse self = new FaceBeautyResponse();
        return TeaModel.build(map, self);
    }

    public static class FaceBeautyResponseData extends TeaModel {
        @NameInMap("ImageURL")
        @Validation(required = true)
        public String imageURL;

        public static FaceBeautyResponseData build(java.util.Map<String, ?> map) throws Exception {
            FaceBeautyResponseData self = new FaceBeautyResponseData();
            return TeaModel.build(map, self);
        }

    }

}
