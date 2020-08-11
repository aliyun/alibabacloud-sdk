// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class CancelCommonBandwidthPackageIpBandwidthRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("BandwidthPackageId")]
        [Validation(Required=true)]
        public string BandwidthPackageId { get; set; }

        [NameInMap("EipId")]
        [Validation(Required=true)]
        public string EipId { get; set; }

    }

}
