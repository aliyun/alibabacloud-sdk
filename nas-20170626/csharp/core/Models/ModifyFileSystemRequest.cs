// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class ModifyFileSystemRequest : TeaModel {
        [NameInMap("FileSystemId")]
        [Validation(Required=true)]
        public string FileSystemId { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

    }

}
