// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.BssOpenApi20171214.Models
{
    public class QueryResourcePackageInstancesRequest : TeaModel {
        [NameInMap("ProductCode")]
        [Validation(Required=false)]
        public string ProductCode { get; set; }

        [NameInMap("ExpiryTimeStart")]
        [Validation(Required=false)]
        public string ExpiryTimeStart { get; set; }

        [NameInMap("ExpiryTimeEnd")]
        [Validation(Required=false)]
        public string ExpiryTimeEnd { get; set; }

        [NameInMap("PageNum")]
        [Validation(Required=false)]
        public int? PageNum { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

    }

}
