// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DeleteCommonBandwidthPackageRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("Force")]
        [Validation(Required=false)]
        public string Force { get; set; }

        [NameInMap("BandwidthPackageId")]
        [Validation(Required=true)]
        public string BandwidthPackageId { get; set; }

    }

}
