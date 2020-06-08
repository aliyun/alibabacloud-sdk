// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DeleteBackupFileResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DeletedBaksetIds")]
        [Validation(Required=true)]
        public DeleteBackupFileResponseDeletedBaksetIds DeletedBaksetIds { get; set; }
        public class DeleteBackupFileResponseDeletedBaksetIds : TeaModel {
            [NameInMap("DeletedBaksetIds")]
            [Validation(Required=true)]
            public List<string> DeletedBaksetIds { get; set; }
        };

    }

}
