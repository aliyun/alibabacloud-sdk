// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.emas_devops20191204.models;

import com.aliyun.tea.*;

public class CreateBuildTaskRequest extends TeaModel {
    @NameInMap("IterationBid")
    @Validation(required = true)
    public String iterationBid;

    @NameInMap("BuildConfigBid")
    @Validation(required = true)
    public String buildConfigBid;

    @NameInMap("AppKey")
    @Validation(required = true)
    public String appKey;

    @NameInMap("CodeAddress")
    @Validation(required = true)
    public String codeAddress;

    @NameInMap("Branch")
    @Validation(required = true)
    public String branch;

    @NameInMap("TriggerType")
    @Validation(required = true)
    public String triggerType;

    @NameInMap("VersionName")
    public String versionName;

    @NameInMap("VersionCode")
    public String versionCode;

    public static CreateBuildTaskRequest build(java.util.Map<String, ?> map) throws Exception {
        CreateBuildTaskRequest self = new CreateBuildTaskRequest();
        return TeaModel.build(map, self);
    }

    public CreateBuildTaskRequest setIterationBid(String iterationBid) {
        this.iterationBid = iterationBid;
        return this;
    }
    public String getIterationBid() {
        return this.iterationBid;
    }

    public CreateBuildTaskRequest setBuildConfigBid(String buildConfigBid) {
        this.buildConfigBid = buildConfigBid;
        return this;
    }
    public String getBuildConfigBid() {
        return this.buildConfigBid;
    }

    public CreateBuildTaskRequest setAppKey(String appKey) {
        this.appKey = appKey;
        return this;
    }
    public String getAppKey() {
        return this.appKey;
    }

    public CreateBuildTaskRequest setCodeAddress(String codeAddress) {
        this.codeAddress = codeAddress;
        return this;
    }
    public String getCodeAddress() {
        return this.codeAddress;
    }

    public CreateBuildTaskRequest setBranch(String branch) {
        this.branch = branch;
        return this;
    }
    public String getBranch() {
        return this.branch;
    }

    public CreateBuildTaskRequest setTriggerType(String triggerType) {
        this.triggerType = triggerType;
        return this;
    }
    public String getTriggerType() {
        return this.triggerType;
    }

    public CreateBuildTaskRequest setVersionName(String versionName) {
        this.versionName = versionName;
        return this;
    }
    public String getVersionName() {
        return this.versionName;
    }

    public CreateBuildTaskRequest setVersionCode(String versionCode) {
        this.versionCode = versionCode;
        return this;
    }
    public String getVersionCode() {
        return this.versionCode;
    }

}
