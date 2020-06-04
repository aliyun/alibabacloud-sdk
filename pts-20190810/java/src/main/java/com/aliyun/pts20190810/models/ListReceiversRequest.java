// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.pts20190810.models;

import com.aliyun.tea.*;

public class ListReceiversRequest extends TeaModel {
    @NameInMap("PageNumber")
    @Validation(required = true)
    public Integer pageNumber;

    @NameInMap("PageSize")
    @Validation(required = true)
    public Integer pageSize;

    public static ListReceiversRequest build(java.util.Map<String, ?> map) throws Exception {
        ListReceiversRequest self = new ListReceiversRequest();
        return TeaModel.build(map, self);
    }

}
