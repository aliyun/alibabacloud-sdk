// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class CreateMigrateTaskRequest : TeaModel {
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

        [NameInMap("DBName")]
        [Validation(Required=true)]
        public string DBName { get; set; }

        [NameInMap("BackupMode")]
        [Validation(Required=true)]
        public string BackupMode { get; set; }

        [NameInMap("IsOnlineDB")]
        [Validation(Required=true)]
        public string IsOnlineDB { get; set; }

        [NameInMap("CheckDBMode")]
        [Validation(Required=false)]
        public string CheckDBMode { get; set; }

        [NameInMap("OssObjectPositions")]
        [Validation(Required=false)]
        public string OssObjectPositions { get; set; }

        [NameInMap("OSSUrls")]
        [Validation(Required=false)]
        public string OSSUrls { get; set; }

        [NameInMap("MigrateTaskId")]
        [Validation(Required=false)]
        public string MigrateTaskId { get; set; }

    }

}
