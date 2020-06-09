// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class DeleteAccessGroupRequest : TeaModel {
        [NameInMap("AccessGroupName")]
        [Validation(Required=true)]
        public string AccessGroupName { get; set; }

        [NameInMap("FileSystemType")]
        [Validation(Required=false)]
        public string FileSystemType { get; set; }

    }

}
