// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.pts20190810.models;

import com.aliyun.tea.*;

public class DescribeSceneResponse extends TeaModel {
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

    @NameInMap("Scene")
    @Validation(required = true)
    public DescribeSceneResponseScene scene;

    public static DescribeSceneResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeSceneResponse self = new DescribeSceneResponse();
        return TeaModel.build(map, self);
    }

    public static class DescribeSceneResponseSceneRelationsNodes extends TeaModel {
        @NameInMap("Id")
        @Validation(required = true)
        public Long id;

        @NameInMap("Name")
        @Validation(required = true)
        public String name;

        @NameInMap("Type")
        @Validation(required = true)
        public String type;

        @NameInMap("Config")
        @Validation(required = true)
        public java.util.Map<String, ?> config;

        public static DescribeSceneResponseSceneRelationsNodes build(java.util.Map<String, ?> map) throws Exception {
            DescribeSceneResponseSceneRelationsNodes self = new DescribeSceneResponseSceneRelationsNodes();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeSceneResponseSceneRelationsRelationTestConfig extends TeaModel {
        @NameInMap("BeginStep")
        @Validation(required = true)
        public Integer beginStep;

        @NameInMap("Increment")
        @Validation(required = true)
        public Integer increment;

        @NameInMap("EndStep")
        @Validation(required = true)
        public Integer endStep;

        public static DescribeSceneResponseSceneRelationsRelationTestConfig build(java.util.Map<String, ?> map) throws Exception {
            DescribeSceneResponseSceneRelationsRelationTestConfig self = new DescribeSceneResponseSceneRelationsRelationTestConfig();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeSceneResponseSceneRelations extends TeaModel {
        @NameInMap("Id")
        @Validation(required = true)
        public Long id;

        @NameInMap("Name")
        @Validation(required = true)
        public String name;

        @NameInMap("Disabled")
        @Validation(required = true)
        public Boolean disabled;

        @NameInMap("Headers")
        @Validation(required = true)
        public java.util.Map<String, ?> headers;

        @NameInMap("Nodes")
        @Validation(required = true)
        public java.util.List<DescribeSceneResponseSceneRelationsNodes> nodes;

        @NameInMap("RelationTestConfig")
        @Validation(required = true)
        public DescribeSceneResponseSceneRelationsRelationTestConfig relationTestConfig;

        public static DescribeSceneResponseSceneRelations build(java.util.Map<String, ?> map) throws Exception {
            DescribeSceneResponseSceneRelations self = new DescribeSceneResponseSceneRelations();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeSceneResponseSceneVips extends TeaModel {
        @NameInMap("Domain")
        @Validation(required = true)
        public String domain;

        @NameInMap("Enabled")
        @Validation(required = true)
        public Boolean enabled;

        @NameInMap("Ips")
        @Validation(required = true)
        public java.util.List<String> ips;

        public static DescribeSceneResponseSceneVips build(java.util.Map<String, ?> map) throws Exception {
            DescribeSceneResponseSceneVips self = new DescribeSceneResponseSceneVips();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeSceneResponseSceneFilesExportedParams extends TeaModel {
        @NameInMap("Name")
        @Validation(required = true)
        public String name;

        @NameInMap("Column")
        @Validation(required = true)
        public String column;

        public static DescribeSceneResponseSceneFilesExportedParams build(java.util.Map<String, ?> map) throws Exception {
            DescribeSceneResponseSceneFilesExportedParams self = new DescribeSceneResponseSceneFilesExportedParams();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeSceneResponseSceneFiles extends TeaModel {
        @NameInMap("FileKey")
        @Validation(required = true)
        public String fileKey;

        @NameInMap("FileName")
        @Validation(required = true)
        public String fileName;

        @NameInMap("SkipFirstLine")
        @Validation(required = true)
        public Boolean skipFirstLine;

        @NameInMap("PreviewData")
        @Validation(required = true)
        public java.util.Map<String, ?> previewData;

        @NameInMap("RemoteUrl")
        @Validation(required = true)
        public String remoteUrl;

        @NameInMap("ExportedParams")
        @Validation(required = true)
        public java.util.List<DescribeSceneResponseSceneFilesExportedParams> exportedParams;

        public static DescribeSceneResponseSceneFiles build(java.util.Map<String, ?> map) throws Exception {
            DescribeSceneResponseSceneFiles self = new DescribeSceneResponseSceneFiles();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeSceneResponseSceneStatus extends TeaModel {
        @NameInMap("Operations")
        @Validation(required = true)
        public java.util.Map<String, ?> operations;

        @NameInMap("Tips")
        @Validation(required = true)
        public String tips;

        @NameInMap("Debugging")
        @Validation(required = true)
        public Boolean debugging;

        @NameInMap("Testing")
        @Validation(required = true)
        public Boolean testing;

        @NameInMap("IsCronable")
        @Validation(required = true)
        public Boolean isCronable;

        @NameInMap("IsReusable")
        @Validation(required = true)
        public Boolean isReusable;

        @NameInMap("CronEditable")
        @Validation(required = true)
        public Boolean cronEditable;

        public static DescribeSceneResponseSceneStatus build(java.util.Map<String, ?> map) throws Exception {
            DescribeSceneResponseSceneStatus self = new DescribeSceneResponseSceneStatus();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeSceneResponseSceneTestConfigVpcConfig extends TeaModel {
        @NameInMap("RegionId")
        @Validation(required = true)
        public String regionId;

        @NameInMap("VSwitchId")
        @Validation(required = true)
        public String VSwitchId;

        @NameInMap("SecurityGroupId")
        @Validation(required = true)
        public String securityGroupId;

        @NameInMap("VpcId")
        @Validation(required = true)
        public String vpcId;

        public static DescribeSceneResponseSceneTestConfigVpcConfig build(java.util.Map<String, ?> map) throws Exception {
            DescribeSceneResponseSceneTestConfigVpcConfig self = new DescribeSceneResponseSceneTestConfigVpcConfig();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeSceneResponseSceneTestConfig extends TeaModel {
        @NameInMap("Mode")
        @Validation(required = true)
        public String mode;

        @NameInMap("MaxDuration")
        @Validation(required = true)
        public Integer maxDuration;

        @NameInMap("AutoStep")
        @Validation(required = true)
        public Boolean autoStep;

        @NameInMap("Increment")
        @Validation(required = true)
        public Integer increment;

        @NameInMap("KeepTime")
        @Validation(required = true)
        public Integer keepTime;

        @NameInMap("AgentPool")
        @Validation(required = true)
        public String agentPool;

        @NameInMap("VpcConfig")
        @Validation(required = true)
        public DescribeSceneResponseSceneTestConfigVpcConfig vpcConfig;

        public static DescribeSceneResponseSceneTestConfig build(java.util.Map<String, ?> map) throws Exception {
            DescribeSceneResponseSceneTestConfig self = new DescribeSceneResponseSceneTestConfig();
            return TeaModel.build(map, self);
        }

    }

    public static class DescribeSceneResponseScene extends TeaModel {
        @NameInMap("Id")
        @Validation(required = true)
        public String id;

        @NameInMap("Name")
        @Validation(required = true)
        public String name;

        @NameInMap("Type")
        @Validation(required = true)
        public String type;

        @NameInMap("Variables")
        @Validation(required = true)
        public java.util.Map<String, ?> variables;

        @NameInMap("Headers")
        @Validation(required = true)
        public java.util.Map<String, ?> headers;

        @NameInMap("Creator")
        @Validation(required = true)
        public String creator;

        @NameInMap("Modifier")
        @Validation(required = true)
        public String modifier;

        @NameInMap("CreateTime")
        @Validation(required = true)
        public Long createTime;

        @NameInMap("ModifyTime")
        @Validation(required = true)
        public Long modifyTime;

        @NameInMap("Relations")
        @Validation(required = true)
        public java.util.List<DescribeSceneResponseSceneRelations> relations;

        @NameInMap("Vips")
        @Validation(required = true)
        public java.util.List<DescribeSceneResponseSceneVips> vips;

        @NameInMap("Files")
        @Validation(required = true)
        public java.util.List<DescribeSceneResponseSceneFiles> files;

        @NameInMap("Status")
        @Validation(required = true)
        public DescribeSceneResponseSceneStatus status;

        @NameInMap("TestConfig")
        @Validation(required = true)
        public DescribeSceneResponseSceneTestConfig testConfig;

        public static DescribeSceneResponseScene build(java.util.Map<String, ?> map) throws Exception {
            DescribeSceneResponseScene self = new DescribeSceneResponseScene();
            return TeaModel.build(map, self);
        }

    }

}
