// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class GetMetaTableLineageRequest : TeaModel {
        [NameInMap("TableGuid")]
        [Validation(Required=true)]
        public string TableGuid { get; set; }

        [NameInMap("Direction")]
        [Validation(Required=true)]
        public string Direction { get; set; }

        [NameInMap("NextPrimaryKey")]
        [Validation(Required=false)]
        public string NextPrimaryKey { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

    }

}
