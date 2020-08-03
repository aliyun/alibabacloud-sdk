// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class ExtractPedestrianFeatureAttributeResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public ExtractPedestrianFeatureAttributeResponseData data;

    public static ExtractPedestrianFeatureAttributeResponse build(java.util.Map<String, ?> map) throws Exception {
        ExtractPedestrianFeatureAttributeResponse self = new ExtractPedestrianFeatureAttributeResponse();
        return TeaModel.build(map, self);
    }

    public static class ExtractPedestrianFeatureAttributeResponseData extends TeaModel {
        @NameInMap("ObjType")
        @Validation(required = true)
        public String objType;

        @NameInMap("ObjTypeScore")
        @Validation(required = true)
        public Double objTypeScore;

        @NameInMap("Feature")
        @Validation(required = true)
        public String feature;

        @NameInMap("QualityScore")
        @Validation(required = true)
        public Double qualityScore;

        @NameInMap("UpperColor")
        @Validation(required = true)
        public String upperColor;

        @NameInMap("UpperColorScore")
        @Validation(required = true)
        public Double upperColorScore;

        @NameInMap("UpperType")
        @Validation(required = true)
        public String upperType;

        @NameInMap("UpperTypeScore")
        @Validation(required = true)
        public Double upperTypeScore;

        @NameInMap("LowerColor")
        @Validation(required = true)
        public String lowerColor;

        @NameInMap("LowerColorScore")
        @Validation(required = true)
        public Double lowerColorScore;

        @NameInMap("LowerType")
        @Validation(required = true)
        public String lowerType;

        @NameInMap("LowerTypeScore")
        @Validation(required = true)
        public Double lowerTypeScore;

        @NameInMap("Gender")
        @Validation(required = true)
        public String gender;

        @NameInMap("GenderScore")
        @Validation(required = true)
        public Double genderScore;

        @NameInMap("Hair")
        @Validation(required = true)
        public String hair;

        @NameInMap("HairScore")
        @Validation(required = true)
        public Double hairScore;

        @NameInMap("Age")
        @Validation(required = true)
        public String age;

        @NameInMap("AgeScore")
        @Validation(required = true)
        public Double ageScore;

        public static ExtractPedestrianFeatureAttributeResponseData build(java.util.Map<String, ?> map) throws Exception {
            ExtractPedestrianFeatureAttributeResponseData self = new ExtractPedestrianFeatureAttributeResponseData();
            return TeaModel.build(map, self);
        }

    }

}
