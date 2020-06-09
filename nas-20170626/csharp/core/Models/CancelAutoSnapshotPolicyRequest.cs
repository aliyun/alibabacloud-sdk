// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class CancelAutoSnapshotPolicyRequest : TeaModel {
        [NameInMap("FileSystemIds")]
        [Validation(Required=true)]
        public string FileSystemIds { get; set; }

    }

}
