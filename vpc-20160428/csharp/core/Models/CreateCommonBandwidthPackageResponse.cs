// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class CreateCommonBandwidthPackageResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("BandwidthPackageId")]
        [Validation(Required=true)]
        public string BandwidthPackageId { get; set; }

        [NameInMap("ResourceGroupId")]
        [Validation(Required=true)]
        public string ResourceGroupId { get; set; }

    }

}
