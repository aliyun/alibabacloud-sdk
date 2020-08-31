// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class UpdateOmniSecCheckConfigRequest extends TeaModel {
    @NameInMap("Name")
    public String name;

    @NameInMap("CheckDetailDTO")
    public java.util.List<UpdateOmniSecCheckConfigRequestCheckDetailDTO> checkDetailDTO;

    @NameInMap("Extras")
    public java.util.Map<String, ?> extras;

    @NameInMap("ConfId")
    @Validation(required = true)
    public Long confId;

    @NameInMap("Valid")
    public Boolean valid;

    @NameInMap("Accessible")
    public Boolean accessible;

    @NameInMap("Spec")
    public String spec;

    public static UpdateOmniSecCheckConfigRequest build(java.util.Map<String, ?> map) throws Exception {
        UpdateOmniSecCheckConfigRequest self = new UpdateOmniSecCheckConfigRequest();
        return TeaModel.build(map, self);
    }

    public UpdateOmniSecCheckConfigRequest setName(String name) {
        this.name = name;
        return this;
    }
    public String getName() {
        return this.name;
    }

    public UpdateOmniSecCheckConfigRequest setCheckDetailDTO(java.util.List<UpdateOmniSecCheckConfigRequestCheckDetailDTO> checkDetailDTO) {
        this.checkDetailDTO = checkDetailDTO;
        return this;
    }
    public java.util.List<UpdateOmniSecCheckConfigRequestCheckDetailDTO> getCheckDetailDTO() {
        return this.checkDetailDTO;
    }

    public UpdateOmniSecCheckConfigRequest setExtras(java.util.Map<String, ?> extras) {
        this.extras = extras;
        return this;
    }
    public java.util.Map<String, ?> getExtras() {
        return this.extras;
    }

    public UpdateOmniSecCheckConfigRequest setConfId(Long confId) {
        this.confId = confId;
        return this;
    }
    public Long getConfId() {
        return this.confId;
    }

    public UpdateOmniSecCheckConfigRequest setValid(Boolean valid) {
        this.valid = valid;
        return this;
    }
    public Boolean getValid() {
        return this.valid;
    }

    public UpdateOmniSecCheckConfigRequest setAccessible(Boolean accessible) {
        this.accessible = accessible;
        return this;
    }
    public Boolean getAccessible() {
        return this.accessible;
    }

    public UpdateOmniSecCheckConfigRequest setSpec(String spec) {
        this.spec = spec;
        return this;
    }
    public String getSpec() {
        return this.spec;
    }

    public static class UpdateOmniSecCheckConfigRequestCheckDetailDTO extends TeaModel {
        @NameInMap("CheckIntervalUnit")
        public String checkIntervalUnit;

        @NameInMap("CheckIntervalVal")
        public Integer checkIntervalVal;

        @NameInMap("CheckExtras")
        public String checkExtras;

        @NameInMap("CheckType")
        public String checkType;

        public static UpdateOmniSecCheckConfigRequestCheckDetailDTO build(java.util.Map<String, ?> map) throws Exception {
            UpdateOmniSecCheckConfigRequestCheckDetailDTO self = new UpdateOmniSecCheckConfigRequestCheckDetailDTO();
            return TeaModel.build(map, self);
        }

        public UpdateOmniSecCheckConfigRequestCheckDetailDTO setCheckIntervalUnit(String checkIntervalUnit) {
            this.checkIntervalUnit = checkIntervalUnit;
            return this;
        }
        public String getCheckIntervalUnit() {
            return this.checkIntervalUnit;
        }

        public UpdateOmniSecCheckConfigRequestCheckDetailDTO setCheckIntervalVal(Integer checkIntervalVal) {
            this.checkIntervalVal = checkIntervalVal;
            return this;
        }
        public Integer getCheckIntervalVal() {
            return this.checkIntervalVal;
        }

        public UpdateOmniSecCheckConfigRequestCheckDetailDTO setCheckExtras(String checkExtras) {
            this.checkExtras = checkExtras;
            return this;
        }
        public String getCheckExtras() {
            return this.checkExtras;
        }

        public UpdateOmniSecCheckConfigRequestCheckDetailDTO setCheckType(String checkType) {
            this.checkType = checkType;
            return this;
        }
        public String getCheckType() {
            return this.checkType;
        }

    }

}
