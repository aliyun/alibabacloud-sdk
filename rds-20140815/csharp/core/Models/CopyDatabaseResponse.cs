// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class CopyDatabaseResponse : TeaModel {
        [NameInMap("DBName")]
        [Validation(Required=true)]
        public string DBName { get; set; }

        [NameInMap("DBStatus")]
        [Validation(Required=true)]
        public string DBStatus { get; set; }

        [NameInMap("TaskId")]
        [Validation(Required=true)]
        public string TaskId { get; set; }

    }

}
