// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.facebody.models;

import com.aliyun.tea.*;

public class BodyPostureResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public BodyPostureResponseData data;

    public static BodyPostureResponse build(java.util.Map<String, ?> map) throws Exception {
        BodyPostureResponse self = new BodyPostureResponse();
        return TeaModel.build(map, self);
    }

    public static class BodyPostureResponseDataOutputsResultsBodiesPositions extends TeaModel {
        @NameInMap("Points")
        @Validation(required = true)
        public java.util.List<Double> points;

        public static BodyPostureResponseDataOutputsResultsBodiesPositions build(java.util.Map<String, ?> map) throws Exception {
            BodyPostureResponseDataOutputsResultsBodiesPositions self = new BodyPostureResponseDataOutputsResultsBodiesPositions();
            return TeaModel.build(map, self);
        }

    }

    public static class BodyPostureResponseDataOutputsResultsBodies extends TeaModel {
        @NameInMap("Confident")
        @Validation(required = true)
        public Double confident;

        @NameInMap("Label")
        @Validation(required = true)
        public String label;

        @NameInMap("Positions")
        @Validation(required = true)
        public java.util.List<BodyPostureResponseDataOutputsResultsBodiesPositions> positions;

        public static BodyPostureResponseDataOutputsResultsBodies build(java.util.Map<String, ?> map) throws Exception {
            BodyPostureResponseDataOutputsResultsBodies self = new BodyPostureResponseDataOutputsResultsBodies();
            return TeaModel.build(map, self);
        }

    }

    public static class BodyPostureResponseDataOutputsResults extends TeaModel {
        @NameInMap("Bodies")
        @Validation(required = true)
        public java.util.List<BodyPostureResponseDataOutputsResultsBodies> bodies;

        public static BodyPostureResponseDataOutputsResults build(java.util.Map<String, ?> map) throws Exception {
            BodyPostureResponseDataOutputsResults self = new BodyPostureResponseDataOutputsResults();
            return TeaModel.build(map, self);
        }

    }

    public static class BodyPostureResponseDataOutputs extends TeaModel {
        @NameInMap("HumanCount")
        @Validation(required = true)
        public Integer humanCount;

        @NameInMap("Results")
        @Validation(required = true)
        public java.util.List<BodyPostureResponseDataOutputsResults> results;

        public static BodyPostureResponseDataOutputs build(java.util.Map<String, ?> map) throws Exception {
            BodyPostureResponseDataOutputs self = new BodyPostureResponseDataOutputs();
            return TeaModel.build(map, self);
        }

    }

    public static class BodyPostureResponseDataMetaObject extends TeaModel {
        @NameInMap("Height")
        @Validation(required = true)
        public Integer height;

        @NameInMap("Width")
        @Validation(required = true)
        public Integer width;

        public static BodyPostureResponseDataMetaObject build(java.util.Map<String, ?> map) throws Exception {
            BodyPostureResponseDataMetaObject self = new BodyPostureResponseDataMetaObject();
            return TeaModel.build(map, self);
        }

    }

    public static class BodyPostureResponseData extends TeaModel {
        @NameInMap("Outputs")
        @Validation(required = true)
        public java.util.List<BodyPostureResponseDataOutputs> outputs;

        @NameInMap("MetaObject")
        @Validation(required = true)
        public BodyPostureResponseDataMetaObject metaObject;

        public static BodyPostureResponseData build(java.util.Map<String, ?> map) throws Exception {
            BodyPostureResponseData self = new BodyPostureResponseData();
            return TeaModel.build(map, self);
        }

    }

}
