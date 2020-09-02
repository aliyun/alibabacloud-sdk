// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.emas_devops20191204.models;

import com.aliyun.tea.*;

public class DescribeBuildTaskDetailResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("BuildTaskBid")
    @Validation(required = true)
    public String buildTaskBid;

    @NameInMap("CodeAddress")
    @Validation(required = true)
    public String codeAddress;

    @NameInMap("Branch")
    @Validation(required = true)
    public String branch;

    @NameInMap("GitCommit")
    @Validation(required = true)
    public String gitCommit;

    @NameInMap("BuildStartTime")
    @Validation(required = true)
    public Long buildStartTime;

    @NameInMap("BuildTaskStatus")
    @Validation(required = true)
    public String buildTaskStatus;

    @NameInMap("TemplateName")
    @Validation(required = true)
    public String templateName;

    @NameInMap("TemplateType")
    @Validation(required = true)
    public String templateType;

    @NameInMap("BuildEndTime")
    @Validation(required = true)
    public Long buildEndTime;

    @NameInMap("ProductFileInfos")
    @Validation(required = true)
    public java.util.List<DescribeBuildTaskDetailResponseProductFileInfos> productFileInfos;

    @NameInMap("Creator")
    @Validation(required = true)
    public DescribeBuildTaskDetailResponseCreator creator;

    public static DescribeBuildTaskDetailResponse build(java.util.Map<String, ?> map) throws Exception {
        DescribeBuildTaskDetailResponse self = new DescribeBuildTaskDetailResponse();
        return TeaModel.build(map, self);
    }

    public DescribeBuildTaskDetailResponse setRequestId(String requestId) {
        this.requestId = requestId;
        return this;
    }
    public String getRequestId() {
        return this.requestId;
    }

    public DescribeBuildTaskDetailResponse setBuildTaskBid(String buildTaskBid) {
        this.buildTaskBid = buildTaskBid;
        return this;
    }
    public String getBuildTaskBid() {
        return this.buildTaskBid;
    }

    public DescribeBuildTaskDetailResponse setCodeAddress(String codeAddress) {
        this.codeAddress = codeAddress;
        return this;
    }
    public String getCodeAddress() {
        return this.codeAddress;
    }

    public DescribeBuildTaskDetailResponse setBranch(String branch) {
        this.branch = branch;
        return this;
    }
    public String getBranch() {
        return this.branch;
    }

    public DescribeBuildTaskDetailResponse setGitCommit(String gitCommit) {
        this.gitCommit = gitCommit;
        return this;
    }
    public String getGitCommit() {
        return this.gitCommit;
    }

    public DescribeBuildTaskDetailResponse setBuildStartTime(Long buildStartTime) {
        this.buildStartTime = buildStartTime;
        return this;
    }
    public Long getBuildStartTime() {
        return this.buildStartTime;
    }

    public DescribeBuildTaskDetailResponse setBuildTaskStatus(String buildTaskStatus) {
        this.buildTaskStatus = buildTaskStatus;
        return this;
    }
    public String getBuildTaskStatus() {
        return this.buildTaskStatus;
    }

    public DescribeBuildTaskDetailResponse setTemplateName(String templateName) {
        this.templateName = templateName;
        return this;
    }
    public String getTemplateName() {
        return this.templateName;
    }

    public DescribeBuildTaskDetailResponse setTemplateType(String templateType) {
        this.templateType = templateType;
        return this;
    }
    public String getTemplateType() {
        return this.templateType;
    }

    public DescribeBuildTaskDetailResponse setBuildEndTime(Long buildEndTime) {
        this.buildEndTime = buildEndTime;
        return this;
    }
    public Long getBuildEndTime() {
        return this.buildEndTime;
    }

    public DescribeBuildTaskDetailResponse setProductFileInfos(java.util.List<DescribeBuildTaskDetailResponseProductFileInfos> productFileInfos) {
        this.productFileInfos = productFileInfos;
        return this;
    }
    public java.util.List<DescribeBuildTaskDetailResponseProductFileInfos> getProductFileInfos() {
        return this.productFileInfos;
    }

    public DescribeBuildTaskDetailResponse setCreator(DescribeBuildTaskDetailResponseCreator creator) {
        this.creator = creator;
        return this;
    }
    public DescribeBuildTaskDetailResponseCreator getCreator() {
        return this.creator;
    }

    public static class DescribeBuildTaskDetailResponseProductFileInfos extends TeaModel {
        @NameInMap("FileName")
        @Validation(required = true)
        public String fileName;

        @NameInMap("FileSignUrl")
        @Validation(required = true)
        public String fileSignUrl;

        @NameInMap("FileType")
        @Validation(required = true)
        public String fileType;

        @NameInMap("Size")
        @Validation(required = true)
        public String size;

        public static DescribeBuildTaskDetailResponseProductFileInfos build(java.util.Map<String, ?> map) throws Exception {
            DescribeBuildTaskDetailResponseProductFileInfos self = new DescribeBuildTaskDetailResponseProductFileInfos();
            return TeaModel.build(map, self);
        }

        public DescribeBuildTaskDetailResponseProductFileInfos setFileName(String fileName) {
            this.fileName = fileName;
            return this;
        }
        public String getFileName() {
            return this.fileName;
        }

        public DescribeBuildTaskDetailResponseProductFileInfos setFileSignUrl(String fileSignUrl) {
            this.fileSignUrl = fileSignUrl;
            return this;
        }
        public String getFileSignUrl() {
            return this.fileSignUrl;
        }

        public DescribeBuildTaskDetailResponseProductFileInfos setFileType(String fileType) {
            this.fileType = fileType;
            return this;
        }
        public String getFileType() {
            return this.fileType;
        }

        public DescribeBuildTaskDetailResponseProductFileInfos setSize(String size) {
            this.size = size;
            return this;
        }
        public String getSize() {
            return this.size;
        }

    }

    public static class DescribeBuildTaskDetailResponseCreator extends TeaModel {
        @NameInMap("Uid")
        @Validation(required = true)
        public String uid;

        @NameInMap("Username")
        @Validation(required = true)
        public String username;

        @NameInMap("DisplayName")
        @Validation(required = true)
        public String displayName;

        @NameInMap("Email")
        @Validation(required = true)
        public String email;

        public static DescribeBuildTaskDetailResponseCreator build(java.util.Map<String, ?> map) throws Exception {
            DescribeBuildTaskDetailResponseCreator self = new DescribeBuildTaskDetailResponseCreator();
            return TeaModel.build(map, self);
        }

        public DescribeBuildTaskDetailResponseCreator setUid(String uid) {
            this.uid = uid;
            return this;
        }
        public String getUid() {
            return this.uid;
        }

        public DescribeBuildTaskDetailResponseCreator setUsername(String username) {
            this.username = username;
            return this;
        }
        public String getUsername() {
            return this.username;
        }

        public DescribeBuildTaskDetailResponseCreator setDisplayName(String displayName) {
            this.displayName = displayName;
            return this;
        }
        public String getDisplayName() {
            return this.displayName;
        }

        public DescribeBuildTaskDetailResponseCreator setEmail(String email) {
            this.email = email;
            return this;
        }
        public String getEmail() {
            return this.email;
        }

    }

}
