// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cloudwifi_pop20191118.models;

import com.aliyun.tea.*;

public class SaveApSsidConfigResponse extends TeaModel {
    @NameInMap("Data")
    @Validation(required = true)
    public java.util.Map<String, ?> data;

    @NameInMap("IsSuccess")
    @Validation(required = true)
    public Boolean isSuccess;

    @NameInMap("ErrorCode")
    @Validation(required = true)
    public Integer errorCode;

    @NameInMap("ErrorMessage")
    @Validation(required = true)
    public String errorMessage;

    public static SaveApSsidConfigResponse build(java.util.Map<String, ?> map) throws Exception {
        SaveApSsidConfigResponse self = new SaveApSsidConfigResponse();
        return TeaModel.build(map, self);
    }

}
