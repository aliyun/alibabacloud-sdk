// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class CancelDirQuotaRequest : TeaModel {
        [NameInMap("FileSystemId")]
        [Validation(Required=true)]
        public string FileSystemId { get; set; }

        [NameInMap("Path")]
        [Validation(Required=true)]
        public string Path { get; set; }

        [NameInMap("UserType")]
        [Validation(Required=true)]
        public string UserType { get; set; }

        [NameInMap("UserId")]
        [Validation(Required=false)]
        public string UserId { get; set; }

    }

}
