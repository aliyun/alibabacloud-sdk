// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class AddOmniSecCheckConfigRequest extends TeaModel {
    @NameInMap("Name")
    @Validation(required = true)
    public String name;

    @NameInMap("ConfType")
    @Validation(required = true)
    public String confType;

    @NameInMap("CheckTarget")
    @Validation(required = true)
    public String checkTarget;

    @NameInMap("CheckDetailDTO")
    @Validation(required = true)
    public java.util.List<AddOmniSecCheckConfigRequestCheckDetailDTO> checkDetailDTO;

    @NameInMap("Extras")
    public java.util.Map<String, ?> extras;

    @NameInMap("Spec")
    public String spec;

    public static AddOmniSecCheckConfigRequest build(java.util.Map<String, ?> map) throws Exception {
        AddOmniSecCheckConfigRequest self = new AddOmniSecCheckConfigRequest();
        return TeaModel.build(map, self);
    }

    public AddOmniSecCheckConfigRequest setName(String name) {
        this.name = name;
        return this;
    }
    public String getName() {
        return this.name;
    }

    public AddOmniSecCheckConfigRequest setConfType(String confType) {
        this.confType = confType;
        return this;
    }
    public String getConfType() {
        return this.confType;
    }

    public AddOmniSecCheckConfigRequest setCheckTarget(String checkTarget) {
        this.checkTarget = checkTarget;
        return this;
    }
    public String getCheckTarget() {
        return this.checkTarget;
    }

    public AddOmniSecCheckConfigRequest setCheckDetailDTO(java.util.List<AddOmniSecCheckConfigRequestCheckDetailDTO> checkDetailDTO) {
        this.checkDetailDTO = checkDetailDTO;
        return this;
    }
    public java.util.List<AddOmniSecCheckConfigRequestCheckDetailDTO> getCheckDetailDTO() {
        return this.checkDetailDTO;
    }

    public AddOmniSecCheckConfigRequest setExtras(java.util.Map<String, ?> extras) {
        this.extras = extras;
        return this;
    }
    public java.util.Map<String, ?> getExtras() {
        return this.extras;
    }

    public AddOmniSecCheckConfigRequest setSpec(String spec) {
        this.spec = spec;
        return this;
    }
    public String getSpec() {
        return this.spec;
    }

    public static class AddOmniSecCheckConfigRequestCheckDetailDTO extends TeaModel {
        @NameInMap("CheckType")
        public String checkType;

        @NameInMap("CheckIntervalUnit")
        public String checkIntervalUnit;

        @NameInMap("CheckIntervalVal")
        public Integer checkIntervalVal;

        @NameInMap("CheckExtras")
        public String checkExtras;

        public static AddOmniSecCheckConfigRequestCheckDetailDTO build(java.util.Map<String, ?> map) throws Exception {
            AddOmniSecCheckConfigRequestCheckDetailDTO self = new AddOmniSecCheckConfigRequestCheckDetailDTO();
            return TeaModel.build(map, self);
        }

        public AddOmniSecCheckConfigRequestCheckDetailDTO setCheckType(String checkType) {
            this.checkType = checkType;
            return this;
        }
        public String getCheckType() {
            return this.checkType;
        }

        public AddOmniSecCheckConfigRequestCheckDetailDTO setCheckIntervalUnit(String checkIntervalUnit) {
            this.checkIntervalUnit = checkIntervalUnit;
            return this;
        }
        public String getCheckIntervalUnit() {
            return this.checkIntervalUnit;
        }

        public AddOmniSecCheckConfigRequestCheckDetailDTO setCheckIntervalVal(Integer checkIntervalVal) {
            this.checkIntervalVal = checkIntervalVal;
            return this;
        }
        public Integer getCheckIntervalVal() {
            return this.checkIntervalVal;
        }

        public AddOmniSecCheckConfigRequestCheckDetailDTO setCheckExtras(String checkExtras) {
            this.checkExtras = checkExtras;
            return this;
        }
        public String getCheckExtras() {
            return this.checkExtras;
        }

    }

}
