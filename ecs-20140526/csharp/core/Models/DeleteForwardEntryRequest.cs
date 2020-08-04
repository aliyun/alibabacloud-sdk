// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DeleteForwardEntryRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("ForwardTableId")]
        [Validation(Required=true)]
        public string ForwardTableId { get; set; }

        [NameInMap("ForwardEntryId")]
        [Validation(Required=true)]
        public string ForwardEntryId { get; set; }

    }

}
