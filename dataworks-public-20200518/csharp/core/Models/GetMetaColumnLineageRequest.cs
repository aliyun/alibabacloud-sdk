// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetMetaColumnLineageRequest : TeaModel {
        [NameInMap("ColumnGuid")]
        [Validation(Required=true)]
        public string ColumnGuid { get; set; }

        [NameInMap("Direction")]
        [Validation(Required=true)]
        public string Direction { get; set; }

        [NameInMap("PageNum")]
        [Validation(Required=false)]
        public int? PageNum { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

    }

}
