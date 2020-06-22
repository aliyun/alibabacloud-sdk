// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryCostUnitRequest : TeaModel {
        [NameInMap("OwnerUid")]
        [Validation(Required=true)]
        public long OwnerUid { get; set; }

        [NameInMap("ParentUnitId")]
        [Validation(Required=true)]
        public long ParentUnitId { get; set; }

        [NameInMap("PageNum")]
        [Validation(Required=false)]
        public int? PageNum { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

    }

}
