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

    public static class RecognizeFaceResponseDataFaceRectangles extends TeaModel {
        @NameInMap("FaceRectangle")
        @Validation(required = true)
        public Integer faceRectangle;

        public static RecognizeFaceResponseDataFaceRectangles build(java.util.Map<String, ?> map) throws Exception {
            RecognizeFaceResponseDataFaceRectangles self = new RecognizeFaceResponseDataFaceRectangles();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeFaceResponseDataFaceProbabilityList extends TeaModel {
        @NameInMap("FaceProbability")
        @Validation(required = true)
        public Double faceProbability;

        public static RecognizeFaceResponseDataFaceProbabilityList build(java.util.Map<String, ?> map) throws Exception {
            RecognizeFaceResponseDataFaceProbabilityList self = new RecognizeFaceResponseDataFaceProbabilityList();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeFaceResponseDataPoseList extends TeaModel {
        @NameInMap("Pose")
        @Validation(required = true)
        public Double pose;

        public static RecognizeFaceResponseDataPoseList build(java.util.Map<String, ?> map) throws Exception {
            RecognizeFaceResponseDataPoseList self = new RecognizeFaceResponseDataPoseList();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeFaceResponseDataLandmarks extends TeaModel {
        @NameInMap("Landmark")
        @Validation(required = true)
        public Double landmark;

        public static RecognizeFaceResponseDataLandmarks build(java.util.Map<String, ?> map) throws Exception {
            RecognizeFaceResponseDataLandmarks self = new RecognizeFaceResponseDataLandmarks();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeFaceResponseDataPupils extends TeaModel {
        @NameInMap("Pupil")
        @Validation(required = true)
        public Double pupil;

        public static RecognizeFaceResponseDataPupils build(java.util.Map<String, ?> map) throws Exception {
            RecognizeFaceResponseDataPupils self = new RecognizeFaceResponseDataPupils();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeFaceResponseDataGenderList extends TeaModel {
        @NameInMap("Gender")
        @Validation(required = true)
        public Integer gender;

        public static RecognizeFaceResponseDataGenderList build(java.util.Map<String, ?> map) throws Exception {
            RecognizeFaceResponseDataGenderList self = new RecognizeFaceResponseDataGenderList();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeFaceResponseDataAgeList extends TeaModel {
        @NameInMap("Age")
        @Validation(required = true)
        public Integer age;

        public static RecognizeFaceResponseDataAgeList build(java.util.Map<String, ?> map) throws Exception {
            RecognizeFaceResponseDataAgeList self = new RecognizeFaceResponseDataAgeList();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeFaceResponseDataExpressions extends TeaModel {
        @NameInMap("Expression")
        @Validation(required = true)
        public Integer expression;

        public static RecognizeFaceResponseDataExpressions build(java.util.Map<String, ?> map) throws Exception {
            RecognizeFaceResponseDataExpressions self = new RecognizeFaceResponseDataExpressions();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeFaceResponseDataGlasses extends TeaModel {
        @NameInMap("Glass")
        @Validation(required = true)
        public Integer glass;

        public static RecognizeFaceResponseDataGlasses build(java.util.Map<String, ?> map) throws Exception {
            RecognizeFaceResponseDataGlasses self = new RecognizeFaceResponseDataGlasses();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeFaceResponseDataDenseFeatures extends TeaModel {
        @NameInMap("DenseFeature")
        @Validation(required = true)
        public String denseFeature;

        public static RecognizeFaceResponseDataDenseFeatures build(java.util.Map<String, ?> map) throws Exception {
            RecognizeFaceResponseDataDenseFeatures self = new RecognizeFaceResponseDataDenseFeatures();
            return TeaModel.build(map, self);
        }

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
        public java.util.List<RecognizeFaceResponseDataFaceRectangles> faceRectangles;

        @NameInMap("FaceProbabilityList")
        @Validation(required = true)
        public java.util.List<RecognizeFaceResponseDataFaceProbabilityList> faceProbabilityList;

        @NameInMap("PoseList")
        @Validation(required = true)
        public java.util.List<RecognizeFaceResponseDataPoseList> poseList;

        @NameInMap("Landmarks")
        @Validation(required = true)
        public java.util.List<RecognizeFaceResponseDataLandmarks> landmarks;

        @NameInMap("Pupils")
        @Validation(required = true)
        public java.util.List<RecognizeFaceResponseDataPupils> pupils;

        @NameInMap("GenderList")
        @Validation(required = true)
        public java.util.List<RecognizeFaceResponseDataGenderList> genderList;

        @NameInMap("AgeList")
        @Validation(required = true)
        public java.util.List<RecognizeFaceResponseDataAgeList> ageList;

        @NameInMap("Expressions")
        @Validation(required = true)
        public java.util.List<RecognizeFaceResponseDataExpressions> expressions;

        @NameInMap("Glasses")
        @Validation(required = true)
        public java.util.List<RecognizeFaceResponseDataGlasses> glasses;

        @NameInMap("DenseFeatures")
        @Validation(required = true)
        public java.util.List<RecognizeFaceResponseDataDenseFeatures> denseFeatures;

        public static RecognizeFaceResponseData build(java.util.Map<String, ?> map) throws Exception {
            RecognizeFaceResponseData self = new RecognizeFaceResponseData();
            return TeaModel.build(map, self);
        }

    }

}
