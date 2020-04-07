// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

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

        @NameInMap("FaceRectangles")
        @Validation(required = true)
        public java.util.List<Integer> faceRectangles;

        @NameInMap("FaceProbabilityList")
        @Validation(required = true)
        public java.util.List<Double> faceProbabilityList;

        @NameInMap("PoseList")
        @Validation(required = true)
        public java.util.List<Double> poseList;

        @NameInMap("Landmarks")
        @Validation(required = true)
        public java.util.List<Double> landmarks;

        @NameInMap("Pupils")
        @Validation(required = true)
        public java.util.List<Double> pupils;

        public static DetectFaceResponseData build(java.util.Map<String, ?> map) throws Exception {
            DetectFaceResponseData self = new DetectFaceResponseData();
            return TeaModel.build(map, self);
        }

    }

}
