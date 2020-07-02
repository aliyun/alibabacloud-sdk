// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class ListDataServiceApplicationsRequest : TeaModel {
        [NameInMap("PageNumber")]
        [Validation(Required=false)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

        [NameInMap("ProjectIdList")]
        [Validation(Required=true)]
        public string ProjectIdList { get; set; }

        [NameInMap("TenantId")]
        [Validation(Required=true)]
        public long TenantId { get; set; }

    }

}
