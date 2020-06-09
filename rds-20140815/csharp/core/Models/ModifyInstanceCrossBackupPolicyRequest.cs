// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class ModifyInstanceCrossBackupPolicyRequest : TeaModel {
        [NameInMap("AccessKeyId")]
        [Validation(Required=false)]
        public string AccessKeyId { get; set; }

        [NameInMap("OwnerId")]
        [Validation(Required=false)]
        public long OwnerId { get; set; }

        [NameInMap("ResourceOwnerAccount")]
        [Validation(Required=false)]
        public string ResourceOwnerAccount { get; set; }

        [NameInMap("ResourceOwnerId")]
        [Validation(Required=false)]
        public long ResourceOwnerId { get; set; }

        [NameInMap("DBInstanceId")]
        [Validation(Required=true)]
        public string DBInstanceId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("CrossBackupType")]
        [Validation(Required=false)]
        public string CrossBackupType { get; set; }

        [NameInMap("LogBackupEnabled")]
        [Validation(Required=false)]
        public string LogBackupEnabled { get; set; }

        [NameInMap("BackupEnabled")]
        [Validation(Required=false)]
        public string BackupEnabled { get; set; }

        [NameInMap("CrossBackupRegion")]
        [Validation(Required=false)]
        public string CrossBackupRegion { get; set; }

        [NameInMap("RetentType")]
        [Validation(Required=false)]
        public int? RetentType { get; set; }

        [NameInMap("Retention")]
        [Validation(Required=false)]
        public int? Retention { get; set; }

    }

}
