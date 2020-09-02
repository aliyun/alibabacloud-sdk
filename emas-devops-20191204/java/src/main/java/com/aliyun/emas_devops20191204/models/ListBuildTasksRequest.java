// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.emas_devops20191204.models;

import com.aliyun.tea.*;

public class ListBuildTasksRequest extends TeaModel {
    @NameInMap("AppKey")
    @Validation(required = true)
    public String appKey;

    @NameInMap("IterationBid")
    @Validation(required = true)
    public String iterationBid;

    @NameInMap("BuildTaskKeyWord")
    public String buildTaskKeyWord;

    @NameInMap("TemplateType")
    public String templateType;

    @NameInMap("PageNumber")
    @Validation(required = true)
    public Integer pageNumber;

    @NameInMap("PageSize")
    @Validation(required = true)
    public Integer pageSize;

    public static ListBuildTasksRequest build(java.util.Map<String, ?> map) throws Exception {
        ListBuildTasksRequest self = new ListBuildTasksRequest();
        return TeaModel.build(map, self);
    }

    public ListBuildTasksRequest setAppKey(String appKey) {
        this.appKey = appKey;
        return this;
    }
    public String getAppKey() {
        return this.appKey;
    }

    public ListBuildTasksRequest setIterationBid(String iterationBid) {
        this.iterationBid = iterationBid;
        return this;
    }
    public String getIterationBid() {
        return this.iterationBid;
    }

    public ListBuildTasksRequest setBuildTaskKeyWord(String buildTaskKeyWord) {
        this.buildTaskKeyWord = buildTaskKeyWord;
        return this;
    }
    public String getBuildTaskKeyWord() {
        return this.buildTaskKeyWord;
    }

    public ListBuildTasksRequest setTemplateType(String templateType) {
        this.templateType = templateType;
        return this;
    }
    public String getTemplateType() {
        return this.templateType;
    }

    public ListBuildTasksRequest setPageNumber(Integer pageNumber) {
        this.pageNumber = pageNumber;
        return this;
    }
    public Integer getPageNumber() {
        return this.pageNumber;
    }

    public ListBuildTasksRequest setPageSize(Integer pageSize) {
        this.pageSize = pageSize;
        return this;
    }
    public Integer getPageSize() {
        return this.pageSize;
    }

}
