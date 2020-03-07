// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.objectdet.models;

import com.aliyun.tea.*;

public class RecognizeVehiclePartsResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public RecognizeVehiclePartsResponseData data;

    public static RecognizeVehiclePartsResponse build(java.util.Map<String, ?> map) throws Exception {
        RecognizeVehiclePartsResponse self = new RecognizeVehiclePartsResponse();
        return TeaModel.build(map, self);
    }

    public static class RecognizeVehiclePartsResponseDataElementsBoxes extends TeaModel {
        @NameInMap("Box")
        @Validation(required = true)
        public Integer box;

        public static RecognizeVehiclePartsResponseDataElementsBoxes build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVehiclePartsResponseDataElementsBoxes self = new RecognizeVehiclePartsResponseDataElementsBoxes();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVehiclePartsResponseDataElements extends TeaModel {
        @NameInMap("Score")
        @Validation(required = true)
        public Double score;

        @NameInMap("Type")
        @Validation(required = true)
        public String type;

        @NameInMap("Boxes")
        @Validation(required = true)
        public java.util.List<RecognizeVehiclePartsResponseDataElementsBoxes> boxes;

        public static RecognizeVehiclePartsResponseDataElements build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVehiclePartsResponseDataElements self = new RecognizeVehiclePartsResponseDataElements();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVehiclePartsResponseDataOriginShapes extends TeaModel {
        @NameInMap("OriginShape")
        @Validation(required = true)
        public Integer originShape;

        public static RecognizeVehiclePartsResponseDataOriginShapes build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVehiclePartsResponseDataOriginShapes self = new RecognizeVehiclePartsResponseDataOriginShapes();
            return TeaModel.build(map, self);
        }

    }

    public static class RecognizeVehiclePartsResponseData extends TeaModel {
        @NameInMap("Elements")
        @Validation(required = true)
        public java.util.List<RecognizeVehiclePartsResponseDataElements> elements;

        @NameInMap("OriginShapes")
        @Validation(required = true)
        public java.util.List<RecognizeVehiclePartsResponseDataOriginShapes> originShapes;

        public static RecognizeVehiclePartsResponseData build(java.util.Map<String, ?> map) throws Exception {
            RecognizeVehiclePartsResponseData self = new RecognizeVehiclePartsResponseData();
            return TeaModel.build(map, self);
        }

    }

}
