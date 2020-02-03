// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class DetectFaceResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public DetectFaceResponseData data;

    public static DetectFaceResponse build(java.util.Map<String, ?> map) throws Exception {
        DetectFaceResponse self = new DetectFaceResponse();
        return TeaModel.build(map, self);
    }

    public static class DetectFaceResponseData extends TeaModel {
        @NameInMap("FaceCount")
        @Validation(required = true)
        public Integer faceCount;

        @NameInMap("LandmarkCount")
        @Validation(required = true)
        public Integer landmarkCount;

        public static DetectFaceResponseData build(java.util.Map<String, ?> map) throws Exception {
            DetectFaceResponseData self = new DetectFaceResponseData();
            return TeaModel.build(map, self);
        }

    }

}
