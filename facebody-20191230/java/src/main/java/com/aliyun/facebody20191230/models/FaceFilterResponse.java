// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class FaceFilterResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public FaceFilterResponseData data;

    public static FaceFilterResponse build(java.util.Map<String, ?> map) throws Exception {
        FaceFilterResponse self = new FaceFilterResponse();
        return TeaModel.build(map, self);
    }

    public static class FaceFilterResponseData extends TeaModel {
        @NameInMap("ImageURL")
        @Validation(required = true)
        public String imageURL;

        public static FaceFilterResponseData build(java.util.Map<String, ?> map) throws Exception {
            FaceFilterResponseData self = new FaceFilterResponseData();
            return TeaModel.build(map, self);
        }

    }

}
