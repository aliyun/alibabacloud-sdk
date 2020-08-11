// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class ModifyExpressCloudConnectionAttributeRequest : TeaModel {
        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("Name")]
        [Validation(Required=false)]
        public string Name { get; set; }

        [NameInMap("EccId")]
        [Validation(Required=true)]
        public string EccId { get; set; }

        [NameInMap("BgpAs")]
        [Validation(Required=false)]
        public string BgpAs { get; set; }

        [NameInMap("PeIp")]
        [Validation(Required=false)]
        public string PeIp { get; set; }

        [NameInMap("CeIp")]
        [Validation(Required=false)]
        public string CeIp { get; set; }

    }

}
