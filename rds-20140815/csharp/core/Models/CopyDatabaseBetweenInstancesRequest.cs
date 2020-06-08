// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class CopyDatabaseBetweenInstancesRequest : TeaModel {
        [NameInMap("ResourceOwnerId")]
        [Validation(Required=false)]
        public long ResourceOwnerId { get; set; }

        [NameInMap("DBInstanceId")]
        [Validation(Required=true)]
        public string DBInstanceId { get; set; }

        [NameInMap("TargetDBInstanceId")]
        [Validation(Required=true)]
        public string TargetDBInstanceId { get; set; }

        [NameInMap("DbNames")]
        [Validation(Required=true)]
        public string DbNames { get; set; }

        [NameInMap("BackupId")]
        [Validation(Required=false)]
        public string BackupId { get; set; }

        [NameInMap("RestoreTime")]
        [Validation(Required=false)]
        public string RestoreTime { get; set; }

        [NameInMap("SyncUserPrivilege")]
        [Validation(Required=false)]
        public string SyncUserPrivilege { get; set; }

    }

}
