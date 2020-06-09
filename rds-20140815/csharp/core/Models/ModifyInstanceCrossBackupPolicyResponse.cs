// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class ModifyInstanceCrossBackupPolicyResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBInstanceId")]
        [Validation(Required=true)]
        public string DBInstanceId { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("CrossBackupRegion")]
        [Validation(Required=true)]
        public string CrossBackupRegion { get; set; }

        [NameInMap("CrossBackupType")]
        [Validation(Required=true)]
        public string CrossBackupType { get; set; }

        [NameInMap("BackupEnabled")]
        [Validation(Required=true)]
        public string BackupEnabled { get; set; }

        [NameInMap("LogBackupEnabled")]
        [Validation(Required=true)]
        public string LogBackupEnabled { get; set; }

        [NameInMap("StorageOwner")]
        [Validation(Required=true)]
        public string StorageOwner { get; set; }

        [NameInMap("StorageType")]
        [Validation(Required=true)]
        public string StorageType { get; set; }

        [NameInMap("Endpoint")]
        [Validation(Required=true)]
        public string Endpoint { get; set; }

        [NameInMap("RetentType")]
        [Validation(Required=true)]
        public int? RetentType { get; set; }

        [NameInMap("Retention")]
        [Validation(Required=true)]
        public int? Retention { get; set; }

    }

}
