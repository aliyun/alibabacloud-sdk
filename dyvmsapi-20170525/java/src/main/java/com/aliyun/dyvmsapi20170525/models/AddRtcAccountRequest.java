// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.dyvmsapi20170525.models;

import com.aliyun.tea.*;

public class AddRtcAccountRequest extends TeaModel {
    @NameInMap("AccessKeyId")
    public String accessKeyId;

    @NameInMap("OwnerId")
    public Long ownerId;

    @NameInMap("ResourceOwnerAccount")
    public String resourceOwnerAccount;

    @NameInMap("ResourceOwnerId")
    public Long resourceOwnerId;

    @NameInMap("DeviceId")
    public String deviceId;

    public static AddRtcAccountRequest build(java.util.Map<String, ?> map) throws Exception {
        AddRtcAccountRequest self = new AddRtcAccountRequest();
        return TeaModel.build(map, self);
    }

}
