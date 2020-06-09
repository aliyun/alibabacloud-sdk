// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.polardb20170801.models;

import com.aliyun.tea.*;

public class CreateAccountRequest extends TeaModel {
    @NameInMap("AccessKeyId")
    public String accessKeyId;

    @NameInMap("OwnerId")
    public Long ownerId;

    @NameInMap("ResourceOwnerAccount")
    public String resourceOwnerAccount;

    @NameInMap("ResourceOwnerId")
    public Long resourceOwnerId;

    @NameInMap("OwnerAccount")
    public String ownerAccount;

    @NameInMap("DBClusterId")
    @Validation(required = true)
    public String DBClusterId;

    @NameInMap("AccountName")
    @Validation(required = true)
    public String accountName;

    @NameInMap("AccountPassword")
    @Validation(required = true)
    public String accountPassword;

    @NameInMap("AccountType")
    public String accountType;

    @NameInMap("AccountDescription")
    public String accountDescription;

    @NameInMap("DBName")
    public String DBName;

    @NameInMap("AccountPrivilege")
    public String accountPrivilege;

    public static CreateAccountRequest build(java.util.Map<String, ?> map) throws Exception {
        CreateAccountRequest self = new CreateAccountRequest();
        return TeaModel.build(map, self);
    }

}
