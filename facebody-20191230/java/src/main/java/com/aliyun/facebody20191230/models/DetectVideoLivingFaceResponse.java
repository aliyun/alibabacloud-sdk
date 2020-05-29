// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class DetectVideoLivingFaceResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public DetectVideoLivingFaceResponseData data;

    public static DetectVideoLivingFaceResponse build(java.util.Map<String, ?> map) throws Exception {
        DetectVideoLivingFaceResponse self = new DetectVideoLivingFaceResponse();
        return TeaModel.build(map, self);
    }

    public static class DetectVideoLivingFaceResponseDataElements extends TeaModel {
        @NameInMap("LiveConfidence")
        @Validation(required = true)
        public Double liveConfidence;

        @NameInMap("FaceConfidence")
        @Validation(required = true)
        public Double faceConfidence;

        @NameInMap("Rect")
        @Validation(required = true)
        public java.util.List<Integer> rect;

        public static DetectVideoLivingFaceResponseDataElements build(java.util.Map<String, ?> map) throws Exception {
            DetectVideoLivingFaceResponseDataElements self = new DetectVideoLivingFaceResponseDataElements();
            return TeaModel.build(map, self);
        }

    }

    public static class DetectVideoLivingFaceResponseData extends TeaModel {
        @NameInMap("Elements")
        @Validation(required = true)
        public java.util.List<DetectVideoLivingFaceResponseDataElements> elements;

        public static DetectVideoLivingFaceResponseData build(java.util.Map<String, ?> map) throws Exception {
            DetectVideoLivingFaceResponseData self = new DetectVideoLivingFaceResponseData();
            return TeaModel.build(map, self);
        }

    }

}
