// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class DeleteFolderRequest : TeaModel {
        [NameInMap("ProjectId")]
        [Validation(Required=false)]
        public long ProjectId { get; set; }

        [NameInMap("ProjectIdentifier")]
        [Validation(Required=false)]
        public string ProjectIdentifier { get; set; }

        [NameInMap("FolderId")]
        [Validation(Required=true)]
        public string FolderId { get; set; }

    }

}
