// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.pts20190810.models;

import com.aliyun.tea.*;

public class RemoveReportsRequest extends TeaModel {
    @NameInMap("ReportIds")
    @Validation(required = true)
    public java.util.Map<String, ?> reportIds;

    public static RemoveReportsRequest build(java.util.Map<String, ?> map) throws Exception {
        RemoveReportsRequest self = new RemoveReportsRequest();
        return TeaModel.build(map, self);
    }

}
