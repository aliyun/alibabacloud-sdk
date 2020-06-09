// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class DescribeLogAnalysisResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("Code")
    @Validation(required = true)
    public String code;

    @NameInMap("TotalCount")
    @Validation(required = true)
    public Integer totalCount;

    @NameInMap("PageSize")
    @Validation(required = true)
    public Integer pageSize;

    @NameInMap("PageNumber")
    @Validation(required = true)
    public Integer pageNumber;

    @NameInMap("Analyses")
    @Validation(required = true)
    public DescribeLogAnalysisResponseAnalyses analyses;

    public static DescribeLogAnalysisResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeLogAnalysisResponse self = new DescribeLogAnalysisResponse();
        return TeaModel.build(map, self);
    }

    public static class DescribeLogAnalysisResponseAnalysesAnalysisMetaValue extends TeaModel {
        @NameInMap("Logstore")
        @Validation(required = true)
        public String logstore;

        @NameInMap("Region")
        @Validation(required = true)
        public String region;

        @NameInMap("Project")
        @Validation(required = true)
        public String project;

        @NameInMap("RoleArn")
        @Validation(required = true)
        public String roleArn;

        public static DescribeLogAnalysisResponseAnalysesAnalysisMetaValue build(java.util.Map<String, ?> map) throws Exception {
            DescribeLogAnalysisResponseAnalysesAnalysisMetaValue self = new DescribeLogAnalysisResponseAnalysesAnalysisMetaValue();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeLogAnalysisResponseAnalysesAnalysis extends TeaModel {
        @NameInMap("MetaKey")
        @Validation(required = true)
        public String metaKey;

        @NameInMap("MetaValue")
        @Validation(required = true)
        public DescribeLogAnalysisResponseAnalysesAnalysisMetaValue metaValue;

        public static DescribeLogAnalysisResponseAnalysesAnalysis build(java.util.Map<String, ?> map) throws Exception {
            DescribeLogAnalysisResponseAnalysesAnalysis self = new DescribeLogAnalysisResponseAnalysesAnalysis();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeLogAnalysisResponseAnalyses extends TeaModel {
        @NameInMap("Analysis")
        @Validation(required = true)
        public java.util.List<DescribeLogAnalysisResponseAnalysesAnalysis> analysis;

        public static DescribeLogAnalysisResponseAnalyses build(java.util.Map<String, ?> map) throws Exception {
            DescribeLogAnalysisResponseAnalyses self = new DescribeLogAnalysisResponseAnalyses();
            return TeaModel.build(map, self);
        }

    }

}
