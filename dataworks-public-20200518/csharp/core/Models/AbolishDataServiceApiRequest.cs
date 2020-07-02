// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class AbolishDataServiceApiRequest : TeaModel {
        [NameInMap("TenantId")]
        [Validation(Required=true)]
        public long TenantId { get; set; }

        [NameInMap("ProjectId")]
        [Validation(Required=true)]
        public long ProjectId { get; set; }

        [NameInMap("ApiId")]
        [Validation(Required=true)]
        public long ApiId { get; set; }

    }

}
