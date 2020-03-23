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

        @NameInMap("GenderList")
        @Validation(required = true)
        public java.util.List<Integer> genderList;

        @NameInMap("AgeList")
        @Validation(required = true)
        public java.util.List<Integer> ageList;

        @NameInMap("Expressions")
        @Validation(required = true)
        public java.util.List<Integer> expressions;

        @NameInMap("Glasses")
        @Validation(required = true)
        public java.util.List<Integer> glasses;

        @NameInMap("DenseFeatures")
        @Validation(required = true)
        public java.util.List<String> denseFeatures;

        public static RecognizeFaceResponseData build(java.util.Map<String, ?> map) throws Exception {
            RecognizeFaceResponseData self = new RecognizeFaceResponseData();
            return TeaModel.build(map, self);
        }

    }

}
