// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class CreateDBInstanceRequest : TeaModel {
        [NameInMap("ResourceOwnerId")]
        [Validation(Required=false)]
        public long ResourceOwnerId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("Engine")]
        [Validation(Required=true)]
        public string Engine { get; set; }

        [NameInMap("EngineVersion")]
        [Validation(Required=true)]
        public string EngineVersion { get; set; }

        [NameInMap("DBInstanceClass")]
        [Validation(Required=true)]
        public string DBInstanceClass { get; set; }

        [NameInMap("DBInstanceStorage")]
        [Validation(Required=true)]
        public int? DBInstanceStorage { get; set; }

        [NameInMap("SystemDBCharset")]
        [Validation(Required=false)]
        public string SystemDBCharset { get; set; }

        [NameInMap("DBInstanceNetType")]
        [Validation(Required=true)]
        public string DBInstanceNetType { get; set; }

        [NameInMap("DBInstanceDescription")]
        [Validation(Required=false)]
        public string DBInstanceDescription { get; set; }

        [NameInMap("SecurityIPList")]
        [Validation(Required=true)]
        public string SecurityIPList { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("PayType")]
        [Validation(Required=true)]
        public string PayType { get; set; }

        [NameInMap("ZoneId")]
        [Validation(Required=false)]
        public string ZoneId { get; set; }

        [NameInMap("InstanceNetworkType")]
        [Validation(Required=false)]
        public string InstanceNetworkType { get; set; }

        [NameInMap("ConnectionMode")]
        [Validation(Required=false)]
        public string ConnectionMode { get; set; }

        [NameInMap("VPCId")]
        [Validation(Required=false)]
        public string VPCId { get; set; }

        [NameInMap("VSwitchId")]
        [Validation(Required=false)]
        public string VSwitchId { get; set; }

        [NameInMap("PrivateIpAddress")]
        [Validation(Required=false)]
        public string PrivateIpAddress { get; set; }

        [NameInMap("UsedTime")]
        [Validation(Required=false)]
        public string UsedTime { get; set; }

        [NameInMap("Period")]
        [Validation(Required=false)]
        public string Period { get; set; }

        [NameInMap("ResourceGroupId")]
        [Validation(Required=false)]
        public string ResourceGroupId { get; set; }

        [NameInMap("DBInstanceStorageType")]
        [Validation(Required=false)]
        public string DBInstanceStorageType { get; set; }

        [NameInMap("BusinessInfo")]
        [Validation(Required=false)]
        public string BusinessInfo { get; set; }

        [NameInMap("EncryptionKey")]
        [Validation(Required=false)]
        public string EncryptionKey { get; set; }

        [NameInMap("RoleARN")]
        [Validation(Required=false)]
        public string RoleARN { get; set; }

        [NameInMap("AutoRenew")]
        [Validation(Required=false)]
        public string AutoRenew { get; set; }

        [NameInMap("Category")]
        [Validation(Required=false)]
        public string Category { get; set; }

        [NameInMap("DedicatedHostGroupId")]
        [Validation(Required=false)]
        public string DedicatedHostGroupId { get; set; }

        [NameInMap("TargetDedicatedHostIdForMaster")]
        [Validation(Required=false)]
        public string TargetDedicatedHostIdForMaster { get; set; }

        [NameInMap("TargetDedicatedHostIdForSlave")]
        [Validation(Required=false)]
        public string TargetDedicatedHostIdForSlave { get; set; }

        [NameInMap("TargetDedicatedHostIdForLog")]
        [Validation(Required=false)]
        public string TargetDedicatedHostIdForLog { get; set; }

        [NameInMap("DBParamGroupId")]
        [Validation(Required=false)]
        public string DBParamGroupId { get; set; }

        [NameInMap("DBTimeZone")]
        [Validation(Required=false)]
        public string DBTimeZone { get; set; }

        [NameInMap("DBIsIgnoreCase")]
        [Validation(Required=false)]
        public string DBIsIgnoreCase { get; set; }

    }

}
