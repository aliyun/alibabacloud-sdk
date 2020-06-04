// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.pts20190810.models;

import com.aliyun.tea.*;

public class DescribeReportResponse extends TeaModel {
    @NameInMap("AverageConcurrency")
    @Validation(required = true)
    public Integer averageConcurrency;

    @NameInMap("AverageBandWidth")
    @Validation(required = true)
    public Long averageBandWidth;

    @NameInMap("SucceedRequestRatio")
    @Validation(required = true)
    public Double succeedRequestRatio;

    @NameInMap("EndTime")
    @Validation(required = true)
    public Long endTime;

    @NameInMap("BeginTime")
    @Validation(required = true)
    public Long beginTime;

    @NameInMap("TotalAgents")
    @Validation(required = true)
    public Integer totalAgents;

    @NameInMap("RequestCount")
    @Validation(required = true)
    public Long requestCount;

    @NameInMap("RpsLimit")
    @Validation(required = true)
    public Integer rpsLimit;

    @NameInMap("AliveAgents")
    @Validation(required = true)
    public Integer aliveAgents;

    @NameInMap("MaxTps")
    @Validation(required = true)
    public Integer maxTps;

    @NameInMap("ConcurrencyLimit")
    @Validation(required = true)
    public Integer concurrencyLimit;

    @NameInMap("MaxConcurrency")
    @Validation(required = true)
    public Integer maxConcurrency;

    @NameInMap("SceneDeleted")
    @Validation(required = true)
    public Boolean sceneDeleted;

    @NameInMap("Duration")
    @Validation(required = true)
    public String duration;

    @NameInMap("MaxBandWidth")
    @Validation(required = true)
    public Long maxBandWidth;

    @NameInMap("Vum")
    @Validation(required = true)
    public Long vum;

    @NameInMap("FailedBusinessCount")
    @Validation(required = true)
    public Long failedBusinessCount;

    @NameInMap("FailedRequestCount")
    @Validation(required = true)
    public Long failedRequestCount;

    @NameInMap("BusinessRequestRatio")
    @Validation(required = true)
    public Double businessRequestRatio;

    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Code")
    @Validation(required = true)
    public String code;

    @NameInMap("Message")
    @Validation(required = true)
    public String message;

    @NameInMap("HttpStatusCode")
    @Validation(required = true)
    public Integer httpStatusCode;

    @NameInMap("Success")
    @Validation(required = true)
    public Boolean success;

    @NameInMap("AgentsLocation")
    @Validation(required = true)
    public java.util.List<DescribeReportResponseAgentsLocation> agentsLocation;

    @NameInMap("Relations")
    @Validation(required = true)
    public java.util.List<DescribeReportResponseRelations> relations;

    public static DescribeReportResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeReportResponse self = new DescribeReportResponse();
        return TeaModel.build(map, self);
    }

    public static class DescribeReportResponseAgentsLocation extends TeaModel {
        @NameInMap("Region")
        @Validation(required = true)
        public String region;

        @NameInMap("Province")
        @Validation(required = true)
        public String province;

        @NameInMap("Isp")
        @Validation(required = true)
        public String isp;

        @NameInMap("Count")
        @Validation(required = true)
        public Integer count;

        public static DescribeReportResponseAgentsLocation build(java.util.Map<String, ?> map) throws Exception {
            DescribeReportResponseAgentsLocation self = new DescribeReportResponseAgentsLocation();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeReportResponseRelationsNodes extends TeaModel {
        @NameInMap("Type")
        @Validation(required = true)
        public String type;

        @NameInMap("Id")
        @Validation(required = true)
        public Long id;

        @NameInMap("Name")
        @Validation(required = true)
        public String name;

        @NameInMap("Config")
        @Validation(required = true)
        public java.util.Map<String, ?> config;

        public static DescribeReportResponseRelationsNodes build(java.util.Map<String, ?> map) throws Exception {
            DescribeReportResponseRelationsNodes self = new DescribeReportResponseRelationsNodes();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeReportResponseRelations extends TeaModel {
        @NameInMap("Name")
        @Validation(required = true)
        public String name;

        @NameInMap("Id")
        @Validation(required = true)
        public Long id;

        @NameInMap("Disabled")
        @Validation(required = true)
        public Boolean disabled;

        @NameInMap("Headers")
        @Validation(required = true)
        public java.util.Map<String, ?> headers;

        @NameInMap("RelationTestConfig")
        @Validation(required = true)
        public java.util.Map<String, ?> relationTestConfig;

        @NameInMap("Nodes")
        @Validation(required = true)
        public java.util.List<DescribeReportResponseRelationsNodes> nodes;

        public static DescribeReportResponseRelations build(java.util.Map<String, ?> map) throws Exception {
            DescribeReportResponseRelations self = new DescribeReportResponseRelations();
            return TeaModel.build(map, self);
        }

    }

}
