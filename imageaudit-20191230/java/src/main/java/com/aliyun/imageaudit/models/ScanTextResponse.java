// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.imageaudit.models;

import com.aliyun.tea.*;

public class ScanTextResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Data")
    @Validation(required = true)
    public ScanTextResponseData data;

    public static ScanTextResponse build(java.util.Map<String, ?> map) throws Exception {
        ScanTextResponse self = new ScanTextResponse();
        return TeaModel.build(map, self);
    }

    public static class ScanTextResponseDataElementsResultsDetailsHintWords extends TeaModel {
        @NameInMap("Context")
        @Validation(required = true)
        public String context;

        public static ScanTextResponseDataElementsResultsDetailsHintWords build(java.util.Map<String, ?> map) throws Exception {
            ScanTextResponseDataElementsResultsDetailsHintWords self = new ScanTextResponseDataElementsResultsDetailsHintWords();
            return TeaModel.build(map, self);
        }

    }

    public static class ScanTextResponseDataElementsResultsDetails extends TeaModel {
        @NameInMap("Label")
        @Validation(required = true)
        public String label;

        @NameInMap("HintWords")
        @Validation(required = true)
        public ScanTextResponseDataElementsResultsDetailsHintWords[] hintWords;

        public static ScanTextResponseDataElementsResultsDetails build(java.util.Map<String, ?> map) throws Exception {
            ScanTextResponseDataElementsResultsDetails self = new ScanTextResponseDataElementsResultsDetails();
            return TeaModel.build(map, self);
        }

    }

    public static class ScanTextResponseDataElementsResults extends TeaModel {
        @NameInMap("Label")
        @Validation(required = true)
        public String label;

        @NameInMap("Suggestion")
        @Validation(required = true)
        public String suggestion;

        @NameInMap("Rate")
        @Validation(required = true)
        public Double rate;

        @NameInMap("Details")
        @Validation(required = true)
        public ScanTextResponseDataElementsResultsDetails[] details;

        public static ScanTextResponseDataElementsResults build(java.util.Map<String, ?> map) throws Exception {
            ScanTextResponseDataElementsResults self = new ScanTextResponseDataElementsResults();
            return TeaModel.build(map, self);
        }

    }

    public static class ScanTextResponseDataElements extends TeaModel {
        @NameInMap("TaskId")
        @Validation(required = true)
        public String taskId;

        @NameInMap("Results")
        @Validation(required = true)
        public ScanTextResponseDataElementsResults[] results;

        public static ScanTextResponseDataElements build(java.util.Map<String, ?> map) throws Exception {
            ScanTextResponseDataElements self = new ScanTextResponseDataElements();
            return TeaModel.build(map, self);
        }

    }

    public static class ScanTextResponseData extends TeaModel {
        @NameInMap("Elements")
        @Validation(required = true)
        public ScanTextResponseDataElements[] elements;

        public static ScanTextResponseData build(java.util.Map<String, ?> map) throws Exception {
            ScanTextResponseData self = new ScanTextResponseData();
            return TeaModel.build(map, self);
        }

    }

}
