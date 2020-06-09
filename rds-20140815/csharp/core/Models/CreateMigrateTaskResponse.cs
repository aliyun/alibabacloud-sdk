// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class CreateMigrateTaskResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBInstanceId")]
        [Validation(Required=true)]
        public string DBInstanceId { get; set; }

        [NameInMap("TaskId")]
        [Validation(Required=true)]
        public string TaskId { get; set; }

        [NameInMap("DBName")]
        [Validation(Required=true)]
        public string DBName { get; set; }

        [NameInMap("MigrateTaskId")]
        [Validation(Required=true)]
        public string MigrateTaskId { get; set; }

        [NameInMap("BackupMode")]
        [Validation(Required=true)]
        public string BackupMode { get; set; }

    }

}
