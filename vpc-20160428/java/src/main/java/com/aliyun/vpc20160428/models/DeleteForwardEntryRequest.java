// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.vpc20160428.models;

import com.aliyun.tea.*;

public class DeleteForwardEntryRequest extends TeaModel {
    @NameInMap("RegionId")
    @Validation(required = true)
    public String regionId;

    @NameInMap("ForwardTableId")
    @Validation(required = true)
    public String forwardTableId;

    @NameInMap("ForwardEntryId")
    @Validation(required = true)
    public String forwardEntryId;

    @NameInMap("ClientToken")
    public String clientToken;

    public static DeleteForwardEntryRequest build(java.util.Map<String, ?> map) throws Exception {
        DeleteForwardEntryRequest self = new DeleteForwardEntryRequest();
        return TeaModel.build(map, self);
    }

}
