// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.emas_devops20191204.models;

import com.aliyun.tea.*;

public class ListBuildPhasesResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Items")
    @Validation(required = true)
    public java.util.List<ListBuildPhasesResponseItems> items;

    public static ListBuildPhasesResponse build(java.util.Map<String, ?> map) throws Exception {
        ListBuildPhasesResponse self = new ListBuildPhasesResponse();
        return TeaModel.build(map, self);
    }

    public ListBuildPhasesResponse setRequestId(String requestId) {
        this.requestId = requestId;
        return this;
    }
    public String getRequestId() {
        return this.requestId;
    }

    public ListBuildPhasesResponse setItems(java.util.List<ListBuildPhasesResponseItems> items) {
        this.items = items;
        return this;
    }
    public java.util.List<ListBuildPhasesResponseItems> getItems() {
        return this.items;
    }

    public static class ListBuildPhasesResponseItemsEmasError extends TeaModel {
        @NameInMap("Description")
        @Validation(required = true)
        public String description;

        @NameInMap("Code")
        @Validation(required = true)
        public Integer code;

        public static ListBuildPhasesResponseItemsEmasError build(java.util.Map<String, ?> map) throws Exception {
            ListBuildPhasesResponseItemsEmasError self = new ListBuildPhasesResponseItemsEmasError();
            return TeaModel.build(map, self);
        }

        public ListBuildPhasesResponseItemsEmasError setDescription(String description) {
            this.description = description;
            return this;
        }
        public String getDescription() {
            return this.description;
        }

        public ListBuildPhasesResponseItemsEmasError setCode(Integer code) {
            this.code = code;
            return this;
        }
        public Integer getCode() {
            return this.code;
        }

    }

    public static class ListBuildPhasesResponseItems extends TeaModel {
        @NameInMap("BuildPhase")
        @Validation(required = true)
        public String buildPhase;

        @NameInMap("BuildPhaseStatus")
        @Validation(required = true)
        public String buildPhaseStatus;

        @NameInMap("StartTime")
        @Validation(required = true)
        public Long startTime;

        @NameInMap("EndTime")
        @Validation(required = true)
        public Long endTime;

        @NameInMap("LogFileSignUrl")
        @Validation(required = true)
        public String logFileSignUrl;

        @NameInMap("EmasError")
        @Validation(required = true)
        public ListBuildPhasesResponseItemsEmasError emasError;

        public static ListBuildPhasesResponseItems build(java.util.Map<String, ?> map) throws Exception {
            ListBuildPhasesResponseItems self = new ListBuildPhasesResponseItems();
            return TeaModel.build(map, self);
        }

        public ListBuildPhasesResponseItems setBuildPhase(String buildPhase) {
            this.buildPhase = buildPhase;
            return this;
        }
        public String getBuildPhase() {
            return this.buildPhase;
        }

        public ListBuildPhasesResponseItems setBuildPhaseStatus(String buildPhaseStatus) {
            this.buildPhaseStatus = buildPhaseStatus;
            return this;
        }
        public String getBuildPhaseStatus() {
            return this.buildPhaseStatus;
        }

        public ListBuildPhasesResponseItems setStartTime(Long startTime) {
            this.startTime = startTime;
            return this;
        }
        public Long getStartTime() {
            return this.startTime;
        }

        public ListBuildPhasesResponseItems setEndTime(Long endTime) {
            this.endTime = endTime;
            return this;
        }
        public Long getEndTime() {
            return this.endTime;
        }

        public ListBuildPhasesResponseItems setLogFileSignUrl(String logFileSignUrl) {
            this.logFileSignUrl = logFileSignUrl;
            return this;
        }
        public String getLogFileSignUrl() {
            return this.logFileSignUrl;
        }

        public ListBuildPhasesResponseItems setEmasError(ListBuildPhasesResponseItemsEmasError emasError) {
            this.emasError = emasError;
            return this;
        }
        public ListBuildPhasesResponseItemsEmasError getEmasError() {
            return this.emasError;
        }

    }

}
