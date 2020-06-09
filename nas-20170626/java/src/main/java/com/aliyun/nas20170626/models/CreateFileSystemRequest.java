// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.nas20170626.models;

import com.aliyun.tea.*;

public class CreateFileSystemRequest extends TeaModel {
    @NameInMap("FileSystemType")
    public String fileSystemType;

    @NameInMap("ChargeType")
    public String chargeType;

    @NameInMap("Duration")
    public Integer duration;

    @NameInMap("Capacity")
    public Long capacity;

    @NameInMap("Bandwidth")
    public Long bandwidth;

    @NameInMap("StorageType")
    @Validation(required = true)
    public String storageType;

    @NameInMap("ZoneId")
    public String zoneId;

    @NameInMap("ProtocolType")
    @Validation(required = true)
    public String protocolType;

    @NameInMap("EncryptType")
    public Integer encryptType;

    @NameInMap("SnapshotId")
    public String snapshotId;

    @NameInMap("VpcId")
    public String vpcId;

    @NameInMap("VSwitchId")
    public String VSwitchId;

    @NameInMap("Description")
    public String description;

    @NameInMap("ClientToken")
    public String clientToken;

    @NameInMap("DryRun")
    public Boolean dryRun;

    public static CreateFileSystemRequest build(java.util.Map<String, ?> map) throws Exception {
        CreateFileSystemRequest self = new CreateFileSystemRequest();
        return TeaModel.build(map, self);
    }

}
