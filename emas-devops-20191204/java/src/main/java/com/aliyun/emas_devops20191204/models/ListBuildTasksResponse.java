// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.emas_devops20191204.models;

import com.aliyun.tea.*;

public class ListBuildTasksResponse extends TeaModel {
    @NameInMap("RequestId")
    @Validation(required = true)
    public String requestId;

    @NameInMap("PageNumber")
    @Validation(required = true)
    public Long pageNumber;

    @NameInMap("PageSize")
    @Validation(required = true)
    public Integer pageSize;

    @NameInMap("Total")
    @Validation(required = true)
    public Long total;

    @NameInMap("Items")
    @Validation(required = true)
    public java.util.List<ListBuildTasksResponseItems> items;

    public static ListBuildTasksResponse build(java.util.Map<String, ?> map) throws Exception {
        ListBuildTasksResponse self = new ListBuildTasksResponse();
        return TeaModel.build(map, self);
    }

    public ListBuildTasksResponse setRequestId(String requestId) {
        this.requestId = requestId;
        return this;
    }
    public String getRequestId() {
        return this.requestId;
    }

    public ListBuildTasksResponse setPageNumber(Long pageNumber) {
        this.pageNumber = pageNumber;
        return this;
    }
    public Long getPageNumber() {
        return this.pageNumber;
    }

    public ListBuildTasksResponse setPageSize(Integer pageSize) {
        this.pageSize = pageSize;
        return this;
    }
    public Integer getPageSize() {
        return this.pageSize;
    }

    public ListBuildTasksResponse setTotal(Long total) {
        this.total = total;
        return this;
    }
    public Long getTotal() {
        return this.total;
    }

    public ListBuildTasksResponse setItems(java.util.List<ListBuildTasksResponseItems> items) {
        this.items = items;
        return this;
    }
    public java.util.List<ListBuildTasksResponseItems> getItems() {
        return this.items;
    }

    public static class ListBuildTasksResponseItemsProductFileInfos extends TeaModel {
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
        public Long size;

        @NameInMap("BuildTaskBid")
        @Validation(required = true)
        public String buildTaskBid;

        @NameInMap("FileKey")
        @Validation(required = true)
        public String fileKey;

        @NameInMap("Md5")
        @Validation(required = true)
        public String md5;

        public static ListBuildTasksResponseItemsProductFileInfos build(java.util.Map<String, ?> map) throws Exception {
            ListBuildTasksResponseItemsProductFileInfos self = new ListBuildTasksResponseItemsProductFileInfos();
            return TeaModel.build(map, self);
        }

        public ListBuildTasksResponseItemsProductFileInfos setFileName(String fileName) {
            this.fileName = fileName;
            return this;
        }
        public String getFileName() {
            return this.fileName;
        }

        public ListBuildTasksResponseItemsProductFileInfos setFileSignUrl(String fileSignUrl) {
            this.fileSignUrl = fileSignUrl;
            return this;
        }
        public String getFileSignUrl() {
            return this.fileSignUrl;
        }

        public ListBuildTasksResponseItemsProductFileInfos setFileType(String fileType) {
            this.fileType = fileType;
            return this;
        }
        public String getFileType() {
            return this.fileType;
        }

        public ListBuildTasksResponseItemsProductFileInfos setSize(Long size) {
            this.size = size;
            return this;
        }
        public Long getSize() {
            return this.size;
        }

        public ListBuildTasksResponseItemsProductFileInfos setBuildTaskBid(String buildTaskBid) {
            this.buildTaskBid = buildTaskBid;
            return this;
        }
        public String getBuildTaskBid() {
            return this.buildTaskBid;
        }

        public ListBuildTasksResponseItemsProductFileInfos setFileKey(String fileKey) {
            this.fileKey = fileKey;
            return this;
        }
        public String getFileKey() {
            return this.fileKey;
        }

        public ListBuildTasksResponseItemsProductFileInfos setMd5(String md5) {
            this.md5 = md5;
            return this;
        }
        public String getMd5() {
            return this.md5;
        }

    }

    public static class ListBuildTasksResponseItemsAccountInfo extends TeaModel {
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

        public static ListBuildTasksResponseItemsAccountInfo build(java.util.Map<String, ?> map) throws Exception {
            ListBuildTasksResponseItemsAccountInfo self = new ListBuildTasksResponseItemsAccountInfo();
            return TeaModel.build(map, self);
        }

        public ListBuildTasksResponseItemsAccountInfo setUid(String uid) {
            this.uid = uid;
            return this;
        }
        public String getUid() {
            return this.uid;
        }

        public ListBuildTasksResponseItemsAccountInfo setUsername(String username) {
            this.username = username;
            return this;
        }
        public String getUsername() {
            return this.username;
        }

        public ListBuildTasksResponseItemsAccountInfo setDisplayName(String displayName) {
            this.displayName = displayName;
            return this;
        }
        public String getDisplayName() {
            return this.displayName;
        }

        public ListBuildTasksResponseItemsAccountInfo setEmail(String email) {
            this.email = email;
            return this;
        }
        public String getEmail() {
            return this.email;
        }

    }

    public static class ListBuildTasksResponseItems extends TeaModel {
        @NameInMap("BuildTaskBid")
        @Validation(required = true)
        public String buildTaskBid;

        @NameInMap("TemplateName")
        @Validation(required = true)
        public String templateName;

        @NameInMap("TemplateType")
        @Validation(required = true)
        public String templateType;

        @NameInMap("Branch")
        @Validation(required = true)
        public String branch;

        @NameInMap("BuildTaskStatus")
        @Validation(required = true)
        public String buildTaskStatus;

        @NameInMap("BuildStartTime")
        @Validation(required = true)
        public Long buildStartTime;

        @NameInMap("BuildEndTime")
        @Validation(required = true)
        public Long buildEndTime;

        @NameInMap("GitCommit")
        @Validation(required = true)
        public String gitCommit;

        @NameInMap("BuildConfigBid")
        @Validation(required = true)
        public String buildConfigBid;

        @NameInMap("ProductFileInfos")
        @Validation(required = true)
        public java.util.List<ListBuildTasksResponseItemsProductFileInfos> productFileInfos;

        @NameInMap("AccountInfo")
        @Validation(required = true)
        public ListBuildTasksResponseItemsAccountInfo accountInfo;

        public static ListBuildTasksResponseItems build(java.util.Map<String, ?> map) throws Exception {
            ListBuildTasksResponseItems self = new ListBuildTasksResponseItems();
            return TeaModel.build(map, self);
        }

        public ListBuildTasksResponseItems setBuildTaskBid(String buildTaskBid) {
            this.buildTaskBid = buildTaskBid;
            return this;
        }
        public String getBuildTaskBid() {
            return this.buildTaskBid;
        }

        public ListBuildTasksResponseItems setTemplateName(String templateName) {
            this.templateName = templateName;
            return this;
        }
        public String getTemplateName() {
            return this.templateName;
        }

        public ListBuildTasksResponseItems setTemplateType(String templateType) {
            this.templateType = templateType;
            return this;
        }
        public String getTemplateType() {
            return this.templateType;
        }

        public ListBuildTasksResponseItems setBranch(String branch) {
            this.branch = branch;
            return this;
        }
        public String getBranch() {
            return this.branch;
        }

        public ListBuildTasksResponseItems setBuildTaskStatus(String buildTaskStatus) {
            this.buildTaskStatus = buildTaskStatus;
            return this;
        }
        public String getBuildTaskStatus() {
            return this.buildTaskStatus;
        }

        public ListBuildTasksResponseItems setBuildStartTime(Long buildStartTime) {
            this.buildStartTime = buildStartTime;
            return this;
        }
        public Long getBuildStartTime() {
            return this.buildStartTime;
        }

        public ListBuildTasksResponseItems setBuildEndTime(Long buildEndTime) {
            this.buildEndTime = buildEndTime;
            return this;
        }
        public Long getBuildEndTime() {
            return this.buildEndTime;
        }

        public ListBuildTasksResponseItems setGitCommit(String gitCommit) {
            this.gitCommit = gitCommit;
            return this;
        }
        public String getGitCommit() {
            return this.gitCommit;
        }

        public ListBuildTasksResponseItems setBuildConfigBid(String buildConfigBid) {
            this.buildConfigBid = buildConfigBid;
            return this;
        }
        public String getBuildConfigBid() {
            return this.buildConfigBid;
        }

        public ListBuildTasksResponseItems setProductFileInfos(java.util.List<ListBuildTasksResponseItemsProductFileInfos> productFileInfos) {
            this.productFileInfos = productFileInfos;
            return this;
        }
        public java.util.List<ListBuildTasksResponseItemsProductFileInfos> getProductFileInfos() {
            return this.productFileInfos;
        }

        public ListBuildTasksResponseItems setAccountInfo(ListBuildTasksResponseItemsAccountInfo accountInfo) {
            this.accountInfo = accountInfo;
            return this;
        }
        public ListBuildTasksResponseItemsAccountInfo getAccountInfo() {
            return this.accountInfo;
        }

    }

}
