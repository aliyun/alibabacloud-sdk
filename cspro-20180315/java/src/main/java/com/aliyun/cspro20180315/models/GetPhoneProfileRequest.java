// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.cspro20180315.models;

import com.aliyun.tea.*;

public class GetPhoneProfileRequest extends TeaModel {
    @NameInMap("Phone")
    @Validation(required = true)
    public String phone;

    public static GetPhoneProfileRequest build(java.util.Map<String, ?> map) throws Exception {
        GetPhoneProfileRequest self = new GetPhoneProfileRequest();
        return TeaModel.build(map, self);
    }

    public GetPhoneProfileRequest setPhone(String phone) {
        this.phone = phone;
        return this;
    }
    public String getPhone() {
        return this.phone;
    }

}
