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

    public static class DetectFaceResponseDataFaceRectangles extends TeaModel {
        @NameInMap("FaceRectangle")
        @Validation(required = true)
        public Integer faceRectangle;

        public static DetectFaceResponseDataFaceRectangles build(java.util.Map<String, ?> map) throws Exception {
            DetectFaceResponseDataFaceRectangles self = new DetectFaceResponseDataFaceRectangles();
            return TeaModel.build(map, self);
        }

    }

    public static class DetectFaceResponseDataFaceProbabilityList extends TeaModel {
        @NameInMap("FaceProbability")
        @Validation(required = true)
        public Double faceProbability;

        public static DetectFaceResponseDataFaceProbabilityList build(java.util.Map<String, ?> map) throws Exception {
            DetectFaceResponseDataFaceProbabilityList self = new DetectFaceResponseDataFaceProbabilityList();
            return TeaModel.build(map, self);
        }

    }

    public static class DetectFaceResponseDataPoseList extends TeaModel {
        @NameInMap("Pose")
        @Validation(required = true)
        public Double pose;

        public static DetectFaceResponseDataPoseList build(java.util.Map<String, ?> map) throws Exception {
            DetectFaceResponseDataPoseList self = new DetectFaceResponseDataPoseList();
            return TeaModel.build(map, self);
        }

    }

    public static class DetectFaceResponseDataLandmarks extends TeaModel {
        @NameInMap("Landmark")
        @Validation(required = true)
        public Double landmark;

        public static DetectFaceResponseDataLandmarks build(java.util.Map<String, ?> map) throws Exception {
            DetectFaceResponseDataLandmarks self = new DetectFaceResponseDataLandmarks();
            return TeaModel.build(map, self);
        }

    }

    public static class DetectFaceResponseDataPupils extends TeaModel {
        @NameInMap("Pupil")
        @Validation(required = true)
        public Double pupil;

        public static DetectFaceResponseDataPupils build(java.util.Map<String, ?> map) throws Exception {
            DetectFaceResponseDataPupils self = new DetectFaceResponseDataPupils();
            return TeaModel.build(map, self);
        }

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
        public java.util.List<DetectFaceResponseDataFaceRectangles> faceRectangles;

        @NameInMap("FaceProbabilityList")
        @Validation(required = true)
        public java.util.List<DetectFaceResponseDataFaceProbabilityList> faceProbabilityList;

        @NameInMap("PoseList")
        @Validation(required = true)
        public java.util.List<DetectFaceResponseDataPoseList> poseList;

        @NameInMap("Landmarks")
        @Validation(required = true)
        public java.util.List<DetectFaceResponseDataLandmarks> landmarks;

        @NameInMap("Pupils")
        @Validation(required = true)
        public java.util.List<DetectFaceResponseDataPupils> pupils;

        public static DetectFaceResponseData build(java.util.Map<String, ?> map) throws Exception {
            DetectFaceResponseData self = new DetectFaceResponseData();
            return TeaModel.build(map, self);
        }

    }

}
