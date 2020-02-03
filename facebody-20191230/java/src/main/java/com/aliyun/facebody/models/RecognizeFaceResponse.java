// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class RecognizeFaceResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public RecognizeFaceResponseData data;

    public static RecognizeFaceResponse build(java.util.Map<String, ?> map) throws Exception {
        RecognizeFaceResponse self = new RecognizeFaceResponse();
        return TeaModel.build(map, self);
    }

    public static class RecognizeFaceResponseData extends TeaModel {
        @NameInMap("FaceCount")
        @Validation(required = true)
        public Integer faceCount;

        @NameInMap("LandmarkCount")
        @Validation(required = true)
        public Integer landmarkCount;

        @NameInMap("DenseFeatureLength")
        @Validation(required = true)
        public Integer denseFeatureLength;

        public static RecognizeFaceResponseData build(java.util.Map<String, ?> map) throws Exception {
            RecognizeFaceResponseData self = new RecognizeFaceResponseData();
            return TeaModel.build(map, self);
        }

    }

}
