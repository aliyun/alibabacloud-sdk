// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody20191230.models;

import com.aliyun.tea.*;

public class HandPostureResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public HandPostureResponseData data;

    public static HandPostureResponse build(java.util.Map<String, ?> map) throws Exception {
        HandPostureResponse self = new HandPostureResponse();
        return TeaModel.build(map, self);
    }

    public static class HandPostureResponseDataOutputsResultsBoxPositions extends TeaModel {
        @NameInMap("Points")
        @Validation(required = true)
        public java.util.List<Double> points;

        public static HandPostureResponseDataOutputsResultsBoxPositions build(java.util.Map<String, ?> map) throws Exception {
            HandPostureResponseDataOutputsResultsBoxPositions self = new HandPostureResponseDataOutputsResultsBoxPositions();
            return TeaModel.build(map, self);
        }

    }

    public static class HandPostureResponseDataOutputsResultsBox extends TeaModel {
        @NameInMap("Confident")
        @Validation(required = true)
        public Double confident;

        @NameInMap("Positions")
        @Validation(required = true)
        public java.util.List<HandPostureResponseDataOutputsResultsBoxPositions> positions;

        public static HandPostureResponseDataOutputsResultsBox build(java.util.Map<String, ?> map) throws Exception {
            HandPostureResponseDataOutputsResultsBox self = new HandPostureResponseDataOutputsResultsBox();
            return TeaModel.build(map, self);
        }

    }

    public static class HandPostureResponseDataOutputsResultsHandsKeyPointsPositions extends TeaModel {
        @NameInMap("Points")
        @Validation(required = true)
        public java.util.List<Double> points;

        public static HandPostureResponseDataOutputsResultsHandsKeyPointsPositions build(java.util.Map<String, ?> map) throws Exception {
            HandPostureResponseDataOutputsResultsHandsKeyPointsPositions self = new HandPostureResponseDataOutputsResultsHandsKeyPointsPositions();
            return TeaModel.build(map, self);
        }

    }

    public static class HandPostureResponseDataOutputsResultsHandsKeyPoints extends TeaModel {
        @NameInMap("Label")
        @Validation(required = true)
        public String label;

        @NameInMap("Positions")
        @Validation(required = true)
        public java.util.List<HandPostureResponseDataOutputsResultsHandsKeyPointsPositions> positions;

        public static HandPostureResponseDataOutputsResultsHandsKeyPoints build(java.util.Map<String, ?> map) throws Exception {
            HandPostureResponseDataOutputsResultsHandsKeyPoints self = new HandPostureResponseDataOutputsResultsHandsKeyPoints();
            return TeaModel.build(map, self);
        }

    }

    public static class HandPostureResponseDataOutputsResultsHands extends TeaModel {
        @NameInMap("Confident")
        @Validation(required = true)
        public Double confident;

        @NameInMap("KeyPoints")
        @Validation(required = true)
        public java.util.List<HandPostureResponseDataOutputsResultsHandsKeyPoints> keyPoints;

        public static HandPostureResponseDataOutputsResultsHands build(java.util.Map<String, ?> map) throws Exception {
            HandPostureResponseDataOutputsResultsHands self = new HandPostureResponseDataOutputsResultsHands();
            return TeaModel.build(map, self);
        }

    }

    public static class HandPostureResponseDataOutputsResults extends TeaModel {
        @NameInMap("Box")
        @Validation(required = true)
        public HandPostureResponseDataOutputsResultsBox box;

        @NameInMap("Hands")
        @Validation(required = true)
        public HandPostureResponseDataOutputsResultsHands hands;

        public static HandPostureResponseDataOutputsResults build(java.util.Map<String, ?> map) throws Exception {
            HandPostureResponseDataOutputsResults self = new HandPostureResponseDataOutputsResults();
            return TeaModel.build(map, self);
        }

    }

    public static class HandPostureResponseDataOutputs extends TeaModel {
        @NameInMap("HandCount")
        @Validation(required = true)
        public Integer handCount;

        @NameInMap("Results")
        @Validation(required = true)
        public java.util.List<HandPostureResponseDataOutputsResults> results;

        public static HandPostureResponseDataOutputs build(java.util.Map<String, ?> map) throws Exception {
            HandPostureResponseDataOutputs self = new HandPostureResponseDataOutputs();
            return TeaModel.build(map, self);
        }

    }

    public static class HandPostureResponseDataMetaObject extends TeaModel {
        @NameInMap("Height")
        @Validation(required = true)
        public Integer height;

        @NameInMap("Width")
        @Validation(required = true)
        public Integer width;

        public static HandPostureResponseDataMetaObject build(java.util.Map<String, ?> map) throws Exception {
            HandPostureResponseDataMetaObject self = new HandPostureResponseDataMetaObject();
            return TeaModel.build(map, self);
        }

    }

    public static class HandPostureResponseData extends TeaModel {
        @NameInMap("Outputs")
        @Validation(required = true)
        public java.util.List<HandPostureResponseDataOutputs> outputs;

        @NameInMap("MetaObject")
        @Validation(required = true)
        public HandPostureResponseDataMetaObject metaObject;

        public static HandPostureResponseData build(java.util.Map<String, ?> map) throws Exception {
            HandPostureResponseData self = new HandPostureResponseData();
            return TeaModel.build(map, self);
        }

    }

}
