// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class DeleteCostUnitRequest : TeaModel {
        [NameInMap("OwnerUid")]
        [Validation(Required=true)]
        public long OwnerUid { get; set; }

        [NameInMap("UnitId")]
        [Validation(Required=true)]
        public long UnitId { get; set; }

    }

}
