// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class CreateCostUnitRequest : TeaModel {
        [NameInMap("UnitEntityList")]
        [Validation(Required=false)]
        public List<CreateCostUnitRequestUnitEntityList> UnitEntityList { get; set; }
        public class CreateCostUnitRequestUnitEntityList : TeaModel {
            [NameInMap("OwnerUid")]
            [Validation(Required=true)]
            public long OwnerUid { get; set; }

            [NameInMap("ParentUnitId")]
            [Validation(Required=true)]
            public long ParentUnitId { get; set; }

            [NameInMap("UnitName")]
            [Validation(Required=true)]
            public string UnitName { get; set; }

        }

    }

}
